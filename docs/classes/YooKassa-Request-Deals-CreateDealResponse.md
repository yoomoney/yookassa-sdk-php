# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Request\Deals\CreateDealResponse
### Namespace: [\YooKassa\Request\Deals](../namespaces/yookassa-request-deals.md)
---
**Summary:**

Класс объекта ответа возвращаемого API при запросе на создание сделки


---
### Constants
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [MAX_LENGTH_DESCRIPTION](../classes/YooKassa-Model-SafeDeal.md#constant_MAX_LENGTH_DESCRIPTION) |  | Максимальная длина строки описания сделки |

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
| public | [getBalance()](../classes/YooKassa-Model-SafeDeal.md#method_getBalance) |  | Возвращает баланс сделки |
| public | [getCreatedAt()](../classes/YooKassa-Model-SafeDeal.md#method_getCreatedAt) |  | Возвращает время создания сделки |
| public | [getDescription()](../classes/YooKassa-Model-SafeDeal.md#method_getDescription) |  | Возвращает описание сделки (не более 128 символов). |
| public | [getExpiresAt()](../classes/YooKassa-Model-SafeDeal.md#method_getExpiresAt) |  | Возвращает время автоматического закрытия сделки |
| public | [getFeeMoment()](../classes/YooKassa-Model-SafeDeal.md#method_getFeeMoment) |  | Возвращает момент перечисления вам вознаграждения платформы |
| public | [getId()](../classes/YooKassa-Model-SafeDeal.md#method_getId) |  | Возвращает Id сделки |
| public | [getMetadata()](../classes/YooKassa-Model-SafeDeal.md#method_getMetadata) |  | Возвращает дополнительные данные сделки |
| public | [getPayoutBalance()](../classes/YooKassa-Model-SafeDeal.md#method_getPayoutBalance) |  | Возвращает сумму вознаграждения продавца |
| public | [getStatus()](../classes/YooKassa-Model-SafeDeal.md#method_getStatus) |  | Возвращает статус сделки |
| public | [getTest()](../classes/YooKassa-Model-SafeDeal.md#method_getTest) |  | Возвращает признак тестовой операции |
| public | [getType()](../classes/YooKassa-Model-BaseDeal.md#method_getType) |  | Возвращает тип сделки |
| public | [jsonSerialize()](../classes/YooKassa-Common-AbstractObject.md#method_jsonSerialize) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации |
| public | [offsetExists()](../classes/YooKassa-Common-AbstractObject.md#method_offsetExists) |  | Проверяет наличие свойства |
| public | [offsetGet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetGet) |  | Возвращает значение свойства |
| public | [offsetSet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetSet) |  | Устанавливает значение свойства |
| public | [offsetUnset()](../classes/YooKassa-Common-AbstractObject.md#method_offsetUnset) |  | Удаляет свойство |
| public | [setBalance()](../classes/YooKassa-Model-SafeDeal.md#method_setBalance) |  | Устанавливает баланс сделки |
| public | [setCreatedAt()](../classes/YooKassa-Model-SafeDeal.md#method_setCreatedAt) |  | Устанавливает время создания сделки |
| public | [setDescription()](../classes/YooKassa-Model-SafeDeal.md#method_setDescription) |  | Устанавливает описание сделки (не более 128 символов). |
| public | [setExpiresAt()](../classes/YooKassa-Model-SafeDeal.md#method_setExpiresAt) |  | Устанавливает время автоматического закрытия сделки |
| public | [setFeeMoment()](../classes/YooKassa-Model-SafeDeal.md#method_setFeeMoment) |  | Устанавливает момент перечисления вам вознаграждения платформы |
| public | [setId()](../classes/YooKassa-Model-SafeDeal.md#method_setId) |  | Устанавливает Id сделки |
| public | [setMetadata()](../classes/YooKassa-Model-SafeDeal.md#method_setMetadata) |  | Устанавливает дополнительные данные сделки |
| public | [setPayoutBalance()](../classes/YooKassa-Model-SafeDeal.md#method_setPayoutBalance) |  | Устанавливает сумму вознаграждения продавца |
| public | [setStatus()](../classes/YooKassa-Model-SafeDeal.md#method_setStatus) |  | Устанавливает статус сделки |
| public | [setTest()](../classes/YooKassa-Model-SafeDeal.md#method_setTest) |  | Устанавливает признак тестовой операции |
| public | [setType()](../classes/YooKassa-Model-BaseDeal.md#method_setType) |  | Устанавливает тип сделки |
| public | [toArray()](../classes/YooKassa-Common-AbstractObject.md#method_toArray) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации Является алиасом метода AbstractObject::jsonSerialize() |
| protected | [getUnknownProperties()](../classes/YooKassa-Common-AbstractObject.md#method_getUnknownProperties) |  | Возвращает массив свойств которые не существуют, но были заданы у объекта |

---
### Details
* File: [lib/Request/Deals/CreateDealResponse.php](../../lib/Request/Deals/CreateDealResponse.php)
* Package: YooKassa
* Class Hierarchy:    
  * [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
  * [\YooKassa\Model\BaseDeal](../classes/YooKassa-Model-BaseDeal.md)
  * [\YooKassa\Model\SafeDeal](../classes/YooKassa-Model-SafeDeal.md)
  * [\YooKassa\Request\Deals\AbstractDealResponse](../classes/YooKassa-Request-Deals-AbstractDealResponse.md)
  * \YooKassa\Request\Deals\CreateDealResponse

---
## Constants
<a name="constant_MAX_LENGTH_DESCRIPTION" class="anchor"></a>
###### MAX_LENGTH_DESCRIPTION
Inherited from [\YooKassa\Model\SafeDeal](../classes/YooKassa-Model-SafeDeal.md)

Максимальная длина строки описания сделки

```php
MAX_LENGTH_DESCRIPTION = 128
```



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


<a name="method_getBalance" class="anchor"></a>
#### public getBalance() : \YooKassa\Model\MonetaryAmount

```php
public getBalance() : \YooKassa\Model\MonetaryAmount
```

**Summary**

Возвращает баланс сделки

**Details:**
* Inherited From: [\YooKassa\Model\SafeDeal](../classes/YooKassa-Model-SafeDeal.md)

**Returns:** \YooKassa\Model\MonetaryAmount - Баланс сделки

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritDoc |  |  |

<a name="method_getCreatedAt" class="anchor"></a>
#### public getCreatedAt() : \DateTime

```php
public getCreatedAt() : \DateTime
```

**Summary**

Возвращает время создания сделки

**Details:**
* Inherited From: [\YooKassa\Model\SafeDeal](../classes/YooKassa-Model-SafeDeal.md)

**Returns:** \DateTime - Время создания сделки

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritDoc |  |  |

<a name="method_getDescription" class="anchor"></a>
#### public getDescription() : string

```php
public getDescription() : string
```

**Summary**

Возвращает описание сделки (не более 128 символов).

**Details:**
* Inherited From: [\YooKassa\Model\SafeDeal](../classes/YooKassa-Model-SafeDeal.md)

**Returns:** string - Описание сделки

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritDoc |  |  |

<a name="method_getExpiresAt" class="anchor"></a>
#### public getExpiresAt() : \DateTime

```php
public getExpiresAt() : \DateTime
```

**Summary**

Возвращает время автоматического закрытия сделки

**Details:**
* Inherited From: [\YooKassa\Model\SafeDeal](../classes/YooKassa-Model-SafeDeal.md)

**Returns:** \DateTime - Время автоматического закрытия сделки

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritDoc |  |  |

<a name="method_getFeeMoment" class="anchor"></a>
#### public getFeeMoment() : string

```php
public getFeeMoment() : string
```

**Summary**

Возвращает момент перечисления вам вознаграждения платформы

**Details:**
* Inherited From: [\YooKassa\Model\SafeDeal](../classes/YooKassa-Model-SafeDeal.md)

**Returns:** string - Момент перечисления вознаграждения

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritDoc |  |  |

<a name="method_getId" class="anchor"></a>
#### public getId() : string

```php
public getId() : string
```

**Summary**

Возвращает Id сделки

**Details:**
* Inherited From: [\YooKassa\Model\SafeDeal](../classes/YooKassa-Model-SafeDeal.md)

**Returns:** string - Id сделки

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritDoc |  |  |

<a name="method_getMetadata" class="anchor"></a>
#### public getMetadata() : \YooKassa\Model\Metadata

```php
public getMetadata() : \YooKassa\Model\Metadata
```

**Summary**

Возвращает дополнительные данные сделки

**Details:**
* Inherited From: [\YooKassa\Model\SafeDeal](../classes/YooKassa-Model-SafeDeal.md)

**Returns:** \YooKassa\Model\Metadata - Дополнительные данные сделки

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritDoc |  |  |

<a name="method_getPayoutBalance" class="anchor"></a>
#### public getPayoutBalance() : \YooKassa\Model\MonetaryAmount

```php
public getPayoutBalance() : \YooKassa\Model\MonetaryAmount
```

**Summary**

Возвращает сумму вознаграждения продавца

**Details:**
* Inherited From: [\YooKassa\Model\SafeDeal](../classes/YooKassa-Model-SafeDeal.md)

**Returns:** \YooKassa\Model\MonetaryAmount - Сумма вознаграждения продавца

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritDoc |  |  |

<a name="method_getStatus" class="anchor"></a>
#### public getStatus() : string

```php
public getStatus() : string
```

**Summary**

Возвращает статус сделки

**Details:**
* Inherited From: [\YooKassa\Model\SafeDeal](../classes/YooKassa-Model-SafeDeal.md)

**Returns:** string - Статус сделки

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritDoc |  |  |

<a name="method_getTest" class="anchor"></a>
#### public getTest() : bool

```php
public getTest() : bool
```

**Summary**

Возвращает признак тестовой операции

**Details:**
* Inherited From: [\YooKassa\Model\SafeDeal](../classes/YooKassa-Model-SafeDeal.md)

**Returns:** bool - Признак тестовой операции

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritDoc |  |  |

<a name="method_getType" class="anchor"></a>
#### public getType() : string

```php
public getType() : string
```

**Summary**

Возвращает тип сделки

**Details:**
* Inherited From: [\YooKassa\Model\BaseDeal](../classes/YooKassa-Model-BaseDeal.md)

**Returns:** string - Тип сделки


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


<a name="method_setBalance" class="anchor"></a>
#### public setBalance() : \YooKassa\Model\SafeDeal

```php
public setBalance(\YooKassa\Model\Deal\DealBalanceAmount|array $value) : \YooKassa\Model\SafeDeal
```

**Summary**

Устанавливает баланс сделки

**Details:**
* Inherited From: [\YooKassa\Model\SafeDeal](../classes/YooKassa-Model-SafeDeal.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\Deal\DealBalanceAmount OR array</code> | value  | Баланс сделки |

**Returns:** \YooKassa\Model\SafeDeal - 


<a name="method_setCreatedAt" class="anchor"></a>
#### public setCreatedAt() : \YooKassa\Model\SafeDeal

```php
public setCreatedAt(\DateTime|string $value) : \YooKassa\Model\SafeDeal
```

**Summary**

Устанавливает время создания сделки

**Details:**
* Inherited From: [\YooKassa\Model\SafeDeal](../classes/YooKassa-Model-SafeDeal.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string</code> | value  | Время создания сделки |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\EmptyPropertyValueException | Выбрасывается если в метод была передана пустая дата |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если передали строку, которую не удалось привести к дате |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Выбрасывается если был передан аргумент, который невозможно интерпретировать как дату или время |

**Returns:** \YooKassa\Model\SafeDeal - 


<a name="method_setDescription" class="anchor"></a>
#### public setDescription() : \YooKassa\Model\SafeDeal

```php
public setDescription(string $value) : \YooKassa\Model\SafeDeal
```

**Summary**

Устанавливает описание сделки (не более 128 символов).

**Details:**
* Inherited From: [\YooKassa\Model\SafeDeal](../classes/YooKassa-Model-SafeDeal.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Описание сделки |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если переданное значение превышает допустимую длину |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если переданное значение не является строкой |

**Returns:** \YooKassa\Model\SafeDeal - 


<a name="method_setExpiresAt" class="anchor"></a>
#### public setExpiresAt() : \YooKassa\Model\SafeDeal

```php
public setExpiresAt(\DateTime|string $value) : \YooKassa\Model\SafeDeal
```

**Summary**

Устанавливает время автоматического закрытия сделки

**Details:**
* Inherited From: [\YooKassa\Model\SafeDeal](../classes/YooKassa-Model-SafeDeal.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string</code> | value  | Время автоматического закрытия сделки |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\EmptyPropertyValueException | Выбрасывается если в метод была передана пустая дата |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если передали строку, которую не удалось привести к дате |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Выбрасывается если был передан аргумент, который невозможно интерпретировать как дату или время |

**Returns:** \YooKassa\Model\SafeDeal - 


<a name="method_setFeeMoment" class="anchor"></a>
#### public setFeeMoment() : \YooKassa\Model\SafeDeal

```php
public setFeeMoment(string $value) : \YooKassa\Model\SafeDeal
```

**Summary**

Устанавливает момент перечисления вам вознаграждения платформы

**Details:**
* Inherited From: [\YooKassa\Model\SafeDeal](../classes/YooKassa-Model-SafeDeal.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Момент перечисления вам вознаграждения платформы |

**Returns:** \YooKassa\Model\SafeDeal - 


<a name="method_setId" class="anchor"></a>
#### public setId() : \YooKassa\Model\SafeDeal

```php
public setId(string $value) : \YooKassa\Model\SafeDeal
```

**Summary**

Устанавливает Id сделки

**Details:**
* Inherited From: [\YooKassa\Model\SafeDeal](../classes/YooKassa-Model-SafeDeal.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Id сделки |

**Returns:** \YooKassa\Model\SafeDeal - 


<a name="method_setMetadata" class="anchor"></a>
#### public setMetadata() : \YooKassa\Model\SafeDeal

```php
public setMetadata(\YooKassa\Model\Metadata|array $value) : \YooKassa\Model\SafeDeal
```

**Summary**

Устанавливает дополнительные данные сделки

**Details:**
* Inherited From: [\YooKassa\Model\SafeDeal](../classes/YooKassa-Model-SafeDeal.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\Metadata OR array</code> | value  | Дополнительные данные сделки |

**Returns:** \YooKassa\Model\SafeDeal - 


<a name="method_setPayoutBalance" class="anchor"></a>
#### public setPayoutBalance() : \YooKassa\Model\SafeDeal

```php
public setPayoutBalance(\YooKassa\Model\Deal\DealBalanceAmount $value) : \YooKassa\Model\SafeDeal
```

**Summary**

Устанавливает сумму вознаграждения продавца

**Details:**
* Inherited From: [\YooKassa\Model\SafeDeal](../classes/YooKassa-Model-SafeDeal.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\Deal\DealBalanceAmount</code> | value  | Сумма вознаграждения продавца |

**Returns:** \YooKassa\Model\SafeDeal - 


<a name="method_setStatus" class="anchor"></a>
#### public setStatus() : \YooKassa\Model\SafeDeal

```php
public setStatus(string $value) : \YooKassa\Model\SafeDeal
```

**Summary**

Устанавливает статус сделки

**Details:**
* Inherited From: [\YooKassa\Model\SafeDeal](../classes/YooKassa-Model-SafeDeal.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Статус сделки |

**Returns:** \YooKassa\Model\SafeDeal - 


<a name="method_setTest" class="anchor"></a>
#### public setTest() : \YooKassa\Model\SafeDeal

```php
public setTest(bool $value) : \YooKassa\Model\SafeDeal
```

**Summary**

Устанавливает признак тестовой операции

**Details:**
* Inherited From: [\YooKassa\Model\SafeDeal](../classes/YooKassa-Model-SafeDeal.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">bool</code> | value  | Признак тестовой операции |

**Returns:** \YooKassa\Model\SafeDeal - 


<a name="method_setType" class="anchor"></a>
#### public setType() : mixed

```php
public setType(string $value) : mixed
```

**Summary**

Устанавливает тип сделки

**Details:**
* Inherited From: [\YooKassa\Model\BaseDeal](../classes/YooKassa-Model-BaseDeal.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Тип сделки |

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