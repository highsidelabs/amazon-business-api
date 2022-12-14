<?php
/**
 * BusinessGroupIdentifier
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  AmazonBusinessApi
 */

/**
 * Amazon Business API for Managing Accounts.
 *
 * An API for managing Amazon Business accounts.
 *
 * The version of the OpenAPI document: 2021-08-30
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AmazonBusinessApi\Model\UserManagementV20210830;
use AmazonBusinessApi\Model\BaseModel;
use AmazonBusinessApi\Model\ModelInterface;
use AmazonBusinessApi\ObjectSerializer;
use ArrayAccess;

/**
 * BusinessGroupIdentifier Class Doc Comment
 *
 * @category Class
 * @description An Amazon Business group identifier
 * @package  AmazonBusinessApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class BusinessGroupIdentifier extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BusinessGroupIdentifier';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id_type' => 'string',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id_type' => null,
        'id' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id_type' => 'idType',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'id_type' => 'setIdType',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_type' => 'getIdType',
        'id' => 'getId'
    ];



    const ID_TYPE_GROUP_ID = 'GroupId';
    const ID_TYPE_GROUP_TAG = 'GroupTag';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIdTypeAllowableValues()
    {
        $baseVals = [
            self::ID_TYPE_GROUP_ID,
            self::ID_TYPE_GROUP_TAG,
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
        $this->container['id_type'] = $data['id_type'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id_type'] === null) {
            $invalidProperties[] = "'id_type' can't be null";
        }
        $allowedValues = $this->getIdTypeAllowableValues();
        if (
            !is_null($this->container['id_type']) &&
            !in_array(strtoupper($this->container['id_type']), $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'id_type', must be one of '%s'",
                $this->container['id_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets id_type
     *
     * @return string
     */
    public function getIdType()
    {
        return $this->container['id_type'];
    }

    /**
     * Sets id_type
     *
     * @param string $id_type The type of group identifier.
     *
     * @return self
     */
    public function setIdType($id_type)
    {
        $allowedValues = $this->getIdTypeAllowableValues();
        if (!in_array(strtoupper($id_type), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'id_type', must be one of '%s'",
                    $id_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['id_type'] = $id_type;

        return $this;
    }
    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The value of the identifier.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }
}


