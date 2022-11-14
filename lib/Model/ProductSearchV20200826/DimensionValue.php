<?php
/**
 * DimensionValue
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
use \AmazonBusinessApi\Model\ModelInterface;
use \AmazonBusinessApi\ObjectSerializer;
use \ArrayAccess;

/**
 * DimensionValue Class Doc Comment
 *
 * @category Class
 * @description Value of a dimension and its index   exp. {index:0, displayString:red}
 * @package  AmazonBusinessApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DimensionValue extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DimensionValue';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'index' => 'int',
        'display_string' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'index' => null,
        'display_string' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'index' => 'index',
        'display_string' => 'displayString'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'index' => 'setIndex',
        'display_string' => 'setDisplayString'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'index' => 'getIndex',
        'display_string' => 'getDisplayString'
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
        $this->container['index'] = $data['index'] ?? null;
        $this->container['display_string'] = $data['display_string'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }


    /**
     * Gets index
     *
     * @return int|null
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     * @param int|null $index index of the value
     *
     * @return self
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

        return $this;
    }
    /**
     * Gets display_string
     *
     * @return string|null
     */
    public function getDisplayString()
    {
        return $this->container['display_string'];
    }

    /**
     * Sets display_string
     *
     * @param string|null $display_string String of the dimension value in its readable form   exp. red, sm, 12-packs
     *
     * @return self
     */
    public function setDisplayString($display_string)
    {
        $this->container['display_string'] = $display_string;

        return $this;
    }
}


