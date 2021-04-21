# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Request\Receipts\ReceiptsResponse
### Namespace: [\YooKassa\Request\Receipts](../namespaces/yookassa-request-receipts.md)
---
**Summary:**

Класс для работы со списком чеков

---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Request-Receipts-ReceiptsResponse.md#method___construct) |  | Конструктор, устанавливает список полученых от API чеков |
| public | [getItems()](../classes/YooKassa-Request-Receipts-ReceiptsResponse.md#method_getItems) |  | Возаращает список чеков |
| public | [getNextCursor()](../classes/YooKassa-Request-Receipts-ReceiptsResponse.md#method_getNextCursor) |  | Возвращает токен следующей страницы, если он задан, или null |
| public | [getType()](../classes/YooKassa-Request-Receipts-ReceiptsResponse.md#method_getType) |  | Возвращает формат выдачи результатов запроса. Возможное значение: `list` (список). |
| public | [hasNextCursor()](../classes/YooKassa-Request-Receipts-ReceiptsResponse.md#method_hasNextCursor) |  | Проверяет имееотся ли в ответе токен следующей страницы |
---
### Details
* File: [lib/Request/Receipts/ReceiptsResponse.php](../../lib/Request/Receipts/ReceiptsResponse.php)
* Package: YooKassa
* Class Hierarchy:
  * \YooKassa\Request\Receipts\ReceiptsResponse

---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(array  response) : mixed
```

**Summary**

Конструктор, устанавливает список полученых от API чеков

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsResponse](../classes/YooKassa-Request-Receipts-ReceiptsResponse.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array</code> | response  | Разобранный ответ от API в виде чеков |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \Exception |  |

**Returns:** mixed - 


<a name="method_getItems" class="anchor"></a>
#### public getItems() : \YooKassa\Request\Receipts\ReceiptResponseInterface[]

```php
public getItems() : \YooKassa\Request\Receipts\ReceiptResponseInterface[]
```

**Summary**

Возаращает список чеков

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsResponse](../classes/YooKassa-Request-Receipts-ReceiptsResponse.md)

**Returns:** \YooKassa\Request\Receipts\ReceiptResponseInterface[] - Список чеков


<a name="method_getNextCursor" class="anchor"></a>
#### public getNextCursor() : string|null

```php
public getNextCursor() : string|null
```

**Summary**

Возвращает токен следующей страницы, если он задан, или null

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsResponse](../classes/YooKassa-Request-Receipts-ReceiptsResponse.md)

**Returns:** string|null - Токен следующей страницы


<a name="method_getType" class="anchor"></a>
#### public getType() : string

```php
public getType() : string
```

**Summary**

Возвращает формат выдачи результатов запроса. Возможное значение: `list` (список).

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsResponse](../classes/YooKassa-Request-Receipts-ReceiptsResponse.md)

**Returns:** string - Формат выдачи результатов запроса.


<a name="method_hasNextCursor" class="anchor"></a>
#### public hasNextCursor() : bool

```php
public hasNextCursor() : bool
```

**Summary**

Проверяет имееотся ли в ответе токен следующей страницы

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsResponse](../classes/YooKassa-Request-Receipts-ReceiptsResponse.md)

**Returns:** bool - True если токен следующей страницы есть, false если нет



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