# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Model\PaymentMethod\PaymentMethodSberbank
### Namespace: [\YooKassa\Model\PaymentMethod](../namespaces/yookassa-model-paymentmethod.md)
---
**Summary:**

Класс, описывающий метод оплаты, при оплате через Сбербанк Онлайн

---
### Constants
* No constants found
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [$id](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md#property_id) |  | Идентификатор записи о сохраненных платежных данных |
| public | [$phone](../classes/YooKassa-Model-PaymentMethod-PaymentMethodSberbank.md#property_phone) |  | Телефон пользователя |
| public | [$saved](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md#property_saved) |  | Возможность многократного использования |
| public | [$title](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md#property_title) |  | Название метода оплаты |
| public | [$type](../classes/YooKassa-Model-PaymentMethod-PaymentMethodSberbank.md#property_type) |  | Тип объекта |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Model-PaymentMethod-PaymentMethodSberbank.md#method___construct) |  |  |
| public | [__get()](../classes/YooKassa-Common-AbstractObject.md#method___get) |  | Возвращает значение свойства |
| public | [__isset()](../classes/YooKassa-Common-AbstractObject.md#method___isset) |  | Проверяет наличие свойства |
| public | [__set()](../classes/YooKassa-Common-AbstractObject.md#method___set) |  | Устанавливает значение свойства |
| public | [__unset()](../classes/YooKassa-Common-AbstractObject.md#method___unset) |  | Удаляет свойство |
| public | [fromArray()](../classes/YooKassa-Common-AbstractObject.md#method_fromArray) |  | Устанавливает значения свойств текущего объекта из массива |
| public | [getId()](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md#method_getId) |  | Устанавливает идентификатор записи о сохраненных платежных данных |
| public | [getPhone()](../classes/YooKassa-Model-PaymentMethod-PaymentMethodSberbank.md#method_getPhone) |  | Возвращает номер телефона в формате ITU-T E.164 |
| public | [getSaved()](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md#method_getSaved) |  | Возвращает признак возможности многократного использования |
| public | [getTitle()](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md#method_getTitle) |  | Возвращает название метода оплаты |
| public | [getType()](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md#method_getType) |  | Возвращает тип объекта |
| public | [jsonSerialize()](../classes/YooKassa-Common-AbstractObject.md#method_jsonSerialize) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации |
| public | [offsetExists()](../classes/YooKassa-Common-AbstractObject.md#method_offsetExists) |  | Проверяет наличие свойства |
| public | [offsetGet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetGet) |  | Возвращает значение свойства |
| public | [offsetSet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetSet) |  | Устанавливает значение свойства |
| public | [offsetUnset()](../classes/YooKassa-Common-AbstractObject.md#method_offsetUnset) |  | Удаляет свойство |
| public | [setId()](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md#method_setId) |  | Возвращает идентификатор записи о сохраненных платежных данных |
| public | [setPhone()](../classes/YooKassa-Model-PaymentMethod-PaymentMethodSberbank.md#method_setPhone) |  | Устанавливает номер телефона в формате ITU-T E.164 |
| public | [setSaved()](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md#method_setSaved) |  | Устанавливает признак возможности многократного использования |
| public | [setTitle()](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md#method_setTitle) |  | Устанавливает название метода оплаты |
| public | [toArray()](../classes/YooKassa-Common-AbstractObject.md#method_toArray) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации Является алиасом метода AbstractObject::jsonSerialize() |
| protected | [_setType()](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md#method__setType) |  | Устанавливает тип объекта |
| protected | [getUnknownProperties()](../classes/YooKassa-Common-AbstractObject.md#method_getUnknownProperties) |  | Возвращает массив свойств которые не существуют, но были заданы у объекта |
---
### Details
* File: [lib/Model/PaymentMethod/PaymentMethodSberbank.php](../../lib/Model/PaymentMethod/PaymentMethodSberbank.php)
* Package: Default
* Class Hierarchy:  
  * [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
  * [\YooKassa\Model\PaymentMethod\AbstractPaymentMethod](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md)
  * \YooKassa\Model\PaymentMethod\PaymentMethodSberbank
---
## Properties
<a name="property_id"></a>
#### public $id : string
---
***Description***

Идентификатор записи о сохраненных платежных данных

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\AbstractPaymentMethod](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md)


<a name="property_phone"></a>
#### public $phone : string
---
***Description***

Телефон пользователя

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_saved"></a>
#### public $saved : bool
---
***Description***

Возможность многократного использования

**Type:** <a href="../bool"><abbr title="bool">bool</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\AbstractPaymentMethod](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md)


<a name="property_title"></a>
#### public $title : string
---
***Description***

Название метода оплаты

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\AbstractPaymentMethod](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md)


<a name="property_type"></a>
#### public $type : string
---
***Description***

Тип объекта

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**



---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct() : mixed
```

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\PaymentMethodSberbank](../classes/YooKassa-Model-PaymentMethod-PaymentMethodSberbank.md)

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


<a name="method_getId" class="anchor"></a>
#### public getId() : string

```php
public getId() : string
```

**Summary**

Устанавливает идентификатор записи о сохраненных платежных данных

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\AbstractPaymentMethod](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md)

**Returns:** string - Идентификатор записи о сохраненных платежных данных


<a name="method_getPhone" class="anchor"></a>
#### public getPhone() : string

```php
public getPhone() : string
```

**Summary**

Возвращает номер телефона в формате ITU-T E.164

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\PaymentMethodSberbank](../classes/YooKassa-Model-PaymentMethod-PaymentMethodSberbank.md)

**Returns:** string - Номер телефона в формате ITU-T E.164


<a name="method_getSaved" class="anchor"></a>
#### public getSaved() : bool

```php
public getSaved() : bool
```

**Summary**

Возвращает признак возможности многократного использования

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\AbstractPaymentMethod](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md)

**Returns:** bool - Возможность многократного использования


<a name="method_getTitle" class="anchor"></a>
#### public getTitle() : string|null

```php
public getTitle() : string|null
```

**Summary**

Возвращает название метода оплаты

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\AbstractPaymentMethod](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md)

**Returns:** string|null - Название метода оплаты


<a name="method_getType" class="anchor"></a>
#### public getType() : string

```php
public getType() : string
```

**Summary**

Возвращает тип объекта

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\AbstractPaymentMethod](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md)

**Returns:** string - Тип объекта


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


<a name="method_setId" class="anchor"></a>
#### public setId() : mixed

```php
public setId(string  value) : mixed
```

**Summary**

Возвращает идентификатор записи о сохраненных платежных данных

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\AbstractPaymentMethod](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Идентификатор записи о сохраненных платежных данных |

**Returns:** mixed - 


<a name="method_setPhone" class="anchor"></a>
#### public setPhone() : mixed

```php
public setPhone(string  value) : mixed
```

**Summary**

Устанавливает номер телефона в формате ITU-T E.164

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\PaymentMethodSberbank](../classes/YooKassa-Model-PaymentMethod-PaymentMethodSberbank.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Номер телефона в формате ITU-T E.164 |

**Returns:** mixed - 


<a name="method_setSaved" class="anchor"></a>
#### public setSaved() : mixed

```php
public setSaved(bool  value) : mixed
```

**Summary**

Устанавливает признак возможности многократного использования

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\AbstractPaymentMethod](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">bool</code> | value  | Возможность многократного использования |

**Returns:** mixed - 


<a name="method_setTitle" class="anchor"></a>
#### public setTitle() : mixed

```php
public setTitle(string  value) : mixed
```

**Summary**

Устанавливает название метода оплаты

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\AbstractPaymentMethod](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Название метода оплаты |

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


<a name="method__setType" class="anchor"></a>
#### protected _setType() : mixed

```php
protected _setType(string  value) : mixed
```

**Summary**

Устанавливает тип объекта

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\AbstractPaymentMethod](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Тип объекта |

**Returns:** mixed - 


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