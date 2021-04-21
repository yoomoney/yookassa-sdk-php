# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Model\Transfer
### Namespace: [\YooKassa\Model](../namespaces/yookassa-model.md)
---
**Summary:**

Класс объекта распределения денег в магазин

**Description:**

Данные о распределении денег — сколько и в какой магазин нужно перевести.
Присутствует, если вы используете решение ЮKassa для платформ.

---
### Constants
* No constants found
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [$accountId](../classes/YooKassa-Model-Transfer.md#property_accountId) |  | Идентификатор магазина, в пользу которого вы принимаете оплату |
| public | [$amount](../classes/YooKassa-Model-Transfer.md#property_amount) |  | Сумма, которую необходимо перечислить магазину |
| public | [$metadata](../classes/YooKassa-Model-Transfer.md#property_metadata) |  | Любые дополнительные данные, которые нужны вам для работы с платежами (например, номер заказа) |
| public | [$platform_fee_amount](../classes/YooKassa-Model-Transfer.md#property_platform_fee_amount) |  | Комиссия за проданные товары и услуги, которая удерживается с магазина в вашу пользу |
| public | [$status](../classes/YooKassa-Model-Transfer.md#property_status) |  | Статус распределения денег между магазинами. Возможные значения: `pending`, `waiting_for_capture`, `succeeded`, `canceled` |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Model-Transfer.md#method___construct) |  | Transfer constructor. |
| public | [__get()](../classes/YooKassa-Common-AbstractObject.md#method___get) |  | Возвращает значение свойства |
| public | [__isset()](../classes/YooKassa-Common-AbstractObject.md#method___isset) |  | Проверяет наличие свойства |
| public | [__set()](../classes/YooKassa-Common-AbstractObject.md#method___set) |  | Устанавливает значение свойства |
| public | [__unset()](../classes/YooKassa-Common-AbstractObject.md#method___unset) |  | Удаляет свойство |
| public | [fromArray()](../classes/YooKassa-Common-AbstractObject.md#method_fromArray) |  | Устанавливает значения свойств текущего объекта из массива |
| public | [getAccountId()](../classes/YooKassa-Model-Transfer.md#method_getAccountId) |  | Возвращает идентификатор магазина-получателя средств |
| public | [getAmount()](../classes/YooKassa-Model-Transfer.md#method_getAmount) |  | Возвращает сумму оплаты |
| public | [getMetadata()](../classes/YooKassa-Model-Transfer.md#method_getMetadata) |  | Возвращает метаданные |
| public | [getPlatformFeeAmount()](../classes/YooKassa-Model-Transfer.md#method_getPlatformFeeAmount) |  | Возвращает комиссию за проданные товары и услуги, которая удерживается с магазина в вашу пользу |
| public | [getStatus()](../classes/YooKassa-Model-Transfer.md#method_getStatus) |  | Возвращает статус операции распределения средств конечному получателю |
| public | [hasAmount()](../classes/YooKassa-Model-Transfer.md#method_hasAmount) |  | Проверяет была ли установлена сумма оплаты |
| public | [hasMetadata()](../classes/YooKassa-Model-Transfer.md#method_hasMetadata) |  | Проверяет были ли установлены метаданные |
| public | [hasPlatformFeeAmount()](../classes/YooKassa-Model-Transfer.md#method_hasPlatformFeeAmount) |  | Проверяет была ли установлена комиссия за проданные товары и услуги, которая удерживается с магазина в вашу пользу |
| public | [jsonSerialize()](../classes/YooKassa-Common-AbstractObject.md#method_jsonSerialize) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации |
| public | [offsetExists()](../classes/YooKassa-Common-AbstractObject.md#method_offsetExists) |  | Проверяет наличие свойства |
| public | [offsetGet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetGet) |  | Возвращает значение свойства |
| public | [offsetSet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetSet) |  | Устанавливает значение свойства |
| public | [offsetUnset()](../classes/YooKassa-Common-AbstractObject.md#method_offsetUnset) |  | Удаляет свойство |
| public | [setAccountId()](../classes/YooKassa-Model-Transfer.md#method_setAccountId) |  | Устанавливает идентификатор магазина-получателя средств |
| public | [setAmount()](../classes/YooKassa-Model-Transfer.md#method_setAmount) |  | Устанавливает сумму оплаты |
| public | [setMetadata()](../classes/YooKassa-Model-Transfer.md#method_setMetadata) |  | Устанавливает метаданные |
| public | [setPlatformFeeAmount()](../classes/YooKassa-Model-Transfer.md#method_setPlatformFeeAmount) |  | Устанавливает комиссию за проданные товары и услуги, которая удерживается с магазина в вашу пользу |
| public | [setStatus()](../classes/YooKassa-Model-Transfer.md#method_setStatus) |  | Устанавливает статус операции распределения средств конечному получателю |
| public | [toArray()](../classes/YooKassa-Common-AbstractObject.md#method_toArray) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации Является алиасом метода AbstractObject::jsonSerialize() |
| protected | [getUnknownProperties()](../classes/YooKassa-Common-AbstractObject.md#method_getUnknownProperties) |  | Возвращает массив свойств которые не существуют, но были заданы у объекта |
---
### Details
* File: [lib/Model/Transfer.php](../../lib/Model/Transfer.php)
* Package: YooKassa
* Class Hierarchy: 
  * [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
  * \YooKassa\Model\Transfer
* Implements:
  * [\YooKassa\Model\TransferInterface](../classes/YooKassa-Model-TransferInterface.md)
---
## Properties
<a name="property_accountId"></a>
#### public $accountId : string
---
***Description***

Идентификатор магазина, в пользу которого вы принимаете оплату

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_amount"></a>
#### public $amount : \YooKassa\Model\AmountInterface
---
***Description***

Сумма, которую необходимо перечислить магазину

**Type:** <a href="../classes/YooKassa-Model-AmountInterface.html"><abbr title="\YooKassa\Model\AmountInterface">AmountInterface</abbr></a>

**Details:**


<a name="property_metadata"></a>
#### public $metadata : \YooKassa\Model\Metadata
---
***Description***

Любые дополнительные данные, которые нужны вам для работы с платежами (например, номер заказа)

**Type:** <a href="../classes/YooKassa-Model-Metadata.html"><abbr title="\YooKassa\Model\Metadata">Metadata</abbr></a>

**Details:**


<a name="property_platform_fee_amount"></a>
#### public $platform_fee_amount : \YooKassa\Model\AmountInterface
---
***Description***

Комиссия за проданные товары и услуги, которая удерживается с магазина в вашу пользу

**Type:** <a href="../classes/YooKassa-Model-AmountInterface.html"><abbr title="\YooKassa\Model\AmountInterface">AmountInterface</abbr></a>

**Details:**


<a name="property_status"></a>
#### public $status : string
---
***Description***

Статус распределения денег между магазинами. Возможные значения: `pending`, `waiting_for_capture`, `succeeded`, `canceled`

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**



---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(array  data = null) : mixed
```

**Summary**

Transfer constructor.

**Details:**
* Inherited From: [\YooKassa\Model\Transfer](../classes/YooKassa-Model-Transfer.md)
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


<a name="method_getAccountId" class="anchor"></a>
#### public getAccountId() : string|null

```php
public getAccountId() : string|null
```

**Summary**

Возвращает идентификатор магазина-получателя средств

**Details:**
* Inherited From: [\YooKassa\Model\Transfer](../classes/YooKassa-Model-Transfer.md)

**Returns:** string|null - Идентификатор магазина-получателя средств

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritDoc |  |  |

<a name="method_getAmount" class="anchor"></a>
#### public getAmount() : \YooKassa\Model\AmountInterface

```php
public getAmount() : \YooKassa\Model\AmountInterface
```

**Summary**

Возвращает сумму оплаты

**Details:**
* Inherited From: [\YooKassa\Model\Transfer](../classes/YooKassa-Model-Transfer.md)

**Returns:** \YooKassa\Model\AmountInterface - Сумма оплаты

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritDoc |  |  |

<a name="method_getMetadata" class="anchor"></a>
#### public getMetadata() : \YooKassa\Model\Metadata|null

```php
public getMetadata() : \YooKassa\Model\Metadata|null
```

**Summary**

Возвращает метаданные

**Details:**
* Inherited From: [\YooKassa\Model\Transfer](../classes/YooKassa-Model-Transfer.md)

**Returns:** \YooKassa\Model\Metadata|null - Метаданные

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritDoc |  |  |

<a name="method_getPlatformFeeAmount" class="anchor"></a>
#### public getPlatformFeeAmount() : \YooKassa\Model\AmountInterface

```php
public getPlatformFeeAmount() : \YooKassa\Model\AmountInterface
```

**Summary**

Возвращает комиссию за проданные товары и услуги, которая удерживается с магазина в вашу пользу

**Details:**
* Inherited From: [\YooKassa\Model\Transfer](../classes/YooKassa-Model-Transfer.md)

**Returns:** \YooKassa\Model\AmountInterface - Сумма комиссии

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritDoc |  |  |

<a name="method_getStatus" class="anchor"></a>
#### public getStatus() : string|null

```php
public getStatus() : string|null
```

**Summary**

Возвращает статус операции распределения средств конечному получателю

**Details:**
* Inherited From: [\YooKassa\Model\Transfer](../classes/YooKassa-Model-Transfer.md)

**Returns:** string|null - Статус операции распределения средств конечному получателю

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritDoc |  |  |

<a name="method_hasAmount" class="anchor"></a>
#### public hasAmount() : bool

```php
public hasAmount() : bool
```

**Summary**

Проверяет была ли установлена сумма оплаты

**Details:**
* Inherited From: [\YooKassa\Model\Transfer](../classes/YooKassa-Model-Transfer.md)

**Returns:** bool - True если сумма оплаты была установлена, false если нет

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritDoc |  |  |

<a name="method_hasMetadata" class="anchor"></a>
#### public hasMetadata() : bool

```php
public hasMetadata() : bool
```

**Summary**

Проверяет были ли установлены метаданные

**Details:**
* Inherited From: [\YooKassa\Model\Transfer](../classes/YooKassa-Model-Transfer.md)

**Returns:** bool - True если метаданные были установлены, false если нет

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritDoc |  |  |

<a name="method_hasPlatformFeeAmount" class="anchor"></a>
#### public hasPlatformFeeAmount() : bool

```php
public hasPlatformFeeAmount() : bool
```

**Summary**

Проверяет была ли установлена комиссия за проданные товары и услуги, которая удерживается с магазина в вашу пользу

**Details:**
* Inherited From: [\YooKassa\Model\Transfer](../classes/YooKassa-Model-Transfer.md)

**Returns:** bool - True если комиссия была установлена, false если нет

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritDoc |  |  |

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


<a name="method_setAccountId" class="anchor"></a>
#### public setAccountId() : void

```php
public setAccountId(mixed  value) : void
```

**Summary**

Устанавливает идентификатор магазина-получателя средств

**Details:**
* Inherited From: [\YooKassa\Model\Transfer](../classes/YooKassa-Model-Transfer.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">mixed</code> | value  | Идентификатор магазина-получателя средств |

**Returns:** void - 

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritDoc |  |  |

<a name="method_setAmount" class="anchor"></a>
#### public setAmount() : mixed

```php
public setAmount(mixed  value) : mixed
```

**Summary**

Устанавливает сумму оплаты

**Details:**
* Inherited From: [\YooKassa\Model\Transfer](../classes/YooKassa-Model-Transfer.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">mixed</code> | value  | Сумма оплаты |

**Returns:** mixed - 

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritDoc |  |  |

<a name="method_setMetadata" class="anchor"></a>
#### public setMetadata() : mixed

```php
public setMetadata(mixed  value) : mixed
```

**Summary**

Устанавливает метаданные

**Details:**
* Inherited From: [\YooKassa\Model\Transfer](../classes/YooKassa-Model-Transfer.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">mixed</code> | value  | Метаданные |

**Returns:** mixed - 

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritDoc |  |  |

<a name="method_setPlatformFeeAmount" class="anchor"></a>
#### public setPlatformFeeAmount() : mixed

```php
public setPlatformFeeAmount(mixed  value) : mixed
```

**Summary**

Устанавливает комиссию за проданные товары и услуги, которая удерживается с магазина в вашу пользу

**Details:**
* Inherited From: [\YooKassa\Model\Transfer](../classes/YooKassa-Model-Transfer.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">mixed</code> | value  | Сумма комиссии |

**Returns:** mixed - 

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritDoc |  |  |

<a name="method_setStatus" class="anchor"></a>
#### public setStatus() : mixed

```php
public setStatus(string|null  value) : mixed
```

**Summary**

Устанавливает статус операции распределения средств конечному получателю

**Details:**
* Inherited From: [\YooKassa\Model\Transfer](../classes/YooKassa-Model-Transfer.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string OR null</code> | value  |  |

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