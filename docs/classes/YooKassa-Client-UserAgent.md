# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Client\UserAgent
### Namespace: [\YooKassa\Client](../namespaces/yookassa-client.md)
---
**Summary:**

Класс для создания заголовка User-Agent в запросах к API

---
### Constants
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [HEADER](../classes/YooKassa-Client-UserAgent.md#constant_HEADER) |  | Имя заголовка для User-Agent |
| public | [VERSION_DELIMITER](../classes/YooKassa-Client-UserAgent.md#constant_VERSION_DELIMITER) |  | Разделитель части заголовка и её версии |
| public | [PART_DELIMITER](../classes/YooKassa-Client-UserAgent.md#constant_PART_DELIMITER) |  | Разделитель между частями заголовка |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Client-UserAgent.md#method___construct) |  | Конструктор UserAgent |
| public | [createVersion()](../classes/YooKassa-Client-UserAgent.md#method_createVersion) |  | Создание строки версии компонента |
| public | [getCms()](../classes/YooKassa-Client-UserAgent.md#method_getCms) |  | Возвращает версию CMS |
| public | [getFramework()](../classes/YooKassa-Client-UserAgent.md#method_getFramework) |  | Возвращает версию фреймворка |
| public | [getHeaderString()](../classes/YooKassa-Client-UserAgent.md#method_getHeaderString) |  | Формирует конечную строку из составных частей |
| public | [getModule()](../classes/YooKassa-Client-UserAgent.md#method_getModule) |  | Возвращает версию модуля |
| public | [getOs()](../classes/YooKassa-Client-UserAgent.md#method_getOs) |  | Возвращает версию операционной системы |
| public | [getPhp()](../classes/YooKassa-Client-UserAgent.md#method_getPhp) |  | Возвращает версию PHP |
| public | [getSdk()](../classes/YooKassa-Client-UserAgent.md#method_getSdk) |  | Возвращает версию SDK |
| public | [setCms()](../classes/YooKassa-Client-UserAgent.md#method_setCms) |  | Устанавливает версию CMS |
| public | [setFramework()](../classes/YooKassa-Client-UserAgent.md#method_setFramework) |  | Устанавливает версию фреймворка |
| public | [setModule()](../classes/YooKassa-Client-UserAgent.md#method_setModule) |  | Устанавливает версию модуля |
---
### Details
* File: [lib/Client/UserAgent.php](../../lib/Client/UserAgent.php)
* Package: YooKassa
* Class Hierarchy:
  * \YooKassa\Client\UserAgent
---
## Constants
<a name="constant_HEADER" class="anchor"></a>
###### HEADER
Имя заголовка для User-Agent

```php
HEADER = 'YM-User-Agent'
```


<a name="constant_VERSION_DELIMITER" class="anchor"></a>
###### VERSION_DELIMITER
Разделитель части заголовка и её версии

```php
VERSION_DELIMITER = '/'
```


<a name="constant_PART_DELIMITER" class="anchor"></a>
###### PART_DELIMITER
Разделитель между частями заголовка

```php
PART_DELIMITER = ' '
```



---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct() : mixed
```

**Summary**

Конструктор UserAgent

**Details:**
* Inherited From: [\YooKassa\Client\UserAgent](../classes/YooKassa-Client-UserAgent.md)

**Returns:** mixed - 


<a name="method_createVersion" class="anchor"></a>
#### public createVersion() : string

```php
public createVersion(string  name, string  version) : string
```

**Summary**

Создание строки версии компонента

**Details:**
* Inherited From: [\YooKassa\Client\UserAgent](../classes/YooKassa-Client-UserAgent.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | name  |  |
| <code lang="php">string</code> | version  |  |

**Returns:** string - 


<a name="method_getCms" class="anchor"></a>
#### public getCms() : null

```php
public getCms() : null
```

**Summary**

Возвращает версию CMS

**Details:**
* Inherited From: [\YooKassa\Client\UserAgent](../classes/YooKassa-Client-UserAgent.md)

**Returns:** null - 


<a name="method_getFramework" class="anchor"></a>
#### public getFramework() : string|null

```php
public getFramework() : string|null
```

**Summary**

Возвращает версию фреймворка

**Details:**
* Inherited From: [\YooKassa\Client\UserAgent](../classes/YooKassa-Client-UserAgent.md)

**Returns:** string|null - 


<a name="method_getHeaderString" class="anchor"></a>
#### public getHeaderString() : string

```php
public getHeaderString() : string
```

**Summary**

Формирует конечную строку из составных частей

**Details:**
* Inherited From: [\YooKassa\Client\UserAgent](../classes/YooKassa-Client-UserAgent.md)

**Returns:** string - 


<a name="method_getModule" class="anchor"></a>
#### public getModule() : string

```php
public getModule() : string
```

**Summary**

Возвращает версию модуля

**Details:**
* Inherited From: [\YooKassa\Client\UserAgent](../classes/YooKassa-Client-UserAgent.md)

**Returns:** string - 


<a name="method_getOs" class="anchor"></a>
#### public getOs() : string

```php
public getOs() : string
```

**Summary**

Возвращает версию операционной системы

**Details:**
* Inherited From: [\YooKassa\Client\UserAgent](../classes/YooKassa-Client-UserAgent.md)

**Returns:** string - 


<a name="method_getPhp" class="anchor"></a>
#### public getPhp() : string

```php
public getPhp() : string
```

**Summary**

Возвращает версию PHP

**Details:**
* Inherited From: [\YooKassa\Client\UserAgent](../classes/YooKassa-Client-UserAgent.md)

**Returns:** string - 


<a name="method_getSdk" class="anchor"></a>
#### public getSdk() : string

```php
public getSdk() : string
```

**Summary**

Возвращает версию SDK

**Details:**
* Inherited From: [\YooKassa\Client\UserAgent](../classes/YooKassa-Client-UserAgent.md)

**Returns:** string - 


<a name="method_setCms" class="anchor"></a>
#### public setCms() : mixed

```php
public setCms(string  name, string  version) : mixed
```

**Summary**

Устанавливает версию CMS

**Details:**
* Inherited From: [\YooKassa\Client\UserAgent](../classes/YooKassa-Client-UserAgent.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | name  |  |
| <code lang="php">string</code> | version  |  |

**Returns:** mixed - 


<a name="method_setFramework" class="anchor"></a>
#### public setFramework() : mixed

```php
public setFramework(string  name, string  version) : mixed
```

**Summary**

Устанавливает версию фреймворка

**Details:**
* Inherited From: [\YooKassa\Client\UserAgent](../classes/YooKassa-Client-UserAgent.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | name  |  |
| <code lang="php">string</code> | version  |  |

**Returns:** mixed - 


<a name="method_setModule" class="anchor"></a>
#### public setModule() : mixed

```php
public setModule(string  name, string  version) : mixed
```

**Summary**

Устанавливает версию модуля

**Details:**
* Inherited From: [\YooKassa\Client\UserAgent](../classes/YooKassa-Client-UserAgent.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | name  |  |
| <code lang="php">string</code> | version  |  |

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