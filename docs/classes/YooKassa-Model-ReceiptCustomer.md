# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Model\ReceiptCustomer
### Namespace: [\YooKassa\Model](../namespaces/yookassa-model.md)
---
**Summary:**

Информация о плательщике

---
### Constants
* No constants found
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [$email](../classes/YooKassa-Model-ReceiptCustomer.md#property_email) |  | E-mail адрес плательщика на который будет выслан чек. |
| public | [$full_name](../classes/YooKassa-Model-ReceiptCustomer.md#property_full_name) |  | Для юрлица — название организации, для ИП и физического лица — ФИО. |
| public | [$fullName](../classes/YooKassa-Model-ReceiptCustomer.md#property_fullName) |  | Для юрлица — название организации, для ИП и физического лица — ФИО. |
| public | [$inn](../classes/YooKassa-Model-ReceiptCustomer.md#property_inn) |  | ИНН плательщика (10 или 12 цифр). |
| public | [$phone](../classes/YooKassa-Model-ReceiptCustomer.md#property_phone) |  | Номер телефона плательщика в формате ITU-T E.164 на который будет выслан чек. |
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
| public | [getEmail()](../classes/YooKassa-Model-ReceiptCustomer.md#method_getEmail) |  | Возвращает адрес электронной почты на который будет выслан чек |
| public | [getFullName()](../classes/YooKassa-Model-ReceiptCustomer.md#method_getFullName) |  | Возвращает для юрлица — название организации, для ИП и физического лица — ФИО |
| public | [getInn()](../classes/YooKassa-Model-ReceiptCustomer.md#method_getInn) |  | Возвращает ИНН плательщика |
| public | [getPhone()](../classes/YooKassa-Model-ReceiptCustomer.md#method_getPhone) |  | Возвращает номер телефона плательщика в формате ITU-T E.164 на который будет выслан чек |
| public | [isEmpty()](../classes/YooKassa-Model-ReceiptCustomer.md#method_isEmpty) |  | Проверка на заполненность объекта |
| public | [jsonSerialize()](../classes/YooKassa-Model-ReceiptCustomer.md#method_jsonSerialize) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации |
| public | [offsetExists()](../classes/YooKassa-Common-AbstractObject.md#method_offsetExists) |  | Проверяет наличие свойства |
| public | [offsetGet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetGet) |  | Возвращает значение свойства |
| public | [offsetSet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetSet) |  | Устанавливает значение свойства |
| public | [offsetUnset()](../classes/YooKassa-Common-AbstractObject.md#method_offsetUnset) |  | Удаляет свойство |
| public | [setEmail()](../classes/YooKassa-Model-ReceiptCustomer.md#method_setEmail) |  | Устанавливает адрес электронной почты на который будет выслан чек |
| public | [setFullName()](../classes/YooKassa-Model-ReceiptCustomer.md#method_setFullName) |  | Устанавливает Название организации или ФИО |
| public | [setInn()](../classes/YooKassa-Model-ReceiptCustomer.md#method_setInn) |  | Устанавливает ИНН плательщика |
| public | [setPhone()](../classes/YooKassa-Model-ReceiptCustomer.md#method_setPhone) |  | Устанавливает номер телефона плательщика в формате ITU-T E.164 на который будет выслан чек |
| public | [toArray()](../classes/YooKassa-Common-AbstractObject.md#method_toArray) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации Является алиасом метода AbstractObject::jsonSerialize() |
| protected | [getUnknownProperties()](../classes/YooKassa-Common-AbstractObject.md#method_getUnknownProperties) |  | Возвращает массив свойств которые не существуют, но были заданы у объекта |
---
### Details
* File: [lib/Model/ReceiptCustomer.php](../../lib/Model/ReceiptCustomer.php)
* Package: Default
* Class Hierarchy: 
  * [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
  * \YooKassa\Model\ReceiptCustomer
* Implements:
  * [\YooKassa\Model\ReceiptCustomerInterface](../classes/YooKassa-Model-ReceiptCustomerInterface.md)
---
## Properties
<a name="property_email"></a>
#### public $email : string
---
***Description***

E-mail адрес плательщика на который будет выслан чек.

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_full_name"></a>
#### public $full_name : string
---
***Description***

Для юрлица — название организации, для ИП и физического лица — ФИО.

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_fullName"></a>
#### public $fullName : string
---
***Description***

Для юрлица — название организации, для ИП и физического лица — ФИО.

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_inn"></a>
#### public $inn : string
---
***Description***

ИНН плательщика (10 или 12 цифр).

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_phone"></a>
#### public $phone : string
---
***Description***

Номер телефона плательщика в формате ITU-T E.164 на который будет выслан чек.

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


<a name="method_getEmail" class="anchor"></a>
#### public getEmail() : string

```php
public getEmail() : string
```

**Summary**

Возвращает адрес электронной почты на который будет выслан чек

**Details:**
* Inherited From: [\YooKassa\Model\ReceiptCustomer](../classes/YooKassa-Model-ReceiptCustomer.md)

**Returns:** string - E-mail адрес плательщика


<a name="method_getFullName" class="anchor"></a>
#### public getFullName() : string

```php
public getFullName() : string
```

**Summary**

Возвращает для юрлица — название организации, для ИП и физического лица — ФИО

**Details:**
* Inherited From: [\YooKassa\Model\ReceiptCustomer](../classes/YooKassa-Model-ReceiptCustomer.md)

**Returns:** string - Название организации или ФИО


<a name="method_getInn" class="anchor"></a>
#### public getInn() : string

```php
public getInn() : string
```

**Summary**

Возвращает ИНН плательщика

**Details:**
* Inherited From: [\YooKassa\Model\ReceiptCustomer](../classes/YooKassa-Model-ReceiptCustomer.md)

**Returns:** string - 


<a name="method_getPhone" class="anchor"></a>
#### public getPhone() : string

```php
public getPhone() : string
```

**Summary**

Возвращает номер телефона плательщика в формате ITU-T E.164 на который будет выслан чек

**Details:**
* Inherited From: [\YooKassa\Model\ReceiptCustomer](../classes/YooKassa-Model-ReceiptCustomer.md)

**Returns:** string - Номер телефона плательщика


<a name="method_isEmpty" class="anchor"></a>
#### public isEmpty() : bool

```php
public isEmpty() : bool
```

**Summary**

Проверка на заполненность объекта

**Details:**
* Inherited From: [\YooKassa\Model\ReceiptCustomer](../classes/YooKassa-Model-ReceiptCustomer.md)

**Returns:** bool - 


<a name="method_jsonSerialize" class="anchor"></a>
#### public jsonSerialize() : array

```php
public jsonSerialize() : array
```

**Summary**

Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации

**Details:**
* Inherited From: [\YooKassa\Model\ReceiptCustomer](../classes/YooKassa-Model-ReceiptCustomer.md)

**Returns:** array - 


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


<a name="method_setEmail" class="anchor"></a>
#### public setEmail() : mixed

```php
public setEmail(string  value) : mixed
```

**Summary**

Устанавливает адрес электронной почты на который будет выслан чек

**Details:**
* Inherited From: [\YooKassa\Model\ReceiptCustomer](../classes/YooKassa-Model-ReceiptCustomer.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | E-mail адрес плательщика |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в качестве значения была передана не строка |

**Returns:** mixed - 


<a name="method_setFullName" class="anchor"></a>
#### public setFullName() : mixed

```php
public setFullName(string  value) : mixed
```

**Summary**

Устанавливает Название организации или ФИО

**Details:**
* Inherited From: [\YooKassa\Model\ReceiptCustomer](../classes/YooKassa-Model-ReceiptCustomer.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Название организации или ФИО |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в качестве значения была передана не строка |

**Returns:** mixed - 


<a name="method_setInn" class="anchor"></a>
#### public setInn() : mixed

```php
public setInn(string  value) : mixed
```

**Summary**

Устанавливает ИНН плательщика

**Details:**
* Inherited From: [\YooKassa\Model\ReceiptCustomer](../classes/YooKassa-Model-ReceiptCustomer.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | ИНН плательщика (10 или 12 цифр) |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в качестве значения была передана не строка |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если ИНН не соответствует формату 10 или 12 цифр |

**Returns:** mixed - 


<a name="method_setPhone" class="anchor"></a>
#### public setPhone() : mixed

```php
public setPhone(string  value) : mixed
```

**Summary**

Устанавливает номер телефона плательщика в формате ITU-T E.164 на который будет выслан чек

**Details:**
* Inherited From: [\YooKassa\Model\ReceiptCustomer](../classes/YooKassa-Model-ReceiptCustomer.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Номер телефона плательщика в формате ITU-T E.164 |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в качестве значения была передана не строка |

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