<?php
/**
 * ComissionStatusDto
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
use \Dangl\AVACloud\ObjectSerializer;

/**
 * ComissionStatusDto Class Doc Comment
 *
 * @category Class
 * @description Indicates if this service specification item is commissioned (and therefore should be executed), postponed for later or undefined.
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ComissionStatusDto
{
    /**
     * Possible values of this enum
     */
    const UNDEFINED = 'Undefined';
    const COMMISSIONED = 'Commissioned';
    const POSTPONED = 'Postponed';
    const REMOVED = 'Removed';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNDEFINED,
            self::COMMISSIONED,
            self::POSTPONED,
            self::REMOVED,
        ];
    }
}


