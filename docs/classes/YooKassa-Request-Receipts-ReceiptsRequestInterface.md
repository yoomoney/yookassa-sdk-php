# [YooKassa API SDK](../home.md)

# Interface: ReceiptsRequestInterface
### Namespace: [\YooKassa\Request\Receipts](../namespaces/yookassa-request-receipts.md)
---
**Summary:**

Интерфейс объекта запроса списка возвратов

---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getCreatedAtGt()](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md#method_getCreatedAtGt) |  | Возвращает дату создания от которой будут возвращены возвраты или null если дата не была установлена |
| public | [getCreatedAtGte()](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md#method_getCreatedAtGte) |  | Возвращает дату создания от которой будут возвращены возвраты или null если дата не была установлена |
| public | [getCreatedAtLt()](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md#method_getCreatedAtLt) |  | Возвращает дату создания до которой будут возвращены возвраты или null если дата не была установлена |
| public | [getCreatedAtLte()](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md#method_getCreatedAtLte) |  | Возвращает дату создания до которой будут возвращены возвраты или null если дата не была установлена |
| public | [getCursor()](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md#method_getCursor) |  | Возвращает токен для получения следующей страницы выборки |
| public | [getLimit()](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md#method_getLimit) |  | Возвращает ограничение количества объектов или null если оно до этого не было установлено |
| public | [getPaymentId()](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md#method_getPaymentId) |  | Возвращает идентификатор платежа если он задан или null |
| public | [getRefundId()](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md#method_getRefundId) |  | Возвращает идентификатор возврата |
| public | [getStatus()](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md#method_getStatus) |  | Возвращает статус выбираемых возвратов или null если он до этого не был установлен |
| public | [hasCreatedAtGt()](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md#method_hasCreatedAtGt) |  | Проверяет была ли установлена дата создания от которой выбираются возвраты |
| public | [hasCreatedAtGte()](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md#method_hasCreatedAtGte) |  | Проверяет была ли установлена дата создания от которой выбираются возвраты |
| public | [hasCreatedAtLt()](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md#method_hasCreatedAtLt) |  | Проверяет была ли установлена дата создания до которой выбираются возвраты |
| public | [hasCreatedAtLte()](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md#method_hasCreatedAtLte) |  | Проверяет была ли установлена дата создания до которой выбираются возвраты |
| public | [hasCursor()](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md#method_hasCursor) |  | Проверяет был ли установлен токен следующей страницы |
| public | [hasLimit()](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md#method_hasLimit) |  | Проверяет было ли установлено ограничение количества объектов |
| public | [hasPaymentId()](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md#method_hasPaymentId) |  | Проверяет, был ли задан идентификатор платежа |
| public | [hasRefundId()](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md#method_hasRefundId) |  | Проверяет был ли установлен идентификатор возврата |
| public | [hasStatus()](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md#method_hasStatus) |  | Проверяет был ли установлен статус выбираемых возвратов |

---
### Details
* File: [lib/Request/Receipts/ReceiptsRequestInterface.php](../../lib/Request/Receipts/ReceiptsRequestInterface.php)
* Package: \YooKassa
---
### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| property-read |  | Идентификатор платежа |
| property-read |  | Идентификатор возврата |
| property-read |  | Время создания, от (включительно) |
| property-read |  | Время создания, от (не включая) |
| property-read |  | Время создания, до (включительно) |
| property-read |  | Время создания, до (не включая) |
| property-read |  | Статус возврата |
| property-read |  | Токен для получения следующей страницы выборки |
| property-read |  | Ограничение количества объектов, отображаемых на одной странице выдачи |
---
## Methods
<a name="method_getRefundId" class="anchor"></a>
#### public getRefundId() : string

```php
public getRefundId() : string
```

**Summary**

Возвращает идентификатор возврата

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequestInterface](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md)

**Returns:** string - Идентификатор возврата


<a name="method_hasRefundId" class="anchor"></a>
#### public hasRefundId() : bool

```php
public hasRefundId() : bool
```

**Summary**

Проверяет был ли установлен идентификатор возврата

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequestInterface](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md)

**Returns:** bool - True если идентификатор возврата был установлен, false если не был


<a name="method_getPaymentId" class="anchor"></a>
#### public getPaymentId() : string|null

```php
public getPaymentId() : string|null
```

**Summary**

Возвращает идентификатор платежа если он задан или null

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequestInterface](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md)

**Returns:** string|null - Идентификатор платежа


<a name="method_hasPaymentId" class="anchor"></a>
#### public hasPaymentId() : bool

```php
public hasPaymentId() : bool
```

**Summary**

Проверяет, был ли задан идентификатор платежа

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequestInterface](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md)

**Returns:** bool - True если идентификатор был задан, false если нет


<a name="method_getCreatedAtGte" class="anchor"></a>
#### public getCreatedAtGte() : \DateTime|null

```php
public getCreatedAtGte() : \DateTime|null
```

**Summary**

Возвращает дату создания от которой будут возвращены возвраты или null если дата не была установлена

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequestInterface](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md)

**Returns:** \DateTime|null - Время создания, от (включительно)


<a name="method_hasCreatedAtGte" class="anchor"></a>
#### public hasCreatedAtGte() : bool

```php
public hasCreatedAtGte() : bool
```

**Summary**

Проверяет была ли установлена дата создания от которой выбираются возвраты

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequestInterface](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md)

**Returns:** bool - True если дата была установлена, false если нет


<a name="method_getCreatedAtGt" class="anchor"></a>
#### public getCreatedAtGt() : \DateTime|null

```php
public getCreatedAtGt() : \DateTime|null
```

**Summary**

Возвращает дату создания от которой будут возвращены возвраты или null если дата не была установлена

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequestInterface](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md)

**Returns:** \DateTime|null - Время создания, от (не включая)


<a name="method_hasCreatedAtGt" class="anchor"></a>
#### public hasCreatedAtGt() : bool

```php
public hasCreatedAtGt() : bool
```

**Summary**

Проверяет была ли установлена дата создания от которой выбираются возвраты

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequestInterface](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md)

**Returns:** bool - True если дата была установлена, false если нет


<a name="method_getCreatedAtLte" class="anchor"></a>
#### public getCreatedAtLte() : \DateTime|null

```php
public getCreatedAtLte() : \DateTime|null
```

**Summary**

Возвращает дату создания до которой будут возвращены возвраты или null если дата не была установлена

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequestInterface](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md)

**Returns:** \DateTime|null - Время создания, до (включительно)


<a name="method_hasCreatedAtLte" class="anchor"></a>
#### public hasCreatedAtLte() : bool

```php
public hasCreatedAtLte() : bool
```

**Summary**

Проверяет была ли установлена дата создания до которой выбираются возвраты

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequestInterface](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md)

**Returns:** bool - True если дата была установлена, false если нет


<a name="method_getCreatedAtLt" class="anchor"></a>
#### public getCreatedAtLt() : \DateTime|null

```php
public getCreatedAtLt() : \DateTime|null
```

**Summary**

Возвращает дату создания до которой будут возвращены возвраты или null если дата не была установлена

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequestInterface](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md)

**Returns:** \DateTime|null - Время создания, до (не включая)


<a name="method_hasCreatedAtLt" class="anchor"></a>
#### public hasCreatedAtLt() : bool

```php
public hasCreatedAtLt() : bool
```

**Summary**

Проверяет была ли установлена дата создания до которой выбираются возвраты

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequestInterface](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md)

**Returns:** bool - True если дата была установлена, false если нет


<a name="method_getStatus" class="anchor"></a>
#### public getStatus() : string|null

```php
public getStatus() : string|null
```

**Summary**

Возвращает статус выбираемых возвратов или null если он до этого не был установлен

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequestInterface](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md)

**Returns:** string|null - Статус выбираемых возвратов


<a name="method_hasStatus" class="anchor"></a>
#### public hasStatus() : bool

```php
public hasStatus() : bool
```

**Summary**

Проверяет был ли установлен статус выбираемых возвратов

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequestInterface](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md)

**Returns:** bool - True если статус был установлен, false если нет


<a name="method_getCursor" class="anchor"></a>
#### public getCursor() : string|null

```php
public getCursor() : string|null
```

**Summary**

Возвращает токен для получения следующей страницы выборки

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequestInterface](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md)

**Returns:** string|null - Токен для получения следующей страницы выборки


<a name="method_hasCursor" class="anchor"></a>
#### public hasCursor() : bool

```php
public hasCursor() : bool
```

**Summary**

Проверяет был ли установлен токен следующей страницы

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequestInterface](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md)

**Returns:** bool - True если токен был установлен, false если нет


<a name="method_getLimit" class="anchor"></a>
#### public getLimit() : string|null

```php
public getLimit() : string|null
```

**Summary**

Возвращает ограничение количества объектов или null если оно до этого не было установлено

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequestInterface](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md)

**Returns:** string|null - Ограничение количества объектов


<a name="method_hasLimit" class="anchor"></a>
#### public hasLimit() : bool

```php
public hasLimit() : bool
```

**Summary**

Проверяет было ли установлено ограничение количества объектов

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequestInterface](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md)

**Returns:** bool - True если ограничение количества объектов было установлено, false если нет




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