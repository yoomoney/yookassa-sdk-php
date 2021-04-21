# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Model\Receipt\PaymentMode
### Namespace: [\YooKassa\Model\Receipt](../namespaces/yookassa-model-receipt.md)
---
**Summary:**

Базовый класс генерируемых enum'ов

---
### Constants
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [FULL_PREPAYMENT](../classes/YooKassa-Model-Receipt-PaymentMode.md#constant_FULL_PREPAYMENT) |  |  |
| public | [PARTIAL_PREPAYMENT](../classes/YooKassa-Model-Receipt-PaymentMode.md#constant_PARTIAL_PREPAYMENT) |  |  |
| public | [ADVANCE](../classes/YooKassa-Model-Receipt-PaymentMode.md#constant_ADVANCE) |  |  |
| public | [FULL_PAYMENT](../classes/YooKassa-Model-Receipt-PaymentMode.md#constant_FULL_PAYMENT) |  |  |
| public | [PARTIAL_PAYMENT](../classes/YooKassa-Model-Receipt-PaymentMode.md#constant_PARTIAL_PAYMENT) |  |  |
| public | [CREDIT](../classes/YooKassa-Model-Receipt-PaymentMode.md#constant_CREDIT) |  |  |
| public | [CREDIT_PAYMENT](../classes/YooKassa-Model-Receipt-PaymentMode.md#constant_CREDIT_PAYMENT) |  |  |
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$validValues](../classes/YooKassa-Model-Receipt-PaymentMode.md#property_validValues) |  |  |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getEnabledValues()](../classes/YooKassa-Common-AbstractEnum.md#method_getEnabledValues) |  | Возвращает значения в enum'е значения которых разрешены |
| public | [getValidValues()](../classes/YooKassa-Common-AbstractEnum.md#method_getValidValues) |  | Возвращает все значения в enum'e |
| public | [valueExists()](../classes/YooKassa-Common-AbstractEnum.md#method_valueExists) |  | Проверяет наличие значения в enum'e |
---
### Details
* File: [lib/Model/Receipt/PaymentMode.php](../../lib/Model/Receipt/PaymentMode.php)
* Package: Default
* Class Hierarchy: 
  * [\YooKassa\Common\AbstractEnum](../classes/YooKassa-Common-AbstractEnum.md)
  * \YooKassa\Model\Receipt\PaymentMode
---
## Constants
<a name="constant_FULL_PREPAYMENT" class="anchor"></a>
###### FULL_PREPAYMENT
```php
FULL_PREPAYMENT = 'full_prepayment'
```


<a name="constant_PARTIAL_PREPAYMENT" class="anchor"></a>
###### PARTIAL_PREPAYMENT
```php
PARTIAL_PREPAYMENT = 'partial_prepayment'
```


<a name="constant_ADVANCE" class="anchor"></a>
###### ADVANCE
```php
ADVANCE = 'advance'
```


<a name="constant_FULL_PAYMENT" class="anchor"></a>
###### FULL_PAYMENT
```php
FULL_PAYMENT = 'full_payment'
```


<a name="constant_PARTIAL_PAYMENT" class="anchor"></a>
###### PARTIAL_PAYMENT
```php
PARTIAL_PAYMENT = 'partial_payment'
```


<a name="constant_CREDIT" class="anchor"></a>
###### CREDIT
```php
CREDIT = 'credit'
```


<a name="constant_CREDIT_PAYMENT" class="anchor"></a>
###### CREDIT_PAYMENT
```php
CREDIT_PAYMENT = 'credit_payment'
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