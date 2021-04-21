# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Common\Exceptions\InvalidRequestException
### Namespace: [\YooKassa\Common\Exceptions](../namespaces/yookassa-common-exceptions.md)
---
---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Common-Exceptions-InvalidRequestException.md#method___construct) |  | InvalidRequestException constructor. |
| public | [getRequestObject()](../classes/YooKassa-Common-Exceptions-InvalidRequestException.md#method_getRequestObject) |  |  |
---
### Details
* File: [lib/Common/Exceptions/InvalidRequestException.php](../../lib/Common/Exceptions/InvalidRequestException.php)
* Package: Default
* Class Hierarchy: 
  * [\RuntimeException](\RuntimeException)
  * \YooKassa\Common\Exceptions\InvalidRequestException

---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(\YooKassa\Common\AbstractRequest|string  error, int  code, null  previous = null) : mixed
```

**Summary**

InvalidRequestException constructor.

**Details:**
* Inherited From: [\YooKassa\Common\Exceptions\InvalidRequestException](../classes/YooKassa-Common-Exceptions-InvalidRequestException.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Common\AbstractRequest OR string</code> | error  |  |
| <code lang="php">int</code> | code  |  |
| <code lang="php">null</code> | previous  |  |

**Returns:** mixed - 


<a name="method_getRequestObject" class="anchor"></a>
#### public getRequestObject() : \YooKassa\Common\AbstractRequest|null

```php
public getRequestObject() : \YooKassa\Common\AbstractRequest|null
```

**Details:**
* Inherited From: [\YooKassa\Common\Exceptions\InvalidRequestException](../classes/YooKassa-Common-Exceptions-InvalidRequestException.md)

**Returns:** \YooKassa\Common\AbstractRequest|null - 



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