<?php
/**
 * OrderingV1Api
 * PHP version 7.3
 *
 * @category Class
 * @package  AmazonBusinessApi
 */

/**
 * Amazon Business Ordering API Model
 *
 * With Amazon Business ordering API, integrators can build applications that allow Amazon Business customers to define and execute an order request.
 *
 * The version of the OpenAPI document: 1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AmazonBusinessApi\Api;

use AmazonBusinessApi\ApiException;
use AmazonBusinessApi\Configuration;
use AmazonBusinessApi\HeaderSelector;
use AmazonBusinessApi\ObjectSerializer;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;

/**
 * OrderingV1Api Class Doc Comment
 *
 * @category Class
 * @package  AmazonBusinessApi
 */
class OrderingV1Api
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param Configuration   $config
     * @param ClientInterface $client
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        Configuration $config,
        ClientInterface $client = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config;
        $this->headerSelector = $selector ?: new HeaderSelector($this->config);
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex)
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation orderDetails
     *
     * @param  string $external_id The unique identifier provided by the customer while placing the order. (required)
     * @param  string $x_amz_user_email The email address of the user requesting this resource. (required)
     *
     * @throws \AmazonBusinessApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \AmazonBusinessApi\Model\OrderingV1\OrderDetailsResult
     */
    public function orderDetails($external_id, $x_amz_user_email)
    {
        $response = $this->orderDetailsWithHttpInfo($external_id, $x_amz_user_email);
        return $response;
    }

    /**
     * Operation orderDetailsWithHttpInfo
     *
     * @param  string $external_id The unique identifier provided by the customer while placing the order. (required)
     * @param  string $x_amz_user_email The email address of the user requesting this resource. (required)
     *
     * @throws \AmazonBusinessApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \AmazonBusinessApi\Model\OrderingV1\OrderDetailsResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function orderDetailsWithHttpInfo($external_id, $x_amz_user_email)
    {
        $request = $this->orderDetailsRequest($external_id, $x_amz_user_email);
        $signedRequest = $this->config->signRequest(
            $request
        );

        $this->writeDebug($signedRequest);
        $this->writeDebug((string) $signedRequest->getBody());

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($signedRequest, $options);
                $this->writeDebug($response);
                $this->writeDebug((string) $response->getBody());
            } catch (RequestException $e) {
                $hasResponse = !empty($e->hasResponse());
                $body = (string) ($hasResponse ? $e->getResponse()->getBody() : '[NULL response]');
                $this->writeDebug($e->getResponse());
                $this->writeDebug($body);
                throw new ApiException(
                    "[{$e->getCode()}] {$body}",
                    $e->getCode(),
                    $hasResponse ? $e->getResponse()->getHeaders() : [],
                    $body
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $signedRequest->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()->getContents()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\AmazonBusinessApi\Model\OrderingV1\OrderDetailsResult' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\AmazonBusinessApi\Model\OrderingV1\OrderDetailsResult', $response->getHeaders());
                case 400:
                    if ('\AmazonBusinessApi\Model\OrderingV1\ErrorList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\AmazonBusinessApi\Model\OrderingV1\ErrorList', $response->getHeaders());
                case 403:
                    if ('\AmazonBusinessApi\Model\OrderingV1\ErrorList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\AmazonBusinessApi\Model\OrderingV1\ErrorList', $response->getHeaders());
                case 404:
                    if ('\AmazonBusinessApi\Model\OrderingV1\ErrorList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\AmazonBusinessApi\Model\OrderingV1\ErrorList', $response->getHeaders());
                case 429:
                    if ('\AmazonBusinessApi\Model\OrderingV1\ErrorList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\AmazonBusinessApi\Model\OrderingV1\ErrorList', $response->getHeaders());
                case 500:
                    if ('\AmazonBusinessApi\Model\OrderingV1\ErrorList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\AmazonBusinessApi\Model\OrderingV1\ErrorList', $response->getHeaders());
            }

            $returnType = '\AmazonBusinessApi\Model\OrderingV1\OrderDetailsResult';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AmazonBusinessApi\Model\OrderingV1\OrderDetailsResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AmazonBusinessApi\Model\OrderingV1\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AmazonBusinessApi\Model\OrderingV1\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AmazonBusinessApi\Model\OrderingV1\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AmazonBusinessApi\Model\OrderingV1\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AmazonBusinessApi\Model\OrderingV1\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            $this->writeDebug($e);
            throw $e;
        }
    }

    /**
     * Operation orderDetailsAsync
     *
     * 
     *
     * @param  string $external_id The unique identifier provided by the customer while placing the order. (required)
     * @param  string $x_amz_user_email The email address of the user requesting this resource. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function orderDetailsAsync($external_id, $x_amz_user_email)
    {
        return $this->orderDetailsAsyncWithHttpInfo($external_id, $x_amz_user_email);;
    }

    /**
     * Operation orderDetailsAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $external_id The unique identifier provided by the customer while placing the order. (required)
     * @param  string $x_amz_user_email The email address of the user requesting this resource. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function orderDetailsAsyncWithHttpInfo($external_id, $x_amz_user_email)
    {
        $returnType = '\AmazonBusinessApi\Model\OrderingV1\OrderDetailsResult';
        $request = $this->orderDetailsRequest($external_id, $x_amz_user_email);
        $signedRequest = $this->config->signRequest(
            $request
        );

        $this->writeDebug($signedRequest);
        $this->writeDebug((string) $signedRequest->getBody());

        return $this->client
            ->sendAsync($signedRequest, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $this->writeDebug($response);
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $hasResponse = !empty($response);
                    $body = (string) ($hasResponse ? $response->getBody() : '[NULL response]');
                    $this->writeDebug($response);
                    $statusCode = $hasResponse ? $response->getStatusCode() : $exception->getCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $hasResponse ? $response->getHeaders() : [],
                        $body
                    );
                }
            );
    }

    /**
     * Create request for operation 'orderDetails'
     *
     * @param  string $external_id The unique identifier provided by the customer while placing the order. (required)
     * @param  string $x_amz_user_email The email address of the user requesting this resource. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function orderDetailsRequest($external_id, $x_amz_user_email)
    {
        // verify the required parameter 'external_id' is set
        if ($external_id === null || (is_array($external_id) && count($external_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $external_id when calling orderDetails'
            );
        }
        // verify the required parameter 'x_amz_user_email' is set
        if ($x_amz_user_email === null || (is_array($x_amz_user_email) && count($x_amz_user_email) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_amz_user_email when calling orderDetails'
            );
        }

        $resourcePath = '/ordering/2022-10-30/orders/{externalId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($x_amz_user_email !== null) {
            $headerParams['x-amz-user-email'] = ObjectSerializer::toHeaderValue($x_amz_user_email);
        }

        // path params
        if ($external_id !== null) {
            $resourcePath = str_replace(
                '{' . 'externalId' . '}',
                ObjectSerializer::toPathValue($external_id),
                $resourcePath
            );
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation placeOrder
     *
     * @param  \AmazonBusinessApi\Model\OrderingV1\PlaceOrderRequest $request A request to place an order. (required)
     *
     * @throws \AmazonBusinessApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \AmazonBusinessApi\Model\OrderingV1\PlaceOrderResult
     */
    public function placeOrder($request)
    {
        $response = $this->placeOrderWithHttpInfo($request);
        return $response;
    }

    /**
     * Operation placeOrderWithHttpInfo
     *
     * @param  \AmazonBusinessApi\Model\OrderingV1\PlaceOrderRequest $request A request to place an order. (required)
     *
     * @throws \AmazonBusinessApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \AmazonBusinessApi\Model\OrderingV1\PlaceOrderResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function placeOrderWithHttpInfo($request)
    {
        $request = $this->placeOrderRequest($request);
        $signedRequest = $this->config->signRequest(
            $request
        );

        $this->writeDebug($signedRequest);
        $this->writeDebug((string) $signedRequest->getBody());

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($signedRequest, $options);
                $this->writeDebug($response);
                $this->writeDebug((string) $response->getBody());
            } catch (RequestException $e) {
                $hasResponse = !empty($e->hasResponse());
                $body = (string) ($hasResponse ? $e->getResponse()->getBody() : '[NULL response]');
                $this->writeDebug($e->getResponse());
                $this->writeDebug($body);
                throw new ApiException(
                    "[{$e->getCode()}] {$body}",
                    $e->getCode(),
                    $hasResponse ? $e->getResponse()->getHeaders() : [],
                    $body
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $signedRequest->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()->getContents()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\AmazonBusinessApi\Model\OrderingV1\PlaceOrderResult' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\AmazonBusinessApi\Model\OrderingV1\PlaceOrderResult', $response->getHeaders());
                case 400:
                    if ('\AmazonBusinessApi\Model\OrderingV1\ErrorList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\AmazonBusinessApi\Model\OrderingV1\ErrorList', $response->getHeaders());
                case 403:
                    if ('\AmazonBusinessApi\Model\OrderingV1\ErrorList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\AmazonBusinessApi\Model\OrderingV1\ErrorList', $response->getHeaders());
                case 404:
                    if ('\AmazonBusinessApi\Model\OrderingV1\ErrorList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\AmazonBusinessApi\Model\OrderingV1\ErrorList', $response->getHeaders());
                case 415:
                    if ('\AmazonBusinessApi\Model\OrderingV1\ErrorList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\AmazonBusinessApi\Model\OrderingV1\ErrorList', $response->getHeaders());
                case 429:
                    if ('\AmazonBusinessApi\Model\OrderingV1\ErrorList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\AmazonBusinessApi\Model\OrderingV1\ErrorList', $response->getHeaders());
                case 500:
                    if ('\AmazonBusinessApi\Model\OrderingV1\ErrorList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\AmazonBusinessApi\Model\OrderingV1\ErrorList', $response->getHeaders());
            }

            $returnType = '\AmazonBusinessApi\Model\OrderingV1\PlaceOrderResult';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AmazonBusinessApi\Model\OrderingV1\PlaceOrderResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AmazonBusinessApi\Model\OrderingV1\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AmazonBusinessApi\Model\OrderingV1\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AmazonBusinessApi\Model\OrderingV1\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AmazonBusinessApi\Model\OrderingV1\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AmazonBusinessApi\Model\OrderingV1\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AmazonBusinessApi\Model\OrderingV1\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            $this->writeDebug($e);
            throw $e;
        }
    }

    /**
     * Operation placeOrderAsync
     *
     * 
     *
     * @param  \AmazonBusinessApi\Model\OrderingV1\PlaceOrderRequest $request A request to place an order. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function placeOrderAsync($request)
    {
        return $this->placeOrderAsyncWithHttpInfo($request);;
    }

    /**
     * Operation placeOrderAsyncWithHttpInfo
     *
     * 
     *
     * @param  \AmazonBusinessApi\Model\OrderingV1\PlaceOrderRequest $request A request to place an order. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function placeOrderAsyncWithHttpInfo($request)
    {
        $returnType = '\AmazonBusinessApi\Model\OrderingV1\PlaceOrderResult';
        $request = $this->placeOrderRequest($request);
        $signedRequest = $this->config->signRequest(
            $request
        );

        $this->writeDebug($signedRequest);
        $this->writeDebug((string) $signedRequest->getBody());

        return $this->client
            ->sendAsync($signedRequest, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $this->writeDebug($response);
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $hasResponse = !empty($response);
                    $body = (string) ($hasResponse ? $response->getBody() : '[NULL response]');
                    $this->writeDebug($response);
                    $statusCode = $hasResponse ? $response->getStatusCode() : $exception->getCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $hasResponse ? $response->getHeaders() : [],
                        $body
                    );
                }
            );
    }

    /**
     * Create request for operation 'placeOrder'
     *
     * @param  \AmazonBusinessApi\Model\OrderingV1\PlaceOrderRequest $request A request to place an order. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function placeOrderRequest($request)
    {
        // verify the required parameter 'request' is set
        if ($request === null || (is_array($request) && count($request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request when calling placeOrder'
            );
        }

        $resourcePath = '/ordering/2022-10-30/orders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
                []
            );
        }

        // for model (json/xml)
        if (isset($request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($request));
            } else {
                $httpBody = $request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }

    /**
     * Writes to the debug log file
     *
     * @param any $data
     * @return void
     */
    private function writeDebug($data)
    {
        if ($this->config->getDebug()) {
            file_put_contents($this->config->getDebugFile(), '[' . date('Y-m-d H:i:s') . ']: ' . print_r($data, true) . "\n", FILE_APPEND);
        }
    }
}
