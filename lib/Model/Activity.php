<?php
/**
 * Activity
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Route Optimization API
 *
 * Our Route Optimization API solves the so called vehicle routing problem fast. It calculates an optimal tour for a set of vehicles, services and constraints
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * Activity Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Activity implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Activity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'id' => 'string',
        'location_id' => 'string',
        'arr_time' => 'int',
        'end_time' => 'int',
        'waiting_time' => 'int',
        'distance' => 'int',
        'driving_time' => 'int',
        'load_before' => 'int[]',
        'load_after' => 'int[]'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'type' => 'type',
        'id' => 'id',
        'location_id' => 'location_id',
        'arr_time' => 'arr_time',
        'end_time' => 'end_time',
        'waiting_time' => 'waiting_time',
        'distance' => 'distance',
        'driving_time' => 'driving_time',
        'load_before' => 'load_before',
        'load_after' => 'load_after'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'id' => 'setId',
        'location_id' => 'setLocationId',
        'arr_time' => 'setArrTime',
        'end_time' => 'setEndTime',
        'waiting_time' => 'setWaitingTime',
        'distance' => 'setDistance',
        'driving_time' => 'setDrivingTime',
        'load_before' => 'setLoadBefore',
        'load_after' => 'setLoadAfter'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'id' => 'getId',
        'location_id' => 'getLocationId',
        'arr_time' => 'getArrTime',
        'end_time' => 'getEndTime',
        'waiting_time' => 'getWaitingTime',
        'distance' => 'getDistance',
        'driving_time' => 'getDrivingTime',
        'load_before' => 'getLoadBefore',
        'load_after' => 'getLoadAfter'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const TYPE_START = 'start';
    const TYPE_END = 'end';
    const TYPE_SERVICE = 'service';
    const TYPE_PICKUP_SHIPMENT = 'pickupShipment';
    const TYPE_DELIVER_SHIPMENT = 'deliverShipment';
    const TYPE_PICKUP = 'pickup';
    const TYPE_DELIVERY = 'delivery';
    const TYPE_BREAK = 'break';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_START,
            self::TYPE_END,
            self::TYPE_SERVICE,
            self::TYPE_PICKUP_SHIPMENT,
            self::TYPE_DELIVER_SHIPMENT,
            self::TYPE_PICKUP,
            self::TYPE_DELIVERY,
            self::TYPE_BREAK,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['arr_time'] = isset($data['arr_time']) ? $data['arr_time'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
        $this->container['waiting_time'] = isset($data['waiting_time']) ? $data['waiting_time'] : null;
        $this->container['distance'] = isset($data['distance']) ? $data['distance'] : null;
        $this->container['driving_time'] = isset($data['driving_time']) ? $data['driving_time'] : null;
        $this->container['load_before'] = isset($data['load_before']) ? $data['load_before'] : null;
        $this->container['load_after'] = isset($data['load_after']) ? $data['load_after'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        $allowed_values = ["start", "end", "service", "pickupShipment", "deliverShipment", "pickup", "delivery"];
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of #{allowed_values}.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        $allowed_values = ["start", "end", "service", "pickupShipment", "deliverShipment", "pickup", "delivery"];
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type type of activity
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('start', 'end', 'service', 'pickupShipment', 'deliverShipment', 'pickup', 'delivery');
        if (!is_null($type) && (!in_array($type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'start', 'end', 'service', 'pickupShipment', 'deliverShipment', 'pickup', 'delivery'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id id referring to the underlying service or shipment, i.e. the shipment or service this activity belongs to
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets location_id
     * @return string
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     * @param string $location_id id that refers to address
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets arr_time
     * @return int
     */
    public function getArrTime()
    {
        return $this->container['arr_time'];
    }

    /**
     * Sets arr_time
     * @param int $arr_time arrival time at this activity in ms
     * @return $this
     */
    public function setArrTime($arr_time)
    {
        $this->container['arr_time'] = $arr_time;

        return $this;
    }

    /**
     * Gets end_time
     * @return int
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     * @param int $end_time end time of and thus departure time at this activity
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets waiting_time
     * @return int
     */
    public function getWaitingTime()
    {
        return $this->container['waiting_time'];
    }

    /**
     * Sets waiting_time
     * @param int $waiting_time waiting time at this activity in ms
     * @return $this
     */
    public function setWaitingTime($waiting_time)
    {
        $this->container['waiting_time'] = $waiting_time;

        return $this;
    }

    /**
     * Gets distance
     * @return int
     */
    public function getDistance()
    {
        return $this->container['distance'];
    }

    /**
     * Sets distance
     * @param int $distance cumulated distance from start to this activity in m
     * @return $this
     */
    public function setDistance($distance)
    {
        $this->container['distance'] = $distance;

        return $this;
    }

    /**
     * Gets driving_time
     * @return int
     */
    public function getDrivingTime()
    {
        return $this->container['driving_time'];
    }

    /**
     * Sets driving_time
     * @param int $driving_time driving time of driver in ms
     * @return $this
     */
    public function setDrivingTime($driving_time)
    {
        $this->container['driving_time'] = $driving_time;

        return $this;
    }

    /**
     * Gets load_before
     * @return int[]
     */
    public function getLoadBefore()
    {
        return $this->container['load_before'];
    }

    /**
     * Sets load_before
     * @param int[] $load_before Array with size/capacity dimensions before this activity
     * @return $this
     */
    public function setLoadBefore($load_before)
    {
        $this->container['load_before'] = $load_before;

        return $this;
    }

    /**
     * Gets load_after
     * @return int[]
     */
    public function getLoadAfter()
    {
        return $this->container['load_after'];
    }

    /**
     * Sets load_after
     * @param int[] $load_after Array with size/capacity dimensions after this activity
     * @return $this
     */
    public function setLoadAfter($load_after)
    {
        $this->container['load_after'] = $load_after;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

