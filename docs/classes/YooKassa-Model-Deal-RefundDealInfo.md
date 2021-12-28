# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Model\Deal\RefundDealInfo
### Namespace: [\YooKassa\Model\Deal](../namespaces/yookassa-model-deal.md)
---
**Summary:**

Class PaymentDealInfo


---
### Constants
* No constants found

---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [$id](../classes/YooKassa-Model-Deal-RefundDealInfo.md#property_id) |  | Идентификатор сделки |
| public | [$refund_settlements](../classes/YooKassa-Model-Deal-RefundDealInfo.md#property_refund_settlements) |  | Данные о распределении денег |
| public | [$refundSettlements](../classes/YooKassa-Model-Deal-RefundDealInfo.md#property_refundSettlements) |  | Данные о распределении денег |

---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Common-AbstractObject.md#method___construct) |  | AbstractObject constructor. |
| public | [__get()](../classes/YooKassa-Common-AbstractObject.md#method___get) |  | Возвращает значение свойства |
| public | [__isset()](../classes/YooKassa-Common-AbstractObject.md#method___isset) |  | Проверяет наличие свойства |
| public | [__set()](../classes/YooKassa-Common-AbstractObject.md#method___set) |  | Устанавливает значение свойства |
| public | [__unset()](../classes/YooKassa-Common-AbstractObject.md#method___unset) |  | Удаляет свойство |
| public | [addSettlement()](../classes/YooKassa-Model-Deal-RefundDealInfo.md#method_addSettlement) |  | Добавляет оплату в чек |
| public | [fromArray()](../classes/YooKassa-Common-AbstractObject.md#method_fromArray) |  | Устанавливает значения свойств текущего объекта из массива |
| public | [getId()](../classes/YooKassa-Model-Deal-RefundDealInfo.md#method_getId) |  | Возвращает Id сделки |
| public | [getRefundSettlements()](../classes/YooKassa-Model-Deal-RefundDealInfo.md#method_getRefundSettlements) |  | Возвращает массив оплат, обеспечивающих выдачу товара |
| public | [jsonSerialize()](../classes/YooKassa-Common-AbstractObject.md#method_jsonSerialize) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации |
| public | [offsetExists()](../classes/YooKassa-Common-AbstractObject.md#method_offsetExists) |  | Проверяет наличие свойства |
| public | [offsetGet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetGet) |  | Возвращает значение свойства |
| public | [offsetSet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetSet) |  | Устанавливает значение свойства |
| public | [offsetUnset()](../classes/YooKassa-Common-AbstractObject.md#method_offsetUnset) |  | Удаляет свойство |
| public | [setId()](../classes/YooKassa-Model-Deal-RefundDealInfo.md#method_setId) |  | Устанавливает Id сделки |
| public | [setRefundSettlements()](../classes/YooKassa-Model-Deal-RefundDealInfo.md#method_setRefundSettlements) |  | Возвращает массив оплат, обеспечивающих выдачу товара |
| public | [toArray()](../classes/YooKassa-Common-AbstractObject.md#method_toArray) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации Является алиасом метода AbstractObject::jsonSerialize() |
| protected | [getUnknownProperties()](../classes/YooKassa-Common-AbstractObject.md#method_getUnknownProperties) |  | Возвращает массив свойств которые не существуют, но были заданы у объекта |

---
### Details
* File: [lib/Model/Deal/RefundDealInfo.php](../../lib/Model/Deal/RefundDealInfo.php)
* Package: YooKassa
* Class Hierarchy: 
  * [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
  * \YooKassa\Model\Deal\RefundDealInfo

---
## Properties
<a name="property_id"></a>
#### public $id : string
---
***Description***

Идентификатор сделки

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_refund_settlements"></a>
#### public $refund_settlements : \YooKassa\Model\Deal\SettlementPayoutRefund[]
---
***Description***

Данные о распределении денег

**Type:** <a href="../\YooKassa\Model\Deal\SettlementPayoutRefund[]"><abbr title="\YooKassa\Model\Deal\SettlementPayoutRefund[]">SettlementPayoutRefund[]</abbr></a>

**Details:**


<a name="property_refundSettlements"></a>
#### public $refundSettlements : \YooKassa\Model\Deal\SettlementPayoutRefund[]
---
***Description***

Данные о распределении денег

**Type:** <a href="../\YooKassa\Model\Deal\SettlementPayoutRefund[]"><abbr title="\YooKassa\Model\Deal\SettlementPayoutRefund[]">SettlementPayoutRefund[]</abbr></a>

**Details:**



---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(array $data = array()) : mixed
```

**Summary**

AbstractObject constructor.

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array</code> | data  |  |

**Returns:** mixed - 


<a name="method___get" class="anchor"></a>
#### public __get() : mixed

```php
public __get(string $propertyName) : mixed
```

**Summary**

Возвращает значение свойства

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | propertyName  | Имя свойства |

**Returns:** mixed - Значение свойства


<a name="method___isset" class="anchor"></a>
#### public __isset() : bool

```php
public __isset(string $propertyName) : bool
```

**Summary**

Проверяет наличие свойства

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | propertyName  | Имя проверяемого свойства |

**Returns:** bool - True если свойство имеется, false если нет


<a name="method___set" class="anchor"></a>
#### public __set() : mixed

```php
public __set(string $propertyName, mixed $value) : mixed
```

**Summary**

Устанавливает значение свойства

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | propertyName  | Имя свойства |
| <code lang="php">mixed</code> | value  | Значение свойства |

**Returns:** mixed - 


<a name="method___unset" class="anchor"></a>
#### public __unset() : mixed

```php
public __unset(string $propertyName) : mixed
```

**Summary**

Удаляет свойство

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | propertyName  | Имя удаляемого свойства |

**Returns:** mixed - 


<a name="method_addSettlement" class="anchor"></a>
#### public addSettlement() : \YooKassa\Model\Deal\RefundDealInfo

```php
public addSettlement(\YooKassa\Model\SettlementInterface $value) : \YooKassa\Model\Deal\RefundDealInfo
```

**Summary**

Добавляет оплату в чек

**Details:**
* Inherited From: [\YooKassa\Model\Deal\RefundDealInfo](../classes/YooKassa-Model-Deal-RefundDealInfo.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\SettlementInterface</code> | value  | Объект добавляемой в чек позиции |

**Returns:** \YooKassa\Model\Deal\RefundDealInfo - 


<a name="method_fromArray" class="anchor"></a>
#### public fromArray() : mixed

```php
public fromArray(array|\Traversable $sourceArray) : mixed
```

**Summary**

Устанавливает значения свойств текущего объекта из массива

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array OR \Traversable</code> | sourceArray  | Ассоциативный массив с настройками |

**Returns:** mixed - 


<a name="method_getId" class="anchor"></a>
#### public getId() : mixed

```php
public getId() : mixed
```

**Summary**

Возвращает Id сделки

**Details:**
* Inherited From: [\YooKassa\Model\Deal\RefundDealInfo](../classes/YooKassa-Model-Deal-RefundDealInfo.md)

**Returns:** mixed - 


<a name="method_getRefundSettlements" class="anchor"></a>
#### public getRefundSettlements() : \YooKassa\Model\SettlementInterface[]

```php
public getRefundSettlements() : \YooKassa\Model\SettlementInterface[]
```

**Summary**

Возвращает массив оплат, обеспечивающих выдачу товара

**Details:**
* Inherited From: [\YooKassa\Model\Deal\RefundDealInfo](../classes/YooKassa-Model-Deal-RefundDealInfo.md)

**Returns:** \YooKassa\Model\SettlementInterface[] - Массив оплат, обеспечивающих выдачу товара.


<a name="method_jsonSerialize" class="anchor"></a>
#### public jsonSerialize() : array

```php
public jsonSerialize() : array
```

**Summary**

Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)

**Returns:** array - Ассоциативный массив со свойствами текущего объекта


<a name="method_offsetExists" class="anchor"></a>
#### public offsetExists() : bool

```php
public offsetExists(string $offset) : bool
```

**Summary**

Проверяет наличие свойства

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | offset  | Имя проверяемого свойства |

**Returns:** bool - True если свойство имеется, false если нет


<a name="method_offsetGet" class="anchor"></a>
#### public offsetGet() : mixed

```php
public offsetGet(string $offset) : mixed
```

**Summary**

Возвращает значение свойства

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | offset  | Имя свойства |

**Returns:** mixed - Значение свойства


<a name="method_offsetSet" class="anchor"></a>
#### public offsetSet() : mixed

```php
public offsetSet(string $offset, mixed $value) : mixed
```

**Summary**

Устанавливает значение свойства

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | offset  | Имя свойства |
| <code lang="php">mixed</code> | value  | Значение свойства |

**Returns:** mixed - 


<a name="method_offsetUnset" class="anchor"></a>
#### public offsetUnset() : mixed

```php
public offsetUnset(string $offset) : mixed
```

**Summary**

Удаляет свойство

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | offset  | Имя удаляемого свойства |

**Returns:** mixed - 


<a name="method_setId" class="anchor"></a>
#### public setId() : \YooKassa\Model\Deal\RefundDealInfo

```php
public setId(string $value) : \YooKassa\Model\Deal\RefundDealInfo
```

**Summary**

Устанавливает Id сделки

**Details:**
* Inherited From: [\YooKassa\Model\Deal\RefundDealInfo](../classes/YooKassa-Model-Deal-RefundDealInfo.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Id сделки |

**Returns:** \YooKassa\Model\Deal\RefundDealInfo - 


<a name="method_setRefundSettlements" class="anchor"></a>
#### public setRefundSettlements() : \YooKassa\Model\Deal\RefundDealInfo

```php
public setRefundSettlements(\YooKassa\Model\SettlementInterface[]|array $value) : \YooKassa\Model\Deal\RefundDealInfo
```

**Summary**

Возвращает массив оплат, обеспечивающих выдачу товара

**Details:**
* Inherited From: [\YooKassa\Model\Deal\RefundDealInfo](../classes/YooKassa-Model-Deal-RefundDealInfo.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\SettlementInterface[] OR array</code> | value  |  |

**Returns:** \YooKassa\Model\Deal\RefundDealInfo - 


<a name="method_toArray" class="anchor"></a>
#### public toArray() : array

```php
public toArray() : array
```

**Summary**

Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации
Является алиасом метода AbstractObject::jsonSerialize()

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)

**Returns:** array - Ассоциативный массив со свойствами текущего объекта


<a name="method_getUnknownProperties" class="anchor"></a>
#### protected getUnknownProperties() : array

```php
protected getUnknownProperties() : array
```

**Summary**

Возвращает массив свойств которые не существуют, но были заданы у объекта

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)

**Returns:** array - Ассоциативный массив с не существующими у текущего объекта свойствами



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