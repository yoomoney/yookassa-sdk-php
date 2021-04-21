# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Model\CurrencyCode
### Namespace: [\YooKassa\Model](../namespaces/yookassa-model.md)
---
**Summary:**

CurrencyCode - Код валюты, ISO-4217 3-alpha currency symbol

---
### Constants
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [RUB](../classes/YooKassa-Model-CurrencyCode.md#constant_RUB) |  | Российский рубль |
| public | [USD](../classes/YooKassa-Model-CurrencyCode.md#constant_USD) |  | Доллар США |
| public | [EUR](../classes/YooKassa-Model-CurrencyCode.md#constant_EUR) |  | Евро |
| public | [BYN](../classes/YooKassa-Model-CurrencyCode.md#constant_BYN) |  | Белорусский рубль |
| public | [CNY](../classes/YooKassa-Model-CurrencyCode.md#constant_CNY) |  | Китайская йена |
| public | [KZT](../classes/YooKassa-Model-CurrencyCode.md#constant_KZT) |  | Казахский тенге |
| public | [UAH](../classes/YooKassa-Model-CurrencyCode.md#constant_UAH) |  | Украинская гривна |
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$validValues](../classes/YooKassa-Model-CurrencyCode.md#property_validValues) |  |  |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getEnabledValues()](../classes/YooKassa-Common-AbstractEnum.md#method_getEnabledValues) |  | Возвращает значения в enum'е значения которых разрешены |
| public | [getValidValues()](../classes/YooKassa-Common-AbstractEnum.md#method_getValidValues) |  | Возвращает все значения в enum'e |
| public | [valueExists()](../classes/YooKassa-Common-AbstractEnum.md#method_valueExists) |  | Проверяет наличие значения в enum'e |
---
### Details
* File: [lib/Model/CurrencyCode.php](../../lib/Model/CurrencyCode.php)
* Package: Default
* Class Hierarchy: 
  * [\YooKassa\Common\AbstractEnum](../classes/YooKassa-Common-AbstractEnum.md)
  * \YooKassa\Model\CurrencyCode
---
## Constants
<a name="constant_RUB" class="anchor"></a>
###### RUB
Российский рубль

```php
RUB = 'RUB'
```


<a name="constant_USD" class="anchor"></a>
###### USD
Доллар США

```php
USD = 'USD'
```


<a name="constant_EUR" class="anchor"></a>
###### EUR
Евро

```php
EUR = 'EUR'
```


<a name="constant_BYN" class="anchor"></a>
###### BYN
Белорусский рубль

```php
BYN = 'BYN'
```


<a name="constant_CNY" class="anchor"></a>
###### CNY
Китайская йена

```php
CNY = 'CNY'
```


<a name="constant_KZT" class="anchor"></a>
###### KZT
Казахский тенге

```php
KZT = 'KZT'
```


<a name="constant_UAH" class="anchor"></a>
###### UAH
Украинская гривна

```php
UAH = 'UAH'
```


---
## Properties
<a name="property_validValues"></a>
#### protected $validValues : array
---
**Type:** <a href="../array"><abbr title="array">array</abbr></a>
Массив принимаемых enum&#039;ом значений
**Details:**



---
## Methods
<a name="method_getEnabledValues" class="anchor"></a>
#### public getEnabledValues() : string[]

```php
Static public getEnabledValues() : string[]
```

**Summary**

Возвращает значения в enum'е значения которых разрешены

**Details:**
* Inherited From: [\YooKassa\Common\AbstractEnum](../classes/YooKassa-Common-AbstractEnum.md)

**Returns:** string[] - Массив разрешённых значений


<a name="method_getValidValues" class="anchor"></a>
#### public getValidValues() : array

```php
Static public getValidValues() : array
```

**Summary**

Возвращает все значения в enum'e

**Details:**
* Inherited From: [\YooKassa\Common\AbstractEnum](../classes/YooKassa-Common-AbstractEnum.md)

**Returns:** array - Массив значений в перечислении


<a name="method_valueExists" class="anchor"></a>
#### public valueExists() : bool

```php
Static public valueExists(mixed  value) : bool
```

**Summary**

Проверяет наличие значения в enum'e

**Details:**
* Inherited From: [\YooKassa\Common\AbstractEnum](../classes/YooKassa-Common-AbstractEnum.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">mixed</code> | value  | Проверяемое значение |

**Returns:** bool - True если значение имеется, false если нет



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