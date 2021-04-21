# [YooKassa API SDK](../home.md)

# Interface: VatDataInterface
### Namespace: [\YooKassa\Model\PaymentData\B2b\Sberbank](../namespaces/yookassa-model-paymentdata-b2b-sberbank.md)
---
**Summary:**

Interface VatDataInterface

---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getAmount()](../classes/YooKassa-Model-PaymentData-B2b-Sberbank-VatDataInterface.md#method_getAmount) |  | Возвращает сумму НДС |
| public | [getRate()](../classes/YooKassa-Model-PaymentData-B2b-Sberbank-VatDataInterface.md#method_getRate) |  | Возвращает данные об НДС |
| public | [getType()](../classes/YooKassa-Model-PaymentData-B2b-Sberbank-VatDataInterface.md#method_getType) |  | Возвращает способ расчёта НДС |

---
### Details
* File: [lib/Model/PaymentData/B2b/Sberbank/VatDataInterface.php](../../lib/Model/PaymentData/B2b/Sberbank/VatDataInterface.php)
* Package: \YooKassa
---
### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| property-read |  | Способ расчёта НДС |
| property-read |  | Данные об НДС в случае, если сумма НДС включена в сумму платежа |
| property-read |  | Сумма НДС |
---
## Methods
<a name="method_getType" class="anchor"></a>
#### public getType() : string

```php
public getType() : string
```

**Summary**

Возвращает способ расчёта НДС

**Details:**
* Inherited From: [\YooKassa\Model\PaymentData\B2b\Sberbank\VatDataInterface](../classes/YooKassa-Model-PaymentData-B2b-Sberbank-VatDataInterface.md)

**Returns:** string - Способ расчёта НДС


<a name="method_getRate" class="anchor"></a>
#### public getRate() : string

```php
public getRate() : string
```

**Summary**

Возвращает данные об НДС

**Details:**
* Inherited From: [\YooKassa\Model\PaymentData\B2b\Sberbank\VatDataInterface](../classes/YooKassa-Model-PaymentData-B2b-Sberbank-VatDataInterface.md)

**Returns:** string - Данные об НДС


<a name="method_getAmount" class="anchor"></a>
#### public getAmount() : \YooKassa\Model\AmountInterface

```php
public getAmount() : \YooKassa\Model\AmountInterface
```

**Summary**

Возвращает сумму НДС

**Details:**
* Inherited From: [\YooKassa\Model\PaymentData\B2b\Sberbank\VatDataInterface](../classes/YooKassa-Model-PaymentData-B2b-Sberbank-VatDataInterface.md)

**Returns:** \YooKassa\Model\AmountInterface - Сумма НДС




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