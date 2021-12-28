# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Request\Payouts\CreatePayoutRequest
### Namespace: [\YooKassa\Request\Payouts](../namespaces/yookassa-request-payouts.md)
---
**Summary:**

Класс объекта запроса к API на проведение новой выплаты


---
### Constants
* No constants found

---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [$amount](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md#property_amount) |  | Сумма создаваемой выплаты |
| public | [$deal](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md#property_deal) |  | Сделка, в рамках которой нужно провести выплату. Необходимо передавать, если вы проводите Безопасную сделку |
| public | [$description](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md#property_description) |  | Описание транзакции (не более 128 символов). Например: «Выплата по договору N» |
| public | [$metadata](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md#property_metadata) |  | Метаданные привязанные к выплате |
| public | [$payout_destination_data](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md#property_payout_destination_data) |  | Данные платежного средства, на которое нужно сделать выплату. Обязательный параметр, если не передан payout_token. |
| public | [$payout_token](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md#property_payout_token) |  | Токенизированные данные для выплаты. Например, синоним банковской карты. Обязательный параметр, если не передан payout_destination_data |
| public | [$payoutDestinationData](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md#property_payoutDestinationData) |  | Данные платежного средства, на которое нужно сделать выплату. Обязательный параметр, если не передан payout_token. |
| public | [$payoutToken](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md#property_payoutToken) |  | Токенизированные данные для выплаты. Например, синоним банковской карты. Обязательный параметр, если не передан payout_destination_data |

---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Common-AbstractObject.md#method___construct) |  | AbstractObject constructor. |
| public | [__get()](../classes/YooKassa-Common-AbstractObject.md#method___get) |  | Возвращает значение свойства |
| public | [__isset()](../classes/YooKassa-Common-AbstractObject.md#method___isset) |  | Проверяет наличие свойства |
| public | [__set()](../classes/YooKassa-Common-AbstractObject.md#method___set) |  | Устанавливает значение свойства |
| public | [__unset()](../classes/YooKassa-Common-AbstractObject.md#method___unset) |  | Удаляет свойство |
| public | [builder()](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md#method_builder) |  | Возвращает билдер объектов запросов создания выплаты |
| public | [clearValidationError()](../classes/YooKassa-Common-AbstractRequest.md#method_clearValidationError) |  | Очищает статус валидации текущего запроса |
| public | [fromArray()](../classes/YooKassa-Common-AbstractObject.md#method_fromArray) |  | Устанавливает значения свойств текущего объекта из массива |
| public | [getAmount()](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md#method_getAmount) |  | Возвращает сумму выплаты |
| public | [getDeal()](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md#method_getDeal) |  | Возвращает сделку, в рамках которой нужно провести выплату |
| public | [getDescription()](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md#method_getDescription) |  | Возвращает описание транзакции |
| public | [getLastValidationError()](../classes/YooKassa-Common-AbstractRequest.md#method_getLastValidationError) |  | Возвращает последнюю ошибку валидации |
| public | [getMetadata()](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md#method_getMetadata) |  | Возвращает данные оплаты установленные мерчантом |
| public | [getPayoutDestinationData()](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md#method_getPayoutDestinationData) |  | Возвращает данные для создания метода оплаты |
| public | [getPayoutToken()](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md#method_getPayoutToken) |  | Проверяет наличие токенизированных данных для выплаты |
| public | [hasAmount()](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md#method_hasAmount) |  | Проверяет, была ли установлена сумма выплаты |
| public | [hasDeal()](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md#method_hasDeal) |  | Проверяет наличие сделки в создаваемой выплате |
| public | [hasDescription()](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md#method_hasDescription) |  | Проверяет наличие описания транзакции в создаваемом платеже |
| public | [hasMetadata()](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md#method_hasMetadata) |  | Проверяет, были ли установлены метаданные выплаты |
| public | [hasPayoutDestinationData()](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md#method_hasPayoutDestinationData) |  | Проверяет установлен ли объект с методом оплаты |
| public | [hasPayoutToken()](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md#method_hasPayoutToken) |  | Проверяет наличие одноразового токена для проведения оплаты |
| public | [jsonSerialize()](../classes/YooKassa-Common-AbstractObject.md#method_jsonSerialize) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации |
| public | [offsetExists()](../classes/YooKassa-Common-AbstractObject.md#method_offsetExists) |  | Проверяет наличие свойства |
| public | [offsetGet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetGet) |  | Возвращает значение свойства |
| public | [offsetSet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetSet) |  | Устанавливает значение свойства |
| public | [offsetUnset()](../classes/YooKassa-Common-AbstractObject.md#method_offsetUnset) |  | Удаляет свойство |
| public | [setAmount()](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md#method_setAmount) |  | Устанавливает сумму выплаты |
| public | [setDeal()](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md#method_setDeal) |  | Устанавливает сделку, в рамках которой нужно провести выплату |
| public | [setDescription()](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md#method_setDescription) |  | Устанавливает описание транзакции |
| public | [setMetadata()](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md#method_setMetadata) |  | Устанавливает метаданные, привязанные к выплате |
| public | [setPayoutDestinationData()](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md#method_setPayoutDestinationData) |  | Устанавливает объект с информацией для создания метода оплаты |
| public | [setPayoutToken()](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md#method_setPayoutToken) |  | Устанавливает токенизированные данные для выплаты |
| public | [toArray()](../classes/YooKassa-Common-AbstractObject.md#method_toArray) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации Является алиасом метода AbstractObject::jsonSerialize() |
| public | [validate()](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md#method_validate) |  | Проверяет на валидность текущий объект |
| protected | [getUnknownProperties()](../classes/YooKassa-Common-AbstractObject.md#method_getUnknownProperties) |  | Возвращает массив свойств которые не существуют, но были заданы у объекта |
| protected | [setValidationError()](../classes/YooKassa-Common-AbstractRequest.md#method_setValidationError) |  | Устанавливает ошибку валидации |

---
### Details
* File: [lib/Request/Payouts/CreatePayoutRequest.php](../../lib/Request/Payouts/CreatePayoutRequest.php)
* Package: YooKassa
* Class Hierarchy:  
  * [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
  * [\YooKassa\Common\AbstractRequest](../classes/YooKassa-Common-AbstractRequest.md)
  * \YooKassa\Request\Payouts\CreatePayoutRequest
* Implements:
  * [\YooKassa\Request\Payouts\CreatePayoutRequestInterface](../classes/YooKassa-Request-Payouts-CreatePayoutRequestInterface.md)

---
### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| todo: |  | @example 02-builder.php 11 78 Пример использования билдера |

---
## Properties
<a name="property_amount"></a>
#### public $amount : \YooKassa\Model\AmountInterface
---
***Description***

Сумма создаваемой выплаты

**Type:** <a href="../classes/YooKassa-Model-AmountInterface.html"><abbr title="\YooKassa\Model\AmountInterface">AmountInterface</abbr></a>

**Details:**


<a name="property_deal"></a>
#### public $deal : \YooKassa\Model\Deal\PayoutDealInfo
---
***Description***

Сделка, в рамках которой нужно провести выплату. Необходимо передавать, если вы проводите Безопасную сделку

**Type:** <a href="../classes/YooKassa-Model-Deal-PayoutDealInfo.html"><abbr title="\YooKassa\Model\Deal\PayoutDealInfo">PayoutDealInfo</abbr></a>

**Details:**


<a name="property_description"></a>
#### public $description : string
---
***Description***

Описание транзакции (не более 128 символов). Например: «Выплата по договору N»

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_metadata"></a>
#### public $metadata : \YooKassa\Model\Metadata
---
***Description***

Метаданные привязанные к выплате

**Type:** <a href="../classes/YooKassa-Model-Metadata.html"><abbr title="\YooKassa\Model\Metadata">Metadata</abbr></a>

**Details:**


<a name="property_payout_destination_data"></a>
#### public $payout_destination_data : \YooKassa\Model\Payout\AbstractPayoutDestination
---
***Description***

Данные платежного средства, на которое нужно сделать выплату. Обязательный параметр, если не передан payout_token.

**Type:** <a href="../classes/YooKassa-Model-Payout-AbstractPayoutDestination.html"><abbr title="\YooKassa\Model\Payout\AbstractPayoutDestination">AbstractPayoutDestination</abbr></a>

**Details:**


<a name="property_payout_token"></a>
#### public $payout_token : string
---
***Description***

Токенизированные данные для выплаты. Например, синоним банковской карты. Обязательный параметр, если не передан payout_destination_data

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_payoutDestinationData"></a>
#### public $payoutDestinationData : \YooKassa\Model\Payout\AbstractPayoutDestination
---
***Description***

Данные платежного средства, на которое нужно сделать выплату. Обязательный параметр, если не передан payout_token.

**Type:** <a href="../classes/YooKassa-Model-Payout-AbstractPayoutDestination.html"><abbr title="\YooKassa\Model\Payout\AbstractPayoutDestination">AbstractPayoutDestination</abbr></a>

**Details:**


<a name="property_payoutToken"></a>
#### public $payoutToken : string
---
***Description***

Токенизированные данные для выплаты. Например, синоним банковской карты. Обязательный параметр, если не передан payout_destination_data

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**



---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(array $data = array()) : mixed
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
public __get(string $propertyName) : mixed
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
public __isset(string $propertyName) : bool
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
public __set(string $propertyName, mixed $value) : mixed
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
public __unset(string $propertyName) : mixed
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


<a name="method_builder" class="anchor"></a>
#### public builder() : \YooKassa\Request\Payouts\CreatePayoutRequestBuilder

```php
Static public builder() : \YooKassa\Request\Payouts\CreatePayoutRequestBuilder
```

**Summary**

Возвращает билдер объектов запросов создания выплаты

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequest](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md)

**Returns:** \YooKassa\Request\Payouts\CreatePayoutRequestBuilder - Инстанс билдера объектов запросов


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
public fromArray(array|\Traversable $sourceArray) : mixed
```

**Summary**

Устанавливает значения свойств текущего объекта из массива

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array OR \Traversable</code> | sourceArray  | Ассоциативный массив с настройками |

**Returns:** mixed - 


<a name="method_getAmount" class="anchor"></a>
#### public getAmount() : \YooKassa\Model\AmountInterface

```php
public getAmount() : \YooKassa\Model\AmountInterface
```

**Summary**

Возвращает сумму выплаты

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequest](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md)

**Returns:** \YooKassa\Model\AmountInterface - Сумма выплаты


<a name="method_getDeal" class="anchor"></a>
#### public getDeal() : \YooKassa\Model\Deal\PayoutDealInfo

```php
public getDeal() : \YooKassa\Model\Deal\PayoutDealInfo
```

**Summary**

Возвращает сделку, в рамках которой нужно провести выплату

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequest](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md)

**Returns:** \YooKassa\Model\Deal\PayoutDealInfo - Сделка, в рамках которой нужно провести выплату


<a name="method_getDescription" class="anchor"></a>
#### public getDescription() : string

```php
public getDescription() : string
```

**Summary**

Возвращает описание транзакции

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequest](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md)

**Returns:** string - 


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


<a name="method_getMetadata" class="anchor"></a>
#### public getMetadata() : \YooKassa\Model\Metadata

```php
public getMetadata() : \YooKassa\Model\Metadata
```

**Summary**

Возвращает данные оплаты установленные мерчантом

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequest](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md)

**Returns:** \YooKassa\Model\Metadata - Метаданные, привязанные к выплате


<a name="method_getPayoutDestinationData" class="anchor"></a>
#### public getPayoutDestinationData() : \YooKassa\Model\Payout\AbstractPayoutDestination

```php
public getPayoutDestinationData() : \YooKassa\Model\Payout\AbstractPayoutDestination
```

**Summary**

Возвращает данные для создания метода оплаты

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequest](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md)

**Returns:** \YooKassa\Model\Payout\AbstractPayoutDestination - Данные используемые для создания метода оплаты


<a name="method_getPayoutToken" class="anchor"></a>
#### public getPayoutToken() : bool

```php
public getPayoutToken() : bool
```

**Summary**

Проверяет наличие токенизированных данных для выплаты

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequest](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md)

**Returns:** bool - True если токен установлен, false если нет


<a name="method_hasAmount" class="anchor"></a>
#### public hasAmount() : bool

```php
public hasAmount() : bool
```

**Summary**

Проверяет, была ли установлена сумма выплаты

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequest](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md)

**Returns:** bool - True если сумма выплаты была установлена, false если нет


<a name="method_hasDeal" class="anchor"></a>
#### public hasDeal() : bool

```php
public hasDeal() : bool
```

**Summary**

Проверяет наличие сделки в создаваемой выплате

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequest](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md)

**Returns:** bool - True если сделка есть, false если нет


<a name="method_hasDescription" class="anchor"></a>
#### public hasDescription() : bool

```php
public hasDescription() : bool
```

**Summary**

Проверяет наличие описания транзакции в создаваемом платеже

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequest](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md)

**Returns:** bool - True если описание транзакции есть, false если нет


<a name="method_hasMetadata" class="anchor"></a>
#### public hasMetadata() : bool

```php
public hasMetadata() : bool
```

**Summary**

Проверяет, были ли установлены метаданные выплаты

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequest](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md)

**Returns:** bool - True если метаданные были установлены, false если нет


<a name="method_hasPayoutDestinationData" class="anchor"></a>
#### public hasPayoutDestinationData() : bool

```php
public hasPayoutDestinationData() : bool
```

**Summary**

Проверяет установлен ли объект с методом оплаты

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequest](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md)

**Returns:** bool - True если объект метода оплаты установлен, false если нет


<a name="method_hasPayoutToken" class="anchor"></a>
#### public hasPayoutToken() : bool

```php
public hasPayoutToken() : bool
```

**Summary**

Проверяет наличие одноразового токена для проведения оплаты

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequest](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md)

**Returns:** bool - True если токен установлен, false если нет


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


<a name="method_offsetExists" class="anchor"></a>
#### public offsetExists() : bool

```php
public offsetExists(string $offset) : bool
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
public offsetGet(string $offset) : mixed
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
public offsetSet(string $offset, mixed $value) : mixed
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
public offsetUnset(string $offset) : mixed
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


<a name="method_setAmount" class="anchor"></a>
#### public setAmount() : mixed

```php
public setAmount(mixed $value) : mixed
```

**Summary**

Устанавливает сумму выплаты

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequest](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">mixed</code> | value  |  |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если был передан объект невалидного типа |

**Returns:** mixed - 


<a name="method_setDeal" class="anchor"></a>
#### public setDeal() : mixed

```php
public setDeal(\YooKassa\Model\Deal\PayoutDealInfo|array $value) : mixed
```

**Summary**

Устанавливает сделку, в рамках которой нужно провести выплату

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequest](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\Deal\PayoutDealInfo OR array</code> | value  | Сделка, в рамках которой нужно провести выплату |

**Returns:** mixed - 


<a name="method_setDescription" class="anchor"></a>
#### public setDescription() : mixed

```php
public setDescription(string $value) : mixed
```

**Summary**

Устанавливает описание транзакции

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequest](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  |  |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если переданное значение превышает допустимую длину |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если переданное значение не является строкой |

**Returns:** mixed - 


<a name="method_setMetadata" class="anchor"></a>
#### public setMetadata() : mixed

```php
public setMetadata(\YooKassa\Model\Metadata|array|null $value) : mixed
```

**Summary**

Устанавливает метаданные, привязанные к выплате

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequest](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\Metadata OR array OR null</code> | value  | Метаданные выплаты, устанавливаемые мерчантом |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если переданные данные не удалось интерпретировать как метаданные выплаты |

**Returns:** mixed - 


<a name="method_setPayoutDestinationData" class="anchor"></a>
#### public setPayoutDestinationData() : mixed

```php
public setPayoutDestinationData(\YooKassa\Request\Payouts\PayoutDestinationData\AbstractPayoutDestinationData|array|null $value) : mixed
```

**Summary**

Устанавливает объект с информацией для создания метода оплаты

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequest](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Request\Payouts\PayoutDestinationData\AbstractPayoutDestinationData OR array OR null</code> | value  | Объект создания метода оплаты или null |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если был передан объект невалидного типа |

**Returns:** mixed - 


<a name="method_setPayoutToken" class="anchor"></a>
#### public setPayoutToken() : mixed

```php
public setPayoutToken(string $value) : mixed
```

**Summary**

Устанавливает токенизированные данные для выплаты

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequest](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Токенизированные данные для выплаты |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если переданное значение не является строкой |

**Returns:** mixed - 


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

Проверяет на валидность текущий объект

**Details:**
* Inherited From: [\YooKassa\Request\Payouts\CreatePayoutRequest](../classes/YooKassa-Request-Payouts-CreatePayoutRequest.md)

**Returns:** bool - True если объект запроса валиден, false если нет


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
protected setValidationError(string $value) : mixed
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
* [Deprecated - 13](../reports/deprecated.md)

---

This document was automatically generated from source code comments on 2021-12-28 using [phpDocumentor](http://www.phpdoc.org/)

&copy; 2021 YooMoney