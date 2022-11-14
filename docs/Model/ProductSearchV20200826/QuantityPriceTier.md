## QuantityPriceTier

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**quantity_display** | **string** | A localized string indicating the quantity range for which the price in the tier applies. |
**unit_price** | [**\AmazonBusinessApi\Model\ProductSearchV20200826\Money**](Money.md) |  |
**min_quantity** | **int** | [DEPRECATED: please use unitPrice and quantityDisplay instead] The minimum quantity of items that the customer needs to buy to reach this price tier. | [optional]
**price** | [**\AmazonBusinessApi\Model\ProductSearchV20200826\Price**](Price.md) |  | [optional]
**saving_message** | **string** | [DEPRECATED: please use unitPrice and quantityDisplay instead] The savings message of the tier. Exists only when the tier's price is lower than the basis price of the current buying option. | [optional]
**tax_exclusive_price** | [**\AmazonBusinessApi\Model\ProductSearchV20200826\TaxExclusivePrice**](TaxExclusivePrice.md) |  | [optional]

[[ProductSearchV20200826 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
