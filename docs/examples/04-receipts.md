## Работа с чеками

> Для тех, кто использует [решение ЮKassa для 54-ФЗ](https://yookassa.ru/developers/54fz/basics).

С помощью SDK можно получать информацию о чеках, для которых вы отправили данные через ЮKassa.

* [Запрос на создание чека](#Запрос-на-создание-чека)
* [Запрос на создание чека через билдер](#Запрос-на-создание-чека-через-билдер)
* [Получить информацию о чеке](#Получить-информацию-о-чеке)
* [Получить список чеков с фильтрацией](#Получить-список-чеков-с-фильтрацией)

---

### Запрос на создание чека

[Информация о создании чека в документации](https://yookassa.ru/developers/api?lang=php#create_receipt)

Запрос позволяет передать онлайн-кассе данные для формирования [чека зачета предоплаты](https://yookassa.ru/developers/54fz/payments#settlement-receipt).

Если вы работаете по сценарию [Сначала платеж, потом чек](https://yookassa.ru/developers/54fz/basics#receipt-after-payment), 
в запросе также нужно передавать данные для формирования чека прихода и чека возврата прихода.

```php
require_once 'vendor/autoload.php';

$client = new \YooKassa\Client();
$client->setAuth('xxxxxx', 'test_XXXXXXX');

try {
    $response = $client->createReceipt(
        array(
            'customer' => array(
                'email' => 'johndoe@yoomoney.ru',
                'phone' => '79000000000',
            ),
            'type' => 'payment',
            'payment_id' => '24e89cb0-000f-5000-9000-1de77fa0d6df',
            'on_behalf_of' => '123',
            'send' => true,
            'items' => array(
                array(
                    'description' => 'Платок Gucci',
                    'quantity' => '1.00',
                    'amount' => array(
                        'value' => '3000.00',
                        'currency' => \YooKassa\Model\CurrencyCode::RUB,
                    ),
                    'vat_code' => 2,
                    'payment_mode' => \YooKassa\Model\Receipt\PaymentMode::FULL_PAYMENT,
                    'payment_subject' => \YooKassa\Model\Receipt\PaymentSubject::COMMODITY,
                ),
            ),
            'tax_system_code' => 1,
        ),
        uniqid('', true)
    );
    echo $response->getStatus();
} catch (\Exception $e) {
    $response = $e;
}

var_dump($response);
```

---

### Запрос на создание чека через билдер

[Информация о создании чека в документации](https://yookassa.ru/developers/api?lang=php#create_receipt)

Билдер позволяет создать объект платежа — `ReceiptRequest` программным способом, через объекты.

```php
require_once 'vendor/autoload.php';

$client = new \YooKassa\Client();
$client->setAuth('xxxxxx', 'test_XXXXXXX');

try {
    $inputDataMatrix = '010463003407001221SxMGorvNuq6Wk91fgr92sdfsdfghfgjh';
    $receiptBuilder = \YooKassa\Request\Receipts\CreatePostReceiptRequest::builder();
    $receiptBuilder->setType(\YooKassa\Model\ReceiptType::PAYMENT)
        ->setObjectId('24b94598-000f-5000-9000-1b68e7b15f3f', \YooKassa\Model\ReceiptType::PAYMENT) // payment_id
        ->setCustomer(array(
            'email' => 'john.doe@merchant.com',
            'phone' => '71111111111',
        ))
        ->setItems(array(
            array(
                'description' => 'Платок Gucci',
                'quantity' => '1.00',
                'amount' => array(
                    'value' => '3000.00',
                    'currency' => 'RUB',
                ),
                'vat_code' => 2,
                'payment_mode' => \YooKassa\Model\Receipt\PaymentMode::FULL_PAYMENT,
                'payment_subject' => \YooKassa\Model\Receipt\PaymentSubject::COMMODITY,
                'product_code' => (string)(new \YooKassa\Helpers\ProductCode($inputDataMatrix)),
            ),
        ))
        ->setSettlements(array(
            array(
                'type' => 'prepayment',
                'amount' => array(
                    'value' => 100.00,
                    'currency' => 'RUB',
                ),
            ),
        ))
        ->setSend(true);

    // Создаем объект запроса
    $request = $receiptBuilder->build();

    // Можно изменить данные, если нужно
    $request->setOnBehalfOf('159753');
    $request->addItem(new \YooKassa\Model\ReceiptItem(array(
        'description' => 'Платок Gucci Новый',
        'quantity' => '1.00',
        'amount' => array(
            'value' => '3500.00',
            'currency' => 'RUB',
        ),
        'vat_code' => 2,
        'payment_mode' => \YooKassa\Model\Receipt\PaymentMode::FULL_PAYMENT,
        'payment_subject' => \YooKassa\Model\Receipt\PaymentSubject::COMMODITY,
    )));

    $idempotenceKey = uniqid('', true);
    $response = $client->createReceipt($request, $idempotenceKey);
} catch (Exception $e) {
    $response = $e;
}

var_dump($response);
```

---

### Получить информацию о чеке

[Информация о чеке в документации](https://yookassa.ru/developers/api?lang=php#get_receipt)

Запрос позволяет получить информацию о текущем состоянии чека по его уникальному идентификатору.

В ответ на запрос придет объект чека - `ReceiptResponse` в актуальном статусе.

```php
require_once 'vendor/autoload.php';

$client = new \YooKassa\Client();
$client->setAuth('xxxxxx', 'test_XXXXXXX');

try {
    $response = $client->getReceiptInfo('ra-27ed1660-0001-0050-7a5e-10f80e0f0f29');
    echo $response->getStatus();
} catch (\Exception $e) {
    $response = $e;
}

var_dump($response);
```

---

### Получить список чеков с фильтрацией

[Список чеков в документации](https://yookassa.ru/developers/api?lang=php#get_receipts_list)

Запрос позволяет получить список чеков, отфильтрованный по заданным критериям. 
Можно запросить чеки по конкретному платежу, чеки по конкретному возврату или все чеки магазина.

В ответ на запрос вернется список чеков с учетом переданных параметров. В списке будет информация о чеках, 
созданных за последние 3 года. Список будет отсортирован по времени создания чеков в порядке убывания.

Если результатов больше, чем задано в `limit`, список будет выводиться фрагментами. 
В этом случае в ответе на запрос вернется фрагмент списка и параметр `next_cursor` с указателем на следующий фрагмент.

```php
require_once 'vendor/autoload.php';

$client = new \YooKassa\Client();
$client->setAuth('xxxxxx', 'test_XXXXXXX');

$cursor = null;
$params = array(
    'limit' => 30,
    'status' => \YooKassa\Model\ReceiptRegistrationStatus::SUCCEEDED,
    'payment_id' => '1da5c87d-0984-50e8-a7f3-8de646dd9ec9',
    'created_at_gte' => '2021-01-01T00:00:00.000Z',
    'created_at_lt' => '2021-03-30T23:59:59.999Z',
);
try {
    do {
        $params['cursor'] = $cursor;
        $receipts = $client->getReceipts($params);
        foreach ($receipts->getItems() as $receipt) {
            echo $receipt->getStatus() . ' - ' . $receipt->getId() . "\n";
        }
    } while ($cursor = $receipts->getNextCursor());
} catch (\Exception $e) {
    $response = $e;
    var_dump($response);
}
```
[Подробнее о работе со списками](https://yookassa.ru/developers/using-api/lists)
