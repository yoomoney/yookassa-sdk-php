# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Model\Webhook\Webhook
### Namespace: [\YooKassa\Model\Webhook](../namespaces/yookassa-model-webhook.md)
---
**Summary:**

Класс Webhook содержит информацию о подписке на одно событие

---
### Constants
* No constants found
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [$event](../classes/YooKassa-Model-Webhook-Webhook.md#property_event) |  | Событие, о котором уведомляет ЮKassa |
| public | [$id](../classes/YooKassa-Model-Webhook-Webhook.md#property_id) |  | Идентификатор webhook |
| public | [$url](../classes/YooKassa-Model-Webhook-Webhook.md#property_url) |  | URL, на который ЮKassa будет отправлять уведомления |
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
| public | [getEvent()](../classes/YooKassa-Model-Webhook-Webhook.md#method_getEvent) |  | Возвращает событие, о котором уведомляет ЮKassa |
| public | [getId()](../classes/YooKassa-Model-Webhook-Webhook.md#method_getId) |  | Возвращает идентификатор webhook |
| public | [getUrl()](../classes/YooKassa-Model-Webhook-Webhook.md#method_getUrl) |  | Возвращает URL, на который ЮKassa будет отправлять уведомления |
| public | [jsonSerialize()](../classes/YooKassa-Common-AbstractObject.md#method_jsonSerialize) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации |
| public | [offsetExists()](../classes/YooKassa-Common-AbstractObject.md#method_offsetExists) |  | Проверяет наличие свойства |
| public | [offsetGet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetGet) |  | Возвращает значение свойства |
| public | [offsetSet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetSet) |  | Устанавливает значение свойства |
| public | [offsetUnset()](../classes/YooKassa-Common-AbstractObject.md#method_offsetUnset) |  | Удаляет свойство |
| public | [setEvent()](../classes/YooKassa-Model-Webhook-Webhook.md#method_setEvent) |  | Устанавливает событие, о котором уведомляет ЮKassa |
| public | [setId()](../classes/YooKassa-Model-Webhook-Webhook.md#method_setId) |  | Устанавливает идентификатор webhook |
| public | [setUrl()](../classes/YooKassa-Model-Webhook-Webhook.md#method_setUrl) |  | Устанавливает URL, на который ЮKassa будет отправлять уведомления |
| public | [toArray()](../classes/YooKassa-Common-AbstractObject.md#method_toArray) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации Является алиасом метода AbstractObject::jsonSerialize() |
| protected | [getUnknownProperties()](../classes/YooKassa-Common-AbstractObject.md#method_getUnknownProperties) |  | Возвращает массив свойств которые не существуют, но были заданы у объекта |
---
### Details
* File: [lib/Model/Webhook/Webhook.php](../../lib/Model/Webhook/Webhook.php)
* Package: YooKassa
* Class Hierarchy: 
  * [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
  * \YooKassa\Model\Webhook\Webhook
---
## Properties
<a name="property_event"></a>
#### public $event : string
---
***Description***

Событие, о котором уведомляет ЮKassa

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_id"></a>
#### public $id : string
---
***Description***

Идентификатор webhook

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_url"></a>
#### public $url : string
---
***Description***

URL, на который ЮKassa будет отправлять уведомления

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


<a name="method_getEvent" class="anchor"></a>
#### public getEvent() : string

```php
public getEvent() : string
```

**Summary**

Возвращает событие, о котором уведомляет ЮKassa

**Details:**
* Inherited From: [\YooKassa\Model\Webhook\Webhook](../classes/YooKassa-Model-Webhook-Webhook.md)

**Returns:** string - Событие, о котором уведомляет ЮKassa


<a name="method_getId" class="anchor"></a>
#### public getId() : string

```php
public getId() : string
```

**Summary**

Возвращает идентификатор webhook

**Details:**
* Inherited From: [\YooKassa\Model\Webhook\Webhook](../classes/YooKassa-Model-Webhook-Webhook.md)

**Returns:** string - Идентификатор webhook


<a name="method_getUrl" class="anchor"></a>
#### public getUrl() : string

```php
public getUrl() : string
```

**Summary**

Возвращает URL, на который ЮKassa будет отправлять уведомления

**Details:**
* Inherited From: [\YooKassa\Model\Webhook\Webhook](../classes/YooKassa-Model-Webhook-Webhook.md)

**Returns:** string - URL, на который ЮKassa будет отправлять уведомления


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


<a name="method_setEvent" class="anchor"></a>
#### public setEvent() : mixed

```php
public setEvent(string  event) : mixed
```

**Summary**

Устанавливает событие, о котором уведомляет ЮKassa

**Details:**
* Inherited From: [\YooKassa\Model\Webhook\Webhook](../classes/YooKassa-Model-Webhook-Webhook.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | event  | Событие, о котором уведомляет ЮKassa |

**Returns:** mixed - 


<a name="method_setId" class="anchor"></a>
#### public setId() : mixed

```php
public setId(mixed  id) : mixed
```

**Summary**

Устанавливает идентификатор webhook

**Details:**
* Inherited From: [\YooKassa\Model\Webhook\Webhook](../classes/YooKassa-Model-Webhook-Webhook.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">mixed</code> | id  | Идентификатор webhook |

**Returns:** mixed - 


<a name="method_setUrl" class="anchor"></a>
#### public setUrl() : mixed

```php
public setUrl(string  url) : mixed
```

**Summary**

Устанавливает URL, на который ЮKassa будет отправлять уведомления

**Details:**
* Inherited From: [\YooKassa\Model\Webhook\Webhook](../classes/YooKassa-Model-Webhook-Webhook.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | url  | URL, на который ЮKassa будет отправлять уведомления |

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
* [Deprecated - 7](../reports/deprecated.md)

---

This document was automatically generated from source code comments on 2021-04-21 using [phpDocumentor](http://www.phpdoc.org/)

&copy; 2021 YooMoney