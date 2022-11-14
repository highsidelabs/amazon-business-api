<?php
/**
 * Shipment
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

use \AmazonBusinessApi\Model\ModelInterface;
use \AmazonBusinessApi\ObjectSerializer;
use \ArrayAccess;

/**
 * Shipment Class Doc Comment
 *
 * @category Class
 * @description This attribute represents a shipment object
 * @package  AmazonBusinessApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Shipment implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Shipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipment_date' => 'string',
        'shipment_status' => 'string',
        'carrier_tracking' => 'string',
        'delivery_information' => '\AmazonBusinessApi\Model\ReportingV20210108\DeliveryInformation',
        'shipment_quantity' => 'int',
        'shipment_sub_total' => '\AmazonBusinessApi\Model\ReportingV20210108\Money',
        'shipment_shipping_and_handling' => '\AmazonBusinessApi\Model\ReportingV20210108\Money',
        'shipment_promotion' => '\AmazonBusinessApi\Model\ReportingV20210108\Money',
        'shipment_tax' => '\AmazonBusinessApi\Model\ReportingV20210108\Money',
        'shipment_net_total' => '\AmazonBusinessApi\Model\ReportingV20210108\Money',
        'carrier_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shipment_date' => null,
        'shipment_status' => null,
        'carrier_tracking' => null,
        'delivery_information' => null,
        'shipment_quantity' => null,
        'shipment_sub_total' => null,
        'shipment_shipping_and_handling' => null,
        'shipment_promotion' => null,
        'shipment_tax' => null,
        'shipment_net_total' => null,
        'carrier_name' => null
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
        'shipment_date' => 'shipmentDate',
        'shipment_status' => 'shipmentStatus',
        'carrier_tracking' => 'carrierTracking',
        'delivery_information' => 'deliveryInformation',
        'shipment_quantity' => 'shipmentQuantity',
        'shipment_sub_total' => 'shipmentSubTotal',
        'shipment_shipping_and_handling' => 'shipmentShippingAndHandling',
        'shipment_promotion' => 'shipmentPromotion',
        'shipment_tax' => 'shipmentTax',
        'shipment_net_total' => 'shipmentNetTotal',
        'carrier_name' => 'carrierName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'shipment_date' => 'setShipmentDate',
        'shipment_status' => 'setShipmentStatus',
        'carrier_tracking' => 'setCarrierTracking',
        'delivery_information' => 'setDeliveryInformation',
        'shipment_quantity' => 'setShipmentQuantity',
        'shipment_sub_total' => 'setShipmentSubTotal',
        'shipment_shipping_and_handling' => 'setShipmentShippingAndHandling',
        'shipment_promotion' => 'setShipmentPromotion',
        'shipment_tax' => 'setShipmentTax',
        'shipment_net_total' => 'setShipmentNetTotal',
        'carrier_name' => 'setCarrierName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_date' => 'getShipmentDate',
        'shipment_status' => 'getShipmentStatus',
        'carrier_tracking' => 'getCarrierTracking',
        'delivery_information' => 'getDeliveryInformation',
        'shipment_quantity' => 'getShipmentQuantity',
        'shipment_sub_total' => 'getShipmentSubTotal',
        'shipment_shipping_and_handling' => 'getShipmentShippingAndHandling',
        'shipment_promotion' => 'getShipmentPromotion',
        'shipment_tax' => 'getShipmentTax',
        'shipment_net_total' => 'getShipmentNetTotal',
        'carrier_name' => 'getCarrierName'
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

    const SHIPMENT_STATUS_SHIPPED = 'Shipped';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShipmentStatusAllowableValues()
    {
        $baseVals = [
            self::SHIPMENT_STATUS_SHIPPED,
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
        $this->container['shipment_date'] = $data['shipment_date'] ?? null;
        $this->container['shipment_status'] = $data['shipment_status'] ?? null;
        $this->container['carrier_tracking'] = $data['carrier_tracking'] ?? null;
        $this->container['delivery_information'] = $data['delivery_information'] ?? null;
        $this->container['shipment_quantity'] = $data['shipment_quantity'] ?? null;
        $this->container['shipment_sub_total'] = $data['shipment_sub_total'] ?? null;
        $this->container['shipment_shipping_and_handling'] = $data['shipment_shipping_and_handling'] ?? null;
        $this->container['shipment_promotion'] = $data['shipment_promotion'] ?? null;
        $this->container['shipment_tax'] = $data['shipment_tax'] ?? null;
        $this->container['shipment_net_total'] = $data['shipment_net_total'] ?? null;
        $this->container['carrier_name'] = $data['carrier_name'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['shipment_date'] === null) {
            $invalidProperties[] = "'shipment_date' can't be null";
        }
        if ($this->container['shipment_status'] === null) {
            $invalidProperties[] = "'shipment_status' can't be null";
        }
        $allowedValues = $this->getShipmentStatusAllowableValues();
        if (
            !is_null($this->container['shipment_status']) &&
            !in_array(strtoupper($this->container['shipment_status']), $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'shipment_status', must be one of '%s'",
                $this->container['shipment_status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['carrier_tracking'] === null) {
            $invalidProperties[] = "'carrier_tracking' can't be null";
        }
        if ($this->container['delivery_information'] === null) {
            $invalidProperties[] = "'delivery_information' can't be null";
        }
        if ($this->container['shipment_quantity'] === null) {
            $invalidProperties[] = "'shipment_quantity' can't be null";
        }
        if ($this->container['shipment_sub_total'] === null) {
            $invalidProperties[] = "'shipment_sub_total' can't be null";
        }
        if ($this->container['shipment_shipping_and_handling'] === null) {
            $invalidProperties[] = "'shipment_shipping_and_handling' can't be null";
        }
        if ($this->container['shipment_promotion'] === null) {
            $invalidProperties[] = "'shipment_promotion' can't be null";
        }
        if ($this->container['shipment_tax'] === null) {
            $invalidProperties[] = "'shipment_tax' can't be null";
        }
        if ($this->container['shipment_net_total'] === null) {
            $invalidProperties[] = "'shipment_net_total' can't be null";
        }
        if ($this->container['carrier_name'] === null) {
            $invalidProperties[] = "'carrier_name' can't be null";
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
     * Gets shipment_date
     *
     * @return string
     */
    public function getShipmentDate()
    {
        return $this->container['shipment_date'];
    }

    /**
     * Sets shipment_date
     *
     * @param string $shipment_date Date when the item was shipped
     *
     * @return self
     */
    public function setShipmentDate($shipment_date)
    {
        $this->container['shipment_date'] = $shipment_date;

        return $this;
    }
    /**
     * Gets shipment_status
     *
     * @return string
     */
    public function getShipmentStatus()
    {
        return $this->container['shipment_status'];
    }

    /**
     * Sets shipment_status
     *
     * @param string $shipment_status Current status of the shipment
     *
     * @return self
     */
    public function setShipmentStatus($shipment_status)
    {
        $allowedValues = $this->getShipmentStatusAllowableValues();
        if (!in_array(strtoupper($shipment_status), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'shipment_status', must be one of '%s'",
                    $shipment_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shipment_status'] = $shipment_status;

        return $this;
    }
    /**
     * Gets carrier_tracking
     *
     * @return string
     */
    public function getCarrierTracking()
    {
        return $this->container['carrier_tracking'];
    }

    /**
     * Sets carrier_tracking
     *
     * @param string $carrier_tracking Tracking number from the shipment carrier.
     *
     * @return self
     */
    public function setCarrierTracking($carrier_tracking)
    {
        $this->container['carrier_tracking'] = $carrier_tracking;

        return $this;
    }
    /**
     * Gets delivery_information
     *
     * @return \AmazonBusinessApi\Model\ReportingV20210108\DeliveryInformation
     */
    public function getDeliveryInformation()
    {
        return $this->container['delivery_information'];
    }

    /**
     * Sets delivery_information
     *
     * @param \AmazonBusinessApi\Model\ReportingV20210108\DeliveryInformation $delivery_information delivery_information
     *
     * @return self
     */
    public function setDeliveryInformation($delivery_information)
    {
        $this->container['delivery_information'] = $delivery_information;

        return $this;
    }
    /**
     * Gets shipment_quantity
     *
     * @return int
     */
    public function getShipmentQuantity()
    {
        return $this->container['shipment_quantity'];
    }

    /**
     * Sets shipment_quantity
     *
     * @param int $shipment_quantity Total quantity (across all line items) in the shipment.
     *
     * @return self
     */
    public function setShipmentQuantity($shipment_quantity)
    {
        $this->container['shipment_quantity'] = $shipment_quantity;

        return $this;
    }
    /**
     * Gets shipment_sub_total
     *
     * @return \AmazonBusinessApi\Model\ReportingV20210108\Money
     */
    public function getShipmentSubTotal()
    {
        return $this->container['shipment_sub_total'];
    }

    /**
     * Sets shipment_sub_total
     *
     * @param \AmazonBusinessApi\Model\ReportingV20210108\Money $shipment_sub_total shipment_sub_total
     *
     * @return self
     */
    public function setShipmentSubTotal($shipment_sub_total)
    {
        $this->container['shipment_sub_total'] = $shipment_sub_total;

        return $this;
    }
    /**
     * Gets shipment_shipping_and_handling
     *
     * @return \AmazonBusinessApi\Model\ReportingV20210108\Money
     */
    public function getShipmentShippingAndHandling()
    {
        return $this->container['shipment_shipping_and_handling'];
    }

    /**
     * Sets shipment_shipping_and_handling
     *
     * @param \AmazonBusinessApi\Model\ReportingV20210108\Money $shipment_shipping_and_handling shipment_shipping_and_handling
     *
     * @return self
     */
    public function setShipmentShippingAndHandling($shipment_shipping_and_handling)
    {
        $this->container['shipment_shipping_and_handling'] = $shipment_shipping_and_handling;

        return $this;
    }
    /**
     * Gets shipment_promotion
     *
     * @return \AmazonBusinessApi\Model\ReportingV20210108\Money
     */
    public function getShipmentPromotion()
    {
        return $this->container['shipment_promotion'];
    }

    /**
     * Sets shipment_promotion
     *
     * @param \AmazonBusinessApi\Model\ReportingV20210108\Money $shipment_promotion shipment_promotion
     *
     * @return self
     */
    public function setShipmentPromotion($shipment_promotion)
    {
        $this->container['shipment_promotion'] = $shipment_promotion;

        return $this;
    }
    /**
     * Gets shipment_tax
     *
     * @return \AmazonBusinessApi\Model\ReportingV20210108\Money
     */
    public function getShipmentTax()
    {
        return $this->container['shipment_tax'];
    }

    /**
     * Sets shipment_tax
     *
     * @param \AmazonBusinessApi\Model\ReportingV20210108\Money $shipment_tax shipment_tax
     *
     * @return self
     */
    public function setShipmentTax($shipment_tax)
    {
        $this->container['shipment_tax'] = $shipment_tax;

        return $this;
    }
    /**
     * Gets shipment_net_total
     *
     * @return \AmazonBusinessApi\Model\ReportingV20210108\Money
     */
    public function getShipmentNetTotal()
    {
        return $this->container['shipment_net_total'];
    }

    /**
     * Sets shipment_net_total
     *
     * @param \AmazonBusinessApi\Model\ReportingV20210108\Money $shipment_net_total shipment_net_total
     *
     * @return self
     */
    public function setShipmentNetTotal($shipment_net_total)
    {
        $this->container['shipment_net_total'] = $shipment_net_total;

        return $this;
    }
    /**
     * Gets carrier_name
     *
     * @return string
     */
    public function getCarrierName()
    {
        return $this->container['carrier_name'];
    }

    /**
     * Sets carrier_name
     *
     * @param string $carrier_name Name of the shipment carrier.
     *
     * @return self
     */
    public function setCarrierName($carrier_name)
    {
        $this->container['carrier_name'] = $carrier_name;

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
     * @return AmazonBusinessApi\Model\ReportingV20210108\Shipment
     */
    public function __set($propertyName, $propertyValue)
    {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


