# AmazonBusinessApi\ReportingV20210108Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrdersByOrderDate()**](ReportingV20210108Api.md#getOrdersByOrderDate) | **GET** /reports/2021-01-08/orders | 
[**getOrdersByOrderId()**](ReportingV20210108Api.md#getOrdersByOrderId) | **GET** /reports/2021-01-08/orders/{orderId} | 


## `getOrdersByOrderDate()`

```php
getOrdersByOrderDate($start_date, $end_date, $next_page_token, $purchase_order_number, $include_line_items, $include_shipments, $include_charges): \AmazonBusinessApi\Model\ReportingV20210108\OrdersOutput
```



Returns a paginated list of orders with order dates that fall within the date range that you specify. You can optionally retrieve lineItem, charges and shipments for these orders

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

$apiInstance = new AmazonBusinessApi\Api\ReportingV20210108Api($config);
$start_date = 'start_date_example'; // string | Lower limit for the search range. This date represents the order date
$end_date = 'end_date_example'; // string | Upper limit for the search range, This date represents the order date
$next_page_token = 'next_page_token_example'; // string | A page token returned in the response to your previous request when the number of results exceed the page size(100). To get the next page of results, include nextPageToken as the only parameter. When no nextPageToken value is returned there are no more pages to return. This token needs to be encoded
$purchase_order_number = 'purchase_order_number_example'; // string | The purchase order number associated with the item of a PPI order. This number is created by the buyer. This is an option param to only get order details for a specific purchase order number. **This is currently under testing**
$include_line_items = false; // bool | Option to get all line items associated with the order
$include_shipments = false; // bool | Option to get all shipments associated with the order
$include_charges = false; // bool | Option to get all charges associated with the order

try {
    $result = $apiInstance->getOrdersByOrderDate($start_date, $end_date, $next_page_token, $purchase_order_number, $include_line_items, $include_shipments, $include_charges);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingV20210108Api->getOrdersByOrderDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **string**| Lower limit for the search range. This date represents the order date |
 **end_date** | **string**| Upper limit for the search range, This date represents the order date |
 **next_page_token** | **string**| A page token returned in the response to your previous request when the number of results exceed the page size(100). To get the next page of results, include nextPageToken as the only parameter. When no nextPageToken value is returned there are no more pages to return. This token needs to be encoded | [optional]
 **purchase_order_number** | **string**| The purchase order number associated with the item of a PPI order. This number is created by the buyer. This is an option param to only get order details for a specific purchase order number. **This is currently under testing** | [optional]
 **include_line_items** | **bool**| Option to get all line items associated with the order | [optional] [default to false]
 **include_shipments** | **bool**| Option to get all shipments associated with the order | [optional] [default to false]
 **include_charges** | **bool**| Option to get all charges associated with the order | [optional] [default to false]

### Return type

[**\AmazonBusinessApi\Model\ReportingV20210108\OrdersOutput**](../Model/ReportingV20210108/OrdersOutput.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ReportingV20210108 Model list]](../Model/ReportingV20210108)
[[README]](../../README.md)

## `getOrdersByOrderId()`

```php
getOrdersByOrderId($order_id, $include_line_items, $include_shipments, $include_charges): \AmazonBusinessApi\Model\ReportingV20210108\OrdersOutput
```



API to fetch details for a specific order based on order identifier.You can optionally retrieve lineItem, charges and shipments for this order

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

$apiInstance = new AmazonBusinessApi\Api\ReportingV20210108Api($config);
$order_id = 'order_id_example'; // string | Order identifier to get the corresponding order details
$include_line_items = false; // bool | Option to get all line items associated with the order
$include_shipments = false; // bool | Option to get all shipments associated with the order
$include_charges = false; // bool | Option to get all charges associated with the order

try {
    $result = $apiInstance->getOrdersByOrderId($order_id, $include_line_items, $include_shipments, $include_charges);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingV20210108Api->getOrdersByOrderId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order identifier to get the corresponding order details |
 **include_line_items** | **bool**| Option to get all line items associated with the order | [optional] [default to false]
 **include_shipments** | **bool**| Option to get all shipments associated with the order | [optional] [default to false]
 **include_charges** | **bool**| Option to get all charges associated with the order | [optional] [default to false]

### Return type

[**\AmazonBusinessApi\Model\ReportingV20210108\OrdersOutput**](../Model/ReportingV20210108/OrdersOutput.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ReportingV20210108 Model list]](../Model/ReportingV20210108)
[[README]](../../README.md)
