# [YooKassa API SDK](../home.md)

# Abstract Class: \YooKassa\Request\Receipts\AbstractReceiptResponse
### Namespace: [\YooKassa\Request\Receipts](../namespaces/yookassa-request-receipts.md)
---
**Summary:**

Class AbstractReceipt

---
### Constants
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [LENGTH_RECEIPT_ID](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#constant_LENGTH_RECEIPT_ID) |  | Длина идентификатора чека |
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [$fiscal_attribute](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#property_fiscal_attribute) |  | Фискальный признак чека. Формируется фискальным накопителем на основе данных, переданных для регистрации чека. |
| public | [$fiscal_document_number](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#property_fiscal_document_number) |  | Номер фискального документа. |
| public | [$fiscal_provider_id](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#property_fiscal_provider_id) |  | Идентификатор чека в онлайн-кассе. Присутствует, если чек удалось зарегистрировать. |
| public | [$fiscal_storage_number](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#property_fiscal_storage_number) |  | Номер фискального накопителя в кассовом аппарате. |
| public | [$fiscalAttribute](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#property_fiscalAttribute) |  | Фискальный признак чека. Формируется фискальным накопителем на основе данных, переданных для регистрации чека. |
| public | [$fiscalDocumentNumber](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#property_fiscalDocumentNumber) |  | Номер фискального документа. |
| public | [$fiscalProviderId](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#property_fiscalProviderId) |  | Идентификатор чека в онлайн-кассе. Присутствует, если чек удалось зарегистрировать. |
| public | [$fiscalStorageNumber](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#property_fiscalStorageNumber) |  | Номер фискального накопителя в кассовом аппарате. |
| public | [$id](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#property_id) |  | Идентификатор чека в ЮKassa. |
| public | [$items](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#property_items) |  | Список товаров в заказе |
| public | [$object_id](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#property_object_id) |  | Идентификатор объекта чека. |
| public | [$objectId](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#property_objectId) |  | Идентификатор объекта чека. |
| public | [$on_behalf_of](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#property_on_behalf_of) |  | Идентификатор магазина |
| public | [$onBehalfOf](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#property_onBehalfOf) |  | Идентификатор магазина |
| public | [$registered_at](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#property_registered_at) |  | Дата и время формирования чека в фискальном накопителе. |
| public | [$registeredAt](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#property_registeredAt) |  | Дата и время формирования чека в фискальном накопителе. |
| public | [$settlements](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#property_settlements) |  | Перечень совершенных расчетов. |
| public | [$status](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#property_status) |  | Статус доставки данных для чека в онлайн-кассу ("pending", "succeeded" или "canceled"). |
| public | [$tax_system_code](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#property_tax_system_code) |  | Код системы налогообложения. Число 1-6. |
| public | [$taxSystemCode](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#property_taxSystemCode) |  | Код системы налогообложения. Число 1-6. |
| public | [$type](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#property_type) |  | Тип чека в онлайн-кассе: приход "payment" или возврат "refund". |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#method___construct) |  | AbstractReceiptResponse constructor. |
| public | [__get()](../classes/YooKassa-Common-AbstractObject.md#method___get) |  | Возвращает значение свойства |
| public | [__isset()](../classes/YooKassa-Common-AbstractObject.md#method___isset) |  | Проверяет наличие свойства |
| public | [__set()](../classes/YooKassa-Common-AbstractObject.md#method___set) |  | Устанавливает значение свойства |
| public | [__unset()](../classes/YooKassa-Common-AbstractObject.md#method___unset) |  | Удаляет свойство |
| public | [addItem()](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#method_addItem) |  | Добавляет товар в чек |
| public | [addSettlement()](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#method_addSettlement) |  | Добавляет оплату в массив |
| public | [fromArray()](../classes/YooKassa-Common-AbstractObject.md#method_fromArray) |  | Устанавливает значения свойств текущего объекта из массива |
| public | [getFiscalAttribute()](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#method_getFiscalAttribute) |  | Возвращает фискальный признак чека |
| public | [getFiscalDocumentNumber()](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#method_getFiscalDocumentNumber) |  | Возвращает номер фискального документа |
| public | [getFiscalProviderId()](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#method_getFiscalProviderId) |  | Возвращает идентификатор чека в онлайн-кассе |
| public | [getFiscalStorageNumber()](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#method_getFiscalStorageNumber) |  | Возвращает номер фискального накопителя в кассовом аппарате |
| public | [getId()](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#method_getId) |  | Возвращает идентификатор чека в ЮKassa |
| public | [getItems()](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#method_getItems) |  | Возвращает список товаров в заказ |
| public | [getObjectId()](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#method_getObjectId) |  | Возвращает идентификатор платежа или возврата, для которого был сформирован чек. |
| public | [getOnBehalfOf()](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#method_getOnBehalfOf) |  | Возвращает идентификатор магазин |
| public | [getRegisteredAt()](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#method_getRegisteredAt) |  | Возвращает дату и время формирования чека в фискальном накопителе |
| public | [getSettlements()](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#method_getSettlements) |  | Возвращает Массив оплат, обеспечивающих выдачу товара |
| public | [getStatus()](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#method_getStatus) |  | Возвращает статус доставки данных для чека в онлайн-кассу |
| public | [getTaxSystemCode()](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#method_getTaxSystemCode) |  | Возвращает код системы налогообложения |
| public | [getType()](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#method_getType) |  | Возвращает тип чека в онлайн-кассе |
| public | [jsonSerialize()](../classes/YooKassa-Common-AbstractObject.md#method_jsonSerialize) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации |
| public | [notEmpty()](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#method_notEmpty) |  | Проверяет есть ли в чеке хотя бы одна позиция |
| public | [offsetExists()](../classes/YooKassa-Common-AbstractObject.md#method_offsetExists) |  | Проверяет наличие свойства |
| public | [offsetGet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetGet) |  | Возвращает значение свойства |
| public | [offsetSet()](../classes/YooKassa-Common-AbstractObject.md#method_offsetSet) |  | Устанавливает значение свойства |
| public | [offsetUnset()](../classes/YooKassa-Common-AbstractObject.md#method_offsetUnset) |  | Удаляет свойство |
| public | [setFiscalAttribute()](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#method_setFiscalAttribute) |  | Устанавливает фискальный признак чека |
| public | [setFiscalDocumentNumber()](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#method_setFiscalDocumentNumber) |  | Устанавливает номер фискального документа |
| public | [setFiscalProviderId()](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#method_setFiscalProviderId) |  | Устанавливает идентификатор чека в онлайн-кассе |
| public | [setFiscalStorageNumber()](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#method_setFiscalStorageNumber) |  | Устанавливает номер фискального накопителя в кассовом аппарате |
| public | [setId()](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#method_setId) |  | Устанавливает идентификатор чека |
| public | [setItems()](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#method_setItems) |  | Устанавливает список позиций в чеке |
| public | [setObjectId()](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#method_setObjectId) |  | Устанавливает идентификатор платежа или возврата, для которого был сформирован чек |
| public | [setOnBehalfOf()](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#method_setOnBehalfOf) |  | Возвращает идентификатор магазина, от имени которого нужно отправить чек |
| public | [setRegisteredAt()](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#method_setRegisteredAt) |  | Устанавливает дату и время формирования чека в фискальном накопителе |
| public | [setSettlements()](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#method_setSettlements) |  | Устанавливает массив оплат, обеспечивающих выдачу товара |
| public | [setSpecificProperties()](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#method_setSpecificProperties) |  | Установка свойств, присущих конкретному объекту |
| public | [setStatus()](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#method_setStatus) |  | Устанавливает состояние регистрации фискального чека |
| public | [setTaxSystemCode()](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#method_setTaxSystemCode) |  | Устанавливает код системы налогообложения |
| public | [setType()](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md#method_setType) |  | Устанавливает типа чека |
| public | [toArray()](../classes/YooKassa-Common-AbstractObject.md#method_toArray) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации Является алиасом метода AbstractObject::jsonSerialize() |
| protected | [getUnknownProperties()](../classes/YooKassa-Common-AbstractObject.md#method_getUnknownProperties) |  | Возвращает массив свойств которые не существуют, но были заданы у объекта |
---
### Details
* File: [lib/Request/Receipts/AbstractReceiptResponse.php](../../lib/Request/Receipts/AbstractReceiptResponse.php)
* Package: YooKassa
* Class Hierarchy: 
  * [\YooKassa\Common\AbstractObject](../classes/YooKassa-Common-AbstractObject.md)
  * \YooKassa\Request\Receipts\AbstractReceiptResponse
* Implements:
  * [\YooKassa\Request\Receipts\ReceiptResponseInterface](../classes/YooKassa-Request-Receipts-ReceiptResponseInterface.md)
---
## Constants
<a name="constant_LENGTH_RECEIPT_ID" class="anchor"></a>
###### LENGTH_RECEIPT_ID
Длина идентификатора чека

```php
LENGTH_RECEIPT_ID = 39
```


---
## Properties
<a name="property_fiscal_attribute"></a>
#### public $fiscal_attribute : string
---
***Description***

Фискальный признак чека. Формируется фискальным накопителем на основе данных, переданных для регистрации чека.

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_fiscal_document_number"></a>
#### public $fiscal_document_number : string
---
***Description***

Номер фискального документа.

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_fiscal_provider_id"></a>
#### public $fiscal_provider_id : string
---
***Description***

Идентификатор чека в онлайн-кассе. Присутствует, если чек удалось зарегистрировать.

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_fiscal_storage_number"></a>
#### public $fiscal_storage_number : string
---
***Description***

Номер фискального накопителя в кассовом аппарате.

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_fiscalAttribute"></a>
#### public $fiscalAttribute : string
---
***Description***

Фискальный признак чека. Формируется фискальным накопителем на основе данных, переданных для регистрации чека.

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_fiscalDocumentNumber"></a>
#### public $fiscalDocumentNumber : string
---
***Description***

Номер фискального документа.

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_fiscalProviderId"></a>
#### public $fiscalProviderId : string
---
***Description***

Идентификатор чека в онлайн-кассе. Присутствует, если чек удалось зарегистрировать.

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_fiscalStorageNumber"></a>
#### public $fiscalStorageNumber : string
---
***Description***

Номер фискального накопителя в кассовом аппарате.

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_id"></a>
#### public $id : string
---
***Description***

Идентификатор чека в ЮKassa.

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_items"></a>
#### public $items : \YooKassa\Request\Receipts\ReceiptResponseItemInterface[]
---
***Description***

Список товаров в заказе

**Type:** <a href="../\YooKassa\Request\Receipts\ReceiptResponseItemInterface[]"><abbr title="\YooKassa\Request\Receipts\ReceiptResponseItemInterface[]">ReceiptResponseItemInterface[]</abbr></a>

**Details:**


<a name="property_object_id"></a>
#### public $object_id : string
---
***Description***

Идентификатор объекта чека.

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_objectId"></a>
#### public $objectId : string
---
***Description***

Идентификатор объекта чека.

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_on_behalf_of"></a>
#### public $on_behalf_of : string
---
***Description***

Идентификатор магазина

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_onBehalfOf"></a>
#### public $onBehalfOf : string
---
***Description***

Идентификатор магазина

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_registered_at"></a>
#### public $registered_at : \DateTime
---
***Description***

Дата и время формирования чека в фискальном накопителе.

**Type:** \DateTime

**Details:**


<a name="property_registeredAt"></a>
#### public $registeredAt : \DateTime
---
***Description***

Дата и время формирования чека в фискальном накопителе.

**Type:** \DateTime

**Details:**


<a name="property_settlements"></a>
#### public $settlements : \YooKassa\Model\SettlementInterface[]
---
***Description***

Перечень совершенных расчетов.

**Type:** <a href="../\YooKassa\Model\SettlementInterface[]"><abbr title="\YooKassa\Model\SettlementInterface[]">SettlementInterface[]</abbr></a>

**Details:**


<a name="property_status"></a>
#### public $status : string
---
***Description***

Статус доставки данных для чека в онлайн-кассу ("pending", "succeeded" или "canceled").

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

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


<a name="property_type"></a>
#### public $type : string
---
***Description***

Тип чека в онлайн-кассе: приход "payment" или возврат "refund".

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**



---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(mixed  receiptData) : mixed
```

**Summary**

AbstractReceiptResponse constructor.

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\AbstractReceiptResponse](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">mixed</code> | receiptData  |  |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \Exception |  |

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
public addItem(\YooKassa\Request\Receipts\ReceiptResponseItemInterface  value) : mixed
```

**Summary**

Добавляет товар в чек

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\AbstractReceiptResponse](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Request\Receipts\ReceiptResponseItemInterface</code> | value  | Объект добавляемой в чек позиции |

**Returns:** mixed - 


<a name="method_addSettlement" class="anchor"></a>
#### public addSettlement() : mixed

```php
public addSettlement(\YooKassa\Model\SettlementInterface  value) : mixed
```

**Summary**

Добавляет оплату в массив

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\AbstractReceiptResponse](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\SettlementInterface</code> | value  |  |

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


<a name="method_getFiscalAttribute" class="anchor"></a>
#### public getFiscalAttribute() : string

```php
public getFiscalAttribute() : string
```

**Summary**

Возвращает фискальный признак чека

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\AbstractReceiptResponse](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md)

**Returns:** string - Фискальный признак чека


<a name="method_getFiscalDocumentNumber" class="anchor"></a>
#### public getFiscalDocumentNumber() : string

```php
public getFiscalDocumentNumber() : string
```

**Summary**

Возвращает номер фискального документа

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\AbstractReceiptResponse](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md)

**Returns:** string - Номер фискального документа


<a name="method_getFiscalProviderId" class="anchor"></a>
#### public getFiscalProviderId() : string

```php
public getFiscalProviderId() : string
```

**Summary**

Возвращает идентификатор чека в онлайн-кассе

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\AbstractReceiptResponse](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md)

**Returns:** string - Идентификатор чека в онлайн-кассе


<a name="method_getFiscalStorageNumber" class="anchor"></a>
#### public getFiscalStorageNumber() : string

```php
public getFiscalStorageNumber() : string
```

**Summary**

Возвращает номер фискального накопителя в кассовом аппарате

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\AbstractReceiptResponse](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md)

**Returns:** string - Номер фискального накопителя в кассовом аппарате


<a name="method_getId" class="anchor"></a>
#### public getId() : string

```php
public getId() : string
```

**Summary**

Возвращает идентификатор чека в ЮKassa

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\AbstractReceiptResponse](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md)

**Returns:** string - 

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritdoc |  |  |

<a name="method_getItems" class="anchor"></a>
#### public getItems() : \YooKassa\Request\Receipts\ReceiptResponseItem[]|\YooKassa\Request\Receipts\ReceiptResponseItemInterface[]

```php
public getItems() : \YooKassa\Request\Receipts\ReceiptResponseItem[]|\YooKassa\Request\Receipts\ReceiptResponseItemInterface[]
```

**Summary**

Возвращает список товаров в заказ

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\AbstractReceiptResponse](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md)

**Returns:** \YooKassa\Request\Receipts\ReceiptResponseItem[]|\YooKassa\Request\Receipts\ReceiptResponseItemInterface[] - 

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritdoc |  |  |

<a name="method_getObjectId" class="anchor"></a>
#### public getObjectId() : string

```php
public getObjectId() : string
```

**Summary**

Возвращает идентификатор платежа или возврата, для которого был сформирован чек.

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\AbstractReceiptResponse](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md)

**Returns:** string - 


<a name="method_getOnBehalfOf" class="anchor"></a>
#### public getOnBehalfOf() : string|null

```php
public getOnBehalfOf() : string|null
```

**Summary**

Возвращает идентификатор магазин

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\AbstractReceiptResponse](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md)

**Returns:** string|null - 

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritdoc |  |  |

<a name="method_getRegisteredAt" class="anchor"></a>
#### public getRegisteredAt() : \DateTime

```php
public getRegisteredAt() : \DateTime
```

**Summary**

Возвращает дату и время формирования чека в фискальном накопителе

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\AbstractReceiptResponse](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md)

**Returns:** \DateTime - Дата и время формирования чека в фискальном накопителе


<a name="method_getSettlements" class="anchor"></a>
#### public getSettlements() : \YooKassa\Model\SettlementInterface[]

```php
public getSettlements() : \YooKassa\Model\SettlementInterface[]
```

**Summary**

Возвращает Массив оплат, обеспечивающих выдачу товара

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\AbstractReceiptResponse](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md)

**Returns:** \YooKassa\Model\SettlementInterface[] - 


<a name="method_getStatus" class="anchor"></a>
#### public getStatus() : string

```php
public getStatus() : string
```

**Summary**

Возвращает статус доставки данных для чека в онлайн-кассу

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\AbstractReceiptResponse](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md)

**Returns:** string - 

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritdoc |  |  |

<a name="method_getTaxSystemCode" class="anchor"></a>
#### public getTaxSystemCode() : int

```php
public getTaxSystemCode() : int
```

**Summary**

Возвращает код системы налогообложения

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\AbstractReceiptResponse](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md)

**Returns:** int - 

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritdoc |  |  |

<a name="method_getType" class="anchor"></a>
#### public getType() : string

```php
public getType() : string
```

**Summary**

Возвращает тип чека в онлайн-кассе

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\AbstractReceiptResponse](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md)

**Returns:** string - 

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritdoc |  |  |

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


<a name="method_notEmpty" class="anchor"></a>
#### public notEmpty() : bool

```php
public notEmpty() : bool
```

**Summary**

Проверяет есть ли в чеке хотя бы одна позиция

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\AbstractReceiptResponse](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md)

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


<a name="method_setFiscalAttribute" class="anchor"></a>
#### public setFiscalAttribute() : mixed

```php
public setFiscalAttribute(string  fiscal_attribute) : mixed
```

**Summary**

Устанавливает фискальный признак чека

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\AbstractReceiptResponse](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | fiscal_attribute  | Фискальный признак чека |

**Returns:** mixed - 


<a name="method_setFiscalDocumentNumber" class="anchor"></a>
#### public setFiscalDocumentNumber() : mixed

```php
public setFiscalDocumentNumber(string  value) : mixed
```

**Summary**

Устанавливает номер фискального документа

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\AbstractReceiptResponse](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Номер фискального документа |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если переданный аргумент не строка |

**Returns:** mixed - 


<a name="method_setFiscalProviderId" class="anchor"></a>
#### public setFiscalProviderId() : mixed

```php
public setFiscalProviderId(string  fiscal_provider_id) : mixed
```

**Summary**

Устанавливает идентификатор чека в онлайн-кассе

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\AbstractReceiptResponse](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | fiscal_provider_id  | Идентификатор чека в онлайн-кассе |

**Returns:** mixed - 


<a name="method_setFiscalStorageNumber" class="anchor"></a>
#### public setFiscalStorageNumber() : mixed

```php
public setFiscalStorageNumber(string  fiscal_storage_number) : mixed
```

**Summary**

Устанавливает номер фискального накопителя в кассовом аппарате

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\AbstractReceiptResponse](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | fiscal_storage_number  | Номер фискального накопителя в кассовом аппарате |

**Returns:** mixed - 


<a name="method_setId" class="anchor"></a>
#### public setId() : mixed

```php
public setId(string  value) : mixed
```

**Summary**

Устанавливает идентификатор чека

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\AbstractReceiptResponse](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Идентификатор чека |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если длина переданной строки не равна 40 |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод была передана не строка |

**Returns:** mixed - 


<a name="method_setItems" class="anchor"></a>
#### public setItems() : mixed

```php
public setItems(\YooKassa\Request\Receipts\ReceiptResponseItemInterface[]  value) : mixed
```

**Summary**

Устанавливает список позиций в чеке

**Description**

Если до этого в чеке уже были установлены значения, они удаляются и полностью заменяются переданным списком
позиций. Все передаваемые значения в массиве позиций должны быть объектами класса, реализующего интерфейс
ReceiptItemInterface, в противном случае будет выброшено исключение InvalidPropertyValueTypeException.

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\AbstractReceiptResponse](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Request\Receipts\ReceiptResponseItemInterface[]</code> | value  | Список товаров в заказе |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\EmptyPropertyValueException | Выбрасывается если передали пустой массив значений |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в качестве значения был передан не массив и не итератор, лабо если одно из переданных значений не реализует интерфейс ReceiptItemInterface |

**Returns:** mixed - 


<a name="method_setObjectId" class="anchor"></a>
#### public setObjectId() : mixed

```php
public setObjectId( value) : mixed
```

**Summary**

Устанавливает идентификатор платежа или возврата, для которого был сформирован чек

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\AbstractReceiptResponse](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php"></code> | value  |  |

**Returns:** mixed - 


<a name="method_setOnBehalfOf" class="anchor"></a>
#### public setOnBehalfOf() : mixed

```php
public setOnBehalfOf(string  value) : mixed
```

**Summary**

Возвращает идентификатор магазина, от имени которого нужно отправить чек

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\AbstractReceiptResponse](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Идентификатор магазина, от имени которого нужно отправить чек |

**Returns:** mixed - 


<a name="method_setRegisteredAt" class="anchor"></a>
#### public setRegisteredAt() : mixed

```php
public setRegisteredAt(\DateTime  registered_at) : mixed
```

**Summary**

Устанавливает дату и время формирования чека в фискальном накопителе

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\AbstractReceiptResponse](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime</code> | registered_at  | Дата и время формирования чека в фискальном накопителе |

**Returns:** mixed - 


<a name="method_setSettlements" class="anchor"></a>
#### public setSettlements() : mixed

```php
public setSettlements(\YooKassa\Model\SettlementInterface[]  value) : mixed
```

**Summary**

Устанавливает массив оплат, обеспечивающих выдачу товара

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\AbstractReceiptResponse](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\SettlementInterface[]</code> | value  |  |

**Returns:** mixed - 


<a name="method_setSpecificProperties" class="anchor"></a>
#### public setSpecificProperties() : void

```php
Abstract public setSpecificProperties(array  receiptData) : void
```

**Summary**

Установка свойств, присущих конкретному объекту

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\AbstractReceiptResponse](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array</code> | receiptData  |  |

**Returns:** void - 


<a name="method_setStatus" class="anchor"></a>
#### public setStatus() : \YooKassa\Request\Receipts\AbstractReceiptResponse

```php
public setStatus(string  value) : \YooKassa\Request\Receipts\AbstractReceiptResponse
```

**Summary**

Устанавливает состояние регистрации фискального чека

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\AbstractReceiptResponse](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Состояние регистрации фискального чека |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если переданное состояние регистрации не существует |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если переданный аргумент не строка |

**Returns:** \YooKassa\Request\Receipts\AbstractReceiptResponse - 


<a name="method_setTaxSystemCode" class="anchor"></a>
#### public setTaxSystemCode() : mixed

```php
public setTaxSystemCode(int  value) : mixed
```

**Summary**

Устанавливает код системы налогообложения

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\AbstractReceiptResponse](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md)
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


<a name="method_setType" class="anchor"></a>
#### public setType() : mixed

```php
public setType(string  value) : mixed
```

**Summary**

Устанавливает типа чека

**Details:**
* Inherited From: [\YooKassa\Request\Receipts\AbstractReceiptResponse](../classes/YooKassa-Request-Receipts-AbstractReceiptResponse.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Тип чека |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если переданная строка не является валидным типом |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод была передана не строка |

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