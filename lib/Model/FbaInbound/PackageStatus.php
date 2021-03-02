<?php
/**
 * PackageStatus
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Fulfillment Inbound
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\FbaInbound;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * PackageStatus Class Doc Comment
 *
 * @category Class
 * @description The shipment status of the package.
 * @package  SellingPartnerApi
 * @group 
 */
class PackageStatus
{
    /**
     * Possible values of this enum
     */
    const SHIPPED = 'SHIPPED';
    const IN_TRANSIT = 'IN_TRANSIT';
    const DELIVERED = 'DELIVERED';
    const CHECKED_IN = 'CHECKED_IN';
    const RECEIVING = 'RECEIVING';
    const CLOSED = 'CLOSED';
    const DELETED = 'DELETED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SHIPPED,
            self::IN_TRANSIT,
            self::DELIVERED,
            self::CHECKED_IN,
            self::RECEIVING,
            self::CLOSED,
            self::DELETED,
        ];
    }
}


