<?php
/**
 * ItemNumberSchemaTierTypeDto
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
use \Dangl/AVACloud\ObjectSerializer;

/**
 * ItemNumberSchemaTierTypeDto Class Doc Comment
 *
 * @category Class
 * @description Specifies the type an ItemNumberSchemaTier represents. For example, a tier may indicate to be used for positions or for groups.
 * @package  Dangl/AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemNumberSchemaTierTypeDto
{
    /**
     * Possible values of this enum
     */
    const UNDEFINED = 'Undefined';
    const INDEX = 'Index';
    const POSITION = 'Position';
    const GROUP = 'Group';
    const LOT = 'Lot';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNDEFINED,
            self::INDEX,
            self::POSITION,
            self::GROUP,
            self::LOT,
        ];
    }
}

