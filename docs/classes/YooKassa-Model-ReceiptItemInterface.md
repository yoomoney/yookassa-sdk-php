# [YooKassa API SDK](../home.md)

# Interface: ReceiptItemInterface
### Namespace: [\YooKassa\Model](../namespaces/yookassa-model.md)
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
| public | [getAgentType()](../classes/YooKassa-Model-ReceiptItemInterface.md#method_getAgentType) |  |  |
| public | [getAmount()](../classes/YooKassa-Model-ReceiptItemInterface.md#method_getAmount) |  | Возвращает общую стоимость покупаемого товара в копейках/центах |
| public | [getCountryOfOriginCode()](../classes/YooKassa-Model-ReceiptItemInterface.md#method_getCountryOfOriginCode) |  | Возвращает код страны происхождения товара по общероссийскому классификатору стран мира |
| public | [getCustomsDeclarationNumber()](../classes/YooKassa-Model-ReceiptItemInterface.md#method_getCustomsDeclarationNumber) |  | Возвращает номер таможенной декларации |
| public | [getDescription()](../classes/YooKassa-Model-ReceiptItemInterface.md#method_getDescription) |  | Возвращает наименование товара |
| public | [getExcise()](../classes/YooKassa-Model-ReceiptItemInterface.md#method_getExcise) |  | Возвращает сумму акциза товара с учетом копеек |
| public | [getPaymentMode()](../classes/YooKassa-Model-ReceiptItemInterface.md#method_getPaymentMode) |  | Возвращает признак способа расчета |
| public | [getPaymentSubject()](../classes/YooKassa-Model-ReceiptItemInterface.md#method_getPaymentSubject) |  | Возвращает признак предмета расчета |
| public | [getPrice()](../classes/YooKassa-Model-ReceiptItemInterface.md#method_getPrice) |  | Возвращает цену товара |
| public | [getProductCode()](../classes/YooKassa-Model-ReceiptItemInterface.md#method_getProductCode) |  | Возвращает код товара — уникальный номер, который присваивается экземпляру товара при маркировке |
| public | [getQuantity()](../classes/YooKassa-Model-ReceiptItemInterface.md#method_getQuantity) |  | Возвращает количество товара |
| public | [getSupplier()](../classes/YooKassa-Model-ReceiptItemInterface.md#method_getSupplier) |  | Возвращает информацию о поставщике товара или услуги. |
| public | [getVatCode()](../classes/YooKassa-Model-ReceiptItemInterface.md#method_getVatCode) |  | Возвращает ставку НДС |
| public | [isShipping()](../classes/YooKassa-Model-ReceiptItemInterface.md#method_isShipping) |  | Проверяет, является ли текущий элемент чека доставкой |

---
### Details
* File: [lib/Model/ReceiptItemInterface.php](../../lib/Model/ReceiptItemInterface.php)
* Package: \YooKassa
---
### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| property-read |  | Наименование товара |
| property-read |  | Количество |
| property-read |  | Суммарная стоимость покупаемого товара в копейках/центах |
| property-read |  | Цена товара |
| property-read |  | Ставка НДС, число 1-6 |
| property-read |  | Ставка НДС, число 1-6 |
| property-read |  | Признак предмета расчета |
| property-read |  | Признак предмета расчета |
| property-read |  | Признак способа расчета |
| property-read |  | Признак способа расчета |
| property-read |  | Код товара |
| property-read |  | Код товара |
| property-read |  | Код страны происхождения товара |
| property-read |  | Код страны происхождения товара |
| property-read |  | Номер таможенной декларации (от 1 до 32 символов) |
| property-read |  | Номер таможенной декларации (от 1 до 32 символов) |
| property-read |  | Сумма акциза товара с учетом копеек |
---
## Methods
<a name="method_getDescription" class="anchor"></a>
#### public getDescription() : string

```php
public getDescription() : string
```

**Summary**

Возвращает наименование товара

**Details:**
* Inherited From: [\YooKassa\Model\ReceiptItemInterface](../classes/YooKassa-Model-ReceiptItemInterface.md)

**Returns:** string - Наименование товара


<a name="method_getQuantity" class="anchor"></a>
#### public getQuantity() : float

```php
public getQuantity() : float
```

**Summary**

Возвращает количество товара

**Details:**
* Inherited From: [\YooKassa\Model\ReceiptItemInterface](../classes/YooKassa-Model-ReceiptItemInterface.md)

**Returns:** float - Количество купленного товара


<a name="method_getAmount" class="anchor"></a>
#### public getAmount() : float

```php
public getAmount() : float
```

**Summary**

Возвращает общую стоимость покупаемого товара в копейках/центах

**Details:**
* Inherited From: [\YooKassa\Model\ReceiptItemInterface](../classes/YooKassa-Model-ReceiptItemInterface.md)

**Returns:** float - Сумма стоимости покупаемого товара


<a name="method_getPrice" class="anchor"></a>
#### public getPrice() : \YooKassa\Model\AmountInterface

```php
public getPrice() : \YooKassa\Model\AmountInterface
```

**Summary**

Возвращает цену товара

**Details:**
* Inherited From: [\YooKassa\Model\ReceiptItemInterface](../classes/YooKassa-Model-ReceiptItemInterface.md)

**Returns:** \YooKassa\Model\AmountInterface - Цена товара


<a name="method_getVatCode" class="anchor"></a>
#### public getVatCode() : int|null

```php
public getVatCode() : int|null
```

**Summary**

Возвращает ставку НДС

**Details:**
* Inherited From: [\YooKassa\Model\ReceiptItemInterface](../classes/YooKassa-Model-ReceiptItemInterface.md)

**Returns:** int|null - Ставка НДС, число 1-6, или null если ставка не задана


<a name="method_getPaymentSubject" class="anchor"></a>
#### public getPaymentSubject() : string|null

```php
public getPaymentSubject() : string|null
```

**Summary**

Возвращает признак предмета расчета

**Details:**
* Inherited From: [\YooKassa\Model\ReceiptItemInterface](../classes/YooKassa-Model-ReceiptItemInterface.md)

**Returns:** string|null - Признак предмета расчета


<a name="method_getPaymentMode" class="anchor"></a>
#### public getPaymentMode() : string|null

```php
public getPaymentMode() : string|null
```

**Summary**

Возвращает признак способа расчета

**Details:**
* Inherited From: [\YooKassa\Model\ReceiptItemInterface](../classes/YooKassa-Model-ReceiptItemInterface.md)

**Returns:** string|null - Признак способа расчета


<a name="method_getProductCode" class="anchor"></a>
#### public getProductCode() : string|null

```php
public getProductCode() : string|null
```

**Summary**

Возвращает код товара — уникальный номер, который присваивается экземпляру товара при маркировке

**Details:**
* Inherited From: [\YooKassa\Model\ReceiptItemInterface](../classes/YooKassa-Model-ReceiptItemInterface.md)

**Returns:** string|null - Код товара


<a name="method_getCountryOfOriginCode" class="anchor"></a>
#### public getCountryOfOriginCode() : string|null

```php
public getCountryOfOriginCode() : string|null
```

**Summary**

Возвращает код страны происхождения товара по общероссийскому классификатору стран мира

**Details:**
* Inherited From: [\YooKassa\Model\ReceiptItemInterface](../classes/YooKassa-Model-ReceiptItemInterface.md)

**Returns:** string|null - Код страны происхождения товара


<a name="method_getCustomsDeclarationNumber" class="anchor"></a>
#### public getCustomsDeclarationNumber() : string|null

```php
public getCustomsDeclarationNumber() : string|null
```

**Summary**

Возвращает номер таможенной декларации

**Details:**
* Inherited From: [\YooKassa\Model\ReceiptItemInterface](../classes/YooKassa-Model-ReceiptItemInterface.md)

**Returns:** string|null - Номер таможенной декларации (от 1 до 32 символов)


<a name="method_getExcise" class="anchor"></a>
#### public getExcise() : float|null

```php
public getExcise() : float|null
```

**Summary**

Возвращает сумму акциза товара с учетом копеек

**Details:**
* Inherited From: [\YooKassa\Model\ReceiptItemInterface](../classes/YooKassa-Model-ReceiptItemInterface.md)

**Returns:** float|null - Сумма акциза товара с учетом копеек


<a name="method_getSupplier" class="anchor"></a>
#### public getSupplier() : \YooKassa\Model\SupplierInterface

```php
public getSupplier() : \YooKassa\Model\SupplierInterface
```

**Summary**

Возвращает информацию о поставщике товара или услуги.

**Details:**
* Inherited From: [\YooKassa\Model\ReceiptItemInterface](../classes/YooKassa-Model-ReceiptItemInterface.md)

**Returns:** \YooKassa\Model\SupplierInterface - 


<a name="method_getAgentType" class="anchor"></a>
#### public getAgentType() : string

```php
public getAgentType() : string
```

**Details:**
* Inherited From: [\YooKassa\Model\ReceiptItemInterface](../classes/YooKassa-Model-ReceiptItemInterface.md)

**Returns:** string - 


<a name="method_isShipping" class="anchor"></a>
#### public isShipping() : bool

```php
public isShipping() : bool
```

**Summary**

Проверяет, является ли текущий элемент чека доставкой

**Details:**
* Inherited From: [\YooKassa\Model\ReceiptItemInterface](../classes/YooKassa-Model-ReceiptItemInterface.md)

**Returns:** bool - True если доставка, false если обычный товар




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