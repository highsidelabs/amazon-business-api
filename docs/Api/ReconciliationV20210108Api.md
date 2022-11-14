# AmazonBusinessApi\ReconciliationV20210108Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInvoiceDetailsByOrderLineItems()**](ReconciliationV20210108Api.md#getInvoiceDetailsByOrderLineItems) | **POST** /reconciliation/2021-01-08/invoices | 
[**getTransactions()**](ReconciliationV20210108Api.md#getTransactions) | **GET** /reconciliation/2021-01-08/transactions | 


## `getInvoiceDetailsByOrderLineItems()`

```php
getInvoiceDetailsByOrderLineItems($invoice_details_by_order_line_items_request): \AmazonBusinessApi\Model\ReconciliationV20210108\InvoiceDetailsByOrderLineItemsResponse
```



Returns the invoice details for the order line items provided in the request.

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

$apiInstance = new AmazonBusinessApi\Api\ReconciliationV20210108Api($config);
$invoice_details_by_order_line_items_request = new \AmazonBusinessApi\Model\ReconciliationV20210108\InvoiceDetailsByOrderLineItemsRequest(); // \AmazonBusinessApi\Model\ReconciliationV20210108\InvoiceDetailsByOrderLineItemsRequest

try {
    $result = $apiInstance->getInvoiceDetailsByOrderLineItems($invoice_details_by_order_line_items_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReconciliationV20210108Api->getInvoiceDetailsByOrderLineItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_details_by_order_line_items_request** | [**\AmazonBusinessApi\Model\ReconciliationV20210108\InvoiceDetailsByOrderLineItemsRequest**](../Model/ReconciliationV20210108/InvoiceDetailsByOrderLineItemsRequest.md)|  | [optional]

### Return type

[**\AmazonBusinessApi\Model\ReconciliationV20210108\InvoiceDetailsByOrderLineItemsResponse**](../Model/ReconciliationV20210108/InvoiceDetailsByOrderLineItemsResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ReconciliationV20210108 Model list]](../Model/ReconciliationV20210108)
[[README]](../../README.md)

## `getTransactions()`

```php
getTransactions($feed_start_date, $feed_end_date, $next_page_token): \AmazonBusinessApi\Model\ReconciliationV20210108\TransactionsResponse
```



Returns a paginated list of business transactions with feed dates that fall within the date range that you specify.

**Usage Plan:**

| Plan type | Rate (requests per second) | Burst |
| ---- | ---- | ---- |
|Default| .5 | 10 |

The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation.

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

$apiInstance = new AmazonBusinessApi\Api\ReconciliationV20210108Api($config);
$feed_start_date = 'feed_start_date_example'; // string | The lower limit for the search range.
$feed_end_date = 'feed_end_date_example'; // string | The upper limit for the search range.
$next_page_token = 'next_page_token_example'; // string | A page token returned in the response to your previous request. `nextPageToken` is returned when the number of results exceed the page size. To get the next page of results, include `nextPageToken` as the only parameter. When no `nextPageToken` value is returned there are no more pages to return.

try {
    $result = $apiInstance->getTransactions($feed_start_date, $feed_end_date, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReconciliationV20210108Api->getTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feed_start_date** | **string**| The lower limit for the search range. |
 **feed_end_date** | **string**| The upper limit for the search range. |
 **next_page_token** | **string**| A page token returned in the response to your previous request. `nextPageToken` is returned when the number of results exceed the page size. To get the next page of results, include `nextPageToken` as the only parameter. When no `nextPageToken` value is returned there are no more pages to return. | [optional]

### Return type

[**\AmazonBusinessApi\Model\ReconciliationV20210108\TransactionsResponse**](../Model/ReconciliationV20210108/TransactionsResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ReconciliationV20210108 Model list]](../Model/ReconciliationV20210108)
[[README]](../../README.md)
