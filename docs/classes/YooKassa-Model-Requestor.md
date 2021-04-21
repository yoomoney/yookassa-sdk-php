# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Model\Requestor
### Namespace: [\YooKassa\Model](../namespaces/yookassa-model.md)
---
**Summary:**

Инициатор платежа или возврата.

**Description:**

Инициатором может быть магазин, подключенный к ЮKassa, `merchant` или приложение, которому владелец магазина
[разрешил](https://yookassa.ru/developers/partners-api/basics) совершать операции от своего имени `third_party_client`.

---
### Constants
* No constants found
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [$account_id](../classes/YooKassa-Model-Requestor.md#property_account_id) |  | Идентификатор магазина |
| public | [$accountId](../classes/YooKassa-Model-Requestor.md#property_accountId) |  | Идентификатор магазина |
| public | [$client_id](../classes/YooKassa-Model-Requestor.md#property_client_id) |  | Идентификатор приложения |
| public | [$client_name](../classes/YooKassa-Model-Requestor.md#property_client_name) |  | Название приложения (только для type = RequestorThirdPartyService) |
| public | [$clientId](../classes/YooKassa-Model-Requestor.md#property_clientId) |  | Идентификатор приложения |
| public | [$clientName](../classes/YooKassa-Model-Requestor.md#property_clientName) |  | Название приложения (только для type = RequestorThirdPartyService) |
| public | [$type](../classes/YooKassa-Model-Requestor.md#property_type) |  | Тип инициатора |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Model-Requestor.md#method___construct) |  | Requestor constructor. |
| public | [__get()](../classes/YooKassa-Common-AbstractObject.md#method___get) |  | Возвращает значение свойства |
| public | [__isset()](../classes/YooKassa-Common-AbstractObject.md#method___isset) |  | Проверяет наличие свойства |
| public | [__set()](../classes/YooKassa-Common-AbstractObject.md#method___set) |  | Устанавливает значение свойства |
| public | [__unset()](../classes/YooKassa-Common-AbstractObject.md#method___unset) |  | Удаляет свойство |
| public | [fromArray()](../classes/YooKassa-Common-AbstractObject.md#method_fromArray) |  | Устанавливает значения свойств текущего объекта из массива |
| public | [getAccountId()](../classes/YooKassa-Model-Requestor.md#method_getAccountId) |  | Возвращает идентификатор магазина |
| public | [getClientId()](../classes/YooKassa-Model-Requestor.md#method_getClientId) |  | Возвращает идентификатор приложения |
| public | [getClientName()](../classes/YooKassa-Model-Requestor.md#method_getClientName) |  | Возвращает название приложения |
| public | [getType()](../classes/YooKassa-Model-Requestor.md#method_getType) |  | Возвращает тип инициатора |
| public | [jsonSerialize()](../classes/YooKassa-Common-AbstractObject.md#method_jsonSerialize) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации |
| public | [offsetExists()](../classes/YooKassa-Common-AbstractObject.md#method_offsetExists) |  | Проверяет наличие свойства |
| public | [offsetGet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetGet) |  | Возвращает значение свойства |
| public | [offsetSet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetSet) |  | Устанавливает значение свойства |
| public | [offsetUnset()](../classes/YooKassa-Common-AbstractObject.md#method_offsetUnset) |  | Удаляет свойство |
| public | [setAccountId()](../classes/YooKassa-Model-Requestor.md#method_setAccountId) |  | Устанавливает идентификатор магазина |
| public | [setClientId()](../classes/YooKassa-Model-Requestor.md#method_setClientId) |  | Устанавливает идентификатор приложения |
| public | [setClientName()](../classes/YooKassa-Model-Requestor.md#method_setClientName) |  | Устанавливает название приложения |
| public | [setType()](../classes/YooKassa-Model-Requestor.md#method_setType) |  | Устанавливает тип инициатора |
| public | [toArray()](../classes/YooKassa-Common-AbstractObject.md#method_toArray) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации Является алиасом метода AbstractObject::jsonSerialize() |
| protected | [getUnknownProperties()](../classes/YooKassa-Common-AbstractObject.md#method_getUnknownProperties) |  | Возвращает массив свойств которые не существуют, но были заданы у объекта |
---
### Details
* File: [lib/Model/Requestor.php](../../lib/Model/Requestor.php)
* Package: YooKassa
* Class Hierarchy: 
  * [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
  * \YooKassa\Model\Requestor
* Implements:
  * [\YooKassa\Model\RequestorInterface](../classes/YooKassa-Model-RequestorInterface.md)
---
## Properties
<a name="property_account_id"></a>
#### public $account_id : string
---
***Description***

Идентификатор магазина

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_accountId"></a>
#### public $accountId : string
---
***Description***

Идентификатор магазина

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_client_id"></a>
#### public $client_id : string
---
***Description***

Идентификатор приложения

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_client_name"></a>
#### public $client_name : string
---
***Description***

Название приложения (только для type = RequestorThirdPartyService)

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_clientId"></a>
#### public $clientId : string
---
***Description***

Идентификатор приложения

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_clientName"></a>
#### public $clientName : string
---
***Description***

Название приложения (только для type = RequestorThirdPartyService)

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_type"></a>
#### public $type : string
---
***Description***

Тип инициатора

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**



---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(null|array  data = null) : mixed
```

**Summary**

Requestor constructor.

**Details:**
* Inherited From: [\YooKassa\Model\Requestor](../classes/YooKassa-Model-Requestor.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">null OR array</code> | data  |  |

**Returns:** mixed - 


<a name="method___get" class="anchor"></a>
#### public __get() : mixed

```php
public __get(string  propertyName) : mixed
```

**Summary**

Возвращает значение свойства

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | propertyName  | Имя свойства |

**Returns:** mixed - Значение свойства


<a name="method___isset" class="anchor"></a>
#### public __isset() : bool

```php
public __isset(string  propertyName) : bool
```

**Summary**

Проверяет наличие свойства

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | propertyName  | Имя проверяемого свойства |

**Returns:** bool - True если свойство имеется, false если нет


<a name="method___set" class="anchor"></a>
#### public __set() : mixed

```php
public __set(string  propertyName, mixed  value) : mixed
```

**Summary**

Устанавливает значение свойства

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | propertyName  | Имя свойства |
| <code lang="php">mixed</code> | value  | Значение свойства |

**Returns:** mixed - 


<a name="method___unset" class="anchor"></a>
#### public __unset() : mixed

```php
public __unset(string  propertyName) : mixed
```

**Summary**

Удаляет свойство

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | propertyName  | Имя удаляемого свойства |

**Returns:** mixed - 


<a name="method_fromArray" class="anchor"></a>
#### public fromArray() : mixed

```php
public fromArray(array|\Traversable  sourceArray) : mixed
```

**Summary**

Устанавливает значения свойств текущего объекта из массива

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array OR \Traversable</code> | sourceArray  | Ассоциативный массив с настройками |

**Returns:** mixed - 


<a name="method_getAccountId" class="anchor"></a>
#### public getAccountId() : string|null

```php
public getAccountId() : string|null
```

**Summary**

Возвращает идентификатор магазина

**Details:**
* Inherited From: [\YooKassa\Model\Requestor](../classes/YooKassa-Model-Requestor.md)

**Returns:** string|null - 

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritdoc |  |  |

<a name="method_getClientId" class="anchor"></a>
#### public getClientId() : string|null

```php
public getClientId() : string|null
```

**Summary**

Возвращает идентификатор приложения

**Details:**
* Inherited From: [\YooKassa\Model\Requestor](../classes/YooKassa-Model-Requestor.md)

**Returns:** string|null - 

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritdoc |  |  |

<a name="method_getClientName" class="anchor"></a>
#### public getClientName() : string|null

```php
public getClientName() : string|null
```

**Summary**

Возвращает название приложения

**Details:**
* Inherited From: [\YooKassa\Model\Requestor](../classes/YooKassa-Model-Requestor.md)

**Returns:** string|null - 

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritdoc |  |  |

<a name="method_getType" class="anchor"></a>
#### public getType() : string

```php
public getType() : string
```

**Summary**

Возвращает тип инициатора

**Details:**
* Inherited From: [\YooKassa\Model\Requestor](../classes/YooKassa-Model-Requestor.md)

**Returns:** string - 

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritdoc |  |  |

<a name="method_jsonSerialize" class="anchor"></a>
#### public jsonSerialize() : array

```php
public jsonSerialize() : array
```

**Summary**

Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)

**Returns:** array - Ассоциативный массив со свойствами текущего объекта


<a name="method_offsetExists" class="anchor"></a>
#### public offsetExists() : bool

```php
public offsetExists(string  offset) : bool
```

**Summary**

Проверяет наличие свойства

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | offset  | Имя проверяемого свойства |

**Returns:** bool - True если свойство имеется, false если нет


<a name="method_offsetGet" class="anchor"></a>
#### public offsetGet() : mixed

```php
public offsetGet(string  offset) : mixed
```

**Summary**

Возвращает значение свойства

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | offset  | Имя свойства |

**Returns:** mixed - Значение свойства


<a name="method_offsetSet" class="anchor"></a>
#### public offsetSet() : mixed

```php
public offsetSet(string  offset, mixed  value) : mixed
```

**Summary**

Устанавливает значение свойства

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | offset  | Имя свойства |
| <code lang="php">mixed</code> | value  | Значение свойства |

**Returns:** mixed - 


<a name="method_offsetUnset" class="anchor"></a>
#### public offsetUnset() : mixed

```php
public offsetUnset(string  offset) : mixed
```

**Summary**

Удаляет свойство

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | offset  | Имя удаляемого свойства |

**Returns:** mixed - 


<a name="method_setAccountId" class="anchor"></a>
#### public setAccountId() : mixed

```php
public setAccountId(string  value) : mixed
```

**Summary**

Устанавливает идентификатор магазина

**Details:**
* Inherited From: [\YooKassa\Model\Requestor](../classes/YooKassa-Model-Requestor.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Идентификатор магазина |

**Returns:** mixed - 

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritdoc |  |  |

<a name="method_setClientId" class="anchor"></a>
#### public setClientId() : mixed

```php
public setClientId(string  value) : mixed
```

**Summary**

Устанавливает идентификатор приложения

**Details:**
* Inherited From: [\YooKassa\Model\Requestor](../classes/YooKassa-Model-Requestor.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Идентификатор приложения |

**Returns:** mixed - 

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritdoc |  |  |

<a name="method_setClientName" class="anchor"></a>
#### public setClientName() : mixed

```php
public setClientName(string  value) : mixed
```

**Summary**

Устанавливает название приложения

**Details:**
* Inherited From: [\YooKassa\Model\Requestor](../classes/YooKassa-Model-Requestor.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Название приложения |

**Returns:** mixed - 

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritdoc |  |  |

<a name="method_setType" class="anchor"></a>
#### public setType() : mixed

```php
public setType(string  value) : mixed
```

**Summary**

Устанавливает тип инициатора

**Details:**
* Inherited From: [\YooKassa\Model\Requestor](../classes/YooKassa-Model-Requestor.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Тип инициатора |

**Returns:** mixed - 

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritdoc |  |  |

<a name="method_toArray" class="anchor"></a>
#### public toArray() : array

```php
public toArray() : array
```

**Summary**

Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации
Является алиасом метода AbstractObject::jsonSerialize()

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)

**Returns:** array - Ассоциативный массив со свойствами текущего объекта


<a name="method_getUnknownProperties" class="anchor"></a>
#### protected getUnknownProperties() : array

```php
protected getUnknownProperties() : array
```

**Summary**

Возвращает массив свойств которые не существуют, но были заданы у объекта

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)

**Returns:** array - Ассоциативный массив с не существующими у текущего объекта свойствами



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