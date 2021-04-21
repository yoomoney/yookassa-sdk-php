# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Model\PaymentData\PaymentDataBankCardCard
### Namespace: [\YooKassa\Model\PaymentData](../namespaces/yookassa-model-paymentdata.md)
---
**Summary:**

Данные банковской карты
Необходим при оплате PCI-DSS данными.

---
### Constants
* No constants found
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [$cardholder](../classes/YooKassa-Model-PaymentData-PaymentDataBankCardCard.md#property_cardholder) |  | Имя держателя карты |
| public | [$csc](../classes/YooKassa-Model-PaymentData-PaymentDataBankCardCard.md#property_csc) |  | CVV2/CVC2 код |
| public | [$expiry_month](../classes/YooKassa-Model-PaymentData-PaymentDataBankCardCard.md#property_expiry_month) |  | Срок действия, месяц, MM |
| public | [$expiry_year](../classes/YooKassa-Model-PaymentData-PaymentDataBankCardCard.md#property_expiry_year) |  | Срок действия, год, YY |
| public | [$expiryMonth](../classes/YooKassa-Model-PaymentData-PaymentDataBankCardCard.md#property_expiryMonth) |  | Срок действия, месяц, MM |
| public | [$expiryYear](../classes/YooKassa-Model-PaymentData-PaymentDataBankCardCard.md#property_expiryYear) |  | Срок действия, год, YY |
| public | [$number](../classes/YooKassa-Model-PaymentData-PaymentDataBankCardCard.md#property_number) |  | Номер банковской карты |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Common-AbstractObject.md#method___construct) |  | AbstractObject constructor. |
| public | [__get()](../classes/YooKassa-Common-AbstractObject.md#method___get) |  | Возвращает значение свойства |
| public | [__isset()](../classes/YooKassa-Common-AbstractObject.md#method___isset) |  | Проверяет наличие свойства |
| public | [__set()](../classes/YooKassa-Common-AbstractObject.md#method___set) |  | Устанавливает значение свойства |
| public | [__unset()](../classes/YooKassa-Common-AbstractObject.md#method___unset) |  | Удаляет свойство |
| public | [fromArray()](../classes/YooKassa-Common-AbstractObject.md#method_fromArray) |  | Устанавливает значения свойств текущего объекта из массива |
| public | [getCardholder()](../classes/YooKassa-Model-PaymentData-PaymentDataBankCardCard.md#method_getCardholder) |  | Возвращает имя держателя карты |
| public | [getCsc()](../classes/YooKassa-Model-PaymentData-PaymentDataBankCardCard.md#method_getCsc) |  | Возвращает CVV2/CVC2 код |
| public | [getExpiryMonth()](../classes/YooKassa-Model-PaymentData-PaymentDataBankCardCard.md#method_getExpiryMonth) |  | Возвращает месяц срока действия карты |
| public | [getExpiryYear()](../classes/YooKassa-Model-PaymentData-PaymentDataBankCardCard.md#method_getExpiryYear) |  | Возвращает год срока действия карты |
| public | [getNumber()](../classes/YooKassa-Model-PaymentData-PaymentDataBankCardCard.md#method_getNumber) |  | Возвращает номер банковской карты |
| public | [jsonSerialize()](../classes/YooKassa-Common-AbstractObject.md#method_jsonSerialize) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации |
| public | [offsetExists()](../classes/YooKassa-Common-AbstractObject.md#method_offsetExists) |  | Проверяет наличие свойства |
| public | [offsetGet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetGet) |  | Возвращает значение свойства |
| public | [offsetSet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetSet) |  | Устанавливает значение свойства |
| public | [offsetUnset()](../classes/YooKassa-Common-AbstractObject.md#method_offsetUnset) |  | Удаляет свойство |
| public | [setCardholder()](../classes/YooKassa-Model-PaymentData-PaymentDataBankCardCard.md#method_setCardholder) |  | Устанавливает имя держателя карты |
| public | [setCsc()](../classes/YooKassa-Model-PaymentData-PaymentDataBankCardCard.md#method_setCsc) |  | Устанавливает CVV2/CVC2 код |
| public | [setExpiryMonth()](../classes/YooKassa-Model-PaymentData-PaymentDataBankCardCard.md#method_setExpiryMonth) |  | Устанавливает месяц срока действия карты |
| public | [setExpiryYear()](../classes/YooKassa-Model-PaymentData-PaymentDataBankCardCard.md#method_setExpiryYear) |  | Устанавливает год срока действия карты |
| public | [setNumber()](../classes/YooKassa-Model-PaymentData-PaymentDataBankCardCard.md#method_setNumber) |  | Устанавливает номер банковской карты |
| public | [toArray()](../classes/YooKassa-Common-AbstractObject.md#method_toArray) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации Является алиасом метода AbstractObject::jsonSerialize() |
| protected | [getUnknownProperties()](../classes/YooKassa-Common-AbstractObject.md#method_getUnknownProperties) |  | Возвращает массив свойств которые не существуют, но были заданы у объекта |
---
### Details
* File: [lib/Model/PaymentData/PaymentDataBankCardCard.php](../../lib/Model/PaymentData/PaymentDataBankCardCard.php)
* Package: Default
* Class Hierarchy: 
  * [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
  * \YooKassa\Model\PaymentData\PaymentDataBankCardCard
---
## Properties
<a name="property_cardholder"></a>
#### public $cardholder : string
---
***Description***

Имя держателя карты

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_csc"></a>
#### public $csc : string
---
***Description***

CVV2/CVC2 код

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_expiry_month"></a>
#### public $expiry_month : string
---
***Description***

Срок действия, месяц, MM

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_expiry_year"></a>
#### public $expiry_year : string
---
***Description***

Срок действия, год, YY

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_expiryMonth"></a>
#### public $expiryMonth : string
---
***Description***

Срок действия, месяц, MM

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_expiryYear"></a>
#### public $expiryYear : string
---
***Description***

Срок действия, год, YY

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_number"></a>
#### public $number : string
---
***Description***

Номер банковской карты

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**



---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(array  data = array()) : mixed
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


<a name="method_getCardholder" class="anchor"></a>
#### public getCardholder() : string

```php
public getCardholder() : string
```

**Summary**

Возвращает имя держателя карты

**Details:**
* Inherited From: [\YooKassa\Model\PaymentData\PaymentDataBankCardCard](../classes/YooKassa-Model-PaymentData-PaymentDataBankCardCard.md)

**Returns:** string - Имя держателя карты


<a name="method_getCsc" class="anchor"></a>
#### public getCsc() : string

```php
public getCsc() : string
```

**Summary**

Возвращает CVV2/CVC2 код

**Details:**
* Inherited From: [\YooKassa\Model\PaymentData\PaymentDataBankCardCard](../classes/YooKassa-Model-PaymentData-PaymentDataBankCardCard.md)

**Returns:** string - CVV2/CVC2 код


<a name="method_getExpiryMonth" class="anchor"></a>
#### public getExpiryMonth() : string

```php
public getExpiryMonth() : string
```

**Summary**

Возвращает месяц срока действия карты

**Details:**
* Inherited From: [\YooKassa\Model\PaymentData\PaymentDataBankCardCard](../classes/YooKassa-Model-PaymentData-PaymentDataBankCardCard.md)

**Returns:** string - Срок действия, месяц, MM


<a name="method_getExpiryYear" class="anchor"></a>
#### public getExpiryYear() : string

```php
public getExpiryYear() : string
```

**Summary**

Возвращает год срока действия карты

**Details:**
* Inherited From: [\YooKassa\Model\PaymentData\PaymentDataBankCardCard](../classes/YooKassa-Model-PaymentData-PaymentDataBankCardCard.md)

**Returns:** string - Срок действия, год, YYYY


<a name="method_getNumber" class="anchor"></a>
#### public getNumber() : string

```php
public getNumber() : string
```

**Summary**

Возвращает номер банковской карты

**Details:**
* Inherited From: [\YooKassa\Model\PaymentData\PaymentDataBankCardCard](../classes/YooKassa-Model-PaymentData-PaymentDataBankCardCard.md)

**Returns:** string - Номер банковской карты


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


<a name="method_setCardholder" class="anchor"></a>
#### public setCardholder() : mixed

```php
public setCardholder(string  value) : mixed
```

**Summary**

Устанавливает имя держателя карты

**Details:**
* Inherited From: [\YooKassa\Model\PaymentData\PaymentDataBankCardCard](../classes/YooKassa-Model-PaymentData-PaymentDataBankCardCard.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Имя держателя карты |

**Returns:** mixed - 


<a name="method_setCsc" class="anchor"></a>
#### public setCsc() : mixed

```php
public setCsc(string  value) : mixed
```

**Summary**

Устанавливает CVV2/CVC2 код

**Details:**
* Inherited From: [\YooKassa\Model\PaymentData\PaymentDataBankCardCard](../classes/YooKassa-Model-PaymentData-PaymentDataBankCardCard.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | CVV2/CVC2 код |

**Returns:** mixed - 


<a name="method_setExpiryMonth" class="anchor"></a>
#### public setExpiryMonth() : mixed

```php
public setExpiryMonth(string  value) : mixed
```

**Summary**

Устанавливает месяц срока действия карты

**Details:**
* Inherited From: [\YooKassa\Model\PaymentData\PaymentDataBankCardCard](../classes/YooKassa-Model-PaymentData-PaymentDataBankCardCard.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Срок действия, месяц, MM |

**Returns:** mixed - 


<a name="method_setExpiryYear" class="anchor"></a>
#### public setExpiryYear() : mixed

```php
public setExpiryYear(string  value) : mixed
```

**Summary**

Устанавливает год срока действия карты

**Details:**
* Inherited From: [\YooKassa\Model\PaymentData\PaymentDataBankCardCard](../classes/YooKassa-Model-PaymentData-PaymentDataBankCardCard.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Срок действия, год, YYYY |

**Returns:** mixed - 


<a name="method_setNumber" class="anchor"></a>
#### public setNumber() : mixed

```php
public setNumber(string  value) : mixed
```

**Summary**

Устанавливает номер банковской карты

**Details:**
* Inherited From: [\YooKassa\Model\PaymentData\PaymentDataBankCardCard](../classes/YooKassa-Model-PaymentData-PaymentDataBankCardCard.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Номер банковской карты |

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