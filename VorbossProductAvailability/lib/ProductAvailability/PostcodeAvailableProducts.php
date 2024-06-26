<?php
/**
 * PostcodeAvailableProducts
 *
 * PHP version 5
 *
 * @category Class
 * @package  Vorboss
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Vorboss Product Availability API
 *
 * This API is provided by Vorboss to allow customers to check which products are available at a given postcode.
 *
 * OpenAPI spec version: 0.2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.55
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Vorboss\ProductAvailability;

use \ArrayAccess;
use \Vorboss\ObjectSerializer;

/**
 * PostcodeAvailableProducts Class Doc Comment
 *
 * @category Class
 * @package  Vorboss
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PostcodeAvailableProducts implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Postcode_availableProducts';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'price' => 'float',
        'lead_time_days' => 'int',
        'currency' => 'string',
        'bandwidth_provisioned' => 'int',
        'bandwidth_capactity' => 'int',
        'term' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'price' => null,
        'lead_time_days' => null,
        'currency' => null,
        'bandwidth_provisioned' => null,
        'bandwidth_capactity' => null,
        'term' => null
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
        'name' => 'name',
        'price' => 'price',
        'lead_time_days' => 'leadTimeDays',
        'currency' => 'currency',
        'bandwidth_provisioned' => 'bandwidthProvisioned',
        'bandwidth_capactity' => 'bandwidthCapactity',
        'term' => 'term'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'price' => 'setPrice',
        'lead_time_days' => 'setLeadTimeDays',
        'currency' => 'setCurrency',
        'bandwidth_provisioned' => 'setBandwidthProvisioned',
        'bandwidth_capactity' => 'setBandwidthCapactity',
        'term' => 'setTerm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'price' => 'getPrice',
        'lead_time_days' => 'getLeadTimeDays',
        'currency' => 'getCurrency',
        'bandwidth_provisioned' => 'getBandwidthProvisioned',
        'bandwidth_capactity' => 'getBandwidthCapactity',
        'term' => 'getTerm'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['lead_time_days'] = isset($data['lead_time_days']) ? $data['lead_time_days'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['bandwidth_provisioned'] = isset($data['bandwidth_provisioned']) ? $data['bandwidth_provisioned'] : null;
        $this->container['bandwidth_capactity'] = isset($data['bandwidth_capactity']) ? $data['bandwidth_capactity'] : null;
        $this->container['term'] = isset($data['term']) ? $data['term'] : null;
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets lead_time_days
     *
     * @return int
     */
    public function getLeadTimeDays()
    {
        return $this->container['lead_time_days'];
    }

    /**
     * Sets lead_time_days
     *
     * @param int $lead_time_days lead_time_days
     *
     * @return $this
     */
    public function setLeadTimeDays($lead_time_days)
    {
        $this->container['lead_time_days'] = $lead_time_days;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets bandwidth_provisioned
     *
     * @return int
     */
    public function getBandwidthProvisioned()
    {
        return $this->container['bandwidth_provisioned'];
    }

    /**
     * Sets bandwidth_provisioned
     *
     * @param int $bandwidth_provisioned bandwidth_provisioned
     *
     * @return $this
     */
    public function setBandwidthProvisioned($bandwidth_provisioned)
    {
        $this->container['bandwidth_provisioned'] = $bandwidth_provisioned;

        return $this;
    }

    /**
     * Gets bandwidth_capactity
     *
     * @return int
     */
    public function getBandwidthCapactity()
    {
        return $this->container['bandwidth_capactity'];
    }

    /**
     * Sets bandwidth_capactity
     *
     * @param int $bandwidth_capactity bandwidth_capactity
     *
     * @return $this
     */
    public function setBandwidthCapactity($bandwidth_capactity)
    {
        $this->container['bandwidth_capactity'] = $bandwidth_capactity;

        return $this;
    }

    /**
     * Gets term
     *
     * @return int
     */
    public function getTerm()
    {
        return $this->container['term'];
    }

    /**
     * Sets term
     *
     * @param int $term term
     *
     * @return $this
     */
    public function setTerm($term)
    {
        $this->container['term'] = $term;

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
     * @return mixed
     */
    #[\ReturnTypeWillChange]
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
