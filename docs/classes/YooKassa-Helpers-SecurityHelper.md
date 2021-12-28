# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Helpers\SecurityHelper
### Namespace: [\YooKassa\Helpers](../namespaces/yookassa-helpers.md)
---

---
### Constants
* No constants found

---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [isIPTrusted()](../classes/YooKassa-Helpers-SecurityHelper.md#method_isIPTrusted) |  | Проверяет формат IP адреса и вызывает соответствующие методы для проверки среди IPv4 и IPv6 адресов Юkassa |

---
### Details
* File: [lib/Helpers/SecurityHelper.php](../../lib/Helpers/SecurityHelper.php)
* Package: Default
* Class Hierarchy:
  * \YooKassa\Helpers\SecurityHelper

---
## Methods
<a name="method_isIPTrusted" class="anchor"></a>
#### public isIPTrusted() : bool

```php
public isIPTrusted($ip) : bool
```

**Summary**

Проверяет формат IP адреса и вызывает соответствующие методы для проверки среди IPv4 и IPv6 адресов Юkassa

**Details:**
* Inherited From: [\YooKassa\Helpers\SecurityHelper](../classes/YooKassa-Helpers-SecurityHelper.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php"></code> | ip  | - IPv4 или IPv6 адрес webhook уведомления |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \Exception | - исключение будет выброшено, если не удастся установить формат IP адреса |

**Returns:** bool - 



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