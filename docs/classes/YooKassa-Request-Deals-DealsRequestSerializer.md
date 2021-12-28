# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Request\Deals\DealsRequestSerializer
### Namespace: [\YooKassa\Request\Deals](../namespaces/yookassa-request-deals.md)
---
**Summary:**

Класс сериализатора объектов запросов к API для получения списка платежей


---
### Constants
* No constants found

---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [serialize()](../classes/YooKassa-Request-Deals-DealsRequestSerializer.md#method_serialize) |  | Сериализует объект запроса к API для дальнейшей его отправки |

---
### Details
* File: [lib/Request/Deals/DealsRequestSerializer.php](../../lib/Request/Deals/DealsRequestSerializer.php)
* Package: YooKassa
* Class Hierarchy:
  * \YooKassa\Request\Deals\DealsRequestSerializer

---
## Methods
<a name="method_serialize" class="anchor"></a>
#### public serialize() : array

```php
public serialize(\YooKassa\Request\Deals\DealsRequest|\YooKassa\Request\Deals\DealsRequestInterface|\YooKassa\Common\AbstractRequest $request) : array
```

**Summary**

Сериализует объект запроса к API для дальнейшей его отправки

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequestSerializer](../classes/YooKassa-Request-Deals-DealsRequestSerializer.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Request\Deals\DealsRequest OR \YooKassa\Request\Deals\DealsRequestInterface OR \YooKassa\Common\AbstractRequest</code> | request  | Сериализуемый объект |

**Returns:** array - Массив с информацией, отправляемый в дальнейшем в API



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