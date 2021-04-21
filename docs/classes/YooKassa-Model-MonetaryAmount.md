# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Model\MonetaryAmount
### Namespace: [\YooKassa\Model](../namespaces/yookassa-model.md)
---
**Summary:**

MonetaryAmount - Сумма определенная в валюте

---
### Constants
* No constants found
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [$currency](../classes/YooKassa-Model-MonetaryAmount.md#property_currency) |  | Код валюты |
| public | [$value](../classes/YooKassa-Model-MonetaryAmount.md#property_value) |  | Сумма |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Model-MonetaryAmount.md#method___construct) |  | MonetaryAmount constructor. |
| public | [__get()](../classes/YooKassa-Common-AbstractObject.md#method___get) |  | Возвращает значение свойства |
| public | [__isset()](../classes/YooKassa-Common-AbstractObject.md#method___isset) |  | Проверяет наличие свойства |
| public | [__set()](../classes/YooKassa-Common-AbstractObject.md#method___set) |  | Устанавливает значение свойства |
| public | [__unset()](../classes/YooKassa-Common-AbstractObject.md#method___unset) |  | Удаляет свойство |
| public | [fromArray()](../classes/YooKassa-Common-AbstractObject.md#method_fromArray) |  | Устанавливает значения свойств текущего объекта из массива |
| public | [getCurrency()](../classes/YooKassa-Model-MonetaryAmount.md#method_getCurrency) |  | Возвращает валюту |
| public | [getIntegerValue()](../classes/YooKassa-Model-MonetaryAmount.md#method_getIntegerValue) |  | Возвращает сумму в копейках в виде целого числа |
| public | [getValue()](../classes/YooKassa-Model-MonetaryAmount.md#method_getValue) |  | Возвращает значение суммы |
| public | [increase()](../classes/YooKassa-Model-MonetaryAmount.md#method_increase) |  | Увеличивает сумму на указанное значение |
| public | [jsonSerialize()](../classes/YooKassa-Model-MonetaryAmount.md#method_jsonSerialize) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации |
| public | [multiply()](../classes/YooKassa-Model-MonetaryAmount.md#method_multiply) |  | Умножает текущую сумму на указанный коэффициент |
| public | [offsetExists()](../classes/YooKassa-Common-AbstractObject.md#method_offsetExists) |  | Проверяет наличие свойства |
| public | [offsetGet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetGet) |  | Возвращает значение свойства |
| public | [offsetSet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetSet) |  | Устанавливает значение свойства |
| public | [offsetUnset()](../classes/YooKassa-Common-AbstractObject.md#method_offsetUnset) |  | Удаляет свойство |
| public | [setCurrency()](../classes/YooKassa-Model-MonetaryAmount.md#method_setCurrency) |  | Устанавливает код валюты |
| public | [setValue()](../classes/YooKassa-Model-MonetaryAmount.md#method_setValue) |  | Устанавливает сумму |
| public | [toArray()](../classes/YooKassa-Common-AbstractObject.md#method_toArray) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации Является алиасом метода AbstractObject::jsonSerialize() |
| protected | [getUnknownProperties()](../classes/YooKassa-Common-AbstractObject.md#method_getUnknownProperties) |  | Возвращает массив свойств которые не существуют, но были заданы у объекта |
---
### Details
* File: [lib/Model/MonetaryAmount.php](../../lib/Model/MonetaryAmount.php)
* Package: Default
* Class Hierarchy: 
  * [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
  * \YooKassa\Model\MonetaryAmount
* Implements:
  * [\YooKassa\Model\AmountInterface](../classes/YooKassa-Model-AmountInterface.md)
---
## Properties
<a name="property_currency"></a>
#### public $currency : string
---
***Description***

Код валюты

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_value"></a>
#### public $value : string
---
***Description***

Сумма

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**



---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(\YooKassa\Model\numeric|null  value = null, string|null  currency = null) : mixed
```

**Summary**

MonetaryAmount constructor.

**Details:**
* Inherited From: [\YooKassa\Model\MonetaryAmount](../classes/YooKassa-Model-MonetaryAmount.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\numeric OR null</code> | value  | Сумма |
| <code lang="php">string OR null</code> | currency  | Код валюты |

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


<a name="method_getCurrency" class="anchor"></a>
#### public getCurrency() : string

```php
public getCurrency() : string
```

**Summary**

Возвращает валюту

**Details:**
* Inherited From: [\YooKassa\Model\MonetaryAmount](../classes/YooKassa-Model-MonetaryAmount.md)

**Returns:** string - Код валюты


<a name="method_getIntegerValue" class="anchor"></a>
#### public getIntegerValue() : int

```php
public getIntegerValue() : int
```

**Summary**

Возвращает сумму в копейках в виде целого числа

**Details:**
* Inherited From: [\YooKassa\Model\MonetaryAmount](../classes/YooKassa-Model-MonetaryAmount.md)

**Returns:** int - Сумма в копейках/центах


<a name="method_getValue" class="anchor"></a>
#### public getValue() : string

```php
public getValue() : string
```

**Summary**

Возвращает значение суммы

**Details:**
* Inherited From: [\YooKassa\Model\MonetaryAmount](../classes/YooKassa-Model-MonetaryAmount.md)

**Returns:** string - Сумма


<a name="method_increase" class="anchor"></a>
#### public increase() : mixed

```php
public increase(int  value) : mixed
```

**Summary**

Увеличивает сумму на указанное значение

**Details:**
* Inherited From: [\YooKassa\Model\MonetaryAmount](../classes/YooKassa-Model-MonetaryAmount.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">int</code> | value  | Значение которое будет прибавлено к текущему |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\EmptyPropertyValueException | Выбрасывается если передано пустое значение |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если было передано не число |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если после сложения получилась сумма меньше или равная нулю |

**Returns:** mixed - 


<a name="method_jsonSerialize" class="anchor"></a>
#### public jsonSerialize() : array

```php
public jsonSerialize() : array
```

**Summary**

Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации

**Details:**
* Inherited From: [\YooKassa\Model\MonetaryAmount](../classes/YooKassa-Model-MonetaryAmount.md)

**Returns:** array - 


<a name="method_multiply" class="anchor"></a>
#### public multiply() : mixed

```php
public multiply(float  coefficient) : mixed
```

**Summary**

Умножает текущую сумму на указанный коэффициент

**Details:**
* Inherited From: [\YooKassa\Model\MonetaryAmount](../classes/YooKassa-Model-MonetaryAmount.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">float</code> | coefficient  | Множитель |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\EmptyPropertyValueException | Выбрасывается если передано пустое значение |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если было передано не число |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если переданное значение меньше или равно нулю, либо если после умножения получили значение равное нулю |

**Returns:** mixed - 


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


<a name="method_setCurrency" class="anchor"></a>
#### public setCurrency() : mixed

```php
public setCurrency(string  value) : mixed
```

**Summary**

Устанавливает код валюты

**Details:**
* Inherited From: [\YooKassa\Model\MonetaryAmount](../classes/YooKassa-Model-MonetaryAmount.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Код валюты |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\EmptyPropertyValueException | Генерируется если было передано пустое значение |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Генерируется если было передано значение невалидного типа |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если был передан неподдерживаемый код валюты |

**Returns:** mixed - 


<a name="method_setValue" class="anchor"></a>
#### public setValue() : mixed

```php
public setValue(string  value) : mixed
```

**Summary**

Устанавливает сумму

**Details:**
* Inherited From: [\YooKassa\Model\MonetaryAmount](../classes/YooKassa-Model-MonetaryAmount.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Сумма |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\EmptyPropertyValueException | Генерируется если было передано пустое значение |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Генерируется если было передано значение невалидного типа |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если было передано не валидное значение |

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