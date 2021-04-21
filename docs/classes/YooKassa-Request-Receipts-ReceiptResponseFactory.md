# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Request\Receipts\ReceiptResponseFactory
### Namespace: [\YooKassa\Request\Receipts](../namespaces/yookassa-request-receipts.md)
---
**Summary:**

Фабричный класс для работы с чеками

---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [factory()](../classes/YooKassa-Request-Receipts-ReceiptResponseFactory.md#method_factory) |  | Фабричный метод для работы с чеками |
---
### Details
* File: [lib/Request/Receipts/ReceiptResponseFactory.php](../../lib/Request/Receipts/ReceiptResponseFactory.php)
* Package: YooKassa
* Class Hierarchy:
  * \YooKassa\Request\Receipts\ReceiptResponseFactory

---
## Methods
<a name="method_factory" class="anchor"></a>
#### public factory() : \YooKassa\Request\Receipts\AbstractReceiptResponse|\YooKassa\Request\Receipts\SimpleReceiptResponse|\YooKassa\Request\Receipts\PaymentReceiptResponse|\YooKassa\Request\Receipts\RefundReceiptResponse

```php
public factory(array  data) : \YooKassa\Request\Receipts\AbstractReceiptResponse|\YooKassa\Request\Receipts\SimpleReceiptResponse|\YooKassa\Request\Receipts\PaymentReceiptResponse|\YooKassa\Request\Receipts\RefundReceiptResponse
```

**Summary**

Фабричный метод для работы с чеками

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptResponseFactory](../classes/YooKassa-Request-Receipts-ReceiptResponseFactory.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array</code> | data  | Массив с данными чека |

**Returns:** \YooKassa\Request\Receipts\AbstractReceiptResponse|\YooKassa\Request\Receipts\SimpleReceiptResponse|\YooKassa\Request\Receipts\PaymentReceiptResponse|\YooKassa\Request\Receipts\RefundReceiptResponse - Объект чека определенного типа



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