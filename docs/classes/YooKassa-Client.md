# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Client
### Namespace: [\YooKassa](../namespaces/yookassa.md)
---
**Summary:**

Класс клиента API


---
### Examples
Создание клиента

```php
require_once '../vendor/autoload.php';

$client = new \YooKassa\Client();
// по логин/паролю
$client->setAuth('xxxxxx', 'test_XXXXXXX');
// или по oauth токену
$client->setAuthToken('token_XXXXXXX');

```

---
### Constants
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [ME_PATH](../classes/YooKassa-Client-BaseClient.md#constant_ME_PATH) |  | Точка входа для запроса к API по магазину |
| public | [PAYMENTS_PATH](../classes/YooKassa-Client-BaseClient.md#constant_PAYMENTS_PATH) |  | Точка входа для запросов к API по платежам |
| public | [REFUNDS_PATH](../classes/YooKassa-Client-BaseClient.md#constant_REFUNDS_PATH) |  | Точка входа для запросов к API по возвратам |
| public | [WEBHOOKS_PATH](../classes/YooKassa-Client-BaseClient.md#constant_WEBHOOKS_PATH) |  | Точка входа для запросов к API по вебхукам |
| public | [RECEIPTS_PATH](../classes/YooKassa-Client-BaseClient.md#constant_RECEIPTS_PATH) |  | Точка входа для запросов к API по чекам |
| public | [DEALS_PATH](../classes/YooKassa-Client-BaseClient.md#constant_DEALS_PATH) |  | Точка входа для запросов к API по сделкам |
| public | [PAYOUTS_PATH](../classes/YooKassa-Client-BaseClient.md#constant_PAYOUTS_PATH) |  | Точка входа для запросов к API по выплатам |
| public | [IDEMPOTENCY_KEY_HEADER](../classes/YooKassa-Client-BaseClient.md#constant_IDEMPOTENCY_KEY_HEADER) |  | Имя HTTP заголовка, используемого для передачи idempotence key |
| public | [DEFAULT_DELAY](../classes/YooKassa-Client-BaseClient.md#constant_DEFAULT_DELAY) |  | Значение по умолчанию времени ожидания между запросами при отправке повторного запроса в случае получения ответа с HTTP статусом 202 |
| public | [DEFAULT_TRIES_COUNT](../classes/YooKassa-Client-BaseClient.md#constant_DEFAULT_TRIES_COUNT) |  | Значение по умолчанию количества попыток получения информации от API если пришёл ответ с HTTP статусом 202 |
| public | [DEFAULT_ATTEMPTS_COUNT](../classes/YooKassa-Client-BaseClient.md#constant_DEFAULT_ATTEMPTS_COUNT) |  | Значение по умолчанию количества попыток получения информации от API если пришёл ответ с HTTP статусом 202 |
| public | [SDK_VERSION](../classes/YooKassa-Client.md#constant_SDK_VERSION) |  | Текущая версия библиотеки |

---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$apiClient](../classes/YooKassa-Client-BaseClient.md#property_apiClient) |  | CURL клиент |
| protected | [$attempts](../classes/YooKassa-Client-BaseClient.md#property_attempts) |  | Количество повторных запросов при ответе API статусом 202 |
| protected | [$config](../classes/YooKassa-Client-BaseClient.md#property_config) |  | Настройки для CURL клиента |
| protected | [$logger](../classes/YooKassa-Client-BaseClient.md#property_logger) |  | Объект для логирования работы SDK |
| protected | [$login](../classes/YooKassa-Client-BaseClient.md#property_login) |  | shopId магазина |
| protected | [$password](../classes/YooKassa-Client-BaseClient.md#property_password) |  | Секретный ключ магазина |
| protected | [$timeout](../classes/YooKassa-Client-BaseClient.md#property_timeout) |  | Время через которое будут осуществляться повторные запросы |

---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Client-BaseClient.md#method___construct) |  | Constructor |
| public | [addWebhook()](../classes/YooKassa-Client.md#method_addWebhook) |  | Создание Webhook |
| public | [cancelPayment()](../classes/YooKassa-Client.md#method_cancelPayment) |  | Отменить незавершенную оплату заказа. |
| public | [capturePayment()](../classes/YooKassa-Client.md#method_capturePayment) |  | Подтверждение платежа |
| public | [createDeal()](../classes/YooKassa-Client.md#method_createDeal) |  | Создание сделки. |
| public | [createPayment()](../classes/YooKassa-Client.md#method_createPayment) |  | Создание платежа. |
| public | [createPayout()](../classes/YooKassa-Client.md#method_createPayout) |  | Создание выплаты. |
| public | [createReceipt()](../classes/YooKassa-Client.md#method_createReceipt) |  | Отправка чека в облачную кассу |
| public | [createRefund()](../classes/YooKassa-Client.md#method_createRefund) |  | Проведение возврата платежа |
| public | [getApiClient()](../classes/YooKassa-Client-BaseClient.md#method_getApiClient) |  | Возвращает CURL клиента для работы с API |
| public | [getConfig()](../classes/YooKassa-Client-BaseClient.md#method_getConfig) |  | Возвращает настройки клиента |
| public | [getDealInfo()](../classes/YooKassa-Client.md#method_getDealInfo) |  | Получить информацию о сделке |
| public | [getDeals()](../classes/YooKassa-Client.md#method_getDeals) |  | Получить список сделок магазина |
| public | [getPaymentInfo()](../classes/YooKassa-Client.md#method_getPaymentInfo) |  | Получить информацию о платеже |
| public | [getPayments()](../classes/YooKassa-Client.md#method_getPayments) |  | Получить список платежей магазина |
| public | [getPayoutInfo()](../classes/YooKassa-Client.md#method_getPayoutInfo) |  | Получить информацию о выплате |
| public | [getReceiptInfo()](../classes/YooKassa-Client.md#method_getReceiptInfo) |  | Получить информацию о чеке |
| public | [getReceipts()](../classes/YooKassa-Client.md#method_getReceipts) |  | Получить список чеков магазина |
| public | [getRefundInfo()](../classes/YooKassa-Client.md#method_getRefundInfo) |  | Получить информацию о возврате |
| public | [getRefunds()](../classes/YooKassa-Client.md#method_getRefunds) |  | Получить список возвратов платежей |
| public | [getWebhooks()](../classes/YooKassa-Client.md#method_getWebhooks) |  | Список созданных Webhook |
| public | [isNotificationIPTrusted()](../classes/YooKassa-Client-BaseClient.md#method_isNotificationIPTrusted) |  | Метод проверяет, находится ли IP адрес среди IP адресов Юkassa, с которых отправляются уведомления |
| public | [me()](../classes/YooKassa-Client.md#method_me) |  | Информация о магазине |
| public | [removeWebhook()](../classes/YooKassa-Client.md#method_removeWebhook) |  | Удаление Webhook |
| public | [setApiClient()](../classes/YooKassa-Client-BaseClient.md#method_setApiClient) |  | Устанавливает CURL клиента для работы с API |
| public | [setAuth()](../classes/YooKassa-Client-BaseClient.md#method_setAuth) |  | Устанавливает авторизацию по логин/паролю |
| public | [setAuthToken()](../classes/YooKassa-Client-BaseClient.md#method_setAuthToken) |  | Устанавливает авторизацию по Oauth-токену |
| public | [setConfig()](../classes/YooKassa-Client-BaseClient.md#method_setConfig) |  | Устанавливает настройки клиента |
| public | [setLogger()](../classes/YooKassa-Client-BaseClient.md#method_setLogger) |  | Устанавливает логгер приложения |
| public | [setMaxRequestAttempts()](../classes/YooKassa-Client-BaseClient.md#method_setMaxRequestAttempts) |  | Установка значения количества попыток повторных запросов при статусе 202 |
| public | [setRetryTimeout()](../classes/YooKassa-Client-BaseClient.md#method_setRetryTimeout) |  | Установка значения задержки между повторными запросами |
| protected | [decodeData()](../classes/YooKassa-Client-BaseClient.md#method_decodeData) |  | Декодирует JSON строку в массив данных |
| protected | [delay()](../classes/YooKassa-Client-BaseClient.md#method_delay) |  | Задержка между повторными запросами |
| protected | [encodeData()](../classes/YooKassa-Client-BaseClient.md#method_encodeData) |  | Кодирует массив данных в JSON строку |
| protected | [execute()](../classes/YooKassa-Client-BaseClient.md#method_execute) |  | Выполнение запроса и обработка 202 статуса |
| protected | [handleError()](../classes/YooKassa-Client-BaseClient.md#method_handleError) |  | Выбрасывает исключение по коду ошибки |

---
### Details
* File: [lib/Client.php](../../lib/Client.php)
* Package: YooKassa
* Class Hierarchy: 
  * [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)
  * \YooKassa\Client

---
### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| since | 1.0.1 |  |

---
## Constants
<a name="constant_ME_PATH" class="anchor"></a>
###### ME_PATH
Inherited from [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)

Точка входа для запроса к API по магазину

```php
ME_PATH = '/me'
```


<a name="constant_PAYMENTS_PATH" class="anchor"></a>
###### PAYMENTS_PATH
Inherited from [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)

Точка входа для запросов к API по платежам

```php
PAYMENTS_PATH = '/payments'
```


<a name="constant_REFUNDS_PATH" class="anchor"></a>
###### REFUNDS_PATH
Inherited from [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)

Точка входа для запросов к API по возвратам

```php
REFUNDS_PATH = '/refunds'
```


<a name="constant_WEBHOOKS_PATH" class="anchor"></a>
###### WEBHOOKS_PATH
Inherited from [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)

Точка входа для запросов к API по вебхукам

```php
WEBHOOKS_PATH = '/webhooks'
```


<a name="constant_RECEIPTS_PATH" class="anchor"></a>
###### RECEIPTS_PATH
Inherited from [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)

Точка входа для запросов к API по чекам

```php
RECEIPTS_PATH = '/receipts'
```


<a name="constant_DEALS_PATH" class="anchor"></a>
###### DEALS_PATH
Inherited from [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)

Точка входа для запросов к API по сделкам

```php
DEALS_PATH = '/deals'
```


<a name="constant_PAYOUTS_PATH" class="anchor"></a>
###### PAYOUTS_PATH
Inherited from [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)

Точка входа для запросов к API по выплатам

```php
PAYOUTS_PATH = '/payouts'
```


<a name="constant_IDEMPOTENCY_KEY_HEADER" class="anchor"></a>
###### IDEMPOTENCY_KEY_HEADER
Inherited from [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)

Имя HTTP заголовка, используемого для передачи idempotence key

```php
IDEMPOTENCY_KEY_HEADER = 'Idempotence-Key'
```


<a name="constant_DEFAULT_DELAY" class="anchor"></a>
###### DEFAULT_DELAY
Inherited from [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)

Значение по умолчанию времени ожидания между запросами при отправке повторного запроса в случае получения ответа с HTTP статусом 202

```php
DEFAULT_DELAY = 1800
```


<a name="constant_DEFAULT_TRIES_COUNT" class="anchor"></a>
###### DEFAULT_TRIES_COUNT
Inherited from [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)

Значение по умолчанию количества попыток получения информации от API если пришёл ответ с HTTP статусом 202

```php
DEFAULT_TRIES_COUNT = 3
```


<a name="constant_DEFAULT_ATTEMPTS_COUNT" class="anchor"></a>
###### DEFAULT_ATTEMPTS_COUNT
Inherited from [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)

Значение по умолчанию количества попыток получения информации от API если пришёл ответ с HTTP статусом 202

```php
DEFAULT_ATTEMPTS_COUNT = 3
```


<a name="constant_SDK_VERSION" class="anchor"></a>
###### SDK_VERSION
Текущая версия библиотеки

```php
SDK_VERSION = '2.2.5'
```



---
## Properties
<a name="property_apiClient"></a>
#### protected $apiClient : null|\YooKassa\Client\ApiClientInterface
---
**Summary**

CURL клиент

**Type:** <a href="../null|\YooKassa\Client\ApiClientInterface"><abbr title="null|\YooKassa\Client\ApiClientInterface">ApiClientInterface</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)


<a name="property_attempts"></a>
#### protected $attempts : int
---
**Summary**

Количество повторных запросов при ответе API статусом 202

***Description***

Значение по умолчанию 3

**Type:** <a href="../int"><abbr title="int">int</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)


<a name="property_config"></a>
#### protected $config : array
---
**Summary**

Настройки для CURL клиента

**Type:** <a href="../array"><abbr title="array">array</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)


<a name="property_logger"></a>
#### protected $logger : \Psr\Log\LoggerInterface|null
---
**Summary**

Объект для логирования работы SDK

**Type:** <a href="../\Psr\Log\LoggerInterface|null"><abbr title="\Psr\Log\LoggerInterface|null">LoggerInterface|null</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)


<a name="property_login"></a>
#### protected $login : string|int
---
**Summary**

shopId магазина

**Type:** <a href="../string|int"><abbr title="string|int">string|int</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)


<a name="property_password"></a>
#### protected $password : string
---
**Summary**

Секретный ключ магазина

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)


<a name="property_timeout"></a>
#### protected $timeout : int
---
**Summary**

Время через которое будут осуществляться повторные запросы

***Description***

Значение по умолчанию - 1800 миллисекунд.

**Type:** <a href="../int"><abbr title="int">int</abbr></a>
Значение в миллисекундах
**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)



---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(\YooKassa\Client\ApiClientInterface|null $apiClient = null, \YooKassa\Helpers\Config\ConfigurationLoaderInterface|null $configLoader = null) : mixed
```

**Summary**

Constructor

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Client\ApiClientInterface OR null</code> | apiClient  |  |
| <code lang="php">\YooKassa\Helpers\Config\ConfigurationLoaderInterface OR null</code> | configLoader  |  |

**Returns:** mixed - 


<a name="method_addWebhook" class="anchor"></a>
#### public addWebhook() : \YooKassa\Model\Webhook\Webhook|null

```php
public addWebhook(\YooKassa\Model\Webhook\Webhook|array $request, string|null $idempotencyKey = null) : \YooKassa\Model\Webhook\Webhook|null
```

**Summary**

Создание Webhook

**Description**

Запрос позволяет подписаться на уведомления о событии (например, на переход платежа в статус successed).

**Details:**
* Inherited From: [\YooKassa\Client](../classes/YooKassa-Client.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\Webhook\Webhook OR array</code> | request  |  |
| <code lang="php">string OR null</code> | idempotencyKey  | [Ключ идемпотентности](https://yookassa.ru/developers/using-api/basics?lang=php#idempotence) |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\ApiException | Неожиданный код ошибки. |
| \YooKassa\Common\Exceptions\BadApiRequestException | Неправильный запрос. Чаще всего этот статус выдается из-за нарушения правил взаимодействия с API. |
| \YooKassa\Common\Exceptions\ForbiddenException | Секретный ключ или OAuth-токен верный, но не хватает прав для совершения операции. |
| \YooKassa\Common\Exceptions\InternalServerError | Технические неполадки на стороне ЮKassa. Результат обработки запроса неизвестен. Повторите запрос позднее с тем же ключом идемпотентности. |
| \YooKassa\Common\Exceptions\NotFoundException | Ресурс не найден. |
| \YooKassa\Common\Exceptions\ResponseProcessingException | Запрос был принят на обработку, но она не завершена. |
| \YooKassa\Common\Exceptions\TooManyRequestsException | Превышен лимит запросов в единицу времени. Попробуйте снизить интенсивность запросов. |
| \YooKassa\Common\Exceptions\UnauthorizedException | Неверное имя пользователя или пароль или невалидный OAuth-токен при аутентификации. |
| \YooKassa\Common\Exceptions\ExtensionNotFoundException | Требуемое PHP расширение не установлено. |
| \Exception |  |

**Returns:** \YooKassa\Model\Webhook\Webhook|null - 
##### Examples:
Создание Webhook:

```php
// В данном примере мы устанавливаем вебхуки для succeeded и canceled уведомлений.
// А так же проверяем, не установлены ли уже вебхуки. И если установлены на неверный адрес, удаляем.
try {
    $webHookUrl = 'https://merchant-site.ru/payment-notification';
    $needWebHookList = array(
        \YooKassa\Model\NotificationEventType::PAYMENT_SUCCEEDED,
        \YooKassa\Model\NotificationEventType::PAYMENT_CANCELED
    );
    $currentWebHookList = $client->getWebhooks()->getItems();
    foreach ($needWebHookList as $event) {
        $hookIsSet = false;
        foreach ($currentWebHookList as $webHook) {
            if ($webHook->getEvent() !== $event) {
                continue;
            }
            if ($webHook->getUrl() !== $webHookUrl) {
                $client->removeWebhook($webHook->getId());
            } else {
                $hookIsSet = true;
            }
            break;
        }
        if (!$hookIsSet) {
            $client->addWebhook(array('event' => $event, 'url' => $webHookUrl));
        }
    }
    $response = 'SUCCESS';
} catch (\Exception $e) {
    $response = $e;
}

var_dump($response);

```


<a name="method_cancelPayment" class="anchor"></a>
#### public cancelPayment() : \YooKassa\Request\Payments\Payment\CancelResponse|null

```php
public cancelPayment(string $paymentId, string|null $idempotencyKey = null) : \YooKassa\Request\Payments\Payment\CancelResponse|null
```

**Summary**

Отменить незавершенную оплату заказа.

**Description**

Отменяет платеж, находящийся в статусе `waiting_for_capture`. Отмена платежа значит, что вы
не готовы выдать пользователю товар или оказать услугу. Как только вы отменяете платеж, мы начинаем
возвращать деньги на счет плательщика. Для платежей банковскими картами отмена происходит мгновенно.
Для остальных способов оплаты возврат может занимать до нескольких дней.

**Details:**
* Inherited From: [\YooKassa\Client](../classes/YooKassa-Client.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | paymentId  | Идентификатор платежа |
| <code lang="php">string OR null</code> | idempotencyKey  | [Ключ идемпотентности](https://yookassa.ru/developers/using-api/basics?lang=php#idempotence) |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\ApiException | Неожиданный код ошибки. |
| \YooKassa\Common\Exceptions\BadApiRequestException | Неправильный запрос. Чаще всего этот статус выдается из-за нарушения правил взаимодействия с API. |
| \YooKassa\Common\Exceptions\ForbiddenException | Секретный ключ или OAuth-токен верный, но не хватает прав для совершения операции. |
| \YooKassa\Common\Exceptions\InternalServerError | Технические неполадки на стороне ЮKassa. Результат обработки запроса неизвестен. Повторите запрос позднее с тем же ключом идемпотентности. |
| \YooKassa\Common\Exceptions\NotFoundException | Ресурс не найден. |
| \YooKassa\Common\Exceptions\ResponseProcessingException | Запрос был принят на обработку, но она не завершена. |
| \YooKassa\Common\Exceptions\TooManyRequestsException | Превышен лимит запросов в единицу времени. Попробуйте снизить интенсивность запросов. |
| \YooKassa\Common\Exceptions\UnauthorizedException | Неверное имя пользователя или пароль или невалидный OAuth-токен при аутентификации. |
| \YooKassa\Common\Exceptions\ExtensionNotFoundException | Требуемое PHP расширение не установлено. |
| \Exception |  |

**Returns:** \YooKassa\Request\Payments\Payment\CancelResponse|null - 
##### Examples:
Отменить незавершенную оплату заказа:

```php
$paymentId = '24e89cb0-000f-5000-9000-1de77fa0d6df';
try {
    $response = $client->cancelPayment($paymentId, uniqid('', true));
    echo $response->getStatus();
} catch (\Exception $e) {
    $response = $e;
}

var_dump($response);

```


<a name="method_capturePayment" class="anchor"></a>
#### public capturePayment() : \YooKassa\Request\Payments\Payment\CreateCaptureResponse|null

```php
public capturePayment(\YooKassa\Request\Payments\Payment\CreateCaptureRequestInterface|array $captureRequest, string $paymentId, string|null $idempotencyKey = null) : \YooKassa\Request\Payments\Payment\CreateCaptureResponse|null
```

**Summary**

Подтверждение платежа

**Description**

Подтверждает вашу готовность принять платеж. Платеж можно подтвердить, только если он находится
в статусе `waiting_for_capture`. Если платеж подтвержден успешно — значит, оплата прошла, и вы можете выдать
товар или оказать услугу пользователю. На следующий день после подтверждения платеж попадет в реестр,
и ЮKassa переведет деньги на ваш расчетный счет. Если вы не подтверждаете платеж до момента, указанного
в `expire_at`, по умолчанию он отменяется, а деньги возвращаются пользователю. При оплате банковской картой
у вас есть 7 дней на подтверждение платежа. Для остальных способов оплаты платеж необходимо подтвердить
в течение 6 часов.

**Details:**
* Inherited From: [\YooKassa\Client](../classes/YooKassa-Client.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Request\Payments\Payment\CreateCaptureRequestInterface OR array</code> | captureRequest  |  |
| <code lang="php">string</code> | paymentId  | Идентификатор платежа |
| <code lang="php">string OR null</code> | idempotencyKey  | [Ключ идемпотентности](https://yookassa.ru/developers/using-api/basics?lang=php#idempotence) |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\ApiException | Неожиданный код ошибки. |
| \YooKassa\Common\Exceptions\BadApiRequestException | Неправильный запрос. Чаще всего этот статус выдается из-за нарушения правил взаимодействия с API. |
| \YooKassa\Common\Exceptions\ForbiddenException | Секретный ключ или OAuth-токен верный, но не хватает прав для совершения операции. |
| \YooKassa\Common\Exceptions\InternalServerError | Технические неполадки на стороне ЮKassa. Результат обработки запроса неизвестен. Повторите запрос позднее с тем же ключом идемпотентности. |
| \YooKassa\Common\Exceptions\NotFoundException | Ресурс не найден. |
| \YooKassa\Common\Exceptions\ResponseProcessingException | Запрос был принят на обработку, но она не завершена. |
| \YooKassa\Common\Exceptions\TooManyRequestsException | Превышен лимит запросов в единицу времени. Попробуйте снизить интенсивность запросов. |
| \YooKassa\Common\Exceptions\UnauthorizedException | Неверное имя пользователя или пароль или невалидный OAuth-токен при аутентификации. |
| \YooKassa\Common\Exceptions\ExtensionNotFoundException | Требуемое PHP расширение не установлено. |
| \Exception |  |

**Returns:** \YooKassa\Request\Payments\Payment\CreateCaptureResponse|null - 
##### Examples:
Подтверждение платежа:

```php
$paymentId = '24e89cb0-000f-5000-9000-1de77fa0d6df';
try {
    $response = $client->capturePayment(
        array(
            'amount' => array(
                'value' => '1500.00',
                'currency' => 'RUB',
            ),
            'transfers' => array(
                array(
                    'account_id' => '123',
                    'amount' => array(
                        'value' => '1000.00',
                        'currency' => 'RUB',
                    ),
                ),
                array(
                    'account_id' => '456',
                    'amount' => array(
                        'value' => '500.00',
                        'currency' => 'RUB',
                    ),
                ),
            ),
        ),
        $paymentId,
        uniqid('', true)
    );
    echo $response->getStatus();
} catch (\Exception $e) {
    $response = $e;
}

var_dump($response);

```


<a name="method_createDeal" class="anchor"></a>
#### public createDeal() : \YooKassa\Request\Deals\CreateDealResponse|null

```php
public createDeal(\YooKassa\Request\Deals\CreateDealRequestInterface|array $deal, string|null $idempotenceKey = null) : \YooKassa\Request\Deals\CreateDealResponse|null
```

**Summary**

Создание сделки.

**Description**

Запрос позволяет создать сделку, в рамках которой необходимо принять оплату от покупателя и перечислить ее продавцу.

Необходимо указать следующие параметры:
<ul>
<li>type — Тип сделки. Фиксированное значение: safe_deal — Безопасная сделка;</li>
<li>fee_moment — Момент перечисления вам вознаграждения платформы. Возможные значения: payment_succeeded — после успешной оплаты; deal_closed — при закрытии сделки после успешной выплаты.</li>
</ul>

Дополнительные параметры:
<ul>
<li>metadata — Любые дополнительные данные, которые нужны вам для работы (например, номер заказа);</li>
<li>description — Описание сделки (не более 128 символов). Используется для фильтрации при получении списка сделок.</li>
</ul>

**Details:**
* Inherited From: [\YooKassa\Client](../classes/YooKassa-Client.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Request\Deals\CreateDealRequestInterface OR array</code> | deal  |  |
| <code lang="php">string OR null</code> | idempotenceKey  | [Ключ идемпотентности](https://yookassa.ru/developers/using-api/basics?lang=php#idempotence) |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\ApiException | Неожиданный код ошибки. |
| \YooKassa\Common\Exceptions\BadApiRequestException | Неправильный запрос. Чаще всего этот статус выдается из-за нарушения правил взаимодействия с API. |
| \YooKassa\Common\Exceptions\ForbiddenException | Секретный ключ или OAuth-токен верный, но не хватает прав для совершения операции. |
| \YooKassa\Common\Exceptions\InternalServerError | Технические неполадки на стороне ЮKassa. Результат обработки запроса неизвестен. Повторите запрос позднее с тем же ключом идемпотентности. |
| \YooKassa\Common\Exceptions\NotFoundException | Ресурс не найден. |
| \YooKassa\Common\Exceptions\ResponseProcessingException | Запрос был принят на обработку, но она не завершена. |
| \YooKassa\Common\Exceptions\TooManyRequestsException | Превышен лимит запросов в единицу времени. Попробуйте снизить интенсивность запросов. |
| \YooKassa\Common\Exceptions\UnauthorizedException | Неверное имя пользователя или пароль или невалидный OAuth-токен при аутентификации. |
| \YooKassa\Common\Exceptions\ExtensionNotFoundException | Требуемое PHP расширение не установлено. |

**Returns:** \YooKassa\Request\Deals\CreateDealResponse|null - 
##### Examples:
Запрос на создание сделки:

```php
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

var_dump($response);

```


<a name="method_createPayment" class="anchor"></a>
#### public createPayment() : \YooKassa\Request\Payments\CreatePaymentResponse|null

```php
public createPayment(\YooKassa\Request\Payments\CreatePaymentRequestInterface|array $payment, string|null $idempotenceKey = null) : \YooKassa\Request\Payments\CreatePaymentResponse|null
```

**Summary**

Создание платежа.

**Description**

Чтобы принять оплату, необходимо создать объект платежа — `Payment`. Он содержит всю необходимую информацию
для проведения оплаты (сумму, валюту и статус). У платежа линейный жизненный цикл, он последовательно
переходит из статуса в статус.

Необходимо указать один из параметров:
<ul>
<li>payment_token — оплата по одноразовому PaymentToken, сформированному виджетом YooKassa JS;</li>
<li>payment_method_id — оплата по сохраненным платежным данным;</li>
<li>payment_method_data — оплата по новым платежным данным.</li>
</ul>

Если не указан ни один параметр и `confirmation.type = redirect`, то в качестве `confirmation_url`
возвращается ссылка, по которой пользователь сможет самостоятельно выбрать подходящий способ оплаты.
Дополнительные параметры:
<ul>
<li>confirmation — передается, если необходимо уточнить способ подтверждения платежа;</li>
<li>recipient — указывается при наличии нескольких товаров;</li>
<li>metadata — дополнительные данные (передаются магазином).</li>
</ul>

**Details:**
* Inherited From: [\YooKassa\Client](../classes/YooKassa-Client.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Request\Payments\CreatePaymentRequestInterface OR array</code> | payment  |  |
| <code lang="php">string OR null</code> | idempotenceKey  | [Ключ идемпотентности](https://yookassa.ru/developers/using-api/basics?lang=php#idempotence) |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\ApiException | Неожиданный код ошибки. |
| \YooKassa\Common\Exceptions\BadApiRequestException | Неправильный запрос. Чаще всего этот статус выдается из-за нарушения правил взаимодействия с API. |
| \YooKassa\Common\Exceptions\ForbiddenException | Секретный ключ или OAuth-токен верный, но не хватает прав для совершения операции. |
| \YooKassa\Common\Exceptions\InternalServerError | Технические неполадки на стороне ЮKassa. Результат обработки запроса неизвестен. Повторите запрос позднее с тем же ключом идемпотентности. |
| \YooKassa\Common\Exceptions\NotFoundException | Ресурс не найден. |
| \YooKassa\Common\Exceptions\ResponseProcessingException | Запрос был принят на обработку, но она не завершена. |
| \YooKassa\Common\Exceptions\TooManyRequestsException | Превышен лимит запросов в единицу времени. Попробуйте снизить интенсивность запросов. |
| \YooKassa\Common\Exceptions\UnauthorizedException | Неверное имя пользователя или пароль или невалидный OAuth-токен при аутентификации. |
| \YooKassa\Common\Exceptions\ExtensionNotFoundException | Требуемое PHP расширение не установлено. |

**Returns:** \YooKassa\Request\Payments\CreatePaymentResponse|null - 
##### Examples:
Запрос на создание платежа:

```php
try {
    $idempotenceKey = uniqid('', true);
    $response = $client->createPayment(
        array(
            'amount' => array(
                'value' => '1.00',
                'currency' => 'RUB',
            ),
            'confirmation' => array(
                'type' => 'redirect',
                'return_url' => 'https://merchant-site.ru/payment-notification',
            ),
            'description' => 'Оплата заказа на сумму 1 руб',
            'metadata' => array(
                'orderNumber' => 1001
            ),
            'capture' => true,
        ),
        $idempotenceKey
    );
    $confirmation = $response->getConfirmation();
    $redirectUrl = $confirmation->getConfirmationUrl();
    // Далее производим редирект на полученный URL
} catch (\Exception $e) {
    $response = $e;
}

var_dump($response);

```


<a name="method_createPayout" class="anchor"></a>
#### public createPayout() : \YooKassa\Request\Payouts\CreatePayoutResponse|null

```php
public createPayout(\YooKassa\Request\Payouts\CreatePayoutRequestInterface|array $payout, string|null $idempotenceKey = null) : \YooKassa\Request\Payouts\CreatePayoutResponse|null
```

**Summary**

Создание выплаты.

**Description**

Запрос позволяет перечислить продавцу оплату за выполненную услугу или проданный товар в рамках Безопасной сделки.
Выплату можно сделать на банковскую карту или на кошелек ЮMoney.

Обязательный параметр:
<ul>
<li>amount — сумма выплаты. Есть ограничения на минимальный и максимальный размер выплаты и сумму выплат за месяц.</li>
</ul>

Необходимо указать один из параметров:
<ul>
<li>payout_destination_data — данные платежного средства, на которое нужно сделать выплату;</li>
<li>payout_token — токенизированные данные для выплаты. Например, синоним банковской карты.</li>
</ul>

Дополнительные параметры:
<ul>
<li>description — описание транзакции (не более 128 символов);</li>
<li>deal — сделка, в рамках которой нужно провести выплату. Необходимо передавать, если вы проводите Безопасную сделку;</li>
<li>metadata — любые дополнительные данные, которые нужны вам для работы (например, номер заказа).</li>
</ul>

**Details:**
* Inherited From: [\YooKassa\Client](../classes/YooKassa-Client.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Request\Payouts\CreatePayoutRequestInterface OR array</code> | payout  |  |
| <code lang="php">string OR null</code> | idempotenceKey  | [Ключ идемпотентности](https://yookassa.ru/developers/using-api/basics?lang=php#idempotence) |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\ApiException | Неожиданный код ошибки. |
| \YooKassa\Common\Exceptions\BadApiRequestException | Неправильный запрос. Чаще всего этот статус выдается из-за нарушения правил взаимодействия с API. |
| \YooKassa\Common\Exceptions\ForbiddenException | Секретный ключ или OAuth-токен верный, но не хватает прав для совершения операции. |
| \YooKassa\Common\Exceptions\InternalServerError | Технические неполадки на стороне ЮKassa. Результат обработки запроса неизвестен. Повторите запрос позднее с тем же ключом идемпотентности. |
| \YooKassa\Common\Exceptions\NotFoundException | Ресурс не найден. |
| \YooKassa\Common\Exceptions\ResponseProcessingException | Запрос был принят на обработку, но она не завершена. |
| \YooKassa\Common\Exceptions\TooManyRequestsException | Превышен лимит запросов в единицу времени. Попробуйте снизить интенсивность запросов. |
| \YooKassa\Common\Exceptions\UnauthorizedException | Неверное имя пользователя или пароль или невалидный OAuth-токен при аутентификации. |
| \YooKassa\Common\Exceptions\ExtensionNotFoundException | Требуемое PHP расширение не установлено. |

**Returns:** \YooKassa\Request\Payouts\CreatePayoutResponse|null - 
##### Examples:
Запрос на создание выплаты:

```php
$request = array(
    'amount' => array(
        'value' => '80.00',
        'currency' => 'RUB',
    ),
    'payout_destination_data' => array(
        'type' => \YooKassa\Model\PaymentMethodType::YOO_MONEY,
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
    $idempotenceKey = uniqid('', true);
    $result = $client->createPayout($request, $idempotenceKey
    );
} catch (\Exception $e) {
    $result = $e;
}

var_dump($result);

```


<a name="method_createReceipt" class="anchor"></a>
#### public createReceipt() : \YooKassa\Request\Receipts\AbstractReceiptResponse|null

```php
public createReceipt(\YooKassa\Request\Receipts\CreatePostReceiptRequestInterface|array $receipt, string|null $idempotenceKey = null) : \YooKassa\Request\Receipts\AbstractReceiptResponse|null
```

**Summary**

Отправка чека в облачную кассу

**Description**

Создает объект чека — `Receipt`. Возвращает успешно созданный чек по уникальному идентификатору
платежа или возврата.

**Details:**
* Inherited From: [\YooKassa\Client](../classes/YooKassa-Client.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Request\Receipts\CreatePostReceiptRequestInterface OR array</code> | receipt  |  |
| <code lang="php">string OR null</code> | idempotenceKey  | [Ключ идемпотентности](https://yookassa.ru/developers/using-api/basics?lang=php#idempotence) |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\ApiException | Неожиданный код ошибки. |
| \YooKassa\Common\Exceptions\BadApiRequestException | Неправильный запрос. Чаще всего этот статус выдается из-за нарушения правил взаимодействия с API. |
| \YooKassa\Common\Exceptions\ForbiddenException | Секретный ключ или OAuth-токен верный, но не хватает прав для совершения операции. |
| \YooKassa\Common\Exceptions\InternalServerError | Технические неполадки на стороне ЮKassa. Результат обработки запроса неизвестен. Повторите запрос позднее с тем же ключом идемпотентности. |
| \YooKassa\Common\Exceptions\NotFoundException | Ресурс не найден. |
| \YooKassa\Common\Exceptions\ResponseProcessingException | Запрос был принят на обработку, но она не завершена. |
| \YooKassa\Common\Exceptions\TooManyRequestsException | Превышен лимит запросов в единицу времени. Попробуйте снизить интенсивность запросов. |
| \YooKassa\Common\Exceptions\UnauthorizedException | Неверное имя пользователя или пароль или невалидный OAuth-токен при аутентификации. |
| \YooKassa\Common\Exceptions\ExtensionNotFoundException | Требуемое PHP расширение не установлено. |
| \YooKassa\Common\Exceptions\AuthorizeException | Ошибка авторизации. Не установлен заголовок. |
| \Exception |  |

**Returns:** \YooKassa\Request\Receipts\AbstractReceiptResponse|null - 
##### Examples:
Запрос на создание чека:

```php
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
                        'currency' => 'RUB',
                    ),
                    'vat_code' => 2,
                    'payment_mode' => 'full_payment',
                    'payment_subject' => 'commodity',
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


<a name="method_createRefund" class="anchor"></a>
#### public createRefund() : \YooKassa\Request\Refunds\CreateRefundResponse|null

```php
public createRefund(\YooKassa\Request\Refunds\CreateRefundRequestInterface|array $request, string|null $idempotencyKey = null) : \YooKassa\Request\Refunds\CreateRefundResponse|null
```

**Summary**

Проведение возврата платежа

**Description**

Создает объект возврата — `Refund`. Возвращает успешно завершенный платеж по уникальному идентификатору
этого платежа. Создание возврата возможно только для платежей в статусе `succeeded`. Комиссии за проведение
возврата нет. Комиссия, которую ЮKassa берёт за проведение исходного платежа, не возвращается.

**Details:**
* Inherited From: [\YooKassa\Client](../classes/YooKassa-Client.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Request\Refunds\CreateRefundRequestInterface OR array</code> | request  |  |
| <code lang="php">string OR null</code> | idempotencyKey  | [Ключ идемпотентности](https://yookassa.ru/developers/using-api/basics?lang=php#idempotence) |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\ApiException | Неожиданный код ошибки. |
| \YooKassa\Common\Exceptions\BadApiRequestException | Неправильный запрос. Чаще всего этот статус выдается из-за нарушения правил взаимодействия с API. |
| \YooKassa\Common\Exceptions\ForbiddenException | Секретный ключ или OAuth-токен верный, но не хватает прав для совершения операции. |
| \YooKassa\Common\Exceptions\InternalServerError | Технические неполадки на стороне ЮKassa. Результат обработки запроса неизвестен. Повторите запрос позднее с тем же ключом идемпотентности. |
| \YooKassa\Common\Exceptions\NotFoundException | Ресурс не найден. |
| \YooKassa\Common\Exceptions\ResponseProcessingException | Запрос был принят на обработку, но она не завершена. |
| \YooKassa\Common\Exceptions\TooManyRequestsException | Превышен лимит запросов в единицу времени. Попробуйте снизить интенсивность запросов. |
| \YooKassa\Common\Exceptions\UnauthorizedException | Неверное имя пользователя или пароль или невалидный OAuth-токен при аутентификации. |
| \YooKassa\Common\Exceptions\ExtensionNotFoundException | Требуемое PHP расширение не установлено. |
| \Exception |  |

**Returns:** \YooKassa\Request\Refunds\CreateRefundResponse|null - 
##### Examples:
Запрос на создание возврата:

```php
try {
    $response = $client->createRefund(
        array(
            'payment_id' => '24e89cb0-000f-5000-9000-1de77fa0d6df',
            'amount' => array(
                'value' => '1000.00',
                'currency' => 'RUB',
            ),
            'sources' => array(
                array(
                    'account_id' => '456',
                    'amount' => array(
                        'value' => '1000.00',
                        'currency' => 'RUB',
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


<a name="method_getApiClient" class="anchor"></a>
#### public getApiClient() : \YooKassa\Client\ApiClientInterface

```php
public getApiClient() : \YooKassa\Client\ApiClientInterface
```

**Summary**

Возвращает CURL клиента для работы с API

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)

**Returns:** \YooKassa\Client\ApiClientInterface - 


<a name="method_getConfig" class="anchor"></a>
#### public getConfig() : array

```php
public getConfig() : array
```

**Summary**

Возвращает настройки клиента

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)

**Returns:** array - 


<a name="method_getDealInfo" class="anchor"></a>
#### public getDealInfo() : \YooKassa\Model\DealInterface|null

```php
public getDealInfo(string $dealId) : \YooKassa\Model\DealInterface|null
```

**Summary**

Получить информацию о сделке

**Description**

Запрос позволяет получить информацию о текущем состоянии сделки по её уникальному идентификатору.
Выдает объект чека {@link} в актуальном статусе.

**Details:**
* Inherited From: [\YooKassa\Client](../classes/YooKassa-Client.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | dealId  | Идентификатор сделки |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\ApiException | Неожиданный код ошибки. |
| \YooKassa\Common\Exceptions\BadApiRequestException | Неправильный запрос. Чаще всего этот статус выдается из-за нарушения правил взаимодействия с API. |
| \YooKassa\Common\Exceptions\ForbiddenException | Секретный ключ или OAuth-токен верный, но не хватает прав для совершения операции. |
| \YooKassa\Common\Exceptions\InternalServerError | Технические неполадки на стороне ЮKassa. Результат обработки запроса неизвестен. Повторите запрос позднее с тем же ключом идемпотентности. |
| \YooKassa\Common\Exceptions\NotFoundException | Ресурс не найден. |
| \YooKassa\Common\Exceptions\ResponseProcessingException | Запрос был принят на обработку, но она не завершена. |
| \YooKassa\Common\Exceptions\TooManyRequestsException | Превышен лимит запросов в единицу времени. Попробуйте снизить интенсивность запросов. |
| \YooKassa\Common\Exceptions\UnauthorizedException | Неверное имя пользователя или пароль или невалидный OAuth-токен при аутентификации. |
| \YooKassa\Common\Exceptions\ExtensionNotFoundException | Требуемое PHP расширение не установлено. |

**Returns:** \YooKassa\Model\DealInterface|null - 
##### Examples:
Получить информацию о сделке:

```php

// Получить информацию о сделке
try {
    $response = $client->getDealInfo('dl-2909e77d-1022-5003-8004-0c37205b3208');
    echo $response->getStatus();
} catch (\Exception $e) {
    $response = $e;
}

```


<a name="method_getDeals" class="anchor"></a>
#### public getDeals() : \YooKassa\Request\Deals\DealsResponse|null

```php
public getDeals(\YooKassa\Request\Deals\DealsRequestInterface|array|null $filter = null) : \YooKassa\Request\Deals\DealsResponse|null
```

**Summary**

Получить список сделок магазина

**Description**

Запрос позволяет получить список сделок, отфильтрованный по заданным критериям.
В ответ на запрос вернется список сделок с учетом переданных параметров. В списке будет информация о сделках,
созданных за последние 3 года. Список будет отсортирован по времени создания сделок в порядке убывания.
Если результатов больше, чем задано в `limit`, список будет выводиться фрагментами.
В этом случае в ответе на запрос вернется фрагмент списка и параметр `next_cursor` с указателем на следующий фрагмент.

**Details:**
* Inherited From: [\YooKassa\Client](../classes/YooKassa-Client.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Request\Deals\DealsRequestInterface OR array OR null</code> | filter  |  |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\ApiException | Неожиданный код ошибки. |
| \YooKassa\Common\Exceptions\BadApiRequestException | Неправильный запрос. Чаще всего этот статус выдается из-за нарушения правил взаимодействия с API. |
| \YooKassa\Common\Exceptions\ForbiddenException | Секретный ключ или OAuth-токен верный, но не хватает прав для совершения операции. |
| \YooKassa\Common\Exceptions\InternalServerError | Технические неполадки на стороне ЮKassa. Результат обработки запроса неизвестен. Повторите запрос позднее с тем же ключом идемпотентности. |
| \YooKassa\Common\Exceptions\NotFoundException | Ресурс не найден. |
| \YooKassa\Common\Exceptions\ResponseProcessingException | Запрос был принят на обработку, но она не завершена. |
| \YooKassa\Common\Exceptions\TooManyRequestsException | Превышен лимит запросов в единицу времени. Попробуйте снизить интенсивность запросов. |
| \YooKassa\Common\Exceptions\UnauthorizedException | Неверное имя пользователя или пароль или невалидный OAuth-токен при аутентификации. |
| \YooKassa\Common\Exceptions\ExtensionNotFoundException | Требуемое PHP расширение не установлено. |
| \Exception |  |

**Returns:** \YooKassa\Request\Deals\DealsResponse|null - 
##### Examples:
Получить список сделок с фильтрацией:

```php

// Получить список сделок с фильтрацией
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

```


<a name="method_getPaymentInfo" class="anchor"></a>
#### public getPaymentInfo() : \YooKassa\Model\PaymentInterface|null

```php
public getPaymentInfo(string $paymentId) : \YooKassa\Model\PaymentInterface|null
```

**Summary**

Получить информацию о платеже

**Description**

Запрос позволяет получить информацию о текущем состоянии платежа по его уникальному идентификатору.
Выдает объект платежа {@link} в актуальном статусе.

**Details:**
* Inherited From: [\YooKassa\Client](../classes/YooKassa-Client.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | paymentId  | Идентификатор платежа |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\ApiException | Неожиданный код ошибки. |
| \YooKassa\Common\Exceptions\BadApiRequestException | Неправильный запрос. Чаще всего этот статус выдается из-за нарушения правил взаимодействия с API. |
| \YooKassa\Common\Exceptions\ForbiddenException | Секретный ключ или OAuth-токен верный, но не хватает прав для совершения операции. |
| \YooKassa\Common\Exceptions\InternalServerError | Технические неполадки на стороне ЮKassa. Результат обработки запроса неизвестен. Повторите запрос позднее с тем же ключом идемпотентности. |
| \YooKassa\Common\Exceptions\NotFoundException | Ресурс не найден. |
| \YooKassa\Common\Exceptions\ResponseProcessingException | Запрос был принят на обработку, но она не завершена. |
| \YooKassa\Common\Exceptions\TooManyRequestsException | Превышен лимит запросов в единицу времени. Попробуйте снизить интенсивность запросов. |
| \YooKassa\Common\Exceptions\UnauthorizedException | Неверное имя пользователя или пароль или невалидный OAuth-токен при аутентификации. |
| \YooKassa\Common\Exceptions\ExtensionNotFoundException | Требуемое PHP расширение не установлено. |

**Returns:** \YooKassa\Model\PaymentInterface|null - Объект платежа
##### Examples:
Получить информацию о платеже:

```php
try {
    $response = $client->getPaymentInfo('24e89cb0-000f-5000-9000-1de77fa0d6df');
    echo $response->getStatus();
} catch (\Exception $e) {
    $response = $e;
}

var_dump($response);

```


<a name="method_getPayments" class="anchor"></a>
#### public getPayments() : \YooKassa\Request\Payments\PaymentsResponse|null

```php
public getPayments(\YooKassa\Request\Payments\PaymentsRequestInterface|array|null $filter = null) : \YooKassa\Request\Payments\PaymentsResponse|null
```

**Summary**

Получить список платежей магазина

**Description**

Запрос позволяет получить список платежей, отфильтрованный по заданным критериям.
В ответ на запрос вернется список платежей с учетом переданных параметров. В списке будет информация о платежах,
созданных за последние 3 года. Список будет отсортирован по времени создания платежей в порядке убывания.
Если результатов больше, чем задано в `limit`, список будет выводиться фрагментами. В этом случае в ответе
на запрос вернется фрагмент списка и параметр `next_cursor` с указателем на следующий фрагмент.

**Details:**
* Inherited From: [\YooKassa\Client](../classes/YooKassa-Client.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Request\Payments\PaymentsRequestInterface OR array OR null</code> | filter  |  |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\ApiException | Неожиданный код ошибки. |
| \YooKassa\Common\Exceptions\BadApiRequestException | Неправильный запрос. Чаще всего этот статус выдается из-за нарушения правил взаимодействия с API. |
| \YooKassa\Common\Exceptions\ForbiddenException | Секретный ключ или OAuth-токен верный, но не хватает прав для совершения операции. |
| \YooKassa\Common\Exceptions\InternalServerError | Технические неполадки на стороне ЮKassa. Результат обработки запроса неизвестен. Повторите запрос позднее с тем же ключом идемпотентности. |
| \YooKassa\Common\Exceptions\NotFoundException | Ресурс не найден. |
| \YooKassa\Common\Exceptions\ResponseProcessingException | Запрос был принят на обработку, но она не завершена. |
| \YooKassa\Common\Exceptions\TooManyRequestsException | Превышен лимит запросов в единицу времени. Попробуйте снизить интенсивность запросов. |
| \YooKassa\Common\Exceptions\UnauthorizedException | Неверное имя пользователя или пароль или невалидный OAuth-токен при аутентификации. |
| \YooKassa\Common\Exceptions\ExtensionNotFoundException | Требуемое PHP расширение не установлено. |
| \Exception |  |

**Returns:** \YooKassa\Request\Payments\PaymentsResponse|null - 
##### Examples:
Получить список платежей магазина с фильтрацией:

```php
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
}

var_dump($response);

```


<a name="method_getPayoutInfo" class="anchor"></a>
#### public getPayoutInfo() : \YooKassa\Model\PayoutInterface|null

```php
public getPayoutInfo(string $payoutId) : \YooKassa\Model\PayoutInterface|null
```

**Summary**

Получить информацию о выплате

**Description**

Запрос позволяет получить информацию о текущем состоянии выплаты по ее уникальному идентификатору.
Выдает объект выплаты {@link} в актуальном статусе.

**Details:**
* Inherited From: [\YooKassa\Client](../classes/YooKassa-Client.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | payoutId  | Идентификатор выплаты |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\ApiException | Неожиданный код ошибки. |
| \YooKassa\Common\Exceptions\BadApiRequestException | Неправильный запрос. Чаще всего этот статус выдается из-за нарушения правил взаимодействия с API. |
| \YooKassa\Common\Exceptions\ForbiddenException | Секретный ключ или OAuth-токен верный, но не хватает прав для совершения операции. |
| \YooKassa\Common\Exceptions\InternalServerError | Технические неполадки на стороне ЮKassa. Результат обработки запроса неизвестен. Повторите запрос позднее с тем же ключом идемпотентности. |
| \YooKassa\Common\Exceptions\NotFoundException | Ресурс не найден. |
| \YooKassa\Common\Exceptions\ResponseProcessingException | Запрос был принят на обработку, но она не завершена. |
| \YooKassa\Common\Exceptions\TooManyRequestsException | Превышен лимит запросов в единицу времени. Попробуйте снизить интенсивность запросов. |
| \YooKassa\Common\Exceptions\UnauthorizedException | Неверное имя пользователя или пароль или невалидный OAuth-токен при аутентификации. |
| \YooKassa\Common\Exceptions\ExtensionNotFoundException | Требуемое PHP расширение не установлено. |

**Returns:** \YooKassa\Model\PayoutInterface|null - Объект выплаты
##### Examples:
Получить информацию о выплате:

```php
$payoutId = 'po-285c0ab7-0003-5000-9000-0e1166498fda';
try {
    $response = $client->getPayoutInfo($payoutId);
} catch (\Exception $e) {
    $response = $e;
}

var_dump($response);

```


<a name="method_getReceiptInfo" class="anchor"></a>
#### public getReceiptInfo() : \YooKassa\Request\Receipts\ReceiptResponseInterface|null

```php
public getReceiptInfo(string $receiptId) : \YooKassa\Request\Receipts\ReceiptResponseInterface|null
```

**Summary**

Получить информацию о чеке

**Description**

Запрос позволяет получить информацию о текущем состоянии чека по его уникальному идентификатору.
Выдает объект чека {@link} в актуальном статусе.

**Details:**
* Inherited From: [\YooKassa\Client](../classes/YooKassa-Client.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | receiptId  | Идентификатор чека |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\ApiException | Неожиданный код ошибки. |
| \YooKassa\Common\Exceptions\BadApiRequestException | Неправильный запрос. Чаще всего этот статус выдается из-за нарушения правил взаимодействия с API. |
| \YooKassa\Common\Exceptions\ForbiddenException | Секретный ключ или OAuth-токен верный, но не хватает прав для совершения операции. |
| \YooKassa\Common\Exceptions\InternalServerError | Технические неполадки на стороне ЮKassa. Результат обработки запроса неизвестен. Повторите запрос позднее с тем же ключом идемпотентности. |
| \YooKassa\Common\Exceptions\NotFoundException | Ресурс не найден. |
| \YooKassa\Common\Exceptions\ResponseProcessingException | Запрос был принят на обработку, но она не завершена. |
| \YooKassa\Common\Exceptions\TooManyRequestsException | Превышен лимит запросов в единицу времени. Попробуйте снизить интенсивность запросов. |
| \YooKassa\Common\Exceptions\UnauthorizedException | Неверное имя пользователя или пароль или невалидный OAuth-токен при аутентификации. |
| \YooKassa\Common\Exceptions\ExtensionNotFoundException | Требуемое PHP расширение не установлено. |

**Returns:** \YooKassa\Request\Receipts\ReceiptResponseInterface|null - 
##### Examples:
Получить информацию о чеке:

```php
try {
    $response = $client->getReceiptInfo('ra-27ed1660-0001-0050-7a5e-10f80e0f0f29');
    echo $response->getStatus();
} catch (\Exception $e) {
    $response = $e;
}

var_dump($response);

```


<a name="method_getReceipts" class="anchor"></a>
#### public getReceipts() : \YooKassa\Request\Receipts\ReceiptsResponse

```php
public getReceipts(\YooKassa\Model\PaymentInterface|\YooKassa\Model\RefundInterface|array|null $filter = null) : \YooKassa\Request\Receipts\ReceiptsResponse
```

**Summary**

Получить список чеков магазина

**Description**

Запрос позволяет получить список чеков, отфильтрованный по заданным критериям.
Можно запросить чеки по конкретному платежу, чеки по конкретному возврату или все чеки магазина.
В ответ на запрос вернется список чеков с учетом переданных параметров. В списке будет информация о чеках,
созданных за последние 3 года. Список будет отсортирован по времени создания чеков в порядке убывания.
Если результатов больше, чем задано в `limit`, список будет выводиться фрагментами.
В этом случае в ответе на запрос вернется фрагмент списка и параметр `next_cursor` с указателем на следующий фрагмент.

**Details:**
* Inherited From: [\YooKassa\Client](../classes/YooKassa-Client.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\PaymentInterface OR \YooKassa\Model\RefundInterface OR array OR null</code> | filter  |  |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\ApiException | Неожиданный код ошибки. |
| \YooKassa\Common\Exceptions\BadApiRequestException | Неправильный запрос. Чаще всего этот статус выдается из-за нарушения правил взаимодействия с API. |
| \YooKassa\Common\Exceptions\ForbiddenException | Секретный ключ или OAuth-токен верный, но не хватает прав для совершения операции. |
| \YooKassa\Common\Exceptions\InternalServerError | Технические неполадки на стороне ЮKassa. Результат обработки запроса неизвестен. Повторите запрос позднее с тем же ключом идемпотентности. |
| \YooKassa\Common\Exceptions\NotFoundException | Ресурс не найден. |
| \YooKassa\Common\Exceptions\ResponseProcessingException | Запрос был принят на обработку, но она не завершена. |
| \YooKassa\Common\Exceptions\TooManyRequestsException | Превышен лимит запросов в единицу времени. Попробуйте снизить интенсивность запросов. |
| \YooKassa\Common\Exceptions\UnauthorizedException | Неверное имя пользователя или пароль или невалидный OAuth-токен при аутентификации. |
| \YooKassa\Common\Exceptions\ExtensionNotFoundException | Требуемое PHP расширение не установлено. |
| \Exception |  |

**Returns:** \YooKassa\Request\Receipts\ReceiptsResponse - 
##### Examples:
Получить список чеков магазина с фильтрацией:

```php
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
}

var_dump($response);

```


<a name="method_getRefundInfo" class="anchor"></a>
#### public getRefundInfo() : \YooKassa\Request\Refunds\RefundResponse|null

```php
public getRefundInfo(string $refundId) : \YooKassa\Request\Refunds\RefundResponse|null
```

**Summary**

Получить информацию о возврате

**Description**

Запрос позволяет получить информацию о текущем состоянии возврата по его уникальному идентификатору.
В ответ на запрос придет объект возврата {@link} в актуальном статусе.

**Details:**
* Inherited From: [\YooKassa\Client](../classes/YooKassa-Client.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | refundId  | Идентификатор возврата |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\ApiException | Неожиданный код ошибки. |
| \YooKassa\Common\Exceptions\BadApiRequestException | Неправильный запрос. Чаще всего этот статус выдается из-за нарушения правил взаимодействия с API. |
| \YooKassa\Common\Exceptions\ForbiddenException | Секретный ключ или OAuth-токен верный, но не хватает прав для совершения операции. |
| \YooKassa\Common\Exceptions\InternalServerError | Технические неполадки на стороне ЮKassa. Результат обработки запроса неизвестен. Повторите запрос позднее с тем же ключом идемпотентности. |
| \YooKassa\Common\Exceptions\NotFoundException | Ресурс не найден. |
| \YooKassa\Common\Exceptions\ResponseProcessingException | Запрос был принят на обработку, но она не завершена. |
| \YooKassa\Common\Exceptions\TooManyRequestsException | Превышен лимит запросов в единицу времени. Попробуйте снизить интенсивность запросов. |
| \YooKassa\Common\Exceptions\UnauthorizedException | Неверное имя пользователя или пароль или невалидный OAuth-токен при аутентификации. |
| \YooKassa\Common\Exceptions\ExtensionNotFoundException | Требуемое PHP расширение не установлено. |
| \Exception |  |

**Returns:** \YooKassa\Request\Refunds\RefundResponse|null - 
##### Examples:
Получить информацию о возврате:

```php
try {
    $response = $client->getRefundInfo('216749f7-0016-50be-b000-078d43a63ae4');
    echo $response->getStatus();
} catch (\Exception $e) {
    $response = $e;
}

var_dump($response);

```


<a name="method_getRefunds" class="anchor"></a>
#### public getRefunds() : \YooKassa\Request\Refunds\RefundsResponse|null

```php
public getRefunds(\YooKassa\Request\Refunds\RefundsRequestInterface|array|null $filter = null) : \YooKassa\Request\Refunds\RefundsResponse|null
```

**Summary**

Получить список возвратов платежей

**Description**

Запрос позволяет получить список возвратов, отфильтрованный по заданным критериям.
В ответ на запрос вернется список возвратов с учетом переданных параметров. В списке будет информация о возвратах,
созданных за последние 3 года. Список будет отсортирован по времени создания возвратов в порядке убывания.
Если результатов больше, чем задано в `limit`, список будет выводиться фрагментами. В этом случае в ответе
на запрос вернется фрагмент списка и параметр `next_cursor` с указателем на следующий фрагмент.

**Details:**
* Inherited From: [\YooKassa\Client](../classes/YooKassa-Client.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Request\Refunds\RefundsRequestInterface OR array OR null</code> | filter  |  |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\ApiException | Неожиданный код ошибки. |
| \YooKassa\Common\Exceptions\BadApiRequestException | Неправильный запрос. Чаще всего этот статус выдается из-за нарушения правил взаимодействия с API. |
| \YooKassa\Common\Exceptions\ForbiddenException | Секретный ключ или OAuth-токен верный, но не хватает прав для совершения операции. |
| \YooKassa\Common\Exceptions\InternalServerError | Технические неполадки на стороне ЮKassa. Результат обработки запроса неизвестен. Повторите запрос позднее с тем же ключом идемпотентности. |
| \YooKassa\Common\Exceptions\NotFoundException | Ресурс не найден. |
| \YooKassa\Common\Exceptions\ResponseProcessingException | Запрос был принят на обработку, но она не завершена. |
| \YooKassa\Common\Exceptions\TooManyRequestsException | Превышен лимит запросов в единицу времени. Попробуйте снизить интенсивность запросов. |
| \YooKassa\Common\Exceptions\UnauthorizedException | Неверное имя пользователя или пароль или невалидный OAuth-токен при аутентификации. |
| \YooKassa\Common\Exceptions\ExtensionNotFoundException | Требуемое PHP расширение не установлено. |
| \Exception |  |

**Returns:** \YooKassa\Request\Refunds\RefundsResponse|null - 
##### Examples:
Получить список возвратов платежей магазина с фильтрацией:

```php
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
}

var_dump($response);

```


<a name="method_getWebhooks" class="anchor"></a>
#### public getWebhooks() : \YooKassa\Request\Webhook\WebhookListResponse|null

```php
public getWebhooks() : \YooKassa\Request\Webhook\WebhookListResponse|null
```

**Summary**

Список созданных Webhook

**Description**

Запрос позволяет узнать, какие webhook есть для переданного OAuth-токена.

**Details:**
* Inherited From: [\YooKassa\Client](../classes/YooKassa-Client.md)

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\ApiException | Неожиданный код ошибки. |
| \YooKassa\Common\Exceptions\BadApiRequestException | Неправильный запрос. Чаще всего этот статус выдается из-за нарушения правил взаимодействия с API. |
| \YooKassa\Common\Exceptions\ForbiddenException | Секретный ключ или OAuth-токен верный, но не хватает прав для совершения операции. |
| \YooKassa\Common\Exceptions\InternalServerError | Технические неполадки на стороне ЮKassa. Результат обработки запроса неизвестен. Повторите запрос позднее с тем же ключом идемпотентности. |
| \YooKassa\Common\Exceptions\NotFoundException | Ресурс не найден. |
| \YooKassa\Common\Exceptions\ResponseProcessingException | Запрос был принят на обработку, но она не завершена. |
| \YooKassa\Common\Exceptions\TooManyRequestsException | Превышен лимит запросов в единицу времени. Попробуйте снизить интенсивность запросов. |
| \YooKassa\Common\Exceptions\UnauthorizedException | Неверное имя пользователя или пароль или невалидный OAuth-токен при аутентификации. |
| \YooKassa\Common\Exceptions\ExtensionNotFoundException | Требуемое PHP расширение не установлено. |
| \YooKassa\Common\Exceptions\AuthorizeException | Ошибка авторизации. Не установлен заголовок. |

**Returns:** \YooKassa\Request\Webhook\WebhookListResponse|null - 
##### Examples:
Список созданных Webhook:

```php
// В данном примере мы устанавливаем вебхуки для succeeded и canceled уведомлений.
// А так же проверяем, не установлены ли уже вебхуки. И если установлены на неверный адрес, удаляем.
try {
    $webHookUrl = 'https://merchant-site.ru/payment-notification';
    $needWebHookList = array(
        \YooKassa\Model\NotificationEventType::PAYMENT_SUCCEEDED,
        \YooKassa\Model\NotificationEventType::PAYMENT_CANCELED
    );
    $currentWebHookList = $client->getWebhooks()->getItems();
    foreach ($needWebHookList as $event) {
        $hookIsSet = false;
        foreach ($currentWebHookList as $webHook) {
            if ($webHook->getEvent() !== $event) {
                continue;
            }
            if ($webHook->getUrl() !== $webHookUrl) {
                $client->removeWebhook($webHook->getId());
            } else {
                $hookIsSet = true;
            }
            break;
        }
        if (!$hookIsSet) {
            $client->addWebhook(array('event' => $event, 'url' => $webHookUrl));
        }
    }
    $response = 'SUCCESS';
} catch (\Exception $e) {
    $response = $e;
}

var_dump($response);

```


<a name="method_isNotificationIPTrusted" class="anchor"></a>
#### public isNotificationIPTrusted() : bool

```php
public isNotificationIPTrusted(string $ip) : bool
```

**Summary**

Метод проверяет, находится ли IP адрес среди IP адресов Юkassa, с которых отправляются уведомления

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | ip  | - IPv4 или IPv6 адрес webhook уведомления |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \Exception | - исключение будет выброшено, если будет передан IP адрес неверного формата |

**Returns:** bool - 


<a name="method_me" class="anchor"></a>
#### public me() : array|null

```php
public me(array|string|int|null $filter = null) : array|null
```

**Summary**

Информация о магазине

**Description**

Запрос позволяет получить информацию о магазине для переданного OAuth-токена.

**Details:**
* Inherited From: [\YooKassa\Client](../classes/YooKassa-Client.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array OR string OR int OR null</code> | filter  | Параметры поиска. В настоящее время доступен только `on_behalf_of` |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\ApiException | Неожиданный код ошибки. |
| \YooKassa\Common\Exceptions\BadApiRequestException | Неправильный запрос. Чаще всего этот статус выдается из-за нарушения правил взаимодействия с API. |
| \YooKassa\Common\Exceptions\ForbiddenException | Секретный ключ или OAuth-токен верный, но не хватает прав для совершения операции. |
| \YooKassa\Common\Exceptions\InternalServerError | Технические неполадки на стороне ЮKassa. Результат обработки запроса неизвестен. Повторите запрос позднее с тем же ключом идемпотентности. |
| \YooKassa\Common\Exceptions\NotFoundException | Ресурс не найден. |
| \YooKassa\Common\Exceptions\ResponseProcessingException | Запрос был принят на обработку, но она не завершена. |
| \YooKassa\Common\Exceptions\TooManyRequestsException | Превышен лимит запросов в единицу времени. Попробуйте снизить интенсивность запросов. |
| \YooKassa\Common\Exceptions\UnauthorizedException | Неверное имя пользователя или пароль или невалидный OAuth-токен при аутентификации. |
| \YooKassa\Common\Exceptions\ExtensionNotFoundException | Требуемое PHP расширение не установлено. |
| \YooKassa\Common\Exceptions\AuthorizeException | Ошибка авторизации. Не установлен заголовок. |

**Returns:** array|null - Массив с информацией о магазине
##### Examples:
Информация о магазине:

```php
try {
    $response = $client->me();
} catch (\Exception $e) {
    $response = $e;
}

var_dump($response);

```


<a name="method_removeWebhook" class="anchor"></a>
#### public removeWebhook() : \YooKassa\Model\Webhook\Webhook|null

```php
public removeWebhook(string $webhookId, string|null $idempotencyKey = null) : \YooKassa\Model\Webhook\Webhook|null
```

**Summary**

Удаление Webhook

**Description**

Запрос позволяет отписаться от уведомлений о событии для переданного OAuth-токена.
Чтобы удалить webhook, вам нужно передать в запросе его идентификатор.

**Details:**
* Inherited From: [\YooKassa\Client](../classes/YooKassa-Client.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | webhookId  | Идентификатор Webhook |
| <code lang="php">string OR null</code> | idempotencyKey  | [Ключ идемпотентности](https://yookassa.ru/developers/using-api/basics?lang=php#idempotence) |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\ApiException | Неожиданный код ошибки. |
| \YooKassa\Common\Exceptions\BadApiRequestException | Неправильный запрос. Чаще всего этот статус выдается из-за нарушения правил взаимодействия с API. |
| \YooKassa\Common\Exceptions\ForbiddenException | Секретный ключ или OAuth-токен верный, но не хватает прав для совершения операции. |
| \YooKassa\Common\Exceptions\InternalServerError | Технические неполадки на стороне ЮKassa. Результат обработки запроса неизвестен. Повторите запрос позднее с тем же ключом идемпотентности. |
| \YooKassa\Common\Exceptions\NotFoundException | Ресурс не найден. |
| \YooKassa\Common\Exceptions\ResponseProcessingException | Запрос был принят на обработку, но она не завершена. |
| \YooKassa\Common\Exceptions\TooManyRequestsException | Превышен лимит запросов в единицу времени. Попробуйте снизить интенсивность запросов. |
| \YooKassa\Common\Exceptions\UnauthorizedException | Неверное имя пользователя или пароль или невалидный OAuth-токен при аутентификации. |
| \YooKassa\Common\Exceptions\ExtensionNotFoundException | Требуемое PHP расширение не установлено. |
| \Exception |  |

**Returns:** \YooKassa\Model\Webhook\Webhook|null - 
##### Examples:
Удаление Webhook:

```php
// В данном примере мы устанавливаем вебхуки для succeeded и canceled уведомлений.
// А так же проверяем, не установлены ли уже вебхуки. И если установлены на неверный адрес, удаляем.
try {
    $webHookUrl = 'https://merchant-site.ru/payment-notification';
    $needWebHookList = array(
        \YooKassa\Model\NotificationEventType::PAYMENT_SUCCEEDED,
        \YooKassa\Model\NotificationEventType::PAYMENT_CANCELED
    );
    $currentWebHookList = $client->getWebhooks()->getItems();
    foreach ($needWebHookList as $event) {
        $hookIsSet = false;
        foreach ($currentWebHookList as $webHook) {
            if ($webHook->getEvent() !== $event) {
                continue;
            }
            if ($webHook->getUrl() !== $webHookUrl) {
                $client->removeWebhook($webHook->getId());
            } else {
                $hookIsSet = true;
            }
            break;
        }
        if (!$hookIsSet) {
            $client->addWebhook(array('event' => $event, 'url' => $webHookUrl));
        }
    }
    $response = 'SUCCESS';
} catch (\Exception $e) {
    $response = $e;
}

var_dump($response);

```


<a name="method_setApiClient" class="anchor"></a>
#### public setApiClient() : $this

```php
public setApiClient(\YooKassa\Client\ApiClientInterface $apiClient) : $this
```

**Summary**

Устанавливает CURL клиента для работы с API

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Client\ApiClientInterface</code> | apiClient  |  |

**Returns:** $this - 


<a name="method_setAuth" class="anchor"></a>
#### public setAuth() : $this

```php
public setAuth(string $login, string $password) : $this
```

**Summary**

Устанавливает авторизацию по логин/паролю

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | login  |  |
| <code lang="php">string</code> | password  |  |

**Returns:** $this - 
##### Examples:
Пример авторизации:

```php
$client->setAuth('xxxxxx', 'test_XXXXXXX');

```


<a name="method_setAuthToken" class="anchor"></a>
#### public setAuthToken() : $this

```php
public setAuthToken(string $token) : $this
```

**Summary**

Устанавливает авторизацию по Oauth-токену

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | token  |  |

**Returns:** $this - 
##### Examples:
Пример авторизации:

```php
$client->setAuthToken('token_XXXXXXX');

```


<a name="method_setConfig" class="anchor"></a>
#### public setConfig() : mixed

```php
public setConfig(array $config) : mixed
```

**Summary**

Устанавливает настройки клиента

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array</code> | config  |  |

**Returns:** mixed - 


<a name="method_setLogger" class="anchor"></a>
#### public setLogger() : mixed

```php
public setLogger(null|callable|object|\Psr\Log\LoggerInterface $value) : mixed
```

**Summary**

Устанавливает логгер приложения

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">null OR callable OR object OR \Psr\Log\LoggerInterface</code> | value  | Инстанс логгера |

**Returns:** mixed - 


<a name="method_setMaxRequestAttempts" class="anchor"></a>
#### public setMaxRequestAttempts() : $this

```php
public setMaxRequestAttempts(int $attempts) : $this
```

**Summary**

Установка значения количества попыток повторных запросов при статусе 202

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">int</code> | attempts  |  |

**Returns:** $this - 


<a name="method_setRetryTimeout" class="anchor"></a>
#### public setRetryTimeout() : $this

```php
public setRetryTimeout(int $timeout) : $this
```

**Summary**

Установка значения задержки между повторными запросами

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">int</code> | timeout  |  |

**Returns:** $this - 


<a name="method_decodeData" class="anchor"></a>
#### protected decodeData() : array

```php
protected decodeData(\YooKassa\Common\ResponseObject $response) : array
```

**Summary**

Декодирует JSON строку в массив данных

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Common\ResponseObject</code> | response  |  |

**Returns:** array - 


<a name="method_delay" class="anchor"></a>
#### protected delay() : mixed

```php
protected delay(\YooKassa\Common\ResponseObject $response) : mixed
```

**Summary**

Задержка между повторными запросами

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Common\ResponseObject</code> | response  |  |

**Returns:** mixed - 


<a name="method_encodeData" class="anchor"></a>
#### protected encodeData() : string

```php
protected encodeData(array $serializedData) : string
```

**Summary**

Кодирует массив данных в JSON строку

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array</code> | serializedData  |  |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \Exception |  |

**Returns:** string - 


<a name="method_execute" class="anchor"></a>
#### protected execute() : mixed|\YooKassa\Common\ResponseObject

```php
protected execute(string $path, string $method, array $queryParams, null $httpBody = null, array $headers = array()) : mixed|\YooKassa\Common\ResponseObject
```

**Summary**

Выполнение запроса и обработка 202 статуса

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | path  |  |
| <code lang="php">string</code> | method  |  |
| <code lang="php">array</code> | queryParams  |  |
| <code lang="php">null</code> | httpBody  |  |
| <code lang="php">array</code> | headers  |  |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\ApiException |  |
| \YooKassa\Common\Exceptions\AuthorizeException |  |
| \YooKassa\Common\Exceptions\ApiConnectionException |  |
| \YooKassa\Common\Exceptions\ExtensionNotFoundException |  |

**Returns:** mixed|\YooKassa\Common\ResponseObject - 


<a name="method_handleError" class="anchor"></a>
#### protected handleError() : mixed

```php
protected handleError(\YooKassa\Common\ResponseObject $response) : mixed
```

**Summary**

Выбрасывает исключение по коду ошибки

**Details:**
* Inherited From: [\YooKassa\Client\BaseClient](../classes/YooKassa-Client-BaseClient.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Common\ResponseObject</code> | response  |  |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\ApiException |  |
| \YooKassa\Common\Exceptions\BadApiRequestException |  |
| \YooKassa\Common\Exceptions\ForbiddenException |  |
| \YooKassa\Common\Exceptions\InternalServerError |  |
| \YooKassa\Common\Exceptions\NotFoundException |  |
| \YooKassa\Common\Exceptions\ResponseProcessingException |  |
| \YooKassa\Common\Exceptions\TooManyRequestsException |  |
| \YooKassa\Common\Exceptions\UnauthorizedException |  |

**Returns:** mixed - 



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