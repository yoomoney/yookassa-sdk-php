# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Model\Payout\PayoutCancellationDetailsReasonCode
### Namespace: [\YooKassa\Model\Payout](../namespaces/yookassa-model-payout.md)
---
**Summary:**

PayoutCancellationDetailsReasonCode - Возможные причины отмены выплаты


---
### Constants
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [FRAUD_SUSPECTED](../classes/YooKassa-Model-Payout-PayoutCancellationDetailsReasonCode.md#constant_FRAUD_SUSPECTED) |  | Выплата заблокирована из-за подозрения в мошенничестве |
| public | [GENERAL_DECLINE](../classes/YooKassa-Model-Payout-PayoutCancellationDetailsReasonCode.md#constant_GENERAL_DECLINE) |  | Причина не детализирована. Пользователю следует обратиться к инициатору отмены выплаты за уточнением подробностей |
| public | [ONE_TIME_LIMIT_EXCEEDED](../classes/YooKassa-Model-Payout-PayoutCancellationDetailsReasonCode.md#constant_ONE_TIME_LIMIT_EXCEEDED) |  | Превышен лимит на разовое зачисление |
| public | [PERIODIC_LIMIT_EXCEEDED](../classes/YooKassa-Model-Payout-PayoutCancellationDetailsReasonCode.md#constant_PERIODIC_LIMIT_EXCEEDED) |  | Превышен лимит выплат за период времени (сутки, месяц) |
| public | [REJECTED_BY_PAYEE](../classes/YooKassa-Model-Payout-PayoutCancellationDetailsReasonCode.md#constant_REJECTED_BY_PAYEE) |  | Эмитент отклонил выплату по неизвестным причинам |

---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$validValues](../classes/YooKassa-Model-Payout-PayoutCancellationDetailsReasonCode.md#property_validValues) |  |  |

---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getEnabledValues()](../classes/YooKassa-Common-AbstractEnum.md#method_getEnabledValues) |  | Возвращает значения в enum'е значения которых разрешены |
| public | [getValidValues()](../classes/YooKassa-Common-AbstractEnum.md#method_getValidValues) |  | Возвращает все значения в enum'e |
| public | [valueExists()](../classes/YooKassa-Common-AbstractEnum.md#method_valueExists) |  | Проверяет наличие значения в enum'e |

---
### Details
* File: [lib/Model/Payout/PayoutCancellationDetailsReasonCode.php](../../lib/Model/Payout/PayoutCancellationDetailsReasonCode.php)
* Package: Default
* Class Hierarchy: 
  * [\YooKassa\Common\AbstractEnum](../classes/YooKassa-Common-AbstractEnum.md)
  * \YooKassa\Model\Payout\PayoutCancellationDetailsReasonCode

---
## Constants
<a name="constant_FRAUD_SUSPECTED" class="anchor"></a>
###### FRAUD_SUSPECTED
Выплата заблокирована из-за подозрения в мошенничестве

```php
FRAUD_SUSPECTED = 'fraud_suspected'
```


<a name="constant_GENERAL_DECLINE" class="anchor"></a>
###### GENERAL_DECLINE
Причина не детализирована. Пользователю следует обратиться к инициатору отмены выплаты за уточнением подробностей

```php
GENERAL_DECLINE = 'general_decline'
```


<a name="constant_ONE_TIME_LIMIT_EXCEEDED" class="anchor"></a>
###### ONE_TIME_LIMIT_EXCEEDED
Превышен лимит на разовое зачисление

```php
ONE_TIME_LIMIT_EXCEEDED = 'one_time_limit_exceeded'
```


<a name="constant_PERIODIC_LIMIT_EXCEEDED" class="anchor"></a>
###### PERIODIC_LIMIT_EXCEEDED
Превышен лимит выплат за период времени (сутки, месяц)

```php
PERIODIC_LIMIT_EXCEEDED = 'periodic_limit_exceeded'
```


<a name="constant_REJECTED_BY_PAYEE" class="anchor"></a>
###### REJECTED_BY_PAYEE
Эмитент отклонил выплату по неизвестным причинам

```php
REJECTED_BY_PAYEE = 'rejected_by_payee'
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
Static public valueExists(mixed $value) : bool
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
* [Deprecated - 13](../reports/deprecated.md)

---

This document was automatically generated from source code comments on 2021-12-28 using [phpDocumentor](http://www.phpdoc.org/)

&copy; 2021 YooMoney