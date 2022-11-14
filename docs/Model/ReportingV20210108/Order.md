## Order

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_date** | **string** | Date when order was placed. |
**order_id** | **string** | Amazon order identifier. |
**purchase_order_number** | **string** | Purchase Order Number assigned to the order. |
**order_quantity** | **int** | The item quantity relevant to this order. |
**order_status** | **string** | The status of the order. |
**last_order_approver_name** | **string** | Name of the last person who took action on order approval. |
**buying_customer** | [**\AmazonBusinessApi\Model\ReportingV20210108\Customer**](Customer.md) |  |
**buyer_group_name** | **string** | The group within the business from which the order was placed. |
**business_order_info** | **map[string,string]** | Additional information provided at checkout. |
**order_sub_total** | [**\AmazonBusinessApi\Model\ReportingV20210108\Money**](Money.md) |  |
**order_shipping_and_handling** | [**\AmazonBusinessApi\Model\ReportingV20210108\Money**](Money.md) |  |
**order_promotion** | [**\AmazonBusinessApi\Model\ReportingV20210108\Money**](Money.md) |  |
**order_tax** | [**\AmazonBusinessApi\Model\ReportingV20210108\Money**](Money.md) |  |
**order_net_total** | [**\AmazonBusinessApi\Model\ReportingV20210108\Money**](Money.md) |  |
**line_items** | [**\AmazonBusinessApi\Model\ReportingV20210108\LineItem[]**](LineItem.md) | Total items of the order | [optional]
**shipments** | [**\AmazonBusinessApi\Model\ReportingV20210108\Shipment[]**](Shipment.md) | Total shipments of the order | [optional]
**charges** | [**\AmazonBusinessApi\Model\ReportingV20210108\Charge[]**](Charge.md) | Total charges of the order | [optional]

[[ReportingV20210108 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
