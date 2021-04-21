# [YooKassa API SDK](../home.md)

# Interface: CreatePaymentRequestInterface
### Namespace: [\YooKassa\Request\Payments](../namespaces/yookassa-request-payments.md)
---
**Summary:**

Interface CreatePaymentRequestInterface

---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getAirline()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_getAirline) |  | Возвращает данные длинной записи |
| public | [getAmount()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_getAmount) |  | Возвращает сумму заказа |
| public | [getCapture()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_getCapture) |  | Возвращает флаг автоматического принятия поступившей оплаты |
| public | [getClientIp()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_getClientIp) |  | Возвращает IPv4 или IPv6-адрес покупателя |
| public | [getConfirmation()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_getConfirmation) |  | Возвращает способ подтверждения платежа |
| public | [getDescription()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_getDescription) |  | Возвращает описание транзакции |
| public | [getMetadata()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_getMetadata) |  | Возвращает данные оплаты установленные мерчантом |
| public | [getPaymentMethodData()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_getPaymentMethodData) |  | Возвращает данные для создания метода оплаты |
| public | [getPaymentMethodId()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_getPaymentMethodId) |  | Устанавливает идентификатор закиси платёжных данных покупателя |
| public | [getPaymentToken()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_getPaymentToken) |  | Возвращает одноразовый токен для проведения оплаты |
| public | [getReceipt()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_getReceipt) |  | Возвращает чек, если он есть |
| public | [getRecipient()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_getRecipient) |  | Возвращает объект получателя платежа |
| public | [getSavePaymentMethod()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_getSavePaymentMethod) |  | Возвращает флаг сохранения платёжных данных |
| public | [getTransfers()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_getTransfers) |  | Возвращает данные о распределении денег — сколько и в какой магазин нужно перевести. |
| public | [hasAirline()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_hasAirline) |  | Проверяет были ли установлены данные длинной записи |
| public | [hasCapture()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_hasCapture) |  | Проверяет был ли установлен флаг автоматического приняти поступившей оплаты |
| public | [hasClientIp()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_hasClientIp) |  | Проверяет был ли установлен IPv4 или IPv6-адрес покупателя |
| public | [hasConfirmation()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_hasConfirmation) |  | Проверяет был ли установлен способ подтверждения платежа |
| public | [hasDescription()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_hasDescription) |  | Проверяет наличие описания транзакции в создаваемом платеже |
| public | [hasMetadata()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_hasMetadata) |  | Проверяет были ли установлены метаданные заказа |
| public | [hasPaymentMethodData()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_hasPaymentMethodData) |  | Проверяет установлен ли объект с методом оплаты |
| public | [hasPaymentMethodId()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_hasPaymentMethodId) |  | Проверяет наличие идентификатора записи о платёжных данных покупателя |
| public | [hasPaymentToken()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_hasPaymentToken) |  | Проверяет наличие одноразового токена для проведения оплаты |
| public | [hasReceipt()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_hasReceipt) |  | Проверяет наличие чека в создаваемом платеже |
| public | [hasRecipient()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_hasRecipient) |  | Проверяет наличие получателя платежа в запросе |
| public | [hasSavePaymentMethod()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_hasSavePaymentMethod) |  | Проверяет был ли установлен флаг сохранения платёжных данных |
| public | [hasTransfers()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_hasTransfers) |  | Проверяет наличие данных о распределении денег |
| public | [setAirline()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_setAirline) |  | Устанавливает данные авиабилетов |
| public | [setCapture()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_setCapture) |  | Устанавливает флаг автоматического принятия поступившей оплаты |
| public | [setClientIp()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_setClientIp) |  | Устанавливает IP адрес покупателя |
| public | [setConfirmation()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_setConfirmation) |  | Устанавливает способ подтверждения платежа |
| public | [setDescription()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_setDescription) |  | Устанавливает описание транзакции |
| public | [setMetadata()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_setMetadata) |  | Устанавливает метаданные, привязанные к платежу |
| public | [setPaymentMethodData()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_setPaymentMethodData) |  | Устанавливает объект с информацией для создания метода оплаты |
| public | [setPaymentMethodId()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_setPaymentMethodId) |  | Устанавливает идентификатор записи о сохранённых данных покупателя |
| public | [setPaymentToken()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_setPaymentToken) |  | Устанавливает одноразовый токен для проведения оплаты, сформированный YooKassa JS widget |
| public | [setRecipient()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_setRecipient) |  | Устанавливает объект с информацией о получателе платежа |
| public | [setSavePaymentMethod()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_setSavePaymentMethod) |  | Устанавливает флаг сохранения платёжных данных. Значение true инициирует создание многоразового payment_method. |
| public | [setTransfers()](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md#method_setTransfers) |  | Устанавливает данные о распределении денег — сколько и в какой магазин нужно перевести. |

---
### Details
* File: [lib/Request/Payments/CreatePaymentRequestInterface.php](../../lib/Request/Payments/CreatePaymentRequestInterface.php)
* Package: \YooKassa
---
### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| property-read |  | Получатель платежа, если задан |
| property-read |  | Сумма создаваемого платежа |
| property-read |  | Данные фискального чека 54-ФЗ |
| property-read |  | Одноразовый токен для проведения оплаты, сформированный YooKassa JS widget |
| property-read |  | Одноразовый токен для проведения оплаты, сформированный YooKassa JS widget |
| property-read |  | Идентификатор записи о сохраненных платежных данных покупателя |
| property-read |  | Идентификатор записи о сохраненных платежных данных покупателя |
| property-read |  | Данные используемые для создания метода оплаты |
| property-read |  | Данные используемые для создания метода оплаты |
| property-read |  | Способ подтверждения платежа |
| property-read |  | Сохранить платежные данные для последующего использования |
| property-read |  | Сохранить платежные данные для последующего использования |
| property-read |  | Автоматически принять поступившую оплату |
| property-read |  | IPv4 или IPv6-адрес покупателя. Если не указан, используется IP-адрес TCP-подключения. |
| property-read |  | IPv4 или IPv6-адрес покупателя. Если не указан, используется IP-адрес TCP-подключения. |
| property-read |  | Метаданные привязанные к платежу |
| property-read |  | Метаданные привязанные к платежу |
---
## Methods
<a name="method_getRecipient" class="anchor"></a>
#### public getRecipient() : \YooKassa\Model\RecipientInterface|null

```php
public getRecipient() : \YooKassa\Model\RecipientInterface|null
```

**Summary**

Возвращает объект получателя платежа

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)

