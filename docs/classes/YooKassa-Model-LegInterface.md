# [YooKassa API SDK](../home.md)

# Interface: LegInterface
### Namespace: [\YooKassa\Model](../namespaces/yookassa-model.md)
---
---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getDepartureAirport()](../classes/YooKassa-Model-LegInterface.md#method_getDepartureAirport) |  | Возвращает трёхбуквенный IATA-код аэропорта вылета |
| public | [getDepartureDate()](../classes/YooKassa-Model-LegInterface.md#method_getDepartureDate) |  | Возвращает дату вылета в формате YYYY-MM-DD ISO 8601:2004 |
| public | [getDestinationAirport()](../classes/YooKassa-Model-LegInterface.md#method_getDestinationAirport) |  | Возвращает трёхбуквенный IATA-код аэропорта прилёта |
| public | [setDepartureAirport()](../classes/YooKassa-Model-LegInterface.md#method_setDepartureAirport) |  | Устанавливает трёхбуквенный IATA-код аэропорта вылета |
| public | [setDepartureDate()](../classes/YooKassa-Model-LegInterface.md#method_setDepartureDate) |  | Устанавливает дату вылета в формате YYYY-MM-DD ISO 8601:2004 |
| public | [setDestinationAirport()](../classes/YooKassa-Model-LegInterface.md#method_setDestinationAirport) |  | Устанавливает трёхбуквенный IATA-код аэропорта прилёта |

---
### Details
* File: [lib/Model/LegInterface.php](../../lib/Model/LegInterface.php)
* Package: \Default
---
## Methods
<a name="method_getDepartureAirport" class="anchor"></a>
#### public getDepartureAirport() : string

```php
public getDepartureAirport() : string
```

**Summary**

Возвращает трёхбуквенный IATA-код аэропорта вылета

**Details:**
* Inherited From: [\YooKassa\Model\LegInterface](../classes/YooKassa-Model-LegInterface.md)

**Returns:** string - Трёхбуквенный IATA-код аэропорта вылета


<a name="method_getDestinationAirport" class="anchor"></a>
#### public getDestinationAirport() : string

```php
public getDestinationAirport() : string
```

**Summary**

Возвращает трёхбуквенный IATA-код аэропорта прилёта

**Details:**
* Inherited From: [\YooKassa\Model\LegInterface](../classes/YooKassa-Model-LegInterface.md)

**Returns:** string - Трёхбуквенный IATA-код аэропорта прилёта


<a name="method_getDepartureDate" class="anchor"></a>
#### public getDepartureDate() : string

```php
public getDepartureDate() : string
```

**Summary**

Возвращает дату вылета в формате YYYY-MM-DD ISO 8601:2004

**Details:**
* Inherited From: [\YooKassa\Model\LegInterface](../classes/YooKassa-Model-LegInterface.md)

**Returns:** string - Дата вылета в формате YYYY-MM-DD ISO 8601:2004


<a name="method_setDepartureAirport" class="anchor"></a>
#### public setDepartureAirport() : mixed

```php
public setDepartureAirport(string  value) : mixed
```

**Summary**

Устанавливает трёхбуквенный IATA-код аэропорта вылета

**Details:**
* Inherited From: [\YooKassa\Model\LegInterface](../classes/YooKassa-Model-LegInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Трёхбуквенный IATA-код аэропорта вылета |

**Returns:** mixed - 


<a name="method_setDestinationAirport" class="anchor"></a>
#### public setDestinationAirport() : mixed

```php
public setDestinationAirport(string  value) : mixed
```

**Summary**

Устанавливает трёхбуквенный IATA-код аэропорта прилёта

**Details:**
* Inherited From: [\YooKassa\Model\LegInterface](../classes/YooKassa-Model-LegInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Трёхбуквенный IATA-код аэропорта прилёта |

**Returns:** mixed - 


<a name="method_setDepartureDate" class="anchor"></a>
#### public setDepartureDate() : mixed

```php
public setDepartureDate(\DateTime|string  value) : mixed
```

**Summary**

Устанавливает дату вылета в формате YYYY-MM-DD ISO 8601:2004

**Details:**
* Inherited From: [\YooKassa\Model\LegInterface](../classes/YooKassa-Model-LegInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string</code> | value  | Дата вылета в формате YYYY-MM-DD ISO 8601:2004 |

**Returns:** mixed - 




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