# AmazonBusinessApi\OrderingV1Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**placeOrder()**](OrderingV1Api.md#placeOrder) | **POST** /ordering/2022-10-30/orders | 


## `placeOrder()`

```php
placeOrder($request): \AmazonBusinessApi\Model\OrderingV1\PlaceOrderResult
```



Attempts to place an order with the given attributes and expectations from the order request.

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

$apiInstance = new AmazonBusinessApi\Api\OrderingV1Api($config);
$request = new \AmazonBusinessApi\Model\OrderingV1\PlaceOrderRequest(); // \AmazonBusinessApi\Model\OrderingV1\PlaceOrderRequest | A request to place an order.

try {
    $result = $apiInstance->placeOrder($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderingV1Api->placeOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\AmazonBusinessApi\Model\OrderingV1\PlaceOrderRequest**](../Model/OrderingV1/PlaceOrderRequest.md)| A request to place an order. |

### Return type

[**\AmazonBusinessApi\Model\OrderingV1\PlaceOrderResult**](../Model/OrderingV1/PlaceOrderResult.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Top]](#) [[API list]](../)
[[OrderingV1 Model list]](../Model/OrderingV1)
[[README]](../../README.md)
