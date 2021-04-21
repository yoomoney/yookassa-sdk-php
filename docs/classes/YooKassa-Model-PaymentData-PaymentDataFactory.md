# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Model\PaymentData\PaymentDataFactory
### Namespace: [\YooKassa\Model\PaymentData](../namespaces/yookassa-model-paymentdata.md)
---
**Summary:**

Фабрика создания объекта платежных данных из массива

---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [factory()](../classes/YooKassa-Model-PaymentData-PaymentDataFactory.md#method_factory) |  | Фабричный метод создания объекта платежных данных по типу |
| public | [factoryFromArray()](../classes/YooKassa-Model-PaymentData-PaymentDataFactory.md#method_factoryFromArray) |  | Фабричный метод создания объекта платежных данных из массива |
---
### Details
* File: [lib/Model/PaymentData/PaymentDataFactory.php](../../lib/Model/PaymentData/PaymentDataFactory.php)
* Package: YooKassa
* Class Hierarchy:
  * \YooKassa\Model\PaymentData\PaymentDataFactory

---
## Methods
<a name="method_factory" class="anchor"></a>
#### public factory() : \YooKassa\Model\PaymentData\AbstractPaymentData

```php
public factory(string  type) : \YooKassa\Model\PaymentData\AbstractPaymentData
```

**Summary**

Фабричный метод создания объекта платежных данных по типу

**Details:**
* Inherited From: [\YooKassa\Model\PaymentData\PaymentDataFactory](../classes/YooKassa-Model-PaymentData-PaymentDataFactory.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | type  | Тип платежных данных |

**Returns:** \YooKassa\Model\PaymentData\AbstractPaymentData - 


<a name="method_factoryFromArray" class="anchor"></a>
#### public factoryFromArray() : \YooKassa\Model\PaymentData\AbstractPaymentData

```php
public factoryFromArray(array  data, string|null  type = null) : \YooKassa\Model\PaymentData\AbstractPaymentData
```

**Summary**

Фабричный метод создания объекта платежных данных из массива

**Details:**
* Inherited From: [\YooKassa\Model\PaymentData\PaymentDataFactory](../classes/YooKassa-Model-PaymentData-PaymentDataFactory.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array</code> | data  | Массив платежных данных |
| <code lang="php">string OR null</code> | type  | Тип платежных данных |

**Returns:** \YooKassa\Model\PaymentData\AbstractPaymentData - 



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