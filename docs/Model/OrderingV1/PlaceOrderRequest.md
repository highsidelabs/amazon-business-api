## PlaceOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**external_id** | **string** | A customer-specified identifier that is unique for each order. |
**line_items** | [**\AmazonBusinessApi\Model\OrderingV1\RequestLineItem[]**](RequestLineItem.md) | Items in the order. |
**attributes** | [**\AmazonBusinessApi\Model\OrderingV1\Attribute[]**](Attribute.md) | Customer-determined order properties. |
**expectations** | [**\AmazonBusinessApi\Model\OrderingV1\Expectation[]**](Expectation.md) | Customer expectations about aspects of an order they do not directly control. |

[[OrderingV1 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
