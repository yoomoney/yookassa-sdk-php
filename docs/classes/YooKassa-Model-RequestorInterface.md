# [YooKassa API SDK](../home.md)

# Interface: RequestorInterface
### Namespace: [\YooKassa\Model](../namespaces/yookassa-model.md)
---
**Summary:**

Interface RequestorInterface

**Description:**

Инициатор платежа или возврата

Инициатором может быть магазин, подключенный к ЮKassa, `merchant` или приложение, которому владелец магазина
[разрешил](https://yookassa.ru/developers/partners-api/basics) совершать операции от своего имени `third_party_client`.

---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getAccountId()](../classes/YooKassa-Model-RequestorInterface.md#method_getAccountId) |  | Возвращает идентификатор магазина |
| public | [getClientId()](../classes/YooKassa-Model-RequestorInterface.md#method_getClientId) |  | Возвращает идентификатор приложения |
| public | [getClientName()](../classes/YooKassa-Model-RequestorInterface.md#method_getClientName) |  | Возвращает название приложения |
| public | [getType()](../classes/YooKassa-Model-RequestorInterface.md#method_getType) |  | Возвращает тип инициатора |
| public | [setAccountId()](../classes/YooKassa-Model-RequestorInterface.md#method_setAccountId) |  | Устанавливает идентификатор магазина |
| public | [setClientId()](../classes/YooKassa-Model-RequestorInterface.md#method_setClientId) |  | Устанавливает идентификатор приложения |
| public | [setClientName()](../classes/YooKassa-Model-RequestorInterface.md#method_setClientName) |  | Устанавливает название приложения |
| public | [setType()](../classes/YooKassa-Model-RequestorInterface.md#method_setType) |  | Устанавливает тип инициатора |

---
### Details
* File: [lib/Model/RequestorInterface.php](../../lib/Model/RequestorInterface.php)
* Package: \YooKassa
---
## Methods
<a name="method_getType" class="anchor"></a>
#### public getType() : string

```php
public getType() : string
```

**Summary**

Возвращает тип инициатора

**Details:**
* Inherited From: [\YooKassa\Model\RequestorInterface](../classes/YooKassa-Model-RequestorInterface.md)

**Returns:** string - 


<a name="method_setType" class="anchor"></a>
#### public setType() : mixed

```php
public setType(string  value) : mixed
```

**Summary**

Устанавливает тип инициатора

**Details:**
* Inherited From: [\YooKassa\Model\RequestorInterface](../classes/YooKassa-Model-RequestorInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Тип инициатора |

**Returns:** mixed - 


<a name="method_getAccountId" class="anchor"></a>
#### public getAccountId() : string|null

```php
public getAccountId() : string|null
```

**Summary**

Возвращает идентификатор магазина

**Details:**
* Inherited From: [\YooKassa\Model\RequestorInterface](../classes/YooKassa-Model-RequestorInterface.md)

**Returns:** string|null - 


<a name="method_setAccountId" class="anchor"></a>
#### public setAccountId() : mixed

```php
public setAccountId(string  value) : mixed
```

**Summary**

Устанавливает идентификатор магазина

**Details:**
* Inherited From: [\YooKassa\Model\RequestorInterface](../classes/YooKassa-Model-RequestorInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Идентификатор магазина |

**Returns:** mixed - 


<a name="method_getClientId" class="anchor"></a>
#### public getClientId() : string|null

```php
public getClientId() : string|null
```

**Summary**

Возвращает идентификатор приложения

**Details:**
* Inherited From: [\YooKassa\Model\RequestorInterface](../classes/YooKassa-Model-RequestorInterface.md)

**Returns:** string|null - 


<a name="method_setClientId" class="anchor"></a>
#### public setClientId() : mixed

```php
public setClientId(string  value) : mixed
```

**Summary**

Устанавливает идентификатор приложения

**Details:**
* Inherited From: [\YooKassa\Model\RequestorInterface](../classes/YooKassa-Model-RequestorInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Идентификатор приложения |

**Returns:** mixed - 


<a name="method_getClientName" class="anchor"></a>
#### public getClientName() : string|null

```php
public getClientName() : string|null
```

**Summary**

Возвращает название приложения

**Details:**
* Inherited From: [\YooKassa\Model\RequestorInterface](../classes/YooKassa-Model-RequestorInterface.md)

**Returns:** string|null - 


<a name="method_setClientName" class="anchor"></a>
#### public setClientName() : mixed

```php
public setClientName(string  value) : mixed
```

**Summary**

Устанавливает название приложения

**Details:**
* Inherited From: [\YooKassa\Model\RequestorInterface](../classes/YooKassa-Model-RequestorInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Название приложения |

**Returns:** mixed - 




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