# YooKassa API PHP Client Library

[![Build Status](https://travis-ci.org/yoomoney/yookassa-sdk-php.svg?branch=master)](https://travis-ci.org/yoomoney/yookassa-sdk-php)
[![Latest Stable Version](https://poser.pugx.org/yoomoney/yookassa-sdk-php/v/stable)](https://packagist.org/packages/yoomoney/yookassa-sdk-php)
[![Total Downloads](https://poser.pugx.org/yoomoney/yookassa-sdk-php/downloads)](https://packagist.org/packages/yoomoney/yookassa-sdk-php)
[![Monthly Downloads](https://poser.pugx.org/yoomoney/yookassa-sdk-php/d/monthly)](https://packagist.org/packages/yoomoney/yookassa-sdk-php)
[![License](https://poser.pugx.org/yoomoney/yookassa-sdk-php/license)](https://packagist.org/packages/yoomoney/yookassa-sdk-php)

Russian | [English](https://github.com/yoomoney/yookassa-sdk-php/blob/master/README.en.md)

Клиент для работы с платежами по [API ЮKassa](https://yookassa.ru/developers/api)
Подходит тем, у кого способ подключения к ЮKassa называется API.

## Требования
PHP 5.3.2 (и выше) с расширением libcurl

## Установка
### В консоли с помощью Composer

1. Установите менеджер пакетов Composer.
2. В консоли выполните команду
```bash
composer require yoomoney/yookassa-sdk-php
```

### В файле composer.json своего проекта
1. Добавьте строку `"yoomoney/yookassa-sdk-php": "^2.0"` в список зависимостей вашего проекта в файле composer.json
```
...
    "require": {
        "php": ">=5.3.2",
        "yoomoney/yookassa-sdk-php": "^2.0"
...
```
2. Обновите зависимости проекта. В консоли перейдите в каталог, где лежит composer.json, и выполните команду:
```bash
composer update
```
3. В коде вашего проекта подключите автозагрузку файлов нашего клиента:
```php
require __DIR__ . '/vendor/autoload.php';
```

### Вручную

1. Скачайте [архив YooKassa API PHP Client Library](https://github.com/yoomoney/yookassa-sdk-php/archive/master.zip), распакуйте его и скопируйте каталог lib в нужное место в вашем проекте.
2. В коде вашего проекта подключите автозагрузку файлов нашего клиента:
```php
require __DIR__ . '/lib/autoload.php'; 
```

## Начало работы

1. Импортируйте нужные классы
```php
use YooKassa\Client;
```
2. Создайте экземпляр объекта клиента и задайте идентификатор магазина и секретный ключ (их можно получить в личном кабинете ЮKassa). [Как выпустить секретный ключ](https://yookassa.ru/docs/support/merchant/payments/implement/keys)
```php
$client = new Client();
$client->setAuth('shopId', 'secretKey');
```
3. Вызовите нужный метод API. [Подробнее в документации к API ЮKassa](https://yookassa.ru/developers/api#create_payment)
