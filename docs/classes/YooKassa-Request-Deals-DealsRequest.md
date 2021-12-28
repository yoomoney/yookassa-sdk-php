# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Request\Deals\DealsRequest
### Namespace: [\YooKassa\Request\Deals](../namespaces/yookassa-request-deals.md)
---
**Summary:**

Класс объекта запроса к API для получения списка сделок магазина


---
### Constants
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [MAX_LIMIT_VALUE](../classes/YooKassa-Request-Deals-DealsRequest.md#constant_MAX_LIMIT_VALUE) |  | Максимальное количество объектов платежа в выборке |
| public | [MIN_LENGTH_DESCRIPTION](../classes/YooKassa-Request-Deals-DealsRequest.md#constant_MIN_LENGTH_DESCRIPTION) |  | Минимальное количество символов для поиска |

---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [$createdAtGt](../classes/YooKassa-Request-Deals-DealsRequest.md#property_createdAtGt) |  | Время создания, от (не включая) |
| public | [$createdAtGte](../classes/YooKassa-Request-Deals-DealsRequest.md#property_createdAtGte) |  | Время создания, от (включительно) |
| public | [$createdAtLt](../classes/YooKassa-Request-Deals-DealsRequest.md#property_createdAtLt) |  | Время создания, до (не включая) |
| public | [$createdAtLte](../classes/YooKassa-Request-Deals-DealsRequest.md#property_createdAtLte) |  | Время создания, до (включительно) |
| public | [$cursor](../classes/YooKassa-Request-Deals-DealsRequest.md#property_cursor) |  | Страница выдачи результатов, которую необходимо отобразить |
| public | [$expiresAtGt](../classes/YooKassa-Request-Deals-DealsRequest.md#property_expiresAtGt) |  | Время автоматического закрытия, от (не включая) |
| public | [$expiresAtGte](../classes/YooKassa-Request-Deals-DealsRequest.md#property_expiresAtGte) |  | Время автоматического закрытия, от (включительно) |
| public | [$expiresAtLt](../classes/YooKassa-Request-Deals-DealsRequest.md#property_expiresAtLt) |  | Время автоматического закрытия, до (не включая) |
| public | [$expiresAtLte](../classes/YooKassa-Request-Deals-DealsRequest.md#property_expiresAtLte) |  | Время автоматического закрытия, до (включительно) |
| public | [$fullTextSearch](../classes/YooKassa-Request-Deals-DealsRequest.md#property_fullTextSearch) |  | Фильтр по описанию сделки — параметру description |
| public | [$limit](../classes/YooKassa-Request-Deals-DealsRequest.md#property_limit) |  | Ограничение количества объектов платежа, отображаемых на одной странице выдачи |
| public | [$status](../classes/YooKassa-Request-Deals-DealsRequest.md#property_status) |  | Статус платежа |

---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Common-AbstractObject.md#method___construct) |  | AbstractObject constructor. |
| public | [__get()](../classes/YooKassa-Common-AbstractObject.md#method___get) |  | Возвращает значение свойства |
| public | [__isset()](../classes/YooKassa-Common-AbstractObject.md#method___isset) |  | Проверяет наличие свойства |
| public | [__set()](../classes/YooKassa-Common-AbstractObject.md#method___set) |  | Устанавливает значение свойства |
| public | [__unset()](../classes/YooKassa-Common-AbstractObject.md#method___unset) |  | Удаляет свойство |
| public | [builder()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_builder) |  | Возвращает инстанс билдера объектов запросов списка сделок магазина |
| public | [clearValidationError()](../classes/YooKassa-Common-AbstractRequest.md#method_clearValidationError) |  | Очищает статус валидации текущего запроса |
| public | [fromArray()](../classes/YooKassa-Common-AbstractObject.md#method_fromArray) |  | Устанавливает значения свойств текущего объекта из массива |
| public | [getCreatedAtGt()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_getCreatedAtGt) |  | Возвращает дату создания от которой будут возвращены платежи или null, если дата не была установлена |
| public | [getCreatedAtGte()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_getCreatedAtGte) |  | Возвращает дату создания от которой будут возвращены платежи или null, если дата не была установлена |
| public | [getCreatedAtLt()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_getCreatedAtLt) |  | Возвращает дату создания до которой будут возвращены платежи или null, если дата не была установлена |
| public | [getCreatedAtLte()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_getCreatedAtLte) |  | Возвращает дату создания до которой будут возвращены платежи или null, если дата не была установлена |
| public | [getCursor()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_getCursor) |  | Страница выдачи результатов, которую необходимо отобразить |
| public | [getExpiresAtGt()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_getExpiresAtGt) |  | Возвращает дату автоматического закрытия от которой будут возвращены платежи или null, если дата не была установлена |
| public | [getExpiresAtGte()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_getExpiresAtGte) |  | Возвращает дату автоматического закрытия от которой будут возвращены платежи или null, если дата не была установлена |
| public | [getExpiresAtLt()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_getExpiresAtLt) |  | Возвращает дату автоматического закрытия до которой будут возвращены платежи или null, если дата не была установлена |
| public | [getExpiresAtLte()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_getExpiresAtLte) |  | Возвращает дату автоматического закрытия до которой будут возвращены платежи или null, если дата не была установлена |
| public | [getFullTextSearch()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_getFullTextSearch) |  | Возвращает фильтр по описанию выбираемых сделок или null, если он до этого не был установлен |
| public | [getLastValidationError()](../classes/YooKassa-Common-AbstractRequest.md#method_getLastValidationError) |  | Возвращает последнюю ошибку валидации |
| public | [getLimit()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_getLimit) |  | Ограничение количества объектов платежа |
| public | [getStatus()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_getStatus) |  | Возвращает статус выбираемых сделок или null, если он до этого не был установлен |
| public | [hasCreatedAtGt()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_hasCreatedAtGt) |  | Проверяет, была ли установлена дата создания от которой выбираются платежи |
| public | [hasCreatedAtGte()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_hasCreatedAtGte) |  | Проверяет, была ли установлена дата создания от которой выбираются платежи |
| public | [hasCreatedAtLt()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_hasCreatedAtLt) |  | Проверяет, была ли установлена дата создания до которой выбираются платежи |
| public | [hasCreatedAtLte()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_hasCreatedAtLte) |  | Проверяет, была ли установлена дата создания до которой выбираются платежи |
| public | [hasCursor()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_hasCursor) |  | Проверяет, была ли установлена страница выдачи результатов, которую необходимо отобразить |
| public | [hasExpiresAtGt()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_hasExpiresAtGt) |  | Проверяет, была ли установлена дата автоматического закрытия от которой выбираются платежи |
| public | [hasExpiresAtGte()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_hasExpiresAtGte) |  | Проверяет, была ли установлена дата автоматического закрытия от которой выбираются платежи |
| public | [hasExpiresAtLt()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_hasExpiresAtLt) |  | Проверяет, была ли установлена дата автоматического закрытия до которой выбираются платежи |
| public | [hasExpiresAtLte()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_hasExpiresAtLte) |  | Проверяет, была ли установлена дата автоматического закрытия до которой выбираются платежи |
| public | [hasFullTextSearch()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_hasFullTextSearch) |  | Проверяет, был ли установлен фильтр по описанию выбираемых сделок |
| public | [hasLimit()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_hasLimit) |  | Проверяет, было ли установлено ограничение количества объектов платежа |
| public | [hasStatus()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_hasStatus) |  | Проверяет, был ли установлен статус выбираемых сделок |
| public | [jsonSerialize()](../classes/YooKassa-Common-AbstractObject.md#method_jsonSerialize) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации |
| public | [offsetExists()](../classes/YooKassa-Common-AbstractObject.md#method_offsetExists) |  | Проверяет наличие свойства |
| public | [offsetGet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetGet) |  | Возвращает значение свойства |
| public | [offsetSet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetSet) |  | Устанавливает значение свойства |
| public | [offsetUnset()](../classes/YooKassa-Common-AbstractObject.md#method_offsetUnset) |  | Удаляет свойство |
| public | [setCreatedAtGt()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_setCreatedAtGt) |  | Устанавливает дату создания от которой выбираются платежи |
| public | [setCreatedAtGte()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_setCreatedAtGte) |  | Устанавливает дату создания от которой выбираются платежи |
| public | [setCreatedAtLt()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_setCreatedAtLt) |  | Устанавливает дату создания до которой выбираются платежи |
| public | [setCreatedAtLte()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_setCreatedAtLte) |  | Устанавливает дату создания до которой выбираются платежи |
| public | [setCursor()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_setCursor) |  | Устанавливает страницу выдачи результатов, которую необходимо отобразить |
| public | [setExpiresAtGt()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_setExpiresAtGt) |  | Устанавливает дату автоматического закрытия от которой выбираются платежи |
| public | [setExpiresAtGte()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_setExpiresAtGte) |  | Устанавливает дату автоматического закрытия от которой выбираются платежи |
| public | [setExpiresAtLt()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_setExpiresAtLt) |  | Устанавливает дату автоматического закрытия до которой выбираются платежи |
| public | [setExpiresAtLte()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_setExpiresAtLte) |  | Устанавливает дату автоматического закрытия до которой выбираются платежи |
| public | [setFullTextSearch()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_setFullTextSearch) |  | Устанавливает фильтр по описанию выбираемых сделок |
| public | [setLimit()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_setLimit) |  | Устанавливает ограничение количества объектов платежа |
| public | [setStatus()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_setStatus) |  | Устанавливает статус выбираемых сделок |
| public | [toArray()](../classes/YooKassa-Common-AbstractObject.md#method_toArray) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации Является алиасом метода AbstractObject::jsonSerialize() |
| public | [validate()](../classes/YooKassa-Request-Deals-DealsRequest.md#method_validate) |  | Проверяет валидность текущего объекта запроса |
| protected | [getUnknownProperties()](../classes/YooKassa-Common-AbstractObject.md#method_getUnknownProperties) |  | Возвращает массив свойств которые не существуют, но были заданы у объекта |
| protected | [setValidationError()](../classes/YooKassa-Common-AbstractRequest.md#method_setValidationError) |  | Устанавливает ошибку валидации |

---
### Details
* File: [lib/Request/Deals/DealsRequest.php](../../lib/Request/Deals/DealsRequest.php)
* Package: Default
* Class Hierarchy:  
  * [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
  * [\YooKassa\Common\AbstractRequest](../classes/YooKassa-Common-AbstractRequest.md)
  * \YooKassa\Request\Deals\DealsRequest
* Implements:
  * [\YooKassa\Request\Deals\DealsRequestInterface](../classes/YooKassa-Request-Deals-DealsRequestInterface.md)

---
## Constants
<a name="constant_MAX_LIMIT_VALUE" class="anchor"></a>
###### MAX_LIMIT_VALUE
Максимальное количество объектов платежа в выборке

```php
MAX_LIMIT_VALUE = 100
```


<a name="constant_MIN_LENGTH_DESCRIPTION" class="anchor"></a>
###### MIN_LENGTH_DESCRIPTION
Минимальное количество символов для поиска

```php
MIN_LENGTH_DESCRIPTION = 4
```



---
## Properties
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


<a name="property_expiresAtGt"></a>
#### public $expiresAtGt : \DateTime|null
---
***Description***

Время автоматического закрытия, от (не включая)

**Type:** <a href="../\DateTime|null"><abbr title="\DateTime|null">DateTime|null</abbr></a>

**Details:**


<a name="property_expiresAtGte"></a>
#### public $expiresAtGte : \DateTime|null
---
***Description***

Время автоматического закрытия, от (включительно)

**Type:** <a href="../\DateTime|null"><abbr title="\DateTime|null">DateTime|null</abbr></a>

**Details:**


<a name="property_expiresAtLt"></a>
#### public $expiresAtLt : \DateTime|null
---
***Description***

Время автоматического закрытия, до (не включая)

**Type:** <a href="../\DateTime|null"><abbr title="\DateTime|null">DateTime|null</abbr></a>

**Details:**


<a name="property_expiresAtLte"></a>
#### public $expiresAtLte : \DateTime|null
---
***Description***

Время автоматического закрытия, до (включительно)

**Type:** <a href="../\DateTime|null"><abbr title="\DateTime|null">DateTime|null</abbr></a>

**Details:**


<a name="property_fullTextSearch"></a>
#### public $fullTextSearch : string|null
---
***Description***

Фильтр по описанию сделки — параметру description

**Type:** <a href="../string|null"><abbr title="string|null">string|null</abbr></a>

**Details:**


<a name="property_limit"></a>
#### public $limit : int|null
---
***Description***

Ограничение количества объектов платежа, отображаемых на одной странице выдачи

**Type:** <a href="../int|null"><abbr title="int|null">int|null</abbr></a>

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
#### public builder() : \YooKassa\Request\Deals\DealsRequestBuilder

```php
Static public builder() : \YooKassa\Request\Deals\DealsRequestBuilder
```

**Summary**

Возвращает инстанс билдера объектов запросов списка сделок магазина

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

**Returns:** \YooKassa\Request\Deals\DealsRequestBuilder - Билдер объектов запросов списка сделок


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


<a name="method_getCreatedAtGt" class="anchor"></a>
#### public getCreatedAtGt() : \DateTime|null

```php
public getCreatedAtGt() : \DateTime|null
```

**Summary**

Возвращает дату создания от которой будут возвращены платежи или null, если дата не была установлена

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

**Returns:** \DateTime|null - Время создания, от (не включая)


<a name="method_getCreatedAtGte" class="anchor"></a>
#### public getCreatedAtGte() : \DateTime|null

```php
public getCreatedAtGte() : \DateTime|null
```

**Summary**

Возвращает дату создания от которой будут возвращены платежи или null, если дата не была установлена

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

**Returns:** \DateTime|null - Время создания, от (включительно)


<a name="method_getCreatedAtLt" class="anchor"></a>
#### public getCreatedAtLt() : \DateTime|null

```php
public getCreatedAtLt() : \DateTime|null
```

**Summary**

Возвращает дату создания до которой будут возвращены платежи или null, если дата не была установлена

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

**Returns:** \DateTime|null - Время создания, до (не включая)


<a name="method_getCreatedAtLte" class="anchor"></a>
#### public getCreatedAtLte() : \DateTime|null

```php
public getCreatedAtLte() : \DateTime|null
```

**Summary**

Возвращает дату создания до которой будут возвращены платежи или null, если дата не была установлена

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

**Returns:** \DateTime|null - Время создания, до (включительно)


<a name="method_getCursor" class="anchor"></a>
#### public getCursor() : string|null

```php
public getCursor() : string|null
```

**Summary**

Страница выдачи результатов, которую необходимо отобразить

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

**Returns:** string|null - 


<a name="method_getExpiresAtGt" class="anchor"></a>
#### public getExpiresAtGt() : \DateTime|null

```php
public getExpiresAtGt() : \DateTime|null
```

**Summary**

Возвращает дату автоматического закрытия от которой будут возвращены платежи или null, если дата не была установлена

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

**Returns:** \DateTime|null - Время автоматического закрытия, от (не включая)


<a name="method_getExpiresAtGte" class="anchor"></a>
#### public getExpiresAtGte() : \DateTime|null

```php
public getExpiresAtGte() : \DateTime|null
```

**Summary**

Возвращает дату автоматического закрытия от которой будут возвращены платежи или null, если дата не была установлена

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

**Returns:** \DateTime|null - Время автоматического закрытия, от (включительно)


<a name="method_getExpiresAtLt" class="anchor"></a>
#### public getExpiresAtLt() : \DateTime|null

```php
public getExpiresAtLt() : \DateTime|null
```

**Summary**

Возвращает дату автоматического закрытия до которой будут возвращены платежи или null, если дата не была установлена

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

**Returns:** \DateTime|null - Время автоматического закрытия, до (не включая)


<a name="method_getExpiresAtLte" class="anchor"></a>
#### public getExpiresAtLte() : \DateTime|null

```php
public getExpiresAtLte() : \DateTime|null
```

**Summary**

Возвращает дату автоматического закрытия до которой будут возвращены платежи или null, если дата не была установлена

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

**Returns:** \DateTime|null - Время автоматического закрытия, до (включительно)


<a name="method_getFullTextSearch" class="anchor"></a>
#### public getFullTextSearch() : string|null

```php
public getFullTextSearch() : string|null
```

**Summary**

Возвращает фильтр по описанию выбираемых сделок или null, если он до этого не был установлен

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

**Returns:** string|null - Фильтр по описанию выбираемых сделок


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
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

**Returns:** int|null - Ограничение количества объектов платежа


<a name="method_getStatus" class="anchor"></a>
#### public getStatus() : string|null

```php
public getStatus() : string|null
```

**Summary**

Возвращает статус выбираемых сделок или null, если он до этого не был установлен

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

**Returns:** string|null - Статус выбираемых сделок


<a name="method_hasCreatedAtGt" class="anchor"></a>
#### public hasCreatedAtGt() : bool

```php
public hasCreatedAtGt() : bool
```

**Summary**

Проверяет, была ли установлена дата создания от которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

**Returns:** bool - True если дата была установлена, false если нет


<a name="method_hasCreatedAtGte" class="anchor"></a>
#### public hasCreatedAtGte() : bool

```php
public hasCreatedAtGte() : bool
```

**Summary**

Проверяет, была ли установлена дата создания от которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

**Returns:** bool - True если дата была установлена, false если нет


<a name="method_hasCreatedAtLt" class="anchor"></a>
#### public hasCreatedAtLt() : bool

```php
public hasCreatedAtLt() : bool
```

**Summary**

Проверяет, была ли установлена дата создания до которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

**Returns:** bool - True если дата была установлена, false если нет


<a name="method_hasCreatedAtLte" class="anchor"></a>
#### public hasCreatedAtLte() : bool

```php
public hasCreatedAtLte() : bool
```

**Summary**

Проверяет, была ли установлена дата создания до которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

**Returns:** bool - True если дата была установлена, false если нет


<a name="method_hasCursor" class="anchor"></a>
#### public hasCursor() : bool

```php
public hasCursor() : bool
```

**Summary**

Проверяет, была ли установлена страница выдачи результатов, которую необходимо отобразить

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

**Returns:** bool - True если была установлена, false если нет


<a name="method_hasExpiresAtGt" class="anchor"></a>
#### public hasExpiresAtGt() : bool

```php
public hasExpiresAtGt() : bool
```

**Summary**

Проверяет, была ли установлена дата автоматического закрытия от которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

**Returns:** bool - True если дата была установлена, false если нет


<a name="method_hasExpiresAtGte" class="anchor"></a>
#### public hasExpiresAtGte() : bool

```php
public hasExpiresAtGte() : bool
```

**Summary**

Проверяет, была ли установлена дата автоматического закрытия от которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

**Returns:** bool - True если дата была установлена, false если нет


<a name="method_hasExpiresAtLt" class="anchor"></a>
#### public hasExpiresAtLt() : bool

```php
public hasExpiresAtLt() : bool
```

**Summary**

Проверяет, была ли установлена дата автоматического закрытия до которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

**Returns:** bool - True если дата была установлена, false если нет


<a name="method_hasExpiresAtLte" class="anchor"></a>
#### public hasExpiresAtLte() : bool

```php
public hasExpiresAtLte() : bool
```

**Summary**

Проверяет, была ли установлена дата автоматического закрытия до которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

**Returns:** bool - True если дата была установлена, false если нет


<a name="method_hasFullTextSearch" class="anchor"></a>
#### public hasFullTextSearch() : bool

```php
public hasFullTextSearch() : bool
```

**Summary**

Проверяет, был ли установлен фильтр по описанию выбираемых сделок

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

**Returns:** bool - True если фильтр по описанию был установлен, false если нет


<a name="method_hasLimit" class="anchor"></a>
#### public hasLimit() : bool

```php
public hasLimit() : bool
```

**Summary**

Проверяет, было ли установлено ограничение количества объектов платежа

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

**Returns:** bool - True если было установлено, false если нет


<a name="method_hasStatus" class="anchor"></a>
#### public hasStatus() : bool

```php
public hasStatus() : bool
```

**Summary**

Проверяет, был ли установлен статус выбираемых сделок

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

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


<a name="method_setCreatedAtGt" class="anchor"></a>
#### public setCreatedAtGt() : void

```php
public setCreatedAtGt(\DateTime|string|int|null $value) : void
```

**Summary**

Устанавливает дату создания от которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время создания, от (не включая) или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** void - 


<a name="method_setCreatedAtGte" class="anchor"></a>
#### public setCreatedAtGte() : void

```php
public setCreatedAtGte(\DateTime|string|int|null $value) : void
```

**Summary**

Устанавливает дату создания от которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время создания, от (включительно) или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** void - 


<a name="method_setCreatedAtLt" class="anchor"></a>
#### public setCreatedAtLt() : void

```php
public setCreatedAtLt(\DateTime|string|int|null $value) : void
```

**Summary**

Устанавливает дату создания до которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время создания, до (не включая) или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** void - 


<a name="method_setCreatedAtLte" class="anchor"></a>
#### public setCreatedAtLte() : void

```php
public setCreatedAtLte(\DateTime|string|int|null $value) : void
```

**Summary**

Устанавливает дату создания до которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время создания, до (включительно) или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** void - 


<a name="method_setCursor" class="anchor"></a>
#### public setCursor() : void

```php
public setCursor(string $value) : void
```

**Summary**

Устанавливает страницу выдачи результатов, которую необходимо отобразить

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Страница выдачи результатов или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод была передана не строка |

**Returns:** void - 


<a name="method_setExpiresAtGt" class="anchor"></a>
#### public setExpiresAtGt() : void

```php
public setExpiresAtGt(\DateTime|string|int|null $value) : void
```

**Summary**

Устанавливает дату автоматического закрытия от которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время автоматического закрытия, от (не включая) или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** void - 


<a name="method_setExpiresAtGte" class="anchor"></a>
#### public setExpiresAtGte() : void

```php
public setExpiresAtGte(\DateTime|string|int|null $value) : void
```

**Summary**

Устанавливает дату автоматического закрытия от которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время автоматического закрытия, от (включительно) или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** void - 


<a name="method_setExpiresAtLt" class="anchor"></a>
#### public setExpiresAtLt() : void

```php
public setExpiresAtLt(\DateTime|string|int|null $value) : void
```

**Summary**

Устанавливает дату автоматического закрытия до которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время автоматического закрытия, до (не включая) или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** void - 


<a name="method_setExpiresAtLte" class="anchor"></a>
#### public setExpiresAtLte() : void

```php
public setExpiresAtLte(\DateTime|string|int|null $value) : void
```

**Summary**

Устанавливает дату автоматического закрытия до которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время автоматического закрытия, до (включительно) или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** void - 


<a name="method_setFullTextSearch" class="anchor"></a>
#### public setFullTextSearch() : void

```php
public setFullTextSearch(string $value) : void
```

**Summary**

Устанавливает фильтр по описанию выбираемых сделок

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Фильтр по описанию выбираемых сделок или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если переданное значение не является валидным |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод была передана не строка |

**Returns:** void - 


<a name="method_setLimit" class="anchor"></a>
#### public setLimit() : void

```php
public setLimit(int|null $value) : void
```

**Summary**

Устанавливает ограничение количества объектов платежа

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">int OR null</code> | value  | Ограничение количества объектов платежа или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается, если в метод было передано не целое число |

**Returns:** void - 


<a name="method_setStatus" class="anchor"></a>
#### public setStatus() : void

```php
public setStatus(string $value) : void
```

**Summary**

Устанавливает статус выбираемых сделок

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Статус выбираемых сделок или null, чтобы удалить значение |

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
* Inherited From: [\YooKassa\Request\Deals\DealsRequest](../classes/YooKassa-Request-Deals-DealsRequest.md)

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