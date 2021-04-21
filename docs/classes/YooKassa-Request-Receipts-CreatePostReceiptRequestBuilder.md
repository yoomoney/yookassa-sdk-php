# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder
### Namespace: [\YooKassa\Request\Receipts](../namespaces/yookassa-request-receipts.md)
---
**Summary:**

Класс билдера объектов запрсов к API на создание чека

---
### Examples
Пример использования билдера

```php
try {
    $receiptBuilder = \YooKassa\Request\Receipts\CreatePostReceiptRequest::builder();
    $receiptBuilder->setType(\YooKassa\Model\ReceiptType::PAYMENT)
        ->setObjectId('24b94598-000f-5000-9000-1b68e7b15f3f')
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
                'payment_mode' => 'full_payment',
                'payment_subject' => 'commodity',
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
        'payment_mode' => 'full_payment',
        'payment_subject' => 'commodity',
    )));

    $idempotenceKey = uniqid('', true);
    $response = $client->createReceipt($request, $idempotenceKey);
} catch (Exception $e) {
    $response = $e;
}

var_dump($response);

```
---
### Constants
* No constants found
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$amount](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md#property_amount) |  | Сумма чека |
| protected | [$currentObject](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md#property_currentObject) |  | Собираемый объект запроса |
| protected | [$customer](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md#property_customer) |  | Информация о плательщике |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Common-AbstractRequestBuilder.md#method___construct) |  | Конструктор, инициализирует пустой запрос, который в будущем начнём собирать |
| public | [addItem()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md#method_addItem) |  | Добавляет товар в чек |
| public | [build()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md#method_build) |  | Строит и возвращает объект запроса для отправки в API ЮKassa |
| public | [setAmount()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md#method_setAmount) |  | Устанавливает сумму |
| public | [setCurrency()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md#method_setCurrency) |  | Устанавливает валюту в которой будет происходить подтверждение оплаты заказа |
| public | [setCustomer()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md#method_setCustomer) |  | Устанавливает информацию о пользователе |
| public | [setItems()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md#method_setItems) |  | Устанавливает список товаров чека |
| public | [setObjectId()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md#method_setObjectId) |  | Устанавливает Id объекта чека |
| public | [setOnBehalfOf()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md#method_setOnBehalfOf) |  | Устанавливает идентификатор магазина, от имени которого нужно отправить чек. |
| public | [setOptions()](../classes/YooKassa-Common-AbstractRequestBuilder.md#method_setOptions) |  | Устанавливает свойства запроса из массива |
| public | [setSend()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md#method_setSend) |  | Устанавливает признак отложенной отправки чека. |
| public | [setSettlements()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md#method_setSettlements) |  | Устанавливает массив оплат, обеспечивающих выдачу товара. |
| public | [setTaxSystemCode()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md#method_setTaxSystemCode) |  | Устанавливает код системы налогообложения |
| public | [setType()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md#method_setType) |  | Устанавливает тип чека в онлайн-кассе |
| protected | [initCurrentObject()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md#method_initCurrentObject) |  | Инициализирует объект запроса, который в дальнейшем будет собираться билдером |
---
### Details
* File: [lib/Request/Receipts/CreatePostReceiptRequestBuilder.php](../../lib/Request/Receipts/CreatePostReceiptRequestBuilder.php)
* Package: YooKassa
* Class Hierarchy: 
  * [\YooKassa\Common\AbstractRequestBuilder](../classes/YooKassa-Common-AbstractRequestBuilder.md)
  * \YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder
---
## Properties
<a name="property_amount"></a>
#### protected $amount : \YooKassa\Model\AmountInterface
---
**Summary**

Сумма чека

**Type:** <a href="../classes/YooKassa-Model-AmountInterface.html"><abbr title="\YooKassa\Model\AmountInterface">AmountInterface</abbr></a>

**Details:**


<a name="property_currentObject"></a>
#### protected $currentObject : \YooKassa\Request\Receipts\CreatePostReceiptRequest
---
**Summary**

Собираемый объект запроса

**Type:** <a href="../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.html"><abbr title="\YooKassa\Request\Receipts\CreatePostReceiptRequest">CreatePostReceiptRequest</abbr></a>

**Details:**


<a name="property_customer"></a>
#### protected $customer : \YooKassa\Model\ReceiptCustomer
---
**Summary**

Информация о плательщике

**Type:** <a href="../classes/YooKassa-Model-ReceiptCustomer.html"><abbr title="\YooKassa\Model\ReceiptCustomer">ReceiptCustomer</abbr></a>

**Details:**



---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct() : mixed
```

**Summary**

Конструктор, инициализирует пустой запрос, который в будущем начнём собирать

**Details:**
* Inherited From: [\YooKassa\Common\AbstractRequestBuilder](../classes/YooKassa-Common-AbstractRequestBuilder.md)

**Returns:** mixed - 


<a name="method_addItem" class="anchor"></a>
#### public addItem() : \YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder

```php
public addItem(\YooKassa\Model\ReceiptItemInterface|array  value) : \YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder
```

**Summary**

Добавляет товар в чек

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\ReceiptItemInterface OR array</code> | value  | Информация о товаре |

**Returns:** \YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder - 


<a name="method_build" class="anchor"></a>
#### public build() : \YooKassa\Request\Receipts\CreatePostReceiptRequest|\YooKassa\Common\AbstractRequest

```php
public build(array|null  options = null) : \YooKassa\Request\Receipts\CreatePostReceiptRequest|\YooKassa\Common\AbstractRequest
```

**Summary**

Строит и возвращает объект запроса для отправки в API ЮKassa

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array OR null</code> | options  | Массив параметров для установки в объект запроса |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidRequestException | Выбрасывается если собрать объект запроса не удалось |

**Returns:** \YooKassa\Request\Receipts\CreatePostReceiptRequest|\YooKassa\Common\AbstractRequest - Инстанс объекта запроса


<a name="method_setAmount" class="anchor"></a>
#### public setAmount() : self

```php
public setAmount(\YooKassa\Model\AmountInterface|array|string  value) : self
```

**Summary**

Устанавливает сумму

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\AmountInterface OR array OR string</code> | value  | Сумма оплаты |

**Returns:** self - Инстанс билдера запросов


<a name="method_setCurrency" class="anchor"></a>
#### public setCurrency() : self

```php
public setCurrency(string  value) : self
```

**Summary**

Устанавливает валюту в которой будет происходить подтверждение оплаты заказа

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Валюта в которой подтверждается оплата |

**Returns:** self - Инстанс билдера запросов


<a name="method_setCustomer" class="anchor"></a>
#### public setCustomer() : self

```php
public setCustomer(\YooKassa\Model\ReceiptCustomerInterface|array  value) : self
```

**Summary**

Устанавливает информацию о пользователе

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\ReceiptCustomerInterface OR array</code> | value  | информация о плательщике |

**Returns:** self - Инстанс билдера запросов


<a name="method_setItems" class="anchor"></a>
#### public setItems() : \YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder

```php
public setItems(\YooKassa\Model\ReceiptItemInterface[]|array  value) : \YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder
```

**Summary**

Устанавливает список товаров чека

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\ReceiptItemInterface[] OR array</code> | value  | список товаров чека |

**Returns:** \YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder - 


<a name="method_setObjectId" class="anchor"></a>
#### public setObjectId() : \YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder

```php
public setObjectId(string  value) : \YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder
```

**Summary**

Устанавливает Id объекта чека

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Id объекта чека |

**Returns:** \YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder - 


<a name="method_setOnBehalfOf" class="anchor"></a>
#### public setOnBehalfOf() : \YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder

```php
public setOnBehalfOf(string  value) : \YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder
```

**Summary**

Устанавливает идентификатор магазина, от имени которого нужно отправить чек.

**Description**

Выдается ЮKassa, отображается в разделе Продавцы личного кабинета (столбец shopId).
Необходимо передавать, если вы используете решение ЮKassa для платформ.

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Идентификатор магазина, от имени которого нужно отправить чек |

**Returns:** \YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder - 


<a name="method_setOptions" class="anchor"></a>
#### public setOptions() : \YooKassa\Common\AbstractRequestBuilder

```php
public setOptions(array|\Traversable  options) : \YooKassa\Common\AbstractRequestBuilder
```

**Summary**

Устанавливает свойства запроса из массива

**Details:**
* Inherited From: [\YooKassa\Common\AbstractRequestBuilder](../classes/YooKassa-Common-AbstractRequestBuilder.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array OR \Traversable</code> | options  | Массив свойств запроса |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \InvalidArgumentException | Выбрасывается если аргумент не массив и не итерируемый объект |
| \YooKassa\Common\Exceptions\InvalidPropertyException | Выбрасывается если не удалось установить один из параметров, переданныч в массиве настроек |

**Returns:** \YooKassa\Common\AbstractRequestBuilder - Инстанс текущего билдера запросов


<a name="method_setSend" class="anchor"></a>
#### public setSend() : \YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder

```php
public setSend(bool  value) : \YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder
```

**Summary**

Устанавливает признак отложенной отправки чека.

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">bool</code> | value  | Признак отложенной отправки чека. |

**Returns:** \YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder - 


<a name="method_setSettlements" class="anchor"></a>
#### public setSettlements() : \YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder

```php
public setSettlements(\YooKassa\Model\SettlementInterface[]|array  value) : \YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder
```

**Summary**

Устанавливает массив оплат, обеспечивающих выдачу товара.

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\SettlementInterface[] OR array</code> | value  | Массив оплат, обеспечивающих выдачу товара |

**Returns:** \YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder - 


<a name="method_setTaxSystemCode" class="anchor"></a>
#### public setTaxSystemCode() : \YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder

```php
public setTaxSystemCode(int  value) : \YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder
```

**Summary**

Устанавливает код системы налогообложения

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">int</code> | value  | Код системы налогообложения. Число 1-6. |

**Returns:** \YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder - 


<a name="method_setType" class="anchor"></a>
#### public setType() : \YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder

```php
public setType(string  value) : \YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder
```

**Summary**

Устанавливает тип чека в онлайн-кассе

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Тип чека в онлайн-кассе: приход "payment" или возврат "refund". |

**Returns:** \YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder - 


<a name="method_initCurrentObject" class="anchor"></a>
#### protected initCurrentObject() : \YooKassa\Request\Receipts\CreatePostReceiptRequest

```php
protected initCurrentObject() : \YooKassa\Request\Receipts\CreatePostReceiptRequest
```

**Summary**

Инициализирует объект запроса, который в дальнейшем будет собираться билдером

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md)

**Returns:** \YooKassa\Request\Receipts\CreatePostReceiptRequest - Инстанс собираемого объекта запроса к API



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