**Returns:** \YooKassa\Model\RecipientInterface|null - Объект с информацией о получателе платежа или null если получатель не задан


<a name="method_hasRecipient" class="anchor"></a>
#### public hasRecipient() : bool

```php
public hasRecipient() : bool
```

**Summary**

Проверяет наличие получателя платежа в запросе

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)

**Returns:** bool - True если получатель платежа задан, false если нет


<a name="method_setRecipient" class="anchor"></a>
#### public setRecipient() : mixed

```php
public setRecipient(\YooKassa\Model\RecipientInterface|null  value) : mixed
```

**Summary**

Устанавливает объект с информацией о получателе платежа

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\RecipientInterface OR null</code> | value  | Инстанс объекта информации о получателе платежа или null |

**Returns:** mixed - 


<a name="method_getAmount" class="anchor"></a>
#### public getAmount() : \YooKassa\Model\AmountInterface

```php
public getAmount() : \YooKassa\Model\AmountInterface
```

**Summary**

Возвращает сумму заказа

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)

**Returns:** \YooKassa\Model\AmountInterface - Сумма заказа


<a name="method_getDescription" class="anchor"></a>
#### public getDescription() : string

```php
public getDescription() : string
```

**Summary**

Возвращает описание транзакции

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)

**Returns:** string - Описание транзакции


