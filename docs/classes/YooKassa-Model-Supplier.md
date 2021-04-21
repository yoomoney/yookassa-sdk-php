# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Model\Supplier
### Namespace: [\YooKassa\Model](../namespaces/yookassa-model.md)
---
**Summary:**

Информация о поставщике товара или услуги.

**Description:**

Можно передавать, если вы отправляете данные для формирования чека по сценарию - сначала платеж, потом чек.

---
### Constants
* No constants found
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [$inn](../classes/YooKassa-Model-Supplier.md#property_inn) |  | ИНН пользователя (10 или 12 цифр) |
| public | [$name](../classes/YooKassa-Model-Supplier.md#property_name) |  | Наименование поставщика |
| public | [$phone](../classes/YooKassa-Model-Supplier.md#property_phone) |  | Телефон пользователя. Указывается в формате ITU-T E.164 |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Model-Supplier.md#method___construct) |  | Supplier constructor. |
| public | [__get()](../classes/YooKassa-Common-AbstractObject.md#method___get) |  | Возвращает значение свойства |
| public | [__isset()](../classes/YooKassa-Common-AbstractObject.md#method___isset) |  | Проверяет наличие свойства |
| public | [__set()](../classes/YooKassa-Common-AbstractObject.md#method___set) |  | Устанавливает значение свойства |
| public | [__unset()](../classes/YooKassa-Common-AbstractObject.md#method___unset) |  | Удаляет свойство |
| public | [fromArray()](../classes/YooKassa-Common-AbstractObject.md#method_fromArray) |  | Устанавливает значения свойств текущего объекта из массива |
| public | [getInn()](../classes/YooKassa-Model-Supplier.md#method_getInn) |  | Возвращает ИНН пользователя (10 или 12 цифр) |
| public | [getName()](../classes/YooKassa-Model-Supplier.md#method_getName) |  | Возвращает наименование поставщика |
| public | [getPhone()](../classes/YooKassa-Model-Supplier.md#method_getPhone) |  | Возвращает Телефон пользователя. Указывается в формате ITU-T E.164 |
| public | [jsonSerialize()](../classes/YooKassa-Common-AbstractObject.md#method_jsonSerialize) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации |
| public | [offsetExists()](../classes/YooKassa-Common-AbstractObject.md#method_offsetExists) |  | Проверяет наличие свойства |
| public | [offsetGet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetGet) |  | Возвращает значение свойства |
| public | [offsetSet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetSet) |  | Устанавливает значение свойства |
| public | [offsetUnset()](../classes/YooKassa-Common-AbstractObject.md#method_offsetUnset) |  | Удаляет свойство |
| public | [setInn()](../classes/YooKassa-Model-Supplier.md#method_setInn) |  | Устанавливает ИНН пользователя (10 или 12 цифр) |
| public | [setName()](../classes/YooKassa-Model-Supplier.md#method_setName) |  | Устанавливает наименование поставщика |
| public | [setPhone()](../classes/YooKassa-Model-Supplier.md#method_setPhone) |  | Устанавливает Телефон пользователя. Указывается в формате ITU-T E.164 |
| public | [toArray()](../classes/YooKassa-Common-AbstractObject.md#method_toArray) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации Является алиасом метода AbstractObject::jsonSerialize() |
| protected | [getUnknownProperties()](../classes/YooKassa-Common-AbstractObject.md#method_getUnknownProperties) |  | Возвращает массив свойств которые не существуют, но были заданы у объекта |
---
### Details
* File: [lib/Model/Supplier.php](../../lib/Model/Supplier.php)
* Package: YooKassa
* Class Hierarchy: 
  * [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
  * \YooKassa\Model\Supplier
* Implements:
  * [\YooKassa\Model\SupplierInterface](../classes/YooKassa-Model-SupplierInterface.md)
---
## Properties
<a name="property_inn"></a>
#### public $inn : string
---
***Description***

ИНН пользователя (10 или 12 цифр)

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_name"></a>
#### public $name : string
---
***Description***

Наименование поставщика

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_phone"></a>
#### public $phone : string
---
***Description***

Телефон пользователя. Указывается в формате ITU-T E.164

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**



---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(null|array  data = null) : mixed
```

**Summary**

Supplier constructor.

**Details:**
* Inherited From: [\YooKassa\Model\Supplier](../classes/YooKassa-Model-Supplier.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">null OR array</code> | data  |  |

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


<a name="method_getInn" class="anchor"></a>
#### public getInn() : string

```php
public getInn() : string
```

**Summary**

Возвращает ИНН пользователя (10 или 12 цифр)

**Details:**
* Inherited From: [\YooKassa\Model\Supplier](../classes/YooKassa-Model-Supplier.md)

**Returns:** string - 


<a name="method_getName" class="anchor"></a>
#### public getName() : string

```php
public getName() : string
```

**Summary**

Возвращает наименование поставщика

**Details:**
* Inherited From: [\YooKassa\Model\Supplier](../classes/YooKassa-Model-Supplier.md)

**Returns:** string - 


<a name="method_getPhone" class="anchor"></a>
#### public getPhone() : string

```php
public getPhone() : string
```

**Summary**

Возвращает Телефон пользователя. Указывается в формате ITU-T E.164

**Details:**
* Inherited From: [\YooKassa\Model\Supplier](../classes/YooKassa-Model-Supplier.md)

**Returns:** string - 


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


<a name="method_setInn" class="anchor"></a>
#### public setInn() : mixed

```php
public setInn(string  value) : mixed
```

**Summary**

Устанавливает ИНН пользователя (10 или 12 цифр)

**Details:**
* Inherited From: [\YooKassa\Model\Supplier](../classes/YooKassa-Model-Supplier.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | ИНН пользователя (10 или 12 цифр) |

**Returns:** mixed - 


<a name="method_setName" class="anchor"></a>
#### public setName() : mixed

```php
public setName(string  value) : mixed
```

**Summary**

Устанавливает наименование поставщика

**Details:**
* Inherited From: [\YooKassa\Model\Supplier](../classes/YooKassa-Model-Supplier.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Наименование поставщика |

**Returns:** mixed - 


<a name="method_setPhone" class="anchor"></a>
#### public setPhone() : mixed

```php
public setPhone(string  value) : mixed
```

**Summary**

Устанавливает Телефон пользователя. Указывается в формате ITU-T E.164

**Details:**
* Inherited From: [\YooKassa\Model\Supplier](../classes/YooKassa-Model-Supplier.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Номер телефона пользователя в формате ITU-T E.164 |

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