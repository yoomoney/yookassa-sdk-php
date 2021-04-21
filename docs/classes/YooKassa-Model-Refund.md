# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Model\Refund
### Namespace: [\YooKassa\Model](../namespaces/yookassa-model.md)
---
**Summary:**

Класс объекта с информацией о возврате платежа

---
### Constants
* No constants found
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [$amount](../classes/YooKassa-Model-Refund.md#property_amount) |  | Сумма возврата |
| public | [$created_at](../classes/YooKassa-Model-Refund.md#property_created_at) |  | Время создания возврата |
| public | [$createdAt](../classes/YooKassa-Model-Refund.md#property_createdAt) |  | Время создания возврата |
| public | [$description](../classes/YooKassa-Model-Refund.md#property_description) |  | Комментарий, основание для возврата средств покупателю |
| public | [$id](../classes/YooKassa-Model-Refund.md#property_id) |  | Идентификатор возврата платежа |
| public | [$payment_id](../classes/YooKassa-Model-Refund.md#property_payment_id) |  | Идентификатор платежа |
| public | [$paymentId](../classes/YooKassa-Model-Refund.md#property_paymentId) |  | Идентификатор платежа |
| public | [$receipt_registration](../classes/YooKassa-Model-Refund.md#property_receipt_registration) |  | Статус регистрации чека |
| public | [$receiptRegistration](../classes/YooKassa-Model-Refund.md#property_receiptRegistration) |  | Статус регистрации чека |
| public | [$status](../classes/YooKassa-Model-Refund.md#property_status) |  | Статус возврата |
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
| public | [getAmount()](../classes/YooKassa-Model-Refund.md#method_getAmount) |  | Возвращает сумму возврата |
| public | [getCreatedAt()](../classes/YooKassa-Model-Refund.md#method_getCreatedAt) |  | Возвращает дату создания возврата |
| public | [getDescription()](../classes/YooKassa-Model-Refund.md#method_getDescription) |  | Возвращает комментарий к возврату |
| public | [getId()](../classes/YooKassa-Model-Refund.md#method_getId) |  | Возвращает идентификатор возврата платежа |
| public | [getPaymentId()](../classes/YooKassa-Model-Refund.md#method_getPaymentId) |  | Возвращает идентификатор платежа |
| public | [getReceiptRegistration()](../classes/YooKassa-Model-Refund.md#method_getReceiptRegistration) |  | Возвращает статус регистрации чека |
| public | [getRequestor()](../classes/YooKassa-Model-Refund.md#method_getRequestor) |  | Возвращает инициатора платежа или возврата |
| public | [getSources()](../classes/YooKassa-Model-Refund.md#method_getSources) |  | Возвращает информацию о распределении денег — сколько и в какой магазин нужно перевести |
| public | [getStatus()](../classes/YooKassa-Model-Refund.md#method_getStatus) |  | Возвращает статус текущего возврата |
| public | [jsonSerialize()](../classes/YooKassa-Common-AbstractObject.md#method_jsonSerialize) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации |
| public | [offsetExists()](../classes/YooKassa-Common-AbstractObject.md#method_offsetExists) |  | Проверяет наличие свойства |
| public | [offsetGet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetGet) |  | Возвращает значение свойства |
| public | [offsetSet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetSet) |  | Устанавливает значение свойства |
| public | [offsetUnset()](../classes/YooKassa-Common-AbstractObject.md#method_offsetUnset) |  | Удаляет свойство |
| public | [setAmount()](../classes/YooKassa-Model-Refund.md#method_setAmount) |  | Устанавливает сумму возврата |
| public | [setCreatedAt()](../classes/YooKassa-Model-Refund.md#method_setCreatedAt) |  | Устанавливает вермя создания возврата |
| public | [setDescription()](../classes/YooKassa-Model-Refund.md#method_setDescription) |  | Устанавливает комментарий к возврату |
| public | [setId()](../classes/YooKassa-Model-Refund.md#method_setId) |  | Устанавливает идентификатор возврата |
| public | [setPaymentId()](../classes/YooKassa-Model-Refund.md#method_setPaymentId) |  | Устанавливает идентификатор платежа |
| public | [setReceiptRegistration()](../classes/YooKassa-Model-Refund.md#method_setReceiptRegistration) |  | Устанавливает статус регистрации чека |
| public | [setRequestor()](../classes/YooKassa-Model-Refund.md#method_setRequestor) |  | Устанавливает инициатора платежа или возврата |
| public | [setSources()](../classes/YooKassa-Model-Refund.md#method_setSources) |  | Устанавливает sources (массив распределения денег между магазинами) |
| public | [setStatus()](../classes/YooKassa-Model-Refund.md#method_setStatus) |  | Усианавливает стутус возврата платежа |
| public | [toArray()](../classes/YooKassa-Common-AbstractObject.md#method_toArray) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации Является алиасом метода AbstractObject::jsonSerialize() |
| protected | [getUnknownProperties()](../classes/YooKassa-Common-AbstractObject.md#method_getUnknownProperties) |  | Возвращает массив свойств которые не существуют, но были заданы у объекта |
---
### Details
* File: [lib/Model/Refund.php](../../lib/Model/Refund.php)
* Package: Default
* Class Hierarchy: 
  * [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
  * \YooKassa\Model\Refund
* Implements:
  * [\YooKassa\Model\RefundInterface](../classes/YooKassa-Model-RefundInterface.md)
---
## Properties
<a name="property_amount"></a>
#### public $amount : \YooKassa\Model\AmountInterface
---
***Description***

Сумма возврата

**Type:** <a href="../classes/YooKassa-Model-AmountInterface.html"><abbr title="\YooKassa\Model\AmountInterface">AmountInterface</abbr></a>

**Details:**


<a name="property_created_at"></a>
#### public $created_at : \DateTime
---
***Description***

Время создания возврата

**Type:** \DateTime

**Details:**


<a name="property_createdAt"></a>
#### public $createdAt : \DateTime
---
***Description***

Время создания возврата

**Type:** \DateTime

**Details:**


<a name="property_description"></a>
#### public $description : string
---
***Description***

Комментарий, основание для возврата средств покупателю

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_id"></a>
#### public $id : string
---
***Description***

Идентификатор возврата платежа

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_payment_id"></a>
#### public $payment_id : string
---
***Description***

Идентификатор платежа

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_paymentId"></a>
#### public $paymentId : string
---
***Description***

Идентификатор платежа

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_receipt_registration"></a>
#### public $receipt_registration : string
---
***Description***

Статус регистрации чека

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_receiptRegistration"></a>
#### public $receiptRegistration : string
---
***Description***

Статус регистрации чека

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


<a name="method_getAmount" class="anchor"></a>
#### public getAmount() : \YooKassa\Model\AmountInterface

```php
public getAmount() : \YooKassa\Model\AmountInterface
```

**Summary**

Возвращает сумму возврата

**Details:**
* Inherited From: [\YooKassa\Model\Refund](../classes/YooKassa-Model-Refund.md)

**Returns:** \YooKassa\Model\AmountInterface - Сумма возврата


<a name="method_getCreatedAt" class="anchor"></a>
#### public getCreatedAt() : \DateTime

```php
public getCreatedAt() : \DateTime
```

**Summary**

Возвращает дату создания возврата

**Details:**
* Inherited From: [\YooKassa\Model\Refund](../classes/YooKassa-Model-Refund.md)

**Returns:** \DateTime - Время создания возврата


<a name="method_getDescription" class="anchor"></a>
#### public getDescription() : string

```php
public getDescription() : string
```

**Summary**

Возвращает комментарий к возврату

**Details:**
* Inherited From: [\YooKassa\Model\Refund](../classes/YooKassa-Model-Refund.md)

**Returns:** string - Комментарий, основание для возврата средств покупателю


<a name="method_getId" class="anchor"></a>
#### public getId() : string

```php
public getId() : string
```

**Summary**

Возвращает идентификатор возврата платежа

**Details:**
* Inherited From: [\YooKassa\Model\Refund](../classes/YooKassa-Model-Refund.md)

**Returns:** string - Идентификатор возврата


<a name="method_getPaymentId" class="anchor"></a>
#### public getPaymentId() : string

```php
public getPaymentId() : string
```

**Summary**

Возвращает идентификатор платежа

**Details:**
* Inherited From: [\YooKassa\Model\Refund](../classes/YooKassa-Model-Refund.md)

**Returns:** string - Идентификатор платежа


<a name="method_getReceiptRegistration" class="anchor"></a>
#### public getReceiptRegistration() : string

```php
public getReceiptRegistration() : string
```

**Summary**

Возвращает статус регистрации чека

**Details:**
* Inherited From: [\YooKassa\Model\Refund](../classes/YooKassa-Model-Refund.md)

**Returns:** string - Статус регистрации чека


<a name="method_getRequestor" class="anchor"></a>
#### public getRequestor() : \YooKassa\Model\RequestorInterface

```php
public getRequestor() : \YooKassa\Model\RequestorInterface
```

**Summary**

Возвращает инициатора платежа или возврата

**Details:**
* Inherited From: [\YooKassa\Model\Refund](../classes/YooKassa-Model-Refund.md)

**Returns:** \YooKassa\Model\RequestorInterface - Инициатор платежа или возврата


<a name="method_getSources" class="anchor"></a>
#### public getSources() : \YooKassa\Model\SourceInterface[]

```php
public getSources() : \YooKassa\Model\SourceInterface[]
```

**Summary**

Возвращает информацию о распределении денег — сколько и в какой магазин нужно перевести

**Details:**
* Inherited From: [\YooKassa\Model\Refund](../classes/YooKassa-Model-Refund.md)

**Returns:** \YooKassa\Model\SourceInterface[] - 

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritdoc |  |  |

<a name="method_getStatus" class="anchor"></a>
#### public getStatus() : string

```php
public getStatus() : string
```

**Summary**

Возвращает статус текущего возврата

**Details:**
* Inherited From: [\YooKassa\Model\Refund](../classes/YooKassa-Model-Refund.md)

**Returns:** string - Статус возврата


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


<a name="method_setAmount" class="anchor"></a>
#### public setAmount() : mixed

```php
public setAmount(\YooKassa\Model\AmountInterface  value) : mixed
```

**Summary**

Устанавливает сумму возврата

**Details:**
* Inherited From: [\YooKassa\Model\Refund](../classes/YooKassa-Model-Refund.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\AmountInterface</code> | value  | Сумма возврата |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если переданная сумма меньше или равна нулю |

**Returns:** mixed - 


<a name="method_setCreatedAt" class="anchor"></a>
#### public setCreatedAt() : mixed

```php
public setCreatedAt(\DateTime  value) : mixed
```

**Summary**

Устанавливает вермя создания возврата

**Details:**
* Inherited From: [\YooKassa\Model\Refund](../classes/YooKassa-Model-Refund.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime</code> | value  | Время создания возврата |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\EmptyPropertyValueException | Выбрасывается если быо передано пустое значение |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если переданную строку или число не удалось интерпретировать как дату и время |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Выбрасывается если было передано значение невалидного типа |

**Returns:** mixed - 


<a name="method_setDescription" class="anchor"></a>
#### public setDescription() : mixed

```php
public setDescription(string  value) : mixed
```

**Summary**

Устанавливает комментарий к возврату

**Details:**
* Inherited From: [\YooKassa\Model\Refund](../classes/YooKassa-Model-Refund.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Комментарий, основание для возврата средств покупателю |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\EmptyPropertyValueException | Выбрасывается если был передан пустой аргумент |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если аргумент не является строкой |

**Returns:** mixed - 


<a name="method_setId" class="anchor"></a>
#### public setId() : mixed

```php
public setId(string  value) : mixed
```

**Summary**

Устанавливает идентификатор возврата

**Details:**
* Inherited From: [\YooKassa\Model\Refund](../classes/YooKassa-Model-Refund.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Идентификатор возврата |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\EmptyPropertyValueException | Выбрасывается если был передан пустой аргумент |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если було передано невалидное значение |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если аргумент не является строкой |

**Returns:** mixed - 


<a name="method_setPaymentId" class="anchor"></a>
#### public setPaymentId() : mixed

```php
public setPaymentId(string  value) : mixed
```

**Summary**

Устанавливает идентификатор платежа

**Details:**
* Inherited From: [\YooKassa\Model\Refund](../classes/YooKassa-Model-Refund.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Идентификатор платежа |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\EmptyPropertyValueException | Выбрасывается если был передан пустой аргумент |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если було передано невалидное значение |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если аргумент не является строкой |

**Returns:** mixed - 


<a name="method_setReceiptRegistration" class="anchor"></a>
#### public setReceiptRegistration() : mixed

```php
public setReceiptRegistration(string  value) : mixed
```

**Summary**

Устанавливает статус регистрации чека

**Details:**
* Inherited From: [\YooKassa\Model\Refund](../classes/YooKassa-Model-Refund.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Статус регистрации чека |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\EmptyPropertyValueException | Выбрасывается если был передан пустой аргумент |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если було передано невалидное значение |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если аргумент не является строкой |

**Returns:** mixed - 


<a name="method_setRequestor" class="anchor"></a>
#### public setRequestor() : mixed

```php
public setRequestor(\YooKassa\Model\RequestorInterface|array  value) : mixed
```

**Summary**

Устанавливает инициатора платежа или возврата

**Details:**
* Inherited From: [\YooKassa\Model\Refund](../classes/YooKassa-Model-Refund.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\RequestorInterface OR array</code> | value  | Инициатор платежа или возврата |

**Returns:** mixed - 


<a name="method_setSources" class="anchor"></a>
#### public setSources() : mixed

```php
public setSources(\YooKassa\Model\SourceInterface[]|array  value) : mixed
```

**Summary**

Устанавливает sources (массив распределения денег между магазинами)

**Details:**
* Inherited From: [\YooKassa\Model\Refund](../classes/YooKassa-Model-Refund.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\SourceInterface[] OR array</code> | value  |  |

**Returns:** mixed - 


<a name="method_setStatus" class="anchor"></a>
#### public setStatus() : mixed

```php
public setStatus(string  value) : mixed
```

**Summary**

Усианавливает стутус возврата платежа

**Details:**
* Inherited From: [\YooKassa\Model\Refund](../classes/YooKassa-Model-Refund.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Статус возврата платежа |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\EmptyPropertyValueException | Выбрасывается если был передан пустой аргумент |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если було передано невалидное значение |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если аргумент не является строкой |

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