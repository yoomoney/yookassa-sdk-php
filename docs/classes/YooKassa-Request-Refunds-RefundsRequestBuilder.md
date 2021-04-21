# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Request\Refunds\RefundsRequestBuilder
### Namespace: [\YooKassa\Request\Refunds](../namespaces/yookassa-request-refunds.md)
---
**Summary:**

Класс билдера объектов запросов к API списка возвратов

---
### Constants
* No constants found
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$currentObject](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md#property_currentObject) |  | Инстанс собираемого запроса |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Common-AbstractRequestBuilder.md#method___construct) |  | Конструктор, инициализирует пустой запрос, который в будущем начнём собирать |
| public | [build()](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md#method_build) |  | Собирает и возвращает объект запроса списка возвратов магазина |
| public | [setCreatedAtGt()](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md#method_setCreatedAtGt) |  | Устанавливает дату создания от которой выбираются возвраты |
| public | [setCreatedAtGte()](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md#method_setCreatedAtGte) |  | Устанавливает дату создания от которой выбираются возвраты |
| public | [setCreatedAtLt()](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md#method_setCreatedAtLt) |  | Устанавливает дату создания до которой выбираются возвраты |
| public | [setCreatedAtLte()](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md#method_setCreatedAtLte) |  | Устанавливает дату создания до которой выбираются возвраты |
| public | [setCursor()](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md#method_setCursor) |  | Устанавливает токен следующей страницы выборки |
| public | [setLimit()](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md#method_setLimit) |  | Устанавливает ограничение количества объектов возвратов |
| public | [setOptions()](../classes/YooKassa-Common-AbstractRequestBuilder.md#method_setOptions) |  | Устанавливает свойства запроса из массива |
| public | [setPaymentId()](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md#method_setPaymentId) |  | Устанавливает идентификатор платежа или null если требуется его удалить |
| public | [setStatus()](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md#method_setStatus) |  | Устанавливает статус выбираемых возвратов |
| protected | [initCurrentObject()](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md#method_initCurrentObject) |  | Инициализирует новый инстанс собираемого объекта |
---
### Details
* File: [lib/Request/Refunds/RefundsRequestBuilder.php](../../lib/Request/Refunds/RefundsRequestBuilder.php)
* Package: YooKassa
* Class Hierarchy: 
  * [\YooKassa\Common\AbstractRequestBuilder](../classes/YooKassa-Common-AbstractRequestBuilder.md)
  * \YooKassa\Request\Refunds\RefundsRequestBuilder
---
## Properties
<a name="property_currentObject"></a>
#### protected $currentObject : \YooKassa\Request\Refunds\RefundsRequest
---
**Summary**

Инстанс собираемого запроса

**Type:** <a href="../classes/YooKassa-Request-Refunds-RefundsRequest.html"><abbr title="\YooKassa\Request\Refunds\RefundsRequest">RefundsRequest</abbr></a>
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
#### public build() : \YooKassa\Request\Refunds\RefundsRequestInterface|\YooKassa\Common\AbstractRequest

```php
public build(array|null  options = null) : \YooKassa\Request\Refunds\RefundsRequestInterface|\YooKassa\Common\AbstractRequest
```

**Summary**

Собирает и возвращает объект запроса списка возвратов магазина

**Details:**
* Inherited From: [\YooKassa\Request\Refunds\RefundsRequestBuilder](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array OR null</code> | options  | Массив с настройками запроса |

**Returns:** \YooKassa\Request\Refunds\RefundsRequestInterface|\YooKassa\Common\AbstractRequest - Инстанс объекта запроса к API для получения списка возвратов магазина


<a name="method_setCreatedAtGt" class="anchor"></a>
#### public setCreatedAtGt() : \YooKassa\Request\Refunds\RefundsRequestBuilder

```php
public setCreatedAtGt(\DateTime|string|int|null  value) : \YooKassa\Request\Refunds\RefundsRequestBuilder
```

**Summary**

Устанавливает дату создания от которой выбираются возвраты

**Details:**
* Inherited From: [\YooKassa\Request\Refunds\RefundsRequestBuilder](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время создания, от (не включая) или null чтобы удалить значение |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** \YooKassa\Request\Refunds\RefundsRequestBuilder - Инстанс текущего объекта билдера


<a name="method_setCreatedAtGte" class="anchor"></a>
#### public setCreatedAtGte() : \YooKassa\Request\Refunds\RefundsRequestBuilder

```php
public setCreatedAtGte(\DateTime|string|int|null  value) : \YooKassa\Request\Refunds\RefundsRequestBuilder
```

**Summary**

Устанавливает дату создания от которой выбираются возвраты

**Details:**
* Inherited From: [\YooKassa\Request\Refunds\RefundsRequestBuilder](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время создания, от (включительно) или null чтобы удалить значение |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** \YooKassa\Request\Refunds\RefundsRequestBuilder - Инстанс текущего объекта билдера


<a name="method_setCreatedAtLt" class="anchor"></a>
#### public setCreatedAtLt() : \YooKassa\Request\Refunds\RefundsRequestBuilder

```php
public setCreatedAtLt(\DateTime|string|int|null  value) : \YooKassa\Request\Refunds\RefundsRequestBuilder
```

**Summary**

Устанавливает дату создания до которой выбираются возвраты

**Details:**
* Inherited From: [\YooKassa\Request\Refunds\RefundsRequestBuilder](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время создания, до (не включая) или null чтобы удалить значение |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** \YooKassa\Request\Refunds\RefundsRequestBuilder - Инстанс текущего объекта билдера


<a name="method_setCreatedAtLte" class="anchor"></a>
#### public setCreatedAtLte() : \YooKassa\Request\Refunds\RefundsRequestBuilder

```php
public setCreatedAtLte(\DateTime|string|int|null  value) : \YooKassa\Request\Refunds\RefundsRequestBuilder
```

**Summary**

Устанавливает дату создания до которой выбираются возвраты

**Details:**
* Inherited From: [\YooKassa\Request\Refunds\RefundsRequestBuilder](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время создания, до (включительно) или null чтобы удалить значение |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** \YooKassa\Request\Refunds\RefundsRequestBuilder - Инстанс текущего объекта билдера


<a name="method_setCursor" class="anchor"></a>
#### public setCursor() : \YooKassa\Request\Refunds\RefundsRequestBuilder

```php
public setCursor(string  value) : \YooKassa\Request\Refunds\RefundsRequestBuilder
```

**Summary**

Устанавливает токен следующей страницы выборки

**Details:**
* Inherited From: [\YooKassa\Request\Refunds\RefundsRequestBuilder](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Токен следующей страницы выборки или null чтобы удалить значение |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод была передана не строка |

**Returns:** \YooKassa\Request\Refunds\RefundsRequestBuilder - Инстанс текущего объекта билдера


<a name="method_setLimit" class="anchor"></a>
#### public setLimit() : \YooKassa\Request\Refunds\RefundsRequestBuilder

```php
public setLimit(string  value) : \YooKassa\Request\Refunds\RefundsRequestBuilder
```

**Summary**

Устанавливает ограничение количества объектов возвратов

**Details:**
* Inherited From: [\YooKassa\Request\Refunds\RefundsRequestBuilder](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Ограничение количества объектов возвратов или null чтобы удалить значение |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод было передана не целое число |

**Returns:** \YooKassa\Request\Refunds\RefundsRequestBuilder - Инстанс текущего билдера


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
#### public setPaymentId() : \YooKassa\Request\Refunds\RefundsRequestBuilder

```php
public setPaymentId(string|null  value) : \YooKassa\Request\Refunds\RefundsRequestBuilder
```

**Summary**

Устанавливает идентификатор платежа или null если требуется его удалить

**Details:**
* Inherited From: [\YooKassa\Request\Refunds\RefundsRequestBuilder](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string OR null</code> | value  | Идентификатор платежа |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если длина переданной строки не равна 36 символам |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод была передана не строка |

**Returns:** \YooKassa\Request\Refunds\RefundsRequestBuilder - Инстанс текущего объекта билдера


<a name="method_setStatus" class="anchor"></a>
#### public setStatus() : \YooKassa\Request\Refunds\RefundsRequestBuilder

```php
public setStatus(string  value) : \YooKassa\Request\Refunds\RefundsRequestBuilder
```

**Summary**

Устанавливает статус выбираемых возвратов

**Details:**
* Inherited From: [\YooKassa\Request\Refunds\RefundsRequestBuilder](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Статус выбираемых платежей или null чтобы удалить значение |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если переданное значение не является валидным статусом |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод была передана не строка |

**Returns:** \YooKassa\Request\Refunds\RefundsRequestBuilder - Инстанс текущего объекта билдера


<a name="method_initCurrentObject" class="anchor"></a>
#### protected initCurrentObject() : \YooKassa\Request\Refunds\RefundsRequest

```php
protected initCurrentObject() : \YooKassa\Request\Refunds\RefundsRequest
```

**Summary**

Инициализирует новый инстанс собираемого объекта

**Details:**
* Inherited From: [\YooKassa\Request\Refunds\RefundsRequestBuilder](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md)

**Returns:** \YooKassa\Request\Refunds\RefundsRequest - Инстанс собираемого запроса



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