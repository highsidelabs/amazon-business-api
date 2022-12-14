<?php
/**
 * Condition
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
 * Condition Class Doc Comment
 *
 * @category Class
 * @description Information about the condition of the product.
 * @package  AmazonBusinessApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Condition extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Condition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'condition_value' => '\AmazonBusinessApi\Model\ProductSearchV20200826\ConditionValue',
        'condition_note' => 'string',
        'sub_condition' => '\AmazonBusinessApi\Model\ProductSearchV20200826\SubCondition'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'condition_value' => null,
        'condition_note' => null,
        'sub_condition' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'condition_value' => 'conditionValue',
        'condition_note' => 'conditionNote',
        'sub_condition' => 'subCondition'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'condition_value' => 'setConditionValue',
        'condition_note' => 'setConditionNote',
        'sub_condition' => 'setSubCondition'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'condition_value' => 'getConditionValue',
        'condition_note' => 'getConditionNote',
        'sub_condition' => 'getSubCondition'
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
        $this->container['condition_value'] = $data['condition_value'] ?? null;
        $this->container['condition_note'] = $data['condition_note'] ?? null;
        $this->container['sub_condition'] = $data['sub_condition'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['condition_value'] === null) {
            $invalidProperties[] = "'condition_value' can't be null";
        }
        if ($this->container['condition_note'] === null) {
            $invalidProperties[] = "'condition_note' can't be null";
        }
        if ($this->container['sub_condition'] === null) {
            $invalidProperties[] = "'sub_condition' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets condition_value
     *
     * @return \AmazonBusinessApi\Model\ProductSearchV20200826\ConditionValue
     */
    public function getConditionValue()
    {
        return $this->container['condition_value'];
    }

    /**
     * Sets condition_value
     *
     * @param \AmazonBusinessApi\Model\ProductSearchV20200826\ConditionValue $condition_value condition_value
     *
     * @return self
     */
    public function setConditionValue($condition_value)
    {
        $this->container['condition_value'] = $condition_value;

        return $this;
    }
    /**
     * Gets condition_note
     *
     * @return string
     */
    public function getConditionNote()
    {
        return $this->container['condition_note'];
    }

    /**
     * Sets condition_note
     *
     * @param string $condition_note Additional details on the product's condition.
     *
     * @return self
     */
    public function setConditionNote($condition_note)
    {
        $this->container['condition_note'] = $condition_note;

        return $this;
    }
    /**
     * Gets sub_condition
     *
     * @return \AmazonBusinessApi\Model\ProductSearchV20200826\SubCondition
     */
    public function getSubCondition()
    {
        return $this->container['sub_condition'];
    }

    /**
     * Sets sub_condition
     *
     * @param \AmazonBusinessApi\Model\ProductSearchV20200826\SubCondition $sub_condition sub_condition
     *
     * @return self
     */
    public function setSubCondition($sub_condition)
    {
        $this->container['sub_condition'] = $sub_condition;

        return $this;
    }
}


