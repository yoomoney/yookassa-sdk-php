# [YooKassa API SDK](../home.md)

# Interface: RefundInterface
### Namespace: [\YooKassa\Model](../namespaces/yookassa-model.md)
---
**Summary:**

Interface RefundInterface

---
### Constants
* No constants found

---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getAmount()](../classes/YooKassa-Model-RefundInterface.md#method_getAmount) |  | Возвращает сумму возврата |
| public | [getCreatedAt()](../classes/YooKassa-Model-RefundInterface.md#method_getCreatedAt) |  | Возвращает дату создания возврата |
| public | [getDeal()](../classes/YooKassa-Model-RefundInterface.md#method_getDeal) |  | Возвращает сделку, в рамках которой нужно провести возврат. |
| public | [getDescription()](../classes/YooKassa-Model-RefundInterface.md#method_getDescription) |  | Возвращает комментарий к возврату |
| public | [getId()](../classes/YooKassa-Model-RefundInterface.md#method_getId) |  | Возвращает идентификатор возврата платежа |
| public | [getPaymentId()](../classes/YooKassa-Model-RefundInterface.md#method_getPaymentId) |  | Возвращает идентификатор платежа |
| public | [getReceiptRegistration()](../classes/YooKassa-Model-RefundInterface.md#method_getReceiptRegistration) |  | Возвращает статус регистрации чека |
| public | [getSources()](../classes/YooKassa-Model-RefundInterface.md#method_getSources) |  | Возвращает информацию о распределении денег — сколько и в какой магазин нужно перевести |
| public | [getStatus()](../classes/YooKassa-Model-RefundInterface.md#method_getStatus) |  | Возвращает статус текущего возврата |

---
### Details
* File: [lib/Model/RefundInterface.php](../../lib/Model/RefundInterface.php)
* Package: \YooKassa

---
### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| property-read |  | Идентификатор возврата платежа |
| property-read |  | Идентификатор платежа |
| property-read |  | Идентификатор платежа |
| property-read |  | Статус возврата |
| property-read |  | Время создания возврата |
| property-read |  | Время создания возврата |
| property-read |  | Сумма возврата |
| property-read |  | Статус регистрации чека |
| property-read |  | Статус регистрации чека |
| property-read |  | Комментарий, основание для возврата средств покупателю |
| property-read |  | Данные о сделке, в составе которой проходит возврат |

---
## Methods
<a name="method_getId" class="anchor"></a>
#### public getId() : string

```php
public getId() : string
```

**Summary**

Возвращает идентификатор возврата платежа

**Details:**
* Inherited From: [\YooKassa\Model\RefundInterface](../classes/YooKassa-Model-RefundInterface.md)

**Returns:** string - Идентификатор возврата


<a name="method_getPaymentId" class="anchor"></a>
#### public getPaymentId() : string

```php
public getPaymentId() : string
```

**Summary**

Возвращает идентификатор платежа

**Details:**
* Inherited From: [\YooKassa\Model\RefundInterface](../classes/YooKassa-Model-RefundInterface.md)

**Returns:** string - Идентификатор платежа


<a name="method_getStatus" class="anchor"></a>
#### public getStatus() : string

```php
public getStatus() : string
```

**Summary**

Возвращает статус текущего возврата

**Details:**
* Inherited From: [\YooKassa\Model\RefundInterface](../classes/YooKassa-Model-RefundInterface.md)

**Returns:** string - Статус возврата


<a name="method_getCreatedAt" class="anchor"></a>
#### public getCreatedAt() : \DateTime

```php
public getCreatedAt() : \DateTime
```

**Summary**

Возвращает дату создания возврата

**Details:**
* Inherited From: [\YooKassa\Model\RefundInterface](../classes/YooKassa-Model-RefundInterface.md)

**Returns:** \DateTime - Время создания возврата


<a name="method_getAmount" class="anchor"></a>
#### public getAmount() : \YooKassa\Model\AmountInterface

```php
public getAmount() : \YooKassa\Model\AmountInterface
```

**Summary**

Возвращает сумму возврата

**Details:**
* Inherited From: [\YooKassa\Model\RefundInterface](../classes/YooKassa-Model-RefundInterface.md)

**Returns:** \YooKassa\Model\AmountInterface - Сумма возврата


<a name="method_getReceiptRegistration" class="anchor"></a>
#### public getReceiptRegistration() : string

```php
public getReceiptRegistration() : string
```

**Summary**

Возвращает статус регистрации чека

**Details:**
* Inherited From: [\YooKassa\Model\RefundInterface](../classes/YooKassa-Model-RefundInterface.md)

**Returns:** string - Статус регистрации чека


<a name="method_getDescription" class="anchor"></a>
#### public getDescription() : string

```php
public getDescription() : string
```

**Summary**

Возвращает комментарий к возврату

**Details:**
* Inherited From: [\YooKassa\Model\RefundInterface](../classes/YooKassa-Model-RefundInterface.md)

**Returns:** string - Комментарий, основание для возврата средств покупателю


<a name="method_getSources" class="anchor"></a>
#### public getSources() : \YooKassa\Model\SourceInterface[]

```php
public getSources() : \YooKassa\Model\SourceInterface[]
```

**Summary**

Возвращает информацию о распределении денег — сколько и в какой магазин нужно перевести

**Details:**
* Inherited From: [\YooKassa\Model\RefundInterface](../classes/YooKassa-Model-RefundInterface.md)

**Returns:** \YooKassa\Model\SourceInterface[] - 


<a name="method_getDeal" class="anchor"></a>
#### public getDeal() : \YooKassa\Model\Deal\RefundDealInfo

```php
public getDeal() : \YooKassa\Model\Deal\RefundDealInfo
```

**Summary**

Возвращает сделку, в рамках которой нужно провести возврат.

**Details:**
* Inherited From: [\YooKassa\Model\RefundInterface](../classes/YooKassa-Model-RefundInterface.md)

**Returns:** \YooKassa\Model\Deal\RefundDealInfo - Сделка, в рамках которой нужно провести возврат




---

### Top Namespaces

* [\YooKassa](../namespaces/yookassa.md)

---

### Reports
* [Errors - 0](../reports/errors.md)
* [Markers - 0](../reports/markers.md)
* [Deprecated - 13](../reports/deprecated.md)

---

This document was automatically generated from source code comments on 2021-12-07 using [phpDocumentor](http://www.phpdoc.org/)

&copy; 2021 YooMoney