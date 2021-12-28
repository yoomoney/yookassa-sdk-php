# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Request\Deals\CreateDealRequestBuilder
### Namespace: [\YooKassa\Request\Deals](../namespaces/yookassa-request-deals.md)
---
**Summary:**

Класс билдера объектов запросов к API на создание платежа


---
### Constants
* No constants found

---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$currentObject](../classes/YooKassa-Request-Deals-CreateDealRequestBuilder.md#property_currentObject) |  | Собираемый объект запроса |

---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Common-AbstractRequestBuilder.md#method___construct) |  | Конструктор, инициализирует пустой запрос, который в будущем начнём собирать |
| public | [build()](../classes/YooKassa-Request-Deals-CreateDealRequestBuilder.md#method_build) |  | Строит запрос, валидирует его и возвращает, если все прошло нормально |
| public | [setDescription()](../classes/YooKassa-Request-Deals-CreateDealRequestBuilder.md#method_setDescription) |  | Устанавливает описание транзакции |
| public | [setFeeMoment()](../classes/YooKassa-Request-Deals-CreateDealRequestBuilder.md#method_setFeeMoment) |  | Устанавливает момент перечисления вам вознаграждения платформы |
| public | [setMetadata()](../classes/YooKassa-Request-Deals-CreateDealRequestBuilder.md#method_setMetadata) |  | Устанавливает метаданные, привязанные к платежу |
| public | [setOptions()](../classes/YooKassa-Common-AbstractRequestBuilder.md#method_setOptions) |  | Устанавливает свойства запроса из массива |
| public | [setType()](../classes/YooKassa-Request-Deals-CreateDealRequestBuilder.md#method_setType) |  | Устанавливает тип сделки |
| protected | [initCurrentObject()](../classes/YooKassa-Request-Deals-CreateDealRequestBuilder.md#method_initCurrentObject) |  | Инициализирует объект запроса, который в дальнейшем будет собираться билдером |

---
### Details
* File: [lib/Request/Deals/CreateDealRequestBuilder.php](../../lib/Request/Deals/CreateDealRequestBuilder.php)
* Package: YooKassa
* Class Hierarchy: 
  * [\YooKassa\Common\AbstractRequestBuilder](../classes/YooKassa-Common-AbstractRequestBuilder.md)
  * \YooKassa\Request\Deals\CreateDealRequestBuilder

---
### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| todo: |  | @example 02-builder.php 11 78 Пример использования билдера |

---
## Properties
<a name="property_currentObject"></a>
#### protected $currentObject : \YooKassa\Request\Deals\CreateDealRequest
---
**Summary**

Собираемый объект запроса

**Type:** <a href="../classes/YooKassa-Request-Deals-CreateDealRequest.html"><abbr title="\YooKassa\Request\Deals\CreateDealRequest">CreateDealRequest</abbr></a>

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
#### public build() : \YooKassa\Request\Deals\CreateDealRequest|\YooKassa\Common\AbstractRequest

```php
public build(array|null $options = null) : \YooKassa\Request\Deals\CreateDealRequest|\YooKassa\Common\AbstractRequest
```

**Summary**

Строит запрос, валидирует его и возвращает, если все прошло нормально

**Details:**
* Inherited From: [\YooKassa\Request\Deals\CreateDealRequestBuilder](../classes/YooKassa-Request-Deals-CreateDealRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array OR null</code> | options  |  |

**Returns:** \YooKassa\Request\Deals\CreateDealRequest|\YooKassa\Common\AbstractRequest - 


<a name="method_setDescription" class="anchor"></a>
#### public setDescription() : \YooKassa\Request\Deals\CreateDealRequestBuilder

```php
public setDescription(string $value) : \YooKassa\Request\Deals\CreateDealRequestBuilder
```

**Summary**

Устанавливает описание транзакции

**Details:**
* Inherited From: [\YooKassa\Request\Deals\CreateDealRequestBuilder](../classes/YooKassa-Request-Deals-CreateDealRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Описание транзакции |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если переданное значение превышает допустимую длину |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если переданное значение не является строкой |

**Returns:** \YooKassa\Request\Deals\CreateDealRequestBuilder - Инстанс текущего билдера


<a name="method_setFeeMoment" class="anchor"></a>
#### public setFeeMoment() : \YooKassa\Request\Deals\CreateDealRequestBuilder

```php
public setFeeMoment(string $value) : \YooKassa\Request\Deals\CreateDealRequestBuilder
```

**Summary**

Устанавливает момент перечисления вам вознаграждения платформы

**Details:**
* Inherited From: [\YooKassa\Request\Deals\CreateDealRequestBuilder](../classes/YooKassa-Request-Deals-CreateDealRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Момент перечисления вам вознаграждения платформы |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Генерируется если переданный аргумент не является строкой |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если переданный аргумент не из списка FeeMoment |

**Returns:** \YooKassa\Request\Deals\CreateDealRequestBuilder - Инстанс текущего билдера


<a name="method_setMetadata" class="anchor"></a>
#### public setMetadata() : \YooKassa\Request\Deals\CreateDealRequestBuilder

```php
public setMetadata(\YooKassa\Model\Metadata|array|null $value) : \YooKassa\Request\Deals\CreateDealRequestBuilder
```

**Summary**

Устанавливает метаданные, привязанные к платежу

**Details:**
* Inherited From: [\YooKassa\Request\Deals\CreateDealRequestBuilder](../classes/YooKassa-Request-Deals-CreateDealRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\Metadata OR array OR null</code> | value  | Метаданные платежа, устанавливаемые мерчантом |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если переданные данные не удалось интерпретировать как метаданные платежа |

**Returns:** \YooKassa\Request\Deals\CreateDealRequestBuilder - Инстанс текущего билдера


<a name="method_setOptions" class="anchor"></a>
#### public setOptions() : \YooKassa\Common\AbstractRequestBuilder

```php
public setOptions(array|\Traversable $options) : \YooKassa\Common\AbstractRequestBuilder
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


<a name="method_setType" class="anchor"></a>
#### public setType() : \YooKassa\Request\Deals\CreateDealRequestBuilder

```php
public setType(string $value) : \YooKassa\Request\Deals\CreateDealRequestBuilder
```

**Summary**

Устанавливает тип сделки

**Details:**
* Inherited From: [\YooKassa\Request\Deals\CreateDealRequestBuilder](../classes/YooKassa-Request-Deals-CreateDealRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Тип сделки |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Генерируется если переданный аргумент не является строкой |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если переданный аргумент не из списка DealType |

**Returns:** \YooKassa\Request\Deals\CreateDealRequestBuilder - Инстанс текущего билдера


<a name="method_initCurrentObject" class="anchor"></a>
#### protected initCurrentObject() : \YooKassa\Request\Deals\CreateDealRequest

```php
protected initCurrentObject() : \YooKassa\Request\Deals\CreateDealRequest
```

**Summary**

Инициализирует объект запроса, который в дальнейшем будет собираться билдером

**Details:**
* Inherited From: [\YooKassa\Request\Deals\CreateDealRequestBuilder](../classes/YooKassa-Request-Deals-CreateDealRequestBuilder.md)

**Returns:** \YooKassa\Request\Deals\CreateDealRequest - Инстанс собираемого объекта запроса к API



---

### Top Namespaces

* [\YooKassa](../namespaces/yookassa.md)

---

### Reports
* [Errors - 0](../reports/errors.md)
* [Markers - 0](../reports/markers.md)
* [Deprecated - 13](../reports/deprecated.md)

---

This document was automatically generated from source code comments on 2021-12-28 using [phpDocumentor](http://www.phpdoc.org/)

&copy; 2021 YooMoney