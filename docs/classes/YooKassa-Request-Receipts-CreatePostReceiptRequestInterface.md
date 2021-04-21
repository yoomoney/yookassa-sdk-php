# [YooKassa API SDK](../home.md)

# Interface: CreatePostReceiptRequestInterface
### Namespace: [\YooKassa\Request\Receipts](../namespaces/yookassa-request-receipts.md)
---
**Summary:**

Interface CreateReceiptRequestInterface

---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [addItem()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md#method_addItem) |  | Добавляет товар в чек |
| public | [getCustomer()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md#method_getCustomer) |  | Возвращает информацию о плательщике. |
| public | [getItems()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md#method_getItems) |  | Возвращает список товаров в заказе |
| public | [getObjectId()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md#method_getObjectId) |  | Возвращает идентификатор объекта, для которого формируется чек |
| public | [getOnBehalfOf()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md#method_getOnBehalfOf) |  | Возвращает идентификатор магазина, от имени которого нужно отправить чек |
| public | [getSend()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md#method_getSend) |  | Возвращает признак отложенной отправки чека |
| public | [getSettlements()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md#method_getSettlements) |  | Возвращает Массив оплат, обеспечивающих выдачу товара |
| public | [getTaxSystemCode()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md#method_getTaxSystemCode) |  | Возвращает код системы налогообложения |
| public | [getType()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md#method_getType) |  | Возвращает тип чека в онлайн-кассе |
| public | [notEmpty()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md#method_notEmpty) |  | Проверяет есть ли в чеке хотя бы одна позиция |
| public | [setCustomer()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md#method_setCustomer) |  | Устанавливает информацию о пользователе |
| public | [setItems()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md#method_setItems) |  | Устанавливает список товаров чека |
| public | [setObjectId()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md#method_setObjectId) |  | Устанавливает идентификатор объекта, для которого формируется чек |
| public | [setOnBehalfOf()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md#method_setOnBehalfOf) |  | Устанавливает идентификатор магазина, от имени которого нужно отправить чек. |
| public | [setSend()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md#method_setSend) |  | Устанавливает признак отложенной отправки чека |
| public | [setSettlements()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md#method_setSettlements) |  | Устанавливает массив оплат, обеспечивающих выдачу товара |
| public | [setTaxSystemCode()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md#method_setTaxSystemCode) |  | Устанавливает код системы налогообложения |
| public | [setType()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md#method_setType) |  | Устанавливает тип чека в онлайн-кассе |

---
### Details
* File: [lib/Request/Receipts/CreatePostReceiptRequestInterface.php](../../lib/Request/Receipts/CreatePostReceiptRequestInterface.php)
* Package: \YooKassa
---
### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| property |  | Идентификатор объекта ("payment" или "refund), для которого формируется чек |
| property |  | Идентификатор объекта ("payment" или "refund), для которого формируется чек |
| property |  | Тип чека в онлайн-кассе: приход "payment" или возврат "refund" |
| property |  | Признак отложенной отправки чека |
| property |  | Информация о плательщике |
| property |  | Код системы налогообложения. Число 1-6 |
| property |  | Код системы налогообложения. Число 1-6 |
| property |  | Список товаров в заказе |
| property |  | Информация о поставщике товара или услуги |
| property |  | Массив оплат, обеспечивающих выдачу товара |
---
## Methods
<a name="method_getObjectId" class="anchor"></a>
#### public getObjectId() : string

```php
public getObjectId() : string
```

**Summary**

Возвращает идентификатор объекта, для которого формируется чек

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequestInterface](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md)

**Returns:** string - Идентификатор объекта


<a name="method_setObjectId" class="anchor"></a>
#### public setObjectId() : \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface

```php
public setObjectId(string  value) : \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface
```

**Summary**

Устанавливает идентификатор объекта, для которого формируется чек

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequestInterface](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Идентификатор объекта |

**Returns:** \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface - 


<a name="method_getType" class="anchor"></a>
#### public getType() : string

```php
public getType() : string
```

**Summary**

Возвращает тип чека в онлайн-кассе

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequestInterface](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md)

**Returns:** string - Тип чека в онлайн-кассе: приход "payment" или возврат "refund"


<a name="method_setType" class="anchor"></a>
#### public setType() : \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface

```php
public setType(string  value) : \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface
```

**Summary**

Устанавливает тип чека в онлайн-кассе

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequestInterface](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Тип чека в онлайн-кассе: приход "payment" или возврат "refund" |

**Returns:** \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface - 


<a name="method_getSend" class="anchor"></a>
#### public getSend() : mixed

```php
public getSend() : mixed
```

**Summary**

Возвращает признак отложенной отправки чека

**Description**

 @return bool Признак отложенной отправки чека

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequestInterface](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md)

**Returns:** mixed - 


<a name="method_setSend" class="anchor"></a>
#### public setSend() : \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface

```php
public setSend(bool  value) : \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface
```

**Summary**

Устанавливает признак отложенной отправки чека

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequestInterface](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">bool</code> | value  | Признак отложенной отправки чека |

**Returns:** \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface - 


<a name="method_getTaxSystemCode" class="anchor"></a>
#### public getTaxSystemCode() : mixed

```php
public getTaxSystemCode() : mixed
```

**Summary**

Возвращает код системы налогообложения

**Description**

 @return int Код системы налогообложения. Число 1-6

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequestInterface](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md)

**Returns:** mixed - 


<a name="method_setTaxSystemCode" class="anchor"></a>
#### public setTaxSystemCode() : \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface

```php
public setTaxSystemCode(int  value) : \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface
```

**Summary**

Устанавливает код системы налогообложения

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequestInterface](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">int</code> | value  | Код системы налогообложения. Число 1-6 |

**Returns:** \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface - 


<a name="method_getCustomer" class="anchor"></a>
#### public getCustomer() : \YooKassa\Model\ReceiptCustomerInterface

```php
public getCustomer() : \YooKassa\Model\ReceiptCustomerInterface
```

**Summary**

Возвращает информацию о плательщике.

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequestInterface](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md)

**Returns:** \YooKassa\Model\ReceiptCustomerInterface - Информация о плательщике


<a name="method_setCustomer" class="anchor"></a>
#### public setCustomer() : \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface

```php
public setCustomer(\YooKassa\Model\ReceiptCustomerInterface  value) : \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface
```

**Summary**

Устанавливает информацию о пользователе

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequestInterface](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\ReceiptCustomerInterface</code> | value  | информация о плательщике |

**Returns:** \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface - 


<a name="method_getItems" class="anchor"></a>
#### public getItems() : mixed

```php
public getItems() : mixed
```

**Summary**

Возвращает список товаров в заказе

**Description**

 @return ReceiptItemInterface[]

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequestInterface](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md)

**Returns:** mixed - 


<a name="method_setItems" class="anchor"></a>
#### public setItems() : \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface

```php
public setItems(\YooKassa\Model\ReceiptItemInterface[]|array  value) : \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface
```

**Summary**

Устанавливает список товаров чека

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequestInterface](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\ReceiptItemInterface[] OR array</code> | value  | список товаров чека |

**Returns:** \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface - 


<a name="method_addItem" class="anchor"></a>
#### public addItem() : \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface

```php
public addItem(\YooKassa\Model\ReceiptItemInterface|array  value) : \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface
```

**Summary**

Добавляет товар в чек

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequestInterface](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\ReceiptItemInterface OR array</code> | value  | Информация о товаре |

**Returns:** \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface - 


<a name="method_getSettlements" class="anchor"></a>
#### public getSettlements() : mixed

```php
public getSettlements() : mixed
```

**Summary**

Возвращает Массив оплат, обеспечивающих выдачу товара

**Description**

 @return SettlementInterface[]

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequestInterface](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md)

**Returns:** mixed - 


<a name="method_setSettlements" class="anchor"></a>
#### public setSettlements() : \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface

```php
public setSettlements(\YooKassa\Model\SettlementInterface[]|array  value) : \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface
```

**Summary**

Устанавливает массив оплат, обеспечивающих выдачу товара

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequestInterface](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\SettlementInterface[] OR array</code> | value  | Массив оплат, обеспечивающих выдачу товара |

**Returns:** \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface - 


<a name="method_getOnBehalfOf" class="anchor"></a>
#### public getOnBehalfOf() : string|null

```php
public getOnBehalfOf() : string|null
```

**Summary**

Возвращает идентификатор магазина, от имени которого нужно отправить чек

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequestInterface](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md)

**Returns:** string|null - Идентификатор магазина, от имени которого нужно отправить чек


<a name="method_setOnBehalfOf" class="anchor"></a>
#### public setOnBehalfOf() : mixed

```php
public setOnBehalfOf(string  value) : mixed
```

**Summary**

Устанавливает идентификатор магазина, от имени которого нужно отправить чек.

**Description**

Выдается ЮKassa, отображается в разделе Продавцы личного кабинета (столбец shopId).
Необходимо передавать, если вы используете решение ЮKassa для платформ.

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequestInterface](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Идентификатор магазина, от имени которого нужно отправить чек |

**Returns:** mixed - 


<a name="method_notEmpty" class="anchor"></a>
#### public notEmpty() : bool

```php
public notEmpty() : bool
```

**Summary**

Проверяет есть ли в чеке хотя бы одна позиция

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequestInterface](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md)

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