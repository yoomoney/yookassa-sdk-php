# [YooKassa API SDK](../home.md)

# Interface: NotificationInterface
### Namespace: [\YooKassa\Model\Notification](../namespaces/yookassa-model-notification.md)
---
---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getEvent()](../classes/YooKassa-Model-Notification-NotificationInterface.md#method_getEvent) |  | Возвращает тип события |
| public | [getObject()](../classes/YooKassa-Model-Notification-NotificationInterface.md#method_getObject) |  | Возвращает объект с информацией о платеже или возврате, уведомление о котором хранится в текущем объекте |
| public | [getType()](../classes/YooKassa-Model-Notification-NotificationInterface.md#method_getType) |  | Возвращает тип уведомления |

---
### Details
* File: [lib/Model/Notification/NotificationInterface.php](../../lib/Model/Notification/NotificationInterface.php)
* Package: \Default
---
## Methods
<a name="method_getType" class="anchor"></a>
#### public getType() : string

```php
public getType() : string
```

**Summary**

Возвращает тип уведомления

**Description**

Тип уведомления - одна из констант, указанных в перечислении {@link}.

**Details:**
* Inherited From: [\YooKassa\Model\Notification\NotificationInterface](../classes/YooKassa-Model-Notification-NotificationInterface.md)

**Returns:** string - Тип уведомления в виде строки


<a name="method_getEvent" class="anchor"></a>
#### public getEvent() : string

```php
public getEvent() : string
```

**Summary**

Возвращает тип события

**Description**

Тип события - одна из констант, указанных в перечислении {@link}.

**Details:**
* Inherited From: [\YooKassa\Model\Notification\NotificationInterface](../classes/YooKassa-Model-Notification-NotificationInterface.md)

**Returns:** string - Тип события


<a name="method_getObject" class="anchor"></a>
#### public getObject() : \YooKassa\Model\PaymentInterface|\YooKassa\Model\RefundInterface

```php
public getObject() : \YooKassa\Model\PaymentInterface|\YooKassa\Model\RefundInterface
```

**Summary**

Возвращает объект с информацией о платеже или возврате, уведомление о котором хранится в текущем объекте

**Description**

Так как нотификация может быть сгенерирована и поставлена в очередь на отправку гораздо раньше, чем она будет
получена на сайте, то опираться на статус пришедшего платежа не стоит, лучше запросить текущую информацию о
платеже у API.

**Details:**
* Inherited From: [\YooKassa\Model\Notification\NotificationInterface](../classes/YooKassa-Model-Notification-NotificationInterface.md)

**Returns:** \YooKassa\Model\PaymentInterface|\YooKassa\Model\RefundInterface - Объект с информацией о платеже




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