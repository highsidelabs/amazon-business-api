## ProductsByAsinsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_ids** | **string[]** | The list of Amazon Standard Item Identifier (ASIN) for the product. The maximum number of asins allowed in each call is 30. |
**product_region** | **string** | The region where you wish to purchase the product. |
**locale** | **string** | The locale of the request, in the form of an IETF language tag. Each ProductRegion supports one or more locales. This value should comply with java.util.Locale. |
**shipping_postal_code** | **string** | The postal/zip code for customer's request. This parameter does not support geocode. | [optional]
**quantity** | **int** | The number of units the customer intends to purchase. This helps Amazon to determine quantity-based discounts if an eligible offer is present. Defaults to 1. | [optional]
**facets** | **string[]** | A list of data facets to include in the response. If you include more than one facet in your requst separate each facet value with a comma. | [optional]

[[ProductSearchV20200826 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
