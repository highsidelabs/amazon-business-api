<?php
/**
 * OrderDetailsResult
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
 * OrderDetailsResult Class Doc Comment
 *
 * @category Class
 * @description The details of the order. Specifies how line items are broken up into ordered and rejected portions.
 * @package  AmazonBusinessApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class OrderDetailsResult extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderDetailsResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'line_items' => '\AmazonBusinessApi\Model\OrderingV1\ResultLineItem[]',
        'acceptance_artifacts' => '\AmazonBusinessApi\Model\OrderingV1\AcceptanceArtifact[]',
        'rejection_artifacts' => '\AmazonBusinessApi\Model\OrderingV1\RejectionArtifact[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'line_items' => null,
        'acceptance_artifacts' => null,
        'rejection_artifacts' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'headers' => 'headers',
        'line_items' => 'lineItems',
        'acceptance_artifacts' => 'acceptanceArtifacts',
        'rejection_artifacts' => 'rejectionArtifacts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'headers' => 'setHeaders',
        'line_items' => 'setLineItems',
        'acceptance_artifacts' => 'setAcceptanceArtifacts',
        'rejection_artifacts' => 'setRejectionArtifacts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'headers' => 'getHeaders',
        'line_items' => 'getLineItems',
        'acceptance_artifacts' => 'getAcceptanceArtifacts',
        'rejection_artifacts' => 'getRejectionArtifacts'
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
        $this->container['line_items'] = $data['line_items'] ?? null;
        $this->container['acceptance_artifacts'] = $data['acceptance_artifacts'] ?? null;
        $this->container['rejection_artifacts'] = $data['rejection_artifacts'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['line_items'] === null) {
            $invalidProperties[] = "'line_items' can't be null";
        }
        if ($this->container['acceptance_artifacts'] === null) {
            $invalidProperties[] = "'acceptance_artifacts' can't be null";
        }
        if ($this->container['rejection_artifacts'] === null) {
            $invalidProperties[] = "'rejection_artifacts' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Gets API response headers
     *
     * @return array[string]
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets API response headers (only relevant to response models)
     *
     * @param array[string => string] $headers Associative array of response headers.
     *
     * @return self
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;
        return $this;
    }

    /**
     * Gets line_items
     *
     * @return \AmazonBusinessApi\Model\OrderingV1\ResultLineItem[]
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \AmazonBusinessApi\Model\OrderingV1\ResultLineItem[] $line_items Order results for specific line items.
     *
     * @return self
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

        return $this;
    }
    /**
     * Gets acceptance_artifacts
     *
     * @return \AmazonBusinessApi\Model\OrderingV1\AcceptanceArtifact[]
     */
    public function getAcceptanceArtifacts()
    {
        return $this->container['acceptance_artifacts'];
    }

    /**
     * Sets acceptance_artifacts
     *
     * @param \AmazonBusinessApi\Model\OrderingV1\AcceptanceArtifact[] $acceptance_artifacts Results of a successful order.
     *
     * @return self
     */
    public function setAcceptanceArtifacts($acceptance_artifacts)
    {
        $this->container['acceptance_artifacts'] = $acceptance_artifacts;

        return $this;
    }
    /**
     * Gets rejection_artifacts
     *
     * @return \AmazonBusinessApi\Model\OrderingV1\RejectionArtifact[]
     */
    public function getRejectionArtifacts()
    {
        return $this->container['rejection_artifacts'];
    }

    /**
     * Sets rejection_artifacts
     *
     * @param \AmazonBusinessApi\Model\OrderingV1\RejectionArtifact[] $rejection_artifacts Reasons the order was rejected.
     *
     * @return self
     */
    public function setRejectionArtifacts($rejection_artifacts)
    {
        $this->container['rejection_artifacts'] = $rejection_artifacts;

        return $this;
    }
}


