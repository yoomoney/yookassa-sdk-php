# [YooKassa API SDK](../home.md)

# Interface: AuthorizationDetailsInterface
### Namespace: [\YooKassa\Model](../namespaces/yookassa-model.md)
---
**Summary:**

Interface AuthorizationDetailsInterface - Данные об авторизации платежа

---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getAuthCode()](../classes/YooKassa-Model-AuthorizationDetailsInterface.md#method_getAuthCode) |  | Возвращает код авторизации банковской карты |
| public | [getRrn()](../classes/YooKassa-Model-AuthorizationDetailsInterface.md#method_getRrn) |  | Возвращает Retrieval Reference Number — уникальный идентификатор транзакции в системе эмитента |

---
### Details
* File: [lib/Model/AuthorizationDetailsInterface.php](../../lib/Model/AuthorizationDetailsInterface.php)
* Package: \YooKassa
---
### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| property-read |  | Retrieval Reference Number — уникальный идентификатор транзакции в системе эмитента |
| property-read |  | Код авторизации банковской карты |
---
## Methods
<a name="method_getRrn" class="anchor"></a>
#### public getRrn() : string|null

```php
public getRrn() : string|null
```

**Summary**

Возвращает Retrieval Reference Number — уникальный идентификатор транзакции в системе эмитента

**Details:**
* Inherited From: [\YooKassa\Model\AuthorizationDetailsInterface](../classes/YooKassa-Model-AuthorizationDetailsInterface.md)

**Returns:** string|null - Уникальный идентификатор транзакции


<a name="method_getAuthCode" class="anchor"></a>
#### public getAuthCode() : string|null

```php
public getAuthCode() : string|null
```

**Summary**

Возвращает код авторизации банковской карты

**Details:**
* Inherited From: [\YooKassa\Model\AuthorizationDetailsInterface](../classes/YooKassa-Model-AuthorizationDetailsInterface.md)

**Returns:** string|null - Код авторизации банковской карты




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