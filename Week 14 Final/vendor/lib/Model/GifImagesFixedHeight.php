<?php
/**
 * GifImagesFixedHeight
 *
 * PHP version 5
 *
 * @category Class
 * @package  GPH
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * giphy-api
 *
 * Giphy's public api.
 *
 * OpenAPI spec version: 0.9.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace GPH\Model;

use \ArrayAccess;

/**
 * GifImagesFixedHeight Class Doc Comment
 *
 * @category    Class
 * @description Data surrounding versions of this GIF with a fixed height of 200 pixels. Good for mobile use.
 * @package     GPH
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GifImagesFixedHeight implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Gif_images_fixed_height';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'url' => 'string',
        'width' => 'string',
        'height' => 'string',
        'size' => 'string',
        'mp4' => 'string',
        'mp4_size' => 'string',
        'webp' => 'string',
        'webp_size' => 'string'
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
        'url' => 'url',
        'width' => 'width',
        'height' => 'height',
        'size' => 'size',
        'mp4' => 'mp4',
        'mp4_size' => 'mp4_size',
        'webp' => 'webp',
        'webp_size' => 'webp_size'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'size' => 'setSize',
        'mp4' => 'setMp4',
        'mp4_size' => 'setMp4Size',
        'webp' => 'setWebp',
        'webp_size' => 'setWebpSize'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'size' => 'getSize',
        'mp4' => 'getMp4',
        'mp4_size' => 'getMp4Size',
        'webp' => 'getWebp',
        'webp_size' => 'getWebpSize'
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['mp4'] = isset($data['mp4']) ? $data['mp4'] : null;
        $this->container['mp4_size'] = isset($data['mp4_size']) ? $data['mp4_size'] : null;
        $this->container['webp'] = isset($data['webp']) ? $data['webp'] : null;
        $this->container['webp_size'] = isset($data['webp_size']) ? $data['webp_size'] : null;
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
     * Gets url
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     * @param string $url The publicly-accessible direct URL for this GIF.
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets width
     * @return string
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     * @param string $width The width of this GIF in pixels.
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     * @return string
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     * @param string $height The height of this GIF in pixels.
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets size
     * @return string
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     * @param string $size The size of this GIF in bytes.
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets mp4
     * @return string
     */
    public function getMp4()
    {
        return $this->container['mp4'];
    }

    /**
     * Sets mp4
     * @param string $mp4 The URL for this GIF in .MP4 format.
     * @return $this
     */
    public function setMp4($mp4)
    {
        $this->container['mp4'] = $mp4;

        return $this;
    }

    /**
     * Gets mp4_size
     * @return string
     */
    public function getMp4Size()
    {
        return $this->container['mp4_size'];
    }

    /**
     * Sets mp4_size
     * @param string $mp4_size The size in bytes of the .MP4 file corresponding to this GIF.
     * @return $this
     */
    public function setMp4Size($mp4_size)
    {
        $this->container['mp4_size'] = $mp4_size;

        return $this;
    }

    /**
     * Gets webp
     * @return string
     */
    public function getWebp()
    {
        return $this->container['webp'];
    }

    /**
     * Sets webp
     * @param string $webp The URL for this GIF in .webp format.
     * @return $this
     */
    public function setWebp($webp)
    {
        $this->container['webp'] = $webp;

        return $this;
    }

    /**
     * Gets webp_size
     * @return string
     */
    public function getWebpSize()
    {
        return $this->container['webp_size'];
    }

    /**
     * Sets webp_size
     * @param string $webp_size The size in bytes of the .webp file corresponding to this GIF.
     * @return $this
     */
    public function setWebpSize($webp_size)
    {
        $this->container['webp_size'] = $webp_size;

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
            return json_encode(\GPH\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\GPH\ObjectSerializer::sanitizeForSerialization($this));
    }
}


