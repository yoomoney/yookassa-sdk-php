# [YooKassa API SDK](../home.md)

# Interface: PayoutInterface
### Namespace: [\YooKassa\Model](../namespaces/yookassa-model.md)
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
| public | [getAmount()](../classes/YooKassa-Model-PayoutInterface.md#method_getAmount) |  | Возвращает баланс сделки |
| public | [getCancellationDetails()](../classes/YooKassa-Model-PayoutInterface.md#method_getCancellationDetails) |  | Возвращает комментарий к статусу canceled: кто отменил выплату и по какой причине. |
| public | [getCreatedAt()](../classes/YooKassa-Model-PayoutInterface.md#method_getCreatedAt) |  | Возвращает время создания сделки |
| public | [getDeal()](../classes/YooKassa-Model-PayoutInterface.md#method_getDeal) |  | Возвращает сделку, в рамках которой нужно провести выплату. |
| public | [getDescription()](../classes/YooKassa-Model-PayoutInterface.md#method_getDescription) |  | Возвращает описание транзакции (не более 128 символов) |
| public | [getId()](../classes/YooKassa-Model-PayoutInterface.md#method_getId) |  | Возвращает Id сделки |
| public | [getMetadata()](../classes/YooKassa-Model-PayoutInterface.md#method_getMetadata) |  | Возвращает дополнительные данные сделки |
| public | [getPayoutDestination()](../classes/YooKassa-Model-PayoutInterface.md#method_getPayoutDestination) |  | Возвращает платежное средство продавца, на которое ЮKassa переводит оплату |
| public | [getStatus()](../classes/YooKassa-Model-PayoutInterface.md#method_getStatus) |  | Возвращает статус сделки |
| public | [getTest()](../classes/YooKassa-Model-PayoutInterface.md#method_getTest) |  | Возвращает признак тестовой операции |

---
### Details
* File: [lib/Model/PayoutInterface.php](../../lib/Model/PayoutInterface.php)
* Package: \YooKassa

---
### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| property-read |  | Идентификатор выплаты |
| property-read |  | Сумма выплаты |
| property-read |  | Текущее состояние выплаты |
| property-read |  | Способ проведения выплаты |
| property-read |  | Способ проведения выплаты |
| property-read |  | Описание транзакции |
| property-read |  | Время создания заказа |
| property-read |  | Время создания заказа |
| property-read |  | Сделка, в рамках которой нужно провести выплату |
| property-read |  | Комментарий к отмене выплаты |
| property-read |  | Комментарий к отмене выплаты |
| property-read |  | Метаданные платежа указанные мерчантом |
| property-read |  | Признак тестовой операции |

---
## Methods
<a name="method_getId" class="anchor"></a>
#### public getId() : string

```php
public getId() : string
```

**Summary**

Возвращает Id сделки

**Details:**
* Inherited From: [\YooKassa\Model\PayoutInterface](../classes/YooKassa-Model-PayoutInterface.md)

**Returns:** string - Id сделки


<a name="method_getAmount" class="anchor"></a>
#### public getAmount() : \YooKassa\Model\MonetaryAmount

```php
public getAmount() : \YooKassa\Model\MonetaryAmount
```

**Summary**

Возвращает баланс сделки

**Details:**
* Inherited From: [\YooKassa\Model\PayoutInterface](../classes/YooKassa-Model-PayoutInterface.md)

**Returns:** \YooKassa\Model\MonetaryAmount - Баланс сделки


<a name="method_getStatus" class="anchor"></a>
#### public getStatus() : string

```php
public getStatus() : string
```

**Summary**

Возвращает статус сделки

**Details:**
* Inherited From: [\YooKassa\Model\PayoutInterface](../classes/YooKassa-Model-PayoutInterface.md)

**Returns:** string - Статус сделки


<a name="method_getPayoutDestination" class="anchor"></a>
#### public getPayoutDestination() : string

```php
public getPayoutDestination() : string
```

**Summary**

Возвращает платежное средство продавца, на которое ЮKassa переводит оплату

**Details:**
* Inherited From: [\YooKassa\Model\PayoutInterface](../classes/YooKassa-Model-PayoutInterface.md)

**Returns:** string - Платежное средство продавца, на которое ЮKassa переводит оплату


<a name="method_getDescription" class="anchor"></a>
#### public getDescription() : string

```php
public getDescription() : string
```

**Summary**

Возвращает описание транзакции (не более 128 символов)

**Details:**
* Inherited From: [\YooKassa\Model\PayoutInterface](../classes/YooKassa-Model-PayoutInterface.md)

**Returns:** string - Описание транзакции


<a name="method_getCreatedAt" class="anchor"></a>
#### public getCreatedAt() : \DateTime

```php
public getCreatedAt() : \DateTime
```

**Summary**

Возвращает время создания сделки

**Details:**
* Inherited From: [\YooKassa\Model\PayoutInterface](../classes/YooKassa-Model-PayoutInterface.md)

**Returns:** \DateTime - Время создания сделки


<a name="method_getDeal" class="anchor"></a>
#### public getDeal() : \YooKassa\Model\Deal\PayoutDealInfo

```php
public getDeal() : \YooKassa\Model\Deal\PayoutDealInfo
```

**Summary**

Возвращает сделку, в рамках которой нужно провести выплату.

**Details:**
* Inherited From: [\YooKassa\Model\PayoutInterface](../classes/YooKassa-Model-PayoutInterface.md)

**Returns:** \YooKassa\Model\Deal\PayoutDealInfo - Сделка, в рамках которой нужно провести выплату


<a name="method_getCancellationDetails" class="anchor"></a>
#### public getCancellationDetails() : \YooKassa\Model\Payout\PayoutCancellationDetails

```php
public getCancellationDetails() : \YooKassa\Model\Payout\PayoutCancellationDetails
```

**Summary**

Возвращает комментарий к статусу canceled: кто отменил выплату и по какой причине.

**Details:**
* Inherited From: [\YooKassa\Model\PayoutInterface](../classes/YooKassa-Model-PayoutInterface.md)

**Returns:** \YooKassa\Model\Payout\PayoutCancellationDetails - Комментарий к статусу canceled: кто отменил выплату и по какой причине


<a name="method_getMetadata" class="anchor"></a>
#### public getMetadata() : \YooKassa\Model\Metadata

```php
public getMetadata() : \YooKassa\Model\Metadata
```

**Summary**

Возвращает дополнительные данные сделки

**Details:**
* Inherited From: [\YooKassa\Model\PayoutInterface](../classes/YooKassa-Model-PayoutInterface.md)

**Returns:** \YooKassa\Model\Metadata - Дополнительные данные сделки


<a name="method_getTest" class="anchor"></a>
#### public getTest() : bool

```php
public getTest() : bool
```

**Summary**

Возвращает признак тестовой операции

**Details:**
* Inherited From: [\YooKassa\Model\PayoutInterface](../classes/YooKassa-Model-PayoutInterface.md)

**Returns:** bool - Признак тестовой операции




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