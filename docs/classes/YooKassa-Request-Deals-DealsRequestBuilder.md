# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Request\Deals\DealsRequestBuilder
### Namespace: [\YooKassa\Request\Deals](../namespaces/yookassa-request-deals.md)
---
**Summary:**

Класс билдера запросов к API для получения списка сделок магазина


---
### Constants
* No constants found

---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$currentObject](../classes/YooKassa-Request-Deals-DealsRequestBuilder.md#property_currentObject) |  | Инстанс собираемого запроса |

---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Common-AbstractRequestBuilder.md#method___construct) |  | Конструктор, инициализирует пустой запрос, который в будущем начнём собирать |
| public | [build()](../classes/YooKassa-Request-Deals-DealsRequestBuilder.md#method_build) |  | Собирает и возвращает объект запроса списка сделок магазина |
| public | [setCreatedAtGt()](../classes/YooKassa-Request-Deals-DealsRequestBuilder.md#method_setCreatedAtGt) |  | Устанавливает дату создания от которой выбираются платежи |
| public | [setCreatedAtGte()](../classes/YooKassa-Request-Deals-DealsRequestBuilder.md#method_setCreatedAtGte) |  | Устанавливает дату создания от которой выбираются платежи |
| public | [setCreatedAtLt()](../classes/YooKassa-Request-Deals-DealsRequestBuilder.md#method_setCreatedAtLt) |  | Устанавливает дату создания до которой выбираются платежи |
| public | [setCreatedAtLte()](../classes/YooKassa-Request-Deals-DealsRequestBuilder.md#method_setCreatedAtLte) |  | Устанавливает дату создания до которой выбираются платежи |
| public | [setCursor()](../classes/YooKassa-Request-Deals-DealsRequestBuilder.md#method_setCursor) |  | Устанавливает страница выдачи результатов |
| public | [setExpiresAtGt()](../classes/YooKassa-Request-Deals-DealsRequestBuilder.md#method_setExpiresAtGt) |  | Устанавливает дату автоматического закрытия от которой выбираются платежи |
| public | [setExpiresAtGte()](../classes/YooKassa-Request-Deals-DealsRequestBuilder.md#method_setExpiresAtGte) |  | Устанавливает дату автоматического закрытия от которой выбираются платежи |
| public | [setExpiresAtLt()](../classes/YooKassa-Request-Deals-DealsRequestBuilder.md#method_setExpiresAtLt) |  | Устанавливает дату автоматического закрытия до которой выбираются платежи |
| public | [setExpiresAtLte()](../classes/YooKassa-Request-Deals-DealsRequestBuilder.md#method_setExpiresAtLte) |  | Устанавливает дату автоматического закрытия до которой выбираются платежи |
| public | [setFullTextSearch()](../classes/YooKassa-Request-Deals-DealsRequestBuilder.md#method_setFullTextSearch) |  | Устанавливает фильтр по описанию выбираемых сделок |
| public | [setLimit()](../classes/YooKassa-Request-Deals-DealsRequestBuilder.md#method_setLimit) |  | Устанавливает ограничение количества объектов сделки |
| public | [setOptions()](../classes/YooKassa-Common-AbstractRequestBuilder.md#method_setOptions) |  | Устанавливает свойства запроса из массива |
| public | [setStatus()](../classes/YooKassa-Request-Deals-DealsRequestBuilder.md#method_setStatus) |  | Устанавливает статус выбираемых сделок |
| protected | [initCurrentObject()](../classes/YooKassa-Request-Deals-DealsRequestBuilder.md#method_initCurrentObject) |  | Возвращает новый объект запроса для получения списка сделок, который в дальнейшем будет собираться в билдере |

---
### Details
* File: [lib/Request/Deals/DealsRequestBuilder.php](../../lib/Request/Deals/DealsRequestBuilder.php)
* Package: YooKassa
* Class Hierarchy: 
  * [\YooKassa\Common\AbstractRequestBuilder](../classes/YooKassa-Common-AbstractRequestBuilder.md)
  * \YooKassa\Request\Deals\DealsRequestBuilder

---
## Properties
<a name="property_currentObject"></a>
#### protected $currentObject : \YooKassa\Request\Deals\DealsRequest
---
**Summary**

Инстанс собираемого запроса

**Type:** <a href="../classes/YooKassa-Request-Deals-DealsRequest.html"><abbr title="\YooKassa\Request\Deals\DealsRequest">DealsRequest</abbr></a>
Собираемый объект запроса списка сделок магазина
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


<a name="method_build" class="anchor"></a>
#### public build() : \YooKassa\Common\AbstractRequest|\YooKassa\Request\Deals\DealsRequest

```php
public build(array|null $options = null) : \YooKassa\Common\AbstractRequest|\YooKassa\Request\Deals\DealsRequest
```

**Summary**

Собирает и возвращает объект запроса списка сделок магазина

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequestBuilder](../classes/YooKassa-Request-Deals-DealsRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array OR null</code> | options  | Массив с настройками запроса |

**Returns:** \YooKassa\Common\AbstractRequest|\YooKassa\Request\Deals\DealsRequest - Инстанс объекта запроса к API для получения списка сделок магазина


<a name="method_setCreatedAtGt" class="anchor"></a>
#### public setCreatedAtGt() : \YooKassa\Request\Deals\DealsRequestBuilder

```php
public setCreatedAtGt(\DateTime|string|int|null $value) : \YooKassa\Request\Deals\DealsRequestBuilder
```

**Summary**

Устанавливает дату создания от которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequestBuilder](../classes/YooKassa-Request-Deals-DealsRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время создания, от (не включая) или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** \YooKassa\Request\Deals\DealsRequestBuilder - Инстанс текущего билдера


<a name="method_setCreatedAtGte" class="anchor"></a>
#### public setCreatedAtGte() : \YooKassa\Request\Deals\DealsRequestBuilder

```php
public setCreatedAtGte(\DateTime|string|int|null $value) : \YooKassa\Request\Deals\DealsRequestBuilder
```

**Summary**

Устанавливает дату создания от которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequestBuilder](../classes/YooKassa-Request-Deals-DealsRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время создания, от (включительно) или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** \YooKassa\Request\Deals\DealsRequestBuilder - Инстанс текущего билдера


<a name="method_setCreatedAtLt" class="anchor"></a>
#### public setCreatedAtLt() : \YooKassa\Request\Deals\DealsRequestBuilder

```php
public setCreatedAtLt(\DateTime|string|int|null $value) : \YooKassa\Request\Deals\DealsRequestBuilder
```

**Summary**

Устанавливает дату создания до которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequestBuilder](../classes/YooKassa-Request-Deals-DealsRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время создания, до (не включая) или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** \YooKassa\Request\Deals\DealsRequestBuilder - Инстанс текущего билдера


<a name="method_setCreatedAtLte" class="anchor"></a>
#### public setCreatedAtLte() : \YooKassa\Request\Deals\DealsRequestBuilder

```php
public setCreatedAtLte(\DateTime|string|int|null $value) : \YooKassa\Request\Deals\DealsRequestBuilder
```

**Summary**

Устанавливает дату создания до которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequestBuilder](../classes/YooKassa-Request-Deals-DealsRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время создания, до (включительно) или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** \YooKassa\Request\Deals\DealsRequestBuilder - Инстанс текущего билдера


<a name="method_setCursor" class="anchor"></a>
#### public setCursor() : \YooKassa\Request\Deals\DealsRequestBuilder

```php
public setCursor(string|null $value) : \YooKassa\Request\Deals\DealsRequestBuilder
```

**Summary**

Устанавливает страница выдачи результатов

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequestBuilder](../classes/YooKassa-Request-Deals-DealsRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string OR null</code> | value  | Страница выдачи результатов или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод была передана не строка |

**Returns:** \YooKassa\Request\Deals\DealsRequestBuilder - Инстанс текущего билдера


<a name="method_setExpiresAtGt" class="anchor"></a>
#### public setExpiresAtGt() : \YooKassa\Request\Deals\DealsRequestBuilder

```php
public setExpiresAtGt(\DateTime|string|int|null $value) : \YooKassa\Request\Deals\DealsRequestBuilder
```

**Summary**

Устанавливает дату автоматического закрытия от которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequestBuilder](../classes/YooKassa-Request-Deals-DealsRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время автоматического закрытия, до (включительно) или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** \YooKassa\Request\Deals\DealsRequestBuilder - Инстанс текущего билдера


<a name="method_setExpiresAtGte" class="anchor"></a>
#### public setExpiresAtGte() : \YooKassa\Request\Deals\DealsRequestBuilder

```php
public setExpiresAtGte(\DateTime|string|int|null $value) : \YooKassa\Request\Deals\DealsRequestBuilder
```

**Summary**

Устанавливает дату автоматического закрытия от которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequestBuilder](../classes/YooKassa-Request-Deals-DealsRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время автоматического закрытия, от (включительно) или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** \YooKassa\Request\Deals\DealsRequestBuilder - Инстанс текущего билдера


<a name="method_setExpiresAtLt" class="anchor"></a>
#### public setExpiresAtLt() : \YooKassa\Request\Deals\DealsRequestBuilder

```php
public setExpiresAtLt(\DateTime|string|int|null $value) : \YooKassa\Request\Deals\DealsRequestBuilder
```

**Summary**

Устанавливает дату автоматического закрытия до которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequestBuilder](../classes/YooKassa-Request-Deals-DealsRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время автоматического закрытия, до (включительно) или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** \YooKassa\Request\Deals\DealsRequestBuilder - Инстанс текущего билдера


<a name="method_setExpiresAtLte" class="anchor"></a>
#### public setExpiresAtLte() : \YooKassa\Request\Deals\DealsRequestBuilder

```php
public setExpiresAtLte(\DateTime|string|int|null $value) : \YooKassa\Request\Deals\DealsRequestBuilder
```

**Summary**

Устанавливает дату автоматического закрытия до которой выбираются платежи

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequestBuilder](../classes/YooKassa-Request-Deals-DealsRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время автоматического закрытия, до (включительно) или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** \YooKassa\Request\Deals\DealsRequestBuilder - Инстанс текущего билдера


<a name="method_setFullTextSearch" class="anchor"></a>
#### public setFullTextSearch() : \YooKassa\Request\Deals\DealsRequestBuilder

```php
public setFullTextSearch(string $value) : \YooKassa\Request\Deals\DealsRequestBuilder
```

**Summary**

Устанавливает фильтр по описанию выбираемых сделок

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequestBuilder](../classes/YooKassa-Request-Deals-DealsRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Фильтр по описанию выбираемых сделок или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если переданное значение не является валидным |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод была передана не строка |

**Returns:** \YooKassa\Request\Deals\DealsRequestBuilder - Инстанс текущего билдера


<a name="method_setLimit" class="anchor"></a>
#### public setLimit() : \YooKassa\Request\Deals\DealsRequestBuilder

```php
public setLimit(string $value) : \YooKassa\Request\Deals\DealsRequestBuilder
```

**Summary**

Устанавливает ограничение количества объектов сделки

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequestBuilder](../classes/YooKassa-Request-Deals-DealsRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Ограничение количества объектов сделки или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод было передана не целое число |

**Returns:** \YooKassa\Request\Deals\DealsRequestBuilder - Инстанс текущего билдера


<a name="method_setOptions" class="anchor"></a>
#### public setOptions() : \YooKassa\Common\AbstractRequestBuilder

```php
public setOptions(array|\Traversable $options) : \YooKassa\Common\AbstractRequestBuilder
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


<a name="method_setStatus" class="anchor"></a>
#### public setStatus() : \YooKassa\Request\Deals\DealsRequestBuilder

```php
public setStatus(string $value) : \YooKassa\Request\Deals\DealsRequestBuilder
```

**Summary**

Устанавливает статус выбираемых сделок

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequestBuilder](../classes/YooKassa-Request-Deals-DealsRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Статус выбираемых сделок или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если переданное значение не является валидным статусом |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод была передана не строка |

**Returns:** \YooKassa\Request\Deals\DealsRequestBuilder - Инстанс текущего билдера


<a name="method_initCurrentObject" class="anchor"></a>
#### protected initCurrentObject() : \YooKassa\Request\Deals\DealsRequest

```php
protected initCurrentObject() : \YooKassa\Request\Deals\DealsRequest
```

**Summary**

Возвращает новый объект запроса для получения списка сделок, который в дальнейшем будет собираться в билдере

**Details:**
* Inherited From: [\YooKassa\Request\Deals\DealsRequestBuilder](../classes/YooKassa-Request-Deals-DealsRequestBuilder.md)

**Returns:** \YooKassa\Request\Deals\DealsRequest - Объект запроса списка сделок магазина



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