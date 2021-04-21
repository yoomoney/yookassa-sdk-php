# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Model\Airline
### Namespace: [\YooKassa\Model](../namespaces/yookassa-model.md)
---
**Summary:**

Класс описывающий авиабилет

---
### Constants
* No constants found
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [$booking_reference](../classes/YooKassa-Model-Airline.md#property_booking_reference) |  | Номер бронирования. Обязателен на этапе создания платежа |
| public | [$bookingReference](../classes/YooKassa-Model-Airline.md#property_bookingReference) |  | Номер бронирования. Обязателен на этапе создания платежа |
| public | [$legs](../classes/YooKassa-Model-Airline.md#property_legs) |  | Список маршрутов |
| public | [$passengers](../classes/YooKassa-Model-Airline.md#property_passengers) |  | Список пассажиров |
| public | [$ticket_number](../classes/YooKassa-Model-Airline.md#property_ticket_number) |  | Уникальный номер билета. Обязателен на этапе подтверждения платежа |
| public | [$ticketNumber](../classes/YooKassa-Model-Airline.md#property_ticketNumber) |  | Уникальный номер билета. Обязателен на этапе подтверждения платежа |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Common-AbstractObject.md#method___construct) |  | AbstractObject constructor. |
| public | [__get()](../classes/YooKassa-Common-AbstractObject.md#method___get) |  | Возвращает значение свойства |
| public | [__isset()](../classes/YooKassa-Common-AbstractObject.md#method___isset) |  | Проверяет наличие свойства |
| public | [__set()](../classes/YooKassa-Common-AbstractObject.md#method___set) |  | Устанавливает значение свойства |
| public | [__unset()](../classes/YooKassa-Common-AbstractObject.md#method___unset) |  | Удаляет свойство |
| public | [addLeg()](../classes/YooKassa-Model-Airline.md#method_addLeg) |  | Добавляет объект-контейнер с данными о маршруте |
| public | [addPassenger()](../classes/YooKassa-Model-Airline.md#method_addPassenger) |  | Добавляет объект-контейнер с данными пассажиров |
| public | [fromArray()](../classes/YooKassa-Model-Airline.md#method_fromArray) |  | Устанавливает значения свойств текущего объекта из массива |
| public | [getBookingReference()](../classes/YooKassa-Model-Airline.md#method_getBookingReference) |  | Номер бронирования. Обязателен на этапе создания платежа. |
| public | [getLegs()](../classes/YooKassa-Model-Airline.md#method_getLegs) |  | Список объектов-контейнеров с данными о маршруте |
| public | [getPassengers()](../classes/YooKassa-Model-Airline.md#method_getPassengers) |  | Список объектов-контейнеров с данными пассажиров |
| public | [getTicketNumber()](../classes/YooKassa-Model-Airline.md#method_getTicketNumber) |  | Уникальный номер билета. Обязателен на этапе подтверждения платежа |
| public | [jsonSerialize()](../classes/YooKassa-Common-AbstractObject.md#method_jsonSerialize) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации |
| public | [notEmpty()](../classes/YooKassa-Model-Airline.md#method_notEmpty) |  | Првоерка на наличие данных |
| public | [offsetExists()](../classes/YooKassa-Common-AbstractObject.md#method_offsetExists) |  | Проверяет наличие свойства |
| public | [offsetGet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetGet) |  | Возвращает значение свойства |
| public | [offsetSet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetSet) |  | Устанавливает значение свойства |
| public | [offsetUnset()](../classes/YooKassa-Common-AbstractObject.md#method_offsetUnset) |  | Удаляет свойство |
| public | [setBookingReference()](../classes/YooKassa-Model-Airline.md#method_setBookingReference) |  | Устанавливает номер бронирования. Обязателен на этапе создания платежа. |
| public | [setLegs()](../classes/YooKassa-Model-Airline.md#method_setLegs) |  | Устанавливает список объектов-контейнеров с данными о маршруте |
| public | [setPassengers()](../classes/YooKassa-Model-Airline.md#method_setPassengers) |  | Устанавливает список объектов-контейнеров с данными пассажиров |
| public | [setTicketNumber()](../classes/YooKassa-Model-Airline.md#method_setTicketNumber) |  | Устанавливает уникальный номер билета. Обязателен на этапе подтверждения платежа |
| public | [toArray()](../classes/YooKassa-Common-AbstractObject.md#method_toArray) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации Является алиасом метода AbstractObject::jsonSerialize() |
| protected | [getUnknownProperties()](../classes/YooKassa-Common-AbstractObject.md#method_getUnknownProperties) |  | Возвращает массив свойств которые не существуют, но были заданы у объекта |
---
### Details
* File: [lib/Model/Airline.php](../../lib/Model/Airline.php)
* Package: YooKassa
* Class Hierarchy: 
  * [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
  * \YooKassa\Model\Airline
* Implements:
  * [\YooKassa\Model\AirlineInterface](../classes/YooKassa-Model-AirlineInterface.md)
---
## Properties
<a name="property_booking_reference"></a>
#### public $booking_reference : string
---
***Description***

Номер бронирования. Обязателен на этапе создания платежа

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_bookingReference"></a>
#### public $bookingReference : string
---
***Description***

Номер бронирования. Обязателен на этапе создания платежа

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_legs"></a>
#### public $legs : \YooKassa\Model\Leg[]
---
***Description***

Список маршрутов

**Type:** <a href="../\YooKassa\Model\Leg[]"><abbr title="\YooKassa\Model\Leg[]">Leg[]</abbr></a>

**Details:**


<a name="property_passengers"></a>
#### public $passengers : \YooKassa\Model\PassengerInterface[]
---
***Description***

Список пассажиров

**Type:** <a href="../\YooKassa\Model\PassengerInterface[]"><abbr title="\YooKassa\Model\PassengerInterface[]">PassengerInterface[]</abbr></a>

**Details:**


<a name="property_ticket_number"></a>
#### public $ticket_number : string
---
***Description***

Уникальный номер билета. Обязателен на этапе подтверждения платежа

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_ticketNumber"></a>
#### public $ticketNumber : string
---
***Description***

Уникальный номер билета. Обязателен на этапе подтверждения платежа

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


<a name="method_addLeg" class="anchor"></a>
#### public addLeg() : mixed

```php
public addLeg(array|\YooKassa\Model\LegInterface  value) : mixed
```

**Summary**

Добавляет объект-контейнер с данными о маршруте

**Details:**
* Inherited From: [\YooKassa\Model\Airline](../classes/YooKassa-Model-Airline.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array OR \YooKassa\Model\LegInterface</code> | value  | Объект-контейнер с данными о маршруте |

**Returns:** mixed - 


<a name="method_addPassenger" class="anchor"></a>
#### public addPassenger() : mixed

```php
public addPassenger(array|\YooKassa\Model\PassengerInterface  value) : mixed
```

**Summary**

Добавляет объект-контейнер с данными пассажиров

**Details:**
* Inherited From: [\YooKassa\Model\Airline](../classes/YooKassa-Model-Airline.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array OR \YooKassa\Model\PassengerInterface</code> | value  | Объект-контейнер с данными пассажиров |

**Returns:** mixed - 


<a name="method_fromArray" class="anchor"></a>
#### public fromArray() : mixed

```php
public fromArray(mixed  sourceArray) : mixed
```

**Summary**

Устанавливает значения свойств текущего объекта из массива

**Details:**
* Inherited From: [\YooKassa\Model\Airline](../classes/YooKassa-Model-Airline.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">mixed</code> | sourceArray  | Ассоциативный массив с настройками |

**Returns:** mixed - 

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritdoc |  |  |

<a name="method_getBookingReference" class="anchor"></a>
#### public getBookingReference() : string

```php
public getBookingReference() : string
```

**Summary**

Номер бронирования. Обязателен на этапе создания платежа.

**Details:**
* Inherited From: [\YooKassa\Model\Airline](../classes/YooKassa-Model-Airline.md)

**Returns:** string - 

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritdoc |  |  |

<a name="method_getLegs" class="anchor"></a>
#### public getLegs() : \YooKassa\Model\LegInterface[]

```php
public getLegs() : \YooKassa\Model\LegInterface[]
```

**Summary**

Список объектов-контейнеров с данными о маршруте

**Details:**
* Inherited From: [\YooKassa\Model\Airline](../classes/YooKassa-Model-Airline.md)

**Returns:** \YooKassa\Model\LegInterface[] - 

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritdoc |  |  |

<a name="method_getPassengers" class="anchor"></a>
#### public getPassengers() : \YooKassa\Model\PassengerInterface[]

```php
public getPassengers() : \YooKassa\Model\PassengerInterface[]
```

**Summary**

Список объектов-контейнеров с данными пассажиров

**Details:**
* Inherited From: [\YooKassa\Model\Airline](../classes/YooKassa-Model-Airline.md)

**Returns:** \YooKassa\Model\PassengerInterface[] - 

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritdoc |  |  |

<a name="method_getTicketNumber" class="anchor"></a>
#### public getTicketNumber() : string

```php
public getTicketNumber() : string
```

**Summary**

Уникальный номер билета. Обязателен на этапе подтверждения платежа

**Details:**
* Inherited From: [\YooKassa\Model\Airline](../classes/YooKassa-Model-Airline.md)

**Returns:** string - 

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritdoc |  |  |

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


<a name="method_notEmpty" class="anchor"></a>
#### public notEmpty() : bool

```php
public notEmpty() : bool
```

**Summary**

Првоерка на наличие данных

**Details:**
* Inherited From: [\YooKassa\Model\Airline](../classes/YooKassa-Model-Airline.md)

**Returns:** bool - 


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


<a name="method_setBookingReference" class="anchor"></a>
#### public setBookingReference() : mixed

```php
public setBookingReference(string  value) : mixed
```

**Summary**

Устанавливает номер бронирования. Обязателен на этапе создания платежа.

**Details:**
* Inherited From: [\YooKassa\Model\Airline](../classes/YooKassa-Model-Airline.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Номер бронирования |

**Returns:** mixed - 


<a name="method_setLegs" class="anchor"></a>
#### public setLegs() : mixed

```php
public setLegs(array|\YooKassa\Model\LegInterface[]  value) : mixed
```

**Summary**

Устанавливает список объектов-контейнеров с данными о маршруте

**Details:**
* Inherited From: [\YooKassa\Model\Airline](../classes/YooKassa-Model-Airline.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array OR \YooKassa\Model\LegInterface[]</code> | value  | Список объектов-контейнеров с данными о маршруте |

**Returns:** mixed - 


<a name="method_setPassengers" class="anchor"></a>
#### public setPassengers() : mixed

```php
public setPassengers(array|\YooKassa\Model\PassengerInterface[]  value) : mixed
```

**Summary**

Устанавливает список объектов-контейнеров с данными пассажиров

**Details:**
* Inherited From: [\YooKassa\Model\Airline](../classes/YooKassa-Model-Airline.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array OR \YooKassa\Model\PassengerInterface[]</code> | value  | Список объектов-контейнеров с данными пассажиров |

**Returns:** mixed - 


<a name="method_setTicketNumber" class="anchor"></a>
#### public setTicketNumber() : mixed

```php
public setTicketNumber(string  value) : mixed
```

**Summary**

Устанавливает уникальный номер билета. Обязателен на этапе подтверждения платежа

**Details:**
* Inherited From: [\YooKassa\Model\Airline](../classes/YooKassa-Model-Airline.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Уникальный номер билета |

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