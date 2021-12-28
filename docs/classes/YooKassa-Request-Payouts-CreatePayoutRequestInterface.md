# [YooKassa API SDK](../home.md)

# Interface: CreatePayoutRequestInterface
### Namespace: [\YooKassa\Request\Payouts](../namespaces/yookassa-request-payouts.md)
---
**Summary:**

Interface CreatePayoutRequestInterface

---
### Constants
* No constants found

---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getAmount()](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md#method_getAmount) |  | Возвращает сумму выплаты |
| public | [getDeal()](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md#method_getDeal) |  | Возвращает сделку, в рамках которой нужно провести выплату |
| public | [getDescription()](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md#method_getDescription) |  | Возвращает описание транзакции |
| public | [getMetadata()](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md#method_getMetadata) |  | Возвращает данные оплаты установленные мерчантом |
| public | [getPayoutDestinationData()](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md#method_getPayoutDestinationData) |  | Возвращает данные платежного средства, на которое нужно сделать выплату |
| public | [getPayoutToken()](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md#method_getPayoutToken) |  | Возвращает токенизированные данные для выплаты |
| public | [hasAmount()](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md#method_hasAmount) |  | Проверяет наличие суммы в создаваемой выплате |
| public | [hasDeal()](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md#method_hasDeal) |  | Проверяет установлена ли сделка, в рамках которой нужно провести выплату |
| public | [hasDescription()](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md#method_hasDescription) |  | Проверяет наличие описания транзакции в создаваемой выплате |
| public | [hasMetadata()](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md#method_hasMetadata) |  | Проверяет, были ли установлены метаданные заказа |
| public | [hasPayoutDestinationData()](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md#method_hasPayoutDestinationData) |  | Проверяет наличие данных платежного средства, на которое нужно сделать выплату |
| public | [hasPayoutToken()](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md#method_hasPayoutToken) |  | Проверяет наличие токенизированных данных для выплаты |
| public | [setAmount()](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md#method_setAmount) |  | Устанавливает сумму выплаты |
| public | [setDeal()](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md#method_setDeal) |  | Устанавливает сделку, в рамках которой нужно провести выплату |
| public | [setDescription()](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md#method_setDescription) |  | Устанавливает описание транзакции |
| public | [setMetadata()](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md#method_setMetadata) |  | Устанавливает метаданные, привязанные к выплате |
| public | [setPayoutDestinationData()](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md#method_setPayoutDestinationData) |  | Устанавливает данные платежного средства, на которое нужно сделать выплату |
| public | [setPayoutToken()](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md#method_setPayoutToken) |  | Устанавливает токенизированные данные для выплаты |

---
### Details
* File: [lib/Request/Payouts/CreatePayoutRequestInterface.php](../../lib/Request/Payouts/CreatePayoutRequestInterface.php)
* Package: \YooKassa

---
### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| property |  | Сумма создаваемой выплаты |
| property |  | Данные платежного средства, на которое нужно сделать выплату. Обязательный параметр, если не передан payout_token. |
| property |  | Данные платежного средства, на которое нужно сделать выплату. Обязательный параметр, если не передан payout_token. |
| property |  | Токенизированные данные для выплаты. Например, синоним банковской карты. Обязательный параметр, если не передан payout_destination_data |
| property |  | Токенизированные данные для выплаты. Например, синоним банковской карты. Обязательный параметр, если не передан payout_destination_data |
| property |  | Сделка, в рамках которой нужно провести выплату. Необходимо передавать, если вы проводите Безопасную сделку |
| property |  | Описание транзакции (не более 128 символов). Например: «Выплата по договору N» |
| property |  | Метаданные привязанные к выплате |

---
## Methods
<a name="method_getAmount" class="anchor"></a>
#### public getAmount() : \YooKassa\Model\AmountInterface|\YooKassa\Model\MonetaryAmount

```php
public getAmount() : \YooKassa\Model\AmountInterface|\YooKassa\Model\MonetaryAmount
```

**Summary**

Возвращает сумму выплаты

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequestInterface](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md)

**Returns:** \YooKassa\Model\AmountInterface|\YooKassa\Model\MonetaryAmount - Сумма выплаты


<a name="method_hasAmount" class="anchor"></a>
#### public hasAmount() : bool

```php
public hasAmount() : bool
```

**Summary**

Проверяет наличие суммы в создаваемой выплате

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequestInterface](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md)

**Returns:** bool - True если сумма установлена, false если нет


<a name="method_setAmount" class="anchor"></a>
#### public setAmount() : mixed

```php
public setAmount(mixed $value) : mixed
```

**Summary**

Устанавливает сумму выплаты

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequestInterface](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">mixed</code> | value  |  |

**Returns:** mixed - 


<a name="method_getPayoutDestinationData" class="anchor"></a>
#### public getPayoutDestinationData() : \YooKassa\Model\Payout\AbstractPayoutDestination|null

```php
public getPayoutDestinationData() : \YooKassa\Model\Payout\AbstractPayoutDestination|null
```

**Summary**

Возвращает данные платежного средства, на которое нужно сделать выплату

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequestInterface](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md)

**Returns:** \YooKassa\Model\Payout\AbstractPayoutDestination|null - Данные платежного средства, на которое нужно сделать выплату


<a name="method_hasPayoutDestinationData" class="anchor"></a>
#### public hasPayoutDestinationData() : bool

```php
public hasPayoutDestinationData() : bool
```

**Summary**

Проверяет наличие данных платежного средства, на которое нужно сделать выплату

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequestInterface](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md)

**Returns:** bool - True если данные есть, false если нет


<a name="method_setPayoutDestinationData" class="anchor"></a>
#### public setPayoutDestinationData() : mixed

```php
public setPayoutDestinationData(\YooKassa\Model\Payout\AbstractPayoutDestination|array|null $value) : mixed
```

**Summary**

Устанавливает данные платежного средства, на которое нужно сделать выплату

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequestInterface](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\Payout\AbstractPayoutDestination OR array OR null</code> | value  | Данные платежного средства, на которое нужно сделать выплату |

**Returns:** mixed - 


<a name="method_getPayoutToken" class="anchor"></a>
#### public getPayoutToken() : string

```php
public getPayoutToken() : string
```

**Summary**

Возвращает токенизированные данные для выплаты

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequestInterface](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md)

**Returns:** string - Токенизированные данные для выплаты


<a name="method_hasPayoutToken" class="anchor"></a>
#### public hasPayoutToken() : bool

```php
public hasPayoutToken() : bool
```

**Summary**

Проверяет наличие токенизированных данных для выплаты

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequestInterface](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md)

**Returns:** bool - True если токен установлен, false если нет


<a name="method_setPayoutToken" class="anchor"></a>
#### public setPayoutToken() : mixed

```php
public setPayoutToken(string $value) : mixed
```

**Summary**

Устанавливает токенизированные данные для выплаты

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequestInterface](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Токенизированные данные для выплаты |

**Returns:** mixed - 


<a name="method_getDescription" class="anchor"></a>
#### public getDescription() : string

```php
public getDescription() : string
```

**Summary**

Возвращает описание транзакции

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequestInterface](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md)

**Returns:** string - Описание транзакции


<a name="method_hasDescription" class="anchor"></a>
#### public hasDescription() : bool

```php
public hasDescription() : bool
```

**Summary**

Проверяет наличие описания транзакции в создаваемой выплате

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequestInterface](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md)

**Returns:** bool - True если описание транзакции установлено, false если нет


<a name="method_setDescription" class="anchor"></a>
#### public setDescription() : mixed

```php
public setDescription(string $value) : mixed
```

**Summary**

Устанавливает описание транзакции

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequestInterface](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Описание транзакции |

**Returns:** mixed - 


<a name="method_getDeal" class="anchor"></a>
#### public getDeal() : \YooKassa\Model\Deal\PayoutDealInfo|null

```php
public getDeal() : \YooKassa\Model\Deal\PayoutDealInfo|null
```

**Summary**

Возвращает сделку, в рамках которой нужно провести выплату

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequestInterface](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md)

**Returns:** \YooKassa\Model\Deal\PayoutDealInfo|null - Сделка, в рамках которой нужно провести выплату


<a name="method_hasDeal" class="anchor"></a>
#### public hasDeal() : bool

```php
public hasDeal() : bool
```

**Summary**

Проверяет установлена ли сделка, в рамках которой нужно провести выплату

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequestInterface](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md)

**Returns:** bool - True если сделка установлена, false если нет


<a name="method_setDeal" class="anchor"></a>
#### public setDeal() : mixed

```php
public setDeal(\YooKassa\Model\Deal\PayoutDealInfo|array|null $value) : mixed
```

**Summary**

Устанавливает сделку, в рамках которой нужно провести выплату

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequestInterface](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\Deal\PayoutDealInfo OR array OR null</code> | value  | Сделка, в рамках которой нужно провести выплату |

**Returns:** mixed - 


<a name="method_getMetadata" class="anchor"></a>
#### public getMetadata() : \YooKassa\Model\Metadata

```php
public getMetadata() : \YooKassa\Model\Metadata
```

**Summary**

Возвращает данные оплаты установленные мерчантом

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequestInterface](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md)

**Returns:** \YooKassa\Model\Metadata - Метаданные привязанные к выплате


<a name="method_hasMetadata" class="anchor"></a>
#### public hasMetadata() : bool

```php
public hasMetadata() : bool
```

**Summary**

Проверяет, были ли установлены метаданные заказа

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequestInterface](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md)

**Returns:** bool - True если метаданные были установлены, false если нет


<a name="method_setMetadata" class="anchor"></a>
#### public setMetadata() : mixed

```php
public setMetadata(\YooKassa\Model\Metadata|array|null $value) : mixed
```

**Summary**

Устанавливает метаданные, привязанные к выплате

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequestInterface](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\Metadata OR array OR null</code> | value  | Метаданные платежа, устанавливаемые мерчантом |

**Returns:** mixed - 




---

### Top Namespaces

* [\YooKassa](../namespaces/yookassa.md)

---

### Reports
* [Errors - 0](../reports/errors.md)
* [Markers - 0](../reports/markers.md)
* [Deprecated - 13](../reports/deprecated.md)

---

This document was automatically generated from source code comments on 2021-12-28 using [phpDocumentor](http://www.phpdoc.org/)

&copy; 2021 YooMoney