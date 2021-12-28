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
| public | [THREE_D_SECURE_FAILED](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_THREE_D_SECURE_FAILED) |  | Не пройдена аутентификация по 3-D Secure. При новой попытке оплаты пользователю следует пройти аутентификацию, использовать другое платежное средство или обратиться в банк за уточнениями |
| public | [CALL_ISSUER](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_CALL_ISSUER) |  | Оплата данным платежным средством отклонена по неизвестным причинам. |
| public | [CARD_EXPIRED](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_CARD_EXPIRED) |  | Истек срок действия банковской карты. При новой попытке оплаты пользователю следует использовать другое платежное средство |
| public | [COUNTRY_FORBIDDEN](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_COUNTRY_FORBIDDEN) |  | Нельзя заплатить банковской картой, выпущенной в этой стране. |
| public | [FRAUD_SUSPECTED](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_FRAUD_SUSPECTED) |  | Платеж заблокирован из-за подозрения в мошенничестве. При новой попытке оплаты пользователю следует использовать другое платежное средство |
| public | [GENERAL_DECLINE](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_GENERAL_DECLINE) |  | Причина не детализирована. Пользователю следует обратиться к инициатору отмены платежа за уточнением подробностей |
| public | [IDENTIFICATION_REQUIRED](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_IDENTIFICATION_REQUIRED) |  | Превышены ограничения на платежи для кошелька ЮMoney. При новой попытке оплаты пользователю следует идентифицировать кошелек или выбрать другое платежное средство |
| public | [INSUFFICIENT_FUNDS](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_INSUFFICIENT_FUNDS) |  | Не хватает денег для оплаты. Пользователю следует пополнить баланс или использовать другое платежное средство |
| public | [INVALID_CARD_NUMBER](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_INVALID_CARD_NUMBER) |  | Неправильно указан номер карты. При новой попытке оплаты пользователю следует ввести корректные данные |
| public | [INVALID_CSC](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_INVALID_CSC) |  | Неправильно указан код CVV2 (CVC2, CID). При новой попытке оплаты пользователю следует ввести корректные данные |
| public | [ISSUER_UNAVAILABLE](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_ISSUER_UNAVAILABLE) |  | Организация, выпустившая платежное средство, недоступна. При новой попытке оплаты пользователю следует использовать другое платежное средство или повторить оплату позже |
| public | [PAYMENT_METHOD_LIMIT_EXCEEDED](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_PAYMENT_METHOD_LIMIT_EXCEEDED) |  | Исчерпан лимит платежей для данного платежного средства или вашего магазина. |
| public | [PAYMENT_METHOD_RESTRICTED](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_PAYMENT_METHOD_RESTRICTED) |  | Запрещены операции данным платежным средством (например, карта заблокирована из-за утери, кошелек — из-за взлома мошенниками). Пользователю следует обратиться в организацию, выпустившую платежное средство |
| public | [PERMISSION_REVOKED](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_PERMISSION_REVOKED) |  | Нельзя провести безакцептное списание: пользователь отозвал разрешение на автоплатежи. Если пользователь еще хочет оплатить, вам необходимо создать новый платеж, а пользователю — подтвердить оплату |
| public | [INTERNAL_TIMEOUT](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_INTERNAL_TIMEOUT) |  | Технические неполадки на стороне ЮKassa: не удалось обработать запрос в течение 30 секунд. Повторите платеж с новым ключом идемпотентности |
| public | [CANCELED_BY_MERCHANT](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_CANCELED_BY_MERCHANT) |  | Платеж отменен по API при оплате в две стадии |
| public | [EXPIRED_ON_CONFIRMATION](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_EXPIRED_ON_CONFIRMATION) |  | Истек срок оплаты: пользователь не подтвердил платеж за время, отведенное на оплату выбранным способом. |
| public | [EXPIRED_ON_CAPTURE](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_EXPIRED_ON_CAPTURE) |  | Истек срок списания оплаты у двухстадийного платежа. |
| public | [DEAL_EXPIRED](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_DEAL_EXPIRED) |  | Для тех, кто использует Безопасную сделку: закончился срок жизни сделки. |
| public | [UNSUPPORTED_MOBILE_OPERATOR](../classes/YooKassa-Model-CancellationDetailsReasonCode.md#constant_UNSUPPORTED_MOBILE_OPERATOR) |  | Нельзя заплатить с номера телефона этого мобильного оператора. При новой попытке оплаты пользователю следует использовать другое платежное средство. Список поддерживаемых операторов |

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
Не пройдена аутентификация по 3-D Secure. При новой попытке оплаты пользователю следует пройти аутентификацию, использовать другое платежное средство или обратиться в банк за уточнениями

```php
THREE_D_SECURE_FAILED = '3d_secure_failed'
```


<a name="constant_CALL_ISSUER" class="anchor"></a>
###### CALL_ISSUER
Оплата данным платежным средством отклонена по неизвестным причинам.

```php
CALL_ISSUER = 'call_issuer'
```

Пользователю следует обратиться в организацию, выпустившую платежное средство

<a name="constant_CARD_EXPIRED" class="anchor"></a>
###### CARD_EXPIRED
Истек срок действия банковской карты. При новой попытке оплаты пользователю следует использовать другое платежное средство

```php
CARD_EXPIRED = 'card_expired'
```


<a name="constant_COUNTRY_FORBIDDEN" class="anchor"></a>
###### COUNTRY_FORBIDDEN
Нельзя заплатить банковской картой, выпущенной в этой стране.

```php
COUNTRY_FORBIDDEN = 'country_forbidden'
```

При новой попытке оплаты пользователю следует использовать другое платежное средство.
Вы можете настроить ограничения на оплату иностранными банковскими картами

<a name="constant_FRAUD_SUSPECTED" class="anchor"></a>
###### FRAUD_SUSPECTED
Платеж заблокирован из-за подозрения в мошенничестве. При новой попытке оплаты пользователю следует использовать другое платежное средство

```php
FRAUD_SUSPECTED = 'fraud_suspected'
```


<a name="constant_GENERAL_DECLINE" class="anchor"></a>
###### GENERAL_DECLINE
Причина не детализирована. Пользователю следует обратиться к инициатору отмены платежа за уточнением подробностей

```php
GENERAL_DECLINE = 'general_decline'
```


<a name="constant_IDENTIFICATION_REQUIRED" class="anchor"></a>
###### IDENTIFICATION_REQUIRED
Превышены ограничения на платежи для кошелька ЮMoney. При новой попытке оплаты пользователю следует идентифицировать кошелек или выбрать другое платежное средство

```php
IDENTIFICATION_REQUIRED = 'identification_required'
```


<a name="constant_INSUFFICIENT_FUNDS" class="anchor"></a>
###### INSUFFICIENT_FUNDS
Не хватает денег для оплаты. Пользователю следует пополнить баланс или использовать другое платежное средство

```php
INSUFFICIENT_FUNDS = 'insufficient_funds'
```


<a name="constant_INVALID_CARD_NUMBER" class="anchor"></a>
###### INVALID_CARD_NUMBER
Неправильно указан номер карты. При новой попытке оплаты пользователю следует ввести корректные данные

```php
INVALID_CARD_NUMBER = 'invalid_card_number'
```


<a name="constant_INVALID_CSC" class="anchor"></a>
###### INVALID_CSC
Неправильно указан код CVV2 (CVC2, CID). При новой попытке оплаты пользователю следует ввести корректные данные

```php
INVALID_CSC = 'invalid_csc'
```


<a name="constant_ISSUER_UNAVAILABLE" class="anchor"></a>
###### ISSUER_UNAVAILABLE
Организация, выпустившая платежное средство, недоступна. При новой попытке оплаты пользователю следует использовать другое платежное средство или повторить оплату позже

```php
ISSUER_UNAVAILABLE = 'issuer_unavailable'
```


<a name="constant_PAYMENT_METHOD_LIMIT_EXCEEDED" class="anchor"></a>
###### PAYMENT_METHOD_LIMIT_EXCEEDED
Исчерпан лимит платежей для данного платежного средства или вашего магазина.

```php
PAYMENT_METHOD_LIMIT_EXCEEDED = 'payment_method_limit_exceeded'
```

При новой попытке оплаты пользователю следует использовать другое платежное средство или повторить оплату на следующий день

<a name="constant_PAYMENT_METHOD_RESTRICTED" class="anchor"></a>
###### PAYMENT_METHOD_RESTRICTED
Запрещены операции данным платежным средством (например, карта заблокирована из-за утери, кошелек — из-за взлома мошенниками). Пользователю следует обратиться в организацию, выпустившую платежное средство

```php
PAYMENT_METHOD_RESTRICTED = 'payment_method_restricted'
```


<a name="constant_PERMISSION_REVOKED" class="anchor"></a>
###### PERMISSION_REVOKED
Нельзя провести безакцептное списание: пользователь отозвал разрешение на автоплатежи. Если пользователь еще хочет оплатить, вам необходимо создать новый платеж, а пользователю — подтвердить оплату

```php
PERMISSION_REVOKED = 'permission_revoked'
```


<a name="constant_INTERNAL_TIMEOUT" class="anchor"></a>
###### INTERNAL_TIMEOUT
Технические неполадки на стороне ЮKassa: не удалось обработать запрос в течение 30 секунд. Повторите платеж с новым ключом идемпотентности

```php
INTERNAL_TIMEOUT = 'internal_timeout'
```


<a name="constant_CANCELED_BY_MERCHANT" class="anchor"></a>
###### CANCELED_BY_MERCHANT
Платеж отменен по API при оплате в две стадии

```php
CANCELED_BY_MERCHANT = 'canceled_by_merchant'
```


<a name="constant_EXPIRED_ON_CONFIRMATION" class="anchor"></a>
###### EXPIRED_ON_CONFIRMATION
Истек срок оплаты: пользователь не подтвердил платеж за время, отведенное на оплату выбранным способом.

```php
EXPIRED_ON_CONFIRMATION = 'expired_on_confirmation'
```

Если пользователь еще хочет оплатить, вам необходимо повторить платеж с новым ключом идемпотентности, а пользователю — подтвердить его

<a name="constant_EXPIRED_ON_CAPTURE" class="anchor"></a>
###### EXPIRED_ON_CAPTURE
Истек срок списания оплаты у двухстадийного платежа.

```php
EXPIRED_ON_CAPTURE = 'expired_on_capture'
```

Если вы еще хотите принять оплату, повторите платеж с новым ключом идемпотентности и спишите деньги после подтверждения платежа пользователем

<a name="constant_DEAL_EXPIRED" class="anchor"></a>
###### DEAL_EXPIRED
Для тех, кто использует Безопасную сделку: закончился срок жизни сделки.

```php
DEAL_EXPIRED = 'deal_expired'
```

Если вы еще хотите принять оплату, создайте новую сделку и проведите для нее новый платеж

<a name="constant_UNSUPPORTED_MOBILE_OPERATOR" class="anchor"></a>
###### UNSUPPORTED_MOBILE_OPERATOR
Нельзя заплатить с номера телефона этого мобильного оператора. При новой попытке оплаты пользователю следует использовать другое платежное средство. Список поддерживаемых операторов

```php
UNSUPPORTED_MOBILE_OPERATOR = 'unsupported_mobile_operator'
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
Static public valueExists(mixed $value) : bool
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
* [Deprecated - 13](../reports/deprecated.md)

---

This document was automatically generated from source code comments on 2021-12-28 using [phpDocumentor](http://www.phpdoc.org/)

&copy; 2021 YooMoney