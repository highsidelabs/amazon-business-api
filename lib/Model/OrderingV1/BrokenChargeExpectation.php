<?php
/**
 * BrokenChargeExpectation
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

use AmazonBusinessApi\Model\ModelInterface;
use AmazonBusinessApi\ObjectSerializer;
use ArrayAccess;

/**
 * BrokenChargeExpectation Class Doc Comment
 *
 * @category Class
 * @description The charges exceed the expected limit, which led to order rejection. This artifact will appear at rejected-item level.
 * @package  AmazonBusinessApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class BrokenChargeExpectation extends RejectionArtifact 
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BrokenChargeExpectation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'boundary' => '\AmazonBusinessApi\Model\OrderingV1\Money',
        'actual_amount' => '\AmazonBusinessApi\Model\OrderingV1\Money',
        'sources' => '\AmazonBusinessApi\Model\OrderingV1\ChargeSource[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'boundary' => null,
        'actual_amount' => null,
        'sources' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes + parent::openAPITypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats + parent::openAPIFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'boundary' => 'boundary',
        'actual_amount' => 'actualAmount',
        'sources' => 'sources'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'boundary' => 'setBoundary',
        'actual_amount' => 'setActualAmount',
        'sources' => 'setSources'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'boundary' => 'getBoundary',
        'actual_amount' => 'getActualAmount',
        'sources' => 'getSources'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
    }
    

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['boundary'] = $data['boundary'] ?? null;
        $this->container['actual_amount'] = $data['actual_amount'] ?? null;
        $this->container['sources'] = $data['sources'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['boundary'] === null) {
            $invalidProperties[] = "'boundary' can't be null";
        }
        if ($this->container['actual_amount'] === null) {
            $invalidProperties[] = "'actual_amount' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets boundary
     *
     * @return \AmazonBusinessApi\Model\OrderingV1\Money
     */
    public function getBoundary()
    {
        return $this->container['boundary'];
    }

    /**
     * Sets boundary
     *
     * @param \AmazonBusinessApi\Model\OrderingV1\Money $boundary boundary
     *
     * @return self
     */
    public function setBoundary($boundary)
    {
        $this->container['boundary'] = $boundary;

        return $this;
    }
    /**
     * Gets actual_amount
     *
     * @return \AmazonBusinessApi\Model\OrderingV1\Money
     */
    public function getActualAmount()
    {
        return $this->container['actual_amount'];
    }

    /**
     * Sets actual_amount
     *
     * @param \AmazonBusinessApi\Model\OrderingV1\Money $actual_amount actual_amount
     *
     * @return self
     */
    public function setActualAmount($actual_amount)
    {
        $this->container['actual_amount'] = $actual_amount;

        return $this;
    }
    /**
     * Gets sources
     *
     * @return \AmazonBusinessApi\Model\OrderingV1\ChargeSource[]|null
     */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
     * Sets sources
     *
     * @param \AmazonBusinessApi\Model\OrderingV1\ChargeSource[]|null $sources The list of charges with sum that exceeds the limit.
     *
     * @return self
     */
    public function setSources($sources)
    {
        $this->container['sources'] = $sources;

        return $this;
    }
}

