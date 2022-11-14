<?php
/**
 * AsinType
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
use \AmazonBusinessApi\Model\ModelInterface;
use \AmazonBusinessApi\ObjectSerializer;
use \ArrayAccess;

/**
 * AsinType Class Doc Comment
 *
 * @category Class
 * @description The type of the asin returned in the request. STANDARD asins can be purchased directly. VARIATION_PARENT asins cannot be purchased, but are linked to one or more VARIATION_CHILD asins which can. VARIATION_CHILD asins have specific settings for certain attributes, such as the size and color of a shirt. The VARIATION_CHILD asins can have different prices, and  can be offered by different merchants. Possible values:   * STANDARD   * VARIATION_PARENT   * VARIATION_CHILD
 * @package  AmazonBusinessApi
 * @group 
 */
class AsinType
{
    public $value;

    /**
     * Possible values of this enum
     */
    const STANDARD = 'STANDARD';
    const VARIATION_PARENT = 'VARIATION_PARENT';
    const VARIATION_CHILD = 'VARIATION_CHILD';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        $baseVals = [
            self::STANDARD,
            self::VARIATION_PARENT,
            self::VARIATION_CHILD,
        ];
        // This is necessary because Amazon does not consistently capitalize their
        // enum values, so we do case-insensitive enum value validation in ObjectSerializer
        $ucVals = array_map(function ($val) { return strtoupper($val); }, $baseVals);
        return array_merge($baseVals, $ucVals);
    }

    public function __construct($value)
    {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues(), true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value for enum 'AsinType', must be one of '%s'", implode("', '", self::getAllowableEnumValues())));
        }

        $this->value = $value;
    }

    /**
     * Convert the enum value to a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }
}


