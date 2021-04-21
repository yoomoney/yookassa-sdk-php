# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Common\ResponseObject
### Namespace: [\YooKassa\Common](../namespaces/yookassa-common.md)
---
**Summary:**

Класс HTTP ответа

---
### Constants
* No constants found
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$body](../classes/YooKassa-Common-ResponseObject.md#property_body) |  | Тело ответа |
| protected | [$code](../classes/YooKassa-Common-ResponseObject.md#property_code) |  | HTTP код ответа |
| protected | [$headers](../classes/YooKassa-Common-ResponseObject.md#property_headers) |  | Массив заголовков ответа |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Common-ResponseObject.md#method___construct) |  |  |
| public | [getBody()](../classes/YooKassa-Common-ResponseObject.md#method_getBody) |  | Возвращает тело ответа |
| public | [getCode()](../classes/YooKassa-Common-ResponseObject.md#method_getCode) |  | Возвращает HTTP код ответа |
| public | [getHeaders()](../classes/YooKassa-Common-ResponseObject.md#method_getHeaders) |  | Возвращает массив заголовков ответа |
---
### Details
* File: [lib/Common/ResponseObject.php](../../lib/Common/ResponseObject.php)
* Package: YooKassa
* Class Hierarchy:
  * \YooKassa\Common\ResponseObject
---
## Properties
<a name="property_body"></a>
#### protected $body : mixed
---
**Summary**

Тело ответа

**Type:** <a href="../mixed"><abbr title="mixed">mixed</abbr></a>

**Details:**


<a name="property_code"></a>
#### protected $code : int|string
---
**Summary**

HTTP код ответа

**Type:** <a href="../int|string"><abbr title="int|string">int|string</abbr></a>

**Details:**


<a name="property_headers"></a>
#### protected $headers : array
---
**Summary**

Массив заголовков ответа

**Type:** <a href="../array"><abbr title="array">array</abbr></a>

**Details:**



---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(mixed  config = null) : mixed
```

**Details:**
* Inherited From: [\YooKassa\Common\ResponseObject](../classes/YooKassa-Common-ResponseObject.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">mixed</code> | config  |  |

**Returns:** mixed - 


<a name="method_getBody" class="anchor"></a>
#### public getBody() : mixed

```php
public getBody() : mixed
```

**Summary**

Возвращает тело ответа

**Details:**
* Inherited From: [\YooKassa\Common\ResponseObject](../classes/YooKassa-Common-ResponseObject.md)

**Returns:** mixed - Тело ответа


<a name="method_getCode" class="anchor"></a>
#### public getCode() : int|string

```php
public getCode() : int|string
```

**Summary**

Возвращает HTTP код ответа

**Details:**
* Inherited From: [\YooKassa\Common\ResponseObject](../classes/YooKassa-Common-ResponseObject.md)

**Returns:** int|string - HTTP код ответа


<a name="method_getHeaders" class="anchor"></a>
#### public getHeaders() : array

```php
public getHeaders() : array
```

**Summary**

Возвращает массив заголовков ответа

**Details:**
* Inherited From: [\YooKassa\Common\ResponseObject](../classes/YooKassa-Common-ResponseObject.md)

**Returns:** array - Массив заголовков ответа



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