<?php
/**
 * TaxExclusivePrice
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  AmazonBusinessApi
 */

/**
 * Amazon Business API for Products
 *
 * An API for getting data about products available to Amazon Business customers. This includes information such as the product title, the merchant selling the product, and the current price.
 *
 * The version of the OpenAPI document: 2020-08-26
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AmazonBusinessApi\Model\ProductSearchV20200826;
use AmazonBusinessApi\Model\BaseModel;
use AmazonBusinessApi\Model\ModelInterface;
use AmazonBusinessApi\ObjectSerializer;
use ArrayAccess;

/**
 * TaxExclusivePrice Class Doc Comment
 *
 * @category Class
 * @description The price of the product without tax.
 * @package  AmazonBusinessApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class TaxExclusivePrice extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TaxExclusivePrice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tax_exclusive_amount' => '\AmazonBusinessApi\Model\ProductSearchV20200826\Money',
        'display_string' => 'string',
        'formatted_price' => 'string',
        'label' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'tax_exclusive_amount' => null,
        'display_string' => null,
        'formatted_price' => null,
        'label' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'tax_exclusive_amount' => 'taxExclusiveAmount',
        'display_string' => 'displayString',
        'formatted_price' => 'formattedPrice',
        'label' => 'label'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'tax_exclusive_amount' => 'setTaxExclusiveAmount',
        'display_string' => 'setDisplayString',
        'formatted_price' => 'setFormattedPrice',
        'label' => 'setLabel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tax_exclusive_amount' => 'getTaxExclusiveAmount',
        'display_string' => 'getDisplayString',
        'formatted_price' => 'getFormattedPrice',
        'label' => 'getLabel'
    ];


    
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
        $this->container['tax_exclusive_amount'] = $data['tax_exclusive_amount'] ?? null;
        $this->container['display_string'] = $data['display_string'] ?? null;
        $this->container['formatted_price'] = $data['formatted_price'] ?? null;
        $this->container['label'] = $data['label'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['tax_exclusive_amount'] === null) {
            $invalidProperties[] = "'tax_exclusive_amount' can't be null";
        }
        if ($this->container['display_string'] === null) {
            $invalidProperties[] = "'display_string' can't be null";
        }
        if ($this->container['formatted_price'] === null) {
            $invalidProperties[] = "'formatted_price' can't be null";
        }
        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets tax_exclusive_amount
     *
     * @return \AmazonBusinessApi\Model\ProductSearchV20200826\Money
     */
    public function getTaxExclusiveAmount()
    {
        return $this->container['tax_exclusive_amount'];
    }

    /**
     * Sets tax_exclusive_amount
     *
     * @param \AmazonBusinessApi\Model\ProductSearchV20200826\Money $tax_exclusive_amount tax_exclusive_amount
     *
     * @return self
     */
    public function setTaxExclusiveAmount($tax_exclusive_amount)
    {
        $this->container['tax_exclusive_amount'] = $tax_exclusive_amount;

        return $this;
    }
    /**
     * Gets display_string
     *
     * @return string
     */
    public function getDisplayString()
    {
        return $this->container['display_string'];
    }

    /**
     * Sets display_string
     *
     * @param string $display_string A displayable message about the tax exclusion.
     *
     * @return self
     */
    public function setDisplayString($display_string)
    {
        $this->container['display_string'] = $display_string;

        return $this;
    }
    /**
     * Gets formatted_price
     *
     * @return string
     */
    public function getFormattedPrice()
    {
        return $this->container['formatted_price'];
    }

    /**
     * Sets formatted_price
     *
     * @param string $formatted_price A displayable version of the price and currency code
     *
     * @return self
     */
    public function setFormattedPrice($formatted_price)
    {
        $this->container['formatted_price'] = $formatted_price;

        return $this;
    }
    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label A displayable description of the type of tax exclusion.
     *
     * @return self
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }
}


