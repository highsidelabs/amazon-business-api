# AmazonBusinessApi\UserManagementV20210830Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBusinessUserAccount()**](UserManagementV20210830Api.md#createBusinessUserAccount) | **POST** /businessAccounts/2021-08-30/businessUserAccount | 


## `createBusinessUserAccount()`

```php
createBusinessUserAccount($request): object
```



Creates a new Amazon Business user account with a name and email you specify, and an autogenerated password. The account holder will recieve an email invitation to update their password. Adds the holder to the default group with a default role specified by a business administrator, unless either or both are explicitly specified as request parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// See README for more information on the Configuration object's options
$config = new AmazonBusinessApi\Configuration([
    "lwaClientId" => "<LWA client ID>",
    "lwaClientSecret" => "<LWA client secret>",
    "lwaRefreshToken" => "<LWA refresh token>",
    "awsAccessKeyId" => "<AWS access key ID>",
    "awsSecretAccessKey" => "<AWS secret access key>",
    "endpoint" => AmazonBusinessApi\Endpoint::NA  // or another endpoint from lib/Endpoints.php
]);

$apiInstance = new AmazonBusinessApi\Api\UserManagementV20210830Api($config);
$request = new \AmazonBusinessApi\Model\UserManagementV20210830\CreateBusinessUserAccountRequest(); // \AmazonBusinessApi\Model\UserManagementV20210830\CreateBusinessUserAccountRequest | A request for creating a business user account.

try {
    $result = $apiInstance->createBusinessUserAccount($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementV20210830Api->createBusinessUserAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\AmazonBusinessApi\Model\UserManagementV20210830\CreateBusinessUserAccountRequest**](../Model/UserManagementV20210830/CreateBusinessUserAccountRequest.md)| A request for creating a business user account. |

### Return type

**object**

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[UserManagementV20210830 Model list]](../Model/UserManagementV20210830)
[[README]](../../README.md)
