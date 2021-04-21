# [YooKassa API SDK](../home.md)

# Interface: CancellationDetailsInterface
### Namespace: [\YooKassa\Model](../namespaces/yookassa-model.md)
---
**Summary:**

Interface CancellationDetailsInterface

---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getParty()](../classes/YooKassa-Model-CancellationDetailsInterface.md#method_getParty) |  | Возвращает участника процесса платежа, который принял решение об отмене транзакции |
| public | [getReason()](../classes/YooKassa-Model-CancellationDetailsInterface.md#method_getReason) |  | Возвращает причину отмены платежа |

---
### Details
* File: [lib/Model/CancellationDetailsInterface.php](../../lib/Model/CancellationDetailsInterface.php)
* Package: \YooKassa
---
### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| property-read |  | Участник процесса платежа, который принял решение об отмене транзакции. |
| property-read |  | Причина отмены платежа. |
---
## Methods
<a name="method_getParty" class="anchor"></a>
#### public getParty() : string

```php
public getParty() : string
```

**Summary**

Возвращает участника процесса платежа, который принял решение об отмене транзакции

**Details:**
* Inherited From: [\YooKassa\Model\CancellationDetailsInterface](../classes/YooKassa-Model-CancellationDetailsInterface.md)

**Returns:** string - Участник процесса платежа


<a name="method_getReason" class="anchor"></a>
#### public getReason() : string

```php
public getReason() : string
```

**Summary**

Возвращает причину отмены платежа

**Details:**
* Inherited From: [\YooKassa\Model\CancellationDetailsInterface](../classes/YooKassa-Model-CancellationDetailsInterface.md)

**Returns:** string - Причина отмены платежа




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