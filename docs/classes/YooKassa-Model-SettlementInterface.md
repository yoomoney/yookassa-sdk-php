# [YooKassa API SDK](../home.md)

# Interface: SettlementInterface
### Namespace: [\YooKassa\Model](../namespaces/yookassa-model.md)
---
**Summary:**

Interface PostReceiptResponseSettlementInterface

---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getAmount()](../classes/YooKassa-Model-SettlementInterface.md#method_getAmount) |  | Возвращает размер оплаты |
| public | [getType()](../classes/YooKassa-Model-SettlementInterface.md#method_getType) |  | Возвращает вид оплаты в чеке (cashless | prepayment | postpayment | consideration) |

---
### Details
* File: [lib/Model/SettlementInterface.php](../../lib/Model/SettlementInterface.php)
* Package: \YooKassa
---
### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| property-read |  | Вид оплаты в чеке |
| property-read |  | Размер оплаты |
---
## Methods
<a name="method_getType" class="anchor"></a>
#### public getType() : string

```php
public getType() : string
```

**Summary**

Возвращает вид оплаты в чеке (cashless | prepayment | postpayment | consideration)

**Details:**
* Inherited From: [\YooKassa\Model\SettlementInterface](../classes/YooKassa-Model-SettlementInterface.md)

**Returns:** string - Вид оплаты в чеке


<a name="method_getAmount" class="anchor"></a>
#### public getAmount() : \YooKassa\Model\AmountInterface

```php
public getAmount() : \YooKassa\Model\AmountInterface
```

**Summary**

Возвращает размер оплаты

**Details:**
* Inherited From: [\YooKassa\Model\SettlementInterface](../classes/YooKassa-Model-SettlementInterface.md)

**Returns:** \YooKassa\Model\AmountInterface - Размер оплаты




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