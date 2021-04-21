# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Request\Refunds\RefundsResponse
### Namespace: [\YooKassa\Request\Refunds](../namespaces/yookassa-request-refunds.md)
---
**Summary:**

Класс объекта ответа от API со списком возвратов магазина

---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Request-Refunds-RefundsResponse.md#method___construct) |  | Конструктор, устанавливает свойства объекта из пришедшего из API ассоциативного массива |
| public | [getItems()](../classes/YooKassa-Request-Refunds-RefundsResponse.md#method_getItems) |  | Возвращает список возвратов |
| public | [getNextCursor()](../classes/YooKassa-Request-Refunds-RefundsResponse.md#method_getNextCursor) |  | Возвращает токен следующей страницы, если он задан, или null |
| public | [hasNextCursor()](../classes/YooKassa-Request-Refunds-RefundsResponse.md#method_hasNextCursor) |  | Проверяет имееотся ли в ответе токен следующей страницы |
---
### Details
* File: [lib/Request/Refunds/RefundsResponse.php](../../lib/Request/Refunds/RefundsResponse.php)
* Package: YooKassa
* Class Hierarchy:
  * \YooKassa\Request\Refunds\RefundsResponse

---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(array  options) : mixed
```

**Summary**

Конструктор, устанавливает свойства объекта из пришедшего из API ассоциативного массива

**Details:**
* Inherited From: [\YooKassa\Request\Refunds\RefundsResponse](../classes/YooKassa-Request-Refunds-RefundsResponse.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array</code> | options  | Массив настроек, пришедший от API |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \Exception |  |

**Returns:** mixed - 


<a name="method_getItems" class="anchor"></a>
#### public getItems() : \YooKassa\Model\RefundInterface[]

```php
public getItems() : \YooKassa\Model\RefundInterface[]
```

**Summary**

Возвращает список возвратов

**Details:**
* Inherited From: [\YooKassa\Request\Refunds\RefundsResponse](../classes/YooKassa-Request-Refunds-RefundsResponse.md)

**Returns:** \YooKassa\Model\RefundInterface[] - Список возвратов


<a name="method_getNextCursor" class="anchor"></a>
#### public getNextCursor() : string|null

```php
public getNextCursor() : string|null
```

**Summary**

Возвращает токен следующей страницы, если он задан, или null

**Details:**
* Inherited From: [\YooKassa\Request\Refunds\RefundsResponse](../classes/YooKassa-Request-Refunds-RefundsResponse.md)

**Returns:** string|null - Токен следующей страницы


<a name="method_hasNextCursor" class="anchor"></a>
#### public hasNextCursor() : bool

```php
public hasNextCursor() : bool
```

**Summary**

Проверяет имееотся ли в ответе токен следующей страницы

**Details:**
* Inherited From: [\YooKassa\Request\Refunds\RefundsResponse](../classes/YooKassa-Request-Refunds-RefundsResponse.md)

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