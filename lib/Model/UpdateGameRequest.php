<?php
/**
 * UpdateGameRequest
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
 * The version of the OpenAPI document: 1.4.0
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
 * UpdateGameRequest Class Doc Comment
 *
 * @category Class
 * @package  MetaFab
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateGameRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'updateGame_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'email' => 'string',
        'current_password' => 'string',
        'new_password' => 'string',
        'rpcs' => 'array<string,string>',
        'redirect_uris' => 'string[]',
        'icon_image_base64' => 'string',
        'cover_image_base64' => 'string',
        'primary_color_hex' => 'string',
        'reset_published_key' => 'bool',
        'reset_secret_key' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'email' => 'email',
        'current_password' => 'password',
        'new_password' => 'password',
        'rpcs' => null,
        'redirect_uris' => null,
        'icon_image_base64' => null,
        'cover_image_base64' => null,
        'primary_color_hex' => null,
        'reset_published_key' => null,
        'reset_secret_key' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
		'email' => false,
		'current_password' => false,
		'new_password' => false,
		'rpcs' => false,
		'redirect_uris' => false,
		'icon_image_base64' => false,
		'cover_image_base64' => false,
		'primary_color_hex' => false,
		'reset_published_key' => false,
		'reset_secret_key' => false
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
        'name' => 'name',
        'email' => 'email',
        'current_password' => 'currentPassword',
        'new_password' => 'newPassword',
        'rpcs' => 'rpcs',
        'redirect_uris' => 'redirectUris',
        'icon_image_base64' => 'iconImageBase64',
        'cover_image_base64' => 'coverImageBase64',
        'primary_color_hex' => 'primaryColorHex',
        'reset_published_key' => 'resetPublishedKey',
        'reset_secret_key' => 'resetSecretKey'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'email' => 'setEmail',
        'current_password' => 'setCurrentPassword',
        'new_password' => 'setNewPassword',
        'rpcs' => 'setRpcs',
        'redirect_uris' => 'setRedirectUris',
        'icon_image_base64' => 'setIconImageBase64',
        'cover_image_base64' => 'setCoverImageBase64',
        'primary_color_hex' => 'setPrimaryColorHex',
        'reset_published_key' => 'setResetPublishedKey',
        'reset_secret_key' => 'setResetSecretKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'email' => 'getEmail',
        'current_password' => 'getCurrentPassword',
        'new_password' => 'getNewPassword',
        'rpcs' => 'getRpcs',
        'redirect_uris' => 'getRedirectUris',
        'icon_image_base64' => 'getIconImageBase64',
        'cover_image_base64' => 'getCoverImageBase64',
        'primary_color_hex' => 'getPrimaryColorHex',
        'reset_published_key' => 'getResetPublishedKey',
        'reset_secret_key' => 'getResetSecretKey'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('current_password', $data ?? [], null);
        $this->setIfExists('new_password', $data ?? [], null);
        $this->setIfExists('rpcs', $data ?? [], null);
        $this->setIfExists('redirect_uris', $data ?? [], null);
        $this->setIfExists('icon_image_base64', $data ?? [], null);
        $this->setIfExists('cover_image_base64', $data ?? [], null);
        $this->setIfExists('primary_color_hex', $data ?? [], null);
        $this->setIfExists('reset_published_key', $data ?? [], null);
        $this->setIfExists('reset_secret_key', $data ?? [], null);
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name A new name. Replaces the game's current name.
     *
     * @return self
     */
    public function setName($name)
    {

        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email A new email address. The game's old email will no longer be valid for account authentication. `currentPassword` must also be provided.
     *
     * @return self
     */
    public function setEmail($email)
    {

        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets current_password
     *
     * @return string|null
     */
    public function getCurrentPassword()
    {
        return $this->container['current_password'];
    }

    /**
     * Sets current_password
     *
     * @param string|null $current_password The game's current password. Must be provided if setting `newPassword` or `email`.
     *
     * @return self
     */
    public function setCurrentPassword($current_password)
    {

        if (is_null($current_password)) {
            throw new \InvalidArgumentException('non-nullable current_password cannot be null');
        }

        $this->container['current_password'] = $current_password;

        return $this;
    }

    /**
     * Gets new_password
     *
     * @return string|null
     */
    public function getNewPassword()
    {
        return $this->container['new_password'];
    }

    /**
     * Sets new_password
     *
     * @param string|null $new_password A new password. The game's old password will no longer be valid.
     *
     * @return self
     */
    public function setNewPassword($new_password)
    {

        if (is_null($new_password)) {
            throw new \InvalidArgumentException('non-nullable new_password cannot be null');
        }

        $this->container['new_password'] = $new_password;

        return $this;
    }

    /**
     * Gets rpcs
     *
     * @return array<string,string>|null
     */
    public function getRpcs()
    {
        return $this->container['rpcs'];
    }

    /**
     * Sets rpcs
     *
     * @param array<string,string>|null $rpcs Sets a custom RPC for your game to use instead of MetaFab's default RPCs for the chain(s) you specify.  Expects a JSON object containing key value pairs of supported `chain` -> `rpc url`. Only the chain names provided as keys in the object will be explicitly overriden. To delete a custom RPC for your game, provide the chain name to delete as a key in the provided object and `null` as the value.  Set RPC example, `{ MATIC: 'https://polygon-rpc.com' }` Delete RPC example, `{ MATIC: null }`
     *
     * @return self
     */
    public function setRpcs($rpcs)
    {

        if (is_null($rpcs)) {
            throw new \InvalidArgumentException('non-nullable rpcs cannot be null');
        }

        $this->container['rpcs'] = $rpcs;

        return $this;
    }

    /**
     * Gets redirect_uris
     *
     * @return string[]|null
     */
    public function getRedirectUris()
    {
        return $this->container['redirect_uris'];
    }

    /**
     * Sets redirect_uris
     *
     * @param string[]|null $redirect_uris An array of valid base redirect uris or exact uris that can be used for the redirect uri of various MetaFab features such as player login/registration and wallet connection.  Expects base or exact uris. For example, you could use include a uri of `https://trymetafab.com` and it would allow redirection to any valid uri on the domain, such as `https://trymetafab.com/play/game`.
     *
     * @return self
     */
    public function setRedirectUris($redirect_uris)
    {

        if (is_null($redirect_uris)) {
            throw new \InvalidArgumentException('non-nullable redirect_uris cannot be null');
        }

        $this->container['redirect_uris'] = $redirect_uris;

        return $this;
    }

    /**
     * Gets icon_image_base64
     *
     * @return string|null
     */
    public function getIconImageBase64()
    {
        return $this->container['icon_image_base64'];
    }

    /**
     * Sets icon_image_base64
     *
     * @param string|null $icon_image_base64 A base64 string of the icon image for this game. Supported image formats are `jpg`, `jpeg`, `png`, `gif` Recommended size is 512x512 pixels, or 1:1 aspect ratio. This image is used for your auth/connect wallet flow and other MetaFab features for your game.
     *
     * @return self
     */
    public function setIconImageBase64($icon_image_base64)
    {

        if (is_null($icon_image_base64)) {
            throw new \InvalidArgumentException('non-nullable icon_image_base64 cannot be null');
        }

        $this->container['icon_image_base64'] = $icon_image_base64;

        return $this;
    }

    /**
     * Gets cover_image_base64
     *
     * @return string|null
     */
    public function getCoverImageBase64()
    {
        return $this->container['cover_image_base64'];
    }

    /**
     * Sets cover_image_base64
     *
     * @param string|null $cover_image_base64 A base64 string of the cover image for this game. Supported image formats are `jpg`, `jpeg`, `png`, `gif`. Recommended size is 1600x1000 pixels, or 16:10 aspect ratio.  This image is used as the background image for your auth/connect wallet flow and other MetaFab features for your game.
     *
     * @return self
     */
    public function setCoverImageBase64($cover_image_base64)
    {

        if (is_null($cover_image_base64)) {
            throw new \InvalidArgumentException('non-nullable cover_image_base64 cannot be null');
        }

        $this->container['cover_image_base64'] = $cover_image_base64;

        return $this;
    }

    /**
     * Gets primary_color_hex
     *
     * @return string|null
     */
    public function getPrimaryColorHex()
    {
        return $this->container['primary_color_hex'];
    }

    /**
     * Sets primary_color_hex
     *
     * @param string|null $primary_color_hex A valid hex color code. This color is used for your auth/connect wallet flow to control the color of buttons and other brandable MetaFab features for your game.
     *
     * @return self
     */
    public function setPrimaryColorHex($primary_color_hex)
    {

        if (is_null($primary_color_hex)) {
            throw new \InvalidArgumentException('non-nullable primary_color_hex cannot be null');
        }

        $this->container['primary_color_hex'] = $primary_color_hex;

        return $this;
    }

    /**
     * Gets reset_published_key
     *
     * @return bool|null
     */
    public function getResetPublishedKey()
    {
        return $this->container['reset_published_key'];
    }

    /**
     * Sets reset_published_key
     *
     * @param bool|null $reset_published_key Revokes the game's previous published key and returns a new one if true.
     *
     * @return self
     */
    public function setResetPublishedKey($reset_published_key)
    {

        if (is_null($reset_published_key)) {
            throw new \InvalidArgumentException('non-nullable reset_published_key cannot be null');
        }

        $this->container['reset_published_key'] = $reset_published_key;

        return $this;
    }

    /**
     * Gets reset_secret_key
     *
     * @return bool|null
     */
    public function getResetSecretKey()
    {
        return $this->container['reset_secret_key'];
    }

    /**
     * Sets reset_secret_key
     *
     * @param bool|null $reset_secret_key Revokes the game's previous secret key and returns a new on if true.
     *
     * @return self
     */
    public function setResetSecretKey($reset_secret_key)
    {

        if (is_null($reset_secret_key)) {
            throw new \InvalidArgumentException('non-nullable reset_secret_key cannot be null');
        }

        $this->container['reset_secret_key'] = $reset_secret_key;

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


