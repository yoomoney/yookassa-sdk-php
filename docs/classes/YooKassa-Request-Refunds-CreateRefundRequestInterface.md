# [YooKassa API SDK](../home.md)

# Interface: CreateRefundRequestInterface
### Namespace: [\YooKassa\Request\Refunds](../namespaces/yookassa-request-refunds.md)
---
**Summary:**

Интерфейс объекта запроса на возврат

---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getAmount()](../classes/YooKassa-Request-Refunds-CreateRefundRequestInterface.md#method_getAmount) |  | Возвращает сумму возвращаемых средств |
| public | [getDescription()](../classes/YooKassa-Request-Refunds-CreateRefundRequestInterface.md#method_getDescription) |  | Возвращает комментарий к возврату или null, если комментарий не задан |
| public | [getPaymentId()](../classes/YooKassa-Request-Refunds-CreateRefundRequestInterface.md#method_getPaymentId) |  | Возвращает айди платежа для которого создаётся возврат средств |
| public | [getReceipt()](../classes/YooKassa-Request-Refunds-CreateRefundRequestInterface.md#method_getReceipt) |  | Возвращает инстанс чека или null если чек не задан |
| public | [getSources()](../classes/YooKassa-Request-Refunds-CreateRefundRequestInterface.md#method_getSources) |  | Возвращает информацию о распределении денег — сколько и в какой магазин нужно перевести |
| public | [hasDescription()](../classes/YooKassa-Request-Refunds-CreateRefundRequestInterface.md#method_hasDescription) |  | Проверяет задан ли комментарий к создаваемому возврату |
| public | [hasReceipt()](../classes/YooKassa-Request-Refunds-CreateRefundRequestInterface.md#method_hasReceipt) |  | Проверяет задан ли чек |
| public | [hasSources()](../classes/YooKassa-Request-Refunds-CreateRefundRequestInterface.md#method_hasSources) |  | Проверяет наличие информации о распределении денег |
| public | [setDescription()](../classes/YooKassa-Request-Refunds-CreateRefundRequestInterface.md#method_setDescription) |  | Устанавливает комментарий к возврату |
| public | [setReceipt()](../classes/YooKassa-Request-Refunds-CreateRefundRequestInterface.md#method_setReceipt) |  | Устанавливает чек |
| public | [setSources()](../classes/YooKassa-Request-Refunds-CreateRefundRequestInterface.md#method_setSources) |  | Устанавливает информацию о распределении денег — сколько и в какой магазин нужно перевести |

---
### Details
* File: [lib/Request/Refunds/CreateRefundRequestInterface.php](../../lib/Request/Refunds/CreateRefundRequestInterface.php)
* Package: \YooKassa
---
### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| property-read |  | Айди платежа для которого создаётся возврат |
| property-read |  | Сумма возврата |
| property-read |  | Комментарий к операции возврата, основание для возврата средств покупателю. |
| property-read |  | Инстанс чека или null |
---
## Methods
<a name="method_getPaymentId" class="anchor"></a>
#### public getPaymentId() : string

```php
public getPaymentId() : string
```

**Summary**

Возвращает айди платежа для которого создаётся возврат средств

**Details:**
* Inherited From: [\YooKassa\Request\Refunds\CreateRefundRequestInterface](../classes/YooKassa-Request-Refunds-CreateRefundRequestInterface.md)

**Returns:** string - Айди платежа для которого создаётся возврат


<a name="method_getAmount" class="anchor"></a>
#### public getAmount() : \YooKassa\Model\AmountInterface

```php
public getAmount() : \YooKassa\Model\AmountInterface
```

**Summary**

Возвращает сумму возвращаемых средств

**Details:**
* Inherited From: [\YooKassa\Request\Refunds\CreateRefundRequestInterface](../classes/YooKassa-Request-Refunds-CreateRefundRequestInterface.md)

**Returns:** \YooKassa\Model\AmountInterface - Сумма возврата


<a name="method_setDescription" class="anchor"></a>
#### public setDescription() : mixed

```php
public setDescription(string  value) : mixed
```

**Summary**

Устанавливает комментарий к возврату

**Details:**
* Inherited From: [\YooKassa\Request\Refunds\CreateRefundRequestInterface](../classes/YooKassa-Request-Refunds-CreateRefundRequestInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Комментарий к операции возврата, основание для возврата средств покупателю |

**Returns:** mixed - 


<a name="method_getDescription" class="anchor"></a>
#### public getDescription() : string

```php
public getDescription() : string
```

**Summary**

Возвращает комментарий к возврату или null, если комментарий не задан

**Details:**
* Inherited From: [\YooKassa\Request\Refunds\CreateRefundRequestInterface](../classes/YooKassa-Request-Refunds-CreateRefundRequestInterface.md)

**Returns:** string - Комментарий к операции возврата, основание для возврата средств покупателю.


<a name="method_hasDescription" class="anchor"></a>
#### public hasDescription() : bool

```php
public hasDescription() : bool
```

**Summary**

Проверяет задан ли комментарий к создаваемому возврату

**Details:**
* Inherited From: [\YooKassa\Request\Refunds\CreateRefundRequestInterface](../classes/YooKassa-Request-Refunds-CreateRefundRequestInterface.md)

**Returns:** bool - True если комментарий установлен, false если нет


<a name="method_setReceipt" class="anchor"></a>
#### public setReceipt() : mixed

```php
public setReceipt(\YooKassa\Model\ReceiptInterface|null  value) : mixed
```

**Summary**

Устанавливает чек

**Details:**
* Inherited From: [\YooKassa\Request\Refunds\CreateRefundRequestInterface](../classes/YooKassa-Request-Refunds-CreateRefundRequestInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\ReceiptInterface OR null</code> | value  | Инстанс чека или null для удаления информации о чеке |

**Returns:** mixed - 


<a name="method_getReceipt" class="anchor"></a>
#### public getReceipt() : \YooKassa\Model\ReceiptInterface|null

```php
public getReceipt() : \YooKassa\Model\ReceiptInterface|null
```

**Summary**

Возвращает инстанс чека или null если чек не задан

**Details:**
* Inherited From: [\YooKassa\Request\Refunds\CreateRefundRequestInterface](../classes/YooKassa-Request-Refunds-CreateRefundRequestInterface.md)

**Returns:** \YooKassa\Model\ReceiptInterface|null - Инстанс чека или null


<a name="method_hasReceipt" class="anchor"></a>
#### public hasReceipt() : bool

```php
public hasReceipt() : bool
```

**Summary**

Проверяет задан ли чек

**Details:**
* Inherited From: [\YooKassa\Request\Refunds\CreateRefundRequestInterface](../classes/YooKassa-Request-Refunds-CreateRefundRequestInterface.md)

**Returns:** bool - True если чек есть, false если нет


<a name="method_setSources" class="anchor"></a>
#### public setSources() : mixed

```php
public setSources(\YooKassa\Model\SourceInterface[]  value) : mixed
```

**Summary**

Устанавливает информацию о распределении денег — сколько и в какой магазин нужно перевести

**Details:**
* Inherited From: [\YooKassa\Request\Refunds\CreateRefundRequestInterface](../classes/YooKassa-Request-Refunds-CreateRefundRequestInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\SourceInterface[]</code> | value  | Информация о распределении денег |

**Returns:** mixed - 


<a name="method_getSources" class="anchor"></a>
#### public getSources() : \YooKassa\Model\SourceInterface[]

```php
public getSources() : \YooKassa\Model\SourceInterface[]
```

**Summary**

Возвращает информацию о распределении денег — сколько и в какой магазин нужно перевести

**Details:**
* Inherited From: [\YooKassa\Request\Refunds\CreateRefundRequestInterface](../classes/YooKassa-Request-Refunds-CreateRefundRequestInterface.md)

**Returns:** \YooKassa\Model\SourceInterface[] - Информация о распределении денег


<a name="method_hasSources" class="anchor"></a>
#### public hasSources() : bool

```php
public hasSources() : bool
```

**Summary**

Проверяет наличие информации о распределении денег

**Details:**
* Inherited From: [\YooKassa\Request\Refunds\CreateRefundRequestInterface](../classes/YooKassa-Request-Refunds-CreateRefundRequestInterface.md)

**Returns:** bool - 




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