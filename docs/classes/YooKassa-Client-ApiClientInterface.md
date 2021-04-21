# [YooKassa API SDK](../home.md)

# Interface: ApiClientInterface
### Namespace: [\YooKassa\Client](../namespaces/yookassa-client.md)
---
**Summary:**

Interface ApiClientInterface

---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [call()](../classes/YooKassa-Client-ApiClientInterface.md#method_call) |  | Создает CURL запрос, получает и возвращает обработанный ответ |
| public | [getUserAgent()](../classes/YooKassa-Client-ApiClientInterface.md#method_getUserAgent) |  | Возвращает UserAgent |
| public | [setBearerToken()](../classes/YooKassa-Client-ApiClientInterface.md#method_setBearerToken) |  | Устанавливает OAuth-токен магазина |
| public | [setConfig()](../classes/YooKassa-Client-ApiClientInterface.md#method_setConfig) |  | Устанавливает настройки |
| public | [setLogger()](../classes/YooKassa-Client-ApiClientInterface.md#method_setLogger) |  | Устанавливает объект для логирования |
| public | [setShopId()](../classes/YooKassa-Client-ApiClientInterface.md#method_setShopId) |  | Устанавливает shopId магазина |
| public | [setShopPassword()](../classes/YooKassa-Client-ApiClientInterface.md#method_setShopPassword) |  | Устанавливает секретный ключ магазина |

---
### Details
* File: [lib/Client/ApiClientInterface.php](../../lib/Client/ApiClientInterface.php)
* Package: \YooKassa
---
## Methods
<a name="method_call" class="anchor"></a>
#### public call() : \YooKassa\Common\ResponseObject

```php
public call(string  path, string  method, array  queryParams, string|null  httpBody = null, array  headers = array()) : \YooKassa\Common\ResponseObject
```

**Summary**

Создает CURL запрос, получает и возвращает обработанный ответ

**Details:**
* Inherited From: [\YooKassa\Client\ApiClientInterface](../classes/YooKassa-Client-ApiClientInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | path  | URL запроса |
| <code lang="php">string</code> | method  | HTTP метод |
| <code lang="php">array</code> | queryParams  | Массив GET параметров запроса |
| <code lang="php">string OR null</code> | httpBody  | Тело запроса |
| <code lang="php">array</code> | headers  | Массив заголовков запроса |

**Returns:** \YooKassa\Common\ResponseObject - 


<a name="method_setLogger" class="anchor"></a>
#### public setLogger() : mixed

```php
public setLogger(\Psr\Log\LoggerInterface|null  logger) : mixed
```

**Summary**

Устанавливает объект для логирования

**Details:**
* Inherited From: [\YooKassa\Client\ApiClientInterface](../classes/YooKassa-Client-ApiClientInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\Psr\Log\LoggerInterface OR null</code> | logger  | Объект для логирования |

**Returns:** mixed - 


<a name="method_getUserAgent" class="anchor"></a>
#### public getUserAgent() : \YooKassa\Client\UserAgent

```php
public getUserAgent() : \YooKassa\Client\UserAgent
```

**Summary**

Возвращает UserAgent

**Details:**
* Inherited From: [\YooKassa\Client\ApiClientInterface](../classes/YooKassa-Client-ApiClientInterface.md)

**Returns:** \YooKassa\Client\UserAgent - 


<a name="method_setShopId" class="anchor"></a>
#### public setShopId() : mixed

```php
public setShopId(string|int  shopId) : mixed
```

**Summary**

Устанавливает shopId магазина

**Details:**
* Inherited From: [\YooKassa\Client\ApiClientInterface](../classes/YooKassa-Client-ApiClientInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string OR int</code> | shopId  | shopId магазина |

**Returns:** mixed - 


<a name="method_setShopPassword" class="anchor"></a>
#### public setShopPassword() : mixed

```php
public setShopPassword(string  shopPassword) : mixed
```

**Summary**

Устанавливает секретный ключ магазина

**Details:**
* Inherited From: [\YooKassa\Client\ApiClientInterface](../classes/YooKassa-Client-ApiClientInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | shopPassword  |  |

**Returns:** mixed - 


<a name="method_setBearerToken" class="anchor"></a>
#### public setBearerToken() : mixed

```php
public setBearerToken(string  bearerToken) : mixed
```

**Summary**

Устанавливает OAuth-токен магазина

**Details:**
* Inherited From: [\YooKassa\Client\ApiClientInterface](../classes/YooKassa-Client-ApiClientInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | bearerToken  |  |

**Returns:** mixed - 


<a name="method_setConfig" class="anchor"></a>
#### public setConfig() : mixed

```php
public setConfig(array  config) : mixed
```

**Summary**

Устанавливает настройки

**Details:**
* Inherited From: [\YooKassa\Client\ApiClientInterface](../classes/YooKassa-Client-ApiClientInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array</code> | config  |  |

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