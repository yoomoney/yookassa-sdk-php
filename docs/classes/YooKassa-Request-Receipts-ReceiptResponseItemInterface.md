# [YooKassa API SDK](../home.md)

# Interface: ReceiptResponseItemInterface
### Namespace: [\YooKassa\Request\Receipts](../namespaces/yookassa-request-receipts.md)
---
**Summary:**

Interface ReceiptItemInterface

---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getAmount()](../classes/YooKassa-Request-Receipts-ReceiptResponseItemInterface.md#method_getAmount) |  | Возвращает общую стоимость покупаемого товара в копейках/центах |
| public | [getDescription()](../classes/YooKassa-Request-Receipts-ReceiptResponseItemInterface.md#method_getDescription) |  | Возвращает название товара |
| public | [getPrice()](../classes/YooKassa-Request-Receipts-ReceiptResponseItemInterface.md#method_getPrice) |  | Возвращает цену товара |
| public | [getQuantity()](../classes/YooKassa-Request-Receipts-ReceiptResponseItemInterface.md#method_getQuantity) |  | Возвращает количество товара |
| public | [getSupplier()](../classes/YooKassa-Request-Receipts-ReceiptResponseItemInterface.md#method_getSupplier) |  | Возвращает информацию о поставщике товара или услуги |
| public | [getVatCode()](../classes/YooKassa-Request-Receipts-ReceiptResponseItemInterface.md#method_getVatCode) |  | Возвращает ставку НДС |

---
### Details
* File: [lib/Request/Receipts/ReceiptResponseItemInterface.php](../../lib/Request/Receipts/ReceiptResponseItemInterface.php)
* Package: \YooKassa
---
### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| property-read |  | Название товара (не более 128 символов). |
| property-read |  | Количество товара. Максимально возможное значение зависит от модели вашей онлайн-кассы. |
| property-read |  | Суммарная стоимость товара в копейках/центах |
| property-read |  | Цена товара |
| property-read |  | Ставка НДС, число 1-6 |
| property-read |  | Ставка НДС, число 1-6 |
---
## Methods
<a name="method_getDescription" class="anchor"></a>
#### public getDescription() : string

```php
public getDescription() : string
```

**Summary**

Возвращает название товара

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptResponseItemInterface](../classes/YooKassa-Request-Receipts-ReceiptResponseItemInterface.md)

**Returns:** string - Название товара (не более 128 символов).


<a name="method_getQuantity" class="anchor"></a>
#### public getQuantity() : float

```php
public getQuantity() : float
```

**Summary**

Возвращает количество товара

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptResponseItemInterface](../classes/YooKassa-Request-Receipts-ReceiptResponseItemInterface.md)

**Returns:** float - Количество купленного товара


<a name="method_getAmount" class="anchor"></a>
#### public getAmount() : float

```php
public getAmount() : float
```

**Summary**

Возвращает общую стоимость покупаемого товара в копейках/центах

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptResponseItemInterface](../classes/YooKassa-Request-Receipts-ReceiptResponseItemInterface.md)

**Returns:** float - Сумма стоимости покупаемого товара


<a name="method_getPrice" class="anchor"></a>
#### public getPrice() : \YooKassa\Model\AmountInterface

```php
public getPrice() : \YooKassa\Model\AmountInterface
```

**Summary**

Возвращает цену товара

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptResponseItemInterface](../classes/YooKassa-Request-Receipts-ReceiptResponseItemInterface.md)

**Returns:** \YooKassa\Model\AmountInterface - Цена товара


<a name="method_getVatCode" class="anchor"></a>
#### public getVatCode() : int|null

```php
public getVatCode() : int|null
```

**Summary**

Возвращает ставку НДС

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptResponseItemInterface](../classes/YooKassa-Request-Receipts-ReceiptResponseItemInterface.md)

**Returns:** int|null - Ставка НДС, число 1-6, или null если ставка не задана


<a name="method_getSupplier" class="anchor"></a>
#### public getSupplier() : \YooKassa\Model\SupplierInterface

```php
public getSupplier() : \YooKassa\Model\SupplierInterface
```

**Summary**

Возвращает информацию о поставщике товара или услуги

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptResponseItemInterface](../classes/YooKassa-Request-Receipts-ReceiptResponseItemInterface.md)

**Returns:** \YooKassa\Model\SupplierInterface - 




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