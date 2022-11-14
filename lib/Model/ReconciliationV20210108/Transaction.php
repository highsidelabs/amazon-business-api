<?php
/**
 * Transaction
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  AmazonBusinessApi
 */

/**
 * Amazon Business API for Payment Reconciliation
 *
 * With the Amazon Business API for Payment Reconciliation, you can build applications that help Amazon Business customers get purchase-related information for reconciling business transactions.
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

namespace AmazonBusinessApi\Model\ReconciliationV20210108;

use \AmazonBusinessApi\Model\ModelInterface;
use \AmazonBusinessApi\ObjectSerializer;
use \ArrayAccess;

/**
 * Transaction Class Doc Comment
 *
 * @category Class
 * @description A business transaction.
 * @package  AmazonBusinessApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Transaction implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Transaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'marketplace_id' => 'string',
        'transaction_date' => 'string',
        'feed_date' => 'string',
        'transaction_type' => 'string',
        'transaction_id' => 'string',
        'ship_tax_rate' => 'string',
        'gift_wrap_tax_rate' => 'string',
        'legal_entity_name' => 'string',
        'purchasing_customer_group_name' => 'string',
        'amount' => '\AmazonBusinessApi\Model\ReconciliationV20210108\Money',
        'payment_instrument_type' => 'string',
        'payment_instrument_last4_digits' => 'string',
        'buyer' => '\AmazonBusinessApi\Model\ReconciliationV20210108\Customer',
        'payer' => '\AmazonBusinessApi\Model\ReconciliationV20210108\Customer',
        'associated_transaction_details' => '\AmazonBusinessApi\Model\ReconciliationV20210108\AssociatedTransactionDetail[]',
        'transaction_line_items' => '\AmazonBusinessApi\Model\ReconciliationV20210108\TransactionLineItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'marketplace_id' => null,
        'transaction_date' => null,
        'feed_date' => null,
        'transaction_type' => null,
        'transaction_id' => null,
        'ship_tax_rate' => null,
        'gift_wrap_tax_rate' => null,
        'legal_entity_name' => null,
        'purchasing_customer_group_name' => null,
        'amount' => null,
        'payment_instrument_type' => null,
        'payment_instrument_last4_digits' => null,
        'buyer' => null,
        'payer' => null,
        'associated_transaction_details' => null,
        'transaction_line_items' => null
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
        'marketplace_id' => 'marketplaceId',
        'transaction_date' => 'transactionDate',
        'feed_date' => 'feedDate',
        'transaction_type' => 'transactionType',
        'transaction_id' => 'transactionId',
        'ship_tax_rate' => 'shipTaxRate',
        'gift_wrap_tax_rate' => 'giftWrapTaxRate',
        'legal_entity_name' => 'legalEntityName',
        'purchasing_customer_group_name' => 'purchasingCustomerGroupName',
        'amount' => 'amount',
        'payment_instrument_type' => 'paymentInstrumentType',
        'payment_instrument_last4_digits' => 'paymentInstrumentLast4Digits',
        'buyer' => 'buyer',
        'payer' => 'payer',
        'associated_transaction_details' => 'associatedTransactionDetails',
        'transaction_line_items' => 'transactionLineItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'marketplace_id' => 'setMarketplaceId',
        'transaction_date' => 'setTransactionDate',
        'feed_date' => 'setFeedDate',
        'transaction_type' => 'setTransactionType',
        'transaction_id' => 'setTransactionId',
        'ship_tax_rate' => 'setShipTaxRate',
        'gift_wrap_tax_rate' => 'setGiftWrapTaxRate',
        'legal_entity_name' => 'setLegalEntityName',
        'purchasing_customer_group_name' => 'setPurchasingCustomerGroupName',
        'amount' => 'setAmount',
        'payment_instrument_type' => 'setPaymentInstrumentType',
        'payment_instrument_last4_digits' => 'setPaymentInstrumentLast4Digits',
        'buyer' => 'setBuyer',
        'payer' => 'setPayer',
        'associated_transaction_details' => 'setAssociatedTransactionDetails',
        'transaction_line_items' => 'setTransactionLineItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplace_id' => 'getMarketplaceId',
        'transaction_date' => 'getTransactionDate',
        'feed_date' => 'getFeedDate',
        'transaction_type' => 'getTransactionType',
        'transaction_id' => 'getTransactionId',
        'ship_tax_rate' => 'getShipTaxRate',
        'gift_wrap_tax_rate' => 'getGiftWrapTaxRate',
        'legal_entity_name' => 'getLegalEntityName',
        'purchasing_customer_group_name' => 'getPurchasingCustomerGroupName',
        'amount' => 'getAmount',
        'payment_instrument_type' => 'getPaymentInstrumentType',
        'payment_instrument_last4_digits' => 'getPaymentInstrumentLast4Digits',
        'buyer' => 'getBuyer',
        'payer' => 'getPayer',
        'associated_transaction_details' => 'getAssociatedTransactionDetails',
        'transaction_line_items' => 'getTransactionLineItems'
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

    const TRANSACTION_TYPE_CHARGE = 'CHARGE';
    const TRANSACTION_TYPE_REFUND = 'REFUND';
    const TRANSACTION_TYPE_OVERREFUND = 'OVERREFUND';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransactionTypeAllowableValues()
    {
        $baseVals = [
            self::TRANSACTION_TYPE_CHARGE,
            self::TRANSACTION_TYPE_REFUND,
            self::TRANSACTION_TYPE_OVERREFUND,
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
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['transaction_date'] = $data['transaction_date'] ?? null;
        $this->container['feed_date'] = $data['feed_date'] ?? null;
        $this->container['transaction_type'] = $data['transaction_type'] ?? null;
        $this->container['transaction_id'] = $data['transaction_id'] ?? null;
        $this->container['ship_tax_rate'] = $data['ship_tax_rate'] ?? null;
        $this->container['gift_wrap_tax_rate'] = $data['gift_wrap_tax_rate'] ?? null;
        $this->container['legal_entity_name'] = $data['legal_entity_name'] ?? null;
        $this->container['purchasing_customer_group_name'] = $data['purchasing_customer_group_name'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['payment_instrument_type'] = $data['payment_instrument_type'] ?? null;
        $this->container['payment_instrument_last4_digits'] = $data['payment_instrument_last4_digits'] ?? null;
        $this->container['buyer'] = $data['buyer'] ?? null;
        $this->container['payer'] = $data['payer'] ?? null;
        $this->container['associated_transaction_details'] = $data['associated_transaction_details'] ?? null;
        $this->container['transaction_line_items'] = $data['transaction_line_items'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        $allowedValues = $this->getTransactionTypeAllowableValues();
        if (
            !is_null($this->container['transaction_type']) &&
            !in_array(strtoupper($this->container['transaction_type']), $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'transaction_type', must be one of '%s'",
                $this->container['transaction_type'],
                implode("', '", $allowedValues)
            );
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
     * Gets marketplace_id
     *
     * @return string|null
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string|null $marketplace_id The identifier of the marketplace where the item was bought.
     *
     * @return self
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }
    /**
     * Gets transaction_date
     *
     * @return string|null
     */
    public function getTransactionDate()
    {
        return $this->container['transaction_date'];
    }

    /**
     * Sets transaction_date
     *
     * @param string|null $transaction_date The date when the transaction occurred.
     *
     * @return self
     */
    public function setTransactionDate($transaction_date)
    {
        $this->container['transaction_date'] = $transaction_date;

        return $this;
    }
    /**
     * Gets feed_date
     *
     * @return string|null
     */
    public function getFeedDate()
    {
        return $this->container['feed_date'];
    }

    /**
     * Sets feed_date
     *
     * @param string|null $feed_date The date after which you can successfully query the transaction with the getTransactions operation.
     *
     * @return self
     */
    public function setFeedDate($feed_date)
    {
        $this->container['feed_date'] = $feed_date;

        return $this;
    }
    /**
     * Gets transaction_type
     *
     * @return string|null
     */
    public function getTransactionType()
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type
     *
     * @param string|null $transaction_type The type of transaction.
     *
     * @return self
     */
    public function setTransactionType($transaction_type)
    {
        $allowedValues = $this->getTransactionTypeAllowableValues();
        if (!is_null($transaction_type) &&!in_array(strtoupper($transaction_type), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'transaction_type', must be one of '%s'",
                    $transaction_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transaction_type'] = $transaction_type;

        return $this;
    }
    /**
     * Gets transaction_id
     *
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     *
     * @param string|null $transaction_id The identifier for this transaction.
     *
     * @return self
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }
    /**
     * Gets ship_tax_rate
     *
     * @return string|null
     */
    public function getShipTaxRate()
    {
        return $this->container['ship_tax_rate'];
    }

    /**
     * Sets ship_tax_rate
     *
     * @param string|null $ship_tax_rate The shipping tax rate for a transaction.
     *
     * @return self
     */
    public function setShipTaxRate($ship_tax_rate)
    {
        $this->container['ship_tax_rate'] = $ship_tax_rate;

        return $this;
    }
    /**
     * Gets gift_wrap_tax_rate
     *
     * @return string|null
     */
    public function getGiftWrapTaxRate()
    {
        return $this->container['gift_wrap_tax_rate'];
    }

    /**
     * Sets gift_wrap_tax_rate
     *
     * @param string|null $gift_wrap_tax_rate The gift wrap tax rate for a transaction.
     *
     * @return self
     */
    public function setGiftWrapTaxRate($gift_wrap_tax_rate)
    {
        $this->container['gift_wrap_tax_rate'] = $gift_wrap_tax_rate;

        return $this;
    }
    /**
     * Gets legal_entity_name
     *
     * @return string|null
     */
    public function getLegalEntityName()
    {
        return $this->container['legal_entity_name'];
    }

    /**
     * Sets legal_entity_name
     *
     * @param string|null $legal_entity_name The name of the Business Legal Entity on behalf of which the order was placed.
     *
     * @return self
     */
    public function setLegalEntityName($legal_entity_name)
    {
        $this->container['legal_entity_name'] = $legal_entity_name;

        return $this;
    }
    /**
     * Gets purchasing_customer_group_name
     *
     * @return string|null
     */
    public function getPurchasingCustomerGroupName()
    {
        return $this->container['purchasing_customer_group_name'];
    }

    /**
     * Sets purchasing_customer_group_name
     *
     * @param string|null $purchasing_customer_group_name The name of the department under the Legal Entity on behalf of which the order was placed
     *
     * @return self
     */
    public function setPurchasingCustomerGroupName($purchasing_customer_group_name)
    {
        $this->container['purchasing_customer_group_name'] = $purchasing_customer_group_name;

        return $this;
    }
    /**
     * Gets amount
     *
     * @return \AmazonBusinessApi\Model\ReconciliationV20210108\Money|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \AmazonBusinessApi\Model\ReconciliationV20210108\Money|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }
    /**
     * Gets payment_instrument_type
     *
     * @return string|null
     */
    public function getPaymentInstrumentType()
    {
        return $this->container['payment_instrument_type'];
    }

    /**
     * Sets payment_instrument_type
     *
     * @param string|null $payment_instrument_type The type of payment instrument, such as a credit card, pay by invoice, a bank account, a reward account, etc.
     *
     * @return self
     */
    public function setPaymentInstrumentType($payment_instrument_type)
    {
        $this->container['payment_instrument_type'] = $payment_instrument_type;

        return $this;
    }
    /**
     * Gets payment_instrument_last4_digits
     *
     * @return string|null
     */
    public function getPaymentInstrumentLast4Digits()
    {
        return $this->container['payment_instrument_last4_digits'];
    }

    /**
     * Sets payment_instrument_last4_digits
     *
     * @param string|null $payment_instrument_last4_digits The last 4 digits of the payment instrument number.
     *
     * @return self
     */
    public function setPaymentInstrumentLast4Digits($payment_instrument_last4_digits)
    {
        $this->container['payment_instrument_last4_digits'] = $payment_instrument_last4_digits;

        return $this;
    }
    /**
     * Gets buyer
     *
     * @return \AmazonBusinessApi\Model\ReconciliationV20210108\Customer|null
     */
    public function getBuyer()
    {
        return $this->container['buyer'];
    }

    /**
     * Sets buyer
     *
     * @param \AmazonBusinessApi\Model\ReconciliationV20210108\Customer|null $buyer buyer
     *
     * @return self
     */
    public function setBuyer($buyer)
    {
        $this->container['buyer'] = $buyer;

        return $this;
    }
    /**
     * Gets payer
     *
     * @return \AmazonBusinessApi\Model\ReconciliationV20210108\Customer|null
     */
    public function getPayer()
    {
        return $this->container['payer'];
    }

    /**
     * Sets payer
     *
     * @param \AmazonBusinessApi\Model\ReconciliationV20210108\Customer|null $payer payer
     *
     * @return self
     */
    public function setPayer($payer)
    {
        $this->container['payer'] = $payer;

        return $this;
    }
    /**
     * Gets associated_transaction_details
     *
     * @return \AmazonBusinessApi\Model\ReconciliationV20210108\AssociatedTransactionDetail[]|null
     */
    public function getAssociatedTransactionDetails()
    {
        return $this->container['associated_transaction_details'];
    }

    /**
     * Sets associated_transaction_details
     *
     * @param \AmazonBusinessApi\Model\ReconciliationV20210108\AssociatedTransactionDetail[]|null $associated_transaction_details A list of transaction details that are associated with this transaction. For example, if a payment is made with three different transactions (each using a different payment instrument), this list will contain associatedTransactionId values for the two other transactions associated with this transaction.
     *
     * @return self
     */
    public function setAssociatedTransactionDetails($associated_transaction_details)
    {
        $this->container['associated_transaction_details'] = $associated_transaction_details;

        return $this;
    }
    /**
     * Gets transaction_line_items
     *
     * @return \AmazonBusinessApi\Model\ReconciliationV20210108\TransactionLineItem[]|null
     */
    public function getTransactionLineItems()
    {
        return $this->container['transaction_line_items'];
    }

    /**
     * Sets transaction_line_items
     *
     * @param \AmazonBusinessApi\Model\ReconciliationV20210108\TransactionLineItem[]|null $transaction_line_items A list of transaction line items.
     *
     * @return self
     */
    public function setTransactionLineItems($transaction_line_items)
    {
        $this->container['transaction_line_items'] = $transaction_line_items;

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
     * @return AmazonBusinessApi\Model\ReconciliationV20210108\Transaction
     */
    public function __set($propertyName, $propertyValue)
    {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


