## LineItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_category** | **string** | Category of the product according to Amazon terminology. |
**asin** | **string** | The Amazon Standard Identification Number (ASIN) for the item |
**title** | **string** | The title of the item. |
**unspsc** | **string** | The United Nations Standard Products and Services Code for the item |
**product_condition** | **string** | Condition of the item purchased (new, used, used good, etc.). |
**listed_price_per_unit** | [**\AmazonBusinessApi\Model\ReportingV20210108\Money**](Money.md) |  |
**purchased_price_per_unit** | [**\AmazonBusinessApi\Model\ReportingV20210108\Money**](Money.md) |  |
**item_quantity** | **int** | Quantity of a line item. |
**item_sub_total** | [**\AmazonBusinessApi\Model\ReportingV20210108\Money**](Money.md) |  |
**item_shipping_and_handling** | [**\AmazonBusinessApi\Model\ReportingV20210108\Money**](Money.md) |  |
**item_promotion** | [**\AmazonBusinessApi\Model\ReportingV20210108\Money**](Money.md) |  |
**item_tax** | [**\AmazonBusinessApi\Model\ReportingV20210108\Money**](Money.md) |  |
**item_net_total** | [**\AmazonBusinessApi\Model\ReportingV20210108\Money**](Money.md) |  |
**purchase_order_line_item** | **string** | Only for customers using Punchout. The cXML system adds a line item number. |
**tax_exemption_applied** | **bool** | Yes or No. |
**tax_exemption_type** | **string** | Code that specifies the type of tax exemption applied |
**tax_exempt_opt_out** | **bool** | Yes or No. |
**discount_program** | **string** | Negotiated Pricing or Quantity Discounts |
**discount_type** | **string** | Type of the discount applied |
**discount_amount** | [**\AmazonBusinessApi\Model\ReportingV20210108\Money**](Money.md) |  |
**discount_ratio** | **string** | The ratio of price to discount. |
**seller** | [**\AmazonBusinessApi\Model\ReportingV20210108\Seller**](Seller.md) |  |
**seller_credentials** | **string[]** | Seller's credentials or certifications (i.e. Minority owned business, Veteran owned business, etc.) |
**brand_code** | **string** | Brand code as provided by the vendor or seller. |
**brand_name** | **string** | Item Brand as provided by the vendor or seller. |
**manufacturer_name** | **string** | Name of the manufacturer as provided by the vendor or seller. |
**transaction_ids** | **string[]** | Transaction reference identifiers for the LineItem. |
**carrier_tracking_numbers** | **string[]** | Tracking numbers from the shipment carrier for the LineItem. |

[[ReportingV20210108 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
