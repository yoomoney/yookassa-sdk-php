# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Request\Receipts\ReceiptsRequest
### Namespace: [\YooKassa\Request\Receipts](../namespaces/yookassa-request-receipts.md)
---
**Summary:**

Класс объекта запроса к API списка возвратов магазина

---
### Constants
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [MAX_LIMIT_VALUE](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#constant_MAX_LIMIT_VALUE) |  | Максимальное количество объектов чеков в выборке |
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [$createdAtGt](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#property_createdAtGt) |  | Время создания, от (не включая) |
| public | [$createdAtGte](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#property_createdAtGte) |  | Время создания, от (включительно) |
| public | [$createdAtLt](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#property_createdAtLt) |  | Время создания, до (не включая) |
| public | [$createdAtLte](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#property_createdAtLte) |  | Время создания, до (включительно) |
| public | [$cursor](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#property_cursor) |  | Токен для получения следующей страницы выборки |
| public | [$limit](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#property_limit) |  | Ограничение количества объектов возврата, отображаемых на одной странице выдачи |
| public | [$paymentId](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#property_paymentId) |  | Идентификатор платежа |
| public | [$refundId](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#property_refundId) |  | Идентификатор возврата |
| public | [$status](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#property_status) |  | Статус возврата |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Common-AbstractObject.md#method___construct) |  | AbstractObject constructor. |
| public | [__get()](../classes/YooKassa-Common-AbstractObject.md#method___get) |  | Возвращает значение свойства |
| public | [__isset()](../classes/YooKassa-Common-AbstractObject.md#method___isset) |  | Проверяет наличие свойства |
| public | [__set()](../classes/YooKassa-Common-AbstractObject.md#method___set) |  | Устанавливает значение свойства |
| public | [__unset()](../classes/YooKassa-Common-AbstractObject.md#method___unset) |  | Удаляет свойство |
| public | [builder()](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#method_builder) |  | Возвращает инстанс билдера объектов запросов списка возвратов магазина |
| public | [clearValidationError()](../classes/YooKassa-Common-AbstractRequest.md#method_clearValidationError) |  | Очищает статус валидации текущего запроса |
| public | [fromArray()](../classes/YooKassa-Common-AbstractObject.md#method_fromArray) |  | Устанавливает значения свойств текущего объекта из массива |
| public | [getCreatedAtGt()](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#method_getCreatedAtGt) |  | Возвращает дату создания от которой будут возвращены возвраты или null если дата не была установлена |
| public | [getCreatedAtGte()](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#method_getCreatedAtGte) |  | Возвращает дату создания от которой будут возвращены возвраты или null если дата не была установлена |
| public | [getCreatedAtLt()](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#method_getCreatedAtLt) |  | Возвращает дату создания до которой будут возвращены возвраты или null если дата не была установлена |
| public | [getCreatedAtLte()](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#method_getCreatedAtLte) |  | Возвращает дату создания до которой будут возвращены возвраты или null если дата не была установлена |
| public | [getCursor()](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#method_getCursor) |  | Возвращает токен для получения следующей страницы выборки |
| public | [getLastValidationError()](../classes/YooKassa-Common-AbstractRequest.md#method_getLastValidationError) |  | Возвращает последнюю ошибку валидации |
| public | [getLimit()](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#method_getLimit) |  | Ограничение количества объектов платежа |
| public | [getPaymentId()](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#method_getPaymentId) |  | Возвращает идентификатор платежа если он задан или null |
| public | [getRefundId()](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#method_getRefundId) |  | Возвращает идентификатор возврата |
| public | [getStatus()](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#method_getStatus) |  | Возвращает статус выбираемых возвратов или null если он до этого не был установлен |
| public | [hasCreatedAtGt()](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#method_hasCreatedAtGt) |  | Проверяет была ли установлена дата создания от которой выбираются возвраты |
| public | [hasCreatedAtGte()](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#method_hasCreatedAtGte) |  | Проверяет была ли установлена дата создания от которой выбираются возвраты |
| public | [hasCreatedAtLt()](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#method_hasCreatedAtLt) |  | Проверяет была ли установлена дата создания до которой выбираются возвраты |
| public | [hasCreatedAtLte()](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#method_hasCreatedAtLte) |  | Проверяет была ли установлена дата создания до которой выбираются возвраты |
| public | [hasCursor()](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#method_hasCursor) |  | Проверяет был ли установлен токен следующей страницы |
| public | [hasLimit()](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#method_hasLimit) |  | Проверяет был ли установлено ограничение количества объектов платежа |
| public | [hasPaymentId()](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#method_hasPaymentId) |  | Проверяет, был ли задан идентификатор платежа |
| public | [hasRefundId()](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#method_hasRefundId) |  | Проверяет был ли установлен идентификатор возврата |
| public | [hasStatus()](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#method_hasStatus) |  | Проверяет был ли установлен статус выбираемых возвратов |
| public | [jsonSerialize()](../classes/YooKassa-Common-AbstractObject.md#method_jsonSerialize) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации |
| public | [offsetExists()](../classes/YooKassa-Common-AbstractObject.md#method_offsetExists) |  | Проверяет наличие свойства |
| public | [offsetGet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetGet) |  | Возвращает значение свойства |
| public | [offsetSet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetSet) |  | Устанавливает значение свойства |
| public | [offsetUnset()](../classes/YooKassa-Common-AbstractObject.md#method_offsetUnset) |  | Удаляет свойство |
| public | [setCreatedAtGt()](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#method_setCreatedAtGt) |  | Устанавливает дату создания от которой выбираются возвраты |
| public | [setCreatedAtGte()](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#method_setCreatedAtGte) |  | Устанавливает дату создания от которой выбираются возвраты |
| public | [setCreatedAtLt()](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#method_setCreatedAtLt) |  | Устанавливает дату создания до которой выбираются возвраты |
| public | [setCreatedAtLte()](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#method_setCreatedAtLte) |  | Устанавливает дату создания до которой выбираются возвраты |
| public | [setCursor()](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#method_setCursor) |  | Устанавливает токен следующей страницы выборки |
| public | [setLimit()](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#method_setLimit) |  | Устанавливает ограничение количества объектов платежа |
| public | [setPaymentId()](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#method_setPaymentId) |  | Устанавливает идентификатор платежа или null если требуется его удалить |
| public | [setRefundId()](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#method_setRefundId) |  | Устанавливает идентификатор возврата |
| public | [setStatus()](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#method_setStatus) |  | Устанавливает статус выбираемых возвратов |
| public | [toArray()](../classes/YooKassa-Common-AbstractObject.md#method_toArray) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации Является алиасом метода AbstractObject::jsonSerialize() |
| public | [validate()](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md#method_validate) |  | Проверяет валидность текущего объекта запроса |
| protected | [getUnknownProperties()](../classes/YooKassa-Common-AbstractObject.md#method_getUnknownProperties) |  | Возвращает массив свойств которые не существуют, но были заданы у объекта |
| protected | [setValidationError()](../classes/YooKassa-Common-AbstractRequest.md#method_setValidationError) |  | Устанавливает ошибку валидации |
---
### Details
* File: [lib/Request/Receipts/ReceiptsRequest.php](../../lib/Request/Receipts/ReceiptsRequest.php)
* Package: YooKassa
* Class Hierarchy:  
  * [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
  * [\YooKassa\Common\AbstractRequest](../classes/YooKassa-Common-AbstractRequest.md)
  * \YooKassa\Request\Receipts\ReceiptsRequest
* Implements:
  * [\YooKassa\Request\Receipts\ReceiptsRequestInterface](../classes/YooKassa-Request-Receipts-ReceiptsRequestInterface.md)
---
## Constants
<a name="constant_MAX_LIMIT_VALUE" class="anchor"></a>
###### MAX_LIMIT_VALUE
Максимальное количество объектов чеков в выборке

```php
MAX_LIMIT_VALUE = 100
```


---
## Properties
<a name="property_createdAtGt"></a>
#### public $createdAtGt : \DateTime
---
***Description***

Время создания, от (не включая)

**Type:** \DateTime

**Details:**


<a name="property_createdAtGte"></a>
#### public $createdAtGte : \DateTime
---
***Description***

Время создания, от (включительно)

**Type:** \DateTime

**Details:**


<a name="property_createdAtLt"></a>
#### public $createdAtLt : \DateTime
---
***Description***

Время создания, до (не включая)

**Type:** \DateTime

**Details:**


<a name="property_createdAtLte"></a>
#### public $createdAtLte : \DateTime
---
***Description***

Время создания, до (включительно)

**Type:** \DateTime

**Details:**


<a name="property_cursor"></a>
#### public $cursor : string
---
***Description***

Токен для получения следующей страницы выборки

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_limit"></a>
#### public $limit : int|null
---
***Description***

Ограничение количества объектов возврата, отображаемых на одной странице выдачи

**Type:** <a href="../int|null"><abbr title="int|null">int|null</abbr></a>

**Details:**


<a name="property_paymentId"></a>
#### public $paymentId : string
---
***Description***

Идентификатор платежа

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_refundId"></a>
#### public $refundId : string
---
***Description***

Идентификатор возврата

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_status"></a>
#### public $status : string
---
***Description***

Статус возврата

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**



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


<a name="method_builder" class="anchor"></a>
#### public builder() : \YooKassa\Request\Receipts\ReceiptsRequestBuilder

```php
Static public builder() : \YooKassa\Request\Receipts\ReceiptsRequestBuilder
```

**Summary**

Возвращает инстанс билдера объектов запросов списка возвратов магазина

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequest](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md)

**Returns:** \YooKassa\Request\Receipts\ReceiptsRequestBuilder - Билдер объектов запросов списка возвратов


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
* Inherited From: [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array OR \Traversable</code> | sourceArray  | Ассоциативный массив с настройками |

**Returns:** mixed - 


<a name="method_getCreatedAtGt" class="anchor"></a>
#### public getCreatedAtGt() : \DateTime|null

```php
public getCreatedAtGt() : \DateTime|null
```

**Summary**

Возвращает дату создания от которой будут возвращены возвраты или null если дата не была установлена

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequest](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md)

**Returns:** \DateTime|null - Время создания, от (не включая)


<a name="method_getCreatedAtGte" class="anchor"></a>
#### public getCreatedAtGte() : \DateTime|null

```php
public getCreatedAtGte() : \DateTime|null
```

**Summary**

Возвращает дату создания от которой будут возвращены возвраты или null если дата не была установлена

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequest](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md)

**Returns:** \DateTime|null - Время создания, от (включительно)


<a name="method_getCreatedAtLt" class="anchor"></a>
#### public getCreatedAtLt() : \DateTime|null

```php
public getCreatedAtLt() : \DateTime|null
```

**Summary**

Возвращает дату создания до которой будут возвращены возвраты или null если дата не была установлена

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequest](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md)

**Returns:** \DateTime|null - Время создания, до (не включая)


<a name="method_getCreatedAtLte" class="anchor"></a>
#### public getCreatedAtLte() : \DateTime|null

```php
public getCreatedAtLte() : \DateTime|null
```

**Summary**

Возвращает дату создания до которой будут возвращены возвраты или null если дата не была установлена

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequest](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md)

**Returns:** \DateTime|null - Время создания, до (включительно)


<a name="method_getCursor" class="anchor"></a>
#### public getCursor() : string|null

```php
public getCursor() : string|null
```

**Summary**

Возвращает токен для получения следующей страницы выборки

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequest](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md)

**Returns:** string|null - Токен для получения следующей страницы выборки


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


<a name="method_getLimit" class="anchor"></a>
#### public getLimit() : int|null

```php
public getLimit() : int|null
```

**Summary**

Ограничение количества объектов платежа

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequest](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md)

**Returns:** int|null - Ограничение количества объектов платежа


<a name="method_getPaymentId" class="anchor"></a>
#### public getPaymentId() : string|null

```php
public getPaymentId() : string|null
```

**Summary**

Возвращает идентификатор платежа если он задан или null

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequest](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md)

**Returns:** string|null - Идентификатор платежа


<a name="method_getRefundId" class="anchor"></a>
#### public getRefundId() : string

```php
public getRefundId() : string
```

**Summary**

Возвращает идентификатор возврата

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequest](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md)

**Returns:** string - Идентификатор возврата


<a name="method_getStatus" class="anchor"></a>
#### public getStatus() : string|null

```php
public getStatus() : string|null
```

**Summary**

Возвращает статус выбираемых возвратов или null если он до этого не был установлен

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequest](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md)

**Returns:** string|null - Статус выбираемых возвратов


<a name="method_hasCreatedAtGt" class="anchor"></a>
#### public hasCreatedAtGt() : bool

```php
public hasCreatedAtGt() : bool
```

**Summary**

Проверяет была ли установлена дата создания от которой выбираются возвраты

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequest](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md)

**Returns:** bool - True если дата была установлена, false если нет


<a name="method_hasCreatedAtGte" class="anchor"></a>
#### public hasCreatedAtGte() : bool

```php
public hasCreatedAtGte() : bool
```

**Summary**

Проверяет была ли установлена дата создания от которой выбираются возвраты

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequest](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md)

**Returns:** bool - True если дата была установлена, false если нет


<a name="method_hasCreatedAtLt" class="anchor"></a>
#### public hasCreatedAtLt() : bool

```php
public hasCreatedAtLt() : bool
```

**Summary**

Проверяет была ли установлена дата создания до которой выбираются возвраты

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequest](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md)

**Returns:** bool - True если дата была установлена, false если нет


<a name="method_hasCreatedAtLte" class="anchor"></a>
#### public hasCreatedAtLte() : bool

```php
public hasCreatedAtLte() : bool
```

**Summary**

Проверяет была ли установлена дата создания до которой выбираются возвраты

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequest](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md)

**Returns:** bool - True если дата была установлена, false если нет


<a name="method_hasCursor" class="anchor"></a>
#### public hasCursor() : bool

```php
public hasCursor() : bool
```

**Summary**

Проверяет был ли установлен токен следующей страницы

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequest](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md)

**Returns:** bool - True если токен был установлен, false если нет


<a name="method_hasLimit" class="anchor"></a>
#### public hasLimit() : bool

```php
public hasLimit() : bool
```

**Summary**

Проверяет был ли установлено ограничение количества объектов платежа

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequest](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md)

**Returns:** bool - True если было установлено, false если нет


<a name="method_hasPaymentId" class="anchor"></a>
#### public hasPaymentId() : bool

```php
public hasPaymentId() : bool
```

**Summary**

Проверяет, был ли задан идентификатор платежа

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequest](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md)

**Returns:** bool - True если идентификатор был задан, false если нет


<a name="method_hasRefundId" class="anchor"></a>
#### public hasRefundId() : bool

```php
public hasRefundId() : bool
```

**Summary**

Проверяет был ли установлен идентификатор возврата

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequest](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md)

**Returns:** bool - True если идентификатор возврата был установлен, false если не был


<a name="method_hasStatus" class="anchor"></a>
#### public hasStatus() : bool

```php
public hasStatus() : bool
```

**Summary**

Проверяет был ли установлен статус выбираемых возвратов

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequest](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md)

**Returns:** bool - True если статус был установлен, false если нет


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


<a name="method_setCreatedAtGt" class="anchor"></a>
#### public setCreatedAtGt() : mixed

```php
public setCreatedAtGt(\DateTime|string|int|null  value) : mixed
```

**Summary**

Устанавливает дату создания от которой выбираются возвраты

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequest](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время создания, от (не включая) или null чтобы удалить значение |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** mixed - 


<a name="method_setCreatedAtGte" class="anchor"></a>
#### public setCreatedAtGte() : mixed

```php
public setCreatedAtGte(\DateTime|string|int|null  value) : mixed
```

**Summary**

Устанавливает дату создания от которой выбираются возвраты

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequest](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время создания, от (включительно) или null чтобы удалить значение |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** mixed - 


<a name="method_setCreatedAtLt" class="anchor"></a>
#### public setCreatedAtLt() : mixed

```php
public setCreatedAtLt(\DateTime|string|int|null  value) : mixed
```

**Summary**

Устанавливает дату создания до которой выбираются возвраты

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequest](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время создания, до (не включая) или null чтобы удалить значение |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** mixed - 


<a name="method_setCreatedAtLte" class="anchor"></a>
#### public setCreatedAtLte() : mixed

```php
public setCreatedAtLte(\DateTime|string|int|null  value) : mixed
```

**Summary**

Устанавливает дату создания до которой выбираются возвраты

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequest](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время создания, до (включительно) или null чтобы удалить значение |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** mixed - 


<a name="method_setCursor" class="anchor"></a>
#### public setCursor() : mixed

```php
public setCursor(string  value) : mixed
```

**Summary**

Устанавливает токен следующей страницы выборки

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequest](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Токен следующей страницы выборки или null чтобы удалить значение |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод была передана не строка |

**Returns:** mixed - 


<a name="method_setLimit" class="anchor"></a>
#### public setLimit() : mixed

```php
public setLimit(int|null  value) : mixed
```

**Summary**

Устанавливает ограничение количества объектов платежа

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequest](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">int OR null</code> | value  | Ограничение количества объектов платежа или null чтобы удалить значение |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод была передано не целое число |

**Returns:** mixed - 


<a name="method_setPaymentId" class="anchor"></a>
#### public setPaymentId() : mixed

```php
public setPaymentId(string|null  value) : mixed
```

**Summary**

Устанавливает идентификатор платежа или null если требуется его удалить

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequest](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string OR null</code> | value  | Идентификатор платежа |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если длина переданной строки не равна 36 символам |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод была передана не строка |

**Returns:** mixed - 


<a name="method_setRefundId" class="anchor"></a>
#### public setRefundId() : mixed

```php
public setRefundId(string  value) : mixed
```

**Summary**

Устанавливает идентификатор возврата

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequest](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Идентификатор возврата, который ищется в API |

**Returns:** mixed - 


<a name="method_setStatus" class="anchor"></a>
#### public setStatus() : mixed

```php
public setStatus(string  value) : mixed
```

**Summary**

Устанавливает статус выбираемых возвратов

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequest](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Статус выбираемых платежей или null чтобы удалить значение |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если переданное значение не является валидным статусом |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод была передана не строка |

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

Проверяет валидность текущего объекта запроса

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptsRequest](../classes/YooKassa-Request-Receipts-ReceiptsRequest.md)

**Returns:** bool - True если объект валиден, false если нет


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