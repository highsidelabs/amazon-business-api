<?php
/**
 * Price
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
 * Price Class Doc Comment
 *
 * @category Class
 * @description A full description of the price of the product.
 * @package  AmazonBusinessApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Price extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Price';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'value' => '\AmazonBusinessApi\Model\ProductSearchV20200826\Money',
        'formatted_price' => 'string',
        'price_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'value' => null,
        'formatted_price' => null,
        'price_type' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'value' => 'value',
        'formatted_price' => 'formattedPrice',
        'price_type' => 'priceType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'value' => 'setValue',
        'formatted_price' => 'setFormattedPrice',
        'price_type' => 'setPriceType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'value' => 'getValue',
        'formatted_price' => 'getFormattedPrice',
        'price_type' => 'getPriceType'
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
        $this->container['value'] = $data['value'] ?? null;
        $this->container['formatted_price'] = $data['formatted_price'] ?? null;
        $this->container['price_type'] = $data['price_type'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ($this->container['formatted_price'] === null) {
            $invalidProperties[] = "'formatted_price' can't be null";
        }
        if ($this->container['price_type'] === null) {
            $invalidProperties[] = "'price_type' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets value
     *
     * @return \AmazonBusinessApi\Model\ProductSearchV20200826\Money
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param \AmazonBusinessApi\Model\ProductSearchV20200826\Money $value value
     *
     * @return self
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

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
     * Gets price_type
     *
     * @return string
     */
    public function getPriceType()
    {
        return $this->container['price_type'];
    }

    /**
     * Sets price_type
     *
     * @param string $price_type A description of the type of price. Some prices are indicative of special business pricing for a customer. Possible values:  *  BUSINESS  *  BUSINESS_QUANTITY_DISCOUNT  *  BUSINESS_VOLUME_DISCOUNT  * BUSINESS_EXCLUSIVE  *  NEW  * SALE  *  USED  * LIST_PRICE  * OTHER
     *
     * @return self
     */
    public function setPriceType($price_type)
    {
        $this->container['price_type'] = $price_type;

        return $this;
    }
}


