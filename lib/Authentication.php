<?php

namespace AmazonBusinessApi;

use AmazonBusinessApi\Contract\AuthorizationSignerContract;
use AmazonBusinessApi\Contract\RequestSignerContract;
use Aws\Sts\StsClient;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use RuntimeException;

class Authentication implements RequestSignerContract
{
    private $lwaClientId;
    private $lwaClientSecret;
    private $lwaRefreshToken;
    private $lwaAuthUrl = null;
    private $endpoint;
    private $tokensApi;

    private $onUpdateCreds;
    private $roleArn;

    /** @var \GuzzleHttp\ClientInterface */
    private $client = null;
    private $awsCredentials = null;
    private $roleCredentials = null;

    /**
     * @var string
     */
    private $awsAccessKeyId;
    /**
     * @var string
     */
    private $awsSecretAccessKey;

    /** @var AuthorizationSignerContract */
    private $authorizationSigner;

    /**
     * Authentication constructor.
     * @param array $configurationOptions
     * @throws RuntimeException
     */
    public function __construct(array $configurationOptions)
    {
        $this->client = $configurationOptions['authenticationClient'] ?? new Client();

        $this->lwaAuthUrl = $configurationOptions['lwaAuthUrl'] ?? "https://api.amazon.com/auth/o2/token";
        $this->lwaRefreshToken = $configurationOptions['lwaRefreshToken'] ?? null;
        $this->onUpdateCreds = $configurationOptions['onUpdateCredentials'] ?? null;
        $this->lwaClientId = $configurationOptions['lwaClientId'];
        $this->lwaClientSecret = $configurationOptions['lwaClientSecret'];
        $this->endpoint = $configurationOptions['endpoint'];

        $accessToken = $configurationOptions['accessToken'] ?? null;
        $accessTokenExpiration = $configurationOptions['accessTokenExpiration'] ?? null;

        $this->awsAccessKeyId = $configurationOptions['awsAccessKeyId'];
        $this->awsSecretAccessKey = $configurationOptions['awsSecretAccessKey'];

        $this->roleArn = $configurationOptions['roleArn'] ?? null;

        if ($accessToken !== null && $accessTokenExpiration !== null) {
            $this->populateCredentials($this->awsAccessKeyId, $this->awsSecretAccessKey, $accessToken, $accessTokenExpiration);
        }
        
        $this->tokensApi = $configurationOptions['tokensApi'] ?? null;

        $this->authorizationSigner = $configurationOptions['authorizationSigner'] ?? new AuthorizationSigner($this->endpoint);
    }

