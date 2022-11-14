<?php
/**
 * LineItem
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  AmazonBusinessApi
 */

/**
 * Amazon Business API for Order History
 *
 * With Amazon Business API for Order History you can create spend reports and track progress towards your spending goals
 *
 * The version of the OpenAPI document: 2021-01-08
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AmazonBusinessApi\Model\ReportingV20210108;

use \AmazonBusinessApi\Model\ModelInterface;
use \AmazonBusinessApi\ObjectSerializer;
use \ArrayAccess;

/**
 * LineItem Class Doc Comment
 *
 * @category Class
 * @description This attribute represents a line item object
 * @package  AmazonBusinessApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class LineItem implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LineItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'product_category' => 'string',
        'asin' => 'string',
        'title' => 'string',
        'unspsc' => 'string',
        'product_condition' => 'string',
        'listed_price_per_unit' => '\AmazonBusinessApi\Model\ReportingV20210108\Money',
        'purchased_price_per_unit' => '\AmazonBusinessApi\Model\ReportingV20210108\Money',
        'item_quantity' => 'int',
        'item_sub_total' => '\AmazonBusinessApi\Model\ReportingV20210108\Money',
        'item_shipping_and_handling' => '\AmazonBusinessApi\Model\ReportingV20210108\Money',
        'item_promotion' => '\AmazonBusinessApi\Model\ReportingV20210108\Money',
        'item_tax' => '\AmazonBusinessApi\Model\ReportingV20210108\Money',
        'item_net_total' => '\AmazonBusinessApi\Model\ReportingV20210108\Money',
        'purchase_order_line_item' => 'string',
        'tax_exemption_applied' => 'bool',
        'tax_exemption_type' => 'string',
        'tax_exempt_opt_out' => 'bool',
        'discount_program' => 'string',
        'discount_type' => 'string',
        'discount_amount' => '\AmazonBusinessApi\Model\ReportingV20210108\Money',
        'discount_ratio' => 'string',
        'seller' => '\AmazonBusinessApi\Model\ReportingV20210108\Seller',
        'seller_credentials' => 'string[]',
        'brand_code' => 'string',
        'brand_name' => 'string',
        'manufacturer_name' => 'string',
        'transaction_ids' => 'string[]',
        'carrier_tracking_numbers' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'product_category' => null,
        'asin' => null,
        'title' => null,
        'unspsc' => null,
        'product_condition' => null,
        'listed_price_per_unit' => null,
        'purchased_price_per_unit' => null,
        'item_quantity' => null,
        'item_sub_total' => null,
        'item_shipping_and_handling' => null,
        'item_promotion' => null,
        'item_tax' => null,
        'item_net_total' => null,
        'purchase_order_line_item' => null,
        'tax_exemption_applied' => null,
        'tax_exemption_type' => null,
        'tax_exempt_opt_out' => null,
        'discount_program' => null,
        'discount_type' => null,
        'discount_amount' => null,
        'discount_ratio' => null,
        'seller' => null,
        'seller_credentials' => null,
        'brand_code' => null,
        'brand_name' => null,
        'manufacturer_name' => null,
        'transaction_ids' => null,
        'carrier_tracking_numbers' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'product_category' => 'productCategory',
        'asin' => 'asin',
        'title' => 'title',
        'unspsc' => 'unspsc',
        'product_condition' => 'productCondition',
        'listed_price_per_unit' => 'listedPricePerUnit',
        'purchased_price_per_unit' => 'purchasedPricePerUnit',
        'item_quantity' => 'itemQuantity',
        'item_sub_total' => 'itemSubTotal',
        'item_shipping_and_handling' => 'itemShippingAndHandling',
        'item_promotion' => 'itemPromotion',
        'item_tax' => 'itemTax',
        'item_net_total' => 'itemNetTotal',
        'purchase_order_line_item' => 'purchaseOrderLineItem',
        'tax_exemption_applied' => 'taxExemptionApplied',
        'tax_exemption_type' => 'taxExemptionType',
        'tax_exempt_opt_out' => 'taxExemptOptOut',
        'discount_program' => 'discountProgram',
        'discount_type' => 'discountType',
        'discount_amount' => 'discountAmount',
        'discount_ratio' => 'discountRatio',
        'seller' => 'seller',
        'seller_credentials' => 'sellerCredentials',
        'brand_code' => 'brandCode',
        'brand_name' => 'brandName',
        'manufacturer_name' => 'manufacturerName',
        'transaction_ids' => 'transactionIds',
        'carrier_tracking_numbers' => 'carrierTrackingNumbers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'product_category' => 'setProductCategory',
        'asin' => 'setAsin',
        'title' => 'setTitle',
        'unspsc' => 'setUnspsc',
        'product_condition' => 'setProductCondition',
        'listed_price_per_unit' => 'setListedPricePerUnit',
        'purchased_price_per_unit' => 'setPurchasedPricePerUnit',
        'item_quantity' => 'setItemQuantity',
        'item_sub_total' => 'setItemSubTotal',
        'item_shipping_and_handling' => 'setItemShippingAndHandling',
        'item_promotion' => 'setItemPromotion',
        'item_tax' => 'setItemTax',
        'item_net_total' => 'setItemNetTotal',
        'purchase_order_line_item' => 'setPurchaseOrderLineItem',
        'tax_exemption_applied' => 'setTaxExemptionApplied',
        'tax_exemption_type' => 'setTaxExemptionType',
        'tax_exempt_opt_out' => 'setTaxExemptOptOut',
        'discount_program' => 'setDiscountProgram',
        'discount_type' => 'setDiscountType',
        'discount_amount' => 'setDiscountAmount',
        'discount_ratio' => 'setDiscountRatio',
        'seller' => 'setSeller',
        'seller_credentials' => 'setSellerCredentials',
        'brand_code' => 'setBrandCode',
        'brand_name' => 'setBrandName',
        'manufacturer_name' => 'setManufacturerName',
        'transaction_ids' => 'setTransactionIds',
        'carrier_tracking_numbers' => 'setCarrierTrackingNumbers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_category' => 'getProductCategory',
        'asin' => 'getAsin',
        'title' => 'getTitle',
        'unspsc' => 'getUnspsc',
        'product_condition' => 'getProductCondition',
        'listed_price_per_unit' => 'getListedPricePerUnit',
        'purchased_price_per_unit' => 'getPurchasedPricePerUnit',
        'item_quantity' => 'getItemQuantity',
        'item_sub_total' => 'getItemSubTotal',
        'item_shipping_and_handling' => 'getItemShippingAndHandling',
        'item_promotion' => 'getItemPromotion',
        'item_tax' => 'getItemTax',
        'item_net_total' => 'getItemNetTotal',
        'purchase_order_line_item' => 'getPurchaseOrderLineItem',
        'tax_exemption_applied' => 'getTaxExemptionApplied',
        'tax_exemption_type' => 'getTaxExemptionType',
        'tax_exempt_opt_out' => 'getTaxExemptOptOut',
        'discount_program' => 'getDiscountProgram',
        'discount_type' => 'getDiscountType',
        'discount_amount' => 'getDiscountAmount',
        'discount_ratio' => 'getDiscountRatio',
        'seller' => 'getSeller',
        'seller_credentials' => 'getSellerCredentials',
        'brand_code' => 'getBrandCode',
        'brand_name' => 'getBrandName',
        'manufacturer_name' => 'getManufacturerName',
        'transaction_ids' => 'getTransactionIds',
        'carrier_tracking_numbers' => 'getCarrierTrackingNumbers'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    
    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['product_category'] = $data['product_category'] ?? null;
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['unspsc'] = $data['unspsc'] ?? null;
        $this->container['product_condition'] = $data['product_condition'] ?? null;
        $this->container['listed_price_per_unit'] = $data['listed_price_per_unit'] ?? null;
        $this->container['purchased_price_per_unit'] = $data['purchased_price_per_unit'] ?? null;
        $this->container['item_quantity'] = $data['item_quantity'] ?? null;
        $this->container['item_sub_total'] = $data['item_sub_total'] ?? null;
        $this->container['item_shipping_and_handling'] = $data['item_shipping_and_handling'] ?? null;
        $this->container['item_promotion'] = $data['item_promotion'] ?? null;
        $this->container['item_tax'] = $data['item_tax'] ?? null;
        $this->container['item_net_total'] = $data['item_net_total'] ?? null;
        $this->container['purchase_order_line_item'] = $data['purchase_order_line_item'] ?? null;
        $this->container['tax_exemption_applied'] = $data['tax_exemption_applied'] ?? null;
        $this->container['tax_exemption_type'] = $data['tax_exemption_type'] ?? null;
        $this->container['tax_exempt_opt_out'] = $data['tax_exempt_opt_out'] ?? null;
        $this->container['discount_program'] = $data['discount_program'] ?? null;
        $this->container['discount_type'] = $data['discount_type'] ?? null;
        $this->container['discount_amount'] = $data['discount_amount'] ?? null;
        $this->container['discount_ratio'] = $data['discount_ratio'] ?? null;
        $this->container['seller'] = $data['seller'] ?? null;
        $this->container['seller_credentials'] = $data['seller_credentials'] ?? null;
        $this->container['brand_code'] = $data['brand_code'] ?? null;
        $this->container['brand_name'] = $data['brand_name'] ?? null;
        $this->container['manufacturer_name'] = $data['manufacturer_name'] ?? null;
        $this->container['transaction_ids'] = $data['transaction_ids'] ?? null;
        $this->container['carrier_tracking_numbers'] = $data['carrier_tracking_numbers'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['product_category'] === null) {
            $invalidProperties[] = "'product_category' can't be null";
        }
        if ($this->container['asin'] === null) {
            $invalidProperties[] = "'asin' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['unspsc'] === null) {
            $invalidProperties[] = "'unspsc' can't be null";
        }
        if ($this->container['product_condition'] === null) {
            $invalidProperties[] = "'product_condition' can't be null";
        }
        if ($this->container['listed_price_per_unit'] === null) {
            $invalidProperties[] = "'listed_price_per_unit' can't be null";
        }
        if ($this->container['purchased_price_per_unit'] === null) {
            $invalidProperties[] = "'purchased_price_per_unit' can't be null";
        }
        if ($this->container['item_quantity'] === null) {
            $invalidProperties[] = "'item_quantity' can't be null";
        }
        if ($this->container['item_sub_total'] === null) {
            $invalidProperties[] = "'item_sub_total' can't be null";
        }
        if ($this->container['item_shipping_and_handling'] === null) {
            $invalidProperties[] = "'item_shipping_and_handling' can't be null";
        }
        if ($this->container['item_promotion'] === null) {
            $invalidProperties[] = "'item_promotion' can't be null";
        }
        if ($this->container['item_tax'] === null) {
            $invalidProperties[] = "'item_tax' can't be null";
        }
        if ($this->container['item_net_total'] === null) {
            $invalidProperties[] = "'item_net_total' can't be null";
        }
        if ($this->container['purchase_order_line_item'] === null) {
            $invalidProperties[] = "'purchase_order_line_item' can't be null";
        }
        if ($this->container['tax_exemption_applied'] === null) {
            $invalidProperties[] = "'tax_exemption_applied' can't be null";
        }
        if ($this->container['tax_exemption_type'] === null) {
            $invalidProperties[] = "'tax_exemption_type' can't be null";
        }
        if ($this->container['tax_exempt_opt_out'] === null) {
            $invalidProperties[] = "'tax_exempt_opt_out' can't be null";
        }
        if ($this->container['discount_program'] === null) {
            $invalidProperties[] = "'discount_program' can't be null";
        }
        if ($this->container['discount_type'] === null) {
            $invalidProperties[] = "'discount_type' can't be null";
        }
        if ($this->container['discount_amount'] === null) {
            $invalidProperties[] = "'discount_amount' can't be null";
        }
        if ($this->container['discount_ratio'] === null) {
            $invalidProperties[] = "'discount_ratio' can't be null";
        }
        if ($this->container['seller'] === null) {
            $invalidProperties[] = "'seller' can't be null";
        }
        if ($this->container['seller_credentials'] === null) {
            $invalidProperties[] = "'seller_credentials' can't be null";
        }
        if ($this->container['brand_code'] === null) {
            $invalidProperties[] = "'brand_code' can't be null";
        }
        if ($this->container['brand_name'] === null) {
            $invalidProperties[] = "'brand_name' can't be null";
        }
        if ($this->container['manufacturer_name'] === null) {
            $invalidProperties[] = "'manufacturer_name' can't be null";
        }
        if ($this->container['transaction_ids'] === null) {
            $invalidProperties[] = "'transaction_ids' can't be null";
        }
        if ($this->container['carrier_tracking_numbers'] === null) {
            $invalidProperties[] = "'carrier_tracking_numbers' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets product_category
     *
     * @return string
     */
    public function getProductCategory()
    {
        return $this->container['product_category'];
    }

    /**
     * Sets product_category
     *
     * @param string $product_category Category of the product according to Amazon terminology.
     *
     * @return self
     */
    public function setProductCategory($product_category)
    {
        $this->container['product_category'] = $product_category;

        return $this;
    }
    /**
     * Gets asin
     *
     * @return string
     */
    public function getAsin()
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin
     *
     * @param string $asin The Amazon Standard Identification Number (ASIN) for the item
     *
     * @return self
     */
    public function setAsin($asin)
    {
        $this->container['asin'] = $asin;

        return $this;
    }
    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title The title of the item.
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }
    /**
     * Gets unspsc
     *
     * @return string
     */
    public function getUnspsc()
    {
        return $this->container['unspsc'];
    }

    /**
     * Sets unspsc
     *
     * @param string $unspsc The United Nations Standard Products and Services Code for the item
     *
     * @return self
     */
    public function setUnspsc($unspsc)
    {
        $this->container['unspsc'] = $unspsc;

        return $this;
    }
    /**
     * Gets product_condition
     *
     * @return string
     */
    public function getProductCondition()
    {
        return $this->container['product_condition'];
    }

    /**
     * Sets product_condition
     *
     * @param string $product_condition Condition of the item purchased (new, used, used good, etc.).
     *
     * @return self
     */
    public function setProductCondition($product_condition)
    {
        $this->container['product_condition'] = $product_condition;

        return $this;
    }
    /**
     * Gets listed_price_per_unit
     *
     * @return \AmazonBusinessApi\Model\ReportingV20210108\Money
     */
    public function getListedPricePerUnit()
    {
        return $this->container['listed_price_per_unit'];
    }

    /**
     * Sets listed_price_per_unit
     *
     * @param \AmazonBusinessApi\Model\ReportingV20210108\Money $listed_price_per_unit listed_price_per_unit
     *
     * @return self
     */
    public function setListedPricePerUnit($listed_price_per_unit)
    {
        $this->container['listed_price_per_unit'] = $listed_price_per_unit;

        return $this;
    }
    /**
     * Gets purchased_price_per_unit
     *
     * @return \AmazonBusinessApi\Model\ReportingV20210108\Money
     */
    public function getPurchasedPricePerUnit()
    {
        return $this->container['purchased_price_per_unit'];
    }

    /**
     * Sets purchased_price_per_unit
     *
     * @param \AmazonBusinessApi\Model\ReportingV20210108\Money $purchased_price_per_unit purchased_price_per_unit
     *
     * @return self
     */
    public function setPurchasedPricePerUnit($purchased_price_per_unit)
    {
        $this->container['purchased_price_per_unit'] = $purchased_price_per_unit;

        return $this;
    }
    /**
     * Gets item_quantity
     *
     * @return int
     */
    public function getItemQuantity()
    {
        return $this->container['item_quantity'];
    }

    /**
     * Sets item_quantity
     *
     * @param int $item_quantity Quantity of a line item.
     *
     * @return self
     */
    public function setItemQuantity($item_quantity)
    {
        $this->container['item_quantity'] = $item_quantity;

        return $this;
    }
    /**
     * Gets item_sub_total
     *
     * @return \AmazonBusinessApi\Model\ReportingV20210108\Money
     */
    public function getItemSubTotal()
    {
        return $this->container['item_sub_total'];
    }

    /**
     * Sets item_sub_total
     *
     * @param \AmazonBusinessApi\Model\ReportingV20210108\Money $item_sub_total item_sub_total
     *
     * @return self
     */
    public function setItemSubTotal($item_sub_total)
    {
        $this->container['item_sub_total'] = $item_sub_total;

        return $this;
    }
    /**
     * Gets item_shipping_and_handling
     *
     * @return \AmazonBusinessApi\Model\ReportingV20210108\Money
     */
    public function getItemShippingAndHandling()
    {
        return $this->container['item_shipping_and_handling'];
    }

    /**
     * Sets item_shipping_and_handling
     *
     * @param \AmazonBusinessApi\Model\ReportingV20210108\Money $item_shipping_and_handling item_shipping_and_handling
     *
     * @return self
     */
    public function setItemShippingAndHandling($item_shipping_and_handling)
    {
        $this->container['item_shipping_and_handling'] = $item_shipping_and_handling;

        return $this;
    }
    /**
     * Gets item_promotion
     *
     * @return \AmazonBusinessApi\Model\ReportingV20210108\Money
     */
    public function getItemPromotion()
    {
        return $this->container['item_promotion'];
    }

    /**
     * Sets item_promotion
     *
     * @param \AmazonBusinessApi\Model\ReportingV20210108\Money $item_promotion item_promotion
     *
     * @return self
     */
    public function setItemPromotion($item_promotion)
    {
        $this->container['item_promotion'] = $item_promotion;

        return $this;
    }
    /**
     * Gets item_tax
     *
     * @return \AmazonBusinessApi\Model\ReportingV20210108\Money
     */
    public function getItemTax()
    {
        return $this->container['item_tax'];
    }

    /**
     * Sets item_tax
     *
     * @param \AmazonBusinessApi\Model\ReportingV20210108\Money $item_tax item_tax
     *
     * @return self
     */
    public function setItemTax($item_tax)
    {
        $this->container['item_tax'] = $item_tax;

        return $this;
    }
    /**
     * Gets item_net_total
     *
     * @return \AmazonBusinessApi\Model\ReportingV20210108\Money
     */
    public function getItemNetTotal()
    {
        return $this->container['item_net_total'];
    }

    /**
     * Sets item_net_total
     *
     * @param \AmazonBusinessApi\Model\ReportingV20210108\Money $item_net_total item_net_total
     *
     * @return self
     */
    public function setItemNetTotal($item_net_total)
    {
        $this->container['item_net_total'] = $item_net_total;

        return $this;
    }
    /**
     * Gets purchase_order_line_item
     *
     * @return string
     */
    public function getPurchaseOrderLineItem()
    {
        return $this->container['purchase_order_line_item'];
    }

    /**
     * Sets purchase_order_line_item
     *
     * @param string $purchase_order_line_item Only for customers using Punchout. The cXML system adds a line item number.
     *
     * @return self
     */
    public function setPurchaseOrderLineItem($purchase_order_line_item)
    {
        $this->container['purchase_order_line_item'] = $purchase_order_line_item;

        return $this;
    }
    /**
     * Gets tax_exemption_applied
     *
     * @return bool
     */
    public function getTaxExemptionApplied()
    {
        return $this->container['tax_exemption_applied'];
    }

    /**
     * Sets tax_exemption_applied
     *
     * @param bool $tax_exemption_applied Yes or No.
     *
     * @return self
     */
    public function setTaxExemptionApplied($tax_exemption_applied)
    {
        $this->container['tax_exemption_applied'] = $tax_exemption_applied;

        return $this;
    }
    /**
     * Gets tax_exemption_type
     *
     * @return string
     */
    public function getTaxExemptionType()
    {
        return $this->container['tax_exemption_type'];
    }

    /**
     * Sets tax_exemption_type
     *
     * @param string $tax_exemption_type Code that specifies the type of tax exemption applied
     *
     * @return self
     */
    public function setTaxExemptionType($tax_exemption_type)
    {
        $this->container['tax_exemption_type'] = $tax_exemption_type;

        return $this;
    }
    /**
     * Gets tax_exempt_opt_out
     *
     * @return bool
     */
    public function getTaxExemptOptOut()
    {
        return $this->container['tax_exempt_opt_out'];
    }

    /**
     * Sets tax_exempt_opt_out
     *
     * @param bool $tax_exempt_opt_out Yes or No.
     *
     * @return self
     */
    public function setTaxExemptOptOut($tax_exempt_opt_out)
    {
        $this->container['tax_exempt_opt_out'] = $tax_exempt_opt_out;

        return $this;
    }
    /**
     * Gets discount_program
     *
     * @return string
     */
    public function getDiscountProgram()
    {
        return $this->container['discount_program'];
    }

    /**
     * Sets discount_program
     *
     * @param string $discount_program Negotiated Pricing or Quantity Discounts
     *
     * @return self
     */
    public function setDiscountProgram($discount_program)
    {
        $this->container['discount_program'] = $discount_program;

        return $this;
    }
    /**
     * Gets discount_type
     *
     * @return string
     */
    public function getDiscountType()
    {
        return $this->container['discount_type'];
    }

    /**
     * Sets discount_type
     *
     * @param string $discount_type Type of the discount applied
     *
     * @return self
     */
    public function setDiscountType($discount_type)
    {
        $this->container['discount_type'] = $discount_type;

        return $this;
    }
    /**
     * Gets discount_amount
     *
     * @return \AmazonBusinessApi\Model\ReportingV20210108\Money
     */
    public function getDiscountAmount()
    {
        return $this->container['discount_amount'];
    }

    /**
     * Sets discount_amount
     *
     * @param \AmazonBusinessApi\Model\ReportingV20210108\Money $discount_amount discount_amount
     *
     * @return self
     */
    public function setDiscountAmount($discount_amount)
    {
        $this->container['discount_amount'] = $discount_amount;

        return $this;
    }
    /**
     * Gets discount_ratio
     *
     * @return string
     */
    public function getDiscountRatio()
    {
        return $this->container['discount_ratio'];
    }

    /**
     * Sets discount_ratio
     *
     * @param string $discount_ratio The ratio of price to discount.
     *
     * @return self
     */
    public function setDiscountRatio($discount_ratio)
    {
        $this->container['discount_ratio'] = $discount_ratio;

        return $this;
    }
    /**
     * Gets seller
     *
     * @return \AmazonBusinessApi\Model\ReportingV20210108\Seller
     */
    public function getSeller()
    {
        return $this->container['seller'];
    }

    /**
     * Sets seller
     *
     * @param \AmazonBusinessApi\Model\ReportingV20210108\Seller $seller seller
     *
     * @return self
     */
    public function setSeller($seller)
    {
        $this->container['seller'] = $seller;

        return $this;
    }
    /**
     * Gets seller_credentials
     *
     * @return string[]
     */
    public function getSellerCredentials()
    {
        return $this->container['seller_credentials'];
    }

    /**
     * Sets seller_credentials
     *
     * @param string[] $seller_credentials Seller's credentials or certifications (i.e. Minority owned business, Veteran owned business, etc.)
     *
     * @return self
     */
    public function setSellerCredentials($seller_credentials)
    {
        $this->container['seller_credentials'] = $seller_credentials;

        return $this;
    }
    /**
     * Gets brand_code
     *
     * @return string
     */
    public function getBrandCode()
    {
        return $this->container['brand_code'];
    }

    /**
     * Sets brand_code
     *
     * @param string $brand_code Brand code as provided by the vendor or seller.
     *
     * @return self
     */
    public function setBrandCode($brand_code)
    {
        $this->container['brand_code'] = $brand_code;

        return $this;
    }
    /**
     * Gets brand_name
     *
     * @return string
     */
    public function getBrandName()
    {
        return $this->container['brand_name'];
    }

    /**
     * Sets brand_name
     *
     * @param string $brand_name Item Brand as provided by the vendor or seller.
     *
     * @return self
     */
    public function setBrandName($brand_name)
    {
        $this->container['brand_name'] = $brand_name;

        return $this;
    }
    /**
     * Gets manufacturer_name
     *
     * @return string
     */
    public function getManufacturerName()
    {
        return $this->container['manufacturer_name'];
    }

    /**
     * Sets manufacturer_name
     *
     * @param string $manufacturer_name Name of the manufacturer as provided by the vendor or seller.
     *
     * @return self
     */
    public function setManufacturerName($manufacturer_name)
    {
        $this->container['manufacturer_name'] = $manufacturer_name;

        return $this;
    }
    /**
     * Gets transaction_ids
     *
     * @return string[]
     */
    public function getTransactionIds()
    {
        return $this->container['transaction_ids'];
    }

    /**
     * Sets transaction_ids
     *
     * @param string[] $transaction_ids Transaction reference identifiers for the LineItem.
     *
     * @return self
     */
    public function setTransactionIds($transaction_ids)
    {
        $this->container['transaction_ids'] = $transaction_ids;

        return $this;
    }
    /**
     * Gets carrier_tracking_numbers
     *
     * @return string[]
     */
    public function getCarrierTrackingNumbers()
    {
        return $this->container['carrier_tracking_numbers'];
    }

    /**
     * Sets carrier_tracking_numbers
     *
     * @param string[] $carrier_tracking_numbers Tracking numbers from the shipment carrier for the LineItem.
     *
     * @return self
     */
    public function setCarrierTrackingNumbers($carrier_tracking_numbers)
    {
        $this->container['carrier_tracking_numbers'] = $carrier_tracking_numbers;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Enable iterating over all of the model's attributes in $key => $value format
     *
     * @return \Traversable
     */
    public function getIterator(): \Traversable
    {
        return (function () {
            foreach ($this->container as $key => $value) {
                yield $key => $value;
            }
        })();
    }

    /**
     * Retrieves the property with the given name by converting the property accession
     * to a getter call.
     *
     * @param string $propertyName
     * @return mixed
     */
    public function __get($propertyName)
    {
        // This doesn't make a syntactical difference since PHP is case-insensitive, but
        // makes error messages clearer (e.g. "Call to undefined method getFoo()" rather
        // than "Call to undefined method getfoo()").
        $ucProp = ucfirst($propertyName);
        $getter = "get$ucProp";
        return $this->$getter();
    }

    /**
     * Sets the property with the given name by converting the property accession
     * to a setter call.
     *
     * @param string $propertyName
     * @param mixed $propertyValue
     * @return AmazonBusinessApi\Model\ReportingV20210108\LineItem
     */
    public function __set($propertyName, $propertyValue)
    {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}

