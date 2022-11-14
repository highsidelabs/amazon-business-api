<?php
/**
 * ImageItem
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
 * ImageItem Class Doc Comment
 *
 * @category Class
 * @description A structure which holds the data for a given image.
 * @package  AmazonBusinessApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ImageItem extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ImageItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'alt_text' => 'string',
        'large' => '\AmazonBusinessApi\Model\ProductSearchV20200826\ImageData',
        'medium' => '\AmazonBusinessApi\Model\ProductSearchV20200826\ImageData',
        'small' => '\AmazonBusinessApi\Model\ProductSearchV20200826\ImageData',
        'thumbnail' => '\AmazonBusinessApi\Model\ProductSearchV20200826\ImageData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'alt_text' => null,
        'large' => null,
        'medium' => null,
        'small' => null,
        'thumbnail' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'alt_text' => 'altText',
        'large' => 'large',
        'medium' => 'medium',
        'small' => 'small',
        'thumbnail' => 'thumbnail'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'alt_text' => 'setAltText',
        'large' => 'setLarge',
        'medium' => 'setMedium',
        'small' => 'setSmall',
        'thumbnail' => 'setThumbnail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alt_text' => 'getAltText',
        'large' => 'getLarge',
        'medium' => 'getMedium',
        'small' => 'getSmall',
        'thumbnail' => 'getThumbnail'
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
        $this->container['alt_text'] = $data['alt_text'] ?? null;
        $this->container['large'] = $data['large'] ?? null;
        $this->container['medium'] = $data['medium'] ?? null;
        $this->container['small'] = $data['small'] ?? null;
        $this->container['thumbnail'] = $data['thumbnail'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['alt_text'] === null) {
            $invalidProperties[] = "'alt_text' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets alt_text
     *
     * @return string
     */
    public function getAltText()
    {
        return $this->container['alt_text'];
    }

    /**
     * Sets alt_text
     *
     * @param string $alt_text The text to use for the image's alt property.
     *
     * @return self
     */
    public function setAltText($alt_text)
    {
        $this->container['alt_text'] = $alt_text;

        return $this;
    }
    /**
     * Gets large
     *
     * @return \AmazonBusinessApi\Model\ProductSearchV20200826\ImageData|null
     */
    public function getLarge()
    {
        return $this->container['large'];
    }

    /**
     * Sets large
     *
     * @param \AmazonBusinessApi\Model\ProductSearchV20200826\ImageData|null $large large
     *
     * @return self
     */
    public function setLarge($large)
    {
        $this->container['large'] = $large;

        return $this;
    }
    /**
     * Gets medium
     *
     * @return \AmazonBusinessApi\Model\ProductSearchV20200826\ImageData|null
     */
    public function getMedium()
    {
        return $this->container['medium'];
    }

    /**
     * Sets medium
     *
     * @param \AmazonBusinessApi\Model\ProductSearchV20200826\ImageData|null $medium medium
     *
     * @return self
     */
    public function setMedium($medium)
    {
        $this->container['medium'] = $medium;

        return $this;
    }
    /**
     * Gets small
     *
     * @return \AmazonBusinessApi\Model\ProductSearchV20200826\ImageData|null
     */
    public function getSmall()
    {
        return $this->container['small'];
    }

    /**
     * Sets small
     *
     * @param \AmazonBusinessApi\Model\ProductSearchV20200826\ImageData|null $small small
     *
     * @return self
     */
    public function setSmall($small)
    {
        $this->container['small'] = $small;

        return $this;
    }
    /**
     * Gets thumbnail
     *
     * @return \AmazonBusinessApi\Model\ProductSearchV20200826\ImageData|null
     */
    public function getThumbnail()
    {
        return $this->container['thumbnail'];
    }

    /**
     * Sets thumbnail
     *
     * @param \AmazonBusinessApi\Model\ProductSearchV20200826\ImageData|null $thumbnail thumbnail
     *
     * @return self
     */
    public function setThumbnail($thumbnail)
    {
        $this->container['thumbnail'] = $thumbnail;

        return $this;
    }
}


