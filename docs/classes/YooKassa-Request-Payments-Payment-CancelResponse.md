# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Request\Payments\Payment\CancelResponse
### Namespace: [\YooKassa\Request\Payments\Payment](../namespaces/yookassa-request-payments-payment.md)
---
**Summary:**

Класс объекта ответа от API на запрос отмены платежа

---
### Constants
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [MAX_LENGTH_DESCRIPTION](../classes/YooKassa-Model-Payment.md#constant_MAX_LENGTH_DESCRIPTION) |  | Максимальная длина строки описания платежа |
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [$amount](../classes/YooKassa-Model-Payment.md#property_amount) |  | Сумма заказа |
| public | [$authorization_details](../classes/YooKassa-Model-Payment.md#property_authorization_details) |  | Данные об авторизации платежа |
| public | [$authorizationDetails](../classes/YooKassa-Model-Payment.md#property_authorizationDetails) |  | Данные об авторизации платежа |
| public | [$cancellation_details](../classes/YooKassa-Model-Payment.md#property_cancellation_details) |  | Комментарий к отмене платежа |
| public | [$cancellationDetails](../classes/YooKassa-Model-Payment.md#property_cancellationDetails) |  | Комментарий к отмене платежа |
| public | [$captured_at](../classes/YooKassa-Model-Payment.md#property_captured_at) |  | Время подтверждения платежа магазином |
| public | [$capturedAt](../classes/YooKassa-Model-Payment.md#property_capturedAt) |  | Время подтверждения платежа магазином |
| public | [$confirmation](../classes/YooKassa-Model-Payment.md#property_confirmation) |  | Способ подтверждения платежа |
| public | [$created_at](../classes/YooKassa-Model-Payment.md#property_created_at) |  | Время создания заказа |
| public | [$createdAt](../classes/YooKassa-Model-Payment.md#property_createdAt) |  | Время создания заказа |
| public | [$description](../classes/YooKassa-Model-Payment.md#property_description) |  | Описание транзакции |
| public | [$expires_at](../classes/YooKassa-Model-Payment.md#property_expires_at) |  | Время, до которого можно бесплатно отменить или подтвердить платеж |
| public | [$expiresAt](../classes/YooKassa-Model-Payment.md#property_expiresAt) |  | Время, до которого можно бесплатно отменить или подтвердить платеж |
| public | [$id](../classes/YooKassa-Model-Payment.md#property_id) |  | Идентификатор платежа |
| public | [$income_amount](../classes/YooKassa-Model-Payment.md#property_income_amount) |  | Сумма платежа, которую получит магазин |
| public | [$incomeAmount](../classes/YooKassa-Model-Payment.md#property_incomeAmount) |  | Сумма платежа, которую получит магазин |
| public | [$metadata](../classes/YooKassa-Model-Payment.md#property_metadata) |  | Метаданные платежа указанные мерчантом |
| public | [$paid](../classes/YooKassa-Model-Payment.md#property_paid) |  | Признак оплаты заказа |
| public | [$payment_method](../classes/YooKassa-Model-Payment.md#property_payment_method) |  | Способ проведения платежа |
| public | [$paymentMethod](../classes/YooKassa-Model-Payment.md#property_paymentMethod) |  | Способ проведения платежа |
| public | [$receipt_registration](../classes/YooKassa-Model-Payment.md#property_receipt_registration) |  | Состояние регистрации фискального чека |
| public | [$receiptRegistration](../classes/YooKassa-Model-Payment.md#property_receiptRegistration) |  | Состояние регистрации фискального чека |
| public | [$recipient](../classes/YooKassa-Model-Payment.md#property_recipient) |  | Получатель платежа |
| public | [$refundable](../classes/YooKassa-Model-Payment.md#property_refundable) |  | Возможность провести возврат по API |
| public | [$refunded_amount](../classes/YooKassa-Model-Payment.md#property_refunded_amount) |  | Сумма возвращенных средств платежа |
| public | [$refundedAmount](../classes/YooKassa-Model-Payment.md#property_refundedAmount) |  | Сумма возвращенных средств платежа |
| public | [$requestor](../classes/YooKassa-Model-Payment.md#property_requestor) |  | Инициатор платежа |
| public | [$status](../classes/YooKassa-Model-Payment.md#property_status) |  | Текущее состояние платежа |
| public | [$test](../classes/YooKassa-Model-Payment.md#property_test) |  | Признак тестовой операции |
| public | [$transfers](../classes/YooKassa-Model-Payment.md#property_transfers) |  | Данные о распределении платежа между магазинами |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Common-AbstractObject.md#method___construct) |  | AbstractObject constructor. |
| public | [__get()](../classes/YooKassa-Common-AbstractObject.md#method___get) |  | Возвращает значение свойства |
| public | [__isset()](../classes/YooKassa-Common-AbstractObject.md#method___isset) |  | Проверяет наличие свойства |
| public | [__set()](../classes/YooKassa-Common-AbstractObject.md#method___set) |  | Устанавливает значение свойства |
| public | [__unset()](../classes/YooKassa-Common-AbstractObject.md#method___unset) |  | Удаляет свойство |
| public | [fromArray()](../classes/YooKassa-Common-AbstractObject.md#method_fromArray) |  | Устанавливает значения свойств текущего объекта из массива |
| public | [getAmount()](../classes/YooKassa-Model-Payment.md#method_getAmount) |  | Возвращает сумму |
| public | [getAuthorizationDetails()](../classes/YooKassa-Model-Payment.md#method_getAuthorizationDetails) |  | Возвращает данные об авторизации платежа |
| public | [getCancellationDetails()](../classes/YooKassa-Model-Payment.md#method_getCancellationDetails) |  | Возвращает комментарий к статусу canceled: кто отменил платеж и по какой причине |
| public | [getCapturedAt()](../classes/YooKassa-Model-Payment.md#method_getCapturedAt) |  | Возвращает время подтверждения платежа магазином или null если если время не задано |
| public | [getConfirmation()](../classes/YooKassa-Model-Payment.md#method_getConfirmation) |  | Возвращает способ подтверждения платежа |
| public | [getCreatedAt()](../classes/YooKassa-Model-Payment.md#method_getCreatedAt) |  | Возвращает время создания заказа |
| public | [getDescription()](../classes/YooKassa-Model-Payment.md#method_getDescription) |  | Возвращает описание транзакции |
| public | [getExpiresAt()](../classes/YooKassa-Model-Payment.md#method_getExpiresAt) |  | Возвращает время до которого можно бесплатно отменить или подтвердить платеж или null если оно не задано |
| public | [getId()](../classes/YooKassa-Model-Payment.md#method_getId) |  | Возвращает идентификатор платежа |
| public | [getIncomeAmount()](../classes/YooKassa-Model-Payment.md#method_getIncomeAmount) |  | Возвращает сумму платежа, которую получит магазин, значение `amount` за вычетом комиссии ЮKassa |
| public | [getMetadata()](../classes/YooKassa-Model-Payment.md#method_getMetadata) |  | Возвращает метаданные платежа установленные мерчантом |
| public | [getPaid()](../classes/YooKassa-Model-Payment.md#method_getPaid) |  | Проверяет был ли уже оплачен заказ |
| public | [getPaymentMethod()](../classes/YooKassa-Model-Payment.md#method_getPaymentMethod) |  | Возвращает используемый способ проведения платежа |
| public | [getReceiptRegistration()](../classes/YooKassa-Model-Payment.md#method_getReceiptRegistration) |  | Возвращает состояние регистрации фискального чека |
| public | [getRecipient()](../classes/YooKassa-Model-Payment.md#method_getRecipient) |  | Возвращает получателя платежа |
| public | [getRefundable()](../classes/YooKassa-Model-Payment.md#method_getRefundable) |  | Проверяет возможность провести возврат по API |
| public | [getRefundedAmount()](../classes/YooKassa-Model-Payment.md#method_getRefundedAmount) |  | Возвращает сумму возвращенных средств |
| public | [getRequestor()](../classes/YooKassa-Model-Payment.md#method_getRequestor) |  | Возвращает инициатора платежа |
| public | [getStatus()](../classes/YooKassa-Model-Payment.md#method_getStatus) |  | Возвращает состояние платежа |
| public | [getTest()](../classes/YooKassa-Model-Payment.md#method_getTest) |  | Возвращает признак тестовой операции |
| public | [getTransfers()](../classes/YooKassa-Model-Payment.md#method_getTransfers) |  | Возвращает массив распределения денег между магазинами |
| public | [jsonSerialize()](../classes/YooKassa-Common-AbstractObject.md#method_jsonSerialize) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации |
| public | [offsetExists()](../classes/YooKassa-Common-AbstractObject.md#method_offsetExists) |  | Проверяет наличие свойства |
| public | [offsetGet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetGet) |  | Возвращает значение свойства |
| public | [offsetSet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetSet) |  | Устанавливает значение свойства |
| public | [offsetUnset()](../classes/YooKassa-Common-AbstractObject.md#method_offsetUnset) |  | Удаляет свойство |
| public | [setAmount()](../classes/YooKassa-Model-Payment.md#method_setAmount) |  | Устанавливает сумму платежа |
| public | [setAuthorizationDetails()](../classes/YooKassa-Model-Payment.md#method_setAuthorizationDetails) |  | Устанавливает данные об авторизации платежа |
| public | [setCancellationDetails()](../classes/YooKassa-Model-Payment.md#method_setCancellationDetails) |  | Устанавливает комментарий к статусу canceled: кто отменил платеж и по какой причине |
| public | [setCapturedAt()](../classes/YooKassa-Model-Payment.md#method_setCapturedAt) |  | Устанавливает время подтверждения платежа магазином |
| public | [setConfirmation()](../classes/YooKassa-Model-Payment.md#method_setConfirmation) |  | Устанавливает способ подтверждения платежа |
| public | [setCreatedAt()](../classes/YooKassa-Model-Payment.md#method_setCreatedAt) |  | Устанавливает время создания заказа |
| public | [setDescription()](../classes/YooKassa-Model-Payment.md#method_setDescription) |  | Устанавливает описание транзакции |
| public | [setExpiresAt()](../classes/YooKassa-Model-Payment.md#method_setExpiresAt) |  | Устанавливает время до которого можно бесплатно отменить или подтвердить платеж |
| public | [setId()](../classes/YooKassa-Model-Payment.md#method_setId) |  | Устанавливает идентификатор платежа |
| public | [setIncomeAmount()](../classes/YooKassa-Model-Payment.md#method_setIncomeAmount) |  | Устанавливает сумму платежа, которую получит магазин, значение `amount` за вычетом комиссии ЮKassa |
| public | [setMetadata()](../classes/YooKassa-Model-Payment.md#method_setMetadata) |  | Устанавливает метаданные платежа |
| public | [setPaid()](../classes/YooKassa-Model-Payment.md#method_setPaid) |  | Устанавливает флаг оплаты заказа |
| public | [setPaymentMethod()](../classes/YooKassa-Model-Payment.md#method_setPaymentMethod) |  | Устанавливает используемый способ проведения платежа |
| public | [setReceiptRegistration()](../classes/YooKassa-Model-Payment.md#method_setReceiptRegistration) |  | Устанавливает состояние регистрации фискального чека |
| public | [setRecipient()](../classes/YooKassa-Model-Payment.md#method_setRecipient) |  | Устанавливает получателя платежа |
| public | [setRefundable()](../classes/YooKassa-Model-Payment.md#method_setRefundable) |  | Устанавливает возможность провести возврат по API |
| public | [setRefundedAmount()](../classes/YooKassa-Model-Payment.md#method_setRefundedAmount) |  | Устанавливает сумму возвращенных средств |
| public | [setRequestor()](../classes/YooKassa-Model-Payment.md#method_setRequestor) |  | Устанавливает инициатора платежа |
| public | [setStatus()](../classes/YooKassa-Model-Payment.md#method_setStatus) |  | Устанавливает статус платежа |
| public | [setTest()](../classes/YooKassa-Model-Payment.md#method_setTest) |  | Устанавливает признак тестовой операции |
| public | [setTransfers()](../classes/YooKassa-Model-Payment.md#method_setTransfers) |  | Устанавливает массив распределения денег между магазинами |
| public | [toArray()](../classes/YooKassa-Common-AbstractObject.md#method_toArray) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации Является алиасом метода AbstractObject::jsonSerialize() |
| protected | [getUnknownProperties()](../classes/YooKassa-Common-AbstractObject.md#method_getUnknownProperties) |  | Возвращает массив свойств которые не существуют, но были заданы у объекта |
---
### Details
* File: [lib/Request/Payments/Payment/CancelResponse.php](../../lib/Request/Payments/Payment/CancelResponse.php)
* Package: YooKassa
* Class Hierarchy:   
  * [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
  * [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)
  * [\YooKassa\Request\Payments\AbstractPaymentResponse](../classes/YooKassa-Request-Payments-AbstractPaymentResponse.md)
  * \YooKassa\Request\Payments\Payment\CancelResponse
---
## Constants
<a name="constant_MAX_LENGTH_DESCRIPTION" class="anchor"></a>
###### MAX_LENGTH_DESCRIPTION
Inherited from [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)

Максимальная длина строки описания платежа

```php
MAX_LENGTH_DESCRIPTION = 128
```


---
## Properties
<a name="property_amount"></a>
#### public $amount : \YooKassa\Model\AmountInterface
---
***Description***

Сумма заказа

**Type:** <a href="../classes/YooKassa-Model-AmountInterface.html"><abbr title="\YooKassa\Model\AmountInterface">AmountInterface</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)


<a name="property_authorization_details"></a>
#### public $authorization_details : \YooKassa\Model\AuthorizationDetailsInterface
---
***Description***

Данные об авторизации платежа

**Type:** <a href="../classes/YooKassa-Model-AuthorizationDetailsInterface.html"><abbr title="\YooKassa\Model\AuthorizationDetailsInterface">AuthorizationDetailsInterface</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)


<a name="property_authorizationDetails"></a>
#### public $authorizationDetails : \YooKassa\Model\AuthorizationDetailsInterface
---
***Description***

Данные об авторизации платежа

**Type:** <a href="../classes/YooKassa-Model-AuthorizationDetailsInterface.html"><abbr title="\YooKassa\Model\AuthorizationDetailsInterface">AuthorizationDetailsInterface</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)


<a name="property_cancellation_details"></a>
#### public $cancellation_details : \YooKassa\Model\CancellationDetailsInterface
---
***Description***

Комментарий к отмене платежа

**Type:** <a href="../classes/YooKassa-Model-CancellationDetailsInterface.html"><abbr title="\YooKassa\Model\CancellationDetailsInterface">CancellationDetailsInterface</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)


<a name="property_cancellationDetails"></a>
#### public $cancellationDetails : \YooKassa\Model\CancellationDetailsInterface
---
***Description***

Комментарий к отмене платежа

**Type:** <a href="../classes/YooKassa-Model-CancellationDetailsInterface.html"><abbr title="\YooKassa\Model\CancellationDetailsInterface">CancellationDetailsInterface</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)


<a name="property_captured_at"></a>
#### public $captured_at : \DateTime
---
***Description***

Время подтверждения платежа магазином

**Type:** \DateTime

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)


<a name="property_capturedAt"></a>
#### public $capturedAt : \DateTime
---
***Description***

Время подтверждения платежа магазином

**Type:** \DateTime

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)


<a name="property_confirmation"></a>
#### public $confirmation : \YooKassa\Model\Confirmation\AbstractConfirmation
---
***Description***

Способ подтверждения платежа

**Type:** <a href="../classes/YooKassa-Model-Confirmation-AbstractConfirmation.html"><abbr title="\YooKassa\Model\Confirmation\AbstractConfirmation">AbstractConfirmation</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)


<a name="property_created_at"></a>
#### public $created_at : \DateTime
---
***Description***

Время создания заказа

**Type:** \DateTime

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)


<a name="property_createdAt"></a>
#### public $createdAt : \DateTime
---
***Description***

Время создания заказа

**Type:** \DateTime

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)


<a name="property_description"></a>
#### public $description : string
---
***Description***

Описание транзакции

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)


<a name="property_expires_at"></a>
#### public $expires_at : \DateTime
---
***Description***

Время, до которого можно бесплатно отменить или подтвердить платеж

**Type:** \DateTime

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)


<a name="property_expiresAt"></a>
#### public $expiresAt : \DateTime
---
***Description***

Время, до которого можно бесплатно отменить или подтвердить платеж

**Type:** \DateTime

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)


<a name="property_id"></a>
#### public $id : string
---
***Description***

Идентификатор платежа

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)


<a name="property_income_amount"></a>
#### public $income_amount : \YooKassa\Model\AmountInterface
---
***Description***

Сумма платежа, которую получит магазин

**Type:** <a href="../classes/YooKassa-Model-AmountInterface.html"><abbr title="\YooKassa\Model\AmountInterface">AmountInterface</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)


<a name="property_incomeAmount"></a>
#### public $incomeAmount : \YooKassa\Model\AmountInterface
---
***Description***

Сумма платежа, которую получит магазин

**Type:** <a href="../classes/YooKassa-Model-AmountInterface.html"><abbr title="\YooKassa\Model\AmountInterface">AmountInterface</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)


<a name="property_metadata"></a>
#### public $metadata : \YooKassa\Model\Metadata
---
***Description***

Метаданные платежа указанные мерчантом

**Type:** <a href="../classes/YooKassa-Model-Metadata.html"><abbr title="\YooKassa\Model\Metadata">Metadata</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)


<a name="property_paid"></a>
#### public $paid : bool
---
***Description***

Признак оплаты заказа

**Type:** <a href="../bool"><abbr title="bool">bool</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)


<a name="property_payment_method"></a>
#### public $payment_method : \YooKassa\Model\PaymentMethod\AbstractPaymentMethod
---
***Description***

Способ проведения платежа

**Type:** <a href="../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.html"><abbr title="\YooKassa\Model\PaymentMethod\AbstractPaymentMethod">AbstractPaymentMethod</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)


<a name="property_paymentMethod"></a>
#### public $paymentMethod : \YooKassa\Model\PaymentMethod\AbstractPaymentMethod
---
***Description***

Способ проведения платежа

**Type:** <a href="../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.html"><abbr title="\YooKassa\Model\PaymentMethod\AbstractPaymentMethod">AbstractPaymentMethod</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)


<a name="property_receipt_registration"></a>
#### public $receipt_registration : string
---
***Description***

Состояние регистрации фискального чека

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)


<a name="property_receiptRegistration"></a>
#### public $receiptRegistration : string
---
***Description***

Состояние регистрации фискального чека

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)


<a name="property_recipient"></a>
#### public $recipient : \YooKassa\Model\RecipientInterface
---
***Description***

Получатель платежа

**Type:** <a href="../classes/YooKassa-Model-RecipientInterface.html"><abbr title="\YooKassa\Model\RecipientInterface">RecipientInterface</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)


<a name="property_refundable"></a>
#### public $refundable : bool
---
***Description***

Возможность провести возврат по API

**Type:** <a href="../bool"><abbr title="bool">bool</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)


<a name="property_refunded_amount"></a>
#### public $refunded_amount : \YooKassa\Model\AmountInterface
---
***Description***

Сумма возвращенных средств платежа

**Type:** <a href="../classes/YooKassa-Model-AmountInterface.html"><abbr title="\YooKassa\Model\AmountInterface">AmountInterface</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)


<a name="property_refundedAmount"></a>
#### public $refundedAmount : \YooKassa\Model\AmountInterface
---
***Description***

Сумма возвращенных средств платежа

**Type:** <a href="../classes/YooKassa-Model-AmountInterface.html"><abbr title="\YooKassa\Model\AmountInterface">AmountInterface</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)


<a name="property_requestor"></a>
#### public $requestor : \YooKassa\Model\Requestor
---
***Description***

Инициатор платежа

**Type:** <a href="../classes/YooKassa-Model-Requestor.html"><abbr title="\YooKassa\Model\Requestor">Requestor</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)


<a name="property_status"></a>
#### public $status : string
---
***Description***

Текущее состояние платежа

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)


<a name="property_test"></a>
#### public $test : bool
---
***Description***

Признак тестовой операции

**Type:** <a href="../bool"><abbr title="bool">bool</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)


<a name="property_transfers"></a>
#### public $transfers : \YooKassa\Model\TransferInterface[]
---
***Description***

Данные о распределении платежа между магазинами

**Type:** <a href="../\YooKassa\Model\TransferInterface[]"><abbr title="\YooKassa\Model\TransferInterface[]">TransferInterface[]</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)



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


<a name="method_getAmount" class="anchor"></a>
#### public getAmount() : \YooKassa\Model\AmountInterface

```php
public getAmount() : \YooKassa\Model\AmountInterface
```

**Summary**

Возвращает сумму

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)

**Returns:** \YooKassa\Model\AmountInterface - Сумма платежа


<a name="method_getAuthorizationDetails" class="anchor"></a>
#### public getAuthorizationDetails() : \YooKassa\Model\AuthorizationDetailsInterface|null

```php
public getAuthorizationDetails() : \YooKassa\Model\AuthorizationDetailsInterface|null
```

**Summary**

Возвращает данные об авторизации платежа

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)

**Returns:** \YooKassa\Model\AuthorizationDetailsInterface|null - Данные об авторизации платежа

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| since | 1.0.18 |  |

<a name="method_getCancellationDetails" class="anchor"></a>
#### public getCancellationDetails() : \YooKassa\Model\CancellationDetailsInterface|null

```php
public getCancellationDetails() : \YooKassa\Model\CancellationDetailsInterface|null
```

**Summary**

Возвращает комментарий к статусу canceled: кто отменил платеж и по какой причине

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)

**Returns:** \YooKassa\Model\CancellationDetailsInterface|null - Комментарий к статусу canceled

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| since | 1.0.13 |  |

<a name="method_getCapturedAt" class="anchor"></a>
#### public getCapturedAt() : \DateTime|null

```php
public getCapturedAt() : \DateTime|null
```

**Summary**

Возвращает время подтверждения платежа магазином или null если если время не задано

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)

**Returns:** \DateTime|null - Время подтверждения платежа магазином


<a name="method_getConfirmation" class="anchor"></a>
#### public getConfirmation() : \YooKassa\Model\Confirmation\AbstractConfirmation

```php
public getConfirmation() : \YooKassa\Model\Confirmation\AbstractConfirmation
```

**Summary**

Возвращает способ подтверждения платежа

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)

**Returns:** \YooKassa\Model\Confirmation\AbstractConfirmation - Способ подтверждения платежа


<a name="method_getCreatedAt" class="anchor"></a>
#### public getCreatedAt() : \DateTime

```php
public getCreatedAt() : \DateTime
```

**Summary**

Возвращает время создания заказа

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)

**Returns:** \DateTime - Время создания заказа


<a name="method_getDescription" class="anchor"></a>
#### public getDescription() : string

```php
public getDescription() : string
```

**Summary**

Возвращает описание транзакции

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)

**Returns:** string - 


<a name="method_getExpiresAt" class="anchor"></a>
#### public getExpiresAt() : \DateTime|null

```php
public getExpiresAt() : \DateTime|null
```

**Summary**

Возвращает время до которого можно бесплатно отменить или подтвердить платеж или null если оно не задано

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)

**Returns:** \DateTime|null - Время, до которого можно бесплатно отменить или подтвердить платеж

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| since | 1.0.2 |  |

<a name="method_getId" class="anchor"></a>
#### public getId() : string

```php
public getId() : string
```

**Summary**

Возвращает идентификатор платежа

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)

**Returns:** string - Идентификатор платежа


<a name="method_getIncomeAmount" class="anchor"></a>
#### public getIncomeAmount() : \YooKassa\Model\MonetaryAmount

```php
public getIncomeAmount() : \YooKassa\Model\MonetaryAmount
```

**Summary**

Возвращает сумму платежа, которую получит магазин, значение `amount` за вычетом комиссии ЮKassa

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)

**Returns:** \YooKassa\Model\MonetaryAmount - Сумма платежа, которую получит магазин


<a name="method_getMetadata" class="anchor"></a>
#### public getMetadata() : \YooKassa\Model\Metadata

```php
public getMetadata() : \YooKassa\Model\Metadata
```

**Summary**

Возвращает метаданные платежа установленные мерчантом

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)

**Returns:** \YooKassa\Model\Metadata - Метаданные платежа указанные мерчантом


<a name="method_getPaid" class="anchor"></a>
#### public getPaid() : bool

```php
public getPaid() : bool
```

**Summary**

Проверяет был ли уже оплачен заказ

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)

**Returns:** bool - Признак оплаты заказа, true если заказ оплачен, false если нет


<a name="method_getPaymentMethod" class="anchor"></a>
#### public getPaymentMethod() : \YooKassa\Model\PaymentMethod\AbstractPaymentMethod

```php
public getPaymentMethod() : \YooKassa\Model\PaymentMethod\AbstractPaymentMethod
```

**Summary**

Возвращает используемый способ проведения платежа

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)

**Returns:** \YooKassa\Model\PaymentMethod\AbstractPaymentMethod - Способ проведения платежа


<a name="method_getReceiptRegistration" class="anchor"></a>
#### public getReceiptRegistration() : string

```php
public getReceiptRegistration() : string
```

**Summary**

Возвращает состояние регистрации фискального чека

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)

**Returns:** string - Состояние регистрации фискального чека


<a name="method_getRecipient" class="anchor"></a>
#### public getRecipient() : \YooKassa\Model\RecipientInterface|null

```php
public getRecipient() : \YooKassa\Model\RecipientInterface|null
```

**Summary**

Возвращает получателя платежа

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)

**Returns:** \YooKassa\Model\RecipientInterface|null - Получатель платежа или null если получатель не задан


<a name="method_getRefundable" class="anchor"></a>
#### public getRefundable() : bool

```php
public getRefundable() : bool
```

**Summary**

Проверяет возможность провести возврат по API

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)

**Returns:** bool - Возможность провести возврат по API, true если есть, false если нет


<a name="method_getRefundedAmount" class="anchor"></a>
#### public getRefundedAmount() : \YooKassa\Model\AmountInterface

```php
public getRefundedAmount() : \YooKassa\Model\AmountInterface
```

**Summary**

Возвращает сумму возвращенных средств

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)

**Returns:** \YooKassa\Model\AmountInterface - Сумма возвращенных средств платежа


<a name="method_getRequestor" class="anchor"></a>
#### public getRequestor() : \YooKassa\Model\RequestorInterface

```php
public getRequestor() : \YooKassa\Model\RequestorInterface
```

**Summary**

Возвращает инициатора платежа

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)

**Returns:** \YooKassa\Model\RequestorInterface - 


<a name="method_getStatus" class="anchor"></a>
#### public getStatus() : string

```php
public getStatus() : string
```

**Summary**

Возвращает состояние платежа

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)

**Returns:** string - Текущее состояние платежа


<a name="method_getTest" class="anchor"></a>
#### public getTest() : bool

```php
public getTest() : bool
```

**Summary**

Возвращает признак тестовой операции

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)

**Returns:** bool - Признак тестовой операции


<a name="method_getTransfers" class="anchor"></a>
#### public getTransfers() : \YooKassa\Model\TransferInterface[]

```php
public getTransfers() : \YooKassa\Model\TransferInterface[]
```

**Summary**

Возвращает массив распределения денег между магазинами

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)

**Returns:** \YooKassa\Model\TransferInterface[] - 


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


<a name="method_setAmount" class="anchor"></a>
#### public setAmount() : mixed

```php
public setAmount(\YooKassa\Model\AmountInterface  value) : mixed
```

**Summary**

Устанавливает сумму платежа

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\AmountInterface</code> | value  | Сумма платежа |

**Returns:** mixed - 


<a name="method_setAuthorizationDetails" class="anchor"></a>
#### public setAuthorizationDetails() : mixed

```php
public setAuthorizationDetails(\YooKassa\Model\AuthorizationDetailsInterface  value) : mixed
```

**Summary**

Устанавливает данные об авторизации платежа

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\AuthorizationDetailsInterface</code> | value  | Данные об авторизации платежа |

**Returns:** mixed - 


<a name="method_setCancellationDetails" class="anchor"></a>
#### public setCancellationDetails() : mixed

```php
public setCancellationDetails(\YooKassa\Model\CancellationDetailsInterface  value) : mixed
```

**Summary**

Устанавливает комментарий к статусу canceled: кто отменил платеж и по какой причине

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\CancellationDetailsInterface</code> | value  | Комментарий к статусу canceled |

**Returns:** mixed - 


<a name="method_setCapturedAt" class="anchor"></a>
#### public setCapturedAt() : mixed

```php
public setCapturedAt(\DateTime|string|int|null  value) : mixed
```

**Summary**

Устанавливает время подтверждения платежа магазином

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время подтверждения платежа магазином |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасвается если передали строку, которую не удалось привести к дате |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Выбрасывается если был передан аргумент, который невозможно интерпретировать как дату или время |

**Returns:** mixed - 


<a name="method_setConfirmation" class="anchor"></a>
#### public setConfirmation() : mixed

```php
public setConfirmation(\YooKassa\Model\Confirmation\AbstractConfirmation  value) : mixed
```

**Summary**

Устанавливает способ подтверждения платежа

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\Confirmation\AbstractConfirmation</code> | value  | Способ подтверждения платежа |

**Returns:** mixed - 


<a name="method_setCreatedAt" class="anchor"></a>
#### public setCreatedAt() : mixed

```php
public setCreatedAt(\DateTime|string|int  value) : mixed
```

**Summary**

Устанавливает время создания заказа

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int</code> | value  | Время создания заказа |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\EmptyPropertyValueException | Выбрасывается если в метод была передана пустая дата |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если передали строку, которую не удалось привести к дате |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Выбрасывается если был передан аргумент, который невозможно интерпретировать как дату или время |

**Returns:** mixed - 


<a name="method_setDescription" class="anchor"></a>
#### public setDescription() : mixed

```php
public setDescription(string  value) : mixed
```

**Summary**

Устанавливает описание транзакции

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  |  |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если переданное значение превышает допустимую длину |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если переданное значение не является строкой |

**Returns:** mixed - 


<a name="method_setExpiresAt" class="anchor"></a>
#### public setExpiresAt() : mixed

```php
public setExpiresAt(\DateTime|string|int|null  value) : mixed
```

**Summary**

Устанавливает время до которого можно бесплатно отменить или подтвердить платеж

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время, до которого можно бесплатно отменить или подтвердить платеж |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если передали строку, которую не удалось привести к дате |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Выбрасывается если был передан аргумент, который невозможно интерпретировать как дату или время |

**Returns:** mixed - 

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| since | 1.0.2 |  |

<a name="method_setId" class="anchor"></a>
#### public setId() : mixed

```php
public setId(string  value) : mixed
```

**Summary**

Устанавливает идентификатор платежа

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Идентификатор платежа |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если длина переданной строки не равна 36 |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод была передана не строка |

**Returns:** mixed - 


<a name="method_setIncomeAmount" class="anchor"></a>
#### public setIncomeAmount() : mixed

```php
public setIncomeAmount(\YooKassa\Model\MonetaryAmount  amount) : mixed
```

**Summary**

Устанавливает сумму платежа, которую получит магазин, значение `amount` за вычетом комиссии ЮKassa

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\MonetaryAmount</code> | amount  |  |

**Returns:** mixed - 


<a name="method_setMetadata" class="anchor"></a>
#### public setMetadata() : mixed

```php
public setMetadata(\YooKassa\Model\Metadata  value) : mixed
```

**Summary**

Устанавливает метаданные платежа

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\Metadata</code> | value  | Метаданные платежа указанные мерчантом |

**Returns:** mixed - 


<a name="method_setPaid" class="anchor"></a>
#### public setPaid() : mixed

```php
public setPaid(bool  value) : mixed
```

**Summary**

Устанавливает флаг оплаты заказа

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">bool</code> | value  | Признак оплаты заказа |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\EmptyPropertyValueException | Выбрасывается если переданный аргумент пуст |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если переданный аргумент не кастится в булево значение |

**Returns:** mixed - 


<a name="method_setPaymentMethod" class="anchor"></a>
#### public setPaymentMethod() : mixed

```php
public setPaymentMethod(\YooKassa\Model\PaymentMethod\AbstractPaymentMethod  value) : mixed
```

**Summary**

Устанавливает используемый способ проведения платежа

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\PaymentMethod\AbstractPaymentMethod</code> | value  | Способ проведения платежа |

**Returns:** mixed - 


<a name="method_setReceiptRegistration" class="anchor"></a>
#### public setReceiptRegistration() : mixed

```php
public setReceiptRegistration(string  value) : mixed
```

**Summary**

Устанавливает состояние регистрации фискального чека

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Состояние регистрации фискального чека |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если переданное состояние регистрации не существует |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если переданный аргумент не строка |

**Returns:** mixed - 


<a name="method_setRecipient" class="anchor"></a>
#### public setRecipient() : mixed

```php
public setRecipient(\YooKassa\Model\RecipientInterface  value) : mixed
```

**Summary**

Устанавливает получателя платежа

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\RecipientInterface</code> | value  | Объект с информацией о получателе платежа |

**Returns:** mixed - 


<a name="method_setRefundable" class="anchor"></a>
#### public setRefundable() : mixed

```php
public setRefundable(bool  value) : mixed
```

**Summary**

Устанавливает возможность провести возврат по API

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">bool</code> | value  | Возможность провести возврат по API |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\EmptyPropertyValueException | Выбрасывается если переданный аргумент пуст |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если переданный аргумент не кастится в булево значение |

**Returns:** mixed - 


<a name="method_setRefundedAmount" class="anchor"></a>
#### public setRefundedAmount() : mixed

```php
public setRefundedAmount(\YooKassa\Model\AmountInterface  value) : mixed
```

**Summary**

Устанавливает сумму возвращенных средств

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\AmountInterface</code> | value  | Сумма возвращенных средств платежа |

**Returns:** mixed - 


<a name="method_setRequestor" class="anchor"></a>
#### public setRequestor() : mixed

```php
public setRequestor(\YooKassa\Model\RequestorInterface|array  value) : mixed
```

**Summary**

Устанавливает инициатора платежа

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\RequestorInterface OR array</code> | value  |  |

**Returns:** mixed - 


<a name="method_setStatus" class="anchor"></a>
#### public setStatus() : mixed

```php
public setStatus(string  value) : mixed
```

**Summary**

Устанавливает статус платежа

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Статус платежа |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если переданная строка не является валидным статусом |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод была передана не строка |

**Returns:** mixed - 


<a name="method_setTest" class="anchor"></a>
#### public setTest() : mixed

```php
public setTest(bool  test) : mixed
```

**Summary**

Устанавливает признак тестовой операции

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">bool</code> | test  | Признак тестовой операции |

**Returns:** mixed - 


<a name="method_setTransfers" class="anchor"></a>
#### public setTransfers() : mixed

```php
public setTransfers(\YooKassa\Model\TransferInterface[]  value) : mixed
```

**Summary**

Устанавливает массив распределения денег между магазинами

**Details:**
* Inherited From: [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\TransferInterface[]</code> | value  |  |

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