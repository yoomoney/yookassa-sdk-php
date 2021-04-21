# YooKassa API PHP Client Library

[![Build Status](https://travis-ci.org/yoomoney/yookassa-sdk-php.svg?branch=master)](https://travis-ci.org/yoomoney/yookassa-sdk-php)
[![Latest Stable Version](https://poser.pugx.org/yoomoney/yookassa-sdk-php/v/stable)](https://packagist.org/packages/yoomoney/yookassa-sdk-php)
[![Total Downloads](https://poser.pugx.org/yoomoney/yookassa-sdk-php/downloads)](https://packagist.org/packages/yoomoney/yookassa-sdk-php)
[![Monthly Downloads](https://poser.pugx.org/yoomoney/yookassa-sdk-php/d/monthly)](https://packagist.org/packages/yoomoney/yookassa-sdk-php)
[![License](https://poser.pugx.org/yoomoney/yookassa-sdk-php/license)](https://packagist.org/packages/yoomoney/yookassa-sdk-php)

Russian | [English](https://github.com/yoomoney/yookassa-sdk-php/blob/master/README.en.md)

Клиент для работы с платежами по [API ЮKassa](https://yookassa.ru/developers/api)
Подходит тем, у кого способ подключения к ЮKassa называется API.

[Документация по данному SDK](docs/home.md).

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
3. Вызовите нужный метод API. 
   
   [Подробнее в документации к API ЮKassa](https://yookassa.ru/developers/api#create_payment).
   
   [Подробнее в документации к SDK ЮKassa](https://github.com/yoomoney/yookassa-sdk-php/docs/home.md).

## Примеры использования SDK

#### [Настройки SDK API ЮKassa](https://github.com/yoomoney/yookassa-sdk-php/docs/examples/01-configuration.md)
* [Аутентификация](https://github.com/yoomoney/yookassa-sdk-php/docs/examples/01-configuration.md#Аутентификация)
* [Статистические данные об используемом окружении](https://github.com/yoomoney/yookassa-sdk-php/docs/examples/01-configuration.md#Статистические-данные-об-используемом-окружении)
* [Получение информации о магазине](https://github.com/yoomoney/yookassa-sdk-php/docs/examples/01-configuration.md#Получение-информации-о-магазине)
* [Работа с Webhook](https://github.com/yoomoney/yookassa-sdk-php/docs/examples/01-configuration.md#Работа-с-Webhook)
* [Входящие уведомления](https://github.com/yoomoney/yookassa-sdk-php/docs/examples/01-configuration.md#Входящие-уведомления)

#### [Работа с платежами](https://github.com/yoomoney/yookassa-sdk-php/docs/examples/02-payments.md)
* [Запрос на создание платежа](https://github.com/yoomoney/yookassa-sdk-php/docs/examples/02-payments.md#Запрос-на-создание-платежа)
* [Запрос на создание платежа через билдер](https://github.com/yoomoney/yookassa-sdk-php/docs/examples/02-payments.md#Запрос-на-создание-платежа-через-билдер)
* [Запрос на частичное подтверждение платежа](https://github.com/yoomoney/yookassa-sdk-php/docs/examples/02-payments.md#Запрос-на-частичное-подтверждение-платежа)
* [Запрос на отмену незавершенного платежа](https://github.com/yoomoney/yookassa-sdk-php/docs/examples/02-payments.md#Запрос-на-отмену-незавершенного-платежа)
* [Получить информацию о платеже](https://github.com/yoomoney/yookassa-sdk-php/docs/examples/02-payments.md#Получить-информацию-о-платеже)
* [Получить список платежей с фильтрацией](https://github.com/yoomoney/yookassa-sdk-php/docs/examples/02-payments.md#Получить-список-платежей-с-фильтрацией)

#### [Работа с возвратами](https://github.com/yoomoney/yookassa-sdk-php/docs/examples/03-refunds.md)
* [Запрос на создание возврата](https://github.com/yoomoney/yookassa-sdk-php/docs/examples/03-refunds.md#Запрос-на-создание-возврата)
* [Запрос на создание возврата через билдер](https://github.com/yoomoney/yookassa-sdk-php/docs/examples/03-refunds.md#Запрос-на-создание-возврата-через-билдер)
* [Получить информацию о возврате](https://github.com/yoomoney/yookassa-sdk-php/docs/examples/03-refunds.md#Получить-информацию-о-возврате)
* [Получить список возвратов с фильтрацией](https://github.com/yoomoney/yookassa-sdk-php/docs/examples/03-refunds.md#Получить-список-возвратов-с-фильтрацией)

#### [Работа с чеками](https://github.com/yoomoney/yookassa-sdk-php/docs/examples/04-receipts.md)
* [Запрос на создание чека](https://github.com/yoomoney/yookassa-sdk-php/docs/examples/04-receipts.md#Запрос-на-создание-чека)
* [Запрос на создание чека через билдер](https://github.com/yoomoney/yookassa-sdk-php/docs/examples/04-receipts.md#Запрос-на-создание-чека-через-билдер)
* [Получить информацию о чеке](https://github.com/yoomoney/yookassa-sdk-php/docs/examples/04-receipts.md#Получить-информацию-о-чеке)
* [Получить список чеков с фильтрацией](https://github.com/yoomoney/yookassa-sdk-php/docs/examples/04-receipts.md#Получить-список-чеков-с-фильтрацией)
