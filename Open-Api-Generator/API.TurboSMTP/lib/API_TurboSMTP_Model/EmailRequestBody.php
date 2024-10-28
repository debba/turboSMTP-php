<?php
/**
 * EmailRequestBody
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
 * EmailRequestBody Class Doc Comment
 *
 * @category Class
 * @package  API_TurboSMTP_Invoker
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EmailRequestBody implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmailRequestBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'authuser' => 'string',
        'authpass' => 'string',
        'from' => 'string',
        'to' => 'string',
        'subject' => 'string',
        'cc' => 'string',
        'bcc' => 'string',
        'content' => 'string',
        'html_content' => 'string',
        'custom_headers' => 'array<string,string>',
        'reference_id' => 'string',
        'x_campaign_id' => 'string',
        'mime_raw' => 'string',
        'attachments' => '\API_TurboSMTP_Invoker\API_TurboSMTP_Model\Attachment[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'authuser' => 'email',
        'authpass' => null,
        'from' => 'email',
        'to' => null,
        'subject' => null,
        'cc' => null,
        'bcc' => null,
        'content' => null,
        'html_content' => null,
        'custom_headers' => null,
        'reference_id' => null,
        'x_campaign_id' => null,
        'mime_raw' => null,
        'attachments' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'authuser' => true,
        'authpass' => true,
        'from' => false,
        'to' => false,
        'subject' => true,
        'cc' => true,
        'bcc' => true,
        'content' => true,
        'html_content' => true,
        'custom_headers' => true,
        'reference_id' => true,
        'x_campaign_id' => true,
        'mime_raw' => true,
        'attachments' => false
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
        'authuser' => 'authuser',
        'authpass' => 'authpass',
        'from' => 'from',
        'to' => 'to',
        'subject' => 'subject',
        'cc' => 'cc',
        'bcc' => 'bcc',
        'content' => 'content',
        'html_content' => 'html_content',
        'custom_headers' => 'custom_headers',
        'reference_id' => 'reference_id',
        'x_campaign_id' => 'X-campaign-ID',
        'mime_raw' => 'mime_raw',
        'attachments' => 'attachments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authuser' => 'setAuthuser',
        'authpass' => 'setAuthpass',
        'from' => 'setFrom',
        'to' => 'setTo',
        'subject' => 'setSubject',
        'cc' => 'setCc',
        'bcc' => 'setBcc',
        'content' => 'setContent',
        'html_content' => 'setHtmlContent',
        'custom_headers' => 'setCustomHeaders',
        'reference_id' => 'setReferenceId',
        'x_campaign_id' => 'setXCampaignId',
        'mime_raw' => 'setMimeRaw',
        'attachments' => 'setAttachments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authuser' => 'getAuthuser',
        'authpass' => 'getAuthpass',
        'from' => 'getFrom',
        'to' => 'getTo',
        'subject' => 'getSubject',
        'cc' => 'getCc',
        'bcc' => 'getBcc',
        'content' => 'getContent',
        'html_content' => 'getHtmlContent',
        'custom_headers' => 'getCustomHeaders',
        'reference_id' => 'getReferenceId',
        'x_campaign_id' => 'getXCampaignId',
        'mime_raw' => 'getMimeRaw',
        'attachments' => 'getAttachments'
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
        $this->setIfExists('authuser', $data ?? [], null);
        $this->setIfExists('authpass', $data ?? [], null);
        $this->setIfExists('from', $data ?? [], null);
        $this->setIfExists('to', $data ?? [], null);
        $this->setIfExists('subject', $data ?? [], null);
        $this->setIfExists('cc', $data ?? [], null);
        $this->setIfExists('bcc', $data ?? [], null);
        $this->setIfExists('content', $data ?? [], null);
        $this->setIfExists('html_content', $data ?? [], null);
        $this->setIfExists('custom_headers', $data ?? [], null);
        $this->setIfExists('reference_id', $data ?? [], null);
        $this->setIfExists('x_campaign_id', $data ?? [], null);
        $this->setIfExists('mime_raw', $data ?? [], null);
        $this->setIfExists('attachments', $data ?? [], null);
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
     * Gets authuser
     *
     * @return string|null
     */
    public function getAuthuser()
    {
        return $this->container['authuser'];
    }

    /**
     * Sets authuser
     *
     * @param string|null $authuser email of turboSMTP account
     *
     * @return self
     */
    public function setAuthuser($authuser)
    {
        if (is_null($authuser)) {
            array_push($this->openAPINullablesSetToNull, 'authuser');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('authuser', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['authuser'] = $authuser;

        return $this;
    }

    /**
     * Gets authpass
     *
     * @return string|null
     */
    public function getAuthpass()
    {
        return $this->container['authpass'];
    }

    /**
     * Sets authpass
     *
     * @param string|null $authpass password of turboSMTP account
     *
     * @return self
     */
    public function setAuthpass($authpass)
    {
        if (is_null($authpass)) {
            array_push($this->openAPINullablesSetToNull, 'authpass');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('authpass', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['authpass'] = $authpass;

        return $this;
    }

    /**
     * Gets from
     *
     * @return string|null
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string|null $from from mail address
     *
     * @return self
     */
    public function setFrom($from)
    {
        if (is_null($from)) {
            throw new \InvalidArgumentException('non-nullable from cannot be null');
        }
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets to
     *
     * @return string|null
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param string|null $to comma-separated recipients emails list
     *
     * @return self
     */
    public function setTo($to)
    {
        if (is_null($to)) {
            throw new \InvalidArgumentException('non-nullable to cannot be null');
        }
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string|null $subject email subject
     *
     * @return self
     */
    public function setSubject($subject)
    {
        if (is_null($subject)) {
            array_push($this->openAPINullablesSetToNull, 'subject');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('subject', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets cc
     *
     * @return string|null
     */
    public function getCc()
    {
        return $this->container['cc'];
    }

    /**
     * Sets cc
     *
     * @param string|null $cc comma-separated copy emails list
     *
     * @return self
     */
    public function setCc($cc)
    {
        if (is_null($cc)) {
            array_push($this->openAPINullablesSetToNull, 'cc');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cc', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cc'] = $cc;

        return $this;
    }

    /**
     * Gets bcc
     *
     * @return string|null
     */
    public function getBcc()
    {
        return $this->container['bcc'];
    }

    /**
     * Sets bcc
     *
     * @param string|null $bcc comma-separated hidden copy emails list
     *
     * @return self
     */
    public function setBcc($bcc)
    {
        if (is_null($bcc)) {
            array_push($this->openAPINullablesSetToNull, 'bcc');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bcc', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['bcc'] = $bcc;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string|null $content text content of the email
     *
     * @return self
     */
    public function setContent($content)
    {
        if (is_null($content)) {
            array_push($this->openAPINullablesSetToNull, 'content');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('content', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets html_content
     *
     * @return string|null
     */
    public function getHtmlContent()
    {
        return $this->container['html_content'];
    }

    /**
     * Sets html_content
     *
     * @param string|null $html_content html content of the email
     *
     * @return self
     */
    public function setHtmlContent($html_content)
    {
        if (is_null($html_content)) {
            array_push($this->openAPINullablesSetToNull, 'html_content');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('html_content', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['html_content'] = $html_content;

        return $this;
    }

    /**
     * Gets custom_headers
     *
     * @return array<string,string>|null
     */
    public function getCustomHeaders()
    {
        return $this->container['custom_headers'];
    }

    /**
     * Sets custom_headers
     *
     * @param array<string,string>|null $custom_headers email additional headers, use any additional header like standard ones List-Unsubscribe (to allow users to easily unsubscribe), X-Entity-Ref-ID (to handle how gmail and other clients group threads), and your own ones.
     *
     * @return self
     */
    public function setCustomHeaders($custom_headers)
    {
        if (is_null($custom_headers)) {
            array_push($this->openAPINullablesSetToNull, 'custom_headers');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('custom_headers', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['custom_headers'] = $custom_headers;

        return $this;
    }

    /**
     * Gets reference_id
     *
     * @return string|null
     */
    public function getReferenceId()
    {
        return $this->container['reference_id'];
    }

    /**
     * Sets reference_id
     *
     * @param string|null $reference_id custom argument included within an email to be added to the Event Webhook response.
     *
     * @return self
     */
    public function setReferenceId($reference_id)
    {
        if (is_null($reference_id)) {
            array_push($this->openAPINullablesSetToNull, 'reference_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('reference_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['reference_id'] = $reference_id;

        return $this;
    }

    /**
     * Gets x_campaign_id
     *
     * @return string|null
     */
    public function getXCampaignId()
    {
        return $this->container['x_campaign_id'];
    }

    /**
     * Sets x_campaign_id
     *
     * @param string|null $x_campaign_id custom argument included within an email identify the campaign the email belongs to.
     *
     * @return self
     */
    public function setXCampaignId($x_campaign_id)
    {
        if (is_null($x_campaign_id)) {
            array_push($this->openAPINullablesSetToNull, 'x_campaign_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('x_campaign_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['x_campaign_id'] = $x_campaign_id;

        return $this;
    }

    /**
     * Gets mime_raw
     *
     * @return string|null
     */
    public function getMimeRaw()
    {
        return $this->container['mime_raw'];
    }

    /**
     * Sets mime_raw
     *
     * @param string|null $mime_raw mime message which replaces content and hmtl content
     *
     * @return self
     */
    public function setMimeRaw($mime_raw)
    {
        if (is_null($mime_raw)) {
            array_push($this->openAPINullablesSetToNull, 'mime_raw');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mime_raw', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['mime_raw'] = $mime_raw;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \API_TurboSMTP_Invoker\API_TurboSMTP_Model\Attachment[]|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \API_TurboSMTP_Invoker\API_TurboSMTP_Model\Attachment[]|null $attachments array of attachment objects
     *
     * @return self
     */
    public function setAttachments($attachments)
    {
        if (is_null($attachments)) {
            throw new \InvalidArgumentException('non-nullable attachments cannot be null');
        }
        $this->container['attachments'] = $attachments;

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


