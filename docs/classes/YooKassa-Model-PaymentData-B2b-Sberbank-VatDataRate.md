# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Model\PaymentData\B2b\Sberbank\VatDataRate
### Namespace: [\YooKassa\Model\PaymentData\B2b\Sberbank](../namespaces/yookassa-model-paymentdata-b2b-sberbank.md)
---
**Summary:**

PaymentDataB2bSberbankVatDataRate - Налоговая ставка НДС
|Код|Описание|
--- | ---
|7|7%|
|10|10%|
|18|18%|
|20|20%|

---
### Constants
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [RATE_7](../classes/YooKassa-Model-PaymentData-B2b-Sberbank-VatDataRate.md#constant_RATE_7) |  | 7% |
| public | [RATE_10](../classes/YooKassa-Model-PaymentData-B2b-Sberbank-VatDataRate.md#constant_RATE_10) |  | 10% |
| public | [RATE_18](../classes/YooKassa-Model-PaymentData-B2b-Sberbank-VatDataRate.md#constant_RATE_18) |  | 18% |
| public | [RATE_20](../classes/YooKassa-Model-PaymentData-B2b-Sberbank-VatDataRate.md#constant_RATE_20) |  | 20% |
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$validValues](../classes/YooKassa-Model-PaymentData-B2b-Sberbank-VatDataRate.md#property_validValues) |  |  |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getEnabledValues()](../classes/YooKassa-Common-AbstractEnum.md#method_getEnabledValues) |  | Возвращает значения в enum'е значения которых разрешены |
| public | [getValidValues()](../classes/YooKassa-Common-AbstractEnum.md#method_getValidValues) |  | Возвращает все значения в enum'e |
| public | [valueExists()](../classes/YooKassa-Common-AbstractEnum.md#method_valueExists) |  | Проверяет наличие значения в enum'e |
---
### Details
* File: [lib/Model/PaymentData/B2b/Sberbank/VatDataRate.php](../../lib/Model/PaymentData/B2b/Sberbank/VatDataRate.php)
* Package: Default
* Class Hierarchy: 
  * [\YooKassa\Common\AbstractEnum](../classes/YooKassa-Common-AbstractEnum.md)
  * \YooKassa\Model\PaymentData\B2b\Sberbank\VatDataRate
---
## Constants
<a name="constant_RATE_7" class="anchor"></a>
###### RATE_7
7%

```php
RATE_7 = '7'
```


<a name="constant_RATE_10" class="anchor"></a>
###### RATE_10
10%

```php
RATE_10 = '10'
```


<a name="constant_RATE_18" class="anchor"></a>
###### RATE_18
18%

```php
RATE_18 = '18'
```


<a name="constant_RATE_20" class="anchor"></a>
###### RATE_20
20%

```php
RATE_20 = '20'
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