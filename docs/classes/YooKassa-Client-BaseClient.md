# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Client\BaseClient
### Namespace: [\YooKassa\Client](../namespaces/yookassa-client.md)
---
---
### Constants
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [ME_PATH](../classes/YooKassa-Client-BaseClient.md#constant_ME_PATH) |  | Точка входа для запроса к API по магазину |
| public | [PAYMENTS_PATH](../classes/YooKassa-Client-BaseClient.md#constant_PAYMENTS_PATH) |  | Точка входа для запросов к API по платежам |
| public | [REFUNDS_PATH](../classes/YooKassa-Client-BaseClient.md#constant_REFUNDS_PATH) |  | Точка входа для запросов к API по возвратам |
| public | [WEBHOOKS_PATH](../classes/YooKassa-Client-BaseClient.md#constant_WEBHOOKS_PATH) |  | Точка входа для запросов к API по вебхукам |
| public | [RECEIPTS_PATH](../classes/YooKassa-Client-BaseClient.md#constant_RECEIPTS_PATH) |  | Точка входа для запросов к API по чекам |
| public | [IDEMPOTENCY_KEY_HEADER](../classes/YooKassa-Client-BaseClient.md#constant_IDEMPOTENCY_KEY_HEADER) |  | Имя HTTP заголовка, используемого для передачи idempotence key |
| public | [DEFAULT_DELAY](../classes/YooKassa-Client-BaseClient.md#constant_DEFAULT_DELAY) |  | Значение по умолчанию времени ожидания между запросами при отправке повторного запроса в случае получения ответа с HTTP статусом 202 |
| public | [DEFAULT_TRIES_COUNT](../classes/YooKassa-Client-BaseClient.md#constant_DEFAULT_TRIES_COUNT) |  | Значение по умолчанию количества попыток получения информации от API если пришёл ответ с HTTP статусом 202 |
| public | [DEFAULT_ATTEMPTS_COUNT](../classes/YooKassa-Client-BaseClient.md#constant_DEFAULT_ATTEMPTS_COUNT) |  | Значение по умолчанию количества попыток получения информации от API если пришёл ответ с HTTP статусом 202 |
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$apiClient](../classes/YooKassa-Client-BaseClient.md#property_apiClient) |  | CURL клиент |
| protected | [$attempts](../classes/YooKassa-Client-BaseClient.md#property_attempts) |  | Количество повторных запросов при ответе API статусом 202 |
| protected | [$config](../classes/YooKassa-Client-BaseClient.md#property_config) |  | Настройки для CURL клиента |
| protected | [$logger](../classes/YooKassa-Client-BaseClient.md#property_logger) |  | Объект для логирования работы SDK |
| protected | [$login](../classes/YooKassa-Client-BaseClient.md#property_login) |  | shopId магазина |
| protected | [$password](../classes/YooKassa-Client-BaseClient.md#property_password) |  | Секретный ключ магазина |
| protected | [$timeout](../classes/YooKassa-Client-BaseClient.md#property_timeout) |  | Время через которое будут осуществляться повторные запросы |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Client-BaseClient.md#method___construct) |  | Constructor |
| public | [getApiClient()](../classes/YooKassa-Client-BaseClient.md#method_getApiClient) |  | Возвращает CURL клиента для работы с API |
| public | [getConfig()](../classes/YooKassa-Client-BaseClient.md#method_getConfig) |  | Возвращает настройки клиента |
| public | [setApiClient()](../classes/YooKassa-Client-BaseClient.md#method_setApiClient) |  | Устанавливает CURL клиента для работы с API |
| public | [setAuth()](../classes/YooKassa-Client-BaseClient.md#method_setAuth) |  | Устанавливает авторизацию по логин/паролю |
| public | [setAuthToken()](../classes/YooKassa-Client-BaseClient.md#method_setAuthToken) |  | Устанавливает авторизацию по Oauth-токену |
| public | [setConfig()](../classes/YooKassa-Client-BaseClient.md#method_setConfig) |  | Устанавливает настройки клиента |
| public | [setLogger()](../classes/YooKassa-Client-BaseClient.md#method_setLogger) |  | Устанавливает логгер приложения |
| public | [setMaxRequestAttempts()](../classes/YooKassa-Client-BaseClient.md#method_setMaxRequestAttempts) |  | Установка значения количества попыток повторных запросов при статусе 202 |
| public | [setRetryTimeout()](../classes/YooKassa-Client-BaseClient.md#method_setRetryTimeout) |  | Установка значения задержки между повторными запросами |
| protected | [decodeData()](../classes/YooKassa-Client-BaseClient.md#method_decodeData) |  | Декодирует JSON строку в массив данных |
| protected | [delay()](../classes/YooKassa-Client-BaseClient.md#method_delay) |  | Задержка между повторными запросами |
| protected | [encodeData()](../classes/YooKassa-Client-BaseClient.md#method_encodeData) |  | Кодирует массив данных в JSON строку |
| protected | [execute()](../classes/YooKassa-Client-BaseClient.md#method_execute) |  | Выполнение запроса и обработка 202 статуса |
| protected | [handleError()](../classes/YooKassa-Client-BaseClient.md#method_handleError) |  | Выбрасывает исключение по коду ошибки |
---
### Details
* File: [lib/Client/BaseClient.php](../../lib/Client/BaseClient.php)
* Package: Default
* Class Hierarchy:
  * \YooKassa\Client\BaseClient
---
## Constants
<a name="constant_ME_PATH" class="anchor"></a>
###### ME_PATH
Точка входа для запроса к API по магазину

```php
ME_PATH = '/me'
```


<a name="constant_PAYMENTS_PATH" class="anchor"></a>
###### PAYMENTS_PATH
Точка входа для запросов к API по платежам

```php
PAYMENTS_PATH = '/payments'
```


<a name="constant_REFUNDS_PATH" class="anchor"></a>
###### REFUNDS_PATH
Точка входа для запросов к API по возвратам

```php
REFUNDS_PATH = '/refunds'
```


<a name="constant_WEBHOOKS_PATH" class="anchor"></a>
###### WEBHOOKS_PATH
Точка входа для запросов к API по вебхукам

```php
WEBHOOKS_PATH = '/webhooks'
```


<a name="constant_RECEIPTS_PATH" class="anchor"></a>
###### RECEIPTS_PATH
Точка входа для запросов к API по чекам

```php
RECEIPTS_PATH = '/receipts'
```


<a name="constant_IDEMPOTENCY_KEY_HEADER" class="anchor"></a>
###### IDEMPOTENCY_KEY_HEADER
Имя HTTP заголовка, используемого для передачи idempotence key

```php
IDEMPOTENCY_KEY_HEADER = 'Idempotence-Key'
```


<a name="constant_DEFAULT_DELAY" class="anchor"></a>
###### DEFAULT_DELAY
Значение по умолчанию времени ожидания между запросами при отправке повторного запроса в случае получения ответа с HTTP статусом 202

```php
DEFAULT_DELAY = 1800
```


<a name="constant_DEFAULT_TRIES_COUNT" class="anchor"></a>
###### DEFAULT_TRIES_COUNT
Значение по умолчанию количества попыток получения информации от API если пришёл ответ с HTTP статусом 202

```php
DEFAULT_TRIES_COUNT = 3
```


<a name="constant_DEFAULT_ATTEMPTS_COUNT" class="anchor"></a>
###### DEFAULT_ATTEMPTS_COUNT
Значение по умолчанию количества попыток получения информации от API если пришёл ответ с HTTP статусом 202

```php
DEFAULT_ATTEMPTS_COUNT = 3
```


---
## Properties
<a name="property_apiClient"></a>
#### protected $apiClient : null|\YooKassa\Client\ApiClientInterface
---
**Summary**

CURL клиент

**Type:** <a href="../null|\YooKassa\Client\ApiClientInterface"><abbr title="null|\YooKassa\Client\ApiClientInterface">ApiClientInterface</abbr></a>

**Details:**


<a name="property_attempts"></a>
#### protected $attempts : int
---
**Summary**

Количество повторных запросов при ответе API статусом 202

***Description***

Значение по умолчанию 3

**Type:** <a href="../int"><abbr title="int">int</abbr></a>

**Details:**


<a name="property_config"></a>
#### protected $config : array
---
**Summary**

Настройки для CURL клиента

**Type:** <a href="../array"><abbr title="array">array</abbr></a>

**Details:**


<a name="property_logger"></a>
#### protected $logger : \Psr\Log\LoggerInterface|null
---
**Summary**

Объект для логирования работы SDK

**Type:** <a href="../\Psr\Log\LoggerInterface|null"><abbr title="\Psr\Log\LoggerInterface|null">LoggerInterface|null</abbr></a>

**Details:**


<a name="property_login"></a>
#### protected $login : string|int
---
**Summary**

shopId магазина

**Type:** <a href="../string|int"><abbr title="string|int">string|int</abbr></a>

**Details:**


<a name="property_password"></a>
#### protected $password : string
---
**Summary**

Секретный ключ магазина

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_timeout"></a>
#### protected $timeout : int
---
**Summary**

Время через которое будут осуществляться повторные запросы

***Description***

Значение по умолчанию - 1800 миллисекунд.

**Type:** <a href="../int"><abbr title="int">int</abbr></a>
значение в миллисекундах
**Details:**



---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(\YooKassa\Client\ApiClientInterface|null  apiClient = null, \YooKassa\Helpers\Config\ConfigurationLoaderInterface|null  configLoader = null) : mixed
```

**Summary**

Constructor

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Client\ApiClientInterface OR null</code> | apiClient  |  |
| <code lang="php">\YooKassa\Helpers\Config\ConfigurationLoaderInterface OR null</code> | configLoader  |  |

**Returns:** mixed - 


<a name="method_getApiClient" class="anchor"></a>
#### public getApiClient() : \YooKassa\Client\ApiClientInterface

```php
public getApiClient() : \YooKassa\Client\ApiClientInterface
```

**Summary**

Возвращает CURL клиента для работы с API

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)

**Returns:** \YooKassa\Client\ApiClientInterface - 


<a name="method_getConfig" class="anchor"></a>
#### public getConfig() : array

```php
public getConfig() : array
```

**Summary**

Возвращает настройки клиента

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)

**Returns:** array - 


<a name="method_setApiClient" class="anchor"></a>
#### public setApiClient() : $this

```php
public setApiClient(\YooKassa\Client\ApiClientInterface  apiClient) : $this
```

**Summary**

Устанавливает CURL клиента для работы с API

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Client\ApiClientInterface</code> | apiClient  |  |

**Returns:** $this - 


<a name="method_setAuth" class="anchor"></a>
#### public setAuth() : $this

```php
public setAuth(string  login, string  password) : $this
```

**Summary**

Устанавливает авторизацию по логин/паролю

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | login  |  |
| <code lang="php">string</code> | password  |  |

**Returns:** $this - 
##### Examples:
Пример авторизации:

```php
$client->setAuth('xxxxxx', 'test_XXXXXXX');

```


<a name="method_setAuthToken" class="anchor"></a>
#### public setAuthToken() : $this

```php
public setAuthToken(string  token) : $this
```

**Summary**

Устанавливает авторизацию по Oauth-токену

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | token  |  |

**Returns:** $this - 
##### Examples:
Пример авторизации:

```php
$client->setAuthToken('token_XXXXXXX');

```


<a name="method_setConfig" class="anchor"></a>
#### public setConfig() : mixed

```php
public setConfig(array  config) : mixed
```

**Summary**

Устанавливает настройки клиента

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array</code> | config  |  |

**Returns:** mixed - 


<a name="method_setLogger" class="anchor"></a>
#### public setLogger() : mixed

```php
public setLogger(null|callable|object|\Psr\Log\LoggerInterface  value) : mixed
```

**Summary**

Устанавливает логгер приложения

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">null OR callable OR object OR \Psr\Log\LoggerInterface</code> | value  | Инстанс логгера |

**Returns:** mixed - 


<a name="method_setMaxRequestAttempts" class="anchor"></a>
#### public setMaxRequestAttempts() : $this

```php
public setMaxRequestAttempts(int  attempts) : $this
```

**Summary**

Установка значения количества попыток повторных запросов при статусе 202

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">int</code> | attempts  |  |

**Returns:** $this - 


<a name="method_setRetryTimeout" class="anchor"></a>
#### public setRetryTimeout() : $this

```php
public setRetryTimeout(int  timeout) : $this
```

**Summary**

Установка значения задержки между повторными запросами

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">int</code> | timeout  |  |

**Returns:** $this - 


<a name="method_decodeData" class="anchor"></a>
#### protected decodeData() : array

```php
protected decodeData(\YooKassa\Common\ResponseObject  response) : array
```

**Summary**

Декодирует JSON строку в массив данных

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Common\ResponseObject</code> | response  |  |

**Returns:** array - 


<a name="method_delay" class="anchor"></a>
#### protected delay() : mixed

```php
protected delay(\YooKassa\Common\ResponseObject  response) : mixed
```

**Summary**

Задержка между повторными запросами

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Common\ResponseObject</code> | response  |  |

**Returns:** mixed - 


<a name="method_encodeData" class="anchor"></a>
#### protected encodeData() : string

```php
protected encodeData(array  serializedData) : string
```

**Summary**

Кодирует массив данных в JSON строку

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array</code> | serializedData  |  |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \Exception |  |

**Returns:** string - 


<a name="method_execute" class="anchor"></a>
#### protected execute() : mixed|\YooKassa\Common\ResponseObject

```php
protected execute(string  path, string  method, array  queryParams, null  httpBody = null, array  headers = array()) : mixed|\YooKassa\Common\ResponseObject
```

**Summary**

Выполнение запроса и обработка 202 статуса

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | path  |  |
| <code lang="php">string</code> | method  |  |
| <code lang="php">array</code> | queryParams  |  |
| <code lang="php">null</code> | httpBody  |  |
| <code lang="php">array</code> | headers  |  |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\ApiException |  |
| \YooKassa\Common\Exceptions\AuthorizeException |  |
| \YooKassa\Common\Exceptions\ApiConnectionException |  |
| \YooKassa\Common\Exceptions\ExtensionNotFoundException |  |

**Returns:** mixed|\YooKassa\Common\ResponseObject - 


<a name="method_handleError" class="anchor"></a>
#### protected handleError() : mixed

```php
protected handleError(\YooKassa\Common\ResponseObject  response) : mixed
```

**Summary**

Выбрасывает исключение по коду ошибки

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Common\ResponseObject</code> | response  |  |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\ApiException |  |
| \YooKassa\Common\Exceptions\BadApiRequestException |  |
| \YooKassa\Common\Exceptions\ForbiddenException |  |
| \YooKassa\Common\Exceptions\InternalServerError |  |
| \YooKassa\Common\Exceptions\NotFoundException |  |
| \YooKassa\Common\Exceptions\ResponseProcessingException |  |
| \YooKassa\Common\Exceptions\TooManyRequestsException |  |
| \YooKassa\Common\Exceptions\UnauthorizedException |  |

**Returns:** mixed - 



---

### Top Namespaces

* [\YooKassa](../namespaces/yookassa.md)

---

### Reports
* [Errors - 0](../reports/errors.md)
* [Markers - 0](../reports/markers.md)
* [Deprecated - 7](../reports/deprecated.md)

---

This document was automatically generated from source code comments on 2021-04-21 using [phpDocumentor](http://www.phpdoc.org/)

&copy; 2021 YooMoney