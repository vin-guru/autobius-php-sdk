# SwaggerClient-php
# Условия использования  Данные, получаемые в API не подлежат передаче третьим лицам. Предоставляются исключительно для личного пользования. В случае обнаружения нарушений, администрация в праве в одностороннем порядке заблокировать доступ к API до выяснения обстоятельств.  # Принцип работы API  API асинхронное. Для того чтобы получить данные по VIN сначала необходимо добавить задачу в очередь и получить ее уникальный идентификатор. После чего уже по этому идентификатору можно получить данные.  При постановке задачи в очередь, вы можете указать URL, на который по ее готовности система автоматически отправит POST запрос с результатом. Таким образом не нужно будет самим забирать результат. В случае, если URL окажется недоступен, система попробует повторить отправку от 1 до 5 раз с разными интервалами. В случае, если эти попытки окажутся безуспешными, система перестанет отправлять результат и необходимо будет уже самостоятельно сделать запрос в API на получение результата по идентификатору задачи. Успешным является запрос, в ходе которого удаленный сервер вернул статус 200. Все остальные статусы система рассматривает как безуспешные.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Build date: 2019-12-14T23:57:13.735+04:00
- Build package: class io.swagger.codegen.languages.PhpClientCodegen
For more information, please visit [https://api.autobius.ru/](https://api.autobius.ru/)

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/MadFaill/autobius-php-sdk.git"
    }
  ],
  "require": {
    "autobius/autobius-php-sdk": "^1.0"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/autobius-php-sdk/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit lib/Tests
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
define('API_USERNAME', "HERE YOUR API USER NAME");
define('API_PASSWORD', "HERE YOUR API PASSWORD");
define('API_PERSONAL_KEY', 'HERE YOUR API KEY');

$vin = end($argv);

require_once(__DIR__ . '/autoload.php');
$api_instance = new Swagger\Client\Api\DefaultApi(API_PERSONAL_KEY);

try {
    $loginData = $api_instance->loginRequest(API_USERNAME, API_PASSWORD);
    var_dump($loginData->getToken());
    $decoderResult = $api_instance->sourceDecoderRequest($vin, 'Bearer '.$loginData->getToken());
    var_dump($decoderResult);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.autobius.ru/*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**loginRequest**](docs/Api/DefaultApi.md#loginrequest) | **POST** /login | Авторизация и получение JWT Token.
*DefaultApi* | [**refreshRequest**](docs/Api/DefaultApi.md#refreshrequest) | **GET** /auth/refresh_token | Обновление авторизационного токена.
*DefaultApi* | [**sourceDecoderRequest**](docs/Api/DefaultApi.md#sourcedecoderrequest) | **GET** /sources/v1/decode/{vin} | Декодирование VIN и получение по нему всей доступной информации по конкретному автомобилю.


## Documentation For Models

 - [ApproximationResult](docs/Model/ApproximationResult.md)
 - [BaseResponseBody](docs/Model/BaseResponseBody.md)
 - [DecoderResult](docs/Model/DecoderResult.md)
 - [Element](docs/Model/Element.md)
 - [InSaleAuto](docs/Model/InSaleAuto.md)
 - [InSaleResult](docs/Model/InSaleResult.md)
 - [LawAdditionalInfo](docs/Model/LawAdditionalInfo.md)
 - [LawCrashes](docs/Model/LawCrashes.md)
 - [LawOwner](docs/Model/LawOwner.md)
 - [LawRestrictionBlock](docs/Model/LawRestrictionBlock.md)
 - [LawRestrictions](docs/Model/LawRestrictions.md)
 - [LawResult](docs/Model/LawResult.md)
 - [LoginResponse](docs/Model/LoginResponse.md)
 - [MarketInfo](docs/Model/MarketInfo.md)
 - [ResultResponse](docs/Model/ResultResponse.md)
 - [TaskCreateResult](docs/Model/TaskCreateResult.md)
 - [VinDecoderResponse](docs/Model/VinDecoderResponse.md)


## Documentation For Authorization


## JWTAuth

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Author

madfaill@gmail.com