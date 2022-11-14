## RefinementResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**categories** | [**\AmazonBusinessApi\Model\ProductSearchV20200826\Category[]**](Category.md) | A list of categories which have matches for the stated search keyword. A category id can sent back in the subsequent request to get a shorter list of more relevant search results. |
**sub_categories** | [**\AmazonBusinessApi\Model\ProductSearchV20200826\SubCategory[]**](SubCategory.md) | A list of sub categories which have matches for given category. A search subcategory Id should be sent back in the next request to get a shorter list of more relevant products. |
**availability_options** | [**\AmazonBusinessApi\Model\ProductSearchV20200826\Availability[]**](Availability.md) | Two availability ids standing for in stock only and include out of stock would appear in the search refinement. Availability Id should be sent as an parameter in the next request to get a more filtered list of products and the availability filtering should return the products whose offers are aligned with the availability ID request passed. |
**delivery_day_options** | [**\AmazonBusinessApi\Model\ProductSearchV20200826\DeliveryDay[]**](DeliveryDay.md) | Two delivery day ids standing for Get It Today and Get It by Tomorrow would appear in the search refinement. |
**eligible_for_free_shipping_options** | [**\AmazonBusinessApi\Model\ProductSearchV20200826\EligibleForFreeShipping[]**](EligibleForFreeShipping.md) | One eligibleForFreeShippingOption Id would appear in the search refinement. EligibleForFreeShippingOption ID should be sent as an parameter in the next request to get a more filtered list of products and this filtering should return the products that are Free shipping by Amazon. |
**prime_eligible** | [**\AmazonBusinessApi\Model\ProductSearchV20200826\PrimeEligible[]**](PrimeEligible.md) | This can be used as a query param which can be used to fetch only prime eligible items. |

[[ProductSearchV20200826 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