<a name="method_hasDescription" class="anchor"></a>
#### public hasDescription() : bool

```php
public hasDescription() : bool
```

**Summary**

Проверяет наличие описания транзакции в создаваемом платеже

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)

**Returns:** bool - True если описание транзакции установлено, false если нет


<a name="method_setDescription" class="anchor"></a>
#### public setDescription() : mixed

```php
public setDescription(string  value) : mixed
```

**Summary**

Устанавливает описание транзакции

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Описание транзакции |

**Returns:** mixed - 


<a name="method_getReceipt" class="anchor"></a>
#### public getReceipt() : \YooKassa\Model\ReceiptInterface|null

```php
public getReceipt() : \YooKassa\Model\ReceiptInterface|null
```

**Summary**

Возвращает чек, если он есть

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)

**Returns:** \YooKassa\Model\ReceiptInterface|null - Данные фискального чека 54-ФЗ или null если чека нет


<a name="method_hasReceipt" class="anchor"></a>
#### public hasReceipt() : bool

```php
public hasReceipt() : bool
```

**Summary**

Проверяет наличие чека в создаваемом платеже

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)

**Returns:** bool - True если чек есть, false если нет


<a name="method_getPaymentToken" class="anchor"></a>
#### public getPaymentToken() : string

```php
public getPaymentToken() : string
```

**Summary**

Возвращает одноразовый токен для проведения оплаты

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)

**Returns:** string - Одноразовый токен для проведения оплаты, сформированный YooKassa JS widget


<a name="method_hasPaymentToken" class="anchor"></a>
#### public hasPaymentToken() : bool

```php
public hasPaymentToken() : bool
```

**Summary**

Проверяет наличие одноразового токена для проведения оплаты

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)

**Returns:** bool - True если токен установлен, false если нет


<a name="method_setPaymentToken" class="anchor"></a>
#### public setPaymentToken() : mixed

```php
public setPaymentToken(string  value) : mixed
```

**Summary**

Устанавливает одноразовый токен для проведения оплаты, сформированный YooKassa JS widget

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Одноразовый токен для проведения оплаты |

**Returns:** mixed - 


<a name="method_getPaymentMethodId" class="anchor"></a>
#### public getPaymentMethodId() : string

```php
public getPaymentMethodId() : string
```

**Summary**

Устанавливает идентификатор закиси платёжных данных покупателя

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)

**Returns:** string - Идентификатор записи о сохраненных платежных данных покупателя


<a name="method_hasPaymentMethodId" class="anchor"></a>
#### public hasPaymentMethodId() : bool

```php
public hasPaymentMethodId() : bool
```

**Summary**

Проверяет наличие идентификатора записи о платёжных данных покупателя

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)

**Returns:** bool - True если идентификатор задан, false если нет


<a name="method_setPaymentMethodId" class="anchor"></a>
#### public setPaymentMethodId() : mixed

```php
public setPaymentMethodId(string  value) : mixed
```

**Summary**

Устанавливает идентификатор записи о сохранённых данных покупателя

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Идентификатор записи о сохраненных платежных данных покупателя |

**Returns:** mixed - 


<a name="method_getPaymentMethodData" class="anchor"></a>
#### public getPaymentMethodData() : \YooKassa\Model\PaymentData\AbstractPaymentData

```php
public getPaymentMethodData() : \YooKassa\Model\PaymentData\AbstractPaymentData
```

**Summary**

Возвращает данные для создания метода оплаты

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)

**Returns:** \YooKassa\Model\PaymentData\AbstractPaymentData - Данные используемые для создания метода оплаты


<a name="method_hasPaymentMethodData" class="anchor"></a>
#### public hasPaymentMethodData() : bool

```php
public hasPaymentMethodData() : bool
```

**Summary**

Проверяет установлен ли объект с методом оплаты

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)

