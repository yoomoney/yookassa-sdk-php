# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Model\PaymentData\B2b\Sberbank\VatData
### Namespace: [\YooKassa\Model\PaymentData\B2b\Sberbank](../namespaces/yookassa-model-paymentdata-b2b-sberbank.md)
---
**Summary:**

Данные об НДС

---
### Constants
* No constants found
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [$amount](../classes/YooKassa-Model-PaymentData-B2b-Sberbank-VatData.md#property_amount) |  | Сумма НДС |
| public | [$rate](../classes/YooKassa-Model-PaymentData-B2b-Sberbank-VatData.md#property_rate) |  | Данные об НДС в случае, если сумма НДС включена в сумму платежа |
| public | [$type](../classes/YooKassa-Model-PaymentData-B2b-Sberbank-VatData.md#property_type) |  | Способ расчёта НДС |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Model-PaymentData-B2b-Sberbank-VatData.md#method___construct) |  | VatData constructor. |
| public | [__get()](../classes/YooKassa-Common-AbstractObject.md#method___get) |  | Возвращает значение свойства |
| public | [__isset()](../classes/YooKassa-Common-AbstractObject.md#method___isset) |  | Проверяет наличие свойства |
| public | [__set()](../classes/YooKassa-Common-AbstractObject.md#method___set) |  | Устанавливает значение свойства |
| public | [__unset()](../classes/YooKassa-Common-AbstractObject.md#method___unset) |  | Удаляет свойство |
| public | [fromArray()](../classes/YooKassa-Common-AbstractObject.md#method_fromArray) |  | Устанавливает значения свойств текущего объекта из массива |
| public | [getAmount()](../classes/YooKassa-Model-PaymentData-B2b-Sberbank-VatData.md#method_getAmount) |  | Возвращает сумму НДС |
| public | [getRate()](../classes/YooKassa-Model-PaymentData-B2b-Sberbank-VatData.md#method_getRate) |  | Возвращает налоговую ставку НДС |
| public | [getType()](../classes/YooKassa-Model-PaymentData-B2b-Sberbank-VatData.md#method_getType) |  | Возвращает способ расчёта НДС |
| public | [jsonSerialize()](../classes/YooKassa-Common-AbstractObject.md#method_jsonSerialize) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации |
| public | [offsetExists()](../classes/YooKassa-Common-AbstractObject.md#method_offsetExists) |  | Проверяет наличие свойства |
| public | [offsetGet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetGet) |  | Возвращает значение свойства |
| public | [offsetSet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetSet) |  | Устанавливает значение свойства |
| public | [offsetUnset()](../classes/YooKassa-Common-AbstractObject.md#method_offsetUnset) |  | Удаляет свойство |
| public | [setAmount()](../classes/YooKassa-Model-PaymentData-B2b-Sberbank-VatData.md#method_setAmount) |  | Устанавливает сумму НДС |
| public | [setRate()](../classes/YooKassa-Model-PaymentData-B2b-Sberbank-VatData.md#method_setRate) |  | Устанавливает налоговую ставку НДС |
| public | [setType()](../classes/YooKassa-Model-PaymentData-B2b-Sberbank-VatData.md#method_setType) |  | Устанавливает способ расчёта НДС |
| public | [toArray()](../classes/YooKassa-Common-AbstractObject.md#method_toArray) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации Является алиасом метода AbstractObject::jsonSerialize() |
| protected | [getUnknownProperties()](../classes/YooKassa-Common-AbstractObject.md#method_getUnknownProperties) |  | Возвращает массив свойств которые не существуют, но были заданы у объекта |
---
### Details
* File: [lib/Model/PaymentData/B2b/Sberbank/VatData.php](../../lib/Model/PaymentData/B2b/Sberbank/VatData.php)
* Package: Default
* Class Hierarchy: 
  * [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
  * \YooKassa\Model\PaymentData\B2b\Sberbank\VatData
* Implements:
  * [\YooKassa\Model\PaymentData\B2b\Sberbank\VatDataInterface](../classes/YooKassa-Model-PaymentData-B2b-Sberbank-VatDataInterface.md)
---
## Properties
<a name="property_amount"></a>
#### public $amount : \YooKassa\Model\AmountInterface
---
***Description***

Сумма НДС

**Type:** <a href="../classes/YooKassa-Model-AmountInterface.html"><abbr title="\YooKassa\Model\AmountInterface">AmountInterface</abbr></a>

**Details:**


<a name="property_rate"></a>
#### public $rate : string
---
***Description***

Данные об НДС в случае, если сумма НДС включена в сумму платежа

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_type"></a>
#### public $type : string
---
***Description***

Способ расчёта НДС

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**



---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(string|null  type = null, string|null  rate = null, \YooKassa\Model\AmountInterface|null  amount = null) : mixed
```

**Summary**

VatData constructor.

**Details:**
* Inherited From: [\YooKassa\Model\PaymentData\B2b\Sberbank\VatData](../classes/YooKassa-Model-PaymentData-B2b-Sberbank-VatData.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string OR null</code> | type  | Способ расчёта НДС |
| <code lang="php">string OR null</code> | rate  | Налоговая ставка НДС |
| <code lang="php">\YooKassa\Model\AmountInterface OR null</code> | amount  | Сумма НДС |

**Returns:** mixed - 


<a name="method___get" class="anchor"></a>
#### public __get() : mixed

```php
public __get(string  propertyName) : mixed
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
public __isset(string  propertyName) : bool
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
public __set(string  propertyName, mixed  value) : mixed
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
public __unset(string  propertyName) : mixed
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


<a name="method_fromArray" class="anchor"></a>
#### public fromArray() : mixed

```php
public fromArray(array|\Traversable  sourceArray) : mixed
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


<a name="method_getAmount" class="anchor"></a>
#### public getAmount() : \YooKassa\Model\AmountInterface

```php
public getAmount() : \YooKassa\Model\AmountInterface
```

**Summary**

Возвращает сумму НДС

**Details:**
* Inherited From: [\YooKassa\Model\PaymentData\B2b\Sberbank\VatData](../classes/YooKassa-Model-PaymentData-B2b-Sberbank-VatData.md)

**Returns:** \YooKassa\Model\AmountInterface - Сумма НДС


<a name="method_getRate" class="anchor"></a>
#### public getRate() : string

```php
public getRate() : string
```

**Summary**

Возвращает налоговую ставку НДС

**Details:**
* Inherited From: [\YooKassa\Model\PaymentData\B2b\Sberbank\VatData](../classes/YooKassa-Model-PaymentData-B2b-Sberbank-VatData.md)

**Returns:** string - Налоговая ставка НДС


<a name="method_getType" class="anchor"></a>
#### public getType() : string

```php
public getType() : string
```

**Summary**

Возвращает способ расчёта НДС

**Details:**
* Inherited From: [\YooKassa\Model\PaymentData\B2b\Sberbank\VatData](../classes/YooKassa-Model-PaymentData-B2b-Sberbank-VatData.md)

**Returns:** string - Способ расчёта НДС


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
public offsetExists(string  offset) : bool
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
public offsetGet(string  offset) : mixed
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
public offsetSet(string  offset, mixed  value) : mixed
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
public offsetUnset(string  offset) : mixed
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


<a name="method_setAmount" class="anchor"></a>
#### public setAmount() : mixed

```php
public setAmount(\YooKassa\Model\AmountInterface|array|null  value) : mixed
```

**Summary**

Устанавливает сумму НДС

**Details:**
* Inherited From: [\YooKassa\Model\PaymentData\B2b\Sberbank\VatData](../classes/YooKassa-Model-PaymentData-B2b-Sberbank-VatData.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\AmountInterface OR array OR null</code> | value  | Сумма НДС |

**Returns:** mixed - 


<a name="method_setRate" class="anchor"></a>
#### public setRate() : mixed

```php
public setRate(string  value) : mixed
```

**Summary**

Устанавливает налоговую ставку НДС

**Details:**
* Inherited From: [\YooKassa\Model\PaymentData\B2b\Sberbank\VatData](../classes/YooKassa-Model-PaymentData-B2b-Sberbank-VatData.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Налоговая ставка НДС |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если переданная строка не является валидной ставкой |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод была передана не строка |

**Returns:** mixed - 


<a name="method_setType" class="anchor"></a>
#### public setType() : mixed

```php
public setType(string  value) : mixed
```

**Summary**

Устанавливает способ расчёта НДС

**Details:**
* Inherited From: [\YooKassa\Model\PaymentData\B2b\Sberbank\VatData](../classes/YooKassa-Model-PaymentData-B2b-Sberbank-VatData.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Способ расчёта НДС |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если переданная строка не является валидным способом |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод была передана не строка |

**Returns:** mixed - 


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
* [Deprecated - 7](../reports/deprecated.md)

---

This document was automatically generated from source code comments on 2021-04-21 using [phpDocumentor](http://www.phpdoc.org/)

&copy; 2021 YooMoney