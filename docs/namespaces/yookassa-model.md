# [YooKassa API SDK](../home.md)

# Namespace: \YooKassa\Model
## Parent: [\YooKassa](../namespaces/yookassa.md)
### Namespaces
* [\YooKassa\Model\Confirmation](../namespaces/yookassa-model-confirmation.md)
* [\YooKassa\Model\ConfirmationAttributes](../namespaces/yookassa-model-confirmationattributes.md)
* [\YooKassa\Model\Notification](../namespaces/yookassa-model-notification.md)
* [\YooKassa\Model\PaymentData](../namespaces/yookassa-model-paymentdata.md)
* [\YooKassa\Model\PaymentMethod](../namespaces/yookassa-model-paymentmethod.md)
* [\YooKassa\Model\Receipt](../namespaces/yookassa-model-receipt.md)
* [\YooKassa\Model\Webhook](../namespaces/yookassa-model-webhook.md)
### Interfaces
| Name | Summary |
| ---- | ------- |
| [\YooKassa\Model\AirlineInterface](../classes/YooKassa-Model-AirlineInterface.md) |  |
| [\YooKassa\Model\AmountInterface](../classes/YooKassa-Model-AmountInterface.md) | Interface AmountInterface |
| [\YooKassa\Model\AuthorizationDetailsInterface](../classes/YooKassa-Model-AuthorizationDetailsInterface.md) | Interface AuthorizationDetailsInterface - Данные об авторизации платежа |
| [\YooKassa\Model\CancellationDetailsInterface](../classes/YooKassa-Model-CancellationDetailsInterface.md) | Interface CancellationDetailsInterface |
| [\YooKassa\Model\LegInterface](../classes/YooKassa-Model-LegInterface.md) |  |
| [\YooKassa\Model\PassengerInterface](../classes/YooKassa-Model-PassengerInterface.md) |  |
| [\YooKassa\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md) | Interface PaymentInterface |
| [\YooKassa\Model\ReceiptCustomerInterface](../classes/YooKassa-Model-ReceiptCustomerInterface.md) | Interface ReceiptCustomerInterface |
| [\YooKassa\Model\ReceiptInterface](../classes/YooKassa-Model-ReceiptInterface.md) | Interface ReceiptInterface |
| [\YooKassa\Model\ReceiptItemInterface](../classes/YooKassa-Model-ReceiptItemInterface.md) | Interface ReceiptItemInterface |
| [\YooKassa\Model\RecipientInterface](../classes/YooKassa-Model-RecipientInterface.md) | Интерфейс получателя платежа. |
| [\YooKassa\Model\RefundInterface](../classes/YooKassa-Model-RefundInterface.md) | Interface RefundInterface |
| [\YooKassa\Model\RequestorInterface](../classes/YooKassa-Model-RequestorInterface.md) | Interface RequestorInterface |
| [\YooKassa\Model\SettlementInterface](../classes/YooKassa-Model-SettlementInterface.md) | Interface PostReceiptResponseSettlementInterface |
| [\YooKassa\Model\SourceInterface](../classes/YooKassa-Model-SourceInterface.md) | Interface TransferInterface |
| [\YooKassa\Model\SupplierInterface](../classes/YooKassa-Model-SupplierInterface.md) | Interface SupplierInterface |
| [\YooKassa\Model\TransferInterface](../classes/YooKassa-Model-TransferInterface.md) | Interface TransferInterface |
### Classes
| Name | Summary |
| ---- | ------- |
| [\YooKassa\Model\Airline](../classes/YooKassa-Model-Airline.md) | Класс описывающий авиабилет |
| [\YooKassa\Model\AuthorizationDetails](../classes/YooKassa-Model-AuthorizationDetails.md) | AuthorizationDetails - Данные об авторизации платежа |
| [\YooKassa\Model\CancellationDetails](../classes/YooKassa-Model-CancellationDetails.md) | CancellationDetails - Комментарий к отмене платежа |
| [\YooKassa\Model\CancellationDetailsPartyCode](../classes/YooKassa-Model-CancellationDetailsPartyCode.md) | CancellationDetailsPartyCode - Возможные инициаторы отмены платежа |
| [\YooKassa\Model\CancellationDetailsReasonCode](../classes/YooKassa-Model-CancellationDetailsReasonCode.md) | CancellationDetailsReasonCode - Возможные причины отмены платежа |
| [\YooKassa\Model\ConfirmationType](../classes/YooKassa-Model-ConfirmationType.md) | ConfirmationType - Тип пользовательского процесса подтверждения платежа |Код|Описание| --- | --- |redirect|Необходимо направить плательщика на страницу партнера| |external|Необходимо ождать пока плательщик самостоятельно подтвердит платеж| |deeplink|Необходимо направить плательщика в приложение партнера| |code_verification|Необходимо получить одноразовый код от плательщика для подтверждения платежа| |embedded|Необходимо получить токен для checkout.js| |qr|Необходимо получить QR-код| |
| [\YooKassa\Model\CurrencyCode](../classes/YooKassa-Model-CurrencyCode.md) | CurrencyCode - Код валюты, ISO-4217 3-alpha currency symbol |
| [\YooKassa\Model\Leg](../classes/YooKassa-Model-Leg.md) | Класс, описывающий маршрут |
| [\YooKassa\Model\Metadata](../classes/YooKassa-Model-Metadata.md) | Metadata - Метаданные платежа указанные мерчантом. |
| [\YooKassa\Model\MonetaryAmount](../classes/YooKassa-Model-MonetaryAmount.md) | MonetaryAmount - Сумма определенная в валюте |
| [\YooKassa\Model\NotificationEventType](../classes/YooKassa-Model-NotificationEventType.md) | NotificationEventType - Тип уведомления |Код|Описание| --- | --- |payment.waiting_for_capture|Успешно оплачен покупателем, ожидает подтверждения магазином (capture или aviso)| |payment.succeeded|Успешно оплачен и подтвержден магазином| |payment.canceled|Неуспех оплаты или отменен магазином| |refund.succeeded|Успешный возврат| |
| [\YooKassa\Model\NotificationType](../classes/YooKassa-Model-NotificationType.md) | Базовый класс генерируемых enum&#039;ов |
| [\YooKassa\Model\Passenger](../classes/YooKassa-Model-Passenger.md) | Класс описывающий данные пассажира |
| [\YooKassa\Model\Payment](../classes/YooKassa-Model-Payment.md) | Payment - Данные о платеже |
| [\YooKassa\Model\PaymentMethodType](../classes/YooKassa-Model-PaymentMethodType.md) | PaymentMethodType - Тип источника средств для проведения платежа |Код|Описание| --- | --- |yoo_money|Платеж из кошелька ЮMoney| |bank_card|Платеж с произвольной банковской карты| |sberbank|Платеж СбербанкОнлайн| |cash|Платеж наличными| |mobile_balance|Платеж с баланса мобильного телефона| |apple_pay|Платеж ApplePay| |google_pay|Платеж Google Pay| |qiwi|Платеж из кошелька Qiwi| |webmoney|Платеж из кошелька Webmoney| |alfabank|Платеж через Альфа-Клик| |b2b_sberbank|Сбербанк Бизнес Онлайн| |tinkoff_bank|Интернет-банк Тинькофф| |psb|ПромсвязьБанк| |installments|Заплатить по частям| |wechat|Платеж через WeChat| |
| [\YooKassa\Model\PaymentStatus](../classes/YooKassa-Model-PaymentStatus.md) | PaymentStatus - Состояние платежа |Код|Описание| --- | --- |pending|Ожидает оплаты покупателем| |waiting_for_capture|Успешно оплачен покупателем, ожидает подтверждения магазином (capture или aviso)| |succeeded|Успешно оплачен и подтвержден магазином| |canceled|Неуспех оплаты или отменен магазином (cancel)| |
| [\YooKassa\Model\Receipt](../classes/YooKassa-Model-Receipt.md) | Класс данных для формирования чека в онлайн-кассе (для соблюдения 54-ФЗ) |
| [\YooKassa\Model\ReceiptCustomer](../classes/YooKassa-Model-ReceiptCustomer.md) | Информация о плательщике |
| [\YooKassa\Model\ReceiptItem](../classes/YooKassa-Model-ReceiptItem.md) | Информация о товарной позиции в заказе, позиция фискального чека |
| [\YooKassa\Model\ReceiptRegistrationStatus](../classes/YooKassa-Model-ReceiptRegistrationStatus.md) | Класс с перечислением статусов доставки данных для чека в онлайн-кассу (`pending`, `succeeded` или `canceled`) |
| [\YooKassa\Model\ReceiptType](../classes/YooKassa-Model-ReceiptType.md) | ReceiptType - Тип чека в онлайн-кассе. |
| [\YooKassa\Model\Recipient](../classes/YooKassa-Model-Recipient.md) | Класс получателя платежа. |
| [\YooKassa\Model\Refund](../classes/YooKassa-Model-Refund.md) | Класс объекта с информацией о возврате платежа |
| [\YooKassa\Model\RefundStatus](../classes/YooKassa-Model-RefundStatus.md) | RefundStatus - Состояние возврата платежа |Код|Описание| --- | --- |pending|Ожидает обработки| |succeeded|Успешно возвращен| |canceled|В проведении возврата отказано| |
| [\YooKassa\Model\Requestor](../classes/YooKassa-Model-Requestor.md) | Инициатор платежа или возврата. |
| [\YooKassa\Model\Settlement](../classes/YooKassa-Model-Settlement.md) | Class Settlement |
| [\YooKassa\Model\Source](../classes/YooKassa-Model-Source.md) | Класс объекта распределения денег в магазин |
| [\YooKassa\Model\Supplier](../classes/YooKassa-Model-Supplier.md) | Информация о поставщике товара или услуги. |
| [\YooKassa\Model\Transfer](../classes/YooKassa-Model-Transfer.md) | Класс объекта распределения денег в магазин |
| [\YooKassa\Model\TransferStatus](../classes/YooKassa-Model-TransferStatus.md) | PaymentStatus - Статус операции распределения средств конечному получателю |Код|Описание| --- | --- |pending|Ожидает оплаты покупателем| |waiting_for_capture|Успешно оплачен покупателем, ожидает подтверждения магазином (capture или aviso)| |succeeded|Успешно оплачен и получен магазином| |canceled|Неуспех оплаты или отменен магазином (cancel)| |

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