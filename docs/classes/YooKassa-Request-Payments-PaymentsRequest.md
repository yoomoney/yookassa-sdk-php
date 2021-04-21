# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Request\Payments\PaymentsRequest
### Namespace: [\YooKassa\Request\Payments](../namespaces/yookassa-request-payments.md)
---
**Summary:**

Класс объекта запроса к API для получения списка платежей магазина

---
### Constants
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [MAX_LIMIT_VALUE](../classes/YooKassa-Request-Payments-PaymentsRequest.md#constant_MAX_LIMIT_VALUE) |  | Максимальное количество объектов платежа в выборке |
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [$capturedAtGt](../classes/YooKassa-Request-Payments-PaymentsRequest.md#property_capturedAtGt) |  | Время подтверждения, от (не включая) |
| public | [$capturedAtGte](../classes/YooKassa-Request-Payments-PaymentsRequest.md#property_capturedAtGte) |  | Время подтверждения, от (включительно) |
| public | [$capturedAtLt](../classes/YooKassa-Request-Payments-PaymentsRequest.md#property_capturedAtLt) |  | Время подтверждения, до (не включая) |
| public | [$capturedAtLte](../classes/YooKassa-Request-Payments-PaymentsRequest.md#property_capturedAtLte) |  | Время подтверждения, до (включительно) |
| public | [$createdAtGt](../classes/YooKassa-Request-Payments-PaymentsRequest.md#property_createdAtGt) |  | Время создания, от (не включая) |
| public | [$createdAtGte](../classes/YooKassa-Request-Payments-PaymentsRequest.md#property_createdAtGte) |  | Время создания, от (включительно) |
| public | [$createdAtLt](../classes/YooKassa-Request-Payments-PaymentsRequest.md#property_createdAtLt) |  | Время создания, до (не включая) |
| public | [$createdAtLte](../classes/YooKassa-Request-Payments-PaymentsRequest.md#property_createdAtLte) |  | Время создания, до (включительно) |
| public | [$cursor](../classes/YooKassa-Request-Payments-PaymentsRequest.md#property_cursor) |  | Страница выдачи результатов, которую необходимо отобразить |
| public | [$limit](../classes/YooKassa-Request-Payments-PaymentsRequest.md#property_limit) |  | Ограничение количества объектов платежа, отображаемых на одной странице выдачи |
| public | [$paymentMethod](../classes/YooKassa-Request-Payments-PaymentsRequest.md#property_paymentMethod) |  | Платежный метод |
| public | [$status](../classes/YooKassa-Request-Payments-PaymentsRequest.md#property_status) |  | Статус платежа |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Common-AbstractObject.md#method___construct) |  | AbstractObject constructor. |
| public | [__get()](../classes/YooKassa-Common-AbstractObject.md#method___get) |  | Возвращает значение свойства |
| public | [__isset()](../classes/YooKassa-Common-AbstractObject.md#method___isset) |  | Проверяет наличие свойства |
| public | [__set()](../classes/YooKassa-Common-AbstractObject.md#method___set) |  | Устанавливает значение свойства |
| public | [__unset()](../classes/YooKassa-Common-AbstractObject.md#method___unset) |  | Удаляет свойство |
| public | [builder()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_builder) |  | Возвращает инстанс билдера объектов запросов списка платежей магазина |
| public | [clearValidationError()](../classes/YooKassa-Common-AbstractRequest.md#method_clearValidationError) |  | Очищает статус валидации текущего запроса |
| public | [fromArray()](../classes/YooKassa-Common-AbstractObject.md#method_fromArray) |  | Устанавливает значения свойств текущего объекта из массива |
| public | [getCapturedAtGt()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_getCapturedAtGt) |  | Возвращает дату подтверждения от которой будут возвращены платежи или null если дата не была установлена |
| public | [getCapturedAtGte()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_getCapturedAtGte) |  | Возвращает дату подтверждения от которой будут возвращены платежи или null если дата не была установлена |
| public | [getCapturedAtLt()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_getCapturedAtLt) |  | Возвращает дату подтверждения до которой будут возвращены платежи или null если дата не была установлена |
| public | [getCapturedAtLte()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_getCapturedAtLte) |  | Возвращает дату подтверждения до которой будут возвращены платежи или null если дата не была установлена |
| public | [getCreatedAtGt()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_getCreatedAtGt) |  | Возвращает дату создания от которой будут возвращены платежи или null если дата не была установлена |
| public | [getCreatedAtGte()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_getCreatedAtGte) |  | Возвращает дату создания от которой будут возвращены платежи или null если дата не была установлена |
| public | [getCreatedAtLt()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_getCreatedAtLt) |  | Возвращает дату создания до которой будут возвращены платежи или null если дата не была установлена |
| public | [getCreatedAtLte()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_getCreatedAtLte) |  | Возвращает дату создания до которой будут возвращены платежи или null если дата не была установлена |
| public | [getCursor()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_getCursor) |  | Страница выдачи результатов, которую необходимо отобразить |
| public | [getLastValidationError()](../classes/YooKassa-Common-AbstractRequest.md#method_getLastValidationError) |  | Возвращает последнюю ошибку валидации |
| public | [getLimit()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_getLimit) |  | Ограничение количества объектов платежа |
| public | [getPaymentMethod()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_getPaymentMethod) |  | Возвращает платежный метод выбираемых платежей или null если он до этого не был установлен |
| public | [getStatus()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_getStatus) |  | Возвращает статус выбираемых платежей или null если он до этого не был установлен |
| public | [hasCapturedAtGt()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_hasCapturedAtGt) |  | Проверяет была ли установлена дата подтверждения от которой выбираются платежи |
| public | [hasCapturedAtGte()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_hasCapturedAtGte) |  | Проверяет была ли установлена дата подтверждения от которой выбираются платежи |
| public | [hasCapturedAtLt()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_hasCapturedAtLt) |  | Проверяет была ли установлена дата подтверждения до которой выбираются платежи |
| public | [hasCapturedAtLte()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_hasCapturedAtLte) |  | Проверяет была ли установлена дата подтверждения до которой выбираются платежи |
| public | [hasCreatedAtGt()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_hasCreatedAtGt) |  | Проверяет была ли установлена дата создания от которой выбираются платежи |
| public | [hasCreatedAtGte()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_hasCreatedAtGte) |  | Проверяет была ли установлена дата создания от которой выбираются платежи |
| public | [hasCreatedAtLt()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_hasCreatedAtLt) |  | Проверяет была ли установлена дата создания до которой выбираются платежи |
| public | [hasCreatedAtLte()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_hasCreatedAtLte) |  | Проверяет была ли установлена дата создания до которой выбираются платежи |
| public | [hasCursor()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_hasCursor) |  | Проверяет был ли установлена страница выдачи результатов, которую необходимо отобразить |
| public | [hasLimit()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_hasLimit) |  | Проверяет был ли установлено ограничение количества объектов платежа |
| public | [hasPaymentMethod()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_hasPaymentMethod) |  | Проверяет был ли установлен платежный метод выбираемых платежей |
| public | [hasStatus()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_hasStatus) |  | Проверяет был ли установлен статус выбираемых платежей |
| public | [jsonSerialize()](../classes/YooKassa-Common-AbstractObject.md#method_jsonSerialize) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации |
| public | [offsetExists()](../classes/YooKassa-Common-AbstractObject.md#method_offsetExists) |  | Проверяет наличие свойства |
| public | [offsetGet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetGet) |  | Возвращает значение свойства |
| public | [offsetSet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetSet) |  | Устанавливает значение свойства |
| public | [offsetUnset()](../classes/YooKassa-Common-AbstractObject.md#method_offsetUnset) |  | Удаляет свойство |
| public | [setCapturedAtGt()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_setCapturedAtGt) |  | Устанавливает дату подтверждения от которой выбираются платежи |
| public | [setCapturedAtGte()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_setCapturedAtGte) |  | Устанавливает дату подтверждения от которой выбираются платежи |
| public | [setCapturedAtLt()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_setCapturedAtLt) |  | Устанавливает дату подтверждения до которой выбираются платежи |
| public | [setCapturedAtLte()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_setCapturedAtLte) |  | Устанавливает дату подтверждения до которой выбираются платежи |
| public | [setCreatedAtGt()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_setCreatedAtGt) |  | Устанавливает дату создания от которой выбираются платежи |
| public | [setCreatedAtGte()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_setCreatedAtGte) |  | Устанавливает дату создания от которой выбираются платежи |
| public | [setCreatedAtLt()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_setCreatedAtLt) |  | Устанавливает дату создания до которой выбираются платежи |
| public | [setCreatedAtLte()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_setCreatedAtLte) |  | Устанавливает дату создания до которой выбираются платежи |
| public | [setCursor()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_setCursor) |  | Устанавливает cтраницw выдачи результатов, которую необходимо отобразить |
| public | [setLimit()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_setLimit) |  | Устанавливает ограничение количества объектов платежа |
| public | [setPaymentMethod()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_setPaymentMethod) |  | Устанавливает платежный метод выбираемых платежей |
| public | [setStatus()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_setStatus) |  | Устанавливает статус выбираемых платежей |
| public | [toArray()](../classes/YooKassa-Common-AbstractObject.md#method_toArray) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации Является алиасом метода AbstractObject::jsonSerialize() |
| public | [validate()](../classes/YooKassa-Request-Payments-PaymentsRequest.md#method_validate) |  | Проверяет валидность текущего объекта запроса |
| protected | [getUnknownProperties()](../classes/YooKassa-Common-AbstractObject.md#method_getUnknownProperties) |  | Возвращает массив свойств которые не существуют, но были заданы у объекта |
| protected | [setValidationError()](../classes/YooKassa-Common-AbstractRequest.md#method_setValidationError) |  | Устанавливает ошибку валидации |
---
### Details
* File: [lib/Request/Payments/PaymentsRequest.php](../../lib/Request/Payments/PaymentsRequest.php)
* Package: Default
* Class Hierarchy:  
  * [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
  * [\YooKassa\Common\AbstractRequest](../classes/YooKassa-Common-AbstractRequest.md)
  * \YooKassa\Request\Payments\PaymentsRequest
* Implements:
  * [\YooKassa\Request\Payments\PaymentsRequestInterface](../classes/YooKassa-Request-Payments-PaymentsRequestInterface.md)
---
## Constants
<a name="constant_MAX_LIMIT_VALUE" class="anchor"></a>
###### MAX_LIMIT_VALUE
Максимальное количество объектов платежа в выборке

```php
MAX_LIMIT_VALUE = 100
```


---
## Properties
<a name="property_capturedAtGt"></a>
#### public $capturedAtGt : \DateTime|null
---
***Description***

Время подтверждения, от (не включая)

**Type:** <a href="../\DateTime|null"><abbr title="\DateTime|null">DateTime|null</abbr></a>

**Details:**


<a name="property_capturedAtGte"></a>
#### public $capturedAtGte : \DateTime|null
---
***Description***

Время подтверждения, от (включительно)

**Type:** <a href="../\DateTime|null"><abbr title="\DateTime|null">DateTime|null</abbr></a>

**Details:**


<a name="property_capturedAtLt"></a>
#### public $capturedAtLt : \DateTime|null
---
***Description***

Время подтверждения, до (не включая)

**Type:** <a href="../\DateTime|null"><abbr title="\DateTime|null">DateTime|null</abbr></a>

**Details:**


<a name="property_capturedAtLte"></a>
#### public $capturedAtLte : \DateTime|null
---
***Description***

Время подтверждения, до (включительно)

**Type:** <a href="../\DateTime|null"><abbr title="\DateTime|null">DateTime|null</abbr></a>

**Details:**


<a name="property_createdAtGt"></a>
#### public $createdAtGt : \DateTime|null
---
***Description***

Время создания, от (не включая)

**Type:** <a href="../\DateTime|null"><abbr title="\DateTime|null">DateTime|null</abbr></a>

**Details:**


<a name="property_createdAtGte"></a>
#### public $createdAtGte : \DateTime|null
---
***Description***

Время создания, от (включительно)

**Type:** <a href="../\DateTime|null"><abbr title="\DateTime|null">DateTime|null</abbr></a>

**Details:**


<a name="property_createdAtLt"></a>
#### public $createdAtLt : \DateTime|null
---
***Description***

Время создания, до (не включая)

**Type:** <a href="../\DateTime|null"><abbr title="\DateTime|null">DateTime|null</abbr></a>

**Details:**


<a name="property_createdAtLte"></a>
#### public $createdAtLte : \DateTime|null
---
***Description***

Время создания, до (включительно)

**Type:** <a href="../\DateTime|null"><abbr title="\DateTime|null">DateTime|null</abbr></a>

**Details:**


<a name="property_cursor"></a>
#### public $cursor : string|null
---
***Description***

Страница выдачи результатов, которую необходимо отобразить

**Type:** <a href="../string|null"><abbr title="string|null">string|null</abbr></a>

**Details:**


<a name="property_limit"></a>
#### public $limit : int|null
---
***Description***

Ограничение количества объектов платежа, отображаемых на одной странице выдачи

**Type:** <a href="../int|null"><abbr title="int|null">int|null</abbr></a>

**Details:**


<a name="property_paymentMethod"></a>
#### public $paymentMethod : string|null
---
***Description***

Платежный метод

**Type:** <a href="../string|null"><abbr title="string|null">string|null</abbr></a>

**Details:**


<a name="property_status"></a>
#### public $status : string|null
---
***Description***

Статус платежа

**Type:** <a href="../string|null"><abbr title="string|null">string|null</abbr></a>

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
#### public builder() : \YooKassa\Request\Payments\PaymentsRequestBuilder

```php
Static public builder() : \YooKassa\Request\Payments\PaymentsRequestBuilder
```

**Summary**

Возвращает инстанс билдера объектов запросов списка платежей магазина

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)

**Returns:** \YooKassa\Request\Payments\PaymentsRequestBuilder - Билдер объектов запросов списка платежей


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


<a name="method_getCapturedAtGt" class="anchor"></a>
#### public getCapturedAtGt() : \DateTime|null

```php
public getCapturedAtGt() : \DateTime|null
```

**Summary**

Возвращает дату подтверждения от которой будут возвращены платежи или null если дата не была установлена

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)

**Returns:** \DateTime|null - Время подтверждения, от (не включая)


<a name="method_getCapturedAtGte" class="anchor"></a>
#### public getCapturedAtGte() : \DateTime|null

```php
public getCapturedAtGte() : \DateTime|null
```

**Summary**

Возвращает дату подтверждения от которой будут возвращены платежи или null если дата не была установлена

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)

**Returns:** \DateTime|null - Время подтверждения, от (включительно)


<a name="method_getCapturedAtLt" class="anchor"></a>
#### public getCapturedAtLt() : \DateTime|null

```php
public getCapturedAtLt() : \DateTime|null
```

**Summary**

Возвращает дату подтверждения до которой будут возвращены платежи или null если дата не была установлена

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)

**Returns:** \DateTime|null - Время подтверждения, до (не включая)


<a name="method_getCapturedAtLte" class="anchor"></a>
#### public getCapturedAtLte() : \DateTime|null

```php
public getCapturedAtLte() : \DateTime|null
```

**Summary**

Возвращает дату подтверждения до которой будут возвращены платежи или null если дата не была установлена

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)

**Returns:** \DateTime|null - Время подтверждения, до (включительно)


<a name="method_getCreatedAtGt" class="anchor"></a>
#### public getCreatedAtGt() : \DateTime|null

```php
public getCreatedAtGt() : \DateTime|null
```

**Summary**

Возвращает дату создания от которой будут возвращены платежи или null если дата не была установлена

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)

**Returns:** \DateTime|null - Время создания, от (не включая)


<a name="method_getCreatedAtGte" class="anchor"></a>
#### public getCreatedAtGte() : \DateTime|null

```php
public getCreatedAtGte() : \DateTime|null
```

**Summary**

Возвращает дату создания от которой будут возвращены платежи или null если дата не была установлена

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)

**Returns:** \DateTime|null - Время создания, от (включительно)


<a name="method_getCreatedAtLt" class="anchor"></a>
#### public getCreatedAtLt() : \DateTime|null

```php
public getCreatedAtLt() : \DateTime|null
```

**Summary**

Возвращает дату создания до которой будут возвращены платежи или null если дата не была установлена

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)

**Returns:** \DateTime|null - Время создания, до (не включая)


<a name="method_getCreatedAtLte" class="anchor"></a>
#### public getCreatedAtLte() : \DateTime|null

```php
public getCreatedAtLte() : \DateTime|null
```

**Summary**

Возвращает дату создания до которой будут возвращены платежи или null если дата не была установлена

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)

**Returns:** \DateTime|null - Время создания, до (включительно)


<a name="method_getCursor" class="anchor"></a>
#### public getCursor() : string|null

```php
public getCursor() : string|null
```

**Summary**

Страница выдачи результатов, которую необходимо отобразить

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)

**Returns:** string|null - 


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
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)

**Returns:** int|null - Ограничение количества объектов платежа


<a name="method_getPaymentMethod" class="anchor"></a>
#### public getPaymentMethod() : string|null

```php
public getPaymentMethod() : string|null
```

**Summary**

Возвращает платежный метод выбираемых платежей или null если он до этого не был установлен

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)

**Returns:** string|null - Платежный метод выбираемых платежей


<a name="method_getStatus" class="anchor"></a>
#### public getStatus() : string|null

```php
public getStatus() : string|null
```

**Summary**

Возвращает статус выбираемых платежей или null если он до этого не был установлен

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)

**Returns:** string|null - Статус выбираемых платежей


<a name="method_hasCapturedAtGt" class="anchor"></a>
#### public hasCapturedAtGt() : bool

```php
public hasCapturedAtGt() : bool
```

**Summary**

Проверяет была ли установлена дата подтверждения от которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)

**Returns:** bool - True если дата была установлена, false если нет


<a name="method_hasCapturedAtGte" class="anchor"></a>
#### public hasCapturedAtGte() : bool

```php
public hasCapturedAtGte() : bool
```

**Summary**

Проверяет была ли установлена дата подтверждения от которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)

**Returns:** bool - True если дата была установлена, false если нет


<a name="method_hasCapturedAtLt" class="anchor"></a>
#### public hasCapturedAtLt() : bool

```php
public hasCapturedAtLt() : bool
```

**Summary**

Проверяет была ли установлена дата подтверждения до которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)

**Returns:** bool - True если дата была установлена, false если нет


<a name="method_hasCapturedAtLte" class="anchor"></a>
#### public hasCapturedAtLte() : bool

```php
public hasCapturedAtLte() : bool
```

**Summary**

Проверяет была ли установлена дата подтверждения до которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)

**Returns:** bool - True если дата была установлена, false если нет


<a name="method_hasCreatedAtGt" class="anchor"></a>
#### public hasCreatedAtGt() : bool

```php
public hasCreatedAtGt() : bool
```

**Summary**

Проверяет была ли установлена дата создания от которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)

**Returns:** bool - True если дата была установлена, false если нет


<a name="method_hasCreatedAtGte" class="anchor"></a>
#### public hasCreatedAtGte() : bool

```php
public hasCreatedAtGte() : bool
```

**Summary**

Проверяет была ли установлена дата создания от которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)

**Returns:** bool - True если дата была установлена, false если нет


<a name="method_hasCreatedAtLt" class="anchor"></a>
#### public hasCreatedAtLt() : bool

```php
public hasCreatedAtLt() : bool
```

**Summary**

Проверяет была ли установлена дата создания до которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)

**Returns:** bool - True если дата была установлена, false если нет


<a name="method_hasCreatedAtLte" class="anchor"></a>
#### public hasCreatedAtLte() : bool

```php
public hasCreatedAtLte() : bool
```

**Summary**

Проверяет была ли установлена дата создания до которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)

**Returns:** bool - True если дата была установлена, false если нет


<a name="method_hasCursor" class="anchor"></a>
#### public hasCursor() : bool

```php
public hasCursor() : bool
```

**Summary**

Проверяет был ли установлена страница выдачи результатов, которую необходимо отобразить

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)

**Returns:** bool - True если была установлена, false если нет


<a name="method_hasLimit" class="anchor"></a>
#### public hasLimit() : bool

```php
public hasLimit() : bool
```

**Summary**

Проверяет был ли установлено ограничение количества объектов платежа

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)

**Returns:** bool - True если было установлено, false если нет


<a name="method_hasPaymentMethod" class="anchor"></a>
#### public hasPaymentMethod() : bool

```php
public hasPaymentMethod() : bool
```

**Summary**

Проверяет был ли установлен платежный метод выбираемых платежей

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)

**Returns:** bool - True если платежный метод был установлен, false если нет


<a name="method_hasStatus" class="anchor"></a>
#### public hasStatus() : bool

```php
public hasStatus() : bool
```

**Summary**

Проверяет был ли установлен статус выбираемых платежей

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)

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


<a name="method_setCapturedAtGt" class="anchor"></a>
#### public setCapturedAtGt() : mixed

```php
public setCapturedAtGt(\DateTime|string|int|null  value) : mixed
```

**Summary**

Устанавливает дату подтверждения от которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время подтверждения, от (не включая) или null чтобы удалить значение |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** mixed - 


<a name="method_setCapturedAtGte" class="anchor"></a>
#### public setCapturedAtGte() : mixed

```php
public setCapturedAtGte(\DateTime|string|int|null  value) : mixed
```

**Summary**

Устанавливает дату подтверждения от которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время подтверждения, от (включительно) или null чтобы удалить значение |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** mixed - 


<a name="method_setCapturedAtLt" class="anchor"></a>
#### public setCapturedAtLt() : mixed

```php
public setCapturedAtLt(\DateTime|string|int|null  value) : mixed
```

**Summary**

Устанавливает дату подтверждения до которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время подтверждения, до (не включая) или null чтобы удалить значение |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** mixed - 


<a name="method_setCapturedAtLte" class="anchor"></a>
#### public setCapturedAtLte() : mixed

```php
public setCapturedAtLte(\DateTime|string|int|null  value) : mixed
```

**Summary**

Устанавливает дату подтверждения до которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время подтверждения, до (включительно) или null чтобы удалить значение |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** mixed - 


<a name="method_setCreatedAtGt" class="anchor"></a>
#### public setCreatedAtGt() : void

```php
public setCreatedAtGt(\DateTime|string|int|null  value) : void
```

**Summary**

Устанавливает дату создания от которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время создания, от (не включая) или null чтобы удалить значение |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** void - 


<a name="method_setCreatedAtGte" class="anchor"></a>
#### public setCreatedAtGte() : void

```php
public setCreatedAtGte(\DateTime|string|int|null  value) : void
```

**Summary**

Устанавливает дату создания от которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время создания, от (включительно) или null чтобы удалить значение |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** void - 


<a name="method_setCreatedAtLt" class="anchor"></a>
#### public setCreatedAtLt() : void

```php
public setCreatedAtLt(\DateTime|string|int|null  value) : void
```

**Summary**

Устанавливает дату создания до которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время создания, до (не включая) или null чтобы удалить значение |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** void - 


<a name="method_setCreatedAtLte" class="anchor"></a>
#### public setCreatedAtLte() : void

```php
public setCreatedAtLte(\DateTime|string|int|null  value) : void
```

**Summary**

Устанавливает дату создания до которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время создания, до (включительно) или null чтобы удалить значение |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** void - 


<a name="method_setCursor" class="anchor"></a>
#### public setCursor() : void

```php
public setCursor(string  value) : void
```

**Summary**

Устанавливает cтраницw выдачи результатов, которую необходимо отобразить

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Страница выдачи результатов или null чтобы удалить значение |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод была передана не строка |

**Returns:** void - 


<a name="method_setLimit" class="anchor"></a>
#### public setLimit() : void

```php
public setLimit(int|null  value) : void
```

**Summary**

Устанавливает ограничение количества объектов платежа

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">int OR null</code> | value  | Ограничение количества объектов платежа или null чтобы удалить значение |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод была передано не целое число |

**Returns:** void - 


<a name="method_setPaymentMethod" class="anchor"></a>
#### public setPaymentMethod() : mixed

```php
public setPaymentMethod(string  value) : mixed
```

**Summary**

Устанавливает платежный метод выбираемых платежей

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Платежный метод выбираемых платежей или null чтобы удалить значение |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если переданное значение не является валидным статусом |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод была передана не строка |

**Returns:** mixed - 


<a name="method_setStatus" class="anchor"></a>
#### public setStatus() : void

```php
public setStatus(string  value) : void
```

**Summary**

Устанавливает статус выбираемых платежей

**Details:**
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Статус выбираемых платежей или null чтобы удалить значение |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если переданное значение не является валидным статусом |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод была передана не строка |

**Returns:** void - 


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
* Inherited From: [\YooKassa\Request\Payments\PaymentsRequest](../classes/YooKassa-Request-Payments-PaymentsRequest.md)

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