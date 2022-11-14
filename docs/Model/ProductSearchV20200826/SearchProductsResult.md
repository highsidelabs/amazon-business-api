## SearchProductsResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**matching_product_count** | **int** | The number of products which matched your search query. This number can be much larger than the number of matching products you can view. The value same for all the pages in the result set. |
**search_refinements** | [**\AmazonBusinessApi\Model\ProductSearchV20200826\SearchRefinementResult[]**](SearchRefinementResult.md) | Search refinements is used to share the refinements available for search result which can be used in subsequent request to narrow down the results , for example search category is a type of search refinement, if search category refinement is used in request , search results will be limited to given search category. |
**refinements** | [**\AmazonBusinessApi\Model\ProductSearchV20200826\RefinementResult**](RefinementResult.md) |  |
**number_of_pages** | **int** | Number of pages of results. |
**products** | [**\AmazonBusinessApi\Model\ProductSearchV20200826\ProductsResult[]**](ProductsResult.md) | A list of products that match your search criteria |

[[ProductSearchV20200826 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
