# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Model\PaymentStatus
### Namespace: [\YooKassa\Model](../namespaces/yookassa-model.md)
---
**Summary:**

PaymentStatus - Состояние платежа
|Код|Описание|
--- | ---
|pending|Ожидает оплаты покупателем|
|waiting_for_capture|Успешно оплачен покупателем, ожидает подтверждения магазином (capture или aviso)|
|succeeded|Успешно оплачен и подтвержден магазином|
|canceled|Неуспех оплаты или отменен магазином (cancel)|

---
### Constants
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [PENDING](../classes/YooKassa-Model-PaymentStatus.md#constant_PENDING) |  | Ожидает оплаты покупателем |
| public | [WAITING_FOR_CAPTURE](../classes/YooKassa-Model-PaymentStatus.md#constant_WAITING_FOR_CAPTURE) |  | Ожидает подтверждения магазином |
| public | [SUCCEEDED](../classes/YooKassa-Model-PaymentStatus.md#constant_SUCCEEDED) |  | Успешно оплачен и подтвержден магазином |
| public | [CANCELED](../classes/YooKassa-Model-PaymentStatus.md#constant_CANCELED) |  | Неуспех оплаты или отменен магазином |
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$validValues](../classes/YooKassa-Model-PaymentStatus.md#property_validValues) |  |  |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getEnabledValues()](../classes/YooKassa-Common-AbstractEnum.md#method_getEnabledValues) |  | Возвращает значения в enum'е значения которых разрешены |
| public | [getValidValues()](../classes/YooKassa-Common-AbstractEnum.md#method_getValidValues) |  | Возвращает все значения в enum'e |
| public | [valueExists()](../classes/YooKassa-Common-AbstractEnum.md#method_valueExists) |  | Проверяет наличие значения в enum'e |
---
### Details
* File: [lib/Model/PaymentStatus.php](../../lib/Model/PaymentStatus.php)
* Package: Default
* Class Hierarchy: 
  * [\YooKassa\Common\AbstractEnum](../classes/YooKassa-Common-AbstractEnum.md)
  * \YooKassa\Model\PaymentStatus
---
## Constants
<a name="constant_PENDING" class="anchor"></a>
###### PENDING
Ожидает оплаты покупателем

```php
PENDING = 'pending'
```


<a name="constant_WAITING_FOR_CAPTURE" class="anchor"></a>
###### WAITING_FOR_CAPTURE
Ожидает подтверждения магазином

```php
WAITING_FOR_CAPTURE = 'waiting_for_capture'
```


<a name="constant_SUCCEEDED" class="anchor"></a>
###### SUCCEEDED
Успешно оплачен и подтвержден магазином

```php
SUCCEEDED = 'succeeded'
```


<a name="constant_CANCELED" class="anchor"></a>
###### CANCELED
Неуспех оплаты или отменен магазином

```php
CANCELED = 'canceled'
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