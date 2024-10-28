<?php
/**
 * EmailValidatorSubscription
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  API_TurboSMTP_Invoker
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * TurboSMTP Public APIs
 *
 * This document describes all public turboSMTP **V2** API and offers endpoints Descriptions, Parameters, Requests, Responses and Samples of usage.  [Click here to view the previous version of turboSMTP Public API Version 1.0](https://www.serversmtp.com/turbo-api-1)   # Security For the most part (and where not otherwise explicit) turboSMTP’s API requires Authorization.   Authorization to access a user’s resource is granted to clients provided they set  authentication headers into their request, valued with the proper values issued by turboSMTP servers.  ## *  Authorization via ConsumerKey/ConsumerSecret  This type of authorization consists of a pair of headers, named consumerKey and consumerSecret that are created and granted to the end user to be used in a permanent way (unless they´re deleted of course). This kind of authentication is intended to provide access to endpoints features without the need of providing the user the account details (email address + password).  *consumerKey:* Consumer Key Granted.  *consumerSecret:* Consumer Secret Granted.  (Use [/consumerKeys/create](#/consumerkey/createConsumerKey) create a consumer key/secret pair).      ## *  Authorization via Authentication Key  The authentication key is user-based and it is issued by turboSMTP servers upon successful user’s email address + password challenge, performed by means of appropriate request.      *Authorization:* Authorization_Key  (Use [/authentication/authorize](#/authentication/AuthenticationLogin) to obtain an API Key)  # Data Interchange Format  For the most part (and where not otherwise explicit) turboSMTP’s API uses JSON as the data format of choice when it comes to request and response bodies.
 *
 * The version of the OpenAPI document: 2.0.0-oas3
 * Contact: api@turbo-smtp.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace API_TurboSMTP_Invoker\API_TurboSMTP_Model;

use \ArrayAccess;
use \API_TurboSMTP_Invoker\ObjectSerializer;

/**
 * EmailValidatorSubscription Class Doc Comment
 *
 * @category Class
 * @package  API_TurboSMTP_Invoker
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EmailValidatorSubscription implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmailValidatorSubscription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'currency' => '\API_TurboSMTP_Invoker\API_TurboSMTP_Model\Currency',
        'free_credits' => 'int',
        'free_credits_used' => 'int',
        'last_used_period' => 'string',
        'latest_period_start_date' => 'string',
        'period_expiration_date' => 'string',
        'paid_credits' => 'float',
        'remaining_free_credit' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'currency' => null,
        'free_credits' => 'int32',
        'free_credits_used' => 'int32',
        'last_used_period' => null,
        'latest_period_start_date' => null,
        'period_expiration_date' => null,
        'paid_credits' => 'currency',
        'remaining_free_credit' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'currency' => false,
        'free_credits' => false,
        'free_credits_used' => false,
        'last_used_period' => true,
        'latest_period_start_date' => true,
        'period_expiration_date' => true,
        'paid_credits' => false,
        'remaining_free_credit' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'currency' => 'currency',
        'free_credits' => 'free_credits',
        'free_credits_used' => 'free_credits_used',
        'last_used_period' => 'last_used_period',
        'latest_period_start_date' => 'latest_period_start_date',
        'period_expiration_date' => 'period_expiration_date',
        'paid_credits' => 'paid_credits',
        'remaining_free_credit' => 'remaining_free_credit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currency' => 'setCurrency',
        'free_credits' => 'setFreeCredits',
        'free_credits_used' => 'setFreeCreditsUsed',
        'last_used_period' => 'setLastUsedPeriod',
        'latest_period_start_date' => 'setLatestPeriodStartDate',
        'period_expiration_date' => 'setPeriodExpirationDate',
        'paid_credits' => 'setPaidCredits',
        'remaining_free_credit' => 'setRemainingFreeCredit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currency' => 'getCurrency',
        'free_credits' => 'getFreeCredits',
        'free_credits_used' => 'getFreeCreditsUsed',
        'last_used_period' => 'getLastUsedPeriod',
        'latest_period_start_date' => 'getLatestPeriodStartDate',
        'period_expiration_date' => 'getPeriodExpirationDate',
        'paid_credits' => 'getPaidCredits',
        'remaining_free_credit' => 'getRemainingFreeCredit'
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
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('free_credits', $data ?? [], null);
        $this->setIfExists('free_credits_used', $data ?? [], null);
        $this->setIfExists('last_used_period', $data ?? [], null);
        $this->setIfExists('latest_period_start_date', $data ?? [], null);
        $this->setIfExists('period_expiration_date', $data ?? [], null);
        $this->setIfExists('paid_credits', $data ?? [], null);
        $this->setIfExists('remaining_free_credit', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['free_credits'] === null) {
            $invalidProperties[] = "'free_credits' can't be null";
        }
        if (($this->container['free_credits'] < 0)) {
            $invalidProperties[] = "invalid value for 'free_credits', must be bigger than or equal to 0.";
        }

        if ($this->container['free_credits_used'] === null) {
            $invalidProperties[] = "'free_credits_used' can't be null";
        }
        if (($this->container['free_credits_used'] < 0)) {
            $invalidProperties[] = "invalid value for 'free_credits_used', must be bigger than or equal to 0.";
        }

        if ($this->container['last_used_period'] === null) {
            $invalidProperties[] = "'last_used_period' can't be null";
        }
        if (!preg_match("/(\\d{4}-\\d{2}-\\d{2} \\d{2}:\\d{2}:\\d{2})/", $this->container['last_used_period'])) {
            $invalidProperties[] = "invalid value for 'last_used_period', must be conform to the pattern /(\\d{4}-\\d{2}-\\d{2} \\d{2}:\\d{2}:\\d{2})/.";
        }

        if ($this->container['latest_period_start_date'] === null) {
            $invalidProperties[] = "'latest_period_start_date' can't be null";
        }
        if (!preg_match("/(\\d{4}-\\d{2}-\\d{2} \\d{2}:\\d{2}:\\d{2})/", $this->container['latest_period_start_date'])) {
            $invalidProperties[] = "invalid value for 'latest_period_start_date', must be conform to the pattern /(\\d{4}-\\d{2}-\\d{2} \\d{2}:\\d{2}:\\d{2})/.";
        }

        if ($this->container['period_expiration_date'] === null) {
            $invalidProperties[] = "'period_expiration_date' can't be null";
        }
        if (!preg_match("/(\\d{4}-\\d{2}-\\d{2} \\d{2}:\\d{2}:\\d{2})/", $this->container['period_expiration_date'])) {
            $invalidProperties[] = "invalid value for 'period_expiration_date', must be conform to the pattern /(\\d{4}-\\d{2}-\\d{2} \\d{2}:\\d{2}:\\d{2})/.";
        }

        if ($this->container['paid_credits'] === null) {
            $invalidProperties[] = "'paid_credits' can't be null";
        }
        if (($this->container['paid_credits'] < 0)) {
            $invalidProperties[] = "invalid value for 'paid_credits', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['remaining_free_credit']) && ($this->container['remaining_free_credit'] < 0)) {
            $invalidProperties[] = "invalid value for 'remaining_free_credit', must be bigger than or equal to 0.";
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
     * Gets currency
     *
     * @return \API_TurboSMTP_Invoker\API_TurboSMTP_Model\Currency
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \API_TurboSMTP_Invoker\API_TurboSMTP_Model\Currency $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets free_credits
     *
     * @return int
     */
    public function getFreeCredits()
    {
        return $this->container['free_credits'];
    }

    /**
     * Sets free_credits
     *
     * @param int $free_credits Ammount of allocated free credits.
     *
     * @return self
     */
    public function setFreeCredits($free_credits)
    {
        if (is_null($free_credits)) {
            throw new \InvalidArgumentException('non-nullable free_credits cannot be null');
        }

        if (($free_credits < 0)) {
            throw new \InvalidArgumentException('invalid value for $free_credits when calling EmailValidatorSubscription., must be bigger than or equal to 0.');
        }

        $this->container['free_credits'] = $free_credits;

        return $this;
    }

    /**
     * Gets free_credits_used
     *
     * @return int
     */
    public function getFreeCreditsUsed()
    {
        return $this->container['free_credits_used'];
    }

    /**
     * Sets free_credits_used
     *
     * @param int $free_credits_used Ammount of used free credits.
     *
     * @return self
     */
    public function setFreeCreditsUsed($free_credits_used)
    {
        if (is_null($free_credits_used)) {
            throw new \InvalidArgumentException('non-nullable free_credits_used cannot be null');
        }

        if (($free_credits_used < 0)) {
            throw new \InvalidArgumentException('invalid value for $free_credits_used when calling EmailValidatorSubscription., must be bigger than or equal to 0.');
        }

        $this->container['free_credits_used'] = $free_credits_used;

        return $this;
    }

    /**
     * Gets last_used_period
     *
     * @return string
     */
    public function getLastUsedPeriod()
    {
        return $this->container['last_used_period'];
    }

    /**
     * Sets last_used_period
     *
     * @param string $last_used_period Last time credit was used.
     *
     * @return self
     */
    public function setLastUsedPeriod($last_used_period)
    {
        if (is_null($last_used_period)) {
            array_push($this->openAPINullablesSetToNull, 'last_used_period');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_used_period', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($last_used_period) && (!preg_match("/(\\d{4}-\\d{2}-\\d{2} \\d{2}:\\d{2}:\\d{2})/", ObjectSerializer::toString($last_used_period)))) {
            throw new \InvalidArgumentException("invalid value for \$last_used_period when calling EmailValidatorSubscription., must conform to the pattern /(\\d{4}-\\d{2}-\\d{2} \\d{2}:\\d{2}:\\d{2})/.");
        }

        $this->container['last_used_period'] = $last_used_period;

        return $this;
    }

    /**
     * Gets latest_period_start_date
     *
     * @return string
     */
    public function getLatestPeriodStartDate()
    {
        return $this->container['latest_period_start_date'];
    }

    /**
     * Sets latest_period_start_date
     *
     * @param string $latest_period_start_date Free credit period start date (renewed each cycle).
     *
     * @return self
     */
    public function setLatestPeriodStartDate($latest_period_start_date)
    {
        if (is_null($latest_period_start_date)) {
            array_push($this->openAPINullablesSetToNull, 'latest_period_start_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('latest_period_start_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($latest_period_start_date) && (!preg_match("/(\\d{4}-\\d{2}-\\d{2} \\d{2}:\\d{2}:\\d{2})/", ObjectSerializer::toString($latest_period_start_date)))) {
            throw new \InvalidArgumentException("invalid value for \$latest_period_start_date when calling EmailValidatorSubscription., must conform to the pattern /(\\d{4}-\\d{2}-\\d{2} \\d{2}:\\d{2}:\\d{2})/.");
        }

        $this->container['latest_period_start_date'] = $latest_period_start_date;

        return $this;
    }

    /**
     * Gets period_expiration_date
     *
     * @return string
     */
    public function getPeriodExpirationDate()
    {
        return $this->container['period_expiration_date'];
    }

    /**
     * Sets period_expiration_date
     *
     * @param string $period_expiration_date Free credit period expiration date.
     *
     * @return self
     */
    public function setPeriodExpirationDate($period_expiration_date)
    {
        if (is_null($period_expiration_date)) {
            array_push($this->openAPINullablesSetToNull, 'period_expiration_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('period_expiration_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($period_expiration_date) && (!preg_match("/(\\d{4}-\\d{2}-\\d{2} \\d{2}:\\d{2}:\\d{2})/", ObjectSerializer::toString($period_expiration_date)))) {
            throw new \InvalidArgumentException("invalid value for \$period_expiration_date when calling EmailValidatorSubscription., must conform to the pattern /(\\d{4}-\\d{2}-\\d{2} \\d{2}:\\d{2}:\\d{2})/.");
        }

        $this->container['period_expiration_date'] = $period_expiration_date;

        return $this;
    }

    /**
     * Gets paid_credits
     *
     * @return float
     */
    public function getPaidCredits()
    {
        return $this->container['paid_credits'];
    }

    /**
     * Sets paid_credits
     *
     * @param float $paid_credits Amount of remaining money specified in the 'currency' field value currency.
     *
     * @return self
     */
    public function setPaidCredits($paid_credits)
    {
        if (is_null($paid_credits)) {
            throw new \InvalidArgumentException('non-nullable paid_credits cannot be null');
        }

        if (($paid_credits < 0)) {
            throw new \InvalidArgumentException('invalid value for $paid_credits when calling EmailValidatorSubscription., must be bigger than or equal to 0.');
        }

        $this->container['paid_credits'] = $paid_credits;

        return $this;
    }

    /**
     * Gets remaining_free_credit
     *
     * @return int|null
     */
    public function getRemainingFreeCredit()
    {
        return $this->container['remaining_free_credit'];
    }

    /**
     * Sets remaining_free_credit
     *
     * @param int|null $remaining_free_credit Ammount of remaining free credits.
     *
     * @return self
     */
    public function setRemainingFreeCredit($remaining_free_credit)
    {
        if (is_null($remaining_free_credit)) {
            throw new \InvalidArgumentException('non-nullable remaining_free_credit cannot be null');
        }

        if (($remaining_free_credit < 0)) {
            throw new \InvalidArgumentException('invalid value for $remaining_free_credit when calling EmailValidatorSubscription., must be bigger than or equal to 0.');
        }

        $this->container['remaining_free_credit'] = $remaining_free_credit;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
}


