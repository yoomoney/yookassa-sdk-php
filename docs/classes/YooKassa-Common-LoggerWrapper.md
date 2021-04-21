# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Common\LoggerWrapper
### Namespace: [\YooKassa\Common](../namespaces/yookassa-common.md)
---
---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Common-LoggerWrapper.md#method___construct) |  | LoggerWrapper constructor. |
| public | [alert()](../classes/YooKassa-Common-LoggerWrapper.md#method_alert) |  | Action must be taken immediately. |
| public | [critical()](../classes/YooKassa-Common-LoggerWrapper.md#method_critical) |  | Critical conditions. |
| public | [debug()](../classes/YooKassa-Common-LoggerWrapper.md#method_debug) |  | Detailed debug information. |
| public | [emergency()](../classes/YooKassa-Common-LoggerWrapper.md#method_emergency) |  | System is unusable. |
| public | [error()](../classes/YooKassa-Common-LoggerWrapper.md#method_error) |  | Runtime errors that do not require immediate action but should typically be logged and monitored. |
| public | [info()](../classes/YooKassa-Common-LoggerWrapper.md#method_info) |  | Interesting events. |
| public | [log()](../classes/YooKassa-Common-LoggerWrapper.md#method_log) |  | Logs with an arbitrary level. |
| public | [notice()](../classes/YooKassa-Common-LoggerWrapper.md#method_notice) |  | Normal but significant events. |
| public | [warning()](../classes/YooKassa-Common-LoggerWrapper.md#method_warning) |  | Exceptional occurrences that are not errors. |
---
### Details
* File: [lib/Common/LoggerWrapper.php](../../lib/Common/LoggerWrapper.php)
* Package: Default
* Class Hierarchy:
  * \YooKassa\Common\LoggerWrapper
* Implements:
  * [](\Psr\Log\LoggerInterface)

---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(object|callable  wrapped) : mixed
```

**Summary**

LoggerWrapper constructor.

**Details:**
* Inherited From: [\YooKassa\Common\LoggerWrapper](../classes/YooKassa-Common-LoggerWrapper.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">object OR callable</code> | wrapped  |  |

**Returns:** mixed - 


<a name="method_alert" class="anchor"></a>
#### public alert() : void

```php
public alert(string  message, array  context = array()) : void
```

**Summary**

Action must be taken immediately.

**Description**

Example: Entire website down, database unavailable, etc. This should
trigger the SMS alerts and wake you up.

**Details:**
* Inherited From: [\YooKassa\Common\LoggerWrapper](../classes/YooKassa-Common-LoggerWrapper.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | message  |  |
| <code lang="php">array</code> | context  |  |

**Returns:** void - 


<a name="method_critical" class="anchor"></a>
#### public critical() : void

```php
public critical(string  message, array  context = array()) : void
```

**Summary**

Critical conditions.

**Description**

Example: Application component unavailable, unexpected exception.

**Details:**
* Inherited From: [\YooKassa\Common\LoggerWrapper](../classes/YooKassa-Common-LoggerWrapper.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | message  |  |
| <code lang="php">array</code> | context  |  |

**Returns:** void - 


<a name="method_debug" class="anchor"></a>
#### public debug() : void

```php
public debug(string  message, array  context = array()) : void
```

**Summary**

Detailed debug information.

**Details:**
* Inherited From: [\YooKassa\Common\LoggerWrapper](../classes/YooKassa-Common-LoggerWrapper.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | message  |  |
| <code lang="php">array</code> | context  |  |

**Returns:** void - 


<a name="method_emergency" class="anchor"></a>
#### public emergency() : void

```php
public emergency(string  message, array  context = array()) : void
```

**Summary**

System is unusable.

**Details:**
* Inherited From: [\YooKassa\Common\LoggerWrapper](../classes/YooKassa-Common-LoggerWrapper.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | message  |  |
| <code lang="php">array</code> | context  |  |

**Returns:** void - 


<a name="method_error" class="anchor"></a>
#### public error() : void

```php
public error(string  message, array  context = array()) : void
```

**Summary**

Runtime errors that do not require immediate action but should typically
be logged and monitored.

**Details:**
* Inherited From: [\YooKassa\Common\LoggerWrapper](../classes/YooKassa-Common-LoggerWrapper.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | message  |  |
| <code lang="php">array</code> | context  |  |

**Returns:** void - 


<a name="method_info" class="anchor"></a>
#### public info() : void

```php
public info(string  message, array  context = array()) : void
```

**Summary**

Interesting events.

**Description**

Example: User logs in, SQL logs.

**Details:**
* Inherited From: [\YooKassa\Common\LoggerWrapper](../classes/YooKassa-Common-LoggerWrapper.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | message  |  |
| <code lang="php">array</code> | context  |  |

**Returns:** void - 


<a name="method_log" class="anchor"></a>
#### public log() : void

```php
public log(mixed  level, string  message, array  context = array()) : void
```

**Summary**

Logs with an arbitrary level.

**Details:**
* Inherited From: [\YooKassa\Common\LoggerWrapper](../classes/YooKassa-Common-LoggerWrapper.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">mixed</code> | level  |  |
| <code lang="php">string</code> | message  |  |
| <code lang="php">array</code> | context  |  |

**Returns:** void - 


<a name="method_notice" class="anchor"></a>
#### public notice() : void

```php
public notice(string  message, array  context = array()) : void
```

**Summary**

Normal but significant events.

**Details:**
* Inherited From: [\YooKassa\Common\LoggerWrapper](../classes/YooKassa-Common-LoggerWrapper.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | message  |  |
| <code lang="php">array</code> | context  |  |

**Returns:** void - 


<a name="method_warning" class="anchor"></a>
#### public warning() : void

```php
public warning(string  message, array  context = array()) : void
```

**Summary**

Exceptional occurrences that are not errors.

**Description**

Example: Use of deprecated APIs, poor use of an API, undesirable things
that are not necessarily wrong.

**Details:**
* Inherited From: [\YooKassa\Common\LoggerWrapper](../classes/YooKassa-Common-LoggerWrapper.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | message  |  |
| <code lang="php">array</code> | context  |  |

**Returns:** void - 



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