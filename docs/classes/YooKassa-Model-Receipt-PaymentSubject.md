# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Model\Receipt\PaymentSubject
### Namespace: [\YooKassa\Model\Receipt](../namespaces/yookassa-model-receipt.md)
---
**Summary:**

Базовый класс генерируемых enum'ов

---
### Constants
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [COMMODITY](../classes/YooKassa-Model-Receipt-PaymentSubject.md#constant_COMMODITY) |  |  |
| public | [EXCISE](../classes/YooKassa-Model-Receipt-PaymentSubject.md#constant_EXCISE) |  |  |
| public | [JOB](../classes/YooKassa-Model-Receipt-PaymentSubject.md#constant_JOB) |  |  |
| public | [SERVICE](../classes/YooKassa-Model-Receipt-PaymentSubject.md#constant_SERVICE) |  |  |
| public | [GAMBLING_BET](../classes/YooKassa-Model-Receipt-PaymentSubject.md#constant_GAMBLING_BET) |  |  |
| public | [GAMBLING_PRIZE](../classes/YooKassa-Model-Receipt-PaymentSubject.md#constant_GAMBLING_PRIZE) |  |  |
| public | [LOTTERY](../classes/YooKassa-Model-Receipt-PaymentSubject.md#constant_LOTTERY) |  |  |
| public | [LOTTERY_PRIZE](../classes/YooKassa-Model-Receipt-PaymentSubject.md#constant_LOTTERY_PRIZE) |  |  |
| public | [INTELLECTUAL_ACTIVITY](../classes/YooKassa-Model-Receipt-PaymentSubject.md#constant_INTELLECTUAL_ACTIVITY) |  |  |
| public | [PAYMENT](../classes/YooKassa-Model-Receipt-PaymentSubject.md#constant_PAYMENT) |  |  |
| public | [AGENT_COMMISSION](../classes/YooKassa-Model-Receipt-PaymentSubject.md#constant_AGENT_COMMISSION) |  |  |
| public | [PROPERTY_RIGHT](../classes/YooKassa-Model-Receipt-PaymentSubject.md#constant_PROPERTY_RIGHT) |  |  |
| public | [NON_OPERATING_GAIN](../classes/YooKassa-Model-Receipt-PaymentSubject.md#constant_NON_OPERATING_GAIN) |  |  |
| public | [INSURANCE_PREMIUM](../classes/YooKassa-Model-Receipt-PaymentSubject.md#constant_INSURANCE_PREMIUM) |  |  |
| public | [SALES_TAX](../classes/YooKassa-Model-Receipt-PaymentSubject.md#constant_SALES_TAX) |  |  |
| public | [RESORT_FEE](../classes/YooKassa-Model-Receipt-PaymentSubject.md#constant_RESORT_FEE) |  |  |
| public | [COMPOSITE](../classes/YooKassa-Model-Receipt-PaymentSubject.md#constant_COMPOSITE) |  |  |
| public | [ANOTHER](../classes/YooKassa-Model-Receipt-PaymentSubject.md#constant_ANOTHER) |  |  |
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$validValues](../classes/YooKassa-Model-Receipt-PaymentSubject.md#property_validValues) |  |  |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getEnabledValues()](../classes/YooKassa-Common-AbstractEnum.md#method_getEnabledValues) |  | Возвращает значения в enum'е значения которых разрешены |
| public | [getValidValues()](../classes/YooKassa-Common-AbstractEnum.md#method_getValidValues) |  | Возвращает все значения в enum'e |
| public | [valueExists()](../classes/YooKassa-Common-AbstractEnum.md#method_valueExists) |  | Проверяет наличие значения в enum'e |
---
### Details
* File: [lib/Model/Receipt/PaymentSubject.php](../../lib/Model/Receipt/PaymentSubject.php)
* Package: Default
* Class Hierarchy: 
  * [\YooKassa\Common\AbstractEnum](../classes/YooKassa-Common-AbstractEnum.md)
  * \YooKassa\Model\Receipt\PaymentSubject
---
## Constants
<a name="constant_COMMODITY" class="anchor"></a>
###### COMMODITY
```php
COMMODITY = 'commodity'
```


<a name="constant_EXCISE" class="anchor"></a>
###### EXCISE
```php
EXCISE = 'excise'
```


<a name="constant_JOB" class="anchor"></a>
###### JOB
```php
JOB = 'job'
```


<a name="constant_SERVICE" class="anchor"></a>
###### SERVICE
```php
SERVICE = 'service'
```


<a name="constant_GAMBLING_BET" class="anchor"></a>
###### GAMBLING_BET
```php
GAMBLING_BET = 'gambling_bet'
```


<a name="constant_GAMBLING_PRIZE" class="anchor"></a>
###### GAMBLING_PRIZE
```php
GAMBLING_PRIZE = 'gambling_prize'
```


<a name="constant_LOTTERY" class="anchor"></a>
###### LOTTERY
```php
LOTTERY = 'lottery'
```


<a name="constant_LOTTERY_PRIZE" class="anchor"></a>
###### LOTTERY_PRIZE
```php
LOTTERY_PRIZE = 'lottery_prize'
```


<a name="constant_INTELLECTUAL_ACTIVITY" class="anchor"></a>
###### INTELLECTUAL_ACTIVITY
```php
INTELLECTUAL_ACTIVITY = 'intellectual_activity'
```


<a name="constant_PAYMENT" class="anchor"></a>
###### PAYMENT
```php
PAYMENT = 'payment'
```


<a name="constant_AGENT_COMMISSION" class="anchor"></a>
###### AGENT_COMMISSION
```php
AGENT_COMMISSION = 'agent_commission'
```


<a name="constant_PROPERTY_RIGHT" class="anchor"></a>
###### PROPERTY_RIGHT
```php
PROPERTY_RIGHT = 'property_right'
```


<a name="constant_NON_OPERATING_GAIN" class="anchor"></a>
###### NON_OPERATING_GAIN
```php
NON_OPERATING_GAIN = 'non_operating_gain'
```


<a name="constant_INSURANCE_PREMIUM" class="anchor"></a>
###### INSURANCE_PREMIUM
```php
INSURANCE_PREMIUM = 'insurance_premium'
```


<a name="constant_SALES_TAX" class="anchor"></a>
###### SALES_TAX
```php
SALES_TAX = 'sales_tax'
```


<a name="constant_RESORT_FEE" class="anchor"></a>
###### RESORT_FEE
```php
RESORT_FEE = 'resort_fee'
```


<a name="constant_COMPOSITE" class="anchor"></a>
###### COMPOSITE
```php
COMPOSITE = 'composite'
```


<a name="constant_ANOTHER" class="anchor"></a>
###### ANOTHER
```php
ANOTHER = 'another'
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