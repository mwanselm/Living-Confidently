<?php
/**
 * DiQuote
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Financial representative API
 *
 * API for pulling information on FRs
 *
 * OpenAPI spec version: 13a2629d2e525f48315447733f74e466e785cee9
 * Contact: kyle_mcmullen@glic.com
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
 * DiQuote Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DiQuote implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'DiQuote';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'premium' => 'float',
        'riders' => 'string',
        'monthly_benefit' => 'float',
        'benefit_period' => 'string',
        'elimination_period' => 'string',
        'quote_link' => 'string',
        'age' => 'int',
        'gender' => 'string',
        'income' => 'float',
        'occupation' => 'string',
        'location' => 'string'
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
        'premium' => 'premium',
        'riders' => 'riders',
        'monthly_benefit' => 'monthly_benefit',
        'benefit_period' => 'benefit_period',
        'elimination_period' => 'elimination_period',
        'quote_link' => 'quote_link',
        'age' => 'age',
        'gender' => 'gender',
        'income' => 'income',
        'occupation' => 'occupation',
        'location' => 'location'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'premium' => 'setPremium',
        'riders' => 'setRiders',
        'monthly_benefit' => 'setMonthlyBenefit',
        'benefit_period' => 'setBenefitPeriod',
        'elimination_period' => 'setEliminationPeriod',
        'quote_link' => 'setQuoteLink',
        'age' => 'setAge',
        'gender' => 'setGender',
        'income' => 'setIncome',
        'occupation' => 'setOccupation',
        'location' => 'setLocation'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'premium' => 'getPremium',
        'riders' => 'getRiders',
        'monthly_benefit' => 'getMonthlyBenefit',
        'benefit_period' => 'getBenefitPeriod',
        'elimination_period' => 'getEliminationPeriod',
        'quote_link' => 'getQuoteLink',
        'age' => 'getAge',
        'gender' => 'getGender',
        'income' => 'getIncome',
        'occupation' => 'getOccupation',
        'location' => 'getLocation'
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
        $this->container['premium'] = isset($data['premium']) ? $data['premium'] : null;
        $this->container['riders'] = isset($data['riders']) ? $data['riders'] : null;
        $this->container['monthly_benefit'] = isset($data['monthly_benefit']) ? $data['monthly_benefit'] : null;
        $this->container['benefit_period'] = isset($data['benefit_period']) ? $data['benefit_period'] : null;
        $this->container['elimination_period'] = isset($data['elimination_period']) ? $data['elimination_period'] : null;
        $this->container['quote_link'] = isset($data['quote_link']) ? $data['quote_link'] : null;
        $this->container['age'] = isset($data['age']) ? $data['age'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['income'] = isset($data['income']) ? $data['income'] : null;
        $this->container['occupation'] = isset($data['occupation']) ? $data['occupation'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets premium
     * @return float
     */
    public function getPremium()
    {
        return $this->container['premium'];
    }

    /**
     * Sets premium
     * @param float $premium
     * @return $this
     */
    public function setPremium($premium)
    {
        $this->container['premium'] = $premium;

        return $this;
    }

    /**
     * Gets riders
     * @return string
     */
    public function getRiders()
    {
        return $this->container['riders'];
    }

    /**
     * Sets riders
     * @param string $riders
     * @return $this
     */
    public function setRiders($riders)
    {
        $this->container['riders'] = $riders;

        return $this;
    }

    /**
     * Gets monthly_benefit
     * @return float
     */
    public function getMonthlyBenefit()
    {
        return $this->container['monthly_benefit'];
    }

    /**
     * Sets monthly_benefit
     * @param float $monthly_benefit
     * @return $this
     */
    public function setMonthlyBenefit($monthly_benefit)
    {
        $this->container['monthly_benefit'] = $monthly_benefit;

        return $this;
    }

    /**
     * Gets benefit_period
     * @return string
     */
    public function getBenefitPeriod()
    {
        return $this->container['benefit_period'];
    }

    /**
     * Sets benefit_period
     * @param string $benefit_period
     * @return $this
     */
    public function setBenefitPeriod($benefit_period)
    {
        $this->container['benefit_period'] = $benefit_period;

        return $this;
    }

    /**
     * Gets elimination_period
     * @return string
     */
    public function getEliminationPeriod()
    {
        return $this->container['elimination_period'];
    }

    /**
     * Sets elimination_period
     * @param string $elimination_period
     * @return $this
     */
    public function setEliminationPeriod($elimination_period)
    {
        $this->container['elimination_period'] = $elimination_period;

        return $this;
    }

    /**
     * Gets quote_link
     * @return string
     */
    public function getQuoteLink()
    {
        return $this->container['quote_link'];
    }

    /**
     * Sets quote_link
     * @param string $quote_link
     * @return $this
     */
    public function setQuoteLink($quote_link)
    {
        $this->container['quote_link'] = $quote_link;

        return $this;
    }

    /**
     * Gets age
     * @return int
     */
    public function getAge()
    {
        return $this->container['age'];
    }

    /**
     * Sets age
     * @param int $age
     * @return $this
     */
    public function setAge($age)
    {
        $this->container['age'] = $age;

        return $this;
    }

    /**
     * Gets gender
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     * @param string $gender
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets income
     * @return float
     */
    public function getIncome()
    {
        return $this->container['income'];
    }

    /**
     * Sets income
     * @param float $income
     * @return $this
     */
    public function setIncome($income)
    {
        $this->container['income'] = $income;

        return $this;
    }

    /**
     * Gets occupation
     * @return string
     */
    public function getOccupation()
    {
        return $this->container['occupation'];
    }

    /**
     * Sets occupation
     * @param string $occupation
     * @return $this
     */
    public function setOccupation($occupation)
    {
        $this->container['occupation'] = $occupation;

        return $this;
    }

    /**
     * Gets location
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     * @param string $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

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

