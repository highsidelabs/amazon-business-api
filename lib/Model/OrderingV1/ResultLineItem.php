<?php
/**
 * ResultLineItem
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
 * ResultLineItem Class Doc Comment
 *
 * @category Class
 * @description Results of an order for a specific line item.
 * @package  AmazonBusinessApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ResultLineItem extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ResultLineItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'external_id' => 'string',
        'accepted_items' => '\AmazonBusinessApi\Model\OrderingV1\AcceptedItem[]',
        'rejected_items' => '\AmazonBusinessApi\Model\OrderingV1\RejectedItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'external_id' => null,
        'accepted_items' => null,
        'rejected_items' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'external_id' => 'externalId',
        'accepted_items' => 'acceptedItems',
        'rejected_items' => 'rejectedItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'external_id' => 'setExternalId',
        'accepted_items' => 'setAcceptedItems',
        'rejected_items' => 'setRejectedItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'external_id' => 'getExternalId',
        'accepted_items' => 'getAcceptedItems',
        'rejected_items' => 'getRejectedItems'
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
        $this->container['external_id'] = $data['external_id'] ?? null;
        $this->container['accepted_items'] = $data['accepted_items'] ?? null;
        $this->container['rejected_items'] = $data['rejected_items'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['external_id'] === null) {
            $invalidProperties[] = "'external_id' can't be null";
        }
        if ($this->container['accepted_items'] === null) {
            $invalidProperties[] = "'accepted_items' can't be null";
        }
        if ($this->container['rejected_items'] === null) {
            $invalidProperties[] = "'rejected_items' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id The customer-specified identifier for this line item.
     *
     * @return self
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }
    /**
     * Gets accepted_items
     *
     * @return \AmazonBusinessApi\Model\OrderingV1\AcceptedItem[]
     */
    public function getAcceptedItems()
    {
        return $this->container['accepted_items'];
    }

    /**
     * Sets accepted_items
     *
     * @param \AmazonBusinessApi\Model\OrderingV1\AcceptedItem[] $accepted_items Portions of the requested line item quantity that were successfully ordered.
     *
     * @return self
     */
    public function setAcceptedItems($accepted_items)
    {
        $this->container['accepted_items'] = $accepted_items;

        return $this;
    }
    /**
     * Gets rejected_items
     *
     * @return \AmazonBusinessApi\Model\OrderingV1\RejectedItem[]
     */
    public function getRejectedItems()
    {
        return $this->container['rejected_items'];
    }

    /**
     * Sets rejected_items
     *
     * @param \AmazonBusinessApi\Model\OrderingV1\RejectedItem[] $rejected_items Portions of the requested line item quantity that couldn't be ordered.
     *
     * @return self
     */
    public function setRejectedItems($rejected_items)
    {
        $this->container['rejected_items'] = $rejected_items;

        return $this;
    }
}

