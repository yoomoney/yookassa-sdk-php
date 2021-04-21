# [YooKassa API SDK](../home.md)

# Interface: ReceiptCustomerInterface
### Namespace: [\YooKassa\Model](../namespaces/yookassa-model.md)
---
**Summary:**

Interface ReceiptCustomerInterface

---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getEmail()](../classes/YooKassa-Model-ReceiptCustomerInterface.md#method_getEmail) |  | Возвращает адрес электронной почты на который будет выслан чек |
| public | [getFullName()](../classes/YooKassa-Model-ReceiptCustomerInterface.md#method_getFullName) |  | Возвращает название организации или ФИО физического лица |
| public | [getInn()](../classes/YooKassa-Model-ReceiptCustomerInterface.md#method_getInn) |  | Возвращает ИНН плательщика |
| public | [getPhone()](../classes/YooKassa-Model-ReceiptCustomerInterface.md#method_getPhone) |  | Возвращает номер телефона плательщика в формате ITU-T E.164 на который будет выслан чек |
| public | [jsonSerialize()](../classes/YooKassa-Model-ReceiptCustomerInterface.md#method_jsonSerialize) |  | Возвращает массив полей плательщика |

---
### Details
* File: [lib/Model/ReceiptCustomerInterface.php](../../lib/Model/ReceiptCustomerInterface.php)
* Package: \YooKassa
---
### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| property-read |  | Для юрлица — название организации, для ИП и физического лица — ФИО. |
| property-read |  | Для юрлица — название организации, для ИП и физического лица — ФИО. |
| property-read |  | Номер телефона плательщика в формате ITU-T E.164 на который будет выслан чек. |
| property-read |  | E-mail адрес плательщика на который будет выслан чек. |
| property-read |  | ИНН плательщика (10 или 12 цифр). |
---
## Methods
<a name="method_getFullName" class="anchor"></a>
#### public getFullName() : string

```php
public getFullName() : string
```

**Summary**

Возвращает название организации или ФИО физического лица

**Details:**
* Inherited From: [\YooKassa\Model\ReceiptCustomerInterface](../classes/YooKassa-Model-ReceiptCustomerInterface.md)

**Returns:** string - название организации или ФИО физического лица


<a name="method_getPhone" class="anchor"></a>
#### public getPhone() : string

```php
public getPhone() : string
```

**Summary**

Возвращает номер телефона плательщика в формате ITU-T E.164 на который будет выслан чек

**Details:**
* Inherited From: [\YooKassa\Model\ReceiptCustomerInterface](../classes/YooKassa-Model-ReceiptCustomerInterface.md)

**Returns:** string - Номер телефона плательщика


<a name="method_getEmail" class="anchor"></a>
#### public getEmail() : string

```php
public getEmail() : string
```

**Summary**

Возвращает адрес электронной почты на который будет выслан чек

**Details:**
* Inherited From: [\YooKassa\Model\ReceiptCustomerInterface](../classes/YooKassa-Model-ReceiptCustomerInterface.md)

**Returns:** string - E-mail адрес плательщика


<a name="method_getInn" class="anchor"></a>
#### public getInn() : string

```php
public getInn() : string
```

**Summary**

Возвращает ИНН плательщика

**Details:**
* Inherited From: [\YooKassa\Model\ReceiptCustomerInterface](../classes/YooKassa-Model-ReceiptCustomerInterface.md)

**Returns:** string - ИНН плательщика


<a name="method_jsonSerialize" class="anchor"></a>
#### public jsonSerialize() : array

```php
public jsonSerialize() : array
```

**Summary**

Возвращает массив полей плательщика

**Details:**
* Inherited From: [\YooKassa\Model\ReceiptCustomerInterface](../classes/YooKassa-Model-ReceiptCustomerInterface.md)

**Returns:** array - 




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