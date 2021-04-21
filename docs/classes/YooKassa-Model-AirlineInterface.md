# [YooKassa API SDK](../home.md)

# Interface: AirlineInterface
### Namespace: [\YooKassa\Model](../namespaces/yookassa-model.md)
---
---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getBookingReference()](../classes/YooKassa-Model-AirlineInterface.md#method_getBookingReference) |  | Номер бронирования. Обязателен на этапе создания платежа. |
| public | [getLegs()](../classes/YooKassa-Model-AirlineInterface.md#method_getLegs) |  | Список объектов-контейнеров с данными о маршруте |
| public | [getPassengers()](../classes/YooKassa-Model-AirlineInterface.md#method_getPassengers) |  | Список объектов-контейнеров с данными пассажиров |
| public | [getTicketNumber()](../classes/YooKassa-Model-AirlineInterface.md#method_getTicketNumber) |  | Уникальный номер билета. Обязателен на этапе подтверждения платежа |

---
### Details
* File: [lib/Model/AirlineInterface.php](../../lib/Model/AirlineInterface.php)
* Package: \Default
---
## Methods
<a name="method_getBookingReference" class="anchor"></a>
#### public getBookingReference() : string

```php
public getBookingReference() : string
```

**Summary**

Номер бронирования. Обязателен на этапе создания платежа.

**Details:**
* Inherited From: [\YooKassa\Model\AirlineInterface](../classes/YooKassa-Model-AirlineInterface.md)

**Returns:** string - 


<a name="method_getTicketNumber" class="anchor"></a>
#### public getTicketNumber() : string

```php
public getTicketNumber() : string
```

**Summary**

Уникальный номер билета. Обязателен на этапе подтверждения платежа

**Details:**
* Inherited From: [\YooKassa\Model\AirlineInterface](../classes/YooKassa-Model-AirlineInterface.md)

**Returns:** string - 


<a name="method_getPassengers" class="anchor"></a>
#### public getPassengers() : \YooKassa\Model\PassengerInterface[]

```php
public getPassengers() : \YooKassa\Model\PassengerInterface[]
```

**Summary**

Список объектов-контейнеров с данными пассажиров

**Details:**
* Inherited From: [\YooKassa\Model\AirlineInterface](../classes/YooKassa-Model-AirlineInterface.md)

**Returns:** \YooKassa\Model\PassengerInterface[] - 


<a name="method_getLegs" class="anchor"></a>
#### public getLegs() : \YooKassa\Model\LegInterface[]

```php
public getLegs() : \YooKassa\Model\LegInterface[]
```

**Summary**

Список объектов-контейнеров с данными о маршруте

**Details:**
* Inherited From: [\YooKassa\Model\AirlineInterface](../classes/YooKassa-Model-AirlineInterface.md)

**Returns:** \YooKassa\Model\LegInterface[] - 




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