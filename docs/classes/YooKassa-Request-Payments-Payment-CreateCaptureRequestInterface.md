# [YooKassa API SDK](../home.md)

# Interface: CreateCaptureRequestInterface
### Namespace: [\YooKassa\Request\Payments\Payment](../namespaces/yookassa-request-payments-payment.md)
---
**Summary:**

Interface CreateCaptureRequestInterface

---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getAmount()](../classes/YooKassa-Request-Payments-Payment-CreateCaptureRequestInterface.md#method_getAmount) |  | Возвращает подтверждаемую сумму оплаты |
| public | [getReceipt()](../classes/YooKassa-Request-Payments-Payment-CreateCaptureRequestInterface.md#method_getReceipt) |  | Возвращает чек, если он есть |
| public | [getTransfers()](../classes/YooKassa-Request-Payments-Payment-CreateCaptureRequestInterface.md#method_getTransfers) |  | Возвращает данные о распределении денег |
| public | [hasAmount()](../classes/YooKassa-Request-Payments-Payment-CreateCaptureRequestInterface.md#method_hasAmount) |  | Проверяет была ли установлена сумма оплаты |
| public | [hasReceipt()](../classes/YooKassa-Request-Payments-Payment-CreateCaptureRequestInterface.md#method_hasReceipt) |  | Проверяет наличие чека в создаваемом платеже |
| public | [hasTransfers()](../classes/YooKassa-Request-Payments-Payment-CreateCaptureRequestInterface.md#method_hasTransfers) |  | Проверяет наличие данных о распределении денег |
| public | [setAmount()](../classes/YooKassa-Request-Payments-Payment-CreateCaptureRequestInterface.md#method_setAmount) |  | Устанавливает сумму оплаты |
| public | [setReceipt()](../classes/YooKassa-Request-Payments-Payment-CreateCaptureRequestInterface.md#method_setReceipt) |  | Устанавливает чек |
| public | [setTransfers()](../classes/YooKassa-Request-Payments-Payment-CreateCaptureRequestInterface.md#method_setTransfers) |  | Устанавливает transfers (массив распределения денег между магазинами) |

---
### Details
* File: [lib/Request/Payments/Payment/CreateCaptureRequestInterface.php](../../lib/Request/Payments/Payment/CreateCaptureRequestInterface.php)
* Package: \YooKassa
---
### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| property-read |  | Подтверждаемая сумма оплаты |
| property-read |  | Данные фискального чека 54-ФЗ |
---
## Methods
<a name="method_getAmount" class="anchor"></a>
#### public getAmount() : \YooKassa\Model\AmountInterface

```php
public getAmount() : \YooKassa\Model\AmountInterface
```

**Summary**

Возвращает подтверждаемую сумму оплаты

**Details:**
* Inherited From: [\YooKassa\Request\Payments\Payment\CreateCaptureRequestInterface](../classes/YooKassa-Request-Payments-Payment-CreateCaptureRequestInterface.md)

**Returns:** \YooKassa\Model\AmountInterface - Подтверждаемая сумма оплаты


<a name="method_hasAmount" class="anchor"></a>
#### public hasAmount() : bool

```php
public hasAmount() : bool
```

**Summary**

Проверяет была ли установлена сумма оплаты

**Details:**
* Inherited From: [\YooKassa\Request\Payments\Payment\CreateCaptureRequestInterface](../classes/YooKassa-Request-Payments-Payment-CreateCaptureRequestInterface.md)

**Returns:** bool - True если сумма оплаты была установлена, false если нет


<a name="method_setAmount" class="anchor"></a>
#### public setAmount() : mixed

```php
public setAmount(\YooKassa\Model\AmountInterface  value) : mixed
```

**Summary**

Устанавливает сумму оплаты

**Details:**
* Inherited From: [\YooKassa\Request\Payments\Payment\CreateCaptureRequestInterface](../classes/YooKassa-Request-Payments-Payment-CreateCaptureRequestInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\AmountInterface</code> | value  | Сумма оплаты |

**Returns:** mixed - 


<a name="method_getReceipt" class="anchor"></a>
#### public getReceipt() : \YooKassa\Model\ReceiptInterface|null

```php
public getReceipt() : \YooKassa\Model\ReceiptInterface|null
```

**Summary**

Возвращает чек, если он есть

**Details:**
* Inherited From: [\YooKassa\Request\Payments\Payment\CreateCaptureRequestInterface](../classes/YooKassa-Request-Payments-Payment-CreateCaptureRequestInterface.md)

**Returns:** \YooKassa\Model\ReceiptInterface|null - Данные фискального чека 54-ФЗ или null если чека нет

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| since | 1.0.2 |  |

<a name="method_hasReceipt" class="anchor"></a>
#### public hasReceipt() : bool

```php
public hasReceipt() : bool
```

**Summary**

Проверяет наличие чека в создаваемом платеже

**Details:**
* Inherited From: [\YooKassa\Request\Payments\Payment\CreateCaptureRequestInterface](../classes/YooKassa-Request-Payments-Payment-CreateCaptureRequestInterface.md)

**Returns:** bool - True если чек есть, false если нет

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| since | 1.0.2 |  |

<a name="method_setReceipt" class="anchor"></a>
#### public setReceipt() : mixed

```php
public setReceipt(\YooKassa\Model\ReceiptInterface|null  value) : mixed
```

**Summary**

Устанавливает чек

**Details:**
* Inherited From: [\YooKassa\Request\Payments\Payment\CreateCaptureRequestInterface](../classes/YooKassa-Request-Payments-Payment-CreateCaptureRequestInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\ReceiptInterface OR null</code> | value  | Инстанс чека или null для удаления информации о чеке |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если передан не инстанс класса чека и не null |

**Returns:** mixed - 


<a name="method_hasTransfers" class="anchor"></a>
#### public hasTransfers() : bool

```php
public hasTransfers() : bool
```

**Summary**

Проверяет наличие данных о распределении денег

**Details:**
* Inherited From: [\YooKassa\Request\Payments\Payment\CreateCaptureRequestInterface](../classes/YooKassa-Request-Payments-Payment-CreateCaptureRequestInterface.md)

**Returns:** bool - 


<a name="method_getTransfers" class="anchor"></a>
#### public getTransfers() : \YooKassa\Model\TransferInterface[]

```php
public getTransfers() : \YooKassa\Model\TransferInterface[]
```

**Summary**

Возвращает данные о распределении денег

**Details:**
* Inherited From: [\YooKassa\Request\Payments\Payment\CreateCaptureRequestInterface](../classes/YooKassa-Request-Payments-Payment-CreateCaptureRequestInterface.md)

**Returns:** \YooKassa\Model\TransferInterface[] - 


<a name="method_setTransfers" class="anchor"></a>
#### public setTransfers() : mixed

```php
public setTransfers(\YooKassa\Model\TransferInterface[]|array|null  value) : mixed
```

**Summary**

Устанавливает transfers (массив распределения денег между магазинами)

**Details:**
* Inherited From: [\YooKassa\Request\Payments\Payment\CreateCaptureRequestInterface](../classes/YooKassa-Request-Payments-Payment-CreateCaptureRequestInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\TransferInterface[] OR array OR null</code> | value  |  |

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