# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Request\Receipts\ReceiptResponseItem
### Namespace: [\YooKassa\Request\Receipts](../namespaces/yookassa-request-receipts.md)
---
**Summary:**

Класс, описывающий товар в чеке

---
### Constants
* No constants found
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [$amount](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md#property_amount) |  | Суммарная стоимость товара в копейках/центах |
| public | [$description](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md#property_description) |  | Название товара (не более 128 символов). |
| public | [$payment_mode](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md#property_payment_mode) |  | Признак способа расчета |
| public | [$payment_subject](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md#property_payment_subject) |  | Признак предмета расчета |
| public | [$paymentMode](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md#property_paymentMode) |  | Признак способа расчета |
| public | [$paymentSubject](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md#property_paymentSubject) |  | Признак предмета расчета |
| public | [$price](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md#property_price) |  | Цена товара |
| public | [$quantity](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md#property_quantity) |  | Количество товара. Максимально возможное значение зависит от модели вашей онлайн-кассы. |
| public | [$vat_code](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md#property_vat_code) |  | Ставка НДС, число 1-6 |
| public | [$vatCode](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md#property_vatCode) |  | Ставка НДС, число 1-6 |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md#method___construct) |  | Конструктор, устанавливает настройки товара из ассоциативного массива |
| public | [__get()](../classes/YooKassa-Common-AbstractObject.md#method___get) |  | Возвращает значение свойства |
| public | [__isset()](../classes/YooKassa-Common-AbstractObject.md#method___isset) |  | Проверяет наличие свойства |
| public | [__set()](../classes/YooKassa-Common-AbstractObject.md#method___set) |  | Устанавливает значение свойства |
| public | [__unset()](../classes/YooKassa-Common-AbstractObject.md#method___unset) |  | Удаляет свойство |
| public | [fromArray()](../classes/YooKassa-Common-AbstractObject.md#method_fromArray) |  | Устанавливает значения свойств текущего объекта из массива |
| public | [getAmount()](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md#method_getAmount) |  | Возвращает общую стоимость покупаемого товара в копейках/центах |
| public | [getDescription()](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md#method_getDescription) |  | Возвращает наименование товара |
| public | [getPaymentMode()](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md#method_getPaymentMode) |  | Возвращает признак способа расчета |
| public | [getPaymentSubject()](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md#method_getPaymentSubject) |  | Возвращает признак предмета расчета |
| public | [getPrice()](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md#method_getPrice) |  | Возвращает цену товара |
| public | [getQuantity()](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md#method_getQuantity) |  | Возвращает количество товара |
| public | [getSupplier()](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md#method_getSupplier) |  | Возвращает информацию о поставщике товара или услуги |
| public | [getVatCode()](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md#method_getVatCode) |  | Возвращает ставку НДС |
| public | [jsonSerialize()](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md#method_jsonSerialize) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации |
| public | [offsetExists()](../classes/YooKassa-Common-AbstractObject.md#method_offsetExists) |  | Проверяет наличие свойства |
| public | [offsetGet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetGet) |  | Возвращает значение свойства |
| public | [offsetSet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetSet) |  | Устанавливает значение свойства |
| public | [offsetUnset()](../classes/YooKassa-Common-AbstractObject.md#method_offsetUnset) |  | Удаляет свойство |
| public | [setDescription()](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md#method_setDescription) |  | Устанавливает наименование товара |
| public | [setPaymentMode()](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md#method_setPaymentMode) |  | Устанавливает признак способа расчета |
| public | [setPaymentSubject()](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md#method_setPaymentSubject) |  | Устанавливает признак предмета расчета |
| public | [setPrice()](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md#method_setPrice) |  | Устанавливает цену товара |
| public | [setQuantity()](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md#method_setQuantity) |  | Устанавливает количество покупаемого товара |
| public | [setSupplier()](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md#method_setSupplier) |  | Устанавливает информацию о поставщике товара или услуги. |
| public | [setVatCode()](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md#method_setVatCode) |  | Устанавливает ставку НДС |
| public | [toArray()](../classes/YooKassa-Common-AbstractObject.md#method_toArray) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации Является алиасом метода AbstractObject::jsonSerialize() |
| protected | [getUnknownProperties()](../classes/YooKassa-Common-AbstractObject.md#method_getUnknownProperties) |  | Возвращает массив свойств которые не существуют, но были заданы у объекта |
---
### Details
* File: [lib/Request/Receipts/ReceiptResponseItem.php](../../lib/Request/Receipts/ReceiptResponseItem.php)
* Package: YooKassa
* Class Hierarchy: 
  * [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
  * \YooKassa\Request\Receipts\ReceiptResponseItem
* Implements:
  * [\YooKassa\Request\Receipts\ReceiptResponseItemInterface](../classes/YooKassa-Request-Receipts-ReceiptResponseItemInterface.md)
---
## Properties
<a name="property_amount"></a>
#### public $amount : float
---
***Description***

Суммарная стоимость товара в копейках/центах

**Type:** <a href="../float"><abbr title="float">float</abbr></a>

**Details:**


<a name="property_description"></a>
#### public $description : string
---
***Description***

Название товара (не более 128 символов).

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_payment_mode"></a>
#### public $payment_mode : string
---
***Description***

Признак способа расчета

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_payment_subject"></a>
#### public $payment_subject : string
---
***Description***

Признак предмета расчета

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_paymentMode"></a>
#### public $paymentMode : string
---
***Description***

Признак способа расчета

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_paymentSubject"></a>
#### public $paymentSubject : string
---
***Description***

Признак предмета расчета

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_price"></a>
#### public $price : \YooKassa\Model\AmountInterface
---
***Description***

Цена товара

**Type:** <a href="../classes/YooKassa-Model-AmountInterface.html"><abbr title="\YooKassa\Model\AmountInterface">AmountInterface</abbr></a>

**Details:**


<a name="property_quantity"></a>
#### public $quantity : float
---
***Description***

Количество товара. Максимально возможное значение зависит от модели вашей онлайн-кассы.

**Type:** <a href="../float"><abbr title="float">float</abbr></a>

**Details:**


<a name="property_vat_code"></a>
#### public $vat_code : int
---
***Description***

Ставка НДС, число 1-6

**Type:** <a href="../int"><abbr title="int">int</abbr></a>

**Details:**


<a name="property_vatCode"></a>
#### public $vatCode : int
---
***Description***

Ставка НДС, число 1-6

**Type:** <a href="../int"><abbr title="int">int</abbr></a>

**Details:**



---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(array  itemData) : mixed
```

**Summary**

Конструктор, устанавливает настройки товара из ассоциативного массива

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptResponseItem](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array</code> | itemData  | Массив с информацией о товаре, пришедший от API |

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
#### public getAmount() : int

```php
public getAmount() : int
```

**Summary**

Возвращает общую стоимость покупаемого товара в копейках/центах

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptResponseItem](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md)

**Returns:** int - Сумма стоимости покупаемого товара


<a name="method_getDescription" class="anchor"></a>
#### public getDescription() : string

```php
public getDescription() : string
```

**Summary**

Возвращает наименование товара

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptResponseItem](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md)

**Returns:** string - Наименование товара


<a name="method_getPaymentMode" class="anchor"></a>
#### public getPaymentMode() : string|null

```php
public getPaymentMode() : string|null
```

**Summary**

Возвращает признак способа расчета

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptResponseItem](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md)

**Returns:** string|null - Признак способа расчета


<a name="method_getPaymentSubject" class="anchor"></a>
#### public getPaymentSubject() : string|null

```php
public getPaymentSubject() : string|null
```

**Summary**

Возвращает признак предмета расчета

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptResponseItem](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md)

**Returns:** string|null - Признак предмета расчета


<a name="method_getPrice" class="anchor"></a>
#### public getPrice() : \YooKassa\Model\AmountInterface

```php
public getPrice() : \YooKassa\Model\AmountInterface
```

**Summary**

Возвращает цену товара

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptResponseItem](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md)

**Returns:** \YooKassa\Model\AmountInterface - Цена товара


<a name="method_getQuantity" class="anchor"></a>
#### public getQuantity() : float

```php
public getQuantity() : float
```

**Summary**

Возвращает количество товара

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptResponseItem](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md)

**Returns:** float - Количество купленного товара


<a name="method_getSupplier" class="anchor"></a>
#### public getSupplier() : \YooKassa\Model\SupplierInterface

```php
public getSupplier() : \YooKassa\Model\SupplierInterface
```

**Summary**

Возвращает информацию о поставщике товара или услуги

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptResponseItem](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md)

**Returns:** \YooKassa\Model\SupplierInterface - 


<a name="method_getVatCode" class="anchor"></a>
#### public getVatCode() : int|null

```php
public getVatCode() : int|null
```

**Summary**

Возвращает ставку НДС

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptResponseItem](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md)

**Returns:** int|null - Ставка НДС, число 1-6, или null если ставка не задана


<a name="method_jsonSerialize" class="anchor"></a>
#### public jsonSerialize() : array

```php
public jsonSerialize() : array
```

**Summary**

Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptResponseItem](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md)

**Returns:** array - 


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


<a name="method_setDescription" class="anchor"></a>
#### public setDescription() : mixed

```php
public setDescription(string  value) : mixed
```

**Summary**

Устанавливает наименование товара

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptResponseItem](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Наименование товара |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\EmptyPropertyValueException | Выбрасывается если было передано пустое значение |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в качестве аргумента была передана не строка |

**Returns:** mixed - 


<a name="method_setPaymentMode" class="anchor"></a>
#### public setPaymentMode() : mixed

```php
public setPaymentMode(string  value) : mixed
```

**Summary**

Устанавливает признак способа расчета

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptResponseItem](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Признак способа расчета |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в качестве аргумента была передана не строка |

**Returns:** mixed - 


<a name="method_setPaymentSubject" class="anchor"></a>
#### public setPaymentSubject() : mixed

```php
public setPaymentSubject(string  value) : mixed
```

**Summary**

Устанавливает признак предмета расчета

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptResponseItem](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Признак предмета расчета |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в качестве аргумента была передана не строка |

**Returns:** mixed - 


<a name="method_setPrice" class="anchor"></a>
#### public setPrice() : mixed

```php
public setPrice(\YooKassa\Model\AmountInterface  value) : mixed
```

**Summary**

Устанавливает цену товара

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptResponseItem](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\AmountInterface</code> | value  | Цена товара |

**Returns:** mixed - 


<a name="method_setQuantity" class="anchor"></a>
#### public setQuantity() : mixed

```php
public setQuantity(int  value) : mixed
```

**Summary**

Устанавливает количество покупаемого товара

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptResponseItem](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">int</code> | value  | Количество |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\EmptyPropertyValueException | Выбрасывается если было передано пустое значение |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если в качестве аргумента был передан ноль или отрицательное число |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в качестве аргумента было передано не число |

**Returns:** mixed - 


<a name="method_setSupplier" class="anchor"></a>
#### public setSupplier() : mixed

```php
public setSupplier(\YooKassa\Model\SupplierInterface|array  value) : mixed
```

**Summary**

Устанавливает информацию о поставщике товара или услуги.

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptResponseItem](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\SupplierInterface OR array</code> | value  |  |

**Returns:** mixed - 


<a name="method_setVatCode" class="anchor"></a>
#### public setVatCode() : mixed

```php
public setVatCode(int  value) : mixed
```

**Summary**

Устанавливает ставку НДС

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\ReceiptResponseItem](../classes/YooKassa-Request-Receipts-ReceiptResponseItem.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">int</code> | value  | Ставка НДС, число 1-6 |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если в качестве аргумента было передано число меньше одного или больше шести |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в качестве аргумента было передано не число |

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