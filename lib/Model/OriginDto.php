<?php
/**
 * OriginDto
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
 * OriginDto Class Doc Comment
 *
 * @category Class
 * @description Indicates where a service specification was originally created.
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OriginDto
{
    /**
     * Possible values of this enum
     */
    const SELF = 'Self';
    const GAEB90 = 'Gaeb90';
    const GAEB2000 = 'Gaeb2000';
    const GAEB_XML = 'GaebXml';
    const OENORM = 'Oenorm';
    const REB = 'Reb';
    const SIA = 'Sia';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SELF,
            self::GAEB90,
            self::GAEB2000,
            self::GAEB_XML,
            self::OENORM,
            self::REB,
            self::SIA,
        ];
    }
}


