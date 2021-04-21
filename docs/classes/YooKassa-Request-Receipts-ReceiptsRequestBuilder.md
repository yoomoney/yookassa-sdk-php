# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Request\Receipts\ReceiptsRequestBuilder
### Namespace: [\YooKassa\Request\Receipts](../namespaces/yookassa-request-receipts.md)
---
**Summary:**

Класс билдера объектов запросов к API списка чеков

---
### Constants
* No constants found
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$currentObject](../classes/YooKassa-Request-Receipts-ReceiptsRequestBuilder.md#property_currentObject) |  | Инстанс собираемого запроса |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Common-AbstractRequestBuilder.md#method___construct) |  | Конструктор, инициализирует пустой запрос, который в будущем начнём собирать |
| public | [build()](../classes/YooKassa-Request-Receipts-ReceiptsRequestBuilder.md#method_build) |  | Собирает и возвращает объект запроса списка чеков магазина |
| public | [setCreatedAtGt()](../classes/YooKassa-Request-Receipts-ReceiptsRequestBuilder.md#method_setCreatedAtGt) |  | Устанавливает дату создания от которой выбираются чеки |
| public | [setCreatedAtGte()](../classes/YooKassa-Request-Receipts-ReceiptsRequestBuilder.md#method_setCreatedAtGte) |  | Устанавливает дату создания от которой выбираются чеки |
| public | [setCreatedAtLt()](../classes/YooKassa-Request-Receipts-ReceiptsRequestBuilder.md#method_setCreatedAtLt) |  | Устанавливает дату создания до которой выбираются чеки |
| public | [setCreatedAtLte()](../classes/YooKassa-Request-Receipts-ReceiptsRequestBuilder.md#method_setCreatedAtLte) |  | Устанавливает дату создания до которой выбираются чеки |
| public | [setCursor()](../classes/YooKassa-Request-Receipts-ReceiptsRequestBuilder.md#method_setCursor) |  | Устанавливает токен следующей страницы выборки |
| public | [setLimit()](../classes/YooKassa-Request-Receipts-ReceiptsRequestBuilder.md#method_setLimit) |  | Устанавливает ограничение количества объектов чеков |
| public | [setOptions()](../classes/YooKassa-Common-AbstractRequestBuilder.md#method_setOptions) |  | Устанавливает свойства запроса из массива |
| public | [setPaymentId()](../classes/YooKassa-Request-Receipts-ReceiptsRequestBuilder.md#method_setPaymentId) |  | Устанавливает идентификатор платежа или null если требуется его удалить |
| public | [setRefundId()](../classes/YooKassa-Request-Receipts-ReceiptsRequestBuilder.md#method_setRefundId) |  | Устанавливает идентификатор возврата |
| public | [setStatus()](../classes/YooKassa-Request-Receipts-ReceiptsRequestBuilder.md#method_setStatus) |  | Устанавливает статус выбираемых чеков |
| protected | [initCurrentObject()](../classes/YooKassa-Request-Receipts-ReceiptsRequestBuilder.md#method_initCurrentObject) |  | Инициализирует новый инстанс собираемого объекта |
---
### Details
* File: [lib/Request/Receipts/ReceiptsRequestBuilder.php](../../lib/Request/Receipts/ReceiptsRequestBuilder.php)
* Package: YooKassa
* Class Hierarchy: 
  * [\YooKassa\Common\AbstractRequestBuilder](../classes/YooKassa-Common-AbstractRequestBuilder.md)
  * \YooKassa\Request\Receipts\ReceiptsRequestBuilder
---
## Properties
<a name="property_currentObject"></a>
#### protected $currentObject : \YooKassa\Request\Receipts\ReceiptsRequest
---
**Summary**

Инстанс собираемого запроса

**Type:** <a href="../classes/YooKassa-Request-Receipts-ReceiptsRequest.html"><abbr title="\YooKassa\Request\Receipts\ReceiptsRequest">ReceiptsRequest</abbr></a>
Инстанс собираемого объекта запроса
**Details:**



---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct() : mixed
```

**Summary**

Конструктор, инициализирует пустой запрос, который в будущем начнём собирать

**Details:**
* Inherited From: [\YooKassa\Common\AbstractRequestBuilder](../classes/YooKassa-Common-AbstractRequestBuilder.md)

**Returns:** mixed - 


<a name="method_build" class="anchor"></a>
#### public build() : \YooKassa\Request\Receipts\ReceiptsRequestInterface|\YooKassa\Common\AbstractRequest

```php
public build(array|null  options = null) : \YooKassa\Request\Receipts\ReceiptsRequestInterface|\YooKassa\Common\AbstractRequest
```

**Summary**

Собирает и возвращает объект запроса списка чеков магазина

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequestBuilder](../classes/YooKassa-Request-Receipts-ReceiptsRequestBuilder.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array OR null</code> | options  | Массив с настройками запроса |

**Returns:** \YooKassa\Request\Receipts\ReceiptsRequestInterface|\YooKassa\Common\AbstractRequest - Инстанс объекта запроса к API для получения списка чеков магазина


<a name="method_setCreatedAtGt" class="anchor"></a>
#### public setCreatedAtGt() : \YooKassa\Request\Receipts\ReceiptsRequestBuilder

```php
public setCreatedAtGt(\DateTime|string|int|null  value) : \YooKassa\Request\Receipts\ReceiptsRequestBuilder
```

**Summary**

Устанавливает дату создания от которой выбираются чеки

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequestBuilder](../classes/YooKassa-Request-Receipts-ReceiptsRequestBuilder.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время создания, от (не включая) или null чтобы удалить значение |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** \YooKassa\Request\Receipts\ReceiptsRequestBuilder - Инстанс текущего объекта билдера


<a name="method_setCreatedAtGte" class="anchor"></a>
#### public setCreatedAtGte() : \YooKassa\Request\Receipts\ReceiptsRequestBuilder

```php
public setCreatedAtGte(\DateTime|string|int|null  value) : \YooKassa\Request\Receipts\ReceiptsRequestBuilder
```

**Summary**

Устанавливает дату создания от которой выбираются чеки

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequestBuilder](../classes/YooKassa-Request-Receipts-ReceiptsRequestBuilder.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время создания, от (включительно) или null чтобы удалить значение |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** \YooKassa\Request\Receipts\ReceiptsRequestBuilder - Инстанс текущего объекта билдера


<a name="method_setCreatedAtLt" class="anchor"></a>
#### public setCreatedAtLt() : \YooKassa\Request\Receipts\ReceiptsRequestBuilder

```php
public setCreatedAtLt(\DateTime|string|int|null  value) : \YooKassa\Request\Receipts\ReceiptsRequestBuilder
```

**Summary**

Устанавливает дату создания до которой выбираются чеки

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequestBuilder](../classes/YooKassa-Request-Receipts-ReceiptsRequestBuilder.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время создания, до (не включая) или null чтобы удалить значение |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** \YooKassa\Request\Receipts\ReceiptsRequestBuilder - Инстанс текущего объекта билдера


<a name="method_setCreatedAtLte" class="anchor"></a>
#### public setCreatedAtLte() : \YooKassa\Request\Receipts\ReceiptsRequestBuilder

```php
public setCreatedAtLte(\DateTime|string|int|null  value) : \YooKassa\Request\Receipts\ReceiptsRequestBuilder
```

**Summary**

Устанавливает дату создания до которой выбираются чеки

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequestBuilder](../classes/YooKassa-Request-Receipts-ReceiptsRequestBuilder.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время создания, до (включительно) или null чтобы удалить значение |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** \YooKassa\Request\Receipts\ReceiptsRequestBuilder - Инстанс текущего объекта билдера


<a name="method_setCursor" class="anchor"></a>
#### public setCursor() : \YooKassa\Request\Receipts\ReceiptsRequestBuilder

```php
public setCursor(string  value) : \YooKassa\Request\Receipts\ReceiptsRequestBuilder
```

**Summary**

Устанавливает токен следующей страницы выборки

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequestBuilder](../classes/YooKassa-Request-Receipts-ReceiptsRequestBuilder.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Токен следующей страницы выборки или null чтобы удалить значение |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод была передана не строка |

**Returns:** \YooKassa\Request\Receipts\ReceiptsRequestBuilder - Инстанс текущего объекта билдера


<a name="method_setLimit" class="anchor"></a>
#### public setLimit() : \YooKassa\Request\Receipts\ReceiptsRequestBuilder

```php
public setLimit(string  value) : \YooKassa\Request\Receipts\ReceiptsRequestBuilder
```

**Summary**

Устанавливает ограничение количества объектов чеков

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequestBuilder](../classes/YooKassa-Request-Receipts-ReceiptsRequestBuilder.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Ограничение количества объектов чеков или null чтобы удалить значение |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод было передана не целое число |

**Returns:** \YooKassa\Request\Receipts\ReceiptsRequestBuilder - Инстанс текущего билдера


<a name="method_setOptions" class="anchor"></a>
#### public setOptions() : \YooKassa\Common\AbstractRequestBuilder

```php
public setOptions(array|\Traversable  options) : \YooKassa\Common\AbstractRequestBuilder
```

**Summary**

Устанавливает свойства запроса из массива

**Details:**
* Inherited From: [\YooKassa\Common\AbstractRequestBuilder](../classes/YooKassa-Common-AbstractRequestBuilder.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array OR \Traversable</code> | options  | Массив свойств запроса |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \InvalidArgumentException | Выбрасывается если аргумент не массив и не итерируемый объект |
| \YooKassa\Common\Exceptions\InvalidPropertyException | Выбрасывается если не удалось установить один из параметров, переданныч в массиве настроек |

**Returns:** \YooKassa\Common\AbstractRequestBuilder - Инстанс текущего билдера запросов


<a name="method_setPaymentId" class="anchor"></a>
#### public setPaymentId() : \YooKassa\Request\Receipts\ReceiptsRequestBuilder

```php
public setPaymentId(string|null  value) : \YooKassa\Request\Receipts\ReceiptsRequestBuilder
```

**Summary**

Устанавливает идентификатор платежа или null если требуется его удалить

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequestBuilder](../classes/YooKassa-Request-Receipts-ReceiptsRequestBuilder.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string OR null</code> | value  | Идентификатор платежа |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если длина переданной строки не равна 36 символам |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод была передана не строка |

**Returns:** \YooKassa\Request\Receipts\ReceiptsRequestBuilder - Инстанс текущего объекта билдера


<a name="method_setRefundId" class="anchor"></a>
#### public setRefundId() : \YooKassa\Request\Receipts\ReceiptsRequestBuilder

```php
public setRefundId(string  value) : \YooKassa\Request\Receipts\ReceiptsRequestBuilder
```

**Summary**

Устанавливает идентификатор возврата

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequestBuilder](../classes/YooKassa-Request-Receipts-ReceiptsRequestBuilder.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Идентификатор возврата, который ищется в API |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если длина переданного значения не равна 36 |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод была передана не строка |

**Returns:** \YooKassa\Request\Receipts\ReceiptsRequestBuilder - Инстанс текущего объекта билдера


<a name="method_setStatus" class="anchor"></a>
#### public setStatus() : \YooKassa\Request\Receipts\ReceiptsRequestBuilder

```php
public setStatus(string  value) : \YooKassa\Request\Receipts\ReceiptsRequestBuilder
```

**Summary**

Устанавливает статус выбираемых чеков

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequestBuilder](../classes/YooKassa-Request-Receipts-ReceiptsRequestBuilder.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Статус выбираемых платежей или null чтобы удалить значение |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если переданное значение не является валидным статусом |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод была передана не строка |

**Returns:** \YooKassa\Request\Receipts\ReceiptsRequestBuilder - Инстанс текущего объекта билдера


<a name="method_initCurrentObject" class="anchor"></a>
#### protected initCurrentObject() : \YooKassa\Request\Receipts\ReceiptsRequest

```php
protected initCurrentObject() : \YooKassa\Request\Receipts\ReceiptsRequest
```

**Summary**

Инициализирует новый инстанс собираемого объекта

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequestBuilder](../classes/YooKassa-Request-Receipts-ReceiptsRequestBuilder.md)

**Returns:** \YooKassa\Request\Receipts\ReceiptsRequest - Инстанс собираемого запроса



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