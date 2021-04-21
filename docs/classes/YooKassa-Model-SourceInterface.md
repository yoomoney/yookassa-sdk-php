# [YooKassa API SDK](../home.md)

# Interface: SourceInterface
### Namespace: [\YooKassa\Model](../namespaces/yookassa-model.md)
---
**Summary:**

Interface TransferInterface

---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getAccountId()](../classes/YooKassa-Model-SourceInterface.md#method_getAccountId) |  | Возвращает id магазина с которого будут списаны средства |
| public | [getAmount()](../classes/YooKassa-Model-SourceInterface.md#method_getAmount) |  | Возвращает сумму оплаты |
| public | [getPlatformFeeAmount()](../classes/YooKassa-Model-SourceInterface.md#method_getPlatformFeeAmount) |  | Возвращает комиссию за проданные товары и услуги, которая удерживается с магазина в вашу пользу |
| public | [hasAmount()](../classes/YooKassa-Model-SourceInterface.md#method_hasAmount) |  | Проверяет была ли установлена сумма оплаты |
| public | [hasPlatformFeeAmount()](../classes/YooKassa-Model-SourceInterface.md#method_hasPlatformFeeAmount) |  | Проверяет была ли установлена комиссия за проданные товары и услуги, которая удерживается с магазина в вашу пользу |
| public | [setAccountId()](../classes/YooKassa-Model-SourceInterface.md#method_setAccountId) |  | Устаналивает id магазина-получателя средств |
| public | [setAmount()](../classes/YooKassa-Model-SourceInterface.md#method_setAmount) |  | Устанавливает сумму оплаты |
| public | [setPlatformFeeAmount()](../classes/YooKassa-Model-SourceInterface.md#method_setPlatformFeeAmount) |  | Устанавливает комиссию за проданные товары и услуги, которая удерживается с магазина в вашу пользу |

---
### Details
* File: [lib/Model/SourceInterface.php](../../lib/Model/SourceInterface.php)
* Package: \YooKassa
---
### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| property |  | Сумма возврата |
| property |  | Комиссия, которую вы удержали при оплате, и хотите вернуть |
| property |  | Идентификатор магазина, для которого вы хотите провести возврат |
---
## Methods
<a name="method_setAccountId" class="anchor"></a>
#### public setAccountId() : void

```php
public setAccountId(string  value) : void
```

**Summary**

Устаналивает id магазина-получателя средств

**Details:**
* Inherited From: [\YooKassa\Model\SourceInterface](../classes/YooKassa-Model-SourceInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  |  |

**Returns:** void - 


<a name="method_getAccountId" class="anchor"></a>
#### public getAccountId() : string|null

```php
public getAccountId() : string|null
```

**Summary**

Возвращает id магазина с которого будут списаны средства

**Details:**
* Inherited From: [\YooKassa\Model\SourceInterface](../classes/YooKassa-Model-SourceInterface.md)

**Returns:** string|null - 


<a name="method_getAmount" class="anchor"></a>
#### public getAmount() : \YooKassa\Model\AmountInterface

```php
public getAmount() : \YooKassa\Model\AmountInterface
```

**Summary**

Возвращает сумму оплаты

**Details:**
* Inherited From: [\YooKassa\Model\SourceInterface](../classes/YooKassa-Model-SourceInterface.md)

**Returns:** \YooKassa\Model\AmountInterface - Сумма оплаты


<a name="method_hasAmount" class="anchor"></a>
#### public hasAmount() : bool

```php
public hasAmount() : bool
```

**Summary**

Проверяет была ли установлена сумма оплаты

**Details:**
* Inherited From: [\YooKassa\Model\SourceInterface](../classes/YooKassa-Model-SourceInterface.md)

**Returns:** bool - True если сумма оплаты была установлена, false если нет


<a name="method_setAmount" class="anchor"></a>
#### public setAmount() : mixed

```php
public setAmount(\YooKassa\Model\AmountInterface|array  value) : mixed
```

**Summary**

Устанавливает сумму оплаты

**Details:**
* Inherited From: [\YooKassa\Model\SourceInterface](../classes/YooKassa-Model-SourceInterface.md)
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
* Inherited From: [\YooKassa\Model\SourceInterface](../classes/YooKassa-Model-SourceInterface.md)

**Returns:** \YooKassa\Model\AmountInterface - Сумма комиссии


<a name="method_hasPlatformFeeAmount" class="anchor"></a>
#### public hasPlatformFeeAmount() : bool

```php
public hasPlatformFeeAmount() : bool
```

**Summary**

Проверяет была ли установлена комиссия за проданные товары и услуги, которая удерживается с магазина в вашу пользу

**Details:**
* Inherited From: [\YooKassa\Model\SourceInterface](../classes/YooKassa-Model-SourceInterface.md)

**Returns:** bool - True если комиссия была установлена, false если нет


<a name="method_setPlatformFeeAmount" class="anchor"></a>
#### public setPlatformFeeAmount() : mixed

```php
public setPlatformFeeAmount(\YooKassa\Model\AmountInterface|array  value) : mixed
```

**Summary**

Устанавливает комиссию за проданные товары и услуги, которая удерживается с магазина в вашу пользу

**Details:**
* Inherited From: [\YooKassa\Model\SourceInterface](../classes/YooKassa-Model-SourceInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\AmountInterface OR array</code> | value  | Сумма комиссии |

**Returns:** mixed - 




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