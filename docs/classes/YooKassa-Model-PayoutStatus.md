# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Model\PayoutStatus
### Namespace: [\YooKassa\Model](../namespaces/yookassa-model.md)
---
**Summary:**

PayoutStatus - Статус выплаты
|Код|Описание|
--- | ---
|pending|Выплата создана и ожидает подтверждения от эмитента|
|succeeded|Выплата успешно завершена|
|canceled|Выплата отменена|


---
### Constants
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [PENDING](../classes/YooKassa-Model-PayoutStatus.md#constant_PENDING) |  | Только для выплат на банковские карты: выплата создана и ожидает подтверждения от эмитента, что деньги можно перевести на указанную банковскую карту |
| public | [SUCCEEDED](../classes/YooKassa-Model-PayoutStatus.md#constant_SUCCEEDED) |  | Выплата успешно завершена, оплата переведена на платежное средство продавца (финальный и неизменяемый статус) |
| public | [CANCELED](../classes/YooKassa-Model-PayoutStatus.md#constant_CANCELED) |  | Выплата отменена, инициатор и причина отмены указаны в объекте cancellation_details (финальный и неизменяемый статус) |

---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$validValues](../classes/YooKassa-Model-PayoutStatus.md#property_validValues) |  |  |

---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getEnabledValues()](../classes/YooKassa-Common-AbstractEnum.md#method_getEnabledValues) |  | Возвращает значения в enum'е значения которых разрешены |
| public | [getValidValues()](../classes/YooKassa-Common-AbstractEnum.md#method_getValidValues) |  | Возвращает все значения в enum'e |
| public | [valueExists()](../classes/YooKassa-Common-AbstractEnum.md#method_valueExists) |  | Проверяет наличие значения в enum'e |

---
### Details
* File: [lib/Model/PayoutStatus.php](../../lib/Model/PayoutStatus.php)
* Package: Default
* Class Hierarchy: 
  * [\YooKassa\Common\AbstractEnum](../classes/YooKassa-Common-AbstractEnum.md)
  * \YooKassa\Model\PayoutStatus

---
## Constants
<a name="constant_PENDING" class="anchor"></a>
###### PENDING
Только для выплат на банковские карты: выплата создана и ожидает подтверждения от эмитента, что деньги можно перевести на указанную банковскую карту

```php
PENDING = 'pending'
```


<a name="constant_SUCCEEDED" class="anchor"></a>
###### SUCCEEDED
Выплата успешно завершена, оплата переведена на платежное средство продавца (финальный и неизменяемый статус)

```php
SUCCEEDED = 'succeeded'
```


<a name="constant_CANCELED" class="anchor"></a>
###### CANCELED
Выплата отменена, инициатор и причина отмены указаны в объекте cancellation_details (финальный и неизменяемый статус)

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