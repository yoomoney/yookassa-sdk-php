## Работа с возвратами

С помощью SDK можно возвращать платежи — полностью или частично. Порядок возврата зависит от способа оплаты 
(`payment_method`) исходного платежа. При оплате банковской картой деньги возвращаются на карту, 
которая была использована для проведения платежа. [Как проводить возвраты](https://yookassa.ru/developers/payments/refunds) 

Часть способов оплаты (например, наличные) не поддерживают возвраты. [Какие платежи можно вернуть](https://yookassa.ru/developers/payment-methods/overview#all)

* [Запрос на создание возврата](#Запрос-на-создание-возврата)
* [Запрос на создание возврата через билдер](#Запрос-на-создание-возврата-через-билдер)
* [Получить информацию о возврате](#Получить-информацию-о-возврате)
* [Получить список возвратов с фильтрацией](#Получить-список-возвратов-с-фильтрацией)

---

### Запрос на создание возврата

[Создание возврата в документации](https://yookassa.ru/developers/api?lang=php#create_refund)

Создает возврат успешного платежа на указанную сумму. Платеж можно вернуть только в течение трех лет с момента его создания. 
Комиссия ЮKassa за проведение платежа не возвращается.

В ответ на запрос придет объект возврата - `RefundResponse` в актуальном статусе.

```php
require_once 'vendor/autoload.php';

$client = new \YooKassa\Client();
$client->setAuth('xxxxxx', 'test_XXXXXXX');

try {
    $response = $client->createRefund(
        array(
            'payment_id' => '24e89cb0-000f-5000-9000-1de77fa0d6df',
            'amount' => array(
                'value' => '1000.00',
                'currency' => \YooKassa\Model\CurrencyCode::RUB,
            ),
            'sources' => array(
                array(
                    'account_id' => '456',
                    'amount' => array(
                        'value' => '1000.00',
                        'currency' => \YooKassa\Model\CurrencyCode::RUB,
                    )
                ),
            ),
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

### Запрос на создание возврата через билдер

[Информация о создании возврата в документации](https://yookassa.ru/developers/api?lang=php#create_refund)

Билдер позволяет создать объект возврата — `CreateRefundRequest` программным способом, через объекты.

```php
require_once 'vendor/autoload.php';

$client = new \YooKassa\Client();
$client->setAuth('xxxxxx', 'test_XXXXXXX');

try {
    $refundBuilder = \YooKassa\Request\Refunds\CreateRefundRequest::builder();
    $refundBuilder
                ->setPaymentId('24b94598-000f-5000-9000-1b68e7b15f3f')
                ->setAmount(3500.00)
                ->setCurrency(\YooKassa\Model\CurrencyCode::RUB)
                ->setDescription('Не подошел цвет')
                ->setReceiptItems(array(
                    array(
                        'description' => 'Платок Gucci',
                        'quantity' => '1.00',
                        'amount' => array(
                            'value' => '3000.00',
                            'currency' => \YooKassa\Model\CurrencyCode::RUB,
                        ),
                        'vat_code' => 2,
                        'payment_mode' => 'full_payment',
                        'payment_subject' => 'commodity',
                    ),
                ))
                ->setReceiptEmail('john.doe@merchant.com')
                ->setTaxSystemCode(1);

    // Создаем объект запроса
    $request = $refundBuilder->build();

    // Можно изменить данные, если нужно
    $request->setDescription('Не подошел цвет и размер');

    $idempotenceKey = uniqid('', true);
    $response = $client->createRefund($request, $idempotenceKey);
} catch (Exception $e) {
    $response = $e;
}
```

---

### Получить информацию о возврате

[Информация о возврате в документации](https://yookassa.ru/developers/api?lang=php#get_refund)

Запрос позволяет получить информацию о текущем состоянии возврата по его уникальному идентификатору.

В ответ на запрос придет объект возврата - `RefundResponse` в актуальном статусе.

```php
require_once 'vendor/autoload.php';

$client = new \YooKassa\Client();
$client->setAuth('xxxxxx', 'test_XXXXXXX');

try {
    $response = $client->getRefundInfo('216749f7-0016-50be-b000-078d43a63ae4');
    echo $response->getStatus();
} catch (\Exception $e) {
    $response = $e;
}

var_dump($response);
```

---

### Получить список возвратов с фильтрацией

[Список возвратов в документации](https://yookassa.ru/developers/api?lang=php#get_refunds_list)

Запрос позволяет получить список возвратов, отфильтрованный по заданным критериям.

В ответ на запрос вернется список возвратов с учетом переданных параметров. В списке будет информация о возвратах, 
созданных за последние 3 года. Список будет отсортирован по времени создания возвратов в порядке убывания.

Если результатов больше, чем задано в `limit`, список будет выводиться фрагментами. В этом случае в ответе на запрос 
вернется фрагмент списка и параметр `next_cursor` с указателем на следующий фрагмент.

```php
require_once 'vendor/autoload.php';

$client = new \YooKassa\Client();
$client->setAuth('xxxxxx', 'test_XXXXXXX');

$cursor = null;
$params = array(
    'limit' => 30,
    'status' => \YooKassa\Model\RefundStatus::SUCCEEDED,
    'payment_id' => '1da5c87d-0984-50e8-a7f3-8de646dd9ec9',
    'created_at_gte' => '2021-01-01T00:00:00.000Z',
    'created_at_lt' => '2021-03-30T23:59:59.999Z',
);
try {
    do {
        $params['cursor'] = $cursor;
        $refunds = $client->getRefunds($params);
        foreach ($refunds->getItems() as $refund) {
            echo $refund->getCreatedAt()->format('Y-m-d H:i:s') . ' - ' .
                 $refund->getStatus() . ' - ' .
                 $refund->getId() . "\n";
        }
    } while ($cursor = $refunds->getNextCursor());
} catch (\Exception $e) {
    $response = $e;
    var_dump($response);
}
```
[Подробнее о работе со списками](https://yookassa.ru/developers/using-api/lists)
