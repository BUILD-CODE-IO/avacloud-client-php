<?php
/**
 * CommercePropertiesDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  Dangl/AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * AVACloud API 1.9.1
 *
 * AVACloud API specification
 *
 * OpenAPI spec version: 1.9.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Dangl/AVACloud\Dangl\AVACloud;

use \ArrayAccess;
use \Dangl/AVACloud\ObjectSerializer;

/**
 * CommercePropertiesDto Class Doc Comment
 *
 * @category Class
 * @description This class holds specialized information that is relevant to trade or commerce based data exchange scenarios, e.g. between customers, vendors, suppliers and distributors. It is used when exporting to GAEB XML 9x exchange phases.
 * @package  Dangl/AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CommercePropertiesDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CommercePropertiesDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'article_number' => 'string',
        'ean_gtin_article_number' => 'string',
        'iln_article_number' => 'string',
        'catalogue_number' => 'string',
        'catalogue_article_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'article_number' => null,
        'ean_gtin_article_number' => null,
        'iln_article_number' => null,
        'catalogue_number' => null,
        'catalogue_article_number' => null
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
        'article_number' => 'articleNumber',
        'ean_gtin_article_number' => 'eanGtinArticleNumber',
        'iln_article_number' => 'ilnArticleNumber',
        'catalogue_number' => 'catalogueNumber',
        'catalogue_article_number' => 'catalogueArticleNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'article_number' => 'setArticleNumber',
        'ean_gtin_article_number' => 'setEanGtinArticleNumber',
        'iln_article_number' => 'setIlnArticleNumber',
        'catalogue_number' => 'setCatalogueNumber',
        'catalogue_article_number' => 'setCatalogueArticleNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'article_number' => 'getArticleNumber',
        'ean_gtin_article_number' => 'getEanGtinArticleNumber',
        'iln_article_number' => 'getIlnArticleNumber',
        'catalogue_number' => 'getCatalogueNumber',
        'catalogue_article_number' => 'getCatalogueArticleNumber'
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
        $this->container['article_number'] = isset($data['article_number']) ? $data['article_number'] : null;
        $this->container['ean_gtin_article_number'] = isset($data['ean_gtin_article_number']) ? $data['ean_gtin_article_number'] : null;
        $this->container['iln_article_number'] = isset($data['iln_article_number']) ? $data['iln_article_number'] : null;
        $this->container['catalogue_number'] = isset($data['catalogue_number']) ? $data['catalogue_number'] : null;
        $this->container['catalogue_article_number'] = isset($data['catalogue_article_number']) ? $data['catalogue_article_number'] : null;
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
     * Gets article_number
     *
     * @return string
     */
    public function getArticleNumber()
    {
        return $this->container['article_number'];
    }

    /**
     * Sets article_number
     *
     * @param string $article_number This maps to ArtNo in GAEB XML and represents an article number given by the supplier.
     *
     * @return $this
     */
    public function setArticleNumber($article_number)
    {
        $this->container['article_number'] = $article_number;

        return $this;
    }

    /**
     * Gets ean_gtin_article_number
     *
     * @return string
     */
    public function getEanGtinArticleNumber()
    {
        return $this->container['ean_gtin_article_number'];
    }

    /**
     * Sets ean_gtin_article_number
     *
     * @param string $ean_gtin_article_number This maps to EAN in GAEB XML and represents an GTIN (formerly EAN) article number.
     *
     * @return $this
     */
    public function setEanGtinArticleNumber($ean_gtin_article_number)
    {
        $this->container['ean_gtin_article_number'] = $ean_gtin_article_number;

        return $this;
    }

    /**
     * Gets iln_article_number
     *
     * @return string
     */
    public function getIlnArticleNumber()
    {
        return $this->container['iln_article_number'];
    }

    /**
     * Sets iln_article_number
     *
     * @param string $iln_article_number This maps to ArtNoID in GAEB XML and represents an ILN article number.
     *
     * @return $this
     */
    public function setIlnArticleNumber($iln_article_number)
    {
        $this->container['iln_article_number'] = $iln_article_number;

        return $this;
    }

    /**
     * Gets catalogue_number
     *
     * @return string
     */
    public function getCatalogueNumber()
    {
        return $this->container['catalogue_number'];
    }

    /**
     * Sets catalogue_number
     *
     * @param string $catalogue_number This maps to CatalogNo in GAEB XML and represents an identifier of a specific catalogue. The referenced catalogue is usually a customer specific one, not related to CatalogueReferences.
     *
     * @return $this
     */
    public function setCatalogueNumber($catalogue_number)
    {
        $this->container['catalogue_number'] = $catalogue_number;

        return $this;
    }

    /**
     * Gets catalogue_article_number
     *
     * @return string
     */
    public function getCatalogueArticleNumber()
    {
        return $this->container['catalogue_article_number'];
    }

    /**
     * Sets catalogue_article_number
     *
     * @param string $catalogue_article_number This maps to CatalogArtNo in GAEB XML and represents a key that maps to an entry in a specific catalogue. The referenced catalogue is usually a customer specific one, not related to CatalogueReferences.
     *
     * @return $this
     */
    public function setCatalogueArticleNumber($catalogue_article_number)
    {
        $this->container['catalogue_article_number'] = $catalogue_article_number;

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

