<?php
/**
 * PriceRoundingModeDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * AVACloud API 1.17.0
 *
 * AVACloud API specification
 *
 * OpenAPI spec version: 1.17.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.17
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Dangl\AVACloud\Model;
use \Dangl\AVACloud\ObjectSerializer;

/**
 * PriceRoundingModeDto Class Doc Comment
 *
 * @category Class
 * @description This enum configures rounding modes for price calculations in projects
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PriceRoundingModeDto
{
    /**
     * Possible values of this enum
     */
    const NORMAL = 'Normal';
    const FLOOR = 'Floor';
    const CEILING = 'Ceiling';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NORMAL,
            self::FLOOR,
            self::CEILING,
        ];
    }
}


