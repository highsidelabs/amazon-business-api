<?php
/**
 * Attribute
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  AmazonBusinessApi
 */

/**
 * Amazon Business Ordering API Model
 *
 * With Amazon Business ordering API, integrators can build applications that allow Amazon Business customers to define and execute an order request.
 *
 * The version of the OpenAPI document: 1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AmazonBusinessApi\Model\OrderingV1;
use AmazonBusinessApi\Model\BaseModel;
use AmazonBusinessApi\Model\ModelInterface;
use AmazonBusinessApi\ObjectSerializer;
use ArrayAccess;

/**
 * Attribute Class Doc Comment
 *
 * @category Class
 * @description A customer-determined aspect of the order.
 * @package  AmazonBusinessApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Attribute extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = 'attribute_type';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Attribute';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'attribute_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'attribute_type' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'attribute_type' => 'attributeType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'attribute_type' => 'setAttributeType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attribute_type' => 'getAttributeType'
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
        $this->container['attribute_type'] = $data['attribute_type'] ?? null;

        // Initialize discriminator property with the model name.
        $this->container['attribute_type'] = static::$openAPIModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['attribute_type'] === null) {
            $invalidProperties[] = "'attribute_type' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets attribute_type
     *
     * @return string
     */
    public function getAttributeType()
    {
        return $this->container['attribute_type'];
    }

    /**
     * Sets attribute_type
     *
     * @param string $attribute_type The schema name for a subtype.
     *
     * @return self
     */
    public function setAttributeType($attribute_type)
    {
        $this->container['attribute_type'] = $attribute_type;

        return $this;
    }
}


