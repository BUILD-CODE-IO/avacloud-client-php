<?php
/**
 * LabourPriceComponentDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * AVACloud API 1.29.2
 *
 * AVACloud API specification
 *
 * OpenAPI spec version: 1.29.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.27
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Dangl\AVACloud\Model;

use \ArrayAccess;
use \Dangl\AVACloud\ObjectSerializer;

/**
 * LabourPriceComponentDto Class Doc Comment
 *
 * @category Class
 * @description Based on the PriceComponent, this class is responsible for labour time components.
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LabourPriceComponentDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LabourPriceComponentDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'label' => 'string',
        'price' => 'float',
        'hourly_wage' => 'float',
        'values' => '\Dangl\AVACloud\Model\CalculationDto[]',
        'use_own_hourly_wage' => 'bool',
        'total_time' => 'float',
        'project_catalogues' => '\Dangl\AVACloud\Model\CatalogueDto[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'label' => null,
        'price' => 'decimal',
        'hourly_wage' => 'decimal',
        'values' => null,
        'use_own_hourly_wage' => null,
        'total_time' => 'decimal',
        'project_catalogues' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'label' => 'label',
        'price' => 'price',
        'hourly_wage' => 'hourlyWage',
        'values' => 'values',
        'use_own_hourly_wage' => 'useOwnHourlyWage',
        'total_time' => 'totalTime',
        'project_catalogues' => 'projectCatalogues'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'label' => 'setLabel',
        'price' => 'setPrice',
        'hourly_wage' => 'setHourlyWage',
        'values' => 'setValues',
        'use_own_hourly_wage' => 'setUseOwnHourlyWage',
        'total_time' => 'setTotalTime',
        'project_catalogues' => 'setProjectCatalogues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'label' => 'getLabel',
        'price' => 'getPrice',
        'hourly_wage' => 'getHourlyWage',
        'values' => 'getValues',
        'use_own_hourly_wage' => 'getUseOwnHourlyWage',
        'total_time' => 'getTotalTime',
        'project_catalogues' => 'getProjectCatalogues'
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
        return self::$swaggerModelName;
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
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['hourly_wage'] = isset($data['hourly_wage']) ? $data['hourly_wage'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
        $this->container['use_own_hourly_wage'] = isset($data['use_own_hourly_wage']) ? $data['use_own_hourly_wage'] : null;
        $this->container['total_time'] = isset($data['total_time']) ? $data['total_time'] : null;
        $this->container['project_catalogues'] = isset($data['project_catalogues']) ? $data['project_catalogues'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['hourly_wage'] === null) {
            $invalidProperties[] = "'hourly_wage' can't be null";
        }
        if ($this->container['use_own_hourly_wage'] === null) {
            $invalidProperties[] = "'use_own_hourly_wage' can't be null";
        }
        if ($this->container['total_time'] === null) {
            $invalidProperties[] = "'total_time' can't be null";
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
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label The label associated with this price component. Will be taken from the parent Projects ProjectInformation.
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float $price The total, calculated price of this component. Will multiply the calculated amount of hours with the ServiceSpecifications hourly wage rate.
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets hourly_wage
     *
     * @return float
     */
    public function getHourlyWage()
    {
        return $this->container['hourly_wage'];
    }

    /**
     * Sets hourly_wage
     *
     * @param float $hourly_wage The cost per hour of manual labor.
     *
     * @return $this
     */
    public function setHourlyWage($hourly_wage)
    {
        $this->container['hourly_wage'] = $hourly_wage;

        return $this;
    }

    /**
     * Gets values
     *
     * @return \Dangl\AVACloud\Model\CalculationDto[]
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param \Dangl\AVACloud\Model\CalculationDto[] $values The single Calculation elements this price component is composed of.
     *
     * @return $this
     */
    public function setValues($values)
    {
        $this->container['values'] = $values;

        return $this;
    }

    /**
     * Gets use_own_hourly_wage
     *
     * @return bool
     */
    public function getUseOwnHourlyWage()
    {
        return $this->container['use_own_hourly_wage'];
    }

    /**
     * Sets use_own_hourly_wage
     *
     * @param bool $use_own_hourly_wage Indicates if the ServiceSpecification's standard HourlyWage is to be used or a custom value.
     *
     * @return $this
     */
    public function setUseOwnHourlyWage($use_own_hourly_wage)
    {
        $this->container['use_own_hourly_wage'] = $use_own_hourly_wage;

        return $this;
    }

    /**
     * Gets total_time
     *
     * @return float
     */
    public function getTotalTime()
    {
        return $this->container['total_time'];
    }

    /**
     * Sets total_time
     *
     * @param float $total_time The total, calculated time of this component. Will return the result rounded to three decimal places.
     *
     * @return $this
     */
    public function setTotalTime($total_time)
    {
        $this->container['total_time'] = $total_time;

        return $this;
    }

    /**
     * Gets project_catalogues
     *
     * @return \Dangl\AVACloud\Model\CatalogueDto[]
     */
    public function getProjectCatalogues()
    {
        return $this->container['project_catalogues'];
    }

    /**
     * Sets project_catalogues
     *
     * @param \Dangl\AVACloud\Model\CatalogueDto[] $project_catalogues These are Catalogues that are used within this PriceComponent. Catalogues are used to describe catalogues, or collections, that can be used to describe elements with commonly known properties. For example, QuantityAssignments use these to categorize themselves. They are propagate to all child elements, e.g. other containers and QuantityAssignments. In the context of a ServiceSpecification, all elements share the same instance of the collection.
     *
     * @return $this
     */
    public function setProjectCatalogues($project_catalogues)
    {
        $this->container['project_catalogues'] = $project_catalogues;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


