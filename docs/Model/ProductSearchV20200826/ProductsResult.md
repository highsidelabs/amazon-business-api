## ProductsResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**asin** | **string** | The Amazon ASIN product identifier |
**asin_type** | [**\AmazonBusinessApi\Model\ProductSearchV20200826\AsinType**](AsinType.md) |  |
**signed_product_id** | **string** | Product id signed with information about the request for which it was returned. |
**included_data_types** | [**map[string,object[]]**](array.md) | A list of additional data groups, as specified in the request. Each facet contains a logic grouping of data about the product. |
**features** | **string[]** | A list descriptive features of the product, typically shown as a bulleted list. |
**editorial_reviews** | [**\AmazonBusinessApi\Model\ProductSearchV20200826\EditorialReview[]**](EditorialReview.md) | A list of editorial reviews for the product. We support a list of standardized editorial review types, and this list contains as many as we have for a product. | [optional]
**taxonomies** | [**\AmazonBusinessApi\Model\ProductSearchV20200826\Taxonomy[]**](Taxonomy.md) | A list taxonomy classifications for the product. We support a list of standardized taxonomy types, and this list contains as many as we have for a product. |
**title** | **string** | The title of the product, typically shown at the top of an Amazon product page. |
**url** | **string** | A URL to the product on the Amazon website |
**format** | **string** | Type of the product on the Amazon website. For books, this is the binding. |
**book_information** | [**\AmazonBusinessApi\Model\ProductSearchV20200826\BookInformation**](BookInformation.md) |  |
**by_line** | [**\AmazonBusinessApi\Model\ProductSearchV20200826\Contributor[]**](Contributor.md) | A product's by-line contributor information, depending on the type of product it will contain details for brand, author(s), editors, etc. |
**media_information** | [**\AmazonBusinessApi\Model\ProductSearchV20200826\MediaInformation**](MediaInformation.md) |  |
**product_overview** | **map[string,string]** | General descriptive fields of the product |
**product_details** | [**map[string,map[string,string]]**](map.md) | Nested key/value pairs indicating additional information for product parts |
**product_variations** | [**\AmazonBusinessApi\Model\ProductSearchV20200826\ProductVariations**](ProductVariations.md) |  |
**customer_reviews_summary** | [**\AmazonBusinessApi\Model\ProductSearchV20200826\CustomerReviewsSummary**](CustomerReviewsSummary.md) |  |
**product_description** | **string** | Description for the given product. |

[[ProductSearchV20200826 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
