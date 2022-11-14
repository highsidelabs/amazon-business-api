<?php
/**
 * InvoiceDetailsOfOrderLineItem
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
use AmazonBusinessApi\Model\BaseModel;
use AmazonBusinessApi\Model\ModelInterface;
use AmazonBusinessApi\ObjectSerializer;
use ArrayAccess;

/**
 * InvoiceDetailsOfOrderLineItem Class Doc Comment
 *
 * @category Class
 * @description Invoice details with the corresponding order line item.
 * @package  AmazonBusinessApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InvoiceDetailsOfOrderLineItem extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InvoiceDetailsOfOrderLineItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'order_line_item' => '\AmazonBusinessApi\Model\ReconciliationV20210108\OrderLineItem',
        'invoice_details' => '\AmazonBusinessApi\Model\ReconciliationV20210108\InvoiceDetail[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'order_line_item' => null,
        'invoice_details' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'order_line_item' => 'orderLineItem',
        'invoice_details' => 'invoiceDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'order_line_item' => 'setOrderLineItem',
        'invoice_details' => 'setInvoiceDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_line_item' => 'getOrderLineItem',
        'invoice_details' => 'getInvoiceDetails'
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
        $this->container['order_line_item'] = $data['order_line_item'] ?? null;
        $this->container['invoice_details'] = $data['invoice_details'] ?? null;
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
     * Gets order_line_item
     *
     * @return \AmazonBusinessApi\Model\ReconciliationV20210108\OrderLineItem|null
     */
    public function getOrderLineItem()
    {
        return $this->container['order_line_item'];
    }

    /**
     * Sets order_line_item
     *
     * @param \AmazonBusinessApi\Model\ReconciliationV20210108\OrderLineItem|null $order_line_item order_line_item
     *
     * @return self
     */
    public function setOrderLineItem($order_line_item)
    {
        $this->container['order_line_item'] = $order_line_item;

        return $this;
    }
    /**
     * Gets invoice_details
     *
     * @return \AmazonBusinessApi\Model\ReconciliationV20210108\InvoiceDetail[]|null
     */
    public function getInvoiceDetails()
    {
        return $this->container['invoice_details'];
    }

    /**
     * Sets invoice_details
     *
     * @param \AmazonBusinessApi\Model\ReconciliationV20210108\InvoiceDetail[]|null $invoice_details List of invoice detail for all invoices related to the order line item.
     *
     * @return self
     */
    public function setInvoiceDetails($invoice_details)
    {
        $this->container['invoice_details'] = $invoice_details;

        return $this;
    }
}


