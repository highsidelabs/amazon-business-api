<?php
/**
 * ProductsByAsinsResponse
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
 * ProductsByAsinsResponse Class Doc Comment
 *
 * @category Class
 * @description The data that describes the results for your list of asin search.
 * @package  AmazonBusinessApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ProductsByAsinsResponse extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductsByAsinsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'matching_product_count' => 'int',
        'products' => '\AmazonBusinessApi\Model\ProductSearchV20200826\ProductsResult[]',
        'not_found_asins' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'matching_product_count' => null,
        'products' => null,
        'not_found_asins' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'headers' => 'headers',
        'matching_product_count' => 'matchingProductCount',
        'products' => 'products',
        'not_found_asins' => 'notFoundAsins'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'headers' => 'setHeaders',
        'matching_product_count' => 'setMatchingProductCount',
        'products' => 'setProducts',
        'not_found_asins' => 'setNotFoundAsins'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'headers' => 'getHeaders',
        'matching_product_count' => 'getMatchingProductCount',
        'products' => 'getProducts',
        'not_found_asins' => 'getNotFoundAsins'
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
        $this->container['matching_product_count'] = $data['matching_product_count'] ?? null;
        $this->container['products'] = $data['products'] ?? null;
        $this->container['not_found_asins'] = $data['not_found_asins'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['matching_product_count'] === null) {
            $invalidProperties[] = "'matching_product_count' can't be null";
        }
        if ($this->container['products'] === null) {
            $invalidProperties[] = "'products' can't be null";
        }
        if ($this->container['not_found_asins'] === null) {
            $invalidProperties[] = "'not_found_asins' can't be null";
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
     * Gets matching_product_count
     *
     * @return int
     */
    public function getMatchingProductCount()
    {
        return $this->container['matching_product_count'];
    }

    /**
     * Sets matching_product_count
     *
     * @param int $matching_product_count The number of products which matched your search query. This number can be much larger than the number of matching products you can view. The value same for all the pages in the result set.
     *
     * @return self
     */
    public function setMatchingProductCount($matching_product_count)
    {
        $this->container['matching_product_count'] = $matching_product_count;

        return $this;
    }
    /**
     * Gets products
     *
     * @return \AmazonBusinessApi\Model\ProductSearchV20200826\ProductsResult[]
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products
     *
     * @param \AmazonBusinessApi\Model\ProductSearchV20200826\ProductsResult[] $products A list of products that match your search criteria
     *
     * @return self
     */
    public function setProducts($products)
    {
        $this->container['products'] = $products;

        return $this;
    }
    /**
     * Gets not_found_asins
     *
     * @return string[]
     */
    public function getNotFoundAsins()
    {
        return $this->container['not_found_asins'];
    }

    /**
     * Sets not_found_asins
     *
     * @param string[] $not_found_asins A list of asin for which their is no product found.
     *
     * @return self
     */
    public function setNotFoundAsins($not_found_asins)
    {
        $this->container['not_found_asins'] = $not_found_asins;

        return $this;
    }
}


