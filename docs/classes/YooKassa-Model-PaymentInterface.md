# [YooKassa API SDK](../home.md)

# Interface: PaymentInterface
### Namespace: [\YooKassa\Model](../namespaces/yookassa-model.md)
---
**Summary:**

Interface PaymentInterface

---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getAmount()](../classes/YooKassa-Model-PaymentInterface.md#method_getAmount) |  | Возвращает сумму |
| public | [getAuthorizationDetails()](../classes/YooKassa-Model-PaymentInterface.md#method_getAuthorizationDetails) |  | Возвращает данные об авторизации платежа |
| public | [getCancellationDetails()](../classes/YooKassa-Model-PaymentInterface.md#method_getCancellationDetails) |  | Возвращает комментарий к статусу canceled: кто отменил платеж и по какой причине |
| public | [getCapturedAt()](../classes/YooKassa-Model-PaymentInterface.md#method_getCapturedAt) |  | Возвращает время подтверждения платежа магазином или null если если время не задано |
| public | [getConfirmation()](../classes/YooKassa-Model-PaymentInterface.md#method_getConfirmation) |  | Возвращает способ подтверждения платежа |
| public | [getCreatedAt()](../classes/YooKassa-Model-PaymentInterface.md#method_getCreatedAt) |  | Возвращает время создания заказа |
| public | [getExpiresAt()](../classes/YooKassa-Model-PaymentInterface.md#method_getExpiresAt) |  | Возвращает время до которого можно бесплатно отменить или подтвердить платеж или null если оно не задано |
| public | [getId()](../classes/YooKassa-Model-PaymentInterface.md#method_getId) |  | Возвращает идентификатор платежа |
| public | [getIncomeAmount()](../classes/YooKassa-Model-PaymentInterface.md#method_getIncomeAmount) |  | Возвращает сумму перечисляемая магазину за вычетом комиссий платежной системы.(только для успешных платежей) |
| public | [getMetadata()](../classes/YooKassa-Model-PaymentInterface.md#method_getMetadata) |  | Возвращает метаданные платежа установленные мерчантом |
| public | [getPaid()](../classes/YooKassa-Model-PaymentInterface.md#method_getPaid) |  | Проверяет был ли уже оплачен заказ |
| public | [getPaymentMethod()](../classes/YooKassa-Model-PaymentInterface.md#method_getPaymentMethod) |  | Возвращает используемый способ проведения платежа |
| public | [getReceiptRegistration()](../classes/YooKassa-Model-PaymentInterface.md#method_getReceiptRegistration) |  | Возвращает состояние регистрации фискального чека |
| public | [getRecipient()](../classes/YooKassa-Model-PaymentInterface.md#method_getRecipient) |  | Возвращает получателя платежа |
| public | [getRefundable()](../classes/YooKassa-Model-PaymentInterface.md#method_getRefundable) |  | Возможность провести возврат по API |
| public | [getRefundedAmount()](../classes/YooKassa-Model-PaymentInterface.md#method_getRefundedAmount) |  | Возвращает сумму возвращенных средств |
| public | [getRequestor()](../classes/YooKassa-Model-PaymentInterface.md#method_getRequestor) |  | Возвращает инициатора платежа |
| public | [getStatus()](../classes/YooKassa-Model-PaymentInterface.md#method_getStatus) |  | Возвращает состояние платежа |
| public | [getTransfers()](../classes/YooKassa-Model-PaymentInterface.md#method_getTransfers) |  | Возвращает данные о распределении платежа между магазинами |

---
### Details
* File: [lib/Model/PaymentInterface.php](../../lib/Model/PaymentInterface.php)
* Package: \YooKassa
---
### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| property-read |  | Идентификатор платежа |
| property-read |  | Текущее состояние платежа |
| property-read |  | Получатель платежа |
| property-read |  | Сумма заказа |
| property-read |  | Описание транзакции |
| property-read |  | Способ проведения платежа |
| property-read |  | Способ проведения платежа |
| property-read |  | Время создания заказа |
| property-read |  | Время создания заказа |
| property-read |  | Время подтверждения платежа магазином |
| property-read |  | Время подтверждения платежа магазином |
| property-read |  | Время, до которого можно бесплатно отменить или подтвердить платеж |
| property-read |  | Время, до которого можно бесплатно отменить или подтвердить платеж |
| property-read |  | Способ подтверждения платежа |
| property-read |  | Сумма возвращенных средств платежа |
| property-read |  | Сумма возвращенных средств платежа |
| property-read |  | Признак оплаты заказа |
| property-read |  | Возможность провести возврат по API |
| property-read |  | Состояние регистрации фискального чека |
| property-read |  | Состояние регистрации фискального чека |
| property-read |  | Метаданные платежа указанные мерчантом |
| property-read |  | Признак тестовой операции |
| property-read |  | Комментарий к отмене платежа |
| property-read |  | Комментарий к отмене платежа |
| property-read |  | Данные об авторизации платежа |
| property-read |  | Данные об авторизации платежа |
| property-read |  | Данные о распределении платежа между магазинами |
| property-read |  | Сумма платежа, которую получит магазин |
| property-read |  | Сумма платежа, которую получит магазин |
| property-read |  | Инициатор платежа |
---
## Methods
<a name="method_getId" class="anchor"></a>
#### public getId() : string

```php
public getId() : string
```

**Summary**

Возвращает идентификатор платежа

**Details:**
* Inherited From: [\YooKassa\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** string - Идентификатор платежа


<a name="method_getStatus" class="anchor"></a>
#### public getStatus() : string

```php
public getStatus() : string
```

**Summary**

Возвращает состояние платежа

**Details:**
* Inherited From: [\YooKassa\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** string - Текущее состояние платежа


<a name="method_getRecipient" class="anchor"></a>
#### public getRecipient() : \YooKassa\Model\RecipientInterface|null

```php
public getRecipient() : \YooKassa\Model\RecipientInterface|null
```

**Summary**

Возвращает получателя платежа

**Details:**
* Inherited From: [\YooKassa\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** \YooKassa\Model\RecipientInterface|null - Получатель платежа или null если получатель не задан


<a name="method_getAmount" class="anchor"></a>
#### public getAmount() : \YooKassa\Model\AmountInterface

```php
public getAmount() : \YooKassa\Model\AmountInterface
```

**Summary**

Возвращает сумму

**Details:**
* Inherited From: [\YooKassa\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** \YooKassa\Model\AmountInterface - Сумма платежа


<a name="method_getPaymentMethod" class="anchor"></a>
#### public getPaymentMethod() : \YooKassa\Model\PaymentMethod\AbstractPaymentMethod

```php
public getPaymentMethod() : \YooKassa\Model\PaymentMethod\AbstractPaymentMethod
```

**Summary**

Возвращает используемый способ проведения платежа

**Details:**
* Inherited From: [\YooKassa\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** \YooKassa\Model\PaymentMethod\AbstractPaymentMethod - Способ проведения платежа


<a name="method_getCreatedAt" class="anchor"></a>
#### public getCreatedAt() : \DateTime

```php
public getCreatedAt() : \DateTime
```

**Summary**

Возвращает время создания заказа

**Details:**
* Inherited From: [\YooKassa\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** \DateTime - Время создания заказа


<a name="method_getCapturedAt" class="anchor"></a>
#### public getCapturedAt() : \DateTime|null

```php
public getCapturedAt() : \DateTime|null
```

**Summary**

Возвращает время подтверждения платежа магазином или null если если время не задано

**Details:**
* Inherited From: [\YooKassa\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** \DateTime|null - Время подтверждения платежа магазином


<a name="method_getConfirmation" class="anchor"></a>
#### public getConfirmation() : \YooKassa\Model\Confirmation\AbstractConfirmation

```php
public getConfirmation() : \YooKassa\Model\Confirmation\AbstractConfirmation
```

**Summary**

Возвращает способ подтверждения платежа

**Details:**
* Inherited From: [\YooKassa\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** \YooKassa\Model\Confirmation\AbstractConfirmation - Способ подтверждения платежа


<a name="method_getRefundedAmount" class="anchor"></a>
#### public getRefundedAmount() : \YooKassa\Model\AmountInterface

```php
public getRefundedAmount() : \YooKassa\Model\AmountInterface
```

**Summary**

Возвращает сумму возвращенных средств

**Details:**
* Inherited From: [\YooKassa\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** \YooKassa\Model\AmountInterface - Сумма возвращенных средств платежа


<a name="method_getPaid" class="anchor"></a>
#### public getPaid() : bool

```php
public getPaid() : bool
```

**Summary**

Проверяет был ли уже оплачен заказ

**Details:**
* Inherited From: [\YooKassa\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** bool - Признак оплаты заказа, true если заказ оплачен, false если нет


<a name="method_getRefundable" class="anchor"></a>
#### public getRefundable() : bool

```php
public getRefundable() : bool
```

**Summary**

Возможность провести возврат по API

**Details:**
* Inherited From: [\YooKassa\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** bool - Возможность провести возврат по API


<a name="method_getReceiptRegistration" class="anchor"></a>
#### public getReceiptRegistration() : string

```php
public getReceiptRegistration() : string
```

**Summary**

Возвращает состояние регистрации фискального чека

**Details:**
* Inherited From: [\YooKassa\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** string - Состояние регистрации фискального чека


<a name="method_getMetadata" class="anchor"></a>
#### public getMetadata() : \YooKassa\Model\Metadata

```php
public getMetadata() : \YooKassa\Model\Metadata
```

**Summary**

Возвращает метаданные платежа установленные мерчантом

**Details:**
* Inherited From: [\YooKassa\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** \YooKassa\Model\Metadata - Метаданные платежа указанные мерчантом


<a name="method_getExpiresAt" class="anchor"></a>
#### public getExpiresAt() : \DateTime|null

```php
public getExpiresAt() : \DateTime|null
```

**Summary**

Возвращает время до которого можно бесплатно отменить или подтвердить платеж или null если оно не задано

**Details:**
* Inherited From: [\YooKassa\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** \DateTime|null - Время, до которого можно бесплатно отменить или подтвердить платеж

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| since | 1.0.2 |  |

<a name="method_getCancellationDetails" class="anchor"></a>
#### public getCancellationDetails() : \YooKassa\Model\CancellationDetailsInterface|null

```php
public getCancellationDetails() : \YooKassa\Model\CancellationDetailsInterface|null
```

**Summary**

Возвращает комментарий к статусу canceled: кто отменил платеж и по какой причине

**Details:**
* Inherited From: [\YooKassa\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** \YooKassa\Model\CancellationDetailsInterface|null - Комментарий к статусу canceled

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| since | 1.0.13 |  |

<a name="method_getAuthorizationDetails" class="anchor"></a>
#### public getAuthorizationDetails() : \YooKassa\Model\AuthorizationDetailsInterface|null

```php
public getAuthorizationDetails() : \YooKassa\Model\AuthorizationDetailsInterface|null
```

**Summary**

Возвращает данные об авторизации платежа

**Details:**
* Inherited From: [\YooKassa\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** \YooKassa\Model\AuthorizationDetailsInterface|null - Данные об авторизации платежа

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| since | 1.0.18 |  |

<a name="method_getTransfers" class="anchor"></a>
#### public getTransfers() : \YooKassa\Model\TransferInterface[]

```php
public getTransfers() : \YooKassa\Model\TransferInterface[]
```

**Summary**

Возвращает данные о распределении платежа между магазинами

**Details:**
* Inherited From: [\YooKassa\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** \YooKassa\Model\TransferInterface[] - 


<a name="method_getIncomeAmount" class="anchor"></a>
#### public getIncomeAmount() : \YooKassa\Model\MonetaryAmount|null

```php
public getIncomeAmount() : \YooKassa\Model\MonetaryAmount|null
```

**Summary**

Возвращает сумму перечисляемая магазину за вычетом комиссий платежной системы.(только для успешных платежей)

**Details:**
* Inherited From: [\YooKassa\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** \YooKassa\Model\MonetaryAmount|null - 


<a name="method_getRequestor" class="anchor"></a>
#### public getRequestor() : \YooKassa\Model\RequestorInterface

```php
public getRequestor() : \YooKassa\Model\RequestorInterface
```

**Summary**

Возвращает инициатора платежа

**Details:**
* Inherited From: [\YooKassa\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** \YooKassa\Model\RequestorInterface - 




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