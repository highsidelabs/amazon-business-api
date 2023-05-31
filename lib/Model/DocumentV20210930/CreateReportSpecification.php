<?php
/**
 * CreateReportSpecification
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  AmazonBusinessApi
 */

/**
 * Amazon Business API for Reports
 *
 * The Amazon Business API for Reports lets you retrieve and manage a variety of reports.
 *
 * The version of the OpenAPI document: 2021-09-30
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AmazonBusinessApi\Model\DocumentV20210930;
use AmazonBusinessApi\Model\BaseModel;
use AmazonBusinessApi\Model\ModelInterface;
use AmazonBusinessApi\ObjectSerializer;
use ArrayAccess;

/**
 * CreateReportSpecification Class Doc Comment
 *
 * @category Class
 * @package  AmazonBusinessApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CreateReportSpecification extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateReportSpecification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'report_options' => 'map[string,string]',
        'report_type' => 'string',
        'data_start_time' => 'string',
        'data_end_time' => 'string',
        'marketplace_ids' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'report_options' => null,
        'report_type' => null,
        'data_start_time' => null,
        'data_end_time' => null,
        'marketplace_ids' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'report_options' => 'reportOptions',
        'report_type' => 'reportType',
        'data_start_time' => 'dataStartTime',
        'data_end_time' => 'dataEndTime',
        'marketplace_ids' => 'marketplaceIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'report_options' => 'setReportOptions',
        'report_type' => 'setReportType',
        'data_start_time' => 'setDataStartTime',
        'data_end_time' => 'setDataEndTime',
        'marketplace_ids' => 'setMarketplaceIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'report_options' => 'getReportOptions',
        'report_type' => 'getReportType',
        'data_start_time' => 'getDataStartTime',
        'data_end_time' => 'getDataEndTime',
        'marketplace_ids' => 'getMarketplaceIds'
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
        $this->container['report_options'] = $data['report_options'] ?? null;
        $this->container['report_type'] = $data['report_type'] ?? null;
        $this->container['data_start_time'] = $data['data_start_time'] ?? null;
        $this->container['data_end_time'] = $data['data_end_time'] ?? null;
        $this->container['marketplace_ids'] = $data['marketplace_ids'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['report_type'] === null) {
            $invalidProperties[] = "'report_type' can't be null";
        }
        if ($this->container['marketplace_ids'] === null) {
            $invalidProperties[] = "'marketplace_ids' can't be null";
        }
        if ((count($this->container['marketplace_ids']) > 25)) {
            $invalidProperties[] = "invalid value for 'marketplace_ids', number of items must be less than or equal to 25.";
        }

        if ((count($this->container['marketplace_ids']) < 1)) {
            $invalidProperties[] = "invalid value for 'marketplace_ids', number of items must be greater than or equal to 1.";
        }

        return $invalidProperties;
    }


    /**
     * Gets report_options
     *
     * @return map[string,string]|null
     */
    public function getReportOptions()
    {
        return $this->container['report_options'];
    }

    /**
     * Sets report_options
     *
     * @param map[string,string]|null $report_options Additional information passed to reports. This varies by report type.
     *
     * @return self
     */
    public function setReportOptions($report_options)
    {
        $this->container['report_options'] = $report_options;

        return $this;
    }
    /**
     * Gets report_type
     *
     * @return string
     */
    public function getReportType()
    {
        return $this->container['report_type'];
    }

    /**
     * Sets report_type
     *
     * @param string $report_type The report type.
     *
     * @return self
     */
    public function setReportType($report_type)
    {
        $this->container['report_type'] = $report_type;

        return $this;
    }
    /**
     * Gets data_start_time
     *
     * @return string|null
     */
    public function getDataStartTime()
    {
        return $this->container['data_start_time'];
    }

    /**
     * Sets data_start_time
     *
     * @param string|null $data_start_time The start of a date and time range, in ISO 8601 date time format, used for selecting the data to report. The default is now. The value must be prior to or equal to the current date and time. Not all report types make use of this.
     *
     * @return self
     */
    public function setDataStartTime($data_start_time)
    {
        $this->container['data_start_time'] = $data_start_time;

        return $this;
    }
    /**
     * Gets data_end_time
     *
     * @return string|null
     */
    public function getDataEndTime()
    {
        return $this->container['data_end_time'];
    }

    /**
     * Sets data_end_time
     *
     * @param string|null $data_end_time The end of a date and time range, in ISO 8601 date time format, used for selecting the data to report. The default is now. The value must be prior to or equal to the current date and time. Not all report types make use of this.
     *
     * @return self
     */
    public function setDataEndTime($data_end_time)
    {
        $this->container['data_end_time'] = $data_end_time;

        return $this;
    }
    /**
     * Gets marketplace_ids
     *
     * @return string[]
     */
    public function getMarketplaceIds()
    {
        return $this->container['marketplace_ids'];
    }

    /**
     * Sets marketplace_ids
     *
     * @param string[] $marketplace_ids A list of marketplace identifiers. The report document's contents will contain data for all of the specified marketplaces, unless the report type indicates otherwise.
     *
     * @return self
     */
    public function setMarketplaceIds($marketplace_ids)
    {

        if ((count($marketplace_ids) > 25)) {
            throw new \InvalidArgumentException('invalid value for $marketplace_ids when calling CreateReportSpecification., number of items must be less than or equal to 25.');
        }
        if ((count($marketplace_ids) < 1)) {
            throw new \InvalidArgumentException('invalid length for $marketplace_ids when calling CreateReportSpecification., number of items must be greater than or equal to 1.');
        }
        $this->container['marketplace_ids'] = $marketplace_ids;

        return $this;
    }
}


