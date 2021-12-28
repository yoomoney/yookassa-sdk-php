# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Model\Payout\PayoutCancellationDetailsPartyCode
### Namespace: [\YooKassa\Model\Payout](../namespaces/yookassa-model-payout.md)
---
**Summary:**

PayoutCancellationDetailsPartyCode - Возможные инициаторы отмены выплаты


---
### Constants
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [MERCHANT](../classes/YooKassa-Model-Payout-PayoutCancellationDetailsPartyCode.md#constant_MERCHANT) |  | Платформа (вы) |
| public | [YOO_KASSA](../classes/YooKassa-Model-Payout-PayoutCancellationDetailsPartyCode.md#constant_YOO_KASSA) |  | ЮKassa |
| public | [PAYMENT_NETWORK](../classes/YooKassa-Model-Payout-PayoutCancellationDetailsPartyCode.md#constant_PAYMENT_NETWORK) |  | «Внешние» участники процесса выплаты (например, эмитент, сторонний платежный сервис) |

---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$validValues](../classes/YooKassa-Model-Payout-PayoutCancellationDetailsPartyCode.md#property_validValues) |  |  |

---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getEnabledValues()](../classes/YooKassa-Common-AbstractEnum.md#method_getEnabledValues) |  | Возвращает значения в enum'е значения которых разрешены |
| public | [getValidValues()](../classes/YooKassa-Common-AbstractEnum.md#method_getValidValues) |  | Возвращает все значения в enum'e |
| public | [valueExists()](../classes/YooKassa-Common-AbstractEnum.md#method_valueExists) |  | Проверяет наличие значения в enum'e |

---
### Details
* File: [lib/Model/Payout/PayoutCancellationDetailsPartyCode.php](../../lib/Model/Payout/PayoutCancellationDetailsPartyCode.php)
* Package: Default
* Class Hierarchy: 
  * [\YooKassa\Common\AbstractEnum](../classes/YooKassa-Common-AbstractEnum.md)
  * \YooKassa\Model\Payout\PayoutCancellationDetailsPartyCode

---
## Constants
<a name="constant_MERCHANT" class="anchor"></a>
###### MERCHANT
Платформа (вы)

```php
MERCHANT = 'merchant'
```


<a name="constant_YOO_KASSA" class="anchor"></a>
###### YOO_KASSA
ЮKassa

```php
YOO_KASSA = 'yoo_kassa'
```


<a name="constant_PAYMENT_NETWORK" class="anchor"></a>
###### PAYMENT_NETWORK
«Внешние» участники процесса выплаты (например, эмитент, сторонний платежный сервис)

```php
PAYMENT_NETWORK = 'payment_network'
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