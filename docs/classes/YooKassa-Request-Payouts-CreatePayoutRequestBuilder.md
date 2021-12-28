# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Request\Payouts\CreatePayoutRequestBuilder
### Namespace: [\YooKassa\Request\Payouts](../namespaces/yookassa-request-payouts.md)
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
| protected | [$currentObject](../classes/YooKassa-Request-Payouts-CreatePayoutRequestBuilder.md#property_currentObject) |  | Собираемый объект запроса |

---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Common-AbstractRequestBuilder.md#method___construct) |  | Конструктор, инициализирует пустой запрос, который в будущем начнём собирать |
| public | [build()](../classes/YooKassa-Request-Payouts-CreatePayoutRequestBuilder.md#method_build) |  | Строит и возвращает объект запроса для отправки в API ЮKassa |
| public | [setAmount()](../classes/YooKassa-Request-Payouts-CreatePayoutRequestBuilder.md#method_setAmount) |  | Устанавливает сумму |
| public | [setDeal()](../classes/YooKassa-Request-Payouts-CreatePayoutRequestBuilder.md#method_setDeal) |  | Устанавливает сделку, в рамках которой нужно провести выплату |
| public | [setDescription()](../classes/YooKassa-Request-Payouts-CreatePayoutRequestBuilder.md#method_setDescription) |  | Устанавливает описание транзакции |
| public | [setMetadata()](../classes/YooKassa-Request-Payouts-CreatePayoutRequestBuilder.md#method_setMetadata) |  | Устанавливает метаданные, привязанные к платежу |
| public | [setOptions()](../classes/YooKassa-Common-AbstractRequestBuilder.md#method_setOptions) |  | Устанавливает свойства запроса из массива |
| public | [setPayoutDestinationData()](../classes/YooKassa-Request-Payouts-CreatePayoutRequestBuilder.md#method_setPayoutDestinationData) |  | Устанавливает объект с информацией для создания метода оплаты |
| public | [setPayoutToken()](../classes/YooKassa-Request-Payouts-CreatePayoutRequestBuilder.md#method_setPayoutToken) |  | Устанавливает одноразовый токен для проведения выплаты |
| protected | [initCurrentObject()](../classes/YooKassa-Request-Payouts-CreatePayoutRequestBuilder.md#method_initCurrentObject) |  | Инициализирует объект запроса, который в дальнейшем будет собираться билдером |

---
### Details
* File: [lib/Request/Payouts/CreatePayoutRequestBuilder.php](../../lib/Request/Payouts/CreatePayoutRequestBuilder.php)
* Package: YooKassa
* Class Hierarchy: 
  * [\YooKassa\Common\AbstractRequestBuilder](../classes/YooKassa-Common-AbstractRequestBuilder.md)
  * \YooKassa\Request\Payouts\CreatePayoutRequestBuilder

---
### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| todo: |  | @example 02-builder.php 11 78 Пример использования билдера |

---
## Properties
<a name="property_currentObject"></a>
#### protected $currentObject : \YooKassa\Request\Payouts\CreatePayoutRequest
---
**Summary**

Собираемый объект запроса

**Type:** <a href="../classes/YooKassa-Request-Payouts-CreatePayoutRequest.html"><abbr title="\YooKassa\Request\Payouts\CreatePayoutRequest">CreatePayoutRequest</abbr></a>

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
#### public build() : \YooKassa\Request\Payouts\CreatePayoutRequestInterface|\YooKassa\Request\Payouts\CreatePayoutRequest|\YooKassa\Common\AbstractRequest

```php
public build(array|null $options = null) : \YooKassa\Request\Payouts\CreatePayoutRequestInterface|\YooKassa\Request\Payouts\CreatePayoutRequest|\YooKassa\Common\AbstractRequest
```

**Summary**

Строит и возвращает объект запроса для отправки в API ЮKassa

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequestBuilder](../classes/YooKassa-Request-Payouts-CreatePayoutRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array OR null</code> | options  | Массив параметров для установки в объект запроса |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidRequestException | Выбрасывается если собрать объект запроса не удалось |

**Returns:** \YooKassa\Request\Payouts\CreatePayoutRequestInterface|\YooKassa\Request\Payouts\CreatePayoutRequest|\YooKassa\Common\AbstractRequest - Инстанс объекта запроса


<a name="method_setAmount" class="anchor"></a>
#### public setAmount() : self

```php
public setAmount(\YooKassa\Model\AmountInterface|array|string $value) : self
```

**Summary**

Устанавливает сумму

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequestBuilder](../classes/YooKassa-Request-Payouts-CreatePayoutRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\AmountInterface OR array OR string</code> | value  | Сумма выплаты |

**Returns:** self - Инстанс билдера запросов


<a name="method_setDeal" class="anchor"></a>
#### public setDeal() : mixed

```php
public setDeal(\YooKassa\Model\Deal\PayoutDealInfo|array $value) : mixed
```

**Summary**

Устанавливает сделку, в рамках которой нужно провести выплату

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequestBuilder](../classes/YooKassa-Request-Payouts-CreatePayoutRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\Deal\PayoutDealInfo OR array</code> | value  | Сделка, в рамках которой нужно провести выплату |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если был передан объект невалидного типа |

**Returns:** mixed - 


<a name="method_setDescription" class="anchor"></a>
#### public setDescription() : \YooKassa\Request\Payouts\CreatePayoutRequestBuilder

```php
public setDescription(string $value) : \YooKassa\Request\Payouts\CreatePayoutRequestBuilder
```

**Summary**

Устанавливает описание транзакции

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequestBuilder](../classes/YooKassa-Request-Payouts-CreatePayoutRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Описание транзакции |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если переданное значение превышает допустимую длину |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если переданное значение не является строкой |

**Returns:** \YooKassa\Request\Payouts\CreatePayoutRequestBuilder - Инстанс текущего билдера


<a name="method_setMetadata" class="anchor"></a>
#### public setMetadata() : \YooKassa\Request\Payouts\CreatePayoutRequestBuilder

```php
public setMetadata(\YooKassa\Model\Metadata|array|null $value) : \YooKassa\Request\Payouts\CreatePayoutRequestBuilder
```

**Summary**

Устанавливает метаданные, привязанные к платежу

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequestBuilder](../classes/YooKassa-Request-Payouts-CreatePayoutRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\Metadata OR array OR null</code> | value  | Метаданные платежа, устанавливаемые мерчантом |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если переданные данные не удалось интерпретировать как метаданные платежа |

**Returns:** \YooKassa\Request\Payouts\CreatePayoutRequestBuilder - Инстанс текущего билдера


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


<a name="method_setPayoutDestinationData" class="anchor"></a>
#### public setPayoutDestinationData() : mixed

```php
public setPayoutDestinationData(\YooKassa\Model\Payout\AbstractPayoutDestination|array|null $value) : mixed
```

**Summary**

Устанавливает объект с информацией для создания метода оплаты

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequestBuilder](../classes/YooKassa-Request-Payouts-CreatePayoutRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\Payout\AbstractPayoutDestination OR array OR null</code> | value  | Объект создания метода оплаты или null |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если был передан объект невалидного типа |

**Returns:** mixed - 


<a name="method_setPayoutToken" class="anchor"></a>
#### public setPayoutToken() : \YooKassa\Request\Payouts\CreatePayoutRequestBuilder

```php
public setPayoutToken(string $value) : \YooKassa\Request\Payouts\CreatePayoutRequestBuilder
```

**Summary**

Устанавливает одноразовый токен для проведения выплаты

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequestBuilder](../classes/YooKassa-Request-Payouts-CreatePayoutRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Одноразовый токен для проведения выплаты |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если переданное значение не является строкой |

**Returns:** \YooKassa\Request\Payouts\CreatePayoutRequestBuilder - Инстанс текущего билдера


<a name="method_initCurrentObject" class="anchor"></a>
#### protected initCurrentObject() : \YooKassa\Request\Payouts\CreatePayoutRequest

```php
protected initCurrentObject() : \YooKassa\Request\Payouts\CreatePayoutRequest
```

**Summary**

Инициализирует объект запроса, который в дальнейшем будет собираться билдером

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequestBuilder](../classes/YooKassa-Request-Payouts-CreatePayoutRequestBuilder.md)

**Returns:** \YooKassa\Request\Payouts\CreatePayoutRequest - Инстанс собираемого объекта запроса к API



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