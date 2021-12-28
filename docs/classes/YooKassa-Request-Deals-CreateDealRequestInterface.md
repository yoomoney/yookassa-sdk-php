# [YooKassa API SDK](../home.md)

# Interface: CreateDealRequestInterface
### Namespace: [\YooKassa\Request\Deals](../namespaces/yookassa-request-deals.md)
---
**Summary:**

Interface DealInterface

---
### Constants
* No constants found

---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getDescription()](../classes/YooKassa-Request-Deals-CreateDealRequestInterface.md#method_getDescription) |  | Возвращает описание сделки (не более 128 символов). |
| public | [getFeeMoment()](../classes/YooKassa-Request-Deals-CreateDealRequestInterface.md#method_getFeeMoment) |  | Возвращает момент перечисления вам вознаграждения платформы |
| public | [getMetadata()](../classes/YooKassa-Request-Deals-CreateDealRequestInterface.md#method_getMetadata) |  | Возвращает дополнительные данные сделки |
| public | [getType()](../classes/YooKassa-Request-Deals-CreateDealRequestInterface.md#method_getType) |  | Возвращает тип сделки |
| public | [hasDescription()](../classes/YooKassa-Request-Deals-CreateDealRequestInterface.md#method_hasDescription) |  | Проверяет наличие описания в создаваемой сделке |
| public | [hasFeeMoment()](../classes/YooKassa-Request-Deals-CreateDealRequestInterface.md#method_hasFeeMoment) |  | Проверяет наличие момента перечисления вознаграждения в создаваемой сделке |
| public | [hasMetadata()](../classes/YooKassa-Request-Deals-CreateDealRequestInterface.md#method_hasMetadata) |  | Проверяет, были ли установлены метаданные сделки |
| public | [hasType()](../classes/YooKassa-Request-Deals-CreateDealRequestInterface.md#method_hasType) |  | Проверяет наличие типа в создаваемой сделке |
| public | [setDescription()](../classes/YooKassa-Request-Deals-CreateDealRequestInterface.md#method_setDescription) |  | Устанавливает описание сделки |
| public | [setFeeMoment()](../classes/YooKassa-Request-Deals-CreateDealRequestInterface.md#method_setFeeMoment) |  | Устанавливает момент перечисления вознаграждения платформы |
| public | [setMetadata()](../classes/YooKassa-Request-Deals-CreateDealRequestInterface.md#method_setMetadata) |  | Устанавливает метаданные, привязанные к сделке |
| public | [setType()](../classes/YooKassa-Request-Deals-CreateDealRequestInterface.md#method_setType) |  | Устанавливает тип сделки |

---
### Details
* File: [lib/Request/Deals/CreateDealRequestInterface.php](../../lib/Request/Deals/CreateDealRequestInterface.php)
* Package: \YooKassa

---
### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| property |  | Тип сделки |
| property |  | Момент перечисления вознаграждения |
| property |  | Момент перечисления вознаграждения |
| property |  | Описание сделки |
| property |  | Дополнительные данные сделки |

---
## Methods
<a name="method_getType" class="anchor"></a>
#### public getType() : string

```php
public getType() : string
```

**Summary**

Возвращает тип сделки

**Details:**
* Inherited From: [\YooKassa\Request\Deals\CreateDealRequestInterface](../classes/YooKassa-Request-Deals-CreateDealRequestInterface.md)

**Returns:** string - Тип сделки


<a name="method_hasType" class="anchor"></a>
#### public hasType() : bool

```php
public hasType() : bool
```

**Summary**

Проверяет наличие типа в создаваемой сделке

**Details:**
* Inherited From: [\YooKassa\Request\Deals\CreateDealRequestInterface](../classes/YooKassa-Request-Deals-CreateDealRequestInterface.md)

**Returns:** bool - True если тип сделки установлен, false если нет


<a name="method_setType" class="anchor"></a>
#### public setType() : mixed

```php
public setType(string $value) : mixed
```

**Summary**

Устанавливает тип сделки

**Details:**
* Inherited From: [\YooKassa\Request\Deals\CreateDealRequestInterface](../classes/YooKassa-Request-Deals-CreateDealRequestInterface.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Тип сделки |

**Returns:** mixed - 


<a name="method_getFeeMoment" class="anchor"></a>
#### public getFeeMoment() : string

```php
public getFeeMoment() : string
```

**Summary**

Возвращает момент перечисления вам вознаграждения платформы

**Details:**
* Inherited From: [\YooKassa\Request\Deals\CreateDealRequestInterface](../classes/YooKassa-Request-Deals-CreateDealRequestInterface.md)

**Returns:** string - Момент перечисления вознаграждения


<a name="method_hasFeeMoment" class="anchor"></a>
#### public hasFeeMoment() : bool

```php
public hasFeeMoment() : bool
```

**Summary**

Проверяет наличие момента перечисления вознаграждения в создаваемой сделке

**Details:**
* Inherited From: [\YooKassa\Request\Deals\CreateDealRequestInterface](../classes/YooKassa-Request-Deals-CreateDealRequestInterface.md)

**Returns:** bool - True если момент перечисления вознаграждения установлен, false если нет


<a name="method_setFeeMoment" class="anchor"></a>
#### public setFeeMoment() : mixed

```php
public setFeeMoment(string $value) : mixed
```

**Summary**

Устанавливает момент перечисления вознаграждения платформы

**Details:**
* Inherited From: [\YooKassa\Request\Deals\CreateDealRequestInterface](../classes/YooKassa-Request-Deals-CreateDealRequestInterface.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Момент перечисления вознаграждения |

**Returns:** mixed - 


<a name="method_getDescription" class="anchor"></a>
#### public getDescription() : string

```php
public getDescription() : string
```

**Summary**

Возвращает описание сделки (не более 128 символов).

**Details:**
* Inherited From: [\YooKassa\Request\Deals\CreateDealRequestInterface](../classes/YooKassa-Request-Deals-CreateDealRequestInterface.md)

**Returns:** string - Описание сделки


<a name="method_hasDescription" class="anchor"></a>
#### public hasDescription() : bool

```php
public hasDescription() : bool
```

**Summary**

Проверяет наличие описания в создаваемой сделке

**Details:**
* Inherited From: [\YooKassa\Request\Deals\CreateDealRequestInterface](../classes/YooKassa-Request-Deals-CreateDealRequestInterface.md)

**Returns:** bool - True если описание сделки установлено, false если нет


<a name="method_setDescription" class="anchor"></a>
#### public setDescription() : mixed

```php
public setDescription(string $value) : mixed
```

**Summary**

Устанавливает описание сделки

**Details:**
* Inherited From: [\YooKassa\Request\Deals\CreateDealRequestInterface](../classes/YooKassa-Request-Deals-CreateDealRequestInterface.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Описание сделки |

**Returns:** mixed - 


<a name="method_getMetadata" class="anchor"></a>
#### public getMetadata() : \YooKassa\Model\Metadata

```php
public getMetadata() : \YooKassa\Model\Metadata
```

**Summary**

Возвращает дополнительные данные сделки

**Details:**
* Inherited From: [\YooKassa\Request\Deals\CreateDealRequestInterface](../classes/YooKassa-Request-Deals-CreateDealRequestInterface.md)

**Returns:** \YooKassa\Model\Metadata - Дополнительные данные сделки


<a name="method_hasMetadata" class="anchor"></a>
#### public hasMetadata() : bool

```php
public hasMetadata() : bool
```

**Summary**

Проверяет, были ли установлены метаданные сделки

**Details:**
* Inherited From: [\YooKassa\Request\Deals\CreateDealRequestInterface](../classes/YooKassa-Request-Deals-CreateDealRequestInterface.md)

**Returns:** bool - True если метаданные были установлены, false если нет


<a name="method_setMetadata" class="anchor"></a>
#### public setMetadata() : mixed

```php
public setMetadata(\YooKassa\Model\Metadata|array|null $value) : mixed
```

**Summary**

Устанавливает метаданные, привязанные к сделке

**Details:**
* Inherited From: [\YooKassa\Request\Deals\CreateDealRequestInterface](../classes/YooKassa-Request-Deals-CreateDealRequestInterface.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\Metadata OR array OR null</code> | value  | Метаданные сделки, устанавливаемые мерчантом |

**Returns:** mixed - 




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