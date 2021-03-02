<?php
/**
 * TransportDetailInput
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

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * TransportDetailInput Class Doc Comment
 *
 * @category Class
 * @description Information required to create an Amazon-partnered carrier shipping estimate, or to alert the Amazon fulfillment center to the arrival of an inbound shipment by a non-Amazon-partnered carrier.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class TransportDetailInput implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransportDetailInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'partnered_small_parcel_data' => '\SellingPartnerApi\Model\FbaInbound\PartneredSmallParcelDataInput',
        'non_partnered_small_parcel_data' => '\SellingPartnerApi\Model\FbaInbound\NonPartneredSmallParcelDataInput',
        'partnered_ltl_data' => '\SellingPartnerApi\Model\FbaInbound\PartneredLtlDataInput',
        'non_partnered_ltl_data' => '\SellingPartnerApi\Model\FbaInbound\NonPartneredLtlDataInput'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'partnered_small_parcel_data' => null,
        'non_partnered_small_parcel_data' => null,
        'partnered_ltl_data' => null,
        'non_partnered_ltl_data' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'partnered_small_parcel_data' => 'PartneredSmallParcelData',
        'non_partnered_small_parcel_data' => 'NonPartneredSmallParcelData',
        'partnered_ltl_data' => 'PartneredLtlData',
        'non_partnered_ltl_data' => 'NonPartneredLtlData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'partnered_small_parcel_data' => 'setPartneredSmallParcelData',
        'non_partnered_small_parcel_data' => 'setNonPartneredSmallParcelData',
        'partnered_ltl_data' => 'setPartneredLtlData',
        'non_partnered_ltl_data' => 'setNonPartneredLtlData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'partnered_small_parcel_data' => 'getPartneredSmallParcelData',
        'non_partnered_small_parcel_data' => 'getNonPartneredSmallParcelData',
        'partnered_ltl_data' => 'getPartneredLtlData',
        'non_partnered_ltl_data' => 'getNonPartneredLtlData'
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
        return self::$openAPIModelName;
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
        $this->container['partnered_small_parcel_data'] = $data['partnered_small_parcel_data'] ?? null;
        $this->container['non_partnered_small_parcel_data'] = $data['non_partnered_small_parcel_data'] ?? null;
        $this->container['partnered_ltl_data'] = $data['partnered_ltl_data'] ?? null;
        $this->container['non_partnered_ltl_data'] = $data['non_partnered_ltl_data'] ?? null;
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
     * Gets partnered_small_parcel_data
     *
     * @return \SellingPartnerApi\Model\FbaInbound\PartneredSmallParcelDataInput|null
     */
    public function getPartneredSmallParcelData()
    {
        return $this->container['partnered_small_parcel_data'];
    }

    /**
     * Sets partnered_small_parcel_data
     *
     * @param \SellingPartnerApi\Model\FbaInbound\PartneredSmallParcelDataInput|null $partnered_small_parcel_data partnered_small_parcel_data
     *
     * @return self
     */
    public function setPartneredSmallParcelData($partnered_small_parcel_data)
    {
        $this->container['partnered_small_parcel_data'] = $partnered_small_parcel_data;

        return $this;
    }

    /**
     * Gets non_partnered_small_parcel_data
     *
     * @return \SellingPartnerApi\Model\FbaInbound\NonPartneredSmallParcelDataInput|null
     */
    public function getNonPartneredSmallParcelData()
    {
        return $this->container['non_partnered_small_parcel_data'];
    }

    /**
     * Sets non_partnered_small_parcel_data
     *
     * @param \SellingPartnerApi\Model\FbaInbound\NonPartneredSmallParcelDataInput|null $non_partnered_small_parcel_data non_partnered_small_parcel_data
     *
     * @return self
     */
    public function setNonPartneredSmallParcelData($non_partnered_small_parcel_data)
    {
        $this->container['non_partnered_small_parcel_data'] = $non_partnered_small_parcel_data;

        return $this;
    }

    /**
     * Gets partnered_ltl_data
     *
     * @return \SellingPartnerApi\Model\FbaInbound\PartneredLtlDataInput|null
     */
    public function getPartneredLtlData()
    {
        return $this->container['partnered_ltl_data'];
    }

    /**
     * Sets partnered_ltl_data
     *
     * @param \SellingPartnerApi\Model\FbaInbound\PartneredLtlDataInput|null $partnered_ltl_data partnered_ltl_data
     *
     * @return self
     */
    public function setPartneredLtlData($partnered_ltl_data)
    {
        $this->container['partnered_ltl_data'] = $partnered_ltl_data;

        return $this;
    }

    /**
     * Gets non_partnered_ltl_data
     *
     * @return \SellingPartnerApi\Model\FbaInbound\NonPartneredLtlDataInput|null
     */
    public function getNonPartneredLtlData()
    {
        return $this->container['non_partnered_ltl_data'];
    }

    /**
     * Sets non_partnered_ltl_data
     *
     * @param \SellingPartnerApi\Model\FbaInbound\NonPartneredLtlDataInput|null $non_partnered_ltl_data non_partnered_ltl_data
     *
     * @return self
     */
    public function setNonPartneredLtlData($non_partnered_ltl_data)
    {
        $this->container['non_partnered_ltl_data'] = $non_partnered_ltl_data;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


