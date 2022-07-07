<?php
/**
 * ProjectDto
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
 * ProjectDto Class Doc Comment
 *
 * @category Class
 * @description A Project contains all relevant information for a construction project.
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProjectDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProjectDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'price_accuracy' => 'int',
        'force_strict_totals' => 'bool',
        'price_rounding_mode' => '\Dangl\AVACloud\Model\PriceRoundingModeDto',
        'project_information' => '\Dangl\AVACloud\Model\ProjectInformationDto',
        'service_specifications' => '\Dangl\AVACloud\Model\ServiceSpecificationDto[]',
        'gaeb_xml_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'guid',
        'price_accuracy' => 'int32',
        'force_strict_totals' => null,
        'price_rounding_mode' => null,
        'project_information' => null,
        'service_specifications' => null,
        'gaeb_xml_id' => null
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
        'id' => 'id',
        'price_accuracy' => 'priceAccuracy',
        'force_strict_totals' => 'forceStrictTotals',
        'price_rounding_mode' => 'priceRoundingMode',
        'project_information' => 'projectInformation',
        'service_specifications' => 'serviceSpecifications',
        'gaeb_xml_id' => 'gaebXmlId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'price_accuracy' => 'setPriceAccuracy',
        'force_strict_totals' => 'setForceStrictTotals',
        'price_rounding_mode' => 'setPriceRoundingMode',
        'project_information' => 'setProjectInformation',
        'service_specifications' => 'setServiceSpecifications',
        'gaeb_xml_id' => 'setGaebXmlId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'price_accuracy' => 'getPriceAccuracy',
        'force_strict_totals' => 'getForceStrictTotals',
        'price_rounding_mode' => 'getPriceRoundingMode',
        'project_information' => 'getProjectInformation',
        'service_specifications' => 'getServiceSpecifications',
        'gaeb_xml_id' => 'getGaebXmlId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['price_accuracy'] = isset($data['price_accuracy']) ? $data['price_accuracy'] : null;
        $this->container['force_strict_totals'] = isset($data['force_strict_totals']) ? $data['force_strict_totals'] : null;
        $this->container['price_rounding_mode'] = isset($data['price_rounding_mode']) ? $data['price_rounding_mode'] : null;
        $this->container['project_information'] = isset($data['project_information']) ? $data['project_information'] : null;
        $this->container['service_specifications'] = isset($data['service_specifications']) ? $data['service_specifications'] : null;
        $this->container['gaeb_xml_id'] = isset($data['gaeb_xml_id']) ? $data['gaeb_xml_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['price_accuracy'] === null) {
            $invalidProperties[] = "'price_accuracy' can't be null";
        }
        if ($this->container['force_strict_totals'] === null) {
            $invalidProperties[] = "'force_strict_totals' can't be null";
        }
        if ($this->container['price_rounding_mode'] === null) {
            $invalidProperties[] = "'price_rounding_mode' can't be null";
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
     * @param string $id Elements GUID identifier.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets price_accuracy
     *
     * @return int
     */
    public function getPriceAccuracy()
    {
        return $this->container['price_accuracy'];
    }

    /**
     * Sets price_accuracy
     *
     * @param int $price_accuracy This property controls the accuracy of all price properties, meaning how many decimal places are preserved in calculations. It defaults to DEFAULT_PRICE_ACCURACY. Please see the Dangl.AVA documentation for further information about decimal precision.
     *
     * @return $this
     */
    public function setPriceAccuracy($price_accuracy)
    {
        $this->container['price_accuracy'] = $price_accuracy;

        return $this;
    }

    /**
     * Gets force_strict_totals
     *
     * @return bool
     */
    public function getForceStrictTotals()
    {
        return $this->container['force_strict_totals'];
    }

    /**
     * Sets force_strict_totals
     *
     * @param bool $force_strict_totals This forces total prices to be the strict product of quantities times unit price in positions. It is enabled by default. If this is disabled, both the unit price and the total price of positions is calculated from the non-rounded values. Please see the documentation for a more detailed explanation of this setting.
     *
     * @return $this
     */
    public function setForceStrictTotals($force_strict_totals)
    {
        $this->container['force_strict_totals'] = $force_strict_totals;

        return $this;
    }

    /**
     * Gets price_rounding_mode
     *
     * @return \Dangl\AVACloud\Model\PriceRoundingModeDto
     */
    public function getPriceRoundingMode()
    {
        return $this->container['price_rounding_mode'];
    }

    /**
     * Sets price_rounding_mode
     *
     * @param \Dangl\AVACloud\Model\PriceRoundingModeDto $price_rounding_mode This property controls the rounding mode of all price properties, meaning how rounding of decimal places is performed in price calculations. It defaults to DEFAULT_ROUNDING_MODE. Please see the Dangl.AVA documentation for further information about decimal precision.
     *
     * @return $this
     */
    public function setPriceRoundingMode($price_rounding_mode)
    {
        $this->container['price_rounding_mode'] = $price_rounding_mode;

        return $this;
    }

    /**
     * Gets project_information
     *
     * @return \Dangl\AVACloud\Model\ProjectInformationDto
     */
    public function getProjectInformation()
    {
        return $this->container['project_information'];
    }

    /**
     * Sets project_information
     *
     * @param \Dangl\AVACloud\Model\ProjectInformationDto $project_information The ProjectInformation contains information that describes the project and its structure.
     *
     * @return $this
     */
    public function setProjectInformation($project_information)
    {
        $this->container['project_information'] = $project_information;

        return $this;
    }

    /**
     * Gets service_specifications
     *
     * @return \Dangl\AVACloud\Model\ServiceSpecificationDto[]
     */
    public function getServiceSpecifications()
    {
        return $this->container['service_specifications'];
    }

    /**
     * Sets service_specifications
     *
     * @param \Dangl\AVACloud\Model\ServiceSpecificationDto[] $service_specifications The ServiceSpecifications in this Project.
     *
     * @return $this
     */
    public function setServiceSpecifications($service_specifications)
    {
        $this->container['service_specifications'] = $service_specifications;

        return $this;
    }

    /**
     * Gets gaeb_xml_id
     *
     * @return string
     */
    public function getGaebXmlId()
    {
        return $this->container['gaeb_xml_id'];
    }

    /**
     * Sets gaeb_xml_id
     *
     * @param string $gaeb_xml_id This is used to store the GAEB XML Id within this Project. This data is not used for any calculations or evaluations but only for GAEB serialization and deserialization.
     *
     * @return $this
     */
    public function setGaebXmlId($gaeb_xml_id)
    {
        $this->container['gaeb_xml_id'] = $gaeb_xml_id;

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


