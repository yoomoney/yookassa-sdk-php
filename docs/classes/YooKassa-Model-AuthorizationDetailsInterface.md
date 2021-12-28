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
| public | [getThreeDSecure()](../classes/YooKassa-Model-AuthorizationDetailsInterface.md#method_getThreeDSecure) |  | Возвращает данные о прохождении пользователем аутентификации по 3‑D Secure |

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
| property-read |  | Данные о прохождении пользователем аутентификации по 3‑D Secure |

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


<a name="method_getThreeDSecure" class="anchor"></a>
#### public getThreeDSecure() : \YooKassa\Model\ThreeDSecure|null

```php
public getThreeDSecure() : \YooKassa\Model\ThreeDSecure|null
```

**Summary**

Возвращает данные о прохождении пользователем аутентификации по 3‑D Secure

**Details:**
* Inherited From: [\YooKassa\Model\AuthorizationDetailsInterface](../classes/YooKassa-Model-AuthorizationDetailsInterface.md)

**Returns:** \YooKassa\Model\ThreeDSecure|null - Объект с данными о прохождении пользователем аутентификации по 3‑D Secure




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