# AmazonBusinessApi\OrderingV1Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**orderDetails()**](OrderingV1Api.md#orderDetails) | **GET** /ordering/2022-10-30/orders/{externalId} | 
[**placeOrder()**](OrderingV1Api.md#placeOrder) | **POST** /ordering/2022-10-30/orders | 


## `orderDetails()`

```php
orderDetails($external_id, $x_amz_user_email): \AmazonBusinessApi\Model\OrderingV1\OrderDetailsResult
```



Retrieves order details with externalId.

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
$external_id = 'external_id_example'; // string | The unique identifier provided by the customer while placing the order.
$x_amz_user_email = 'x_amz_user_email_example'; // string | The email address of the user requesting this resource.

try {
    $result = $apiInstance->orderDetails($external_id, $x_amz_user_email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderingV1Api->orderDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_id** | **string**| The unique identifier provided by the customer while placing the order. |
 **x_amz_user_email** | **string**| The email address of the user requesting this resource. |

### Return type

[**\AmazonBusinessApi\Model\OrderingV1\OrderDetailsResult**](../Model/OrderingV1/OrderDetailsResult.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Top]](#) [[API list]](../)
[[OrderingV1 Model list]](../Model/OrderingV1)
[[README]](../../README.md)

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
