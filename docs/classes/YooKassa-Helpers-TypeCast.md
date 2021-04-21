# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Helpers\TypeCast
### Namespace: [\YooKassa\Helpers](../namespaces/yookassa-helpers.md)
---
**Summary:**

Класс хэлпер для преобразования типов значений

---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [canCastToBoolean()](../classes/YooKassa-Helpers-TypeCast.md#method_canCastToBoolean) |  | Проверяет можно ли преобразовать переданное значение в буллево значение |
| public | [canCastToDateTime()](../classes/YooKassa-Helpers-TypeCast.md#method_canCastToDateTime) |  | Проверяет, можно ли преобразовать переданное значение в объект даты-времени |
| public | [canCastToEnumString()](../classes/YooKassa-Helpers-TypeCast.md#method_canCastToEnumString) |  | Проверяет можно ли преобразовать переданное значение в строку из перечисления |
| public | [canCastToString()](../classes/YooKassa-Helpers-TypeCast.md#method_canCastToString) |  | Проверяет может ли переданное значение быть преобразовано в строку |
| public | [castToDateTime()](../classes/YooKassa-Helpers-TypeCast.md#method_castToDateTime) |  | Преобразует переданне значение в объект типа \DateTime |
---
### Details
* File: [lib/Helpers/TypeCast.php](../../lib/Helpers/TypeCast.php)
* Package: YooKassa
* Class Hierarchy:
  * \YooKassa\Helpers\TypeCast

---
## Methods
<a name="method_canCastToBoolean" class="anchor"></a>
#### public canCastToBoolean() : bool

```php
Static public canCastToBoolean(mixed  value) : bool
```

**Summary**

Проверяет можно ли преобразовать переданное значение в буллево значение

**Details:**
* Inherited From: [\YooKassa\Helpers\TypeCast](../classes/YooKassa-Helpers-TypeCast.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">mixed</code> | value  | Проверяемое значение |

**Returns:** bool - True если значение качтится в bool, false если нет


<a name="method_canCastToDateTime" class="anchor"></a>
#### public canCastToDateTime() : bool

```php
Static public canCastToDateTime(mixed  value) : bool
```

**Summary**

Проверяет, можно ли преобразовать переданное значение в объект даты-времени

**Details:**
* Inherited From: [\YooKassa\Helpers\TypeCast](../classes/YooKassa-Helpers-TypeCast.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">mixed</code> | value  | Провеяремое значение |

**Returns:** bool - True если значение можно преобразовать в объект даты, false если нет


<a name="method_canCastToEnumString" class="anchor"></a>
#### public canCastToEnumString() : bool

```php
Static public canCastToEnumString(mixed  value) : bool
```

**Summary**

Проверяет можно ли преобразовать переданное значение в строку из перечисления

**Details:**
* Inherited From: [\YooKassa\Helpers\TypeCast](../classes/YooKassa-Helpers-TypeCast.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">mixed</code> | value  | Проверяемое значение |

**Returns:** bool - True если значение преобразовать в строку можно, false если нет


<a name="method_canCastToString" class="anchor"></a>
#### public canCastToString() : bool

```php
Static public canCastToString(mixed  value) : bool
```

**Summary**

Проверяет может ли переданное значение быть преобразовано в строку

**Details:**
* Inherited From: [\YooKassa\Helpers\TypeCast](../classes/YooKassa-Helpers-TypeCast.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">mixed</code> | value  | Проверяемое значение |

**Returns:** bool - True если значение преобразовать в строку можно, false если нет


<a name="method_castToDateTime" class="anchor"></a>
#### public castToDateTime() : \DateTime|null

```php
Static public castToDateTime(string|int|\DateTime  value) : \DateTime|null
```

**Summary**

Преобразует переданне значение в объект типа \DateTime

**Details:**
* Inherited From: [\YooKassa\Helpers\TypeCast](../classes/YooKassa-Helpers-TypeCast.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string OR int OR \DateTime</code> | value  | Преобразуемое значение |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \Exception |  |

**Returns:** \DateTime|null - Объект типа \DateTime или null если при парсинг даты не удался



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