# [YooKassa API SDK](../home.md)

# Interface: TransferInterface
### Namespace: [\YooKassa\Model](../namespaces/yookassa-model.md)
---
**Summary:**

Interface TransferInterface

**Description:**

Данные о распределении денег — сколько и в какой магазин нужно перевести.
Присутствует, если вы используете решение ЮKassa для платформ.

---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getAccountId()](../classes/YooKassa-Model-TransferInterface.md#method_getAccountId) |  | Возвращает идентификатор магазина-получателя средств |
| public | [getAmount()](../classes/YooKassa-Model-TransferInterface.md#method_getAmount) |  | Возвращает сумму оплаты |
| public | [getMetadata()](../classes/YooKassa-Model-TransferInterface.md#method_getMetadata) |  | Возвращает метаданные |
| public | [getPlatformFeeAmount()](../classes/YooKassa-Model-TransferInterface.md#method_getPlatformFeeAmount) |  | Возвращает комиссию за проданные товары и услуги, которая удерживается с магазина в вашу пользу |
| public | [getStatus()](../classes/YooKassa-Model-TransferInterface.md#method_getStatus) |  | Возвращает статус операции распределения средств конечному получателю |
| public | [hasAmount()](../classes/YooKassa-Model-TransferInterface.md#method_hasAmount) |  | Проверяет была ли установлена сумма оплаты |
| public | [hasMetadata()](../classes/YooKassa-Model-TransferInterface.md#method_hasMetadata) |  | Проверяет были ли установлены метаданные |
| public | [hasPlatformFeeAmount()](../classes/YooKassa-Model-TransferInterface.md#method_hasPlatformFeeAmount) |  | Проверяет была ли установлена комиссия за проданные товары и услуги, которая удерживается с магазина в вашу пользу |
| public | [setAccountId()](../classes/YooKassa-Model-TransferInterface.md#method_setAccountId) |  | Устанавливает идентификатор магазина-получателя средств |
| public | [setAmount()](../classes/YooKassa-Model-TransferInterface.md#method_setAmount) |  | Устанавливает сумму оплаты |
| public | [setMetadata()](../classes/YooKassa-Model-TransferInterface.md#method_setMetadata) |  | Устанавливает метаданные |
| public | [setPlatformFeeAmount()](../classes/YooKassa-Model-TransferInterface.md#method_setPlatformFeeAmount) |  | Устанавливает комиссию за проданные товары и услуги, которая удерживается с магазина в вашу пользу |
| public | [setStatus()](../classes/YooKassa-Model-TransferInterface.md#method_setStatus) |  | Устанавливает статус операции распределения средств конечному получателю |

---
### Details
* File: [lib/Model/TransferInterface.php](../../lib/Model/TransferInterface.php)
* Package: \YooKassa
---
### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| property |  | Сумма, которую необходимо перечислить магазину |
| property |  | Комиссия за проданные товары и услуги, которая удерживается с магазина в вашу пользу |
| property |  | Идентификатор магазина, в пользу которого вы принимаете оплату |
| property |  | Статус распределения денег между магазинами. Возможные значения: `pending`, `waiting_for_capture`, `succeeded`, `canceled` |
| property |  | Любые дополнительные данные, которые нужны вам для работы с платежами (например, номер заказа) |
---
## Methods
<a name="method_setAccountId" class="anchor"></a>
#### public setAccountId() : void

```php
public setAccountId(string  value) : void
```

**Summary**

Устанавливает идентификатор магазина-получателя средств

**Details:**
* Inherited From: [\YooKassa\Model\TransferInterface](../classes/YooKassa-Model-TransferInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Идентификатор магазина-получателя средств |

**Returns:** void - 


<a name="method_getAccountId" class="anchor"></a>
#### public getAccountId() : string|null

```php
public getAccountId() : string|null
```

**Summary**

Возвращает идентификатор магазина-получателя средств

**Details:**
* Inherited From: [\YooKassa\Model\TransferInterface](../classes/YooKassa-Model-TransferInterface.md)

**Returns:** string|null - Идентификатор магазина-получателя средств


<a name="method_getAmount" class="anchor"></a>
#### public getAmount() : \YooKassa\Model\AmountInterface

```php
public getAmount() : \YooKassa\Model\AmountInterface
```

**Summary**

Возвращает сумму оплаты

**Details:**
* Inherited From: [\YooKassa\Model\TransferInterface](../classes/YooKassa-Model-TransferInterface.md)

**Returns:** \YooKassa\Model\AmountInterface - Сумма оплаты


<a name="method_hasAmount" class="anchor"></a>
#### public hasAmount() : bool

```php
public hasAmount() : bool
```

**Summary**

Проверяет была ли установлена сумма оплаты

**Details:**
* Inherited From: [\YooKassa\Model\TransferInterface](../classes/YooKassa-Model-TransferInterface.md)

**Returns:** bool - True если сумма оплаты была установлена, false если нет


<a name="method_setAmount" class="anchor"></a>
#### public setAmount() : mixed

```php
public setAmount(\YooKassa\Model\AmountInterface|array  value) : mixed
```

**Summary**

Устанавливает сумму оплаты

**Details:**
* Inherited From: [\YooKassa\Model\TransferInterface](../classes/YooKassa-Model-TransferInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\AmountInterface OR array</code> | value  | Сумма оплаты |

**Returns:** mixed - 


<a name="method_getPlatformFeeAmount" class="anchor"></a>
#### public getPlatformFeeAmount() : \YooKassa\Model\AmountInterface

```php
public getPlatformFeeAmount() : \YooKassa\Model\AmountInterface
```

**Summary**

Возвращает комиссию за проданные товары и услуги, которая удерживается с магазина в вашу пользу

**Details:**
* Inherited From: [\YooKassa\Model\TransferInterface](../classes/YooKassa-Model-TransferInterface.md)

**Returns:** \YooKassa\Model\AmountInterface - Сумма комиссии


<a name="method_hasPlatformFeeAmount" class="anchor"></a>
#### public hasPlatformFeeAmount() : bool

```php
public hasPlatformFeeAmount() : bool
```

**Summary**

Проверяет была ли установлена комиссия за проданные товары и услуги, которая удерживается с магазина в вашу пользу

**Details:**
* Inherited From: [\YooKassa\Model\TransferInterface](../classes/YooKassa-Model-TransferInterface.md)

**Returns:** bool - True если комиссия была установлена, false если нет


<a name="method_setPlatformFeeAmount" class="anchor"></a>
#### public setPlatformFeeAmount() : mixed

```php
public setPlatformFeeAmount(\YooKassa\Model\AmountInterface|array  value) : mixed
```

**Summary**

Устанавливает комиссию за проданные товары и услуги, которая удерживается с магазина в вашу пользу

**Details:**
* Inherited From: [\YooKassa\Model\TransferInterface](../classes/YooKassa-Model-TransferInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\AmountInterface OR array</code> | value  | Сумма комиссии |

**Returns:** mixed - 


<a name="method_getStatus" class="anchor"></a>
#### public getStatus() : string|null

```php
public getStatus() : string|null
```

**Summary**

Возвращает статус операции распределения средств конечному получателю

**Details:**
* Inherited From: [\YooKassa\Model\TransferInterface](../classes/YooKassa-Model-TransferInterface.md)

**Returns:** string|null - Статус операции распределения средств конечному получателю


<a name="method_setStatus" class="anchor"></a>
#### public setStatus() : mixed

```php
public setStatus(string|null  value) : mixed
```

**Summary**

Устанавливает статус операции распределения средств конечному получателю

**Details:**
* Inherited From: [\YooKassa\Model\TransferInterface](../classes/YooKassa-Model-TransferInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string OR null</code> | value  |  |

**Returns:** mixed - 


<a name="method_setMetadata" class="anchor"></a>
#### public setMetadata() : mixed

```php
public setMetadata(\YooKassa\Model\Metadata|array  value) : mixed
```

**Summary**

Устанавливает метаданные

**Details:**
* Inherited From: [\YooKassa\Model\TransferInterface](../classes/YooKassa-Model-TransferInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\Metadata OR array</code> | value  | Метаданные |

**Returns:** mixed - 


<a name="method_getMetadata" class="anchor"></a>
#### public getMetadata() : \YooKassa\Model\Metadata|null

```php
public getMetadata() : \YooKassa\Model\Metadata|null
```

**Summary**

Возвращает метаданные

**Details:**
* Inherited From: [\YooKassa\Model\TransferInterface](../classes/YooKassa-Model-TransferInterface.md)

**Returns:** \YooKassa\Model\Metadata|null - Метаданные


<a name="method_hasMetadata" class="anchor"></a>
#### public hasMetadata() : bool

```php
public hasMetadata() : bool
```

**Summary**

Проверяет были ли установлены метаданные

**Details:**
* Inherited From: [\YooKassa\Model\TransferInterface](../classes/YooKassa-Model-TransferInterface.md)

**Returns:** bool - True если метаданные были установлены, false если нет




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