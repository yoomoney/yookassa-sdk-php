# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Model\PaymentMethod\PaymentMethodBankCard
### Namespace: [\YooKassa\Model\PaymentMethod](../namespaces/yookassa-model-paymentmethod.md)
---
**Summary:**

Класс, описывающий метод оплаты банковской картой

---
### Constants
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [ISO_3166_CODE_LENGTH](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md#constant_ISO_3166_CODE_LENGTH) |  |  |
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [$card_type](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md#property_card_type) |  | Тип банковской карты |
| public | [$cardType](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md#property_cardType) |  | Тип банковской карты |
| public | [$expiry_month](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md#property_expiry_month) |  | Срок действия, месяц |
| public | [$expiry_year](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md#property_expiry_year) |  | Срок действия, год |
| public | [$expiryMonth](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md#property_expiryMonth) |  | Срок действия, месяц |
| public | [$expiryYear](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md#property_expiryYear) |  | Срок действия, год |
| public | [$first6](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md#property_first6) |  | Первые 6 цифр номера карты |
| public | [$id](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md#property_id) |  | Идентификатор записи о сохраненных платежных данных |
| public | [$issuer_country](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md#property_issuer_country) |  | Код страны, в которой выпущена карта |
| public | [$issuer_name](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md#property_issuer_name) |  | Тип банковской карты |
| public | [$issuerCountry](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md#property_issuerCountry) |  | Код страны, в которой выпущена карта |
| public | [$issuerName](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md#property_issuerName) |  | Тип банковской карты |
| public | [$last4](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md#property_last4) |  | Последние 4 цифры номера карты |
| public | [$saved](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md#property_saved) |  | Возможность многократного использования |
| public | [$source](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md#property_source) |  | Тип банковской карты |
| public | [$title](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md#property_title) |  | Название метода оплаты |
| public | [$type](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md#property_type) |  | Тип объекта |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md#method___construct) |  |  |
| public | [__get()](../classes/YooKassa-Common-AbstractObject.md#method___get) |  | Возвращает значение свойства |
| public | [__isset()](../classes/YooKassa-Common-AbstractObject.md#method___isset) |  | Проверяет наличие свойства |
| public | [__set()](../classes/YooKassa-Common-AbstractObject.md#method___set) |  | Устанавливает значение свойства |
| public | [__unset()](../classes/YooKassa-Common-AbstractObject.md#method___unset) |  | Удаляет свойство |
| public | [fromArray()](../classes/YooKassa-Common-AbstractObject.md#method_fromArray) |  | Устанавливает значения свойств текущего объекта из массива |
| public | [getCardType()](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md#method_getCardType) |  | Возвращает тип банковской карты |
| public | [getExpiryMonth()](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md#method_getExpiryMonth) |  | Возвращает срок действия, месяц |
| public | [getExpiryYear()](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md#method_getExpiryYear) |  | Возвращает срок действия, год |
| public | [getFirst6()](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md#method_getFirst6) |  | Возвращает первые 6 цифр номера карты |
| public | [getId()](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md#method_getId) |  | Устанавливает идентификатор записи о сохраненных платежных данных |
| public | [getIssuerCountry()](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md#method_getIssuerCountry) |  | Возвращает код страны, в которой выпущена карта. Передается в формате ISO-3166 alpha-2 |
| public | [getIssuerName()](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md#method_getIssuerName) |  | Возвращает наименование банка, выпустившего карту |
| public | [getLast4()](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md#method_getLast4) |  | Возвращает последние 4 цифры номера карты |
| public | [getSaved()](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md#method_getSaved) |  | Возвращает признак возможности многократного использования |
| public | [getSource()](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md#method_getSource) |  | Возвращает источник данных банковской карты |
| public | [getTitle()](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md#method_getTitle) |  | Возвращает название метода оплаты |
| public | [getType()](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md#method_getType) |  | Возвращает тип объекта |
| public | [jsonSerialize()](../classes/YooKassa-Common-AbstractObject.md#method_jsonSerialize) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации |
| public | [offsetExists()](../classes/YooKassa-Common-AbstractObject.md#method_offsetExists) |  | Проверяет наличие свойства |
| public | [offsetGet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetGet) |  | Возвращает значение свойства |
| public | [offsetSet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetSet) |  | Устанавливает значение свойства |
| public | [offsetUnset()](../classes/YooKassa-Common-AbstractObject.md#method_offsetUnset) |  | Удаляет свойство |
| public | [setCardType()](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md#method_setCardType) |  | Устанавливает тип банковской карты |
| public | [setExpiryMonth()](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md#method_setExpiryMonth) |  | Устанавливает срок действия, месяц |
| public | [setExpiryYear()](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md#method_setExpiryYear) |  | Устанавливает срок действия, год |
| public | [setFirst6()](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md#method_setFirst6) |  | Устанавливает первые 6 цифр номера карты |
| public | [setId()](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md#method_setId) |  | Возвращает идентификатор записи о сохраненных платежных данных |
| public | [setIssuerCountry()](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md#method_setIssuerCountry) |  | Устанавливает код страны, в которой выпущена карта. Передается в формате ISO-3166 alpha-2 |
| public | [setIssuerName()](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md#method_setIssuerName) |  | Устанавливает наименование банка, выпустившего карту |
| public | [setLast4()](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md#method_setLast4) |  | Устанавливает последние 4 цифры номера карты |
| public | [setSaved()](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md#method_setSaved) |  | Устанавливает признак возможности многократного использования |
| public | [setSource()](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md#method_setSource) |  | Устанавливает источник данных банковской карты |
| public | [setTitle()](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md#method_setTitle) |  | Устанавливает название метода оплаты |
| public | [toArray()](../classes/YooKassa-Common-AbstractObject.md#method_toArray) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации Является алиасом метода AbstractObject::jsonSerialize() |
| protected | [_setType()](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md#method__setType) |  | Устанавливает тип объекта |
| protected | [getUnknownProperties()](../classes/YooKassa-Common-AbstractObject.md#method_getUnknownProperties) |  | Возвращает массив свойств которые не существуют, но были заданы у объекта |
---
### Details
* File: [lib/Model/PaymentMethod/PaymentMethodBankCard.php](../../lib/Model/PaymentMethod/PaymentMethodBankCard.php)
* Package: Default
* Class Hierarchy:  
  * [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
  * [\YooKassa\Model\PaymentMethod\AbstractPaymentMethod](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md)
  * \YooKassa\Model\PaymentMethod\PaymentMethodBankCard
---
## Constants
<a name="constant_ISO_3166_CODE_LENGTH" class="anchor"></a>
###### ISO_3166_CODE_LENGTH
```php
ISO_3166_CODE_LENGTH = 2 : string
```


---
## Properties
<a name="property_card_type"></a>
#### public $card_type : string
---
***Description***

Тип банковской карты

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_cardType"></a>
#### public $cardType : string
---
***Description***

Тип банковской карты

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_expiry_month"></a>
#### public $expiry_month : string
---
***Description***

Срок действия, месяц

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_expiry_year"></a>
#### public $expiry_year : string
---
***Description***

Срок действия, год

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_expiryMonth"></a>
#### public $expiryMonth : string
---
***Description***

Срок действия, месяц

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_expiryYear"></a>
#### public $expiryYear : string
---
***Description***

Срок действия, год

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_first6"></a>
#### public $first6 : string
---
***Description***

Первые 6 цифр номера карты

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_id"></a>
#### public $id : string
---
***Description***

Идентификатор записи о сохраненных платежных данных

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\AbstractPaymentMethod](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md)


<a name="property_issuer_country"></a>
#### public $issuer_country : string
---
***Description***

Код страны, в которой выпущена карта

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_issuer_name"></a>
#### public $issuer_name : string
---
***Description***

Тип банковской карты

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_issuerCountry"></a>
#### public $issuerCountry : string
---
***Description***

Код страны, в которой выпущена карта

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_issuerName"></a>
#### public $issuerName : string
---
***Description***

Тип банковской карты

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_last4"></a>
#### public $last4 : string
---
***Description***

Последние 4 цифры номера карты

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_saved"></a>
#### public $saved : bool
---
***Description***

Возможность многократного использования

**Type:** <a href="../bool"><abbr title="bool">bool</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\AbstractPaymentMethod](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md)


<a name="property_source"></a>
#### public $source : string
---
***Description***

Тип банковской карты

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_title"></a>
#### public $title : string
---
***Description***

Название метода оплаты

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\AbstractPaymentMethod](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md)


<a name="property_type"></a>
#### public $type : string
---
***Description***

Тип объекта

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**



---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct() : mixed
```

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\PaymentMethodBankCard](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md)

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


<a name="method_getCardType" class="anchor"></a>
#### public getCardType() : string

```php
public getCardType() : string
```

**Summary**

Возвращает тип банковской карты

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\PaymentMethodBankCard](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md)

**Returns:** string - Тип банковской карты


<a name="method_getExpiryMonth" class="anchor"></a>
#### public getExpiryMonth() : string

```php
public getExpiryMonth() : string
```

**Summary**

Возвращает срок действия, месяц

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\PaymentMethodBankCard](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md)

**Returns:** string - Срок действия, месяц


<a name="method_getExpiryYear" class="anchor"></a>
#### public getExpiryYear() : string

```php
public getExpiryYear() : string
```

**Summary**

Возвращает срок действия, год

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\PaymentMethodBankCard](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md)

**Returns:** string - Срок действия, год


<a name="method_getFirst6" class="anchor"></a>
#### public getFirst6() : string

```php
public getFirst6() : string
```

**Summary**

Возвращает первые 6 цифр номера карты

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\PaymentMethodBankCard](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md)

**Returns:** string - Первые 6 цифр номера карты

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| since | 1.0.14 |  |

<a name="method_getId" class="anchor"></a>
#### public getId() : string

```php
public getId() : string
```

**Summary**

Устанавливает идентификатор записи о сохраненных платежных данных

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\AbstractPaymentMethod](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md)

**Returns:** string - Идентификатор записи о сохраненных платежных данных


<a name="method_getIssuerCountry" class="anchor"></a>
#### public getIssuerCountry() : string

```php
public getIssuerCountry() : string
```

**Summary**

Возвращает код страны, в которой выпущена карта. Передается в формате ISO-3166 alpha-2

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\PaymentMethodBankCard](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md)

**Returns:** string - Код страны, в которой выпущена карта


<a name="method_getIssuerName" class="anchor"></a>
#### public getIssuerName() : string

```php
public getIssuerName() : string
```

**Summary**

Возвращает наименование банка, выпустившего карту

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\PaymentMethodBankCard](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md)

**Returns:** string - Наименование банка, выпустившего карту.


<a name="method_getLast4" class="anchor"></a>
#### public getLast4() : string

```php
public getLast4() : string
```

**Summary**

Возвращает последние 4 цифры номера карты

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\PaymentMethodBankCard](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md)

**Returns:** string - Последние 4 цифры номера карты


<a name="method_getSaved" class="anchor"></a>
#### public getSaved() : bool

```php
public getSaved() : bool
```

**Summary**

Возвращает признак возможности многократного использования

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\AbstractPaymentMethod](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md)

**Returns:** bool - Возможность многократного использования


<a name="method_getSource" class="anchor"></a>
#### public getSource() : string

```php
public getSource() : string
```

**Summary**

Возвращает источник данных банковской карты

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\PaymentMethodBankCard](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md)

**Returns:** string - Источник данных банковской карты


<a name="method_getTitle" class="anchor"></a>
#### public getTitle() : string|null

```php
public getTitle() : string|null
```

**Summary**

Возвращает название метода оплаты

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\AbstractPaymentMethod](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md)

**Returns:** string|null - Название метода оплаты


<a name="method_getType" class="anchor"></a>
#### public getType() : string

```php
public getType() : string
```

**Summary**

Возвращает тип объекта

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\AbstractPaymentMethod](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md)

**Returns:** string - Тип объекта


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


<a name="method_setCardType" class="anchor"></a>
#### public setCardType() : mixed

```php
public setCardType(string  value) : mixed
```

**Summary**

Устанавливает тип банковской карты

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\PaymentMethodBankCard](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Тип банковской карты |

**Returns:** mixed - 


<a name="method_setExpiryMonth" class="anchor"></a>
#### public setExpiryMonth() : mixed

```php
public setExpiryMonth(string  value) : mixed
```

**Summary**

Устанавливает срок действия, месяц

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\PaymentMethodBankCard](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Срок действия, месяц |

**Returns:** mixed - 


<a name="method_setExpiryYear" class="anchor"></a>
#### public setExpiryYear() : mixed

```php
public setExpiryYear(string  value) : mixed
```

**Summary**

Устанавливает срок действия, год

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\PaymentMethodBankCard](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Срок действия, год |

**Returns:** mixed - 


<a name="method_setFirst6" class="anchor"></a>
#### public setFirst6() : mixed

```php
public setFirst6(string  value) : mixed
```

**Summary**

Устанавливает первые 6 цифр номера карты

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\PaymentMethodBankCard](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Первые 6 цифр номера карты |

**Returns:** mixed - 

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| since | 1.0.14 |  |

<a name="method_setId" class="anchor"></a>
#### public setId() : mixed

```php
public setId(string  value) : mixed
```

**Summary**

Возвращает идентификатор записи о сохраненных платежных данных

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\AbstractPaymentMethod](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Идентификатор записи о сохраненных платежных данных |

**Returns:** mixed - 


<a name="method_setIssuerCountry" class="anchor"></a>
#### public setIssuerCountry() : mixed

```php
public setIssuerCountry(string  value) : mixed
```

**Summary**

Устанавливает код страны, в которой выпущена карта. Передается в формате ISO-3166 alpha-2

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\PaymentMethodBankCard](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Код страны, в которой выпущена карта |

**Returns:** mixed - 


<a name="method_setIssuerName" class="anchor"></a>
#### public setIssuerName() : mixed

```php
public setIssuerName(string  value) : mixed
```

**Summary**

Устанавливает наименование банка, выпустившего карту

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\PaymentMethodBankCard](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Наименование банка, выпустившего карту |

**Returns:** mixed - 


<a name="method_setLast4" class="anchor"></a>
#### public setLast4() : mixed

```php
public setLast4(string  value) : mixed
```

**Summary**

Устанавливает последние 4 цифры номера карты

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\PaymentMethodBankCard](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Последние 4 цифры номера карты |

**Returns:** mixed - 


<a name="method_setSaved" class="anchor"></a>
#### public setSaved() : mixed

```php
public setSaved(bool  value) : mixed
```

**Summary**

Устанавливает признак возможности многократного использования

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\AbstractPaymentMethod](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">bool</code> | value  | Возможность многократного использования |

**Returns:** mixed - 


<a name="method_setSource" class="anchor"></a>
#### public setSource() : mixed

```php
public setSource(string  value) : mixed
```

**Summary**

Устанавливает источник данных банковской карты

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\PaymentMethodBankCard](../classes/YooKassa-Model-PaymentMethod-PaymentMethodBankCard.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Источник данных банковской карты |

**Returns:** mixed - 


<a name="method_setTitle" class="anchor"></a>
#### public setTitle() : mixed

```php
public setTitle(string  value) : mixed
```

**Summary**

Устанавливает название метода оплаты

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\AbstractPaymentMethod](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Название метода оплаты |

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


<a name="method__setType" class="anchor"></a>
#### protected _setType() : mixed

```php
protected _setType(string  value) : mixed
```

**Summary**

Устанавливает тип объекта

**Details:**
* Inherited From: [\YooKassa\Model\PaymentMethod\AbstractPaymentMethod](../classes/YooKassa-Model-PaymentMethod-AbstractPaymentMethod.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Тип объекта |

**Returns:** mixed - 


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