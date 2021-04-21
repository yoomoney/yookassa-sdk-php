# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Model\Confirmation\ConfirmationFactory
### Namespace: [\YooKassa\Model\Confirmation](../namespaces/yookassa-model-confirmation.md)
---
**Summary:**

Class ConfirmationFactory

---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [factory()](../classes/YooKassa-Model-Confirmation-ConfirmationFactory.md#method_factory) |  | Возвращает объект, соответствующий типу подтверждения платежа |
| public | [factoryFromArray()](../classes/YooKassa-Model-Confirmation-ConfirmationFactory.md#method_factoryFromArray) |  | Возвращает объект, соответствующий типу подтверждения платежа, из массива данных |
---
### Details
* File: [lib/Model/Confirmation/ConfirmationFactory.php](../../lib/Model/Confirmation/ConfirmationFactory.php)
* Package: YooKassa
* Class Hierarchy:
  * \YooKassa\Model\Confirmation\ConfirmationFactory

---
## Methods
<a name="method_factory" class="anchor"></a>
#### public factory() : \YooKassa\Model\Confirmation\AbstractConfirmation

```php
public factory(string  type) : \YooKassa\Model\Confirmation\AbstractConfirmation
```

**Summary**

Возвращает объект, соответствующий типу подтверждения платежа

**Details:**
* Inherited From: [\YooKassa\Model\Confirmation\ConfirmationFactory](../classes/YooKassa-Model-Confirmation-ConfirmationFactory.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | type  | Тип подтверждения платежа |

**Returns:** \YooKassa\Model\Confirmation\AbstractConfirmation - 


<a name="method_factoryFromArray" class="anchor"></a>
#### public factoryFromArray() : \YooKassa\Model\Confirmation\AbstractConfirmation

```php
public factoryFromArray(array  data, string|null  type = null) : \YooKassa\Model\Confirmation\AbstractConfirmation
```

**Summary**

Возвращает объект, соответствующий типу подтверждения платежа, из массива данных

**Details:**
* Inherited From: [\YooKassa\Model\Confirmation\ConfirmationFactory](../classes/YooKassa-Model-Confirmation-ConfirmationFactory.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array</code> | data  | Массив данных подтверждения платежа |
| <code lang="php">string OR null</code> | type  | Тип подтверждения платежа |

**Returns:** \YooKassa\Model\Confirmation\AbstractConfirmation - 



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