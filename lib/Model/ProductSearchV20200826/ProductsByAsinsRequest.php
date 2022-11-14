<?php
/**
 * ProductsByAsinsRequest
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

use \AmazonBusinessApi\Model\ModelInterface;
use \AmazonBusinessApi\ObjectSerializer;
use \ArrayAccess;

/**
 * ProductsByAsinsRequest Class Doc Comment
 *
 * @category Class
 * @description Request object to be used to search a list of asins.
 * @package  AmazonBusinessApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ProductsByAsinsRequest implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductsByAsinsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'product_ids' => 'string[]',
        'product_region' => 'string',
        'locale' => 'string',
        'shipping_postal_code' => 'string',
        'quantity' => 'int',
        'facets' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'product_ids' => null,
        'product_region' => null,
        'locale' => null,
        'shipping_postal_code' => null,
        'quantity' => null,
        'facets' => null
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
        'product_ids' => 'productIds',
        'product_region' => 'productRegion',
        'locale' => 'locale',
        'shipping_postal_code' => 'shippingPostalCode',
        'quantity' => 'quantity',
        'facets' => 'facets'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'product_ids' => 'setProductIds',
        'product_region' => 'setProductRegion',
        'locale' => 'setLocale',
        'shipping_postal_code' => 'setShippingPostalCode',
        'quantity' => 'setQuantity',
        'facets' => 'setFacets'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_ids' => 'getProductIds',
        'product_region' => 'getProductRegion',
        'locale' => 'getLocale',
        'shipping_postal_code' => 'getShippingPostalCode',
        'quantity' => 'getQuantity',
        'facets' => 'getFacets'
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

    const PRODUCT_REGION_DE = 'DE';
    const PRODUCT_REGION_FR = 'FR';
    const PRODUCT_REGION_UK = 'UK';
    const PRODUCT_REGION_IT = 'IT';
    const PRODUCT_REGION_ES = 'ES';
    const PRODUCT_REGION_US = 'US';
    const PRODUCT_REGION_CA = 'CA';
    const PRODUCT_REGION_JP = 'JP';
    

    const FACETS_OFFERS = 'OFFERS';
    const FACETS_IMAGES = 'IMAGES';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProductRegionAllowableValues()
    {
        return [
            self::PRODUCT_REGION_DE,
            self::PRODUCT_REGION_FR,
            self::PRODUCT_REGION_UK,
            self::PRODUCT_REGION_IT,
            self::PRODUCT_REGION_ES,
            self::PRODUCT_REGION_US,
            self::PRODUCT_REGION_CA,
            self::PRODUCT_REGION_JP,
        ];
    }
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFacetsAllowableValues()
    {
        return [
            self::FACETS_OFFERS,
            self::FACETS_IMAGES,
        ];
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
        $this->container['product_ids'] = $data['product_ids'] ?? null;
        $this->container['product_region'] = $data['product_region'] ?? null;
        $this->container['locale'] = $data['locale'] ?? null;
        $this->container['shipping_postal_code'] = $data['shipping_postal_code'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['facets'] = $data['facets'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['product_ids'] === null) {
            $invalidProperties[] = "'product_ids' can't be null";
        }
        if ($this->container['product_region'] === null) {
            $invalidProperties[] = "'product_region' can't be null";
        }
        $allowedValues = $this->getProductRegionAllowableValues();
        if (!is_null($this->container['product_region']) && !in_array($this->container['product_region'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'product_region', must be one of '%s'",
                $this->container['product_region'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['locale'] === null) {
            $invalidProperties[] = "'locale' can't be null";
        }
        if (!preg_match("/^[-_]+$/", $this->container['locale'])) {
            $invalidProperties[] = "invalid value for 'locale', must be conform to the pattern /^[-_]+$/.";
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
     * Gets product_ids
     *
     * @return string[]
     */
    public function getProductIds()
    {
        return $this->container['product_ids'];
    }

    /**
     * Sets product_ids
     *
     * @param string[] $product_ids The list of Amazon Standard Item Identifier (ASIN) for the product. The maximum number of asins allowed in each call is 30.
     *
     * @return self
     */
    public function setProductIds($product_ids)
    {
        $this->container['product_ids'] = $product_ids;

        return $this;
    }
    /**
     * Gets product_region
     *
     * @return string
     */
    public function getProductRegion()
    {
        return $this->container['product_region'];
    }

    /**
     * Sets product_region
     *
     * @param string $product_region The region where you wish to purchase the product.
     *
     * @return self
     */
    public function setProductRegion($product_region)
    {
        $allowedValues = $this->getProductRegionAllowableValues();
        if (!in_array($product_region, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'product_region', must be one of '%s'",
                    $product_region,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['product_region'] = $product_region;

        return $this;
    }
    /**
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale The locale of the request, in the form of an IETF language tag. Each ProductRegion supports one or more locales. This value should comply with java.util.Locale.
     *
     * @return self
     */
    public function setLocale($locale)
    {

        if ((!preg_match("/^[-_]+$/", $locale))) {
            throw new \InvalidArgumentException("invalid value for $locale when calling ProductsByAsinsRequest., must conform to the pattern /^[-_]+$/.");
        }

        $this->container['locale'] = $locale;

        return $this;
    }
    /**
     * Gets shipping_postal_code
     *
     * @return string|null
     */
    public function getShippingPostalCode()
    {
        return $this->container['shipping_postal_code'];
    }

    /**
     * Sets shipping_postal_code
     *
     * @param string|null $shipping_postal_code The postal/zip code for customer's request. This parameter does not support geocode.
     *
     * @return self
     */
    public function setShippingPostalCode($shipping_postal_code)
    {
        $this->container['shipping_postal_code'] = $shipping_postal_code;

        return $this;
    }
    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity The number of units the customer intends to purchase. This helps Amazon to determine quantity-based discounts if an eligible offer is present. Defaults to 1.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }
    /**
     * Gets facets
     *
     * @return string[]|null
     */
    public function getFacets()
    {
        return $this->container['facets'];
    }

    /**
     * Sets facets
     *
     * @param string[]|null $facets A list of data facets to include in the response. If you include more than one facet in your requst separate each facet value with a comma.
     *
     * @return self
     */
    public function setFacets($facets)
    {
        $allowedValues = $this->getFacetsAllowableValues();
        if (!is_null($facets) && array_diff($facets, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'facets', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['facets'] = $facets;

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
     * @return AmazonBusinessApi\Model\ProductSearchV20200826\ProductsByAsinsRequest
     */
    public function __set($propertyName, $propertyValue)
    {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}

