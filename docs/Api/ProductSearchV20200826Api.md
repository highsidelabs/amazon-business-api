# AmazonBusinessApi\ProductSearchV20200826Api

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProductsByAsins()**](ProductSearchV20200826Api.md#getProductsByAsins) | **POST** /products/2020-08-26/products/getProductsByAsins | Result for list of ASIN search.
[**productsRequest()**](ProductSearchV20200826Api.md#productsRequest) | **GET** /products/2020-08-26/products/{productId} | Retrieve product data based on an ASIN identifier.
[**searchOffersRequest()**](ProductSearchV20200826Api.md#searchOffersRequest) | **GET** /products/2020-08-26/products/{productId}/offers | Paginated and filtered search for offers of a specific product.
[**searchProductsRequest()**](ProductSearchV20200826Api.md#searchProductsRequest) | **GET** /products/2020-08-26/products | Search for a list products by keyword, and by other additional filter criteria.


## `getProductsByAsins()`

```php
getProductsByAsins($x_amz_user_email, $inclusions_for_products, $inclusions_for_offers, $group_tag, $products_by_asins): \AmazonBusinessApi\Model\ProductSearchV20200826\ProductsByAsinsResponse
```

Result for list of ASIN search.

Retrieve products for the ASIN identifier present in the list of ASINs.

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

$apiInstance = new AmazonBusinessApi\Api\ProductSearchV20200826Api($config);
$x_amz_user_email = 'x_amz_user_email_example'; // string | Email address of the user requesting this resource
$inclusions_for_products = /path?inclusionsForProducts=FOO,BAR; // string[] | A list specifying the product fields you want to be included in your response object. If you do not include this query parameter then all inclusions will be returned.
$inclusions_for_offers = /path?inclusionsForOffers=FOO,BAR; // string[] | A list specifying the offer fields you want to be included in your response object. If you do not include this query parameter then all inclusions will be returned.
$group_tag = 'group_tag_example'; // string | Group identifier to determine on behalf of which group a customer is performing this operation. This can be found in your Amazon Business account information. Only necessary if the customer account belongs to more than one group.
$products_by_asins = new \AmazonBusinessApi\Model\ProductSearchV20200826\ProductsByAsinsRequest(); // \AmazonBusinessApi\Model\ProductSearchV20200826\ProductsByAsinsRequest

try {
    $result = $apiInstance->getProductsByAsins($x_amz_user_email, $inclusions_for_products, $inclusions_for_offers, $group_tag, $products_by_asins);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSearchV20200826Api->getProductsByAsins: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_amz_user_email** | **string**| Email address of the user requesting this resource |
 **inclusions_for_products** | [**string[]**](../Model/ProductSearchV20200826/string.md)| A list specifying the product fields you want to be included in your response object. If you do not include this query parameter then all inclusions will be returned. | [optional]
 **inclusions_for_offers** | [**string[]**](../Model/ProductSearchV20200826/string.md)| A list specifying the offer fields you want to be included in your response object. If you do not include this query parameter then all inclusions will be returned. | [optional]
 **group_tag** | **string**| Group identifier to determine on behalf of which group a customer is performing this operation. This can be found in your Amazon Business account information. Only necessary if the customer account belongs to more than one group. | [optional]
 **products_by_asins** | [**\AmazonBusinessApi\Model\ProductSearchV20200826\ProductsByAsinsRequest**](../Model/ProductSearchV20200826/ProductsByAsinsRequest.md)|  | [optional]

### Return type

[**\AmazonBusinessApi\Model\ProductSearchV20200826\ProductsByAsinsResponse**](../Model/ProductSearchV20200826/ProductsByAsinsResponse.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ProductSearchV20200826 Model list]](../Model/ProductSearchV20200826)
[[README]](../../README.md)

## `productsRequest()`

```php
productsRequest($product_id, $product_region, $locale, $x_amz_user_email, $shipping_postal_code, $quantity, $facets, $inclusions_for_products, $inclusions_for_offers, $group_tag): \AmazonBusinessApi\Model\ProductSearchV20200826\ProductsResult
```

Retrieve product data based on an ASIN identifier.

Retrieve a product with its ASIN identifier

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

$apiInstance = new AmazonBusinessApi\Api\ProductSearchV20200826Api($config);
$product_id = 'product_id_example'; // string | The Amazon Standard Item Identifier (ASIN) for the product.
$product_region = 'product_region_example'; // string | The region where you wish to purchase the product.
$locale = 'locale_example'; // string | The locale of the request, in the form of an IETF language tag. Each ProductRegion supports one or more locales. This value should comply with java.util.Locale.
$x_amz_user_email = 'x_amz_user_email_example'; // string | Email address of the user requesting this resource
$shipping_postal_code = 'shipping_postal_code_example'; // string | The postal/zip code for customer's request. This parameter does not support geocode.
$quantity = 1; // int | The number of units the customer intends to purchase. This helps  Amazon to determine quantity-based discounts if an eligible offer is present. Defaults to 1.
$facets = /path?facets=FOO,BAR; // string[] | A list of data facets to include in the response. If you include more than one facet in your requst separate each facet value with a comma.
$inclusions_for_products = /path?inclusionsForProducts=FOO,BAR; // string[] | A list specifying the product fields you want to be included in your response object. If you do not include this query parameter then all inclusions will be returned.
$inclusions_for_offers = /path?inclusionsForOffers=FOO,BAR; // string[] | A list specifying the offer fields you want to be included in your response object. If you do not include this query parameter then all inclusions will be returned.
$group_tag = 'group_tag_example'; // string | Group identifier to determine on behalf of which group a customer is performing this operation. This can be found in your Amazon Business account information. Only necessary if the customer account belongs to more than one group.

try {
    $result = $apiInstance->productsRequest($product_id, $product_region, $locale, $x_amz_user_email, $shipping_postal_code, $quantity, $facets, $inclusions_for_products, $inclusions_for_offers, $group_tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSearchV20200826Api->productsRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **string**| The Amazon Standard Item Identifier (ASIN) for the product. |
 **product_region** | **string**| The region where you wish to purchase the product. |
 **locale** | **string**| The locale of the request, in the form of an IETF language tag. Each ProductRegion supports one or more locales. This value should comply with java.util.Locale. |
 **x_amz_user_email** | **string**| Email address of the user requesting this resource |
 **shipping_postal_code** | **string**| The postal/zip code for customer's request. This parameter does not support geocode. | [optional]
 **quantity** | **int**| The number of units the customer intends to purchase. This helps  Amazon to determine quantity-based discounts if an eligible offer is present. Defaults to 1. | [optional] [default to 1]
 **facets** | [**string[]**](../Model/ProductSearchV20200826/string.md)| A list of data facets to include in the response. If you include more than one facet in your requst separate each facet value with a comma. | [optional]
 **inclusions_for_products** | [**string[]**](../Model/ProductSearchV20200826/string.md)| A list specifying the product fields you want to be included in your response object. If you do not include this query parameter then all inclusions will be returned. | [optional]
 **inclusions_for_offers** | [**string[]**](../Model/ProductSearchV20200826/string.md)| A list specifying the offer fields you want to be included in your response object. If you do not include this query parameter then all inclusions will be returned. | [optional]
 **group_tag** | **string**| Group identifier to determine on behalf of which group a customer is performing this operation. This can be found in your Amazon Business account information. Only necessary if the customer account belongs to more than one group. | [optional]

### Return type

[**\AmazonBusinessApi\Model\ProductSearchV20200826\ProductsResult**](../Model/ProductSearchV20200826/ProductsResult.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ProductSearchV20200826 Model list]](../Model/ProductSearchV20200826)
[[README]](../../README.md)

## `searchOffersRequest()`

```php
searchOffersRequest($product_id, $product_region, $locale, $x_amz_user_email, $shipping_postal_code, $page_number, $page_size, $group_tag, $filter_ids, $quantity, $inclusions_for_offers): \AmazonBusinessApi\Model\ProductSearchV20200826\OffersResult
```

Paginated and filtered search for offers of a specific product.

Search for offers of a specific product.

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

$apiInstance = new AmazonBusinessApi\Api\ProductSearchV20200826Api($config);
$product_id = 'product_id_example'; // string | The Amazon Standard Item Identifier (ASIN) for the product for which to get offers.
$product_region = 'product_region_example'; // string | The region where you wish to purchase the product.
$locale = 'locale_example'; // string | The locale of the request, in the form of an IETF language tag. Each ProductRegion supports one or more locales. This value should comply with java.util.Locale.
$x_amz_user_email = 'x_amz_user_email_example'; // string | Email address of the user requesting this resource
$shipping_postal_code = 'shipping_postal_code_example'; // string | The postal/zip code for customer's request. This parameter doesn't hold geocode.
$page_number = 56; // int | The zero-based number of the page being requested. If not specified, a default value of 0 will be used. When passed, the value must be equal or greater than zero, and strictly less than the number of pages returned in the response.
$page_size = 56; // int | The number of items desired per page in response. If not specified, a default value of 24 will be used. Maximum items that can be fetched in single request is 24.
$group_tag = 'group_tag_example'; // string | Group identifier to determine on behalf of which group a customer is performing this operation. This can be found in your Amazon Business account information. Only necessary if the customer account belongs to more than one group.
$filter_ids = array('filter_ids_example'); // string[] | A list of filter ids to apply to query results.
$quantity = 1; // int | The number of units the customer intends to purchase. This helps  Amazon to determine quantity-based discounts if an eligible offer is present. Defaults to 1.
$inclusions_for_offers = /path?inclusionsForOffers=FOO,BAR; // string[] | A list specifying the offer fields you want to be included in your response object. If you do not include this query parameter then all inclusions will be returned.

try {
    $result = $apiInstance->searchOffersRequest($product_id, $product_region, $locale, $x_amz_user_email, $shipping_postal_code, $page_number, $page_size, $group_tag, $filter_ids, $quantity, $inclusions_for_offers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSearchV20200826Api->searchOffersRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **string**| The Amazon Standard Item Identifier (ASIN) for the product for which to get offers. |
 **product_region** | **string**| The region where you wish to purchase the product. |
 **locale** | **string**| The locale of the request, in the form of an IETF language tag. Each ProductRegion supports one or more locales. This value should comply with java.util.Locale. |
 **x_amz_user_email** | **string**| Email address of the user requesting this resource |
 **shipping_postal_code** | **string**| The postal/zip code for customer's request. This parameter doesn't hold geocode. | [optional]
 **page_number** | **int**| The zero-based number of the page being requested. If not specified, a default value of 0 will be used. When passed, the value must be equal or greater than zero, and strictly less than the number of pages returned in the response. | [optional]
 **page_size** | **int**| The number of items desired per page in response. If not specified, a default value of 24 will be used. Maximum items that can be fetched in single request is 24. | [optional]
 **group_tag** | **string**| Group identifier to determine on behalf of which group a customer is performing this operation. This can be found in your Amazon Business account information. Only necessary if the customer account belongs to more than one group. | [optional]
 **filter_ids** | [**string[]**](../Model/ProductSearchV20200826/string.md)| A list of filter ids to apply to query results. | [optional]
 **quantity** | **int**| The number of units the customer intends to purchase. This helps  Amazon to determine quantity-based discounts if an eligible offer is present. Defaults to 1. | [optional] [default to 1]
 **inclusions_for_offers** | [**string[]**](../Model/ProductSearchV20200826/string.md)| A list specifying the offer fields you want to be included in your response object. If you do not include this query parameter then all inclusions will be returned. | [optional]

### Return type

[**\AmazonBusinessApi\Model\ProductSearchV20200826\OffersResult**](../Model/ProductSearchV20200826/OffersResult.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ProductSearchV20200826 Model list]](../Model/ProductSearchV20200826)
[[README]](../../README.md)

## `searchProductsRequest()`

```php
searchProductsRequest($product_region, $locale, $x_amz_user_email, $keywords, $shipping_postal_code, $facets, $page_number, $page_size, $group_tag, $category, $sub_category, $availability, $delivery_day, $eligible_for_free_shipping, $prime_eligible, $upc, $isbn, $sku, $ean, $part_number, $oem_part_number, $search_refinements, $inclusions_for_products, $inclusions_for_offers): \AmazonBusinessApi\Model\ProductSearchV20200826\SearchProductsResult
```

Search for a list products by keyword, and by other additional filter criteria.

Search for a list of products by querying on their attributes and indexed fields.

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

$apiInstance = new AmazonBusinessApi\Api\ProductSearchV20200826Api($config);
$product_region = 'product_region_example'; // string | The region where you wish to purchase the product.
$locale = 'locale_example'; // string | The locale of the request, in the form of an IETF language tag. Each ProductRegion supports one or more locales. This value should comply with java.util.Locale.
$x_amz_user_email = 'x_amz_user_email_example'; // string | Email address of the user requesting this resource
$keywords = 'keywords_example'; // string | A list of keywords to use to find products based on indexed text data.
$shipping_postal_code = 'shipping_postal_code_example'; // string | The postal/zip code for customer's request. This parameter doesn't hold geocode.
$facets = /path?facets=FOO,BAR; // string[] | A list of data facets to include in the response. If you include more than one facet in your request separate each facet value with a comma.
$page_number = 56; // int | The zero-based number of the page being requested. If not specified, a default value of 0 will be used. When passed, the value must be equal or greater than zero, and strictly less than the number of pages returned in the response.
$page_size = 56; // int | The number of items desired in SearchProductsResult response. If not specified, a default value of 24 will be used. Maximum items that can be fetched in single request is 24.
$group_tag = 'group_tag_example'; // string | Group identifier to determine on behalf of which group a customer is performing this operation. This can be found in your Amazon Business account information. Only necessary if the customer account belongs to more than one group.
$category = 'category_example'; // string | The category is used to refine the keyword search results, a keyword search can give results across multiple categories, if category is provided in request, search results will be limited to given category. It is an optional parameter if not provided in request then search results will be across all possible categories the requested keyword belongs.
$sub_category = 'sub_category_example'; // string | The search subcategory is used to refine the keyword search results, a keyword search within a particular category can give results across multiple subcategories, if subcategory is provided in request, search results will be limited to given subcategory. It is a optional parameter if not provided in request then search results will be across a particular category if category is provided otherwise results will be across all categories the requested keyword belongs.
$availability = 'availability_example'; // string | The availability is used to refine the keyword search results. It is optional and by default, the search should return the results with the option in stock only. So in the returned result refinement part, there should be two availability Ids. One represents the in stock only, and one represents the include out of stock. If user set availability as include out of stock Id, the result will return products including both in stock and out of stock, which also should be shown in products offers. Same logic applies when user set availability equal to in stock only Id. If a random availability id number is provided, the search should return zero matching products.
$delivery_day = 'delivery_day_example'; // string | The deliveryDay feature is used to refine the keyword search results. It is optional and by default, the search should return the results with all the available delivery dates. In the returned result refinement part, there should be one Get It Today ID, and one Get It Tomorrow ID. If the user set the deliveryDay with Get It Today ID, then it should return the products that could arrive today, or nothing if no product could arrive today. Same logic goes with Get It Tomorrow ID.
$eligible_for_free_shipping = 'eligible_for_free_shipping_example'; // string | The eligibleForFreeShipping is used to refine the keyword search results. It is optional and by default, the search should return the results with both free shipping by Amazon as well as not free Shipping by Amazon. So in the returned result refinement part, there should be one eligibleForFreeShipping Id. It represents Free Shipping by Amazon. If the user set the eligibleForFreeShipping as this ID, then the result will only return the products who will have free shipping by Amazon.
$prime_eligible = 'prime_eligible_example'; // string | The prime eligible refinement can be used to filter prime-eligible products. By default, all products (including non-prime eligible) will be returned.
$upc = 'upc_example'; // string | UPC (Universal Product Code) is a type of code printed on retail product packaging to aid in identifying a particular item
$isbn = 'isbn_example'; // string | International Standard Book Number of the product
$sku = 'sku_example'; // string | A SKU short for Stock Keeping Unit is a merchant specific identifier for a purchasable good
$ean = 'ean_example'; // string | EAN (European Article Number) is a 13-digit product identifier, often represented on products as a barcode
$part_number = 'part_number_example'; // string | value of the Part Number field on the product. It is a unique number that is issued by manufacturers to identify individual products.
$oem_part_number = 'oem_part_number_example'; // string | The OEM Part Number is the original part number assigned to this part by the vehicle manufacturer.
$search_refinements = brandtextbin#GE,brandtextbin#Sony,review-rating#2661618011; // string[] | A list of search refinements to refine keyword search for relevant results. If you include more than one search refinement in your request separate each refinement value with a comma.
$inclusions_for_products = /path?inclusionsForProducts=FOO,BAR; // string[] | A list specifying the product fields you want to be included in your response object. If you do not include this query parameter then all inclusions will be returned.
$inclusions_for_offers = /path?inclusionsForOffers=FOO,BAR; // string[] | A list specifying the offer fields you want to be included in your response object. If you do not include this query parameter then all inclusions will be returned.

try {
    $result = $apiInstance->searchProductsRequest($product_region, $locale, $x_amz_user_email, $keywords, $shipping_postal_code, $facets, $page_number, $page_size, $group_tag, $category, $sub_category, $availability, $delivery_day, $eligible_for_free_shipping, $prime_eligible, $upc, $isbn, $sku, $ean, $part_number, $oem_part_number, $search_refinements, $inclusions_for_products, $inclusions_for_offers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSearchV20200826Api->searchProductsRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_region** | **string**| The region where you wish to purchase the product. |
 **locale** | **string**| The locale of the request, in the form of an IETF language tag. Each ProductRegion supports one or more locales. This value should comply with java.util.Locale. |
 **x_amz_user_email** | **string**| Email address of the user requesting this resource |
 **keywords** | **string**| A list of keywords to use to find products based on indexed text data. | [optional]
 **shipping_postal_code** | **string**| The postal/zip code for customer's request. This parameter doesn't hold geocode. | [optional]
 **facets** | [**string[]**](../Model/ProductSearchV20200826/string.md)| A list of data facets to include in the response. If you include more than one facet in your request separate each facet value with a comma. | [optional]
 **page_number** | **int**| The zero-based number of the page being requested. If not specified, a default value of 0 will be used. When passed, the value must be equal or greater than zero, and strictly less than the number of pages returned in the response. | [optional]
 **page_size** | **int**| The number of items desired in SearchProductsResult response. If not specified, a default value of 24 will be used. Maximum items that can be fetched in single request is 24. | [optional]
 **group_tag** | **string**| Group identifier to determine on behalf of which group a customer is performing this operation. This can be found in your Amazon Business account information. Only necessary if the customer account belongs to more than one group. | [optional]
 **category** | **string**| The category is used to refine the keyword search results, a keyword search can give results across multiple categories, if category is provided in request, search results will be limited to given category. It is an optional parameter if not provided in request then search results will be across all possible categories the requested keyword belongs. | [optional]
 **sub_category** | **string**| The search subcategory is used to refine the keyword search results, a keyword search within a particular category can give results across multiple subcategories, if subcategory is provided in request, search results will be limited to given subcategory. It is a optional parameter if not provided in request then search results will be across a particular category if category is provided otherwise results will be across all categories the requested keyword belongs. | [optional]
 **availability** | **string**| The availability is used to refine the keyword search results. It is optional and by default, the search should return the results with the option in stock only. So in the returned result refinement part, there should be two availability Ids. One represents the in stock only, and one represents the include out of stock. If user set availability as include out of stock Id, the result will return products including both in stock and out of stock, which also should be shown in products offers. Same logic applies when user set availability equal to in stock only Id. If a random availability id number is provided, the search should return zero matching products. | [optional]
 **delivery_day** | **string**| The deliveryDay feature is used to refine the keyword search results. It is optional and by default, the search should return the results with all the available delivery dates. In the returned result refinement part, there should be one Get It Today ID, and one Get It Tomorrow ID. If the user set the deliveryDay with Get It Today ID, then it should return the products that could arrive today, or nothing if no product could arrive today. Same logic goes with Get It Tomorrow ID. | [optional]
 **eligible_for_free_shipping** | **string**| The eligibleForFreeShipping is used to refine the keyword search results. It is optional and by default, the search should return the results with both free shipping by Amazon as well as not free Shipping by Amazon. So in the returned result refinement part, there should be one eligibleForFreeShipping Id. It represents Free Shipping by Amazon. If the user set the eligibleForFreeShipping as this ID, then the result will only return the products who will have free shipping by Amazon. | [optional]
 **prime_eligible** | **string**| The prime eligible refinement can be used to filter prime-eligible products. By default, all products (including non-prime eligible) will be returned. | [optional]
 **upc** | **string**| UPC (Universal Product Code) is a type of code printed on retail product packaging to aid in identifying a particular item | [optional]
 **isbn** | **string**| International Standard Book Number of the product | [optional]
 **sku** | **string**| A SKU short for Stock Keeping Unit is a merchant specific identifier for a purchasable good | [optional]
 **ean** | **string**| EAN (European Article Number) is a 13-digit product identifier, often represented on products as a barcode | [optional]
 **part_number** | **string**| value of the Part Number field on the product. It is a unique number that is issued by manufacturers to identify individual products. | [optional]
 **oem_part_number** | **string**| The OEM Part Number is the original part number assigned to this part by the vehicle manufacturer. | [optional]
 **search_refinements** | [**string[]**](../Model/ProductSearchV20200826/string.md)| A list of search refinements to refine keyword search for relevant results. If you include more than one search refinement in your request separate each refinement value with a comma. | [optional]
 **inclusions_for_products** | [**string[]**](../Model/ProductSearchV20200826/string.md)| A list specifying the product fields you want to be included in your response object. If you do not include this query parameter then all inclusions will be returned. | [optional]
 **inclusions_for_offers** | [**string[]**](../Model/ProductSearchV20200826/string.md)| A list specifying the offer fields you want to be included in your response object. If you do not include this query parameter then all inclusions will be returned. | [optional]

### Return type

[**\AmazonBusinessApi\Model\ProductSearchV20200826\SearchProductsResult**](../Model/ProductSearchV20200826/SearchProductsResult.md)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[ProductSearchV20200826 Model list]](../Model/ProductSearchV20200826)
[[README]](../../README.md)
