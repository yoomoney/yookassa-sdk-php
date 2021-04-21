# The YooKassa API PHP Client Library

[![Build Status](https://travis-ci.org/yoomoney/yookassa-sdk-php.svg?branch=master)](https://travis-ci.org/yoomoney/yookassa-sdk-php)
[![Latest Stable Version](https://poser.pugx.org/yoomoney/yookassa-sdk-php/v/stable)](https://packagist.org/packages/yoomoney/yookassa-sdk-php)
[![Total Downloads](https://poser.pugx.org/yoomoney/yookassa-sdk-php/downloads)](https://packagist.org/packages/yoomoney/yookassa-sdk-php)
[![Monthly Downloads](https://poser.pugx.org/yoomoney/yookassa-sdk-php/d/monthly)](https://packagist.org/packages/yoomoney/yookassa-sdk-php)
[![License](https://poser.pugx.org/yoomoney/yookassa-sdk-php/license)](https://packagist.org/packages/yoomoney/yookassa-sdk-php)

[Russian](https://github.com/yoomoney/yookassa-sdk-php/blob/master/README.md) | English

This product is used for managing payments under [The YooKassa API](https://yookassa.ru/en/developers/api)
For usage by those who implemented YooKassa using the API method.

## Requirements
PHP 5.3.2 (or later version) with the libcurl library

## Installation
### Under console using Composer

1. Install Composer, a package manager.
2. In the console, run the following command:
```bash
composer require yoomoney/yookassa-sdk-php
```

### Do the following for the composer.json file of your project:
1. Add a string `"yoomoney/yookassa-sdk-php": "^2.0"` to the list of dependencies of your project in the composer.json file
```
...
   "require": {
        "php": ">=5.3.2",
        "yoomoney/yookassa-sdk-php": "^2.0"
...
```
2. Refresh the project's dependencies. In the console, navigate to the catalog with composer.json and run the following command:
```bash
composer update
```
3. Adjust your project's code to activate automated uploading of files for our product:
```php
require __DIR__ . '/vendor/autoload.php';
```

### Manually

1. Download [the YooKassa API PHP Client Library archive](https://github.com/yoomoney/yookassa-sdk-php/archive/master.zip), extract it and copy the lib catalog to the required place of your project.
2. Adjust your project's code to activate automated uploading of files for our product:
```php
require __DIR__ . '/lib/autoload.php'; 
```

## Commencing work

1. Import required classes
```php
use YooKassa\Client;
```
2. Create a sample of a client object, then set the store's identifier and secret key (you can get them under your YooKassa's Merchant Profile). [Issuing a secret key](https://yookassa.ru/docs/support/merchant/payments/implement/keys?lang=en)
```php
$client = new Client();
$client->setAuth('shopId', 'secretKey');
```
3. Call the required API method. 
   
   [More details in our documentation for the YooKassa API](https://yookassa.ru/en/developers/api#create_payment).

   [More details in our documentation for the YooKassa SDK](https://github.com/yoomoney/yookassa-sdk-php/blob/master/docs/readme.md).

## Examples of using the API SDK

#### [YooKassa SDK Settings](https://github.com/yoomoney/yookassa-sdk-php/blob/master/docs/examples/01-configuration.md)
* [Authentication](https://github.com/yoomoney/yookassa-sdk-php/blob/master/docs/examples/01-configuration.md#Аутентификация)
* [Statistics about the environment used](https://github.com/yoomoney/yookassa-sdk-php/blob/master/docs/examples/01-configuration.md#Статистические-данные-об-используемом-окружении)
* [Getting information about the store](https://github.com/yoomoney/yookassa-sdk-php/blob/master/docs/examples/01-configuration.md#Получение-информации-о-магазине)
* [Working with Webhook](https://github.com/yoomoney/yookassa-sdk-php/blob/master/docs/examples/01-configuration.md#Работа-с-Webhook)
* [Notifications](https://github.com/yoomoney/yookassa-sdk-php/blob/master/docs/examples/01-configuration.md#Входящие-уведомления)

#### [Working with payments](https://github.com/yoomoney/yookassa-sdk-php/blob/master/docs/examples/02-payments.md)
* [Request to create a payment](https://github.com/yoomoney/yookassa-sdk-php/blob/master/docs/examples/02-payments.md#Запрос-на-создание-платежа)
* [Request to create a payment via the builder](https://github.com/yoomoney/yookassa-sdk-php/blob/master/docs/examples/02-payments.md#Запрос-на-создание-платежа-через-билдер)
* [Request for partial payment confirmation](https://github.com/yoomoney/yookassa-sdk-php/blob/master/docs/examples/02-payments.md#Запрос-на-частичное-подтверждение-платежа)
* [Request to cancel an incomplete payment](https://github.com/yoomoney/yookassa-sdk-php/blob/master/docs/examples/02-payments.md#Запрос-на-отмену-незавершенного-платежа)
* [Get payment information](https://github.com/yoomoney/yookassa-sdk-php/blob/master/docs/examples/02-payments.md#Получить-информацию-о-платеже)
* [Get a list of payments with filtering](https://github.com/yoomoney/yookassa-sdk-php/blob/master/docs/examples/02-payments.md#Получить-список-платежей-с-фильтрацией)

#### [Working with refunds](https://github.com/yoomoney/yookassa-sdk-php/blob/master/docs/examples/03-refunds.md)
* [Request to create a refund](https://github.com/yoomoney/yookassa-sdk-php/blob/master/docs/examples/03-refunds.md#Запрос-на-создание-возврата)
* [Request to create a refund via the builder](https://github.com/yoomoney/yookassa-sdk-php/blob/master/docs/examples/03-refunds.md#Запрос-на-создание-возврата-через-билдер)
* [Get refund information](https://github.com/yoomoney/yookassa-sdk-php/blob/master/docs/examples/03-refunds.md#Получить-информацию-о-возврате)
* [Get a list of returns with filtering](https://github.com/yoomoney/yookassa-sdk-php/blob/master/docs/examples/03-refunds.md#Получить-список-возвратов-с-фильтрацией)

#### [Working with receipts](https://github.com/yoomoney/yookassa-sdk-php/blob/master/docs/examples/04-receipts.md)
* [Request to create a receipt](https://github.com/yoomoney/yookassa-sdk-php/blob/master/docs/examples/04-receipts.md#Запрос-на-создание-чека)
* [Request to create a receipt via the builder](https://github.com/yoomoney/yookassa-sdk-php/blob/master/docs/examples/04-receipts.md#Запрос-на-создание-чека-через-билдер)
* [Get information about the receipt](https://github.com/yoomoney/yookassa-sdk-php/blob/master/docs/examples/04-receipts.md#Получить-информацию-о-чеке)
* [Get a list of receipts with filtering](https://github.com/yoomoney/yookassa-sdk-php/blob/master/docs/examples/04-receipts.md#Получить-список-чеков-с-фильтрацией)
