<?php
/**
 * RefinementResult
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
 * RefinementResult Class Doc Comment
 *
 * @category Class
 * @description The data that describes the refinements used to narrow down results. These values remains same for all pages in the result set.
 * @package  AmazonBusinessApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class RefinementResult implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RefinementResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'categories' => '\AmazonBusinessApi\Model\ProductSearchV20200826\Category[]',
        'sub_categories' => '\AmazonBusinessApi\Model\ProductSearchV20200826\SubCategory[]',
        'availability_options' => '\AmazonBusinessApi\Model\ProductSearchV20200826\Availability[]',
        'delivery_day_options' => '\AmazonBusinessApi\Model\ProductSearchV20200826\DeliveryDay[]',
        'eligible_for_free_shipping_options' => '\AmazonBusinessApi\Model\ProductSearchV20200826\EligibleForFreeShipping[]',
        'prime_eligible' => '\AmazonBusinessApi\Model\ProductSearchV20200826\PrimeEligible[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'categories' => null,
        'sub_categories' => null,
        'availability_options' => null,
        'delivery_day_options' => null,
        'eligible_for_free_shipping_options' => null,
        'prime_eligible' => null
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
        'categories' => 'categories',
        'sub_categories' => 'subCategories',
        'availability_options' => 'availabilityOptions',
        'delivery_day_options' => 'deliveryDayOptions',
        'eligible_for_free_shipping_options' => 'eligibleForFreeShippingOptions',
        'prime_eligible' => 'primeEligible'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'categories' => 'setCategories',
        'sub_categories' => 'setSubCategories',
        'availability_options' => 'setAvailabilityOptions',
        'delivery_day_options' => 'setDeliveryDayOptions',
        'eligible_for_free_shipping_options' => 'setEligibleForFreeShippingOptions',
        'prime_eligible' => 'setPrimeEligible'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'categories' => 'getCategories',
        'sub_categories' => 'getSubCategories',
        'availability_options' => 'getAvailabilityOptions',
        'delivery_day_options' => 'getDeliveryDayOptions',
        'eligible_for_free_shipping_options' => 'getEligibleForFreeShippingOptions',
        'prime_eligible' => 'getPrimeEligible'
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
        $this->container['categories'] = $data['categories'] ?? null;
        $this->container['sub_categories'] = $data['sub_categories'] ?? null;
        $this->container['availability_options'] = $data['availability_options'] ?? null;
        $this->container['delivery_day_options'] = $data['delivery_day_options'] ?? null;
        $this->container['eligible_for_free_shipping_options'] = $data['eligible_for_free_shipping_options'] ?? null;
        $this->container['prime_eligible'] = $data['prime_eligible'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['categories'] === null) {
            $invalidProperties[] = "'categories' can't be null";
        }
        if ($this->container['sub_categories'] === null) {
            $invalidProperties[] = "'sub_categories' can't be null";
        }
        if ($this->container['availability_options'] === null) {
            $invalidProperties[] = "'availability_options' can't be null";
        }
        if ($this->container['delivery_day_options'] === null) {
            $invalidProperties[] = "'delivery_day_options' can't be null";
        }
        if ($this->container['eligible_for_free_shipping_options'] === null) {
            $invalidProperties[] = "'eligible_for_free_shipping_options' can't be null";
        }
        if ($this->container['prime_eligible'] === null) {
            $invalidProperties[] = "'prime_eligible' can't be null";
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
     * Gets categories
     *
     * @return \AmazonBusinessApi\Model\ProductSearchV20200826\Category[]
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param \AmazonBusinessApi\Model\ProductSearchV20200826\Category[] $categories A list of categories which have matches for the stated search keyword. A category id can sent back in the subsequent request to get a shorter list of more relevant search results.
     *
     * @return self
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }
    /**
     * Gets sub_categories
     *
     * @return \AmazonBusinessApi\Model\ProductSearchV20200826\SubCategory[]
     */
    public function getSubCategories()
    {
        return $this->container['sub_categories'];
    }

    /**
     * Sets sub_categories
     *
     * @param \AmazonBusinessApi\Model\ProductSearchV20200826\SubCategory[] $sub_categories A list of sub categories which have matches for given category. A search subcategory Id should be sent back in the next request to get a shorter list of more relevant products.
     *
     * @return self
     */
    public function setSubCategories($sub_categories)
    {
        $this->container['sub_categories'] = $sub_categories;

        return $this;
    }
    /**
     * Gets availability_options
     *
     * @return \AmazonBusinessApi\Model\ProductSearchV20200826\Availability[]
     */
    public function getAvailabilityOptions()
    {
        return $this->container['availability_options'];
    }

    /**
     * Sets availability_options
     *
     * @param \AmazonBusinessApi\Model\ProductSearchV20200826\Availability[] $availability_options Two availability ids standing for in stock only and include out of stock would appear in the search refinement. Availability Id should be sent as an parameter in the next request to get a more filtered list of products and the availability filtering should return the products whose offers are aligned with the availability ID request passed.
     *
     * @return self
     */
    public function setAvailabilityOptions($availability_options)
    {
        $this->container['availability_options'] = $availability_options;

        return $this;
    }
    /**
     * Gets delivery_day_options
     *
     * @return \AmazonBusinessApi\Model\ProductSearchV20200826\DeliveryDay[]
     */
    public function getDeliveryDayOptions()
    {
        return $this->container['delivery_day_options'];
    }

    /**
     * Sets delivery_day_options
     *
     * @param \AmazonBusinessApi\Model\ProductSearchV20200826\DeliveryDay[] $delivery_day_options Two delivery day ids standing for Get It Today and Get It by Tomorrow would appear in the search refinement.
     *
     * @return self
     */
    public function setDeliveryDayOptions($delivery_day_options)
    {
        $this->container['delivery_day_options'] = $delivery_day_options;

        return $this;
    }
    /**
     * Gets eligible_for_free_shipping_options
     *
     * @return \AmazonBusinessApi\Model\ProductSearchV20200826\EligibleForFreeShipping[]
     */
    public function getEligibleForFreeShippingOptions()
    {
        return $this->container['eligible_for_free_shipping_options'];
    }

    /**
     * Sets eligible_for_free_shipping_options
     *
     * @param \AmazonBusinessApi\Model\ProductSearchV20200826\EligibleForFreeShipping[] $eligible_for_free_shipping_options One eligibleForFreeShippingOption Id would appear in the search refinement. EligibleForFreeShippingOption ID should be sent as an parameter in the next request to get a more filtered list of products and this filtering should return the products that are Free shipping by Amazon.
     *
     * @return self
     */
    public function setEligibleForFreeShippingOptions($eligible_for_free_shipping_options)
    {
        $this->container['eligible_for_free_shipping_options'] = $eligible_for_free_shipping_options;

        return $this;
    }
    /**
     * Gets prime_eligible
     *
     * @return \AmazonBusinessApi\Model\ProductSearchV20200826\PrimeEligible[]
     */
    public function getPrimeEligible()
    {
        return $this->container['prime_eligible'];
    }

    /**
     * Sets prime_eligible
     *
     * @param \AmazonBusinessApi\Model\ProductSearchV20200826\PrimeEligible[] $prime_eligible This can be used as a query param which can be used to fetch only prime eligible items.
     *
     * @return self
     */
    public function setPrimeEligible($prime_eligible)
    {
        $this->container['prime_eligible'] = $prime_eligible;

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
     * @return AmazonBusinessApi\Model\ProductSearchV20200826\RefinementResult
     */
    public function __set($propertyName, $propertyValue)
    {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}

