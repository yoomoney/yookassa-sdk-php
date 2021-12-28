# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Request\Payouts\CreatePayoutResponse
### Namespace: [\YooKassa\Request\Payouts](../namespaces/yookassa-request-payouts.md)
---
**Summary:**

Класс объекта ответа возвращаемого API при запросе на создание выплаты


---
### Constants
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [MAX_LENGTH_DESCRIPTION](../classes/YooKassa-Model-Payout.md#constant_MAX_LENGTH_DESCRIPTION) |  | Максимальная длина строки описания выплаты |

---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [$amount](../classes/YooKassa-Model-Payout.md#property_amount) |  | Сумма выплаты |
| public | [$cancellation_details](../classes/YooKassa-Model-Payout.md#property_cancellation_details) |  | Комментарий к отмене выплаты |
| public | [$cancellationDetails](../classes/YooKassa-Model-Payout.md#property_cancellationDetails) |  | Комментарий к отмене выплаты |
| public | [$created_at](../classes/YooKassa-Model-Payout.md#property_created_at) |  | Время создания заказа |
| public | [$createdAt](../classes/YooKassa-Model-Payout.md#property_createdAt) |  | Время создания заказа |
| public | [$deal](../classes/YooKassa-Model-Payout.md#property_deal) |  | Сделка, в рамках которой нужно провести выплату |
| public | [$description](../classes/YooKassa-Model-Payout.md#property_description) |  | Описание транзакции |
| public | [$id](../classes/YooKassa-Model-Payout.md#property_id) |  | Идентификатор выплаты |
| public | [$metadata](../classes/YooKassa-Model-Payout.md#property_metadata) |  | Метаданные выплаты указанные мерчантом |
| public | [$payout_destination](../classes/YooKassa-Model-Payout.md#property_payout_destination) |  | Способ проведения выплаты |
| public | [$payoutDestination](../classes/YooKassa-Model-Payout.md#property_payoutDestination) |  | Способ проведения выплаты |
| public | [$status](../classes/YooKassa-Model-Payout.md#property_status) |  | Текущее состояние выплаты |
| public | [$test](../classes/YooKassa-Model-Payout.md#property_test) |  | Признак тестовой операции |

---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Common-AbstractObject.md#method___construct) |  | AbstractObject constructor. |
| public | [__get()](../classes/YooKassa-Common-AbstractObject.md#method___get) |  | Возвращает значение свойства |
| public | [__isset()](../classes/YooKassa-Common-AbstractObject.md#method___isset) |  | Проверяет наличие свойства |
| public | [__set()](../classes/YooKassa-Common-AbstractObject.md#method___set) |  | Устанавливает значение свойства |
| public | [__unset()](../classes/YooKassa-Common-AbstractObject.md#method___unset) |  | Удаляет свойство |
| public | [fromArray()](../classes/YooKassa-Common-AbstractObject.md#method_fromArray) |  | Устанавливает значения свойств текущего объекта из массива |
| public | [getAmount()](../classes/YooKassa-Model-Payout.md#method_getAmount) |  | Возвращает сумму |
| public | [getCancellationDetails()](../classes/YooKassa-Model-Payout.md#method_getCancellationDetails) |  | Возвращает комментарий к статусу canceled: кто отменил платеж и по какой причине |
| public | [getCreatedAt()](../classes/YooKassa-Model-Payout.md#method_getCreatedAt) |  | Возвращает время создания заказа |
| public | [getDeal()](../classes/YooKassa-Model-Payout.md#method_getDeal) |  | Возвращает сделку, в рамках которой нужно провести выплату |
| public | [getDescription()](../classes/YooKassa-Model-Payout.md#method_getDescription) |  | Возвращает описание транзакции |
| public | [getId()](../classes/YooKassa-Model-Payout.md#method_getId) |  | Возвращает идентификатор выплаты |
| public | [getMetadata()](../classes/YooKassa-Model-Payout.md#method_getMetadata) |  | Возвращает метаданные выплаты установленные мерчантом |
| public | [getPayoutDestination()](../classes/YooKassa-Model-Payout.md#method_getPayoutDestination) |  | Возвращает используемый способ проведения выплаты |
| public | [getStatus()](../classes/YooKassa-Model-Payout.md#method_getStatus) |  | Возвращает состояние выплаты |
| public | [getTest()](../classes/YooKassa-Model-Payout.md#method_getTest) |  | Возвращает признак тестовой операции |
| public | [jsonSerialize()](../classes/YooKassa-Common-AbstractObject.md#method_jsonSerialize) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации |
| public | [offsetExists()](../classes/YooKassa-Common-AbstractObject.md#method_offsetExists) |  | Проверяет наличие свойства |
| public | [offsetGet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetGet) |  | Возвращает значение свойства |
| public | [offsetSet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetSet) |  | Устанавливает значение свойства |
| public | [offsetUnset()](../classes/YooKassa-Common-AbstractObject.md#method_offsetUnset) |  | Удаляет свойство |
| public | [setAmount()](../classes/YooKassa-Model-Payout.md#method_setAmount) |  | Устанавливает сумму выплаты |
| public | [setCancellationDetails()](../classes/YooKassa-Model-Payout.md#method_setCancellationDetails) |  | Устанавливает комментарий к статусу canceled: кто отменил платеж и по какой причине |
| public | [setCreatedAt()](../classes/YooKassa-Model-Payout.md#method_setCreatedAt) |  | Устанавливает время создания заказа |
| public | [setDeal()](../classes/YooKassa-Model-Payout.md#method_setDeal) |  | Устанавливает сделку, в рамках которой нужно провести выплату |
| public | [setDescription()](../classes/YooKassa-Model-Payout.md#method_setDescription) |  | Устанавливает описание транзакции |
| public | [setId()](../classes/YooKassa-Model-Payout.md#method_setId) |  | Устанавливает идентификатор выплаты |
| public | [setMetadata()](../classes/YooKassa-Model-Payout.md#method_setMetadata) |  | Устанавливает метаданные выплаты |
| public | [setPayoutDestination()](../classes/YooKassa-Model-Payout.md#method_setPayoutDestination) |  | Устанавливает используемый способ проведения выплаты |
| public | [setStatus()](../classes/YooKassa-Model-Payout.md#method_setStatus) |  | Устанавливает статус выплаты |
| public | [setTest()](../classes/YooKassa-Model-Payout.md#method_setTest) |  | Устанавливает признак тестовой операции |
| public | [toArray()](../classes/YooKassa-Common-AbstractObject.md#method_toArray) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации Является алиасом метода AbstractObject::jsonSerialize() |
| protected | [getUnknownProperties()](../classes/YooKassa-Common-AbstractObject.md#method_getUnknownProperties) |  | Возвращает массив свойств которые не существуют, но были заданы у объекта |

---
### Details
* File: [lib/Request/Payouts/CreatePayoutResponse.php](../../lib/Request/Payouts/CreatePayoutResponse.php)
* Package: YooKassa
* Class Hierarchy:   
  * [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
  * [\YooKassa\Model\Payout](../classes/YooKassa-Model-Payout.md)
  * [\YooKassa\Request\Payouts\AbstractPayoutResponse](../classes/YooKassa-Request-Payouts-AbstractPayoutResponse.md)
  * \YooKassa\Request\Payouts\CreatePayoutResponse

---
## Constants
<a name="constant_MAX_LENGTH_DESCRIPTION" class="anchor"></a>
###### MAX_LENGTH_DESCRIPTION
Inherited from [\YooKassa\Model\Payout](../classes/YooKassa-Model-Payout.md)

Максимальная длина строки описания выплаты

```php
MAX_LENGTH_DESCRIPTION = 128
```



---
## Properties
<a name="property_amount"></a>
#### public $amount : \YooKassa\Model\AmountInterface
---
***Description***

Сумма выплаты

**Type:** <a href="../classes/YooKassa-Model-AmountInterface.html"><abbr title="\YooKassa\Model\AmountInterface">AmountInterface</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\Payout](../classes/YooKassa-Model-Payout.md)


<a name="property_cancellation_details"></a>
#### public $cancellation_details : \YooKassa\Model\CancellationDetailsInterface
---
***Description***

Комментарий к отмене выплаты

**Type:** <a href="../classes/YooKassa-Model-CancellationDetailsInterface.html"><abbr title="\YooKassa\Model\CancellationDetailsInterface">CancellationDetailsInterface</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\Payout](../classes/YooKassa-Model-Payout.md)


<a name="property_cancellationDetails"></a>
#### public $cancellationDetails : \YooKassa\Model\CancellationDetailsInterface
---
***Description***

Комментарий к отмене выплаты

**Type:** <a href="../classes/YooKassa-Model-CancellationDetailsInterface.html"><abbr title="\YooKassa\Model\CancellationDetailsInterface">CancellationDetailsInterface</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\Payout](../classes/YooKassa-Model-Payout.md)


<a name="property_created_at"></a>
#### public $created_at : \DateTime
---
***Description***

Время создания заказа

**Type:** \DateTime

**Details:**
* Inherited From: [\YooKassa\Model\Payout](../classes/YooKassa-Model-Payout.md)


<a name="property_createdAt"></a>
#### public $createdAt : \DateTime
---
***Description***

Время создания заказа

**Type:** \DateTime

**Details:**
* Inherited From: [\YooKassa\Model\Payout](../classes/YooKassa-Model-Payout.md)


<a name="property_deal"></a>
#### public $deal : \YooKassa\Model\Deal\PayoutDealInfo
---
***Description***

Сделка, в рамках которой нужно провести выплату

**Type:** <a href="../classes/YooKassa-Model-Deal-PayoutDealInfo.html"><abbr title="\YooKassa\Model\Deal\PayoutDealInfo">PayoutDealInfo</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\Payout](../classes/YooKassa-Model-Payout.md)


<a name="property_description"></a>
#### public $description : string
---
***Description***

Описание транзакции

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\Payout](../classes/YooKassa-Model-Payout.md)


<a name="property_id"></a>
#### public $id : string
---
***Description***

Идентификатор выплаты

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\Payout](../classes/YooKassa-Model-Payout.md)


<a name="property_metadata"></a>
#### public $metadata : \YooKassa\Model\Metadata
---
***Description***

Метаданные выплаты указанные мерчантом

**Type:** <a href="../classes/YooKassa-Model-Metadata.html"><abbr title="\YooKassa\Model\Metadata">Metadata</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\Payout](../classes/YooKassa-Model-Payout.md)


<a name="property_payout_destination"></a>
#### public $payout_destination : \YooKassa\Model\PaymentMethod\AbstractPaymentMethod
---
***Description***

Способ проведения выплаты

**Type:** <a href="../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.html"><abbr title="\YooKassa\Model\PaymentMethod\AbstractPaymentMethod">AbstractPaymentMethod</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\Payout](../classes/YooKassa-Model-Payout.md)


<a name="property_payoutDestination"></a>
#### public $payoutDestination : \YooKassa\Model\PaymentMethod\AbstractPaymentMethod
---
***Description***

Способ проведения выплаты

**Type:** <a href="../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.html"><abbr title="\YooKassa\Model\PaymentMethod\AbstractPaymentMethod">AbstractPaymentMethod</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\Payout](../classes/YooKassa-Model-Payout.md)


<a name="property_status"></a>
#### public $status : string
---
***Description***

Текущее состояние выплаты

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\Payout](../classes/YooKassa-Model-Payout.md)


<a name="property_test"></a>
#### public $test : bool
---
***Description***

Признак тестовой операции

**Type:** <a href="../bool"><abbr title="bool">bool</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\Payout](../classes/YooKassa-Model-Payout.md)



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

Возвращает сумму

**Details:**
* Inherited From: [\YooKassa\Model\Payout](../classes/YooKassa-Model-Payout.md)

**Returns:** \YooKassa\Model\AmountInterface - Сумма выплаты


<a name="method_getCancellationDetails" class="anchor"></a>
#### public getCancellationDetails() : \YooKassa\Model\Payout\PayoutCancellationDetails|null

```php
public getCancellationDetails() : \YooKassa\Model\Payout\PayoutCancellationDetails|null
```

**Summary**

Возвращает комментарий к статусу canceled: кто отменил платеж и по какой причине

**Details:**
* Inherited From: [\YooKassa\Model\Payout](../classes/YooKassa-Model-Payout.md)

**Returns:** \YooKassa\Model\Payout\PayoutCancellationDetails|null - Комментарий к статусу canceled

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| since | 1.0.13 |  |

<a name="method_getCreatedAt" class="anchor"></a>
#### public getCreatedAt() : \DateTime

```php
public getCreatedAt() : \DateTime
```

**Summary**

Возвращает время создания заказа

**Details:**
* Inherited From: [\YooKassa\Model\Payout](../classes/YooKassa-Model-Payout.md)

**Returns:** \DateTime - Время создания заказа


<a name="method_getDeal" class="anchor"></a>
#### public getDeal() : \YooKassa\Model\Deal\PayoutDealInfo

```php
public getDeal() : \YooKassa\Model\Deal\PayoutDealInfo
```

**Summary**

Возвращает сделку, в рамках которой нужно провести выплату

**Details:**
* Inherited From: [\YooKassa\Model\Payout](../classes/YooKassa-Model-Payout.md)

**Returns:** \YooKassa\Model\Deal\PayoutDealInfo - Сделка, в рамках которой нужно провести выплату


<a name="method_getDescription" class="anchor"></a>
#### public getDescription() : string

```php
public getDescription() : string
```

**Summary**

Возвращает описание транзакции

**Details:**
* Inherited From: [\YooKassa\Model\Payout](../classes/YooKassa-Model-Payout.md)

**Returns:** string - 


<a name="method_getId" class="anchor"></a>
#### public getId() : string

```php
public getId() : string
```

**Summary**

Возвращает идентификатор выплаты

**Details:**
* Inherited From: [\YooKassa\Model\Payout](../classes/YooKassa-Model-Payout.md)

**Returns:** string - Идентификатор выплаты


<a name="method_getMetadata" class="anchor"></a>
#### public getMetadata() : \YooKassa\Model\Metadata

```php
public getMetadata() : \YooKassa\Model\Metadata
```

**Summary**

Возвращает метаданные выплаты установленные мерчантом

**Details:**
* Inherited From: [\YooKassa\Model\Payout](../classes/YooKassa-Model-Payout.md)

**Returns:** \YooKassa\Model\Metadata - Метаданные выплаты указанные мерчантом


<a name="method_getPayoutDestination" class="anchor"></a>
#### public getPayoutDestination() : \YooKassa\Model\PaymentMethod\AbstractPaymentMethod

```php
public getPayoutDestination() : \YooKassa\Model\PaymentMethod\AbstractPaymentMethod
```

**Summary**

Возвращает используемый способ проведения выплаты

**Details:**
* Inherited From: [\YooKassa\Model\Payout](../classes/YooKassa-Model-Payout.md)

**Returns:** \YooKassa\Model\PaymentMethod\AbstractPaymentMethod - Способ проведения выплаты


<a name="method_getStatus" class="anchor"></a>
#### public getStatus() : string

```php
public getStatus() : string
```

**Summary**

Возвращает состояние выплаты

**Details:**
* Inherited From: [\YooKassa\Model\Payout](../classes/YooKassa-Model-Payout.md)

**Returns:** string - Текущее состояние выплаты


<a name="method_getTest" class="anchor"></a>
#### public getTest() : bool

```php
public getTest() : bool
```

**Summary**

Возвращает признак тестовой операции

**Details:**
* Inherited From: [\YooKassa\Model\Payout](../classes/YooKassa-Model-Payout.md)

**Returns:** bool - Признак тестовой операции


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
public setAmount(\YooKassa\Model\AmountInterface|array $value) : mixed
```

**Summary**

Устанавливает сумму выплаты

**Details:**
* Inherited From: [\YooKassa\Model\Payout](../classes/YooKassa-Model-Payout.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\AmountInterface OR array</code> | value  | Сумма выплаты |

**Returns:** mixed - 


<a name="method_setCancellationDetails" class="anchor"></a>
#### public setCancellationDetails() : mixed

```php
public setCancellationDetails(\YooKassa\Model\Payout\PayoutCancellationDetails|array|null $value) : mixed
```

**Summary**

Устанавливает комментарий к статусу canceled: кто отменил платеж и по какой причине

**Details:**
* Inherited From: [\YooKassa\Model\Payout](../classes/YooKassa-Model-Payout.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\Payout\PayoutCancellationDetails OR array OR null</code> | value  | Комментарий к статусу canceled |

**Returns:** mixed - 


<a name="method_setCreatedAt" class="anchor"></a>
#### public setCreatedAt() : mixed

```php
public setCreatedAt(\DateTime|string|int $value) : mixed
```

**Summary**

Устанавливает время создания заказа

**Details:**
* Inherited From: [\YooKassa\Model\Payout](../classes/YooKassa-Model-Payout.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int</code> | value  | Время создания заказа |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\EmptyPropertyValueException | Выбрасывается если в метод была передана пустая дата |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если передали строку, которую не удалось привести к дате |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Выбрасывается если был передан аргумент, который невозможно интерпретировать как дату или время |

**Returns:** mixed - 


<a name="method_setDeal" class="anchor"></a>
#### public setDeal() : mixed

```php
public setDeal(\YooKassa\Model\Deal\PayoutDealInfo|array $value) : mixed
```

**Summary**

Устанавливает сделку, в рамках которой нужно провести выплату

**Details:**
* Inherited From: [\YooKassa\Model\Payout](../classes/YooKassa-Model-Payout.md)

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
* Inherited From: [\YooKassa\Model\Payout](../classes/YooKassa-Model-Payout.md)

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


<a name="method_setId" class="anchor"></a>
#### public setId() : mixed

```php
public setId(string $value) : mixed
```

**Summary**

Устанавливает идентификатор выплаты

**Details:**
* Inherited From: [\YooKassa\Model\Payout](../classes/YooKassa-Model-Payout.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Идентификатор выплаты |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если длина переданной строки не равна 36 |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод была передана не строка |

**Returns:** mixed - 


<a name="method_setMetadata" class="anchor"></a>
#### public setMetadata() : mixed

```php
public setMetadata(\YooKassa\Model\Metadata|array $value) : mixed
```

**Summary**

Устанавливает метаданные выплаты

**Details:**
* Inherited From: [\YooKassa\Model\Payout](../classes/YooKassa-Model-Payout.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\Metadata OR array</code> | value  | Метаданные выплаты указанные мерчантом |

**Returns:** mixed - 


<a name="method_setPayoutDestination" class="anchor"></a>
#### public setPayoutDestination() : mixed

```php
public setPayoutDestination(\YooKassa\Model\Payout\AbstractPayoutDestination|array $value) : mixed
```

**Summary**

Устанавливает используемый способ проведения выплаты

**Details:**
* Inherited From: [\YooKassa\Model\Payout](../classes/YooKassa-Model-Payout.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\Payout\AbstractPayoutDestination OR array</code> | value  | Способ проведения выплаты |

**Returns:** mixed - 


<a name="method_setStatus" class="anchor"></a>
#### public setStatus() : mixed

```php
public setStatus(string $value) : mixed
```

**Summary**

Устанавливает статус выплаты

**Details:**
* Inherited From: [\YooKassa\Model\Payout](../classes/YooKassa-Model-Payout.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Статус выплаты |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если переданная строка не является валидным статусом |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод была передана не строка |

**Returns:** mixed - 


<a name="method_setTest" class="anchor"></a>
#### public setTest() : mixed

```php
public setTest(bool $value) : mixed
```

**Summary**

Устанавливает признак тестовой операции

**Details:**
* Inherited From: [\YooKassa\Model\Payout](../classes/YooKassa-Model-Payout.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">bool</code> | value  | Признак тестовой операции |

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