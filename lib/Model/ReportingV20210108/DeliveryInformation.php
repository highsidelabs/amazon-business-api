<?php
/**
 * DeliveryInformation
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  AmazonBusinessApi
 */

/**
 * Amazon Business API for Order History
 *
 * With Amazon Business API for Order History you can create spend reports and track progress towards your spending goals
 *
 * The version of the OpenAPI document: 2021-01-08
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AmazonBusinessApi\Model\ReportingV20210108;
use AmazonBusinessApi\Model\BaseModel;
use \AmazonBusinessApi\Model\ModelInterface;
use \AmazonBusinessApi\ObjectSerializer;
use \ArrayAccess;

/**
 * DeliveryInformation Class Doc Comment
 *
 * @category Class
 * @description Details the delivery status and estimated delivery date.
 * @package  AmazonBusinessApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DeliveryInformation extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DeliveryInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'expected_delivery_date' => 'string',
        'delivery_status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'expected_delivery_date' => null,
        'delivery_status' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'expected_delivery_date' => 'expectedDeliveryDate',
        'delivery_status' => 'deliveryStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'expected_delivery_date' => 'setExpectedDeliveryDate',
        'delivery_status' => 'setDeliveryStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'expected_delivery_date' => 'getExpectedDeliveryDate',
        'delivery_status' => 'getDeliveryStatus'
    ];



    const DELIVERY_STATUS_DELIVERED = 'DELIVERED';
    const DELIVERY_STATUS_NOT_DELIVERED = 'NOT DELIVERED';
    const DELIVERY_STATUS_NOT_AVAILABLE = 'NOT AVAILABLE';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeliveryStatusAllowableValues()
    {
        $baseVals = [
            self::DELIVERY_STATUS_DELIVERED,
            self::DELIVERY_STATUS_NOT_DELIVERED,
            self::DELIVERY_STATUS_NOT_AVAILABLE,
        ];

        // This is necessary because Amazon does not consistently capitalize their
        // enum values, so we do case-insensitive enum value validation in ObjectSerializer
        return array_map(function ($val) { return strtoupper($val); }, $baseVals);
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
        $this->container['expected_delivery_date'] = $data['expected_delivery_date'] ?? null;
        $this->container['delivery_status'] = $data['delivery_status'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['expected_delivery_date'] === null) {
            $invalidProperties[] = "'expected_delivery_date' can't be null";
        }
        if ($this->container['delivery_status'] === null) {
            $invalidProperties[] = "'delivery_status' can't be null";
        }
        $allowedValues = $this->getDeliveryStatusAllowableValues();
        if (
            !is_null($this->container['delivery_status']) &&
            !in_array(strtoupper($this->container['delivery_status']), $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'delivery_status', must be one of '%s'",
                $this->container['delivery_status'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }


    /**
     * Gets expected_delivery_date
     *
     * @return string
     */
    public function getExpectedDeliveryDate()
    {
        return $this->container['expected_delivery_date'];
    }

    /**
     * Sets expected_delivery_date
     *
     * @param string $expected_delivery_date The expected delivery date of the shipment.
     *
     * @return self
     */
    public function setExpectedDeliveryDate($expected_delivery_date)
    {
        $this->container['expected_delivery_date'] = $expected_delivery_date;

        return $this;
    }
    /**
     * Gets delivery_status
     *
     * @return string
     */
    public function getDeliveryStatus()
    {
        return $this->container['delivery_status'];
    }

    /**
     * Sets delivery_status
     *
     * @param string $delivery_status The current delivery status of the shipment.
     *
     * @return self
     */
    public function setDeliveryStatus($delivery_status)
    {
        $allowedValues = $this->getDeliveryStatusAllowableValues();
        if (!in_array(strtoupper($delivery_status), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'delivery_status', must be one of '%s'",
                    $delivery_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['delivery_status'] = $delivery_status;

        return $this;
    }
}


