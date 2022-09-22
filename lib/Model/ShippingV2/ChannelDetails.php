<?php
/**
 * ChannelDetails
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Amazon Shipping API
 *
 * The Amazon Shipping API is designed to support outbound shipping use cases both for orders originating on Amazon-owned marketplaces as well as external channels/marketplaces. With these APIs, you can request shipping rates, create shipments, cancel shipments, and track shipments.
 *
 * The version of the OpenAPI document: v2
 * Contact: swa-api-core@amazon.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\ShippingV2;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * ChannelDetails Class Doc Comment
 *
 * @category Class
 * @description Shipment source channel related information.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ChannelDetails implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChannelDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'channel_type' => 'string',
        'amazon_order_details' => '\SellingPartnerApi\Model\ShippingV2\AmazonOrderDetails',
        'amazon_shipment_details' => '\SellingPartnerApi\Model\ShippingV2\AmazonShipmentDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'channel_type' => null,
        'amazon_order_details' => null,
        'amazon_shipment_details' => null
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
        'channel_type' => 'channelType',
        'amazon_order_details' => 'amazonOrderDetails',
        'amazon_shipment_details' => 'amazonShipmentDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'channel_type' => 'setChannelType',
        'amazon_order_details' => 'setAmazonOrderDetails',
        'amazon_shipment_details' => 'setAmazonShipmentDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'channel_type' => 'getChannelType',
        'amazon_order_details' => 'getAmazonOrderDetails',
        'amazon_shipment_details' => 'getAmazonShipmentDetails'
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

    const CHANNEL_TYPE_AMAZON = 'AMAZON';
    const CHANNEL_TYPE_EXTERNAL = 'EXTERNAL';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChannelTypeAllowableValues()
    {
        return [
            self::CHANNEL_TYPE_AMAZON,
            self::CHANNEL_TYPE_EXTERNAL,
        ];
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
        $this->container['channel_type'] = $data['channel_type'] ?? null;
        $this->container['amazon_order_details'] = $data['amazon_order_details'] ?? null;
        $this->container['amazon_shipment_details'] = $data['amazon_shipment_details'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['channel_type'] === null) {
            $invalidProperties[] = "'channel_type' can't be null";
        }
        $allowedValues = $this->getChannelTypeAllowableValues();
        if (!is_null($this->container['channel_type']) && !in_array($this->container['channel_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'channel_type', must be one of '%s'",
                $this->container['channel_type'],
                implode("', '", $allowedValues)
            );
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
     * Gets channel_type
     *
     * @return string
     */
    public function getChannelType()
    {
        return $this->container['channel_type'];
    }

    /**
     * Sets channel_type
     *
     * @param string $channel_type The shipment source channel type.
     *
     * @return self
     */
    public function setChannelType($channel_type)
    {
        $allowedValues = $this->getChannelTypeAllowableValues();
        if (!in_array($channel_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'channel_type', must be one of '%s'",
                    $channel_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['channel_type'] = $channel_type;

        return $this;
    }
    /**
     * Gets amazon_order_details
     *
     * @return \SellingPartnerApi\Model\ShippingV2\AmazonOrderDetails|null
     */
    public function getAmazonOrderDetails()
    {
        return $this->container['amazon_order_details'];
    }

    /**
     * Sets amazon_order_details
     *
     * @param \SellingPartnerApi\Model\ShippingV2\AmazonOrderDetails|null $amazon_order_details amazon_order_details
     *
     * @return self
     */
    public function setAmazonOrderDetails($amazon_order_details)
    {
        $this->container['amazon_order_details'] = $amazon_order_details;

        return $this;
    }
    /**
     * Gets amazon_shipment_details
     *
     * @return \SellingPartnerApi\Model\ShippingV2\AmazonShipmentDetails|null
     */
    public function getAmazonShipmentDetails()
    {
        return $this->container['amazon_shipment_details'];
    }

    /**
     * Sets amazon_shipment_details
     *
     * @param \SellingPartnerApi\Model\ShippingV2\AmazonShipmentDetails|null $amazon_shipment_details amazon_shipment_details
     *
     * @return self
     */
    public function setAmazonShipmentDetails($amazon_shipment_details)
    {
        $this->container['amazon_shipment_details'] = $amazon_shipment_details;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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

    /**
     * Enable iterating over all of the model's attributes in $key => $value format
     *
     * @return \Traversable
     */
    public function getIterator(): \Traversable
    {
        return (function () {
            foreach ($this->container as $key => $value) {
                yield $key => $value;
            }
        })();
    }

    /**
     * Retrieves the property with the given name by converting the property accession
     * to a getter call.
     *
     * @param string $propertyName
     * @return mixed
     */
    public function __get($propertyName)
    {
        // This doesn't make a syntactical difference since PHP is case-insensitive, but
        // makes error messages clearer (e.g. "Call to undefined method getFoo()" rather
        // than "Call to undefined method getfoo()").
        $ucProp = ucfirst($propertyName);
        $getter = "get$ucProp";
        return $this->$getter();
    }

    /**
     * Sets the property with the given name by converting the property accession
     * to a setter call.
     *
     * @param string $propertyName
     * @param mixed $propertyValue
     * @return SellingPartnerApi\Model\ShippingV2\ChannelDetails
     */
    public function __set($propertyName, $propertyValue)
    {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


