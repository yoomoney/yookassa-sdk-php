# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Request\Receipts\CreatePostReceiptRequest
### Namespace: [\YooKassa\Request\Receipts](../namespaces/yookassa-request-receipts.md)
---
**Summary:**

Класс объекта запроса к API на создание чека

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
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Common-AbstractObject.md#method___construct) |  | AbstractObject constructor. |
| public | [__get()](../classes/YooKassa-Common-AbstractObject.md#method___get) |  | Возвращает значение свойства |
| public | [__isset()](../classes/YooKassa-Common-AbstractObject.md#method___isset) |  | Проверяет наличие свойства |
| public | [__set()](../classes/YooKassa-Common-AbstractObject.md#method___set) |  | Устанавливает значение свойства |
| public | [__unset()](../classes/YooKassa-Common-AbstractObject.md#method___unset) |  | Удаляет свойство |
| public | [addItem()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md#method_addItem) |  | Добавляет товар в чек |
| public | [addSettlement()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md#method_addSettlement) |  | Добавляет оплату в перечень совершенных расчетов. |
| public | [builder()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md#method_builder) |  | Возвращает билдер объектов запросов создания платежа |
| public | [clearValidationError()](../classes/YooKassa-Common-AbstractRequest.md#method_clearValidationError) |  | Очищает статус валидации текущего запроса |
| public | [fromArray()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md#method_fromArray) |  | Устанавливает значения свойств текущего объекта из массива |
| public | [getCustomer()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md#method_getCustomer) |  | Возвращает информацию о плательщике |
| public | [getItems()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md#method_getItems) |  | Возвращает список позиций в текущем чеке |
| public | [getLastValidationError()](../classes/YooKassa-Common-AbstractRequest.md#method_getLastValidationError) |  | Возвращает последнюю ошибку валидации |
| public | [getObjectId()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md#method_getObjectId) |  | Возвращает Id объекта чека |
| public | [getOnBehalfOf()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md#method_getOnBehalfOf) |  | Возвращает идентификатор магазина, от имени которого нужно отправить чек. |
| public | [getSend()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md#method_getSend) |  | Возвращает признак отложенной отправки чека. |
| public | [getSettlements()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md#method_getSettlements) |  | Возвращает массив оплат, обеспечивающих выдачу товара. |
| public | [getTaxSystemCode()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md#method_getTaxSystemCode) |  | Возвращает код системы налогообложения |
| public | [getType()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md#method_getType) |  | Возвращает тип чека в онлайн-кассе |
| public | [hasCustomer()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md#method_hasCustomer) |  | Проверяет наличие данных о плательщике |
| public | [jsonSerialize()](../classes/YooKassa-Common-AbstractObject.md#method_jsonSerialize) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации |
| public | [notEmpty()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md#method_notEmpty) |  | Проверяет есть ли в чеке хотя бы одна позиция товаров и оплат |
| public | [offsetExists()](../classes/YooKassa-Common-AbstractObject.md#method_offsetExists) |  | Проверяет наличие свойства |
| public | [offsetGet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetGet) |  | Возвращает значение свойства |
| public | [offsetSet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetSet) |  | Устанавливает значение свойства |
| public | [offsetUnset()](../classes/YooKassa-Common-AbstractObject.md#method_offsetUnset) |  | Удаляет свойство |
| public | [setCustomer()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md#method_setCustomer) |  | Устанавливает информацию о плательщике |
| public | [setItems()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md#method_setItems) |  | Устанавливает список позиций в чеке |
| public | [setObjectId()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md#method_setObjectId) |  | Устанавливает Id объекта чека |
| public | [setOnBehalfOf()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md#method_setOnBehalfOf) |  | Устанавливает идентификатор магазина, от имени которого нужно отправить чек. |
| public | [setSend()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md#method_setSend) |  | Устанавливает признак отложенной отправки чека. |
| public | [setSettlements()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md#method_setSettlements) |  | Устанавливает массив оплат, обеспечивающих выдачу товара. |
| public | [setTaxSystemCode()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md#method_setTaxSystemCode) |  | Устанавливает код системы налогообложения |
| public | [setType()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md#method_setType) |  | Устанавливает тип чека в онлайн-кассе |
| public | [toArray()](../classes/YooKassa-Common-AbstractObject.md#method_toArray) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации Является алиасом метода AbstractObject::jsonSerialize() |
| public | [validate()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md#method_validate) |  | Валидирует текущий запрос, проверяет все ли нужные свойства установлены |
| protected | [getUnknownProperties()](../classes/YooKassa-Common-AbstractObject.md#method_getUnknownProperties) |  | Возвращает массив свойств которые не существуют, но были заданы у объекта |
| protected | [setValidationError()](../classes/YooKassa-Common-AbstractRequest.md#method_setValidationError) |  | Устанавливает ошибку валидации |
---
### Details
* File: [lib/Request/Receipts/CreatePostReceiptRequest.php](../../lib/Request/Receipts/CreatePostReceiptRequest.php)
* Package: YooKassa
* Class Hierarchy:  
  * [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
  * [\YooKassa\Common\AbstractRequest](../classes/YooKassa-Common-AbstractRequest.md)
  * \YooKassa\Request\Receipts\CreatePostReceiptRequest
* Implements:
  * [\YooKassa\Request\Receipts\CreatePostReceiptRequestInterface](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestInterface.md)

---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(array  data = array()) : mixed
```

**Summary**

AbstractObject constructor.

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array</code> | data  |  |

**Returns:** mixed - 


<a name="method___get" class="anchor"></a>
#### public __get() : mixed

```php
public __get(string  propertyName) : mixed
```

**Summary**

Возвращает значение свойства

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | propertyName  | Имя свойства |

**Returns:** mixed - Значение свойства


<a name="method___isset" class="anchor"></a>
#### public __isset() : bool

```php
public __isset(string  propertyName) : bool
```

**Summary**

Проверяет наличие свойства

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | propertyName  | Имя проверяемого свойства |

**Returns:** bool - True если свойство имеется, false если нет


<a name="method___set" class="anchor"></a>
#### public __set() : mixed

```php
public __set(string  propertyName, mixed  value) : mixed
```

**Summary**

Устанавливает значение свойства

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | propertyName  | Имя свойства |
| <code lang="php">mixed</code> | value  | Значение свойства |

**Returns:** mixed - 


<a name="method___unset" class="anchor"></a>
#### public __unset() : mixed

```php
public __unset(string  propertyName) : mixed
```

**Summary**

Удаляет свойство

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | propertyName  | Имя удаляемого свойства |

**Returns:** mixed - 


<a name="method_addItem" class="anchor"></a>
#### public addItem() : \YooKassa\Request\Receipts\CreatePostReceiptRequest

```php
public addItem(\YooKassa\Model\ReceiptItemInterface|array  value) : \YooKassa\Request\Receipts\CreatePostReceiptRequest
```

**Summary**

Добавляет товар в чек

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequest](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\ReceiptItemInterface OR array</code> | value  | Объект добавляемой в чек позиции |

**Returns:** \YooKassa\Request\Receipts\CreatePostReceiptRequest - 


<a name="method_addSettlement" class="anchor"></a>
#### public addSettlement() : mixed

```php
public addSettlement(\YooKassa\Model\SettlementInterface  value) : mixed
```

**Summary**

Добавляет оплату в перечень совершенных расчетов.

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequest](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\SettlementInterface</code> | value  | Информация о совершенных расчетах. |

**Returns:** mixed - 


<a name="method_builder" class="anchor"></a>
#### public builder() : \YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder

```php
Static public builder() : \YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder
```

**Summary**

Возвращает билдер объектов запросов создания платежа

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequest](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md)

**Returns:** \YooKassa\Request\Receipts\CreatePostReceiptRequestBuilder - Инстанс билдера объектов запрсов


<a name="method_clearValidationError" class="anchor"></a>
#### public clearValidationError() : mixed

```php
public clearValidationError() : mixed
```

**Summary**

Очищает статус валидации текущего запроса

**Details:**
* Inherited From: [\YooKassa\Common\AbstractRequest](../classes/YooKassa-Common-AbstractRequest.md)

**Returns:** mixed - 


<a name="method_fromArray" class="anchor"></a>
#### public fromArray() : mixed

```php
public fromArray(array|\Traversable  sourceArray) : mixed
```

**Summary**

Устанавливает значения свойств текущего объекта из массива

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequest](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array OR \Traversable</code> | sourceArray  | Ассоциативный массив с настройками |

**Returns:** mixed - 


<a name="method_getCustomer" class="anchor"></a>
#### public getCustomer() : \YooKassa\Model\ReceiptCustomerInterface

```php
public getCustomer() : \YooKassa\Model\ReceiptCustomerInterface
```

**Summary**

Возвращает информацию о плательщике

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequest](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md)

**Returns:** \YooKassa\Model\ReceiptCustomerInterface - информация о плательщике


<a name="method_getItems" class="anchor"></a>
#### public getItems() : \YooKassa\Model\ReceiptItemInterface[]

```php
public getItems() : \YooKassa\Model\ReceiptItemInterface[]
```

**Summary**

Возвращает список позиций в текущем чеке

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequest](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md)

**Returns:** \YooKassa\Model\ReceiptItemInterface[] - Список товаров в заказе


<a name="method_getLastValidationError" class="anchor"></a>
#### public getLastValidationError() : string

```php
public getLastValidationError() : string
```

**Summary**

Возвращает последнюю ошибку валидации

**Details:**
* Inherited From: [\YooKassa\Common\AbstractRequest](../classes/YooKassa-Common-AbstractRequest.md)

**Returns:** string - Последняя произошедшая ошибка валидации


<a name="method_getObjectId" class="anchor"></a>
#### public getObjectId() : string

```php
public getObjectId() : string
```

**Summary**

Возвращает Id объекта чека

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequest](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md)

**Returns:** string - Id объекта чека


<a name="method_getOnBehalfOf" class="anchor"></a>
#### public getOnBehalfOf() : string

```php
public getOnBehalfOf() : string
```

**Summary**

Возвращает идентификатор магазина, от имени которого нужно отправить чек.

**Description**

Выдается ЮKassa, отображается в разделе Продавцы личного кабинета (столбец shopId).
Необходимо передавать, если вы используете решение ЮKassa для платформ.

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequest](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md)

**Returns:** string - 


<a name="method_getSend" class="anchor"></a>
#### public getSend() : bool

```php
public getSend() : bool
```

**Summary**

Возвращает признак отложенной отправки чека.

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequest](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md)

**Returns:** bool - Признак отложенной отправки чека.


<a name="method_getSettlements" class="anchor"></a>
#### public getSettlements() : \YooKassa\Model\SettlementInterface[]

```php
public getSettlements() : \YooKassa\Model\SettlementInterface[]
```

**Summary**

Возвращает массив оплат, обеспечивающих выдачу товара.

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequest](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md)

**Returns:** \YooKassa\Model\SettlementInterface[] - Массив оплат, обеспечивающих выдачу товара.


<a name="method_getTaxSystemCode" class="anchor"></a>
#### public getTaxSystemCode() : int

```php
public getTaxSystemCode() : int
```

**Summary**

Возвращает код системы налогообложения

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequest](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md)

**Returns:** int - Код системы налогообложения. Число 1-6.


<a name="method_getType" class="anchor"></a>
#### public getType() : string

```php
public getType() : string
```

**Summary**

Возвращает тип чека в онлайн-кассе

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequest](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md)

**Returns:** string - Тип чека в онлайн-кассе: приход "payment" или возврат "refund".


<a name="method_hasCustomer" class="anchor"></a>
#### public hasCustomer() : bool

```php
public hasCustomer() : bool
```

**Summary**

Проверяет наличие данных о плательщике

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequest](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md)

**Returns:** bool - 


<a name="method_jsonSerialize" class="anchor"></a>
#### public jsonSerialize() : array

```php
public jsonSerialize() : array
```

**Summary**

Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)

**Returns:** array - Ассоциативный массив со свойствами текущего объекта


<a name="method_notEmpty" class="anchor"></a>
#### public notEmpty() : bool

```php
public notEmpty() : bool
```

**Summary**

Проверяет есть ли в чеке хотя бы одна позиция товаров и оплат

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequest](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md)

**Returns:** bool - True если чек не пуст, false если в чеке нет ни одной позиции


<a name="method_offsetExists" class="anchor"></a>
#### public offsetExists() : bool

```php
public offsetExists(string  offset) : bool
```

**Summary**

Проверяет наличие свойства

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | offset  | Имя проверяемого свойства |

**Returns:** bool - True если свойство имеется, false если нет


<a name="method_offsetGet" class="anchor"></a>
#### public offsetGet() : mixed

```php
public offsetGet(string  offset) : mixed
```

**Summary**

Возвращает значение свойства

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | offset  | Имя свойства |

**Returns:** mixed - Значение свойства


<a name="method_offsetSet" class="anchor"></a>
#### public offsetSet() : mixed

```php
public offsetSet(string  offset, mixed  value) : mixed
```

**Summary**

Устанавливает значение свойства

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | offset  | Имя свойства |
| <code lang="php">mixed</code> | value  | Значение свойства |

**Returns:** mixed - 


<a name="method_offsetUnset" class="anchor"></a>
#### public offsetUnset() : mixed

```php
public offsetUnset(string  offset) : mixed
```

**Summary**

Удаляет свойство

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | offset  | Имя удаляемого свойства |

**Returns:** mixed - 


<a name="method_setCustomer" class="anchor"></a>
#### public setCustomer() : \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface

```php
public setCustomer(\YooKassa\Model\ReceiptCustomerInterface  value) : \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface
```

**Summary**

Устанавливает информацию о плательщике

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequest](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\ReceiptCustomerInterface</code> | value  |  |

**Returns:** \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface - 


<a name="method_setItems" class="anchor"></a>
#### public setItems() : \YooKassa\Request\Receipts\CreatePostReceiptRequest

```php
public setItems(\YooKassa\Model\ReceiptItemInterface[]|array  value) : \YooKassa\Request\Receipts\CreatePostReceiptRequest
```

**Summary**

Устанавливает список позиций в чеке

**Description**

Если до этого в чеке уже были установлены значения, они удаляются и полностью заменяются переданным списком
позиций. Все передаваемые значения в массиве позиций должны быть объектами класса, реализующего интерфейс
ReceiptItemInterface, в противном случае будет выброшено исключение InvalidPropertyValueTypeException.

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequest](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\ReceiptItemInterface[] OR array</code> | value  | Список товаров в заказе |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\EmptyPropertyValueException | Выбрасывается если передали пустой массив значений |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в качестве значения был передан не массив и не итератор, либо если одно из переданных значений не реализует интерфейс ReceiptItemInterface |

**Returns:** \YooKassa\Request\Receipts\CreatePostReceiptRequest - 


<a name="method_setObjectId" class="anchor"></a>
#### public setObjectId() : \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface

```php
public setObjectId(string  value) : \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface
```

**Summary**

Устанавливает Id объекта чека

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequest](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Id объекта чека |

**Returns:** \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface - 


<a name="method_setOnBehalfOf" class="anchor"></a>
#### public setOnBehalfOf() : mixed

```php
public setOnBehalfOf(string  value) : mixed
```

**Summary**

Устанавливает идентификатор магазина, от имени которого нужно отправить чек.

**Description**

Выдается ЮKassa, отображается в разделе Продавцы личного кабинета (столбец shopId).
Необходимо передавать, если вы используете решение ЮKassa для платформ.

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequest](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  |  |

**Returns:** mixed - 


<a name="method_setSend" class="anchor"></a>
#### public setSend() : \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface

```php
public setSend(bool  value) : \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface
```

**Summary**

Устанавливает признак отложенной отправки чека.

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequest](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">bool</code> | value  | Признак отложенной отправки чека. |

**Returns:** \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface - 


<a name="method_setSettlements" class="anchor"></a>
#### public setSettlements() : \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface

```php
public setSettlements(\YooKassa\Model\SettlementInterface[]  value) : \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface
```

**Summary**

Устанавливает массив оплат, обеспечивающих выдачу товара.

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequest](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\SettlementInterface[]</code> | value  | Массив оплат, обеспечивающих выдачу товара. |

**Returns:** \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface - 


<a name="method_setTaxSystemCode" class="anchor"></a>
#### public setTaxSystemCode() : \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface

```php
public setTaxSystemCode(int  value) : \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface
```

**Summary**

Устанавливает код системы налогообложения

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequest](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">int</code> | value  | Код системы налогообложения. Число 1-6 |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если переданный аргумент - не число |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если переданный аргумент меньше одного или больше шести |

**Returns:** \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface - 


<a name="method_setType" class="anchor"></a>
#### public setType() : \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface

```php
public setType(string  value) : \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface
```

**Summary**

Устанавливает тип чека в онлайн-кассе

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequest](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Тип чека в онлайн-кассе: приход "payment" или возврат "refund". |

**Returns:** \YooKassa\Request\Receipts\CreatePostReceiptRequestInterface - 


<a name="method_toArray" class="anchor"></a>
#### public toArray() : array

```php
public toArray() : array
```

**Summary**

Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации
Является алиасом метода AbstractObject::jsonSerialize()

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)

**Returns:** array - Ассоциативный массив со свойствами текущего объекта


<a name="method_validate" class="anchor"></a>
#### public validate() : bool

```php
public validate() : bool
```

**Summary**

Валидирует текущий запрос, проверяет все ли нужные свойства установлены

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\CreatePostReceiptRequest](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.md)

**Returns:** bool - True если запрос валиден, false если нет


<a name="method_getUnknownProperties" class="anchor"></a>
#### protected getUnknownProperties() : array

```php
protected getUnknownProperties() : array
```

**Summary**

Возвращает массив свойств которые не существуют, но были заданы у объекта

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)

**Returns:** array - Ассоциативный массив с не существующими у текущего объекта свойствами


<a name="method_setValidationError" class="anchor"></a>
#### protected setValidationError() : mixed

```php
protected setValidationError(string  value) : mixed
```

**Summary**

Устанавливает ошибку валидации

**Details:**
* Inherited From: [\YooKassa\Common\AbstractRequest](../classes/YooKassa-Common-AbstractRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Ошибка, произошедшая при валидации объекта |

**Returns:** mixed - 



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