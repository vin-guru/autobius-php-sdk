<?php
/**
 * LawOwner
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * VIN-API
 *
 * # Условия использования  Данные, получаемые в API не подлежат передаче третьим лицам. Предоставляются исключительно для личного пользования. В случае обнаружения нарушений, администрация в праве в одностороннем порядке заблокировать доступ к API до выяснения обстоятельств.  # Принцип работы API  API асинхронное. Для того чтобы получить данные по VIN сначала необходимо добавить задачу в очередь и получить ее уникальный идентификатор. После чего уже по этому идентификатору можно получить данные.  При постановке задачи в очередь, вы можете указать URL, на который по ее готовности система автоматически отправит POST запрос с результатом. Таким образом не нужно будет самим забирать результат. В случае, если URL окажется недоступен, система попробует повторить отправку от 1 до 5 раз с разными интервалами. В случае, если эти попытки окажутся безуспешными, система перестанет отправлять результат и необходимо будет уже самостоятельно сделать запрос в API на получение результата по идентификатору задачи. Успешным является запрос, в ходе которого удаленный сервер вернул статус 200. Все остальные статусы система рассматривает как безуспешные.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: support@autobius.ru
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * LawOwner Class Doc Comment
 *
 * @category    Class */
 // @description LawOwner единица истории владения
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LawOwner implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LawOwner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'owner' => 'string',
        'period' => 'string',
        'region' => 'string',
        'title' => 'string',
        'type' => 'int'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'owner' => 'owner',
        'period' => 'period',
        'region' => 'region',
        'title' => 'title',
        'type' => 'type'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'owner' => 'setOwner',
        'period' => 'setPeriod',
        'region' => 'setRegion',
        'title' => 'setTitle',
        'type' => 'setType'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'owner' => 'getOwner',
        'period' => 'getPeriod',
        'region' => 'getRegion',
        'title' => 'getTitle',
        'type' => 'getType'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
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
        return true;
    }


    /**
     * Gets owner
     * @return string
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     * @param string $owner Информация о владельце
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets period
     * @return string
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     * @param string $period Период владения
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets region
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     * @param string $region Регион владения
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title Тип владельца текстом
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets type
     * @return int
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param int $type Тип владельца 1 - физлицо, 2 - юрлицо
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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

