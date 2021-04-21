# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Helpers\ProductCode
### Namespace: [\YooKassa\Helpers](../namespaces/yookassa-helpers.md)
---
**Summary:**

Класс для формирования тега 1162 на основе кода в формате Data Matrix

---
### Examples
Вариант через метод

```php
$inputDataMatrix = '010463003407001221SxMGorvNuq6Wk91fgr92sdfsdfghfgjh';
$productCode = new \YooKassa\Helpers\ProductCode($inputDataMatrix);
$receiptItem = new \YooKassa\Model\ReceiptItem();
$receiptItem->setProductCode($productCode);

var_dump($receiptItem);

```
Вариант через массив

```php
$inputDataMatrix = '010463003407001221SxMGorvNuq6Wk91fgr92sdfsdfghfgjh';
$receiptItem = new \YooKassa\Model\ReceiptItem(array(
    'product_code' => (string)(new \YooKassa\Helpers\ProductCode($inputDataMatrix)),
));

var_dump($receiptItem);

```
---
### Constants
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [PREFIX_DATA_MATRIX](../classes/YooKassa-Helpers-ProductCode.md#constant_PREFIX_DATA_MATRIX) |  | Код типа маркировки DataMatrix |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Helpers-ProductCode.md#method___construct) |  | ProductCode constructor. |
| public | [__toString()](../classes/YooKassa-Helpers-ProductCode.md#method___toString) |  | Приводит объект к строке |
| public | [calcResult()](../classes/YooKassa-Helpers-ProductCode.md#method_calcResult) |  | Формирует тег 1162. |
| public | [getGtin()](../classes/YooKassa-Helpers-ProductCode.md#method_getGtin) |  | Возвращает Глобальный номер товарной продукции |
| public | [getPrefix()](../classes/YooKassa-Helpers-ProductCode.md#method_getPrefix) |  | Возвращает Код типа маркировки |
| public | [getResult()](../classes/YooKassa-Helpers-ProductCode.md#method_getResult) |  | Возвращает Сформированный тег 1162. |
| public | [getSerial()](../classes/YooKassa-Helpers-ProductCode.md#method_getSerial) |  | Возвращает Серийный номер товара |
| public | [isUsePrefix()](../classes/YooKassa-Helpers-ProductCode.md#method_isUsePrefix) |  | Возвращает флаг использования кода типа маркировки |
| public | [setGtin()](../classes/YooKassa-Helpers-ProductCode.md#method_setGtin) |  | Устанавливает Глобальный номер товарной продукции |
| public | [setPrefix()](../classes/YooKassa-Helpers-ProductCode.md#method_setPrefix) |  | Устанавливает Код типа маркировки |
| public | [setSerial()](../classes/YooKassa-Helpers-ProductCode.md#method_setSerial) |  | Устанавливает Серийный номер товара |
| public | [setUsePrefix()](../classes/YooKassa-Helpers-ProductCode.md#method_setUsePrefix) |  | Устанавливает флаг использования кода типа маркировки |
| public | [validate()](../classes/YooKassa-Helpers-ProductCode.md#method_validate) |  | Проверяет заполненность необходимых свойств |
---
### Details
* File: [lib/Helpers/ProductCode.php](../../lib/Helpers/ProductCode.php)
* Package: YooKassa
* Class Hierarchy:
  * \YooKassa\Helpers\ProductCode
* See Also:
  * [](https://github.com/yoomoney/yookassa-sdk-php/blob/master/lib/Helpers/ProductCode.php)
---
## Constants
<a name="constant_PREFIX_DATA_MATRIX" class="anchor"></a>
###### PREFIX_DATA_MATRIX
Код типа маркировки DataMatrix

```php
PREFIX_DATA_MATRIX = '444D'
```



---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(string|null  codeDataMatrix = null, bool|string  usePrefix = false) : mixed
```

**Summary**

ProductCode constructor.

**Details:**
* Inherited From: [\YooKassa\Helpers\ProductCode](../classes/YooKassa-Helpers-ProductCode.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string OR null</code> | codeDataMatrix  | Строка, расшифрованная из QR-кода |
| <code lang="php">bool OR string</code> | usePrefix  | Нужен ли код типа маркировки в результате |

**Returns:** mixed - 


<a name="method___toString" class="anchor"></a>
#### public __toString() : string

```php
public __toString() : string
```

**Summary**

Приводит объект к строке

**Details:**
* Inherited From: [\YooKassa\Helpers\ProductCode](../classes/YooKassa-Helpers-ProductCode.md)

**Returns:** string - 


<a name="method_calcResult" class="anchor"></a>
#### public calcResult() : string|null

```php
public calcResult() : string|null
```

**Summary**

Формирует тег 1162.

**Details:**
* Inherited From: [\YooKassa\Helpers\ProductCode](../classes/YooKassa-Helpers-ProductCode.md)

**Returns:** string|null - Сформированный тег 1162.


<a name="method_getGtin" class="anchor"></a>
#### public getGtin() : string

```php
public getGtin() : string
```

**Summary**

Возвращает Глобальный номер товарной продукции

**Details:**
* Inherited From: [\YooKassa\Helpers\ProductCode](../classes/YooKassa-Helpers-ProductCode.md)

**Returns:** string - Глобальный номер товарной продукции


<a name="method_getPrefix" class="anchor"></a>
#### public getPrefix() : string

```php
public getPrefix() : string
```

**Summary**

Возвращает Код типа маркировки

**Details:**
* Inherited From: [\YooKassa\Helpers\ProductCode](../classes/YooKassa-Helpers-ProductCode.md)

**Returns:** string - Код типа маркировки


<a name="method_getResult" class="anchor"></a>
#### public getResult() : string

```php
public getResult() : string
```

**Summary**

Возвращает Сформированный тег 1162.

**Details:**
* Inherited From: [\YooKassa\Helpers\ProductCode](../classes/YooKassa-Helpers-ProductCode.md)

**Returns:** string - Сформированный тег 1162.


<a name="method_getSerial" class="anchor"></a>
#### public getSerial() : string

```php
public getSerial() : string
```

**Summary**

Возвращает Серийный номер товара

**Details:**
* Inherited From: [\YooKassa\Helpers\ProductCode](../classes/YooKassa-Helpers-ProductCode.md)

**Returns:** string - Серийный номер товара


<a name="method_isUsePrefix" class="anchor"></a>
#### public isUsePrefix() : bool

```php
public isUsePrefix() : bool
```

**Summary**

Возвращает флаг использования кода типа маркировки

**Details:**
* Inherited From: [\YooKassa\Helpers\ProductCode](../classes/YooKassa-Helpers-ProductCode.md)

**Returns:** bool - 


<a name="method_setGtin" class="anchor"></a>
#### public setGtin() : \YooKassa\Helpers\ProductCode

```php
public setGtin(string  gtin) : \YooKassa\Helpers\ProductCode
```

**Summary**

Устанавливает Глобальный номер товарной продукции

**Details:**
* Inherited From: [\YooKassa\Helpers\ProductCode](../classes/YooKassa-Helpers-ProductCode.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | gtin  | Глобальный номер товарной продукции |

**Returns:** \YooKassa\Helpers\ProductCode - 


<a name="method_setPrefix" class="anchor"></a>
#### public setPrefix() : \YooKassa\Helpers\ProductCode

```php
public setPrefix(string|int  prefix) : \YooKassa\Helpers\ProductCode
```

**Summary**

Устанавливает Код типа маркировки

**Details:**
* Inherited From: [\YooKassa\Helpers\ProductCode](../classes/YooKassa-Helpers-ProductCode.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string OR int</code> | prefix  | Код типа маркировки |

**Returns:** \YooKassa\Helpers\ProductCode - 


<a name="method_setSerial" class="anchor"></a>
#### public setSerial() : \YooKassa\Helpers\ProductCode

```php
public setSerial(string  serial) : \YooKassa\Helpers\ProductCode
```

**Summary**

Устанавливает Серийный номер товара

**Details:**
* Inherited From: [\YooKassa\Helpers\ProductCode](../classes/YooKassa-Helpers-ProductCode.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | serial  | Серийный номер товара |

**Returns:** \YooKassa\Helpers\ProductCode - 


<a name="method_setUsePrefix" class="anchor"></a>
#### public setUsePrefix() : \YooKassa\Helpers\ProductCode

```php
public setUsePrefix(bool  usePrefix) : \YooKassa\Helpers\ProductCode
```

**Summary**

Устанавливает флаг использования кода типа маркировки

**Details:**
* Inherited From: [\YooKassa\Helpers\ProductCode](../classes/YooKassa-Helpers-ProductCode.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">bool</code> | usePrefix  | Флаг использования кода типа маркировки |

**Returns:** \YooKassa\Helpers\ProductCode - 


<a name="method_validate" class="anchor"></a>
#### public validate() : bool

```php
public validate() : bool
```

**Summary**

Проверяет заполненность необходимых свойств

**Details:**
* Inherited From: [\YooKassa\Helpers\ProductCode](../classes/YooKassa-Helpers-ProductCode.md)

**Returns:** bool - 



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