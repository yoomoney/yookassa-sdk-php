# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Model\Receipt
### Namespace: [\YooKassa\Model](../namespaces/yookassa-model.md)
---
**Summary:**

Класс данных для формирования чека в онлайн-кассе (для соблюдения 54-ФЗ)

---
### Constants
* No constants found
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [$customer](../classes/YooKassa-Model-Receipt.md#property_customer) |  | Информация о плательщике |
| public | [$items](../classes/YooKassa-Model-Receipt.md#property_items) |  | Список товаров в заказе |
| public | [$settlements](../classes/YooKassa-Model-Receipt.md#property_settlements) |  | Массив оплат, обеспечивающих выдачу товара |
| public | [$tax_system_code](../classes/YooKassa-Model-Receipt.md#property_tax_system_code) |  | Код системы налогообложения. Число 1-6. |
| public | [$taxSystemCode](../classes/YooKassa-Model-Receipt.md#property_taxSystemCode) |  | Код системы налогообложения. Число 1-6. |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Common-AbstractObject.md#method___construct) |  | AbstractObject constructor. |
| public | [__get()](../classes/YooKassa-Common-AbstractObject.md#method___get) |  | Возвращает значение свойства |
| public | [__isset()](../classes/YooKassa-Common-AbstractObject.md#method___isset) |  | Проверяет наличие свойства |
| public | [__set()](../classes/YooKassa-Common-AbstractObject.md#method___set) |  | Устанавливает значение свойства |
| public | [__unset()](../classes/YooKassa-Common-AbstractObject.md#method___unset) |  | Удаляет свойство |
| public | [addItem()](../classes/YooKassa-Model-Receipt.md#method_addItem) |  | Добавляет товар в чек |
| public | [addSettlement()](../classes/YooKassa-Model-Receipt.md#method_addSettlement) |  | Добавляет оплату в чек |
| public | [fromArray()](../classes/YooKassa-Model-Receipt.md#method_fromArray) |  | Устанавливает значения свойств текущего объекта из массива |
| public | [getAmountValue()](../classes/YooKassa-Model-Receipt.md#method_getAmountValue) |  | Возвращает стоимость заказа исходя из состава чека |
| public | [getCustomer()](../classes/YooKassa-Model-Receipt.md#method_getCustomer) |  | Возвращает информацию о плательщике |
| public | [getEmail()](../classes/YooKassa-Model-Receipt.md#method_getEmail) | *deprecated* | Возвращает адрес электронной почты на который будет выслан чек |
| public | [getItems()](../classes/YooKassa-Model-Receipt.md#method_getItems) |  | Возвращает список позиций в текущем чеке |
| public | [getObjectId()](../classes/YooKassa-Model-Receipt.md#method_getObjectId) |  | Возвращает Id объекта чека |
| public | [getPhone()](../classes/YooKassa-Model-Receipt.md#method_getPhone) | *deprecated* | Возвращает номер телефона плательщика в формате ITU-T E.164 на который будет выслан чек |
| public | [getSettlements()](../classes/YooKassa-Model-Receipt.md#method_getSettlements) |  | Возвращает массив оплат, обеспечивающих выдачу товара |
| public | [getShippingAmountValue()](../classes/YooKassa-Model-Receipt.md#method_getShippingAmountValue) |  | Возвращает стоимость доставки исходя из состава чека |
| public | [getTaxSystemCode()](../classes/YooKassa-Model-Receipt.md#method_getTaxSystemCode) |  | Возвращает код системы налогообложения |
| public | [jsonSerialize()](../classes/YooKassa-Common-AbstractObject.md#method_jsonSerialize) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации |
| public | [normalize()](../classes/YooKassa-Model-Receipt.md#method_normalize) |  | Подгоняет стоимость товаров в чеке к общей цене заказа |
| public | [notEmpty()](../classes/YooKassa-Model-Receipt.md#method_notEmpty) |  | Проверяет есть ли в чеке хотя бы одна позиция |
| public | [offsetExists()](../classes/YooKassa-Common-AbstractObject.md#method_offsetExists) |  | Проверяет наличие свойства |
| public | [offsetGet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetGet) |  | Возвращает значение свойства |
| public | [offsetSet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetSet) |  | Устанавливает значение свойства |
| public | [offsetUnset()](../classes/YooKassa-Common-AbstractObject.md#method_offsetUnset) |  | Удаляет свойство |
| public | [setCustomer()](../classes/YooKassa-Model-Receipt.md#method_setCustomer) |  | Устанавливает информацию о плательщике |
| public | [setEmail()](../classes/YooKassa-Model-Receipt.md#method_setEmail) | *deprecated* | Устанавливает адрес электронной почты на который будет выслан чек |
| public | [setItems()](../classes/YooKassa-Model-Receipt.md#method_setItems) |  | Устанавливает список позиций в чеке |
| public | [setPhone()](../classes/YooKassa-Model-Receipt.md#method_setPhone) | *deprecated* | Устанавливает номер телефона плательщика в формате ITU-T E.164 на который будет выслан чек |
| public | [setSettlements()](../classes/YooKassa-Model-Receipt.md#method_setSettlements) |  | Возвращает массив оплат, обеспечивающих выдачу товара |
| public | [setTaxSystemCode()](../classes/YooKassa-Model-Receipt.md#method_setTaxSystemCode) |  | Устанавливает код системы налогообложения |
| public | [toArray()](../classes/YooKassa-Common-AbstractObject.md#method_toArray) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации Является алиасом метода AbstractObject::jsonSerialize() |
| protected | [getUnknownProperties()](../classes/YooKassa-Common-AbstractObject.md#method_getUnknownProperties) |  | Возвращает массив свойств которые не существуют, но были заданы у объекта |
---
### Details
* File: [lib/Model/Receipt.php](../../lib/Model/Receipt.php)
* Package: Default
* Class Hierarchy: 
  * [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
  * \YooKassa\Model\Receipt
* Implements:
  * [\YooKassa\Model\ReceiptInterface](../classes/YooKassa-Model-ReceiptInterface.md)
---
## Properties
<a name="property_customer"></a>
#### public $customer : \YooKassa\Model\ReceiptCustomer
---
***Description***

Информация о плательщике

**Type:** <a href="../classes/YooKassa-Model-ReceiptCustomer.html"><abbr title="\YooKassa\Model\ReceiptCustomer">ReceiptCustomer</abbr></a>

**Details:**


<a name="property_items"></a>
#### public $items : \YooKassa\Model\ReceiptItemInterface[]
---
***Description***

Список товаров в заказе

**Type:** <a href="../\YooKassa\Model\ReceiptItemInterface[]"><abbr title="\YooKassa\Model\ReceiptItemInterface[]">ReceiptItemInterface[]</abbr></a>

**Details:**


<a name="property_settlements"></a>
#### public $settlements : \YooKassa\Model\SettlementInterface[]
---
***Description***

Массив оплат, обеспечивающих выдачу товара

**Type:** <a href="../\YooKassa\Model\SettlementInterface[]"><abbr title="\YooKassa\Model\SettlementInterface[]">SettlementInterface[]</abbr></a>

**Details:**


<a name="property_tax_system_code"></a>
#### public $tax_system_code : int
---
***Description***

Код системы налогообложения. Число 1-6.

**Type:** <a href="../int"><abbr title="int">int</abbr></a>

**Details:**


<a name="property_taxSystemCode"></a>
#### public $taxSystemCode : int
---
***Description***

Код системы налогообложения. Число 1-6.

**Type:** <a href="../int"><abbr title="int">int</abbr></a>

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


<a name="method_addItem" class="anchor"></a>
#### public addItem() : mixed

```php
public addItem(\YooKassa\Model\ReceiptItemInterface  value) : mixed
```

**Summary**

Добавляет товар в чек

**Details:**
* Inherited From: [\YooKassa\Model\Receipt](../classes/YooKassa-Model-Receipt.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\ReceiptItemInterface</code> | value  | Объект добавляемой в чек позиции |

**Returns:** mixed - 


<a name="method_addSettlement" class="anchor"></a>
#### public addSettlement() : mixed

```php
public addSettlement(\YooKassa\Model\SettlementInterface  value) : mixed
```

**Summary**

Добавляет оплату в чек

**Details:**
* Inherited From: [\YooKassa\Model\Receipt](../classes/YooKassa-Model-Receipt.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\SettlementInterface</code> | value  | Объект добавляемой в чек позиции |

**Returns:** mixed - 


<a name="method_fromArray" class="anchor"></a>
#### public fromArray() : mixed

```php
public fromArray(array|\Traversable  sourceArray) : mixed
```

**Summary**

Устанавливает значения свойств текущего объекта из массива

**Details:**
* Inherited From: [\YooKassa\Model\Receipt](../classes/YooKassa-Model-Receipt.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array OR \Traversable</code> | sourceArray  | Ассоциативный массив с настройками |

**Returns:** mixed - 


<a name="method_getAmountValue" class="anchor"></a>
#### public getAmountValue() : int

```php
public getAmountValue(bool  withShipping = true) : int
```

**Summary**

Возвращает стоимость заказа исходя из состава чека

**Details:**
* Inherited From: [\YooKassa\Model\Receipt](../classes/YooKassa-Model-Receipt.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">bool</code> | withShipping  | Добавить ли к стоимости заказа стоимость доставки |

**Returns:** int - Общая стоимость заказа в центах/копейках


<a name="method_getCustomer" class="anchor"></a>
#### public getCustomer() : \YooKassa\Model\ReceiptCustomer

```php
public getCustomer() : \YooKassa\Model\ReceiptCustomer
```

**Summary**

Возвращает информацию о плательщике

**Details:**
* Inherited From: [\YooKassa\Model\Receipt](../classes/YooKassa-Model-Receipt.md)

**Returns:** \YooKassa\Model\ReceiptCustomer - Информация о плательщике


<a name="method_getEmail" class="anchor"></a>
#### (deprecated) - public getEmail() : string

```php
public getEmail() : string
```

**Summary**

Возвращает адрес электронной почты на который будет выслан чек

**Deprecated**
Deprecated since 1.3.0Устарел — данные рекомендуется брать в параметре receipt.customer.email.
**Details:**
* Inherited From: [\YooKassa\Model\Receipt](../classes/YooKassa-Model-Receipt.md)

**Returns:** string - E-mail адрес плательщика


<a name="method_getItems" class="anchor"></a>
#### public getItems() : \YooKassa\Model\ReceiptItemInterface[]

```php
public getItems() : \YooKassa\Model\ReceiptItemInterface[]
```

**Summary**

Возвращает список позиций в текущем чеке

**Details:**
* Inherited From: [\YooKassa\Model\Receipt](../classes/YooKassa-Model-Receipt.md)

**Returns:** \YooKassa\Model\ReceiptItemInterface[] - Список товаров в заказе


<a name="method_getObjectId" class="anchor"></a>
#### public getObjectId() : string

```php
public getObjectId() : string
```

**Summary**

Возвращает Id объекта чека

**Details:**
* Inherited From: [\YooKassa\Model\Receipt](../classes/YooKassa-Model-Receipt.md)

**Returns:** string - Id объекта чека


<a name="method_getPhone" class="anchor"></a>
#### (deprecated) - public getPhone() : string

```php
public getPhone() : string
```

**Summary**

Возвращает номер телефона плательщика в формате ITU-T E.164 на который будет выслан чек

**Deprecated**
Deprecated since 1.3.0Устарел — данные рекомендуется брать в параметре receipt.customer.phone.
**Details:**
* Inherited From: [\YooKassa\Model\Receipt](../classes/YooKassa-Model-Receipt.md)

**Returns:** string - Номер телефона плательщика


<a name="method_getSettlements" class="anchor"></a>
#### public getSettlements() : \YooKassa\Model\SettlementInterface[]

```php
public getSettlements() : \YooKassa\Model\SettlementInterface[]
```

**Summary**

Возвращает массив оплат, обеспечивающих выдачу товара

**Details:**
* Inherited From: [\YooKassa\Model\Receipt](../classes/YooKassa-Model-Receipt.md)

**Returns:** \YooKassa\Model\SettlementInterface[] - Массив оплат, обеспечивающих выдачу товара.


<a name="method_getShippingAmountValue" class="anchor"></a>
#### public getShippingAmountValue() : int

```php
public getShippingAmountValue() : int
```

**Summary**

Возвращает стоимость доставки исходя из состава чека

**Details:**
* Inherited From: [\YooKassa\Model\Receipt](../classes/YooKassa-Model-Receipt.md)

**Returns:** int - Стоимость доставки из состава чека в центах/копейках


<a name="method_getTaxSystemCode" class="anchor"></a>
#### public getTaxSystemCode() : int

```php
public getTaxSystemCode() : int
```

**Summary**

Возвращает код системы налогообложения

**Details:**
* Inherited From: [\YooKassa\Model\Receipt](../classes/YooKassa-Model-Receipt.md)

**Returns:** int - Код системы налогообложения. Число 1-6.


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


<a name="method_normalize" class="anchor"></a>
#### public normalize() : mixed

```php
public normalize(\YooKassa\Model\AmountInterface  orderAmount, bool  withShipping = false) : mixed
```

**Summary**

Подгоняет стоимость товаров в чеке к общей цене заказа

**Details:**
* Inherited From: [\YooKassa\Model\Receipt](../classes/YooKassa-Model-Receipt.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\AmountInterface</code> | orderAmount  | Общая стоимость заказа |
| <code lang="php">bool</code> | withShipping  | Поменять ли заодно и цену доставки |

**Returns:** mixed - 


<a name="method_notEmpty" class="anchor"></a>
#### public notEmpty() : bool

```php
public notEmpty() : bool
```

**Summary**

Проверяет есть ли в чеке хотя бы одна позиция

**Details:**
* Inherited From: [\YooKassa\Model\Receipt](../classes/YooKassa-Model-Receipt.md)

**Returns:** bool - True если чек не пуст, false если в чеке нет ни одной позиции


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


<a name="method_setCustomer" class="anchor"></a>
#### public setCustomer() : mixed

```php
public setCustomer(\YooKassa\Model\ReceiptCustomer  customer) : mixed
```

**Summary**

Устанавливает информацию о плательщике

**Details:**
* Inherited From: [\YooKassa\Model\Receipt](../classes/YooKassa-Model-Receipt.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\ReceiptCustomer</code> | customer  |  |

**Returns:** mixed - 


<a name="method_setEmail" class="anchor"></a>
#### (deprecated) - public setEmail() : mixed

```php
public setEmail(string  value) : mixed
```

**Summary**

Устанавливает адрес электронной почты на который будет выслан чек

**Deprecated**
Deprecated since 1.3.0Устарел — данные рекомендуется передавать в параметре receipt.customer.email.
**Details:**
* Inherited From: [\YooKassa\Model\Receipt](../classes/YooKassa-Model-Receipt.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | E-mail адрес плательщика |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в качестве значения была передана не строка |

**Returns:** mixed - 


<a name="method_setItems" class="anchor"></a>
#### public setItems() : mixed

```php
public setItems(\YooKassa\Model\ReceiptItemInterface[]  value) : mixed
```

**Summary**

Устанавливает список позиций в чеке

**Description**

Если до этого в чеке уже были установлены значения, они удаляются и полностью заменяются переданным списком
позиций. Все передаваемые значения в массиве позиций должны быть объектами класса, реализующего интерфейс
ReceiptItemInterface, в противном случае будет выброшено исключение InvalidPropertyValueTypeException.

**Details:**
* Inherited From: [\YooKassa\Model\Receipt](../classes/YooKassa-Model-Receipt.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\ReceiptItemInterface[]</code> | value  | Список товаров в заказе |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\EmptyPropertyValueException | Выбрасывается если передали пустой массив значений |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в качестве значения был передан не массив и не итератор, либо если одно из переданных значений не реализует интерфейс ReceiptItemInterface |

**Returns:** mixed - 


<a name="method_setPhone" class="anchor"></a>
#### (deprecated) - public setPhone() : mixed

```php
public setPhone(string  value) : mixed
```

**Summary**

Устанавливает номер телефона плательщика в формате ITU-T E.164 на который будет выслан чек

**Deprecated**
Deprecated since 1.3.0Устарел — данные рекомендуется передавать в параметре receipt.customer.phone.
**Details:**
* Inherited From: [\YooKassa\Model\Receipt](../classes/YooKassa-Model-Receipt.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Номер телефона плательщика в формате ITU-T E.164 |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в качестве значения была передана не строка |

**Returns:** mixed - 


<a name="method_setSettlements" class="anchor"></a>
#### public setSettlements() : mixed

```php
public setSettlements(\YooKassa\Model\SettlementInterface[]  value) : mixed
```

**Summary**

Возвращает массив оплат, обеспечивающих выдачу товара

**Details:**
* Inherited From: [\YooKassa\Model\Receipt](../classes/YooKassa-Model-Receipt.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\SettlementInterface[]</code> | value  |  |

**Returns:** mixed - 


<a name="method_setTaxSystemCode" class="anchor"></a>
#### public setTaxSystemCode() : mixed

```php
public setTaxSystemCode(int  value) : mixed
```

**Summary**

Устанавливает код системы налогообложения

**Details:**
* Inherited From: [\YooKassa\Model\Receipt](../classes/YooKassa-Model-Receipt.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">int</code> | value  | Код системы налогообложения. Число 1-6 |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если переданный аргумент - не число |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если переданный аргумент меньше одного или больше шести |

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