    public function getAuthorizationSigner(): AuthorizationSignerContract
    {
        return $this->authorizationSigner;
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException|\RuntimeException
     * @return array
     */
    public function requestLWAToken(): array
    {
        $jsonData = [
            "grant_type" => "refresh_token",
            "client_id" => $this->lwaClientId,
            "client_secret" => $this->lwaClientSecret,
            'refresh_token' => $this->lwaRefreshToken,
        ];

        $lwaTokenRequestHeaders = [
            'Content-Type' => 'application/json',
        ];
        $lwaTokenRequestBody = \GuzzleHttp\json_encode($jsonData);
        $lwaTokenRequest = new Request('POST', $this->lwaAuthUrl, $lwaTokenRequestHeaders, $lwaTokenRequestBody);
        $res = $this->client->send($lwaTokenRequest);

        $body = json_decode($res->getBody(), true);
        $accessToken = $body["access_token"];
        $expirationDate = new \DateTime("now", new \DateTimeZone("UTC"));
        $expirationDate->add(new \DateInterval("PT" . strval($body["expires_in"]) . "S"));
        return [$accessToken, $expirationDate->getTimestamp()];
    }

    public function populateCredentials($key, $secret, ?string $token = null, ?int $expires = null): void
    {
        $creds = null;
        if ($token !== null && $expires !== null) {
            $creds = new Credentials($key, $secret, $token, $expires);
        } else {
            $creds = new Credentials($key, $secret);
        }

        $this->awsCredentials = $creds;
    }

    /**
     * Signs the given request using Amazon Signature V4.
     *
     * @param \GuzzleHttp\Psr7\Request $request The request to sign
     * @return \GuzzleHttp\Psr7\Request The signed request
     */
    public function signRequest(Request $request): Request
    {
        // Check if the relevant AWS creds haven't been fetched or are expiring soon
        $relevantCreds = $this->getAwsCredentials();

        $accessToken = $relevantCreds->getSecurityToken();
        if ($this->roleArn !== null) {
            $relevantCreds = $this->getRoleCredentials();
        }

        $this->authorizationSigner->setRequestTime();
        $signedRequest = $this->authorizationSigner->sign($request, $relevantCreds)
            ->withHeader('x-amz-access-token', $accessToken);

        if ($this->roleArn) {
            $signedRequest = $signedRequest->withHeader("x-amz-security-token", $relevantCreds->getSecurityToken());
        }

        return $signedRequest;
    }

    /**
     * Get credentials for standard API operations.
     *
     * @return \AmazonBusinessApi\Credentials A set of access credentials for making calls to the SP API
     */
    public function getAwsCredentials(): Credentials
    {
        if ($this->needNewCredentials($this->awsCredentials)) {
            $this->newToken();
        }
        return $this->awsCredentials;
    }

    /**
     * Get a security token using a role ARN.
     *
     * @return \AmazonBusinessApi\Credentials A set of STS credentials
     */
    public function getRoleCredentials(): Credentials
    {
        $originalCreds = $this->getAwsCredentials();
        if ($this->needNewCredentials($this->roleCredentials)) {
            $client = new StsClient([
                'sts_regional_endpoints' => 'regional',
                'region' => $this->endpoint['region'],
                'version' => '2011-06-15',
                'credentials' => [
                    'key' => $originalCreds->getAccessKeyId(),
                    'secret' => $originalCreds->getSecretKey(),
                ],
            ]);
            $assumeTime = time();
            $assumed = $client->AssumeRole([
                'RoleArn' => $this->roleArn,
                'RoleSessionName' => "spapi-assumerole-{$assumeTime}",
            ]);
            $credentials = $assumed['Credentials'];
            $this->roleCredentials = new Credentials(
                $credentials['AccessKeyId'],
                $credentials['SecretAccessKey'],
                $credentials['SessionToken'],
                $credentials['Expiration']->getTimestamp()
            );
        }

        return $this->roleCredentials;
    }

    /**
     * Get LWA client ID.
     * 
     * @return string
     */
    public function getLwaClientId(): ?string
    {
        return $this->lwaClientId;
    }

    /**
     * Set LWA client ID.
     * 
     * @param string $lwaClientId
     * @return void
     */
    public function setLwaClientId(string $lwaClientId): void
    {
        $this->lwaClientId = $lwaClientId;
    }

    /**
     * Get LWA client secret.
     * 
     * @return string
     */
    public function getLwaClientSecret(): ?string
    {
        return $this->lwaClientSecret;
    }

    /**
     * Set LWA client secret.
     * 
     * @param string $lwaClientSecret
     * @return void
     */
    public function setLwaClientSecret(string $lwaClientSecret): void
    {
        $this->lwaClientSecret = $lwaClientSecret;
    }

    /**
     * Get LWA refresh token.
     * 
     * @return string|null
     */
    public function getLwaRefreshToken(): ?string
    {
        return $this->lwaRefreshToken;
    }

    /**
     * Set LWA refresh token.
     * 
     * @param string|null $lwaRefreshToken
     * @return void
     */
    public function setLwaRefreshToken(?string $lwaRefreshToken = null): void
    {
        $this->lwaRefreshToken = $lwaRefreshToken;
    }

    /**
     * Get AWS access key ID.
     * 
     * @return string
     */
    public function getAwsAccessKeyId(): ?string
    {
        return $this->awsAccessKeyId;
    }

    /**
     * Set AWS access key ID.
     * 
     * @param string $awsAccessKeyId
     * @return void
     */
    public function setAwsAccessKeyId(string $awsAccessKeyId): void
    {
        $this->awsAccessKeyId = $awsAccessKeyId;
    }

    /**
     * Get AWS secret access key.
     * 
     * @return string|null
     */
    public function getAwsSecretAccessKey(): ?string
    {
        return $this->awsSecretAccessKey;
    }

    /**
     * Set AWS secret access key.
     * 
     * @param string $awsSecretAccessKey
     * @return void
     */
    public function setAwsSecretAccessKey(string $awsSecretAccessKey): void
    {
        $this->awsSecretAccessKey = $awsSecretAccessKey;
    }

    /**
     * Get current SP API endpoint.
     *
     * @return array
     */
    public function getEndpoint(): array
    {
        return $this->endpoint;
    }

    /**
     * Set SP API endpoint. $endpoint should be one of the constants from Endpoint.php.
     * 
     * @param array $endpoint
     * @throws RuntimeException
     * @return void
     */
    public function setEndpoint(array $endpoint): void
    {
        if (!array_key_exists('url', $endpoint) || !array_key_exists('region', $endpoint)) {
            throw new RuntimeException('$endpoint must contain `url` and `region` keys');
        }

        $this->endpoint = $endpoint;
    }

    /**
     * Check if the given credentials need to be created/renewed.
     *
     * @param ?\AmazonBusinessApi\Credentials $creds The credentials to check
     * @return bool True if the credentials need to be updated, false otherwise
     */
    private function needNewCredentials(?Credentials $creds = null): bool
    {
        return $creds === null || $creds->getSecurityToken() === null || $creds->expiresSoon();
    }

    private function newToken(): void
    {
        [$accessToken, $expirationTimestamp] = $this->requestLWAToken();
        $this->populateCredentials($this->awsAccessKeyId, $this->awsSecretAccessKey, $accessToken, $expirationTimestamp);
        if ($this->onUpdateCreds !== null) {
            call_user_func($this->onUpdateCreds, $this->awsCredentials);
        }
    }

    /**
     * @param bool|null $withTime
     * @return string|null
     */
    public function formattedRequestTime(?bool $withTime = true): ?string
    {
        return $this->authorizationSigner->formattedRequestTime($withTime);
    }
}
