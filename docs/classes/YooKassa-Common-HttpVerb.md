# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Common\HttpVerb
### Namespace: [\YooKassa\Common](../namespaces/yookassa-common.md)
---
**Summary:**

Базовый класс генерируемых enum'ов

---
### Constants
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [GET](../classes/YooKassa-Common-HttpVerb.md#constant_GET) |  |  |
| public | [POST](../classes/YooKassa-Common-HttpVerb.md#constant_POST) |  |  |
| public | [PATCH](../classes/YooKassa-Common-HttpVerb.md#constant_PATCH) |  |  |
| public | [HEAD](../classes/YooKassa-Common-HttpVerb.md#constant_HEAD) |  |  |
| public | [OPTIONS](../classes/YooKassa-Common-HttpVerb.md#constant_OPTIONS) |  |  |
| public | [PUT](../classes/YooKassa-Common-HttpVerb.md#constant_PUT) |  |  |
| public | [DELETE](../classes/YooKassa-Common-HttpVerb.md#constant_DELETE) |  |  |
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$validValues](../classes/YooKassa-Common-HttpVerb.md#property_validValues) |  |  |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getEnabledValues()](../classes/YooKassa-Common-AbstractEnum.md#method_getEnabledValues) |  | Возвращает значения в enum'е значения которых разрешены |
| public | [getValidValues()](../classes/YooKassa-Common-AbstractEnum.md#method_getValidValues) |  | Возвращает все значения в enum'e |
| public | [valueExists()](../classes/YooKassa-Common-AbstractEnum.md#method_valueExists) |  | Проверяет наличие значения в enum'e |
---
### Details
* File: [lib/Common/HttpVerb.php](../../lib/Common/HttpVerb.php)
* Package: Default
* Class Hierarchy: 
  * [\YooKassa\Common\AbstractEnum](../classes/YooKassa-Common-AbstractEnum.md)
  * \YooKassa\Common\HttpVerb
---
## Constants
<a name="constant_GET" class="anchor"></a>
###### GET
```php
GET = 'GET'
```


<a name="constant_POST" class="anchor"></a>
###### POST
```php
POST = 'POST'
```


<a name="constant_PATCH" class="anchor"></a>
###### PATCH
```php
PATCH = 'PATCH'
```


<a name="constant_HEAD" class="anchor"></a>
###### HEAD
```php
HEAD = 'HEAD'
```


<a name="constant_OPTIONS" class="anchor"></a>
###### OPTIONS
```php
OPTIONS = 'OPTIONS'
```


<a name="constant_PUT" class="anchor"></a>
###### PUT
```php
PUT = 'PUT'
```


<a name="constant_DELETE" class="anchor"></a>
###### DELETE
```php
DELETE = 'DELETE'
```


---
## Properties
<a name="property_validValues"></a>
#### protected $validValues : array
---
**Type:** <a href="../array"><abbr title="array">array</abbr></a>
Массив принимаемых enum&#039;ом значений
**Details:**



---
## Methods
<a name="method_getEnabledValues" class="anchor"></a>
#### public getEnabledValues() : string[]

```php
Static public getEnabledValues() : string[]
```

**Summary**

Возвращает значения в enum'е значения которых разрешены

**Details:**
* Inherited From: [\YooKassa\Common\AbstractEnum](../classes/YooKassa-Common-AbstractEnum.md)

**Returns:** string[] - Массив разрешённых значений


<a name="method_getValidValues" class="anchor"></a>
#### public getValidValues() : array

```php
Static public getValidValues() : array
```

**Summary**

Возвращает все значения в enum'e

**Details:**
* Inherited From: [\YooKassa\Common\AbstractEnum](../classes/YooKassa-Common-AbstractEnum.md)

**Returns:** array - Массив значений в перечислении


<a name="method_valueExists" class="anchor"></a>
#### public valueExists() : bool

```php
Static public valueExists(mixed  value) : bool
```

**Summary**

Проверяет наличие значения в enum'e

**Details:**
* Inherited From: [\YooKassa\Common\AbstractEnum](../classes/YooKassa-Common-AbstractEnum.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">mixed</code> | value  | Проверяемое значение |

**Returns:** bool - True если значение имеется, false если нет



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