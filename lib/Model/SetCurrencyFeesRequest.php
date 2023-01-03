<?php
/**
 * SetCurrencyFeesRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  MetaFab
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * MetaFab API
 *
 * Complete MetaFab API references and guides can be found at: https://trymetafab.com
 *
 * The version of the OpenAPI document: 1.4.1
 * Contact: metafabproject@gmail.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MetaFab\Model;

use \ArrayAccess;
use \MetaFab\ObjectSerializer;

/**
 * SetCurrencyFeesRequest Class Doc Comment
 *
 * @category Class
 * @package  MetaFab
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SetCurrencyFeesRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'setCurrencyFees_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'recipient_address' => 'string',
        'basis_points' => 'float',
        'fixed_amount' => 'float',
        'cap_amount' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'recipient_address' => null,
        'basis_points' => null,
        'fixed_amount' => null,
        'cap_amount' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'recipient_address' => false,
		'basis_points' => false,
		'fixed_amount' => false,
		'cap_amount' => false
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
        'recipient_address' => 'recipientAddress',
        'basis_points' => 'basisPoints',
        'fixed_amount' => 'fixedAmount',
        'cap_amount' => 'capAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'recipient_address' => 'setRecipientAddress',
        'basis_points' => 'setBasisPoints',
        'fixed_amount' => 'setFixedAmount',
        'cap_amount' => 'setCapAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'recipient_address' => 'getRecipientAddress',
        'basis_points' => 'getBasisPoints',
        'fixed_amount' => 'getFixedAmount',
        'cap_amount' => 'getCapAmount'
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
        $this->setIfExists('recipient_address', $data ?? [], null);
        $this->setIfExists('basis_points', $data ?? [], null);
        $this->setIfExists('fixed_amount', $data ?? [], null);
        $this->setIfExists('cap_amount', $data ?? [], null);
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

        if ($this->container['recipient_address'] === null) {
            $invalidProperties[] = "'recipient_address' can't be null";
        }
        if ($this->container['basis_points'] === null) {
            $invalidProperties[] = "'basis_points' can't be null";
        }
        if ($this->container['fixed_amount'] === null) {
            $invalidProperties[] = "'fixed_amount' can't be null";
        }
        if ($this->container['cap_amount'] === null) {
            $invalidProperties[] = "'cap_amount' can't be null";
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
     * Gets recipient_address
     *
     * @return string
     */
    public function getRecipientAddress()
    {
        return $this->container['recipient_address'];
    }

    /**
     * Sets recipient_address
     *
     * @param string $recipient_address The recipient address of currency transaction fees.
     *
     * @return self
     */
    public function setRecipientAddress($recipient_address)
    {

        if (is_null($recipient_address)) {
            throw new \InvalidArgumentException('non-nullable recipient_address cannot be null');
        }

        $this->container['recipient_address'] = $recipient_address;

        return $this;
    }

    /**
     * Gets basis_points
     *
     * @return float
     */
    public function getBasisPoints()
    {
        return $this->container['basis_points'];
    }

    /**
     * Sets basis_points
     *
     * @param float $basis_points A percentage fee for every transaction represented in basis points. To set a 1.5% fee, you would use a value of 150. This value can be 0, denoting no percentage fees.
     *
     * @return self
     */
    public function setBasisPoints($basis_points)
    {

        if (is_null($basis_points)) {
            throw new \InvalidArgumentException('non-nullable basis_points cannot be null');
        }

        $this->container['basis_points'] = $basis_points;

        return $this;
    }

    /**
     * Gets fixed_amount
     *
     * @return float
     */
    public function getFixedAmount()
    {
        return $this->container['fixed_amount'];
    }

    /**
     * Sets fixed_amount
     *
     * @param float $fixed_amount A fixed fee for every transaction. A value of 0.5 would mean 0.5 of the currency of a transaction is always taken as a fee. This value can be 0, denoting no fixed fees.
     *
     * @return self
     */
    public function setFixedAmount($fixed_amount)
    {

        if (is_null($fixed_amount)) {
            throw new \InvalidArgumentException('non-nullable fixed_amount cannot be null');
        }

        $this->container['fixed_amount'] = $fixed_amount;

        return $this;
    }

    /**
     * Gets cap_amount
     *
     * @return float
     */
    public function getCapAmount()
    {
        return $this->container['cap_amount'];
    }

    /**
     * Sets cap_amount
     *
     * @param float $cap_amount The maximum fee amount for any single transaction. The total fee of a transaction is calculated as the sum of the basis points (percentage) fee, and fixed fee. If a calculated fee is greater than this maximum fee value, the maximum fee will be used instead.
     *
     * @return self
     */
    public function setCapAmount($cap_amount)
    {

        if (is_null($cap_amount)) {
            throw new \InvalidArgumentException('non-nullable cap_amount cannot be null');
        }

        $this->container['cap_amount'] = $cap_amount;

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


