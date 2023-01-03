<?php
/**
 * SetLootboxManagerLootboxRequest
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
 * SetLootboxManagerLootboxRequest Class Doc Comment
 *
 * @category Class
 * @package  MetaFab
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SetLootboxManagerLootboxRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'setLootboxManagerLootbox_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'input_collection_address' => 'string',
        'input_collection_id' => 'string',
        'input_collection_item_ids' => 'int[]',
        'input_collection_item_amounts' => 'int[]',
        'output_collection_address' => 'string',
        'output_collection_id' => 'string',
        'output_collection_item_ids' => 'int[]',
        'output_collection_item_amounts' => 'int[]',
        'output_collection_item_weights' => 'int[]',
        'output_total_items' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'input_collection_address' => null,
        'input_collection_id' => null,
        'input_collection_item_ids' => null,
        'input_collection_item_amounts' => null,
        'output_collection_address' => null,
        'output_collection_id' => null,
        'output_collection_item_ids' => null,
        'output_collection_item_amounts' => null,
        'output_collection_item_weights' => null,
        'output_total_items' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'input_collection_address' => false,
		'input_collection_id' => false,
		'input_collection_item_ids' => false,
		'input_collection_item_amounts' => false,
		'output_collection_address' => false,
		'output_collection_id' => false,
		'output_collection_item_ids' => false,
		'output_collection_item_amounts' => false,
		'output_collection_item_weights' => false,
		'output_total_items' => false
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
        'id' => 'id',
        'input_collection_address' => 'inputCollectionAddress',
        'input_collection_id' => 'inputCollectionId',
        'input_collection_item_ids' => 'inputCollectionItemIds',
        'input_collection_item_amounts' => 'inputCollectionItemAmounts',
        'output_collection_address' => 'outputCollectionAddress',
        'output_collection_id' => 'outputCollectionId',
        'output_collection_item_ids' => 'outputCollectionItemIds',
        'output_collection_item_amounts' => 'outputCollectionItemAmounts',
        'output_collection_item_weights' => 'outputCollectionItemWeights',
        'output_total_items' => 'outputTotalItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'input_collection_address' => 'setInputCollectionAddress',
        'input_collection_id' => 'setInputCollectionId',
        'input_collection_item_ids' => 'setInputCollectionItemIds',
        'input_collection_item_amounts' => 'setInputCollectionItemAmounts',
        'output_collection_address' => 'setOutputCollectionAddress',
        'output_collection_id' => 'setOutputCollectionId',
        'output_collection_item_ids' => 'setOutputCollectionItemIds',
        'output_collection_item_amounts' => 'setOutputCollectionItemAmounts',
        'output_collection_item_weights' => 'setOutputCollectionItemWeights',
        'output_total_items' => 'setOutputTotalItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'input_collection_address' => 'getInputCollectionAddress',
        'input_collection_id' => 'getInputCollectionId',
        'input_collection_item_ids' => 'getInputCollectionItemIds',
        'input_collection_item_amounts' => 'getInputCollectionItemAmounts',
        'output_collection_address' => 'getOutputCollectionAddress',
        'output_collection_id' => 'getOutputCollectionId',
        'output_collection_item_ids' => 'getOutputCollectionItemIds',
        'output_collection_item_amounts' => 'getOutputCollectionItemAmounts',
        'output_collection_item_weights' => 'getOutputCollectionItemWeights',
        'output_total_items' => 'getOutputTotalItems'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('input_collection_address', $data ?? [], null);
        $this->setIfExists('input_collection_id', $data ?? [], null);
        $this->setIfExists('input_collection_item_ids', $data ?? [], null);
        $this->setIfExists('input_collection_item_amounts', $data ?? [], null);
        $this->setIfExists('output_collection_address', $data ?? [], null);
        $this->setIfExists('output_collection_id', $data ?? [], null);
        $this->setIfExists('output_collection_item_ids', $data ?? [], null);
        $this->setIfExists('output_collection_item_amounts', $data ?? [], null);
        $this->setIfExists('output_collection_item_weights', $data ?? [], null);
        $this->setIfExists('output_total_items', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id A unique lootbox id to use for this lootbox for the lootbox manager. If an existing lootbox id is used, the current lootbox will be updated but the existing number of opens will be kept. If you want to reset the number of opens for an existing lootbox, first remove it using the remove lootbox endpoint, then set it.
     *
     * @return self
     */
    public function setId($id)
    {

        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets input_collection_address
     *
     * @return string|null
     */
    public function getInputCollectionAddress()
    {
        return $this->container['input_collection_address'];
    }

    /**
     * Sets input_collection_address
     *
     * @param string|null $input_collection_address A valid EVM based ERC1155 or MetaFab game items contract address that represents the collection for input items required by this lootbox. `inputCollectionAddress` or `inputCollectionId` can optionally be provided.
     *
     * @return self
     */
    public function setInputCollectionAddress($input_collection_address)
    {

        if (is_null($input_collection_address)) {
            throw new \InvalidArgumentException('non-nullable input_collection_address cannot be null');
        }

        $this->container['input_collection_address'] = $input_collection_address;

        return $this;
    }

    /**
     * Gets input_collection_id
     *
     * @return string|null
     */
    public function getInputCollectionId()
    {
        return $this->container['input_collection_id'];
    }

    /**
     * Sets input_collection_id
     *
     * @param string|null $input_collection_id A valid MetaFab collection id that represents the collection for input items required by this lootbox. `inputCollectionAddress` or `inputCollectionId` can optionally be provided.
     *
     * @return self
     */
    public function setInputCollectionId($input_collection_id)
    {

        if (is_null($input_collection_id)) {
            throw new \InvalidArgumentException('non-nullable input_collection_id cannot be null');
        }

        $this->container['input_collection_id'] = $input_collection_id;

        return $this;
    }

    /**
     * Gets input_collection_item_ids
     *
     * @return int[]|null
     */
    public function getInputCollectionItemIds()
    {
        return $this->container['input_collection_item_ids'];
    }

    /**
     * Sets input_collection_item_ids
     *
     * @param int[]|null $input_collection_item_ids An array of item ids from the provided input collection that are required to open this lootbox. Input items are burn upon opening a lootbox.
     *
     * @return self
     */
    public function setInputCollectionItemIds($input_collection_item_ids)
    {

        if (is_null($input_collection_item_ids)) {
            throw new \InvalidArgumentException('non-nullable input_collection_item_ids cannot be null');
        }

        $this->container['input_collection_item_ids'] = $input_collection_item_ids;

        return $this;
    }

    /**
     * Gets input_collection_item_amounts
     *
     * @return int[]|null
     */
    public function getInputCollectionItemAmounts()
    {
        return $this->container['input_collection_item_amounts'];
    }

    /**
     * Sets input_collection_item_amounts
     *
     * @param int[]|null $input_collection_item_amounts An array of amounts for each item id from the provided input collection that are required to open this lootbox. Item amounts array indices are reflective of the amount required for a given item id at the same index.
     *
     * @return self
     */
    public function setInputCollectionItemAmounts($input_collection_item_amounts)
    {

        if (is_null($input_collection_item_amounts)) {
            throw new \InvalidArgumentException('non-nullable input_collection_item_amounts cannot be null');
        }

        $this->container['input_collection_item_amounts'] = $input_collection_item_amounts;

        return $this;
    }

    /**
     * Gets output_collection_address
     *
     * @return string|null
     */
    public function getOutputCollectionAddress()
    {
        return $this->container['output_collection_address'];
    }

    /**
     * Sets output_collection_address
     *
     * @param string|null $output_collection_address A valid EVM based ERC1155 or MetaFab game items contract address that represents the collection for possible output items given by this lootbox. `outputCollectionAddress` or `outputCollectionId` can optionally be provided.
     *
     * @return self
     */
    public function setOutputCollectionAddress($output_collection_address)
    {

        if (is_null($output_collection_address)) {
            throw new \InvalidArgumentException('non-nullable output_collection_address cannot be null');
        }

        $this->container['output_collection_address'] = $output_collection_address;

        return $this;
    }

    /**
     * Gets output_collection_id
     *
     * @return string|null
     */
    public function getOutputCollectionId()
    {
        return $this->container['output_collection_id'];
    }

    /**
     * Sets output_collection_id
     *
     * @param string|null $output_collection_id A valid MetaFab collection id that represents the collection for possible output items given by this lootbox. `outputCollectionAddress` or `outputCollectionId` can optionally be provided.
     *
     * @return self
     */
    public function setOutputCollectionId($output_collection_id)
    {

        if (is_null($output_collection_id)) {
            throw new \InvalidArgumentException('non-nullable output_collection_id cannot be null');
        }

        $this->container['output_collection_id'] = $output_collection_id;

        return $this;
    }

    /**
     * Gets output_collection_item_ids
     *
     * @return int[]|null
     */
    public function getOutputCollectionItemIds()
    {
        return $this->container['output_collection_item_ids'];
    }

    /**
     * Sets output_collection_item_ids
     *
     * @param int[]|null $output_collection_item_ids An array of item ids from the provided output collection that are possibly given by this lootbox. Randomly selected output items are automatically minted if the lootbox manager contract has the `minter` role for the output collection contract. Otherwise, they are transferred from the item balance held by the lootbox manager contract.
     *
     * @return self
     */
    public function setOutputCollectionItemIds($output_collection_item_ids)
    {

        if (is_null($output_collection_item_ids)) {
            throw new \InvalidArgumentException('non-nullable output_collection_item_ids cannot be null');
        }

        $this->container['output_collection_item_ids'] = $output_collection_item_ids;

        return $this;
    }

    /**
     * Gets output_collection_item_amounts
     *
     * @return int[]|null
     */
    public function getOutputCollectionItemAmounts()
    {
        return $this->container['output_collection_item_amounts'];
    }

    /**
     * Sets output_collection_item_amounts
     *
     * @param int[]|null $output_collection_item_amounts An array of amounts for each item id that can be randomly selected from the provided output collection that are given by this lootbox. Item amounts array indices are reflective of the amount required for a given item id at the same index.
     *
     * @return self
     */
    public function setOutputCollectionItemAmounts($output_collection_item_amounts)
    {

        if (is_null($output_collection_item_amounts)) {
            throw new \InvalidArgumentException('non-nullable output_collection_item_amounts cannot be null');
        }

        $this->container['output_collection_item_amounts'] = $output_collection_item_amounts;

        return $this;
    }

    /**
     * Gets output_collection_item_weights
     *
     * @return int[]|null
     */
    public function getOutputCollectionItemWeights()
    {
        return $this->container['output_collection_item_weights'];
    }

    /**
     * Sets output_collection_item_weights
     *
     * @param int[]|null $output_collection_item_weights An array of weights for each item id that can be randomly selected from the provided output collection that are given by this lootbox. Any positive integer for an item's weight can be provided. The weight for an item relative to the sum of all possible item weights determines the probability that an item will be picked upon a lootbox being opened. Item weights array indices are reflective of the probability weight for a given item id at the same index.
     *
     * @return self
     */
    public function setOutputCollectionItemWeights($output_collection_item_weights)
    {

        if (is_null($output_collection_item_weights)) {
            throw new \InvalidArgumentException('non-nullable output_collection_item_weights cannot be null');
        }

        $this->container['output_collection_item_weights'] = $output_collection_item_weights;

        return $this;
    }

    /**
     * Gets output_total_items
     *
     * @return int|null
     */
    public function getOutputTotalItems()
    {
        return $this->container['output_total_items'];
    }

    /**
     * Sets output_total_items
     *
     * @param int|null $output_total_items The number of items randomly selected from the possible output items when this lootbox is open. If you provide a value greater than 1, it is possible for the same item to be selected more than once, giving the opener more than one of that item's output from the lootbox.
     *
     * @return self
     */
    public function setOutputTotalItems($output_total_items)
    {

        if (is_null($output_total_items)) {
            throw new \InvalidArgumentException('non-nullable output_total_items cannot be null');
        }

        $this->container['output_total_items'] = $output_total_items;

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


