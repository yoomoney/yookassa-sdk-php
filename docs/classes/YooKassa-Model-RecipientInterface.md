# [YooKassa API SDK](../home.md)

# Interface: RecipientInterface
### Namespace: [\YooKassa\Model](../namespaces/yookassa-model.md)
---
**Summary:**

Интерфейс получателя платежа.

**Description:**

Получатель платежа нужен, если вы разделяете потоки платежей в рамках одного аккаунта или создаете платеж в адрес
другого аккаунта.

---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getAccountId()](../classes/YooKassa-Model-RecipientInterface.md#method_getAccountId) |  | Возвращает идентификатор магазина |
| public | [getGatewayId()](../classes/YooKassa-Model-RecipientInterface.md#method_getGatewayId) |  | Возвращает идентификатор шлюза. |

---
### Details
* File: [lib/Model/RecipientInterface.php](../../lib/Model/RecipientInterface.php)
* Package: \Default
---
### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| property-read |  | Идентификатор магазина |
| property-read |  | Идентификатор магазина |
| property-read |  | Идентификатор шлюза |
| property-read |  | Идентификатор шлюза |
---
## Methods
<a name="method_getAccountId" class="anchor"></a>
#### public getAccountId() : string

```php
public getAccountId() : string
```

**Summary**

Возвращает идентификатор магазина

**Details:**
* Inherited From: [\YooKassa\Model\RecipientInterface](../classes/YooKassa-Model-RecipientInterface.md)

**Returns:** string - Идентификатор магазина


<a name="method_getGatewayId" class="anchor"></a>
#### public getGatewayId() : string

```php
public getGatewayId() : string
```

**Summary**

Возвращает идентификатор шлюза.

**Description**

Идентификатор шлюза используется для разделения потоков платежей в рамках одного аккаунта.

**Details:**
* Inherited From: [\YooKassa\Model\RecipientInterface](../classes/YooKassa-Model-RecipientInterface.md)

**Returns:** string - Идентификатор шлюза




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