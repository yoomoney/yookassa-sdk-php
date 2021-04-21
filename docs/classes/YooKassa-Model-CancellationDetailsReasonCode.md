# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Model\CancellationDetailsReasonCode
### Namespace: [\YooKassa\Model](../namespaces/yookassa-model.md)
---
**Summary:**

CancellationDetailsReasonCode - Возможные причины отмены платежа

---
### Constants
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [THREE_D_SECURE_FAILED](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_THREE_D_SECURE_FAILED) |  |  |
| public | [CALL_ISSUER](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_CALL_ISSUER) |  |  |
| public | [CARD_EXPIRED](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_CARD_EXPIRED) |  |  |
| public | [COUNTRY_FORBIDDEN](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_COUNTRY_FORBIDDEN) |  |  |
| public | [FRAUD_SUSPECTED](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_FRAUD_SUSPECTED) |  |  |
| public | [GENERAL_DECLINE](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_GENERAL_DECLINE) |  |  |
| public | [IDENTIFICATION_REQUIRED](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_IDENTIFICATION_REQUIRED) |  |  |
| public | [INSUFFICIENT_FUNDS](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_INSUFFICIENT_FUNDS) |  |  |
| public | [INVALID_CARD_NUMBER](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_INVALID_CARD_NUMBER) |  |  |
| public | [INVALID_CSC](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_INVALID_CSC) |  |  |
| public | [ISSUER_UNAVAILABLE](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_ISSUER_UNAVAILABLE) |  |  |
| public | [PAYMENT_METHOD_LIMIT_EXCEEDED](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_PAYMENT_METHOD_LIMIT_EXCEEDED) |  |  |
| public | [PAYMENT_METHOD_RESTRICTED](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_PAYMENT_METHOD_RESTRICTED) |  |  |
| public | [PERMISSION_REVOKED](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_PERMISSION_REVOKED) |  |  |
| public | [INTERNAL_TIMEOUT](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_INTERNAL_TIMEOUT) |  |  |
| public | [CANCELED_BY_MERCHANT](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_CANCELED_BY_MERCHANT) |  |  |
| public | [PAYMENT_EXPIRED](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_PAYMENT_EXPIRED) |  |  |
| public | [EXPIRED_ON_CONFIRMATION](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_EXPIRED_ON_CONFIRMATION) |  |  |
| public | [EXPIRED_ON_CAPTURE](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_EXPIRED_ON_CAPTURE) |  |  |
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$validValues](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#property_validValues) |  |  |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getEnabledValues()](../classes/YooKassa-Common-AbstractEnum.md#method_getEnabledValues) |  | Возвращает значения в enum'е значения которых разрешены |
| public | [getValidValues()](../classes/YooKassa-Common-AbstractEnum.md#method_getValidValues) |  | Возвращает все значения в enum'e |
| public | [valueExists()](../classes/YooKassa-Common-AbstractEnum.md#method_valueExists) |  | Проверяет наличие значения в enum'e |
---
### Details
* File: [lib/Model/CancellationDetailsReasonCode.php](../../lib/Model/CancellationDetailsReasonCode.php)
* Package: Default
* Class Hierarchy: 
  * [\YooKassa\Common\AbstractEnum](../classes/YooKassa-Common-AbstractEnum.md)
  * \YooKassa\Model\CancellationDetailsReasonCode
---
## Constants
<a name="constant_THREE_D_SECURE_FAILED" class="anchor"></a>
###### THREE_D_SECURE_FAILED
```php
THREE_D_SECURE_FAILED = '3d_secure_failed'
```


<a name="constant_CALL_ISSUER" class="anchor"></a>
###### CALL_ISSUER
```php
CALL_ISSUER = 'call_issuer'
```


<a name="constant_CARD_EXPIRED" class="anchor"></a>
###### CARD_EXPIRED
```php
CARD_EXPIRED = 'card_expired'
```


<a name="constant_COUNTRY_FORBIDDEN" class="anchor"></a>
###### COUNTRY_FORBIDDEN
```php
COUNTRY_FORBIDDEN = 'country_forbidden'
```


<a name="constant_FRAUD_SUSPECTED" class="anchor"></a>
###### FRAUD_SUSPECTED
```php
FRAUD_SUSPECTED = 'fraud_suspected'
```


<a name="constant_GENERAL_DECLINE" class="anchor"></a>
###### GENERAL_DECLINE
```php
GENERAL_DECLINE = 'general_decline'
```


<a name="constant_IDENTIFICATION_REQUIRED" class="anchor"></a>
###### IDENTIFICATION_REQUIRED
```php
IDENTIFICATION_REQUIRED = 'identification_required'
```


<a name="constant_INSUFFICIENT_FUNDS" class="anchor"></a>
###### INSUFFICIENT_FUNDS
```php
INSUFFICIENT_FUNDS = 'insufficient_funds'
```


<a name="constant_INVALID_CARD_NUMBER" class="anchor"></a>
###### INVALID_CARD_NUMBER
```php
INVALID_CARD_NUMBER = 'invalid_card_number'
```


<a name="constant_INVALID_CSC" class="anchor"></a>
###### INVALID_CSC
```php
INVALID_CSC = 'invalid_csc'
```


<a name="constant_ISSUER_UNAVAILABLE" class="anchor"></a>
###### ISSUER_UNAVAILABLE
```php
ISSUER_UNAVAILABLE = 'issuer_unavailable'
```


<a name="constant_PAYMENT_METHOD_LIMIT_EXCEEDED" class="anchor"></a>
###### PAYMENT_METHOD_LIMIT_EXCEEDED
```php
PAYMENT_METHOD_LIMIT_EXCEEDED = 'payment_method_limit_exceeded'
```


<a name="constant_PAYMENT_METHOD_RESTRICTED" class="anchor"></a>
###### PAYMENT_METHOD_RESTRICTED
```php
PAYMENT_METHOD_RESTRICTED = 'payment_method_restricted'
```


<a name="constant_PERMISSION_REVOKED" class="anchor"></a>
###### PERMISSION_REVOKED
```php
PERMISSION_REVOKED = 'permission_revoked'
```


<a name="constant_INTERNAL_TIMEOUT" class="anchor"></a>
###### INTERNAL_TIMEOUT
```php
INTERNAL_TIMEOUT = 'internal_timeout'
```


<a name="constant_CANCELED_BY_MERCHANT" class="anchor"></a>
###### CANCELED_BY_MERCHANT
```php
CANCELED_BY_MERCHANT = 'canceled_by_merchant'
```


<a name="constant_PAYMENT_EXPIRED" class="anchor"></a>
###### PAYMENT_EXPIRED
```php
PAYMENT_EXPIRED = 'payment_expired'
```


<a name="constant_EXPIRED_ON_CONFIRMATION" class="anchor"></a>
###### EXPIRED_ON_CONFIRMATION
```php
EXPIRED_ON_CONFIRMATION = 'expired_on_confirmation'
```


<a name="constant_EXPIRED_ON_CAPTURE" class="anchor"></a>
###### EXPIRED_ON_CAPTURE
```php
EXPIRED_ON_CAPTURE = 'expired_on_capture'
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