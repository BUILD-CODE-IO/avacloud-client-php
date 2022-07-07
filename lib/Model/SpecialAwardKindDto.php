<?php
/**
 * SpecialAwardKindDto
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
 * SpecialAwardKindDto Class Doc Comment
 *
 * @category Class
 * @description This enumeration describes awards for project that are not just a regular procurement. For example, it can be used to describe recurring maintenance or an outline contract (German: Rahmenvertrag) which just specifies services and prices but may be requested on demand when necessary
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SpecialAwardKindDto
{
    /**
     * Possible values of this enum
     */
    const UNSPECIFIED = 'Unspecified';
    const MAINTENANCE_CONTRACT = 'MaintenanceContract';
    const OUTLINE_CONTRACT = 'OutlineContract';
    const OUTLINE_FOR_MAINTENANCE_CONTRACT = 'OutlineForMaintenanceContract';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNSPECIFIED,
            self::MAINTENANCE_CONTRACT,
            self::OUTLINE_CONTRACT,
            self::OUTLINE_FOR_MAINTENANCE_CONTRACT,
        ];
    }
}


