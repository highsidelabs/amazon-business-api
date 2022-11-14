## Offer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**availability** | **string** | How soon the product would be available to be shipped once purchased |
**buying_guidance** | **string** | If the company for which this API is being called provides Amazon Business with Guided Buying policies, this property provides information about whether their organization supports the purchase of this product. If this is not configured for the account, we return the value \"NONE\".
Possible values:
  * PREFERRED
  * RESTRICTED
  * BLOCKED
  * NONE
  * UNKNOWN |
**buying_restrictions** | [**\AmazonBusinessApi\Model\ProductSearchV20200826\BuyingRestriction[]**](BuyingRestriction.md) | When present, entries in this property describe the reasons a buyer is restricted from buying a product. |
**fulfillment_type** | **string** | The fulfillment system to use for a product purchase.
 Possible values:
  * AMAZON
  * THIRD_PARTY
  * OTHER |
**merchant** | [**\AmazonBusinessApi\Model\ProductSearchV20200826\Merchant**](Merchant.md) |  |
**offer_id** | **string** | The Amazon offer identifier to use when purchasing this product |
**price** | [**\AmazonBusinessApi\Model\ProductSearchV20200826\Price**](Price.md) |  |
**list_price** | [**\AmazonBusinessApi\Model\ProductSearchV20200826\Price**](Price.md) |  |
**product_condition** | **string** | The possible condition of the product being sold by the merchant.
Possible values:
 *  NEW
 * USED
 * COLLECTIBLE
 * REFURBISHED
 * OTHER
 * UNKNOWN |
**product_condition_note** | **string** | Additional details on the product's condition |
**condition** | [**\AmazonBusinessApi\Model\ProductSearchV20200826\Condition**](Condition.md) |  |
**quantity_limits** | [**\AmazonBusinessApi\Model\ProductSearchV20200826\OfferQuantityLimits**](OfferQuantityLimits.md) |  |
**quantity_price** | [**\AmazonBusinessApi\Model\ProductSearchV20200826\QuantityPrice**](QuantityPrice.md) |  | [optional]
**tax_exclusive_price** | [**\AmazonBusinessApi\Model\ProductSearchV20200826\TaxExclusivePrice**](TaxExclusivePrice.md) |  |
**delivery_information** | **string** | Information regarding the estimated delivery time and delivery price. |

[[ProductSearchV20200826 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
