# AmazonBusinessApi\InvoiceDownloadV20210930Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelReport()**](InvoiceDownloadV20210930Api.md#cancelReport) | **DELETE** /reports/2021-09-30/reports/{reportId} | 
[**createReport()**](InvoiceDownloadV20210930Api.md#createReport) | **POST** /reports/2021-09-30/reports | 
[**getReport()**](InvoiceDownloadV20210930Api.md#getReport) | **GET** /reports/2021-09-30/reports/{reportId} | 
[**getReportDocument()**](InvoiceDownloadV20210930Api.md#getReportDocument) | **GET** /reports/2021-09-30/documents/{reportDocumentId} | 
[**getReports()**](InvoiceDownloadV20210930Api.md#getReports) | **GET** /reports/2021-09-30/reports | 


## `cancelReport()`

```php
cancelReport($report_id)
```



Cancels the report that you specify. Only reports with processingStatus=IN_QUEUE can be cancelled. Cancelled reports are returned in subsequent calls to the getReport and getReports operations.

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

$apiInstance = new AmazonBusinessApi\Api\InvoiceDownloadV20210930Api($config);
$report_id = 'report_id_example'; // string | The identifier for the report. This identifier is unique only in combination with a seller ID.

try {
    $apiInstance->cancelReport($report_id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceDownloadV20210930Api->cancelReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_id** | **string**| The identifier for the report. This identifier is unique only in combination with a seller ID. |

### Return type

void (empty response body)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[InvoiceDownloadV20210930 Model list]](../Model/InvoiceDownloadV20210930)
[[README]](../../README.md)

## `createReport()`

```php
createReport($body): \AmazonBusinessApi\Model\InvoiceDownloadV20210930\CreateReportResponse
```



Creates a report.

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

$apiInstance = new AmazonBusinessApi\Api\InvoiceDownloadV20210930Api($config);
$body = new \AmazonBusinessApi\Model\InvoiceDownloadV20210930\CreateReportSpecification(); // \AmazonBusinessApi\Model\InvoiceDownloadV20210930\CreateReportSpecification

try {
    $result = $apiInstance->createReport($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceDownloadV20210930Api->createReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AmazonBusinessApi\Model\InvoiceDownloadV20210930\CreateReportSpecification**](../Model/InvoiceDownloadV20210930/CreateReportSpecification.md)|  |

### Return type

[**\AmazonBusinessApi\Model\InvoiceDownloadV20210930\CreateReportResponse**](../Model/InvoiceDownloadV20210930/CreateReportResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[InvoiceDownloadV20210930 Model list]](../Model/InvoiceDownloadV20210930)
[[README]](../../README.md)

## `getReport()`

```php
getReport($report_id): \AmazonBusinessApi\Model\InvoiceDownloadV20210930\Report
```



Returns report details (including the reportDocumentId, if available) for the report that you specify.

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

$apiInstance = new AmazonBusinessApi\Api\InvoiceDownloadV20210930Api($config);
$report_id = 'report_id_example'; // string | The identifier for the report. This identifier is unique only in combination with a seller ID.

try {
    $result = $apiInstance->getReport($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceDownloadV20210930Api->getReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_id** | **string**| The identifier for the report. This identifier is unique only in combination with a seller ID. |

### Return type

[**\AmazonBusinessApi\Model\InvoiceDownloadV20210930\Report**](../Model/InvoiceDownloadV20210930/Report.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[InvoiceDownloadV20210930 Model list]](../Model/InvoiceDownloadV20210930)
[[README]](../../README.md)

## `getReportDocument()`

```php
getReportDocument($report_document_id): \AmazonBusinessApi\Model\InvoiceDownloadV20210930\ReportDocument
```



Returns the information required for retrieving a report document's contents.

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

$apiInstance = new AmazonBusinessApi\Api\InvoiceDownloadV20210930Api($config);
$report_document_id = 'report_document_id_example'; // string | The identifier for the report document.

try {
    $result = $apiInstance->getReportDocument($report_document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceDownloadV20210930Api->getReportDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_document_id** | **string**| The identifier for the report document. |

### Return type

[**\AmazonBusinessApi\Model\InvoiceDownloadV20210930\ReportDocument**](../Model/InvoiceDownloadV20210930/ReportDocument.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[InvoiceDownloadV20210930 Model list]](../Model/InvoiceDownloadV20210930)
[[README]](../../README.md)

## `getReports()`

```php
getReports($report_types, $processing_statuses, $marketplace_ids, $page_size, $created_since, $created_until, $next_token): \AmazonBusinessApi\Model\InvoiceDownloadV20210930\GetReportsResponse
```



Returns report details for the reports that match the filters that you specify.

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

$apiInstance = new AmazonBusinessApi\Api\InvoiceDownloadV20210930Api($config);
$report_types = array('report_types_example'); // string[] | A list of report types used to filter reports. When reportTypes is provided, the other filter parameters (processingStatuses, marketplaceIds, createdSince, createdUntil) and pageSize may also be provided. Either reportTypes or nextToken is required.
$processing_statuses = array('processing_statuses_example'); // string[] | A list of processing statuses used to filter reports.
$marketplace_ids = array('marketplace_ids_example'); // string[] | A list of marketplace identifiers used to filter reports. The reports returned will match at least one of the marketplaces that you specify.
$page_size = 10; // int | The maximum number of reports to return in a single call.
$created_since = 'created_since_example'; // string | The earliest report creation date and time for reports to include in the response, in ISO 8601 date time format. The default is 90 days ago. Reports are retained for a maximum of 90 days.
$created_until = 'created_until_example'; // string | The latest report creation date and time for reports to include in the response, in ISO 8601 date time format. The default is now.
$next_token = 'next_token_example'; // string | A string token returned in the response to your previous request. nextToken is returned when the number of results exceeds the specified pageSize value. To get the next page of results, call the getReports operation and include this token as the only parameter. Specifying nextToken with any other parameters will cause the request to fail.

try {
    $result = $apiInstance->getReports($report_types, $processing_statuses, $marketplace_ids, $page_size, $created_since, $created_until, $next_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceDownloadV20210930Api->getReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_types** | [**string[]**](../Model/InvoiceDownloadV20210930/string.md)| A list of report types used to filter reports. When reportTypes is provided, the other filter parameters (processingStatuses, marketplaceIds, createdSince, createdUntil) and pageSize may also be provided. Either reportTypes or nextToken is required. | [optional]
 **processing_statuses** | [**string[]**](../Model/InvoiceDownloadV20210930/string.md)| A list of processing statuses used to filter reports. | [optional]
 **marketplace_ids** | [**string[]**](../Model/InvoiceDownloadV20210930/string.md)| A list of marketplace identifiers used to filter reports. The reports returned will match at least one of the marketplaces that you specify. | [optional]
 **page_size** | **int**| The maximum number of reports to return in a single call. | [optional] [default to 10]
 **created_since** | **string**| The earliest report creation date and time for reports to include in the response, in ISO 8601 date time format. The default is 90 days ago. Reports are retained for a maximum of 90 days. | [optional]
 **created_until** | **string**| The latest report creation date and time for reports to include in the response, in ISO 8601 date time format. The default is now. | [optional]
 **next_token** | **string**| A string token returned in the response to your previous request. nextToken is returned when the number of results exceeds the specified pageSize value. To get the next page of results, call the getReports operation and include this token as the only parameter. Specifying nextToken with any other parameters will cause the request to fail. | [optional]

### Return type

[**\AmazonBusinessApi\Model\InvoiceDownloadV20210930\GetReportsResponse**](../Model/InvoiceDownloadV20210930/GetReportsResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[InvoiceDownloadV20210930 Model list]](../Model/InvoiceDownloadV20210930)
[[README]](../../README.md)
