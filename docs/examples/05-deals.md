## Работа со сделками

SDK позволяет создавать безопасные сделки, проводить по ним платежи и выплаты, а также получать информацию о них.

Объект сделки `DealResponse` содержит всю информацию о сделке, актуальную на текущий момент времени. 
Он формируется при создании сделки и приходит в ответ на любой запрос, связанный со сделками.

* [Запрос на создание сделки](#Запрос-на-создание-сделки)
* [Запрос на создание сделки через билдер](#Запрос-на-создание-сделки-через-билдер)
* [Запрос на создание платежа с привязкой к сделке](#Запрос-на-создание-платежа-с-привязкой-к-сделке)
* [Запрос на выплату продавцу](#Запрос-на-выплату-продавцу)
* [Получить информацию о сделке](#Получить-информацию-о-сделке)
* [Получить список сделок с фильтрацией](#Получить-список-сделок-с-фильтрацией)
* [Получить информацию о выплате](#Получить-информацию-о-выплате)

---

### Запрос на создание сделки

[Создание сделки в документации](https://yookassa.ru/developers/api?lang=php#create_deal)

Запрос `CreateDealRequest` позволяет создать сделку, в рамках которой необходимо принять оплату от покупателя и перечислить ее продавцу.

В ответ на запрос придет объект сделки - `DealResponse` в актуальном статусе.

```php
require_once 'vendor/autoload.php';

$client = new \YooKassa\Client();
$client->setAuth('xxxxxx', 'test_XXXXXXX');

try {
    $response = $client->createDeal(
        array(
            'type' => \YooKassa\Model\Deal\DealType::SAFE_DEAL,
            'fee_moment' => \YooKassa\Model\Deal\FeeMoment::PAYMENT_SUCCEEDED,
            'metadata' => array(
                'order_id' => '37',
            ),
            'description' => 'SAFE_DEAL 123554642-2432FF344R',
        ),
        uniqid('', true)
    );
    echo $response->getStatus();
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

Билдер позволяет создать объект платежа — `CreateDealRequest` программным способом, через объекты.

```php
require_once 'vendor/autoload.php';

$client = new \YooKassa\Client();
$client->setAuth('xxxxxx', 'test_XXXXXXX');

try {
    try {
    $builder = \YooKassa\Request\Deals\CreateDealRequest::builder();
    $builder->setType(\YooKassa\Model\Deal\DealType::SAFE_DEAL)
        ->setFeeMoment(\YooKassa\Model\Deal\FeeMoment::PAYMENT_SUCCEEDED)
        ->setMetadata(array(
            'order_id' => '37',
        ))
        ->setDescription('SAFE_DEAL 123554642-2432FF344R');

    // Создаем объект запроса
    $request = $builder->build();

    // Можно изменить данные, если нужно
    $request->setDescription($request->getDescription() . ' - merchant comment');

    $idempotenceKey = uniqid('', true);
    $response = $client->createDeal($request, $idempotenceKey);
    
    // Получаем данные объекта
    echo $response->getStatus();
} catch (\Exception $e) {
    $response = $e;
}

var_dump($response);
```
---

### Запрос на создание платежа с привязкой к сделке

[Создание платежа в документации](https://yookassa.ru/developers/api?lang=php#create_payment)

Чтобы принять оплату от покупателя, отправьте ЮKassa запрос на создание платежа, передайте в нём данные, 
которые нужны для оплаты в зависимости от выбранного сценария интеграции, и следующие данные для проведения платежа в рамках сделки:
* Объект `amount` с общей суммой платежа за сделку (сумма вознаграждения продавца и вознаграждения вашей платформы). 
  Эту сумму ЮKassa спишет с покупателя. Комиссия ЮKassa за проведение платежа рассчитывается из этой суммы, 
  а взимается из вашего вознаграждения. Сумма платежа должна соответствовать ограничениям на минимальный и максимальный размер платежа. 
  [Подробнее о лимитах платежей](https://yookassa.ru/docs/support/payments/limits)
* Объект `deal` с данными о сделке: идентификатор сделки и массив settlements с данными о том, какую сумму нужно выплатить продавцу. 
  Разница между суммой платежа и суммой выплаты должна быть больше эквайринговой комиссии ЮKassa. 
  Сумма выплаты должна соответствовать ограничениям на минимальный и максимальный размер выплаты. 
  [Подробнее о лимитах выплат](https://yookassa.ru/developers/solutions-for-platforms/safe-deal/integration/payouts#specifics)

В ответ на запрос придет объект платежа - `PaymentResponse` в актуальном статусе.

```php
require_once 'vendor/autoload.php';

$client = new \YooKassa\Client();
$client->setAuth('xxxxxx', 'test_XXXXXXX');

$paymentId = '21b23b5b-000f-5061-a000-0674e49a8c10';
$request = array(
    'amount' => array(
        'value' => '100.00',
        'currency' => 'RUB',
    ),
    'confirmation' => array(
        'type' => 'redirect',
        'locale' => 'ru_RU',
        'return_url' => 'https://testna5.ru/',
    ),
    'description' => 'Оплата заказа на сумму 100 руб',
    'metadata' => array(
        'order_id' => '37'
    ),
    'capture' => true,
    'deal' => array(
        'id' => 'dl-2909e77d-0022-5000-8000-0c37205b3208',
        'settlements' => array(
            array(
                'type' => 'payout',
                'amount' => array(
                    'value' => '80.00',
                    'currency' => 'RUB',
                )
            ),
        ),
    ),
    'merchant_customer_id' => 'merchant@shop.com'
);
$idempotenceKey = uniqid('', true);
try {
    $result = $client->createPayment($request, $idempotenceKey);
} catch (\Exception $e) {
    $result = $e;
}

var_dump($result);
```
[Подробнее о приеме оплаты от покупателя](https://yookassa.ru/developers/solutions-for-platforms/safe-deal/integration/payments)

---

### Запрос на выплату продавцу

[Выплата продавцу в документации](https://yookassa.ru/developers/api?lang=php#create_payout)

Запрос позволяет перечислить продавцу оплату за выполненную услугу или проданный товар в рамках Безопасной сделки. 
Выплату можно сделать на банковскую карту или на кошелек ЮMoney.

В ответ на запрос придет объект выплаты - `PayoutResponse` в актуальном статусе.
```php
require_once 'vendor/autoload.php';

$client = new \YooKassa\Client();
$client->setAuth('xxxxxx', 'test_XXXXXXX');

$request = array(
    'amount' => array(
        'value' => '80.00',
        'currency' => 'RUB',
    ),
    'payout_destination_data' => array(
        'type' => PaymentMethodType::YOO_MONEY,
        'accountNumber' => '4100116075156746',
    ),
    'description' => 'Выплата по заказу №37',
    'metadata' => array(
        'order_id' => '37'
    ),
    'deal' => array(
        'id' => 'dl-2909e77d-0022-5000-8000-0c37205b3208',
    ),
);
$idempotenceKey = uniqid('', true);
try {
    $result = $client->createPayout($request, $idempotenceKey);
} catch (\Exception $e) {
    $result = $e;
}

var_dump($result);
```
[Подробнее о проведении выплат](https://yookassa.ru/developers/solutions-for-platforms/safe-deal/integration/payouts)

---

### Получить информацию о сделке

[Информация о сделке в документации](https://yookassa.ru/developers/api?lang=php#get_deal)

Запрос позволяет получить информацию о текущем состоянии сделки по её уникальному идентификатору.

В ответ на запрос придет объект сделки - `DealResponse` в актуальном статусе.

```php
require_once 'vendor/autoload.php';

$client = new \YooKassa\Client();
$client->setAuth('xxxxxx', 'test_XXXXXXX');

$dealId = 'dl-215d8da0-000f-50be-b000-0003308c89be';
try {
    $response = $client->getDealInfo($dealId);
} catch (\Exception $e) {
    $response = $e;
}

var_dump($response);
```
---

### Получить список сделок с фильтрацией

[Список платежей в документации](https://yookassa.ru/developers/api?lang=php#get_deals_list)

Запрос позволяет получить список сделок, отфильтрованный по заданным критериям.

В ответ на запрос вернется список сделок с учетом переданных параметров. В списке будет информация о сделках, 
созданных за последние 3 года. Список будет отсортирован по времени создания сделок в порядке убывания.

Если результатов больше, чем задано в `limit`, список будет выводиться фрагментами. 
В этом случае в ответе на запрос вернется фрагмент списка и параметр `next_cursor` с указателем на следующий фрагмент.

```php
require_once 'vendor/autoload.php';

$client = new \YooKassa\Client();
$client->setAuth('xxxxxx', 'test_XXXXXXX');

$cursor = null;
$params = array(
    'limit' => 30,
    'status' => \YooKassa\Model\Deal\DealStatus::OPENED,
    'full_text_search' => 'DEAL',
    'created_at_gte' => '2021-10-01T00:00:00.000Z',
    'created_at_lt' => '2021-11-01T23:59:59.999Z',
);
try {
    do {
        $params['cursor'] = $cursor;
        $deals = $client->getDeals($params);
        foreach ($deals->getItems() as $deal) {
            $res = array(
                $deal->getCreatedAt()->format('Y-m-d H:i:s'),
                $deal->getBalance()->getValue() . ' ' . $deal->getBalance()->getCurrency(),
                $deal->getPayoutBalance()->getValue() . ' ' . $deal->getBalance()->getCurrency(),
                $deal->getStatus(),
                $deal->getId(),
            );
            echo implode(' - ', $res) . "\n";
        }
    } while ($cursor = $deals->getNextCursor());
} catch (\Exception $e) {
    $response = $e;
    var_dump($response);
}
```
[Подробнее о работе со списками](https://yookassa.ru/developers/using-api/lists)

---

### Получить информацию о выплате

[Информация о выплате в документации](https://yookassa.ru/developers/api?lang=php#get_payout)

Запрос позволяет получить информацию о текущем состоянии выплаты по ее уникальному идентификатору.

В ответ на запрос придет объект выплаты - `PayoutResponse` в актуальном статусе.

```php
require_once 'vendor/autoload.php';

$client = new \YooKassa\Client();
$client->setAuth('xxxxxx', 'test_XXXXXXX');

$payoutId = 'po-285c0ab7-0003-5000-9000-0e1166498fda';
try {
    $response = $client->getPayoutInfo($payoutId);
} catch (\Exception $e) {
    $response = $e;
}

var_dump($response);
```