**Returns:** bool - True если объект метода оплаты установлен, false если нет


<a name="method_setPaymentMethodData" class="anchor"></a>
#### public setPaymentMethodData() : mixed

```php
public setPaymentMethodData(\YooKassa\Model\PaymentData\AbstractPaymentData|null  value) : mixed
```

**Summary**

Устанавливает объект с информацией для создания метода оплаты

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\PaymentData\AbstractPaymentData OR null</code> | value  | Объект с создания метода оплаты или null |

**Returns:** mixed - 


<a name="method_getConfirmation" class="anchor"></a>
#### public getConfirmation() : \YooKassa\Model\ConfirmationAttributes\AbstractConfirmationAttributes

```php
public getConfirmation() : \YooKassa\Model\ConfirmationAttributes\AbstractConfirmationAttributes
```

**Summary**

Возвращает способ подтверждения платежа

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)

**Returns:** \YooKassa\Model\ConfirmationAttributes\AbstractConfirmationAttributes - Способ подтверждения платежа


<a name="method_hasConfirmation" class="anchor"></a>
#### public hasConfirmation() : bool

```php
public hasConfirmation() : bool
```

**Summary**

Проверяет был ли установлен способ подтверждения платежа

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)

**Returns:** bool - True если способ подтверждения платежа был установлен, false если нет


<a name="method_setConfirmation" class="anchor"></a>
#### public setConfirmation() : mixed

```php
public setConfirmation(\YooKassa\Model\ConfirmationAttributes\AbstractConfirmationAttributes|null  value) : mixed
```

**Summary**

Устанавливает способ подтверждения платежа

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\ConfirmationAttributes\AbstractConfirmationAttributes OR null</code> | value  | Способ подтверждения платежа |

**Returns:** mixed - 


<a name="method_getSavePaymentMethod" class="anchor"></a>
#### public getSavePaymentMethod() : bool

```php
public getSavePaymentMethod() : bool
```

**Summary**

Возвращает флаг сохранения платёжных данных

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)

**Returns:** bool - Флаг сохранения платёжных данных


<a name="method_hasSavePaymentMethod" class="anchor"></a>
#### public hasSavePaymentMethod() : bool

```php
public hasSavePaymentMethod() : bool
```

**Summary**

Проверяет был ли установлен флаг сохранения платёжных данных

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)

**Returns:** bool - True если флыг был установлен, false если нет


<a name="method_setSavePaymentMethod" class="anchor"></a>
#### public setSavePaymentMethod() : mixed

```php
public setSavePaymentMethod(bool  value) : mixed
```

**Summary**

Устанавливает флаг сохранения платёжных данных. Значение true инициирует создание многоразового payment_method.

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">bool</code> | value  | Сохранить платежные данные для последующего использования |

**Returns:** mixed - 


<a name="method_getCapture" class="anchor"></a>
#### public getCapture() : bool

```php
public getCapture() : bool
```

**Summary**

Возвращает флаг автоматического принятия поступившей оплаты

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)

**Returns:** bool - True если требуется автоматически принять поступившую оплату, false если нет


<a name="method_hasCapture" class="anchor"></a>
#### public hasCapture() : bool

```php
public hasCapture() : bool
```

**Summary**

Проверяет был ли установлен флаг автоматического приняти поступившей оплаты

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)

**Returns:** bool - True если флаг автоматического принятия оплаты был установлен, false если нет


<a name="method_setCapture" class="anchor"></a>
#### public setCapture() : mixed

```php
public setCapture(bool  value) : mixed
```

**Summary**

Устанавливает флаг автоматического принятия поступившей оплаты

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">bool</code> | value  | Автоматически принять поступившую оплату |

**Returns:** mixed - 


<a name="method_getClientIp" class="anchor"></a>
#### public getClientIp() : string

```php
public getClientIp() : string
```

**Summary**

Возвращает IPv4 или IPv6-адрес покупателя

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)

