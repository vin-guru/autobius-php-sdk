<?php
/**
 * VinDecoderResponse
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
 * VinDecoderResponse Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class VinDecoderResponse implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'VinDecoderResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'complete' => 'bool',
        'request_date' => 'int',
        'request_id' => 'string',
        'success' => 'bool',
        'vin_decoder' => '\Swagger\Client\Model\DecoderResult'
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
        'complete' => 'complete',
        'request_date' => 'request_date',
        'request_id' => 'request_id',
        'success' => 'success',
        'vin_decoder' => 'vin_decoder'
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
        'complete' => 'setComplete',
        'request_date' => 'setRequestDate',
        'request_id' => 'setRequestId',
        'success' => 'setSuccess',
        'vin_decoder' => 'setVinDecoder'
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
        'complete' => 'getComplete',
        'request_date' => 'getRequestDate',
        'request_id' => 'getRequestId',
        'success' => 'getSuccess',
        'vin_decoder' => 'getVinDecoder'
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
        $this->container['complete'] = isset($data['complete']) ? $data['complete'] : null;
        $this->container['request_date'] = isset($data['request_date']) ? $data['request_date'] : null;
        $this->container['request_id'] = isset($data['request_id']) ? $data['request_id'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['vin_decoder'] = isset($data['vin_decoder']) ? $data['vin_decoder'] : null;
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
     * Gets complete
     * @return bool
     */
    public function getComplete()
    {
        return $this->container['complete'];
    }

    /**
     * Sets complete
     * @param bool $complete Декодирование завершено `true|false`
     * @return $this
     */
    public function setComplete($complete)
    {
        $this->container['complete'] = $complete;

        return $this;
    }

    /**
     * Gets request_date
     * @return int
     */
    public function getRequestDate()
    {
        return $this->container['request_date'];
    }

    /**
     * Sets request_date
     * @param int $request_date Дата запроса, в формате `unix timestamp`
     * @return $this
     */
    public function setRequestDate($request_date)
    {
        $this->container['request_date'] = $request_date;

        return $this;
    }

    /**
     * Gets request_id
     * @return string
     */
    public function getRequestId()
    {
        return $this->container['request_id'];
    }

    /**
     * Sets request_id
     * @param string $request_id Уникальный идентификатор запроса, с ним всегда можно обратиться в сапоорт.
     * @return $this
     */
    public function setRequestId($request_id)
    {
        $this->container['request_id'] = $request_id;

        return $this;
    }

    /**
     * Gets success
     * @return bool
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * Sets success
     * @param bool $success Успешность выполнения запроса `true|false`
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;

        return $this;
    }

    /**
     * Gets vin_decoder
     * @return \Swagger\Client\Model\DecoderResult
     */
    public function getVinDecoder()
    {
        return $this->container['vin_decoder'];
    }

    /**
     * Sets vin_decoder
     * @param \Swagger\Client\Model\DecoderResult $vin_decoder
     * @return $this
     */
    public function setVinDecoder($vin_decoder)
    {
        $this->container['vin_decoder'] = $vin_decoder;

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

