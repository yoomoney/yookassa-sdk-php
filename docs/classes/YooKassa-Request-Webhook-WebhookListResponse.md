# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Request\Webhook\WebhookListResponse
### Namespace: [\YooKassa\Request\Webhook](../namespaces/yookassa-request-webhook.md)
---
**Summary:**

Актуальный список объектов webhook для переданного OAuth-токена

---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Request-Webhook-WebhookListResponse.md#method___construct) |  | Конструктор, устанавливает список полученных от API установленных webhook для переданного OAuth-токена |
| public | [getItems()](../classes/YooKassa-Request-Webhook-WebhookListResponse.md#method_getItems) |  | Возвращает список установленных webhook для переданного OAuth-токена |
| public | [getType()](../classes/YooKassa-Request-Webhook-WebhookListResponse.md#method_getType) |  | Возвращает тип ответа. Доступен только `list` |
---
### Details
* File: [lib/Request/Webhook/WebhookListResponse.php](../../lib/Request/Webhook/WebhookListResponse.php)
* Package: YooKassa
* Class Hierarchy:
  * \YooKassa\Request\Webhook\WebhookListResponse

---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(array  response) : mixed
```

**Summary**

Конструктор, устанавливает список полученных от API установленных webhook для переданного OAuth-токена

**Details:**
* Inherited From: [\YooKassa\Request\Webhook\WebhookListResponse](../classes/YooKassa-Request-Webhook-WebhookListResponse.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array</code> | response  | Разобранный ответ от API в виде массива |

**Returns:** mixed - 


<a name="method_getItems" class="anchor"></a>
#### public getItems() : \YooKassa\Model\Webhook\Webhook[]

```php
public getItems() : \YooKassa\Model\Webhook\Webhook[]
```

**Summary**

Возвращает список установленных webhook для переданного OAuth-токена

**Details:**
* Inherited From: [\YooKassa\Request\Webhook\WebhookListResponse](../classes/YooKassa-Request-Webhook-WebhookListResponse.md)

**Returns:** \YooKassa\Model\Webhook\Webhook[] - Список установленных webhook


<a name="method_getType" class="anchor"></a>
#### public getType() : string

```php
public getType() : string
```

**Summary**

Возвращает тип ответа. Доступен только `list`

**Details:**
* Inherited From: [\YooKassa\Request\Webhook\WebhookListResponse](../classes/YooKassa-Request-Webhook-WebhookListResponse.md)

**Returns:** string - 



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