**Returns:** string - IPv4 или IPv6-адрес покупателя


<a name="method_hasClientIp" class="anchor"></a>
#### public hasClientIp() : bool

```php
public hasClientIp() : bool
```

**Summary**

Проверяет был ли установлен IPv4 или IPv6-адрес покупателя

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)

**Returns:** bool - True если IP адрес покупателя был установлен, false если нет


<a name="method_setClientIp" class="anchor"></a>
#### public setClientIp() : mixed

```php
public setClientIp(string  value) : mixed
```

**Summary**

Устанавливает IP адрес покупателя

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | IPv4 или IPv6-адрес покупателя |

**Returns:** mixed - 


<a name="method_getMetadata" class="anchor"></a>
#### public getMetadata() : \YooKassa\Model\Metadata

```php
public getMetadata() : \YooKassa\Model\Metadata
```

**Summary**

Возвращает данные оплаты установленные мерчантом

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)

**Returns:** \YooKassa\Model\Metadata - Метаданные привязанные к платежу


<a name="method_hasMetadata" class="anchor"></a>
#### public hasMetadata() : bool

```php
public hasMetadata() : bool
```

**Summary**

Проверяет были ли установлены метаданные заказа

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)

**Returns:** bool - True если метаданные были установлены, false если нет


<a name="method_setMetadata" class="anchor"></a>
#### public setMetadata() : mixed

```php
public setMetadata(\YooKassa\Model\Metadata|array|null  value) : mixed
```

**Summary**

Устанавливает метаданные, привязанные к платежу

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\Metadata OR array OR null</code> | value  | Метаданные платежа, устанавливаемые мерчантом |

**Returns:** mixed - 


<a name="method_getAirline" class="anchor"></a>
#### public getAirline() : \YooKassa\Model\Airline

```php
public getAirline() : \YooKassa\Model\Airline
```

**Summary**

Возвращает данные длинной записи

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)

**Returns:** \YooKassa\Model\Airline - 


<a name="method_hasAirline" class="anchor"></a>
#### public hasAirline() : bool

```php
public hasAirline() : bool
```

**Summary**

Проверяет были ли установлены данные длинной записи

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)

**Returns:** bool - 


<a name="method_setAirline" class="anchor"></a>
#### public setAirline() : mixed

```php
public setAirline(\YooKassa\Model\AirlineInterface  value) : mixed
```

**Summary**

Устанавливает данные авиабилетов

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\AirlineInterface</code> | value  | Данные авиабилетов |

**Returns:** mixed - 


<a name="method_hasTransfers" class="anchor"></a>
#### public hasTransfers() : bool

```php
public hasTransfers() : bool
```

**Summary**

Проверяет наличие данных о распределении денег

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)

**Returns:** bool - 


<a name="method_getTransfers" class="anchor"></a>
#### public getTransfers() : \YooKassa\Model\TransferInterface[]

```php
public getTransfers() : \YooKassa\Model\TransferInterface[]
```

**Summary**

Возвращает данные о распределении денег — сколько и в какой магазин нужно перевести.

**Description**

Присутствует, если вы используете решение ЮKassa для платформ.
(https://yookassa.ru/developers/special-solutions/checkout-for-platforms/basics)

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)

**Returns:** \YooKassa\Model\TransferInterface[] - Данные о распределении денег


<a name="method_setTransfers" class="anchor"></a>
#### public setTransfers() : mixed

```php
public setTransfers(mixed  value) : mixed
```

**Summary**

Устанавливает данные о распределении денег — сколько и в какой магазин нужно перевести.

**Description**

Присутствует, если вы используете решение ЮKassa для платформ.
(https://yookassa.ru/developers/special-solutions/checkout-for-platforms/basics)

**Details:**
* Inherited From: [\YooKassa\Request\Payments\CreatePaymentRequestInterface](../classes/YooKassa-Request-Payments-CreatePaymentRequestInterface.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">mixed</code> | value  |  |

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