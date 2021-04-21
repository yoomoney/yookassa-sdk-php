# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Model\ConfirmationType
### Namespace: [\YooKassa\Model](../namespaces/yookassa-model.md)
---
**Summary:**

ConfirmationType - Тип пользовательского процесса подтверждения платежа
|Код|Описание|
--- | ---
|redirect|Необходимо направить плательщика на страницу партнера|
|external|Необходимо ождать пока плательщик самостоятельно подтвердит платеж|
|deeplink|Необходимо направить плательщика в приложение партнера|
|code_verification|Необходимо получить одноразовый код от плательщика для подтверждения платежа|
|embedded|Необходимо получить токен для checkout.js|
|qr|Необходимо получить QR-код|

---
### Constants
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [REDIRECT](../classes/YooKassa-Model-ConfirmationType.md#constant_REDIRECT) |  |  |
| public | [EXTERNAL](../classes/YooKassa-Model-ConfirmationType.md#constant_EXTERNAL) |  |  |
| public | [DEEPLINK](../classes/YooKassa-Model-ConfirmationType.md#constant_DEEPLINK) |  |  |
| public | [CODE_VERIFICATION](../classes/YooKassa-Model-ConfirmationType.md#constant_CODE_VERIFICATION) |  |  |
| public | [EMBEDDED](../classes/YooKassa-Model-ConfirmationType.md#constant_EMBEDDED) |  |  |
| public | [QR](../classes/YooKassa-Model-ConfirmationType.md#constant_QR) |  |  |
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$validValues](../classes/YooKassa-Model-ConfirmationType.md#property_validValues) |  |  |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getEnabledValues()](../classes/YooKassa-Common-AbstractEnum.md#method_getEnabledValues) |  | Возвращает значения в enum'е значения которых разрешены |
| public | [getValidValues()](../classes/YooKassa-Common-AbstractEnum.md#method_getValidValues) |  | Возвращает все значения в enum'e |
| public | [valueExists()](../classes/YooKassa-Common-AbstractEnum.md#method_valueExists) |  | Проверяет наличие значения в enum'e |
---
### Details
* File: [lib/Model/ConfirmationType.php](../../lib/Model/ConfirmationType.php)
* Package: Default
* Class Hierarchy: 
  * [\YooKassa\Common\AbstractEnum](../classes/YooKassa-Common-AbstractEnum.md)
  * \YooKassa\Model\ConfirmationType
---
## Constants
<a name="constant_REDIRECT" class="anchor"></a>
###### REDIRECT
```php
REDIRECT = 'redirect'
```


<a name="constant_EXTERNAL" class="anchor"></a>
###### EXTERNAL
```php
EXTERNAL = 'external'
```


<a name="constant_DEEPLINK" class="anchor"></a>
###### DEEPLINK
```php
DEEPLINK = 'deeplink'
```


<a name="constant_CODE_VERIFICATION" class="anchor"></a>
###### CODE_VERIFICATION
```php
CODE_VERIFICATION = 'code_verification'
```


<a name="constant_EMBEDDED" class="anchor"></a>
###### EMBEDDED
```php
EMBEDDED = 'embedded'
```


<a name="constant_QR" class="anchor"></a>
###### QR
```php
QR = 'qr'
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