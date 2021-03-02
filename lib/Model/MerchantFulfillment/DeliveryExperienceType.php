<?php
/**
 * DeliveryExperienceType
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
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

namespace SellingPartnerApi\Model\MerchantFulfillment;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * DeliveryExperienceType Class Doc Comment
 *
 * @category Class
 * @description The delivery confirmation level.
 * @package  SellingPartnerApi
 * @group 
 */
class DeliveryExperienceType
{
    /**
     * Possible values of this enum
     */
    const DELIVERY_CONFIRMATION_WITH_ADULT_SIGNATURE = 'DeliveryConfirmationWithAdultSignature';
    const DELIVERY_CONFIRMATION_WITH_SIGNATURE = 'DeliveryConfirmationWithSignature';
    const DELIVERY_CONFIRMATION_WITHOUT_SIGNATURE = 'DeliveryConfirmationWithoutSignature';
    const NO_TRACKING = 'NoTracking';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DELIVERY_CONFIRMATION_WITH_ADULT_SIGNATURE,
            self::DELIVERY_CONFIRMATION_WITH_SIGNATURE,
            self::DELIVERY_CONFIRMATION_WITHOUT_SIGNATURE,
            self::NO_TRACKING,
        ];
    }
}


