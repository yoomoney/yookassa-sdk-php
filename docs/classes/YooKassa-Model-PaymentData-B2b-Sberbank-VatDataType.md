# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Model\PaymentData\B2b\Sberbank\VatDataType
### Namespace: [\YooKassa\Model\PaymentData\B2b\Sberbank](../namespaces/yookassa-model-paymentdata-b2b-sberbank.md)
---
**Summary:**

PaymentDataB2bSberbankVatDataType - Способ расчёта НДС
|Код|Описание|
--- | ---
|calculated|Сумма НДС включена в сумму платежа|
|mixed|Разные ставки НДС для разных товаров|
|untaxed|Сумма платежа НДС не облагается|

---
### Constants
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [CALCULATED](../classes/YooKassa-Model-PaymentData-B2b-Sberbank-VatDataType.md#constant_CALCULATED) |  | Сумма НДС включена в сумму платежа |
| public | [MIXED](../classes/YooKassa-Model-PaymentData-B2b-Sberbank-VatDataType.md#constant_MIXED) |  | Разные ставки НДС для разных товаров |
| public | [UNTAXED](../classes/YooKassa-Model-PaymentData-B2b-Sberbank-VatDataType.md#constant_UNTAXED) |  | Сумма платежа НДС не облагается |
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$validValues](../classes/YooKassa-Model-PaymentData-B2b-Sberbank-VatDataType.md#property_validValues) |  |  |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getEnabledValues()](../classes/YooKassa-Common-AbstractEnum.md#method_getEnabledValues) |  | Возвращает значения в enum'е значения которых разрешены |
| public | [getValidValues()](../classes/YooKassa-Common-AbstractEnum.md#method_getValidValues) |  | Возвращает все значения в enum'e |
| public | [valueExists()](../classes/YooKassa-Common-AbstractEnum.md#method_valueExists) |  | Проверяет наличие значения в enum'e |
---
### Details
* File: [lib/Model/PaymentData/B2b/Sberbank/VatDataType.php](../../lib/Model/PaymentData/B2b/Sberbank/VatDataType.php)
* Package: Default
* Class Hierarchy: 
  * [\YooKassa\Common\AbstractEnum](../classes/YooKassa-Common-AbstractEnum.md)
  * \YooKassa\Model\PaymentData\B2b\Sberbank\VatDataType
---
## Constants
<a name="constant_CALCULATED" class="anchor"></a>
###### CALCULATED
Сумма НДС включена в сумму платежа

```php
CALCULATED = 'calculated'
```


<a name="constant_MIXED" class="anchor"></a>
###### MIXED
Разные ставки НДС для разных товаров

```php
MIXED = 'mixed'
```


<a name="constant_UNTAXED" class="anchor"></a>
###### UNTAXED
Сумма платежа НДС не облагается

```php
UNTAXED = 'untaxed'
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