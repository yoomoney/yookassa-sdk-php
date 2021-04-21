# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Model\PaymentMethodType
### Namespace: [\YooKassa\Model](../namespaces/yookassa-model.md)
---
**Summary:**

PaymentMethodType - Тип источника средств для проведения платежа
|Код|Описание|
--- | ---
|yoo_money|Платеж из кошелька ЮMoney|
|bank_card|Платеж с произвольной банковской карты|
|sberbank|Платеж СбербанкОнлайн|
|cash|Платеж наличными|
|mobile_balance|Платеж с баланса мобильного телефона|
|apple_pay|Платеж ApplePay|
|google_pay|Платеж Google Pay|
|qiwi|Платеж из кошелька Qiwi|
|webmoney|Платеж из кошелька Webmoney|
|alfabank|Платеж через Альфа-Клик|
|b2b_sberbank|Сбербанк Бизнес Онлайн|
|tinkoff_bank|Интернет-банк Тинькофф|
|psb|ПромсвязьБанк|
|installments|Заплатить по частям|
|wechat|Платеж через WeChat|

---
### Constants
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [YOO_MONEY](../classes/YooKassa-Model-PaymentMethodType.md#constant_YOO_MONEY) |  | Платеж из кошелька ЮMoney |
| public | [BANK_CARD](../classes/YooKassa-Model-PaymentMethodType.md#constant_BANK_CARD) |  | Платеж с произвольной банковской карты |
| public | [SBERBANK](../classes/YooKassa-Model-PaymentMethodType.md#constant_SBERBANK) |  | Платеж СбербанкОнлайн |
| public | [CASH](../classes/YooKassa-Model-PaymentMethodType.md#constant_CASH) |  | Платеж наличными |
| public | [MOBILE_BALANCE](../classes/YooKassa-Model-PaymentMethodType.md#constant_MOBILE_BALANCE) |  | Платеж с баланса мобильного телефона |
| public | [APPLE_PAY](../classes/YooKassa-Model-PaymentMethodType.md#constant_APPLE_PAY) |  | латеж ApplePay |
| public | [GOOGLE_PAY](../classes/YooKassa-Model-PaymentMethodType.md#constant_GOOGLE_PAY) |  | Платеж Google Pay |
| public | [QIWI](../classes/YooKassa-Model-PaymentMethodType.md#constant_QIWI) |  | Платеж из кошелька Qiwi |
| public | [WEBMONEY](../classes/YooKassa-Model-PaymentMethodType.md#constant_WEBMONEY) |  | Платеж из кошелька Webmoney |
| public | [ALFABANK](../classes/YooKassa-Model-PaymentMethodType.md#constant_ALFABANK) |  | Платеж через Альфа-Клик |
| public | [B2B_SBERBANK](../classes/YooKassa-Model-PaymentMethodType.md#constant_B2B_SBERBANK) |  | Сбербанк Бизнес Онлайн |
| public | [TINKOFF_BANK](../classes/YooKassa-Model-PaymentMethodType.md#constant_TINKOFF_BANK) |  | Интернет-банк Тинькофф |
| public | [PSB](../classes/YooKassa-Model-PaymentMethodType.md#constant_PSB) |  | ПромсвязьБанк |
| public | [INSTALLMENTS](../classes/YooKassa-Model-PaymentMethodType.md#constant_INSTALLMENTS) |  | Заплатить по частям |
| public | [WECHAT](../classes/YooKassa-Model-PaymentMethodType.md#constant_WECHAT) | *deprecated* | Оплата через WeChat |
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$validValues](../classes/YooKassa-Model-PaymentMethodType.md#property_validValues) |  |  |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getEnabledValues()](../classes/YooKassa-Common-AbstractEnum.md#method_getEnabledValues) |  | Возвращает значения в enum'е значения которых разрешены |
| public | [getValidValues()](../classes/YooKassa-Common-AbstractEnum.md#method_getValidValues) |  | Возвращает все значения в enum'e |
| public | [valueExists()](../classes/YooKassa-Common-AbstractEnum.md#method_valueExists) |  | Проверяет наличие значения в enum'e |
---
### Details
* File: [lib/Model/PaymentMethodType.php](../../lib/Model/PaymentMethodType.php)
* Package: Default
* Class Hierarchy: 
  * [\YooKassa\Common\AbstractEnum](../classes/YooKassa-Common-AbstractEnum.md)
  * \YooKassa\Model\PaymentMethodType
---
## Constants
<a name="constant_YOO_MONEY" class="anchor"></a>
###### YOO_MONEY
Платеж из кошелька ЮMoney

```php
YOO_MONEY = 'yoo_money'
```


<a name="constant_BANK_CARD" class="anchor"></a>
###### BANK_CARD
Платеж с произвольной банковской карты

```php
BANK_CARD = 'bank_card'
```


<a name="constant_SBERBANK" class="anchor"></a>
###### SBERBANK
Платеж СбербанкОнлайн

```php
SBERBANK = 'sberbank'
```


<a name="constant_CASH" class="anchor"></a>
###### CASH
Платеж наличными

```php
CASH = 'cash'
```


<a name="constant_MOBILE_BALANCE" class="anchor"></a>
###### MOBILE_BALANCE
Платеж с баланса мобильного телефона

```php
MOBILE_BALANCE = 'mobile_balance'
```


<a name="constant_APPLE_PAY" class="anchor"></a>
###### APPLE_PAY
латеж ApplePay

```php
APPLE_PAY = 'apple_pay'
```


<a name="constant_GOOGLE_PAY" class="anchor"></a>
###### GOOGLE_PAY
Платеж Google Pay

```php
GOOGLE_PAY = 'google_pay'
```


<a name="constant_QIWI" class="anchor"></a>
###### QIWI
Платеж из кошелька Qiwi

```php
QIWI = 'qiwi'
```


<a name="constant_WEBMONEY" class="anchor"></a>
###### WEBMONEY
Платеж из кошелька Webmoney

```php
WEBMONEY = 'webmoney'
```


<a name="constant_ALFABANK" class="anchor"></a>
###### ALFABANK
Платеж через Альфа-Клик

```php
ALFABANK = 'alfabank'
```


<a name="constant_B2B_SBERBANK" class="anchor"></a>
###### B2B_SBERBANK
Сбербанк Бизнес Онлайн

```php
B2B_SBERBANK = 'b2b_sberbank'
```


<a name="constant_TINKOFF_BANK" class="anchor"></a>
###### TINKOFF_BANK
Интернет-банк Тинькофф

```php
TINKOFF_BANK = 'tinkoff_bank'
```


<a name="constant_PSB" class="anchor"></a>
###### PSB
ПромсвязьБанк

```php
PSB = 'psb'
```


<a name="constant_INSTALLMENTS" class="anchor"></a>
###### INSTALLMENTS
Заплатить по частям

```php
INSTALLMENTS = 'installments'
```


<a name="constant_WECHAT" class="anchor"></a>
###### ~~WECHAT~~
Оплата через WeChat

```php
WECHAT = 'wechat'
```

**deprecated**
Будет удален в следующих версиях

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