<?php
/**
 * Package
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
 * Package Class Doc Comment
 *
 * @category Class
 * @description The package within the shipment.
 * @package  AmazonBusinessApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Package extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Package';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'package_reference' => '\AmazonBusinessApi\Model\OrderingV1\PackageReference',
        'package_attributes' => '\AmazonBusinessApi\Model\OrderingV1\PackageAttribute[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'package_reference' => null,
        'package_attributes' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'package_reference' => 'packageReference',
        'package_attributes' => 'packageAttributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'package_reference' => 'setPackageReference',
        'package_attributes' => 'setPackageAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'package_reference' => 'getPackageReference',
        'package_attributes' => 'getPackageAttributes'
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
        $this->container['package_reference'] = $data['package_reference'] ?? null;
        $this->container['package_attributes'] = $data['package_attributes'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['package_reference'] === null) {
            $invalidProperties[] = "'package_reference' can't be null";
        }
        if ($this->container['package_attributes'] === null) {
            $invalidProperties[] = "'package_attributes' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets package_reference
     *
     * @return \AmazonBusinessApi\Model\OrderingV1\PackageReference
     */
    public function getPackageReference()
    {
        return $this->container['package_reference'];
    }

    /**
     * Sets package_reference
     *
     * @param \AmazonBusinessApi\Model\OrderingV1\PackageReference $package_reference package_reference
     *
     * @return self
     */
    public function setPackageReference($package_reference)
    {
        $this->container['package_reference'] = $package_reference;

        return $this;
    }
    /**
     * Gets package_attributes
     *
     * @return \AmazonBusinessApi\Model\OrderingV1\PackageAttribute[]
     */
    public function getPackageAttributes()
    {
        return $this->container['package_attributes'];
    }

    /**
     * Sets package_attributes
     *
     * @param \AmazonBusinessApi\Model\OrderingV1\PackageAttribute[] $package_attributes The attributes of the package.
     *
     * @return self
     */
    public function setPackageAttributes($package_attributes)
    {
        $this->container['package_attributes'] = $package_attributes;

        return $this;
    }
}


