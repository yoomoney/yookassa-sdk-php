# [YooKassa API SDK](../home.md)

# Interface: SupplierInterface
### Namespace: [\YooKassa\Model](../namespaces/yookassa-model.md)
---
**Summary:**

Interface SupplierInterface

**Description:**

Информация о поставщике товара или услуги.

Можно передавать, если вы отправляете данные для формирования чека по сценарию - сначала платеж, потом чек.

---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getInn()](../classes/YooKassa-Model-SupplierInterface.md#method_getInn) |  | Возвращает ИНН пользователя (10 или 12 цифр) |
| public | [getName()](../classes/YooKassa-Model-SupplierInterface.md#method_getName) |  | Возвращает наименование поставщика |
| public | [getPhone()](../classes/YooKassa-Model-SupplierInterface.md#method_getPhone) |  | Возвращает Телефон пользователя. Указывается в формате ITU-T E.164 |
| public | [setInn()](../classes/YooKassa-Model-SupplierInterface.md#method_setInn) |  | Устанавливает ИНН пользователя (10 или 12 цифр) |
| public | [setName()](../classes/YooKassa-Model-SupplierInterface.md#method_setName) |  | Устанавливает наименование поставщика |
| public | [setPhone()](../classes/YooKassa-Model-SupplierInterface.md#method_setPhone) |  | Устанавливает Телефон пользователя. Указывается в формате ITU-T E.164 |

---
### Details
* File: [lib/Model/SupplierInterface.php](../../lib/Model/SupplierInterface.php)
* Package: \YooKassa
---
### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| property |  | Наименование поставщика |
| property |  | Телефон пользователя. Указывается в формате ITU-T E.164 |
| property |  | ИНН пользователя (10 или 12 цифр) |
---
## Methods
<a name="method_getName" class="anchor"></a>
#### public getName() : string|null

```php
public getName() : string|null
```

**Summary**

Возвращает наименование поставщика

**Details:**
* Inherited From: [\YooKassa\Model\SupplierInterface](../classes/YooKassa-Model-SupplierInterface.md)

**Returns:** string|null - 


<a name="method_setName" class="anchor"></a>
#### public setName() : mixed

```php
public setName(string|null  value) : mixed
```

**Summary**

Устанавливает наименование поставщика

**Details:**
* Inherited From: [\YooKassa\Model\SupplierInterface](../classes/YooKassa-Model-SupplierInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string OR null</code> | value  | Наименование поставщика |

**Returns:** mixed - 


<a name="method_getPhone" class="anchor"></a>
#### public getPhone() : string|null

```php
public getPhone() : string|null
```

**Summary**

Возвращает Телефон пользователя. Указывается в формате ITU-T E.164

**Details:**
* Inherited From: [\YooKassa\Model\SupplierInterface](../classes/YooKassa-Model-SupplierInterface.md)

**Returns:** string|null - Телефон пользователя


<a name="method_setPhone" class="anchor"></a>
#### public setPhone() : mixed

```php
public setPhone(string|null  value) : mixed
```

**Summary**

Устанавливает Телефон пользователя. Указывается в формате ITU-T E.164

**Details:**
* Inherited From: [\YooKassa\Model\SupplierInterface](../classes/YooKassa-Model-SupplierInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string OR null</code> | value  | Телефон пользователя |

**Returns:** mixed - 


<a name="method_getInn" class="anchor"></a>
#### public getInn() : string|null

```php
public getInn() : string|null
```

**Summary**

Возвращает ИНН пользователя (10 или 12 цифр)

**Details:**
* Inherited From: [\YooKassa\Model\SupplierInterface](../classes/YooKassa-Model-SupplierInterface.md)

**Returns:** string|null - ИНН пользователя


<a name="method_setInn" class="anchor"></a>
#### public setInn() : mixed

```php
public setInn( value) : mixed
```

**Summary**

Устанавливает ИНН пользователя (10 или 12 цифр)

**Details:**
* Inherited From: [\YooKassa\Model\SupplierInterface](../classes/YooKassa-Model-SupplierInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php"></code> | value  | ИНН пользователя |

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