# [YooKassa API SDK](../home.md)

# Interface: ReceiptResponseInterface
### Namespace: [\YooKassa\Request\Receipts](../namespaces/yookassa-request-receipts.md)
---
**Summary:**

Interface ReceiptInterface

---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getId()](../classes/YooKassa-Request-Receipts-ReceiptResponseInterface.md#method_getId) |  | Возвращает идентификатор чека в ЮKassa |
| public | [getItems()](../classes/YooKassa-Request-Receipts-ReceiptResponseInterface.md#method_getItems) |  | Возвращает список товаров в заказ |
| public | [getOnBehalfOf()](../classes/YooKassa-Request-Receipts-ReceiptResponseInterface.md#method_getOnBehalfOf) |  | Возвращает идентификатор магазин |
| public | [getSettlements()](../classes/YooKassa-Request-Receipts-ReceiptResponseInterface.md#method_getSettlements) |  | Возвращает список расчетов |
| public | [getStatus()](../classes/YooKassa-Request-Receipts-ReceiptResponseInterface.md#method_getStatus) |  | Возвращает статус доставки данных для чека в онлайн-кассу |
| public | [getTaxSystemCode()](../classes/YooKassa-Request-Receipts-ReceiptResponseInterface.md#method_getTaxSystemCode) |  | Возвращает код системы налогообложения |
| public | [getType()](../classes/YooKassa-Request-Receipts-ReceiptResponseInterface.md#method_getType) |  | Возвращает тип чека в онлайн-кассе |
| public | [notEmpty()](../classes/YooKassa-Request-Receipts-ReceiptResponseInterface.md#method_notEmpty) |  | Проверяет есть ли в чеке хотя бы одна позиция |

---
### Details
* File: [lib/Request/Receipts/ReceiptResponseInterface.php](../../lib/Request/Receipts/ReceiptResponseInterface.php)
* Package: \YooKassa
---
### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| property-read |  | Идентификатор чека в ЮKassa. |
| property-read |  | Тип чека в онлайн-кассе: приход "payment" или возврат "refund". |
| property-read |  | Статус доставки данных для чека в онлайн-кассу ("pending", "succeeded" или "canceled"). |
| property-read |  | Статус доставки данных для чека в онлайн-кассу ("pending", "succeeded" или "canceled"). |
| property-read |  | Статус доставки данных для чека в онлайн-кассу ("pending", "succeeded" или "canceled"). |
| property-read |  | Код системы налогообложения. Число 1-6. |
| property-read |  | Код системы налогообложения. Число 1-6. |
| property-read |  | Список товаров в заказе |
| property-read |  | Список товаров в заказе |
---
## Methods
<a name="method_getId" class="anchor"></a>
#### public getId() : string

```php
public getId() : string
```

**Summary**

Возвращает идентификатор чека в ЮKassa

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptResponseInterface](../classes/YooKassa-Request-Receipts-ReceiptResponseInterface.md)

**Returns:** string - Идентификатор чека в ЮKassa.


<a name="method_getType" class="anchor"></a>
#### public getType() : string

```php
public getType() : string
```

**Summary**

Возвращает тип чека в онлайн-кассе

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptResponseInterface](../classes/YooKassa-Request-Receipts-ReceiptResponseInterface.md)

**Returns:** string - Тип чека в онлайн-кассе: приход "payment" или возврат "refund".


<a name="method_getStatus" class="anchor"></a>
#### public getStatus() : mixed

```php
public getStatus() : mixed
```

**Summary**

Возвращает статус доставки данных для чека в онлайн-кассу

**Description**

 @return string Статус доставки данных для чека в онлайн-кассу ("pending", "succeeded" или "canceled").

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptResponseInterface](../classes/YooKassa-Request-Receipts-ReceiptResponseInterface.md)

**Returns:** mixed - 


<a name="method_getTaxSystemCode" class="anchor"></a>
#### public getTaxSystemCode() : mixed

```php
public getTaxSystemCode() : mixed
```

**Summary**

Возвращает код системы налогообложения

**Description**

 @return int Код системы налогообложения. Число 1-6.

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptResponseInterface](../classes/YooKassa-Request-Receipts-ReceiptResponseInterface.md)

**Returns:** mixed - 


<a name="method_getItems" class="anchor"></a>
#### public getItems() : mixed

```php
public getItems() : mixed
```

**Summary**

Возвращает список товаров в заказ

**Description**

 @return ReceiptResponseItemInterface[]

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptResponseInterface](../classes/YooKassa-Request-Receipts-ReceiptResponseInterface.md)

**Returns:** mixed - 


<a name="method_getSettlements" class="anchor"></a>
#### public getSettlements() : mixed

```php
public getSettlements() : mixed
```

**Summary**

Возвращает список расчетов

**Description**

 @return SettlementInterface[]

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptResponseInterface](../classes/YooKassa-Request-Receipts-ReceiptResponseInterface.md)

**Returns:** mixed - 


<a name="method_getOnBehalfOf" class="anchor"></a>
#### public getOnBehalfOf() : string|null

```php
public getOnBehalfOf() : string|null
```

**Summary**

Возвращает идентификатор магазин

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptResponseInterface](../classes/YooKassa-Request-Receipts-ReceiptResponseInterface.md)

**Returns:** string|null - 


<a name="method_notEmpty" class="anchor"></a>
#### public notEmpty() : bool

```php
public notEmpty() : bool
```

**Summary**

Проверяет есть ли в чеке хотя бы одна позиция

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptResponseInterface](../classes/YooKassa-Request-Receipts-ReceiptResponseInterface.md)

**Returns:** bool - True если чек не пуст, false если в чеке нет ни одной позиции




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