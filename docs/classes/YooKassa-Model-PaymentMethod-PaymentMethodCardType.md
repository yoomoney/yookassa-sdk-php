# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Model\PaymentMethod\PaymentMethodCardType
### Namespace: [\YooKassa\Model\PaymentMethod](../namespaces/yookassa-model-paymentmethod.md)
---
**Summary:**

Тип банковской карты. Возможные значения:
- `MasterCard` (для карт Mastercard и Maestro),
- `Visa` (для карт Visa и Visa Electron),
- `Mir`,
- `UnionPay`,
- `JCB`,
- `AmericanExpress`,
- `DinersClub`
- `Unknown`.

---
### Constants
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [MASTER_CARD](../classes/YooKassa-Model-PaymentMethod-PaymentMethodCardType.md#constant_MASTER_CARD) |  |  |
| public | [VISA](../classes/YooKassa-Model-PaymentMethod-PaymentMethodCardType.md#constant_VISA) |  |  |
| public | [MIR](../classes/YooKassa-Model-PaymentMethod-PaymentMethodCardType.md#constant_MIR) |  |  |
| public | [UNION_PAY](../classes/YooKassa-Model-PaymentMethod-PaymentMethodCardType.md#constant_UNION_PAY) |  |  |
| public | [JCB](../classes/YooKassa-Model-PaymentMethod-PaymentMethodCardType.md#constant_JCB) |  |  |
| public | [AMERICAN_EXPRESS](../classes/YooKassa-Model-PaymentMethod-PaymentMethodCardType.md#constant_AMERICAN_EXPRESS) |  |  |
| public | [DINERS_CLUB](../classes/YooKassa-Model-PaymentMethod-PaymentMethodCardType.md#constant_DINERS_CLUB) |  |  |
| public | [UNKNOWN](../classes/YooKassa-Model-PaymentMethod-PaymentMethodCardType.md#constant_UNKNOWN) |  |  |
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$validValues](../classes/YooKassa-Model-PaymentMethod-PaymentMethodCardType.md#property_validValues) |  |  |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getEnabledValues()](../classes/YooKassa-Common-AbstractEnum.md#method_getEnabledValues) |  | Возвращает значения в enum'е значения которых разрешены |
| public | [getValidValues()](../classes/YooKassa-Common-AbstractEnum.md#method_getValidValues) |  | Возвращает все значения в enum'e |
| public | [valueExists()](../classes/YooKassa-Common-AbstractEnum.md#method_valueExists) |  | Проверяет наличие значения в enum'e |
---
### Details
* File: [lib/Model/PaymentMethod/PaymentMethodCardType.php](../../lib/Model/PaymentMethod/PaymentMethodCardType.php)
* Package: Default
* Class Hierarchy: 
  * [\YooKassa\Common\AbstractEnum](../classes/YooKassa-Common-AbstractEnum.md)
  * \YooKassa\Model\PaymentMethod\PaymentMethodCardType
---
## Constants
<a name="constant_MASTER_CARD" class="anchor"></a>
###### MASTER_CARD
```php
MASTER_CARD = 'MasterCard'
```


<a name="constant_VISA" class="anchor"></a>
###### VISA
```php
VISA = 'Visa'
```


<a name="constant_MIR" class="anchor"></a>
###### MIR
```php
MIR = 'Mir'
```


<a name="constant_UNION_PAY" class="anchor"></a>
###### UNION_PAY
```php
UNION_PAY = 'UnionPay'
```


<a name="constant_JCB" class="anchor"></a>
###### JCB
```php
JCB = 'JCB'
```


<a name="constant_AMERICAN_EXPRESS" class="anchor"></a>
###### AMERICAN_EXPRESS
```php
AMERICAN_EXPRESS = 'AmericanExpress'
```


<a name="constant_DINERS_CLUB" class="anchor"></a>
###### DINERS_CLUB
```php
DINERS_CLUB = 'DinersClub'
```


<a name="constant_UNKNOWN" class="anchor"></a>
###### UNKNOWN
```php
UNKNOWN = 'Unknown'
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