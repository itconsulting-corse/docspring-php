<?php
/**
 * Submission
 *
 * PHP version 5
 *
 * @category Class
 * @package  DocSpring
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * API v1
 *
 * DocSpring is a service that helps you fill out and sign PDF templates.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace DocSpring\Model;

use \ArrayAccess;
use \DocSpring\ObjectSerializer;

/**
 * Submission Class Doc Comment
 *
 * @category Class
 * @package  DocSpring
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Submission implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'submission';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'template_id' => 'string',
        'test' => 'bool',
        'editable' => 'bool',
        'expired' => 'bool',
        'expires_at' => 'string',
        'processed_at' => 'string',
        'state' => 'string',
        'data' => 'object',
        'metadata' => 'object',
        'truncated_text' => 'object',
        'pdf_hash' => 'string',
        'download_url' => 'string',
        'permanent_download_url' => 'string',
        'batch_id' => 'string',
        'data_requests' => '\DocSpring\Model\SubmissionDataRequest[]',
        'actions' => '\DocSpring\Model\SubmissionAction[]',
        'source' => 'string',
        'referrer' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'template_id' => null,
        'test' => null,
        'editable' => null,
        'expired' => null,
        'expires_at' => null,
        'processed_at' => null,
        'state' => null,
        'data' => null,
        'metadata' => null,
        'truncated_text' => null,
        'pdf_hash' => null,
        'download_url' => null,
        'permanent_download_url' => null,
        'batch_id' => null,
        'data_requests' => null,
        'actions' => null,
        'source' => null,
        'referrer' => null
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
        'id' => 'id',
        'template_id' => 'template_id',
        'test' => 'test',
        'editable' => 'editable',
        'expired' => 'expired',
        'expires_at' => 'expires_at',
        'processed_at' => 'processed_at',
        'state' => 'state',
        'data' => 'data',
        'metadata' => 'metadata',
        'truncated_text' => 'truncated_text',
        'pdf_hash' => 'pdf_hash',
        'download_url' => 'download_url',
        'permanent_download_url' => 'permanent_download_url',
        'batch_id' => 'batch_id',
        'data_requests' => 'data_requests',
        'actions' => 'actions',
        'source' => 'source',
        'referrer' => 'referrer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'template_id' => 'setTemplateId',
        'test' => 'setTest',
        'editable' => 'setEditable',
        'expired' => 'setExpired',
        'expires_at' => 'setExpiresAt',
        'processed_at' => 'setProcessedAt',
        'state' => 'setState',
        'data' => 'setData',
        'metadata' => 'setMetadata',
        'truncated_text' => 'setTruncatedText',
        'pdf_hash' => 'setPdfHash',
        'download_url' => 'setDownloadUrl',
        'permanent_download_url' => 'setPermanentDownloadUrl',
        'batch_id' => 'setBatchId',
        'data_requests' => 'setDataRequests',
        'actions' => 'setActions',
        'source' => 'setSource',
        'referrer' => 'setReferrer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'template_id' => 'getTemplateId',
        'test' => 'getTest',
        'editable' => 'getEditable',
        'expired' => 'getExpired',
        'expires_at' => 'getExpiresAt',
        'processed_at' => 'getProcessedAt',
        'state' => 'getState',
        'data' => 'getData',
        'metadata' => 'getMetadata',
        'truncated_text' => 'getTruncatedText',
        'pdf_hash' => 'getPdfHash',
        'download_url' => 'getDownloadUrl',
        'permanent_download_url' => 'getPermanentDownloadUrl',
        'batch_id' => 'getBatchId',
        'data_requests' => 'getDataRequests',
        'actions' => 'getActions',
        'source' => 'getSource',
        'referrer' => 'getReferrer'
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

    const STATE_PENDING = 'pending';
    const STATE_PROCESSED = 'processed';
    const STATE_INVALID_DATA = 'invalid_data';
    const STATE_ERROR = 'error';
    const STATE_IMAGE_DOWNLOAD_FAILED = 'image_download_failed';
    const STATE_IMAGE_PROCESSING_FAILED = 'image_processing_failed';
    const STATE_WAITING_FOR_DATA_REQUESTS = 'waiting_for_data_requests';
    const STATE_SYNTAX_ERROR = 'syntax_error';
    const STATE_ACCOUNT_SUSPENDED = 'account_suspended';
    const STATE_LICENSE_REVOKED = 'license_revoked';
    const STATE_ACCIDENTAL = 'accidental';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_PENDING,
            self::STATE_PROCESSED,
            self::STATE_INVALID_DATA,
            self::STATE_ERROR,
            self::STATE_IMAGE_DOWNLOAD_FAILED,
            self::STATE_IMAGE_PROCESSING_FAILED,
            self::STATE_WAITING_FOR_DATA_REQUESTS,
            self::STATE_SYNTAX_ERROR,
            self::STATE_ACCOUNT_SUSPENDED,
            self::STATE_LICENSE_REVOKED,
            self::STATE_ACCIDENTAL,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['template_id'] = isset($data['template_id']) ? $data['template_id'] : null;
        $this->container['test'] = isset($data['test']) ? $data['test'] : null;
        $this->container['editable'] = isset($data['editable']) ? $data['editable'] : null;
        $this->container['expired'] = isset($data['expired']) ? $data['expired'] : null;
        $this->container['expires_at'] = isset($data['expires_at']) ? $data['expires_at'] : null;
        $this->container['processed_at'] = isset($data['processed_at']) ? $data['processed_at'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['truncated_text'] = isset($data['truncated_text']) ? $data['truncated_text'] : null;
        $this->container['pdf_hash'] = isset($data['pdf_hash']) ? $data['pdf_hash'] : null;
        $this->container['download_url'] = isset($data['download_url']) ? $data['download_url'] : null;
        $this->container['permanent_download_url'] = isset($data['permanent_download_url']) ? $data['permanent_download_url'] : null;
        $this->container['batch_id'] = isset($data['batch_id']) ? $data['batch_id'] : null;
        $this->container['data_requests'] = isset($data['data_requests']) ? $data['data_requests'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['referrer'] = isset($data['referrer']) ? $data['referrer'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['test'] === null) {
            $invalidProperties[] = "'test' can't be null";
        }
        if ($this->container['expired'] === null) {
            $invalidProperties[] = "'expired' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets template_id
     *
     * @return string|null
     */
    public function getTemplateId()
    {
        return $this->container['template_id'];
    }

    /**
     * Sets template_id
     *
     * @param string|null $template_id template_id
     *
     * @return $this
     */
    public function setTemplateId($template_id)
    {
        $this->container['template_id'] = $template_id;

        return $this;
    }

    /**
     * Gets test
     *
     * @return bool
     */
    public function getTest()
    {
        return $this->container['test'];
    }

    /**
     * Sets test
     *
     * @param bool $test test
     *
     * @return $this
     */
    public function setTest($test)
    {
        $this->container['test'] = $test;

        return $this;
    }

    /**
     * Gets editable
     *
     * @return bool|null
     */
    public function getEditable()
    {
        return $this->container['editable'];
    }

    /**
     * Sets editable
     *
     * @param bool|null $editable editable
     *
     * @return $this
     */
    public function setEditable($editable)
    {
        $this->container['editable'] = $editable;

        return $this;
    }

    /**
     * Gets expired
     *
     * @return bool
     */
    public function getExpired()
    {
        return $this->container['expired'];
    }

    /**
     * Sets expired
     *
     * @param bool $expired expired
     *
     * @return $this
     */
    public function setExpired($expired)
    {
        $this->container['expired'] = $expired;

        return $this;
    }

    /**
     * Gets expires_at
     *
     * @return string|null
     */
    public function getExpiresAt()
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     *
     * @param string|null $expires_at expires_at
     *
     * @return $this
     */
    public function setExpiresAt($expires_at)
    {
        $this->container['expires_at'] = $expires_at;

        return $this;
    }

    /**
     * Gets processed_at
     *
     * @return string|null
     */
    public function getProcessedAt()
    {
        return $this->container['processed_at'];
    }

    /**
     * Sets processed_at
     *
     * @param string|null $processed_at processed_at
     *
     * @return $this
     */
    public function setProcessedAt($processed_at)
    {
        $this->container['processed_at'] = $processed_at;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets data
     *
     * @return object|null
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param object|null $data data
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return object|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param object|null $metadata metadata
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets truncated_text
     *
     * @return object|null
     */
    public function getTruncatedText()
    {
        return $this->container['truncated_text'];
    }

    /**
     * Sets truncated_text
     *
     * @param object|null $truncated_text truncated_text
     *
     * @return $this
     */
    public function setTruncatedText($truncated_text)
    {
        $this->container['truncated_text'] = $truncated_text;

        return $this;
    }

    /**
     * Gets pdf_hash
     *
     * @return string|null
     */
    public function getPdfHash()
    {
        return $this->container['pdf_hash'];
    }

    /**
     * Sets pdf_hash
     *
     * @param string|null $pdf_hash pdf_hash
     *
     * @return $this
     */
    public function setPdfHash($pdf_hash)
    {
        $this->container['pdf_hash'] = $pdf_hash;

        return $this;
    }

    /**
     * Gets download_url
     *
     * @return string|null
     */
    public function getDownloadUrl()
    {
        return $this->container['download_url'];
    }

    /**
     * Sets download_url
     *
     * @param string|null $download_url download_url
     *
     * @return $this
     */
    public function setDownloadUrl($download_url)
    {
        $this->container['download_url'] = $download_url;

        return $this;
    }

    /**
     * Gets permanent_download_url
     *
     * @return string|null
     */
    public function getPermanentDownloadUrl()
    {
        return $this->container['permanent_download_url'];
    }

    /**
     * Sets permanent_download_url
     *
     * @param string|null $permanent_download_url permanent_download_url
     *
     * @return $this
     */
    public function setPermanentDownloadUrl($permanent_download_url)
    {
        $this->container['permanent_download_url'] = $permanent_download_url;

        return $this;
    }

    /**
     * Gets batch_id
     *
     * @return string|null
     */
    public function getBatchId()
    {
        return $this->container['batch_id'];
    }

    /**
     * Sets batch_id
     *
     * @param string|null $batch_id batch_id
     *
     * @return $this
     */
    public function setBatchId($batch_id)
    {
        $this->container['batch_id'] = $batch_id;

        return $this;
    }

    /**
     * Gets data_requests
     *
     * @return \DocSpring\Model\SubmissionDataRequest[]|null
     */
    public function getDataRequests()
    {
        return $this->container['data_requests'];
    }

    /**
     * Sets data_requests
     *
     * @param \DocSpring\Model\SubmissionDataRequest[]|null $data_requests data_requests
     *
     * @return $this
     */
    public function setDataRequests($data_requests)
    {
        $this->container['data_requests'] = $data_requests;

        return $this;
    }

    /**
     * Gets actions
     *
     * @return \DocSpring\Model\SubmissionAction[]|null
     */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
     * Sets actions
     *
     * @param \DocSpring\Model\SubmissionAction[]|null $actions actions
     *
     * @return $this
     */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets referrer
     *
     * @return string|null
     */
    public function getReferrer()
    {
        return $this->container['referrer'];
    }

    /**
     * Sets referrer
     *
     * @param string|null $referrer referrer
     *
     * @return $this
     */
    public function setReferrer($referrer)
    {
        $this->container['referrer'] = $referrer;

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
     * @return mixed
     */
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
}


