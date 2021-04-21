# [YooKassa API SDK](../home.md)

# Interface: PaymentsRequestInterface
### Namespace: [\YooKassa\Request\Payments](../namespaces/yookassa-request-payments.md)
---
**Summary:**

Interface PaymentsRequestInterface

---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getCreatedAtGt()](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md#method_getCreatedAtGt) |  | Возвращает дату создания от которой будут возвращены платежи или null если дата не была установлена |
| public | [getCreatedAtGte()](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md#method_getCreatedAtGte) |  | Возвращает дату создания от которой будут возвращены платежи или null если дата не была установлена |
| public | [getCreatedAtLt()](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md#method_getCreatedAtLt) |  | Возвращает дату создания до которой будут возвращены платежи или null если дата не была установлена |
| public | [getCreatedAtLte()](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md#method_getCreatedAtLte) |  | Возвращает дату создания до которой будут возвращены платежи или null если дата не была установлена |
| public | [getCursor()](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md#method_getCursor) |  | Возвращает страницу выдачи результатов или null если она до этого не была установлена |
| public | [getLimit()](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md#method_getLimit) |  | Возвращает ограничение количества объектов платежа или null если оно до этого не было установлено |
| public | [getStatus()](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md#method_getStatus) |  | Возвращает статус выбираемых платежей или null если он до этого не был установлен |
| public | [hasCreatedAtGt()](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md#method_hasCreatedAtGt) |  | Проверяет была ли установлена дата создания от которой выбираются платежи |
| public | [hasCreatedAtGte()](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md#method_hasCreatedAtGte) |  | Проверяет была ли установлена дата создания от которой выбираются платежи |
| public | [hasCreatedAtLt()](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md#method_hasCreatedAtLt) |  | Проверяет была ли установлена дата создания до которой выбираются платежи |
| public | [hasCreatedAtLte()](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md#method_hasCreatedAtLte) |  | Проверяет была ли установлена дата создания до которой выбираются платежи |
| public | [hasCursor()](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md#method_hasCursor) |  | Проверяет была ли установлена страница выдачи результатов |
| public | [hasLimit()](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md#method_hasLimit) |  | Проверяет было ли установлено ограничение количества объектов платежа |
| public | [hasStatus()](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md#method_hasStatus) |  | Проверяет был ли установлен статус выбираемых платежей |
| public | [setCreatedAtGt()](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md#method_setCreatedAtGt) |  | Устанавливает дату создания от которой выбираются платежи |
| public | [setCreatedAtGte()](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md#method_setCreatedAtGte) |  | Устанавливает дату создания от которой выбираются платежи |
| public | [setCreatedAtLt()](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md#method_setCreatedAtLt) |  | Устанавливает дату создания до которой выбираются платежи |
| public | [setCreatedAtLte()](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md#method_setCreatedAtLte) |  | Устанавливает дату создания до которой выбираются платежи |
| public | [setCursor()](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md#method_setCursor) |  | Устанавливает страницу выдачи результатов |
| public | [setLimit()](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md#method_setLimit) |  | Устанавливает ограничение количества объектов платежа |
| public | [setStatus()](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md#method_setStatus) |  | Устанавливает статус выбираемых платежей |

---
### Details
* File: [lib/Request/Payments/PaymentsRequestInterface.php](../../lib/Request/Payments/PaymentsRequestInterface.php)
* Package: \YooKassa
---
### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| property-read |  | Страница выдачи результатов, которую необходимо отобразить |
| property-read |  | Время создания, от (включительно) |
| property-read |  | Время создания, от (не включая) |
| property-read |  | Время создания, до (включительно) |
| property-read |  | Время создания, до (не включая) |
| property-read |  | Время подтверждения, от (включительно) |
| property-read |  | Время подтверждения, от (не включая) |
| property-read |  | Время подтверждения, до (включительно) |
| property-read |  | Время подтверждения, до (не включая) |
| property-read |  | Ограничение количества объектов платежа, отображаемых на одной странице выдачи |
| property-read |  | Идентификатор шлюза. |
| property-read |  | Статус платежа |
---
## Methods
<a name="method_getCursor" class="anchor"></a>
#### public getCursor() : string|null

```php
public getCursor() : string|null
```

**Summary**

Возвращает страницу выдачи результатов или null если она до этого не была установлена

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequestInterface](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md)

**Returns:** string|null - Страница выдачи результатов


<a name="method_hasCursor" class="anchor"></a>
#### public hasCursor() : bool

```php
public hasCursor() : bool
```

**Summary**

Проверяет была ли установлена страница выдачи результатов

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequestInterface](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md)

**Returns:** bool - True если страница выдачи результатов была установлена, false если нет


<a name="method_setCursor" class="anchor"></a>
#### public setCursor() : void

```php
public setCursor(string  value) : void
```

**Summary**

Устанавливает страницу выдачи результатов

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequestInterface](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Страница |

**Returns:** void - 


<a name="method_getCreatedAtGte" class="anchor"></a>
#### public getCreatedAtGte() : \DateTime|null

```php
public getCreatedAtGte() : \DateTime|null
```

**Summary**

Возвращает дату создания от которой будут возвращены платежи или null если дата не была установлена

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequestInterface](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md)

**Returns:** \DateTime|null - Время создания, от (включительно)


<a name="method_hasCreatedAtGte" class="anchor"></a>
#### public hasCreatedAtGte() : bool

```php
public hasCreatedAtGte() : bool
```

**Summary**

Проверяет была ли установлена дата создания от которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequestInterface](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md)

**Returns:** bool - True если дата была установлена, false если нет


<a name="method_setCreatedAtGte" class="anchor"></a>
#### public setCreatedAtGte() : void

```php
public setCreatedAtGte(\DateTime  value) : void
```

**Summary**

Устанавливает дату создания от которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequestInterface](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime</code> | value  | Дата |

**Returns:** void - 


<a name="method_getCreatedAtGt" class="anchor"></a>
#### public getCreatedAtGt() : \DateTime|null

```php
public getCreatedAtGt() : \DateTime|null
```

**Summary**

Возвращает дату создания от которой будут возвращены платежи или null если дата не была установлена

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequestInterface](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md)

**Returns:** \DateTime|null - Время создания, от (не включая)


<a name="method_hasCreatedAtGt" class="anchor"></a>
#### public hasCreatedAtGt() : bool

```php
public hasCreatedAtGt() : bool
```

**Summary**

Проверяет была ли установлена дата создания от которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequestInterface](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md)

**Returns:** bool - True если дата была установлена, false если нет


<a name="method_setCreatedAtGt" class="anchor"></a>
#### public setCreatedAtGt() : void

```php
public setCreatedAtGt(\DateTime  value) : void
```

**Summary**

Устанавливает дату создания от которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequestInterface](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime</code> | value  | Дата |

**Returns:** void - 


<a name="method_getCreatedAtLte" class="anchor"></a>
#### public getCreatedAtLte() : \DateTime|null

```php
public getCreatedAtLte() : \DateTime|null
```

**Summary**

Возвращает дату создания до которой будут возвращены платежи или null если дата не была установлена

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequestInterface](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md)

**Returns:** \DateTime|null - Время создания, до (включительно)


<a name="method_hasCreatedAtLte" class="anchor"></a>
#### public hasCreatedAtLte() : bool

```php
public hasCreatedAtLte() : bool
```

**Summary**

Проверяет была ли установлена дата создания до которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequestInterface](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md)

**Returns:** bool - True если дата была установлена, false если нет


<a name="method_setCreatedAtLte" class="anchor"></a>
#### public setCreatedAtLte() : void

```php
public setCreatedAtLte(\DateTime  value) : void
```

**Summary**

Устанавливает дату создания до которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequestInterface](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime</code> | value  | Дата |

**Returns:** void - 


<a name="method_getCreatedAtLt" class="anchor"></a>
#### public getCreatedAtLt() : \DateTime|null

```php
public getCreatedAtLt() : \DateTime|null
```

**Summary**

Возвращает дату создания до которой будут возвращены платежи или null если дата не была установлена

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequestInterface](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md)

**Returns:** \DateTime|null - Время создания, до (не включая)


<a name="method_hasCreatedAtLt" class="anchor"></a>
#### public hasCreatedAtLt() : bool

```php
public hasCreatedAtLt() : bool
```

**Summary**

Проверяет была ли установлена дата создания до которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequestInterface](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md)

**Returns:** bool - True если дата была установлена, false если нет


<a name="method_setCreatedAtLt" class="anchor"></a>
#### public setCreatedAtLt() : void

```php
public setCreatedAtLt(\DateTime  value) : void
```

**Summary**

Устанавливает дату создания до которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequestInterface](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime</code> | value  | Дата |

**Returns:** void - 


<a name="method_getLimit" class="anchor"></a>
#### public getLimit() : string|null

```php
public getLimit() : string|null
```

**Summary**

Возвращает ограничение количества объектов платежа или null если оно до этого не было установлено

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequestInterface](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md)

**Returns:** string|null - Ограничение количества объектов платежа


<a name="method_hasLimit" class="anchor"></a>
#### public hasLimit() : bool

```php
public hasLimit() : bool
```

**Summary**

Проверяет было ли установлено ограничение количества объектов платежа

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequestInterface](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md)

**Returns:** bool - True если ограничение количества объектов платежа было установлено, false если нет


<a name="method_setLimit" class="anchor"></a>
#### public setLimit() : void

```php
public setLimit(int  value) : void
```

**Summary**

Устанавливает ограничение количества объектов платежа

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequestInterface](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">int</code> | value  | Количества объектов платежа на странице |

**Returns:** void - 


<a name="method_getStatus" class="anchor"></a>
#### public getStatus() : string|null

```php
public getStatus() : string|null
```

**Summary**

Возвращает статус выбираемых платежей или null если он до этого не был установлен

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequestInterface](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md)

**Returns:** string|null - Статус выбираемых платежей


<a name="method_hasStatus" class="anchor"></a>
#### public hasStatus() : bool

```php
public hasStatus() : bool
```

**Summary**

Проверяет был ли установлен статус выбираемых платежей

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequestInterface](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md)

**Returns:** bool - True если статус был установлен, false если нет


<a name="method_setStatus" class="anchor"></a>
#### public setStatus() : void

```php
public setStatus(string  value) : void
```

**Summary**

Устанавливает статус выбираемых платежей

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequestInterface](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Статус платежей |

**Returns:** void - 




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