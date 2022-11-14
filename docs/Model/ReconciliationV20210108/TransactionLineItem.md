## TransactionLineItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**refund_reason** | **string** | The reason why a refund was issued. | [optional]
**total_amount** | [**\AmazonBusinessApi\Model\ReconciliationV20210108\Money**](Money.md) |  | [optional]
**principal_amount** | [**\AmazonBusinessApi\Model\ReconciliationV20210108\Money**](Money.md) |  | [optional]
**shipping_charge** | [**\AmazonBusinessApi\Model\ReconciliationV20210108\Money**](Money.md) |  | [optional]
**regulatory_fee** | [**\AmazonBusinessApi\Model\ReconciliationV20210108\Money**](Money.md) |  | [optional]
**gift_wrapping_charge** | [**\AmazonBusinessApi\Model\ReconciliationV20210108\Money**](Money.md) |  | [optional]
**discount** | [**\AmazonBusinessApi\Model\ReconciliationV20210108\Money**](Money.md) |  | [optional]
**tax** | [**\AmazonBusinessApi\Model\ReconciliationV20210108\Money**](Money.md) |  | [optional]
**unit_price** | [**\AmazonBusinessApi\Model\ReconciliationV20210108\Money**](Money.md) |  | [optional]
**tax_rate** | **string** | The tax rate associated with item. | [optional]
**order_id** | **string** | The Amazon order identifier associated with the item. | [optional]
**unspsc** | **string** | United Nations Standard Products and Services Code for the item. | [optional]
**order_line_item_id** | **string** | The order line item identifier for the item. This identifier is created by Amazon | [optional]
**purchase_order_number** | **string** | The purchase order number associated with the item of a PPI order. This number is created by the buyer. | [optional]
**purchase_order_line_item_id** | **string** | The purchase order line item identifier associated with the item. This identifier is created by the buyer. | [optional]
**asin** | **string** | The Amazon Standard Identification Number (ASIN) for the item. | [optional]
**product_title** | **string** | The title of the item. | [optional]
**item_quantity** | **int** | The item quantity relevant to this transaction. | [optional]
**shipment_id** | **string** | The identifier of the shipment associated with the item. This identifier is created by Amazon. | [optional]
**shipment_date** | **string** | The shipment date associated with the item. | [optional]
**merchant_legal_name** | **string** | The legal name of the seller. | [optional]
**budget_id** | **string** | The budget identifier associated with the item. | [optional]
**business_order_info** | **map[string,string]** | Additional order information configured by administrators that requisitioners must enter at checkout. | [optional]

[[ReconciliationV20210108 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
