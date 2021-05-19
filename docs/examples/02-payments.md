## Работа с платежами

SDK позволяет создавать, подтверждать, отменять платежи, а также получать информацию о них.

Объект платежа `PaymentResponse` содержит всю информацию о платеже, актуальную на текущий момент времени. 
Он формируется при создании платежа и приходит в ответ на любой запрос, связанный с платежами.

* [Запрос на создание платежа](#Запрос-на-создание-платежа)
* [Запрос на создание платежа через билдер](#Запрос-на-создание-платежа-через-билдер)
* [Запрос на частичное подтверждение платежа](#Запрос-на-частичное-подтверждение-платежа)
* [Запрос на отмену незавершенного платежа](#Запрос-на-отмену-незавершенного-платежа)
* [Получить информацию о платеже](#Получить-информацию-о-платеже)
* [Получить список платежей с фильтрацией](#Получить-список-платежей-с-фильтрацией)

---

### Запрос на создание платежа

[Создание платежа в документации](https://yookassa.ru/developers/api?lang=php#create_payment)

Чтобы принять оплату, необходимо создать объект платежа — `CreatePaymentRequest`. Он содержит всю необходимую информацию 
для проведения оплаты (сумму, валюту и статус). У платежа линейный жизненный цикл, 
он последовательно переходит из статуса в статус.

В ответ на запрос придет объект платежа - `PaymentResponse` в актуальном статусе.

```php
require_once 'vendor/autoload.php';

$client = new \YooKassa\Client();
$client->setAuth('xxxxxx', 'test_XXXXXXX');

try {
    $idempotenceKey = uniqid('', true);
    $response = $client->createPayment(
        array(
            'amount' => array(
                'value' => '1000.00',
                'currency' => 'RUB',
            ),
            'confirmation' => array(
                'type' => 'redirect',
                'locale' => 'ru_RU',
                'return_url' => 'https://merchant-site.ru/return_url',
            ),
            'capture' => true,
            'description' => 'Заказ №72',
            'metadata' => array(
                'orderNumber' => 1001
            ),
            'receipt' => array(
                'customer' => array(
                    'full_name' => 'Ivanov Ivan Ivanovich',
                    'email' => 'email@email.ru',
                    'phone' => '79211234567',
                    'inn' => '6321341814'
                ),
                'items' => array(
                    array(
                        'description' => 'Переносное зарядное устройство Хувей',
                        'quantity' => '1.00',
                        'amount' => array(
                            'value' => 1000,
                            'currency' => 'RUB'
                        ),
                        'vat_code' => '2',
                        'payment_mode' => 'full_payment',
                        'payment_subject' => 'commodity',
                        'country_of_origin_code' => 'CN',
                        'product_code' => '44 4D 01 00 21 FA 41 00 23 05 41 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00 12 00 AB 00',
                        'customs_declaration_number' => '10714040/140917/0090376',
                        'excise' => '20.00',
                        'supplier' => array(
                            'name' => 'string',
                            'phone' => 'string',
                            'inn' => 'string'
                        )
                    ),
                )
            )
        ),
        $idempotenceKey
    );
    
    //получаем confirmationUrl для дальнейшего редиректа
    $confirmationUrl = $response->getConfirmation()->getConfirmationUrl();
} catch (\Exception $e) {
    $response = $e;
}

if (!empty($response)) {
    print_r($response);
}
```
---

### Запрос на создание платежа через билдер

[Создание платежа в документации](https://yookassa.ru/developers/api?lang=php#create_payment)

Билдер позволяет создать объект платежа — `CreatePaymentRequest` программным способом, через объекты.

```php
require_once 'vendor/autoload.php';

$client = new \YooKassa\Client();
$client->setAuth('xxxxxx', 'test_XXXXXXX');

try {
    $builder = \YooKassa\Request\Payments\CreatePaymentRequest::builder();
    $builder->setAmount(100)
            ->setCurrency(\YooKassa\Model\CurrencyCode::RUB)
            ->setCapture(true)
            ->setDescription('Оплата заказа 112233')
            ->setMetadata(array(
                'cms_name'       => 'yoo_api_test',
                'order_id'       => '112233',
                'language'       => 'ru',
                'transaction_id' => '123-456-789',
            ));

    // Устанавливаем страницу для редиректа после оплаты
    $builder->setConfirmation(array(
        'type'      => \YooKassa\Model\ConfirmationType::REDIRECT,
        'returnUrl' => 'https://merchant-site.ru/payment-return-page',
    ));

    // Можем установить конкретный способ оплаты
    $builder->setPaymentMethodData(\YooKassa\Model\PaymentMethodType::BANK_CARD);

    // Составляем чек
    $builder->setReceiptEmail('john.doe@merchant.com');
    $builder->setReceiptPhone('71111111111');
    // Добавим товар
    $builder->addReceiptItem(
        'Платок Gucci',
        3000,
        1.0,
        2,
        'full_payment',
        'commodity'
    );
    // Добавим доставку
    $builder->addReceiptShipping(
        'Delivery/Shipping/Доставка',
        100,
        1,
        \YooKassa\Model\Receipt\PaymentMode::FULL_PAYMENT,
        \YooKassa\Model\Receipt\PaymentSubject::SERVICE
    );

    // Можно добавить распределение денег по магазинам
    $builder->setTransfers(array(
        array(
            'account_id' => 123456,
            'amount' => array(
                'value' => 1000,
                'currency' => \YooKassa\Model\CurrencyCode::RUB
            ),
        ),
        array(
            'account_id' => 654321,
            'amount' => array(
                'value' => 2000,
                'currency' => \YooKassa\Model\CurrencyCode::RUB
            ),
        )
    ));

    // Создаем объект запроса
    $request = $builder->build();

    // Можно изменить данные, если нужно
    $request->setDescription($request->getDescription() . ' - merchant comment');

    $idempotenceKey = uniqid('', true);
    $response = $client->createPayment($request);
    
    //получаем confirmationUrl для дальнейшего редиректа
    $confirmationUrl = $response->getConfirmation()->getConfirmationUrl();
} catch (\Exception $e) {
    $response = $e;
}

var_dump($response);
```
---

### Запрос на частичное подтверждение платежа

[Подтверждение платежа в документации](https://yookassa.ru/developers/api?lang=php#capture_payment)

Подтверждает вашу готовность принять платеж. После подтверждения платеж перейдет в статус succeeded. 
Это значит, что вы можете выдать товар или оказать услугу пользователю.

Подтвердить можно только платеж в статусе `waiting_for_capture` и только в течение определенного времени 
(зависит от способа оплаты). Если вы не подтвердите платеж в отведенное время, он автоматически перейдет 
в статус `canceled`, и деньги вернутся пользователю.

В ответ на запрос придет объект платежа в актуальном статусе.
```php
require_once 'vendor/autoload.php';

$client = new \YooKassa\Client();
$client->setAuth('xxxxxx', 'test_XXXXXXX');

$paymentId = '21b23b5b-000f-5061-a000-0674e49a8c10';
$request = array(
    "amount" => array(
        "value" => "1000.00",
        "currency" => "RUB"
    ),
    "transfers" => array(
        array(
            "account_id" => "123",
            "amount" => array(
                "value" => "300.00",
                "currency" => "RUB"
            )
        ),
        array(
            "account_id" => "456",
            "amount" => array(
                "value" => "700.00",
                "currency" => "RUB"
            )
        )
    )
);
$idempotenceKey = uniqid('', true);
try {
    $response = $client->capturePayment($request, $paymentId, $idempotenceKey);
} catch (\Exception $e) {
    $response = $e;
}

var_dump($response);
```
[Подробнее о подтверждении и отмене платежей](https://yookassa.ru/developers/payments/payment-process#capture-and-cancel)

---

### Запрос на отмену незавершенного платежа

[Отмена платежа в документации](https://yookassa.ru/developers/api?lang=php#cancel_payment)

Отменяет платеж, находящийся в статусе `waiting_for_capture`. Отмена платежа значит, что вы не готовы 
выдать пользователю товар или оказать услугу. Как только вы отменяете платеж, мы начинаем возвращать деньги на счет плательщика. Для платежей банковскими картами или из кошелька ЮMoney отмена происходит мгновенно. Для остальных способов оплаты возврат может занимать до нескольких дней.

В ответ на запрос придет объект платежа в актуальном статусе.
```php
require_once 'vendor/autoload.php';

$client = new \YooKassa\Client();
$client->setAuth('xxxxxx', 'test_XXXXXXX');

$paymentId = '215d8da0-000f-50be-b000-0003308c89be';
$idempotenceKey = uniqid('', true);
try {
    $response = $client->cancelPayment($paymentId, $idempotenceKey);
} catch (\Exception $e) {
    $response = $e;
}

var_dump($response);
```
[Подробнее о подтверждении и отмене платежей](https://yookassa.ru/developers/payments/payment-process#capture-and-cancel)

---

### Получить информацию о платеже

[Информация о платеже в документации](https://yookassa.ru/developers/api?lang=php#get_payment)

Запрос позволяет получить информацию о текущем состоянии платежа по его уникальному идентификатору.

В ответ на запрос придет объект платежа в актуальном статусе.

```php
require_once 'vendor/autoload.php';

$client = new \YooKassa\Client();
$client->setAuth('xxxxxx', 'test_XXXXXXX');

$paymentId = '215d8da0-000f-50be-b000-0003308c89be';
try {
    $response = $client->getPaymentInfo($paymentId);
} catch (\Exception $e) {
    $response = $e;
}

var_dump($response);
```
---

### Получить список платежей с фильтрацией

[Список платежей в документации](https://yookassa.ru/developers/api?lang=php#get_payments_list)

Запрос позволяет получить список платежей, отфильтрованный по заданным критериям.

В ответ на запрос вернется список платежей с учетом переданных параметров. В списке будет информация о платежах, 
созданных за последние 3 года. Список будет отсортирован по времени создания платежей в порядке убывания.

Если результатов больше, чем задано в `limit`, список будет выводиться фрагментами. В этом случае в ответе на запрос 
вернется фрагмент списка и параметр `next_cursor` с указателем на следующий фрагмент.

```php
require_once 'vendor/autoload.php';

$client = new \YooKassa\Client();
$client->setAuth('xxxxxx', 'test_XXXXXXX');

$cursor = null;
$params = array(
    'limit' => 30,
    'status' => \YooKassa\Model\PaymentStatus::CANCELED,
    'payment_method' => \YooKassa\Model\PaymentMethodType::BANK_CARD,
    'created_at_gte' => '2021-01-01T00:00:00.000Z',
    'created_at_lt' => '2021-03-30T23:59:59.999Z',
);
try {
    do {
        $params['cursor'] = $cursor;
        $payments = $client->getPayments($params);
        foreach ($payments->getItems() as $payment) {
            echo $payment->getCreatedAt()->format('Y-m-d H:i:s') . ' - ' .
                 $payment->getStatus() . ' - ' .
                 $payment->getId() . "\n";
        }
    } while ($cursor = $payments->getNextCursor());
} catch (\Exception $e) {
    $response = $e;
    var_dump($response);
}
```
[Подробнее о работе со списками](https://yookassa.ru/developers/using-api/lists)
