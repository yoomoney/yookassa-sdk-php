<?php

/**
 * The MIT License
 *
 * Copyright (c) 2020 "YooMoney", NBСO LLC
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace YooKassa\Common;

use YooKassa\Common\Exceptions\EmptyPropertyValueException;
use YooKassa\Common\Exceptions\InvalidPropertyValueException;
use YooKassa\Common\Exceptions\InvalidPropertyValueTypeException;
use YooKassa\Helpers\TypeCast;
use YooKassa\Model\AmountInterface;
use YooKassa\Model\MonetaryAmount;

/**
 * Класс объекта запроса к API
 *
 * @property string $paymentId Идентификатор платежа для которого создаётся возврат
 * @property AmountInterface $amount Сумма возврата
 *
 * @since 2.1.0
 */
class AbstractRefundRequest extends AbstractRequest
{
    /**
     * @var string Айди платежа для которого создаётся возврат
     */
    private $_paymentId;

    /**
     * @var AmountInterface Сумма возврата
     */
    private $_amount;


    /**
     * Возвращает идентификатор платежа для которого создаётся возврат средств
     * @return string Идентификатор платежа для которого создаётся возврат
     */
    public function getPaymentId()
    {
        return $this->_paymentId;
    }

    /**
     * Устанавливает идентификатор платежа для которого создаётся возврат
     * @param string $value Идентификатор платежа
     *
     * @throws EmptyPropertyValueException Выбрасывается если передано пустое значение идентификатора платежа
     * @throws InvalidPropertyValueException Выбрасывается если переданное значение является строкой, но не является
     * валидным значением идентификатора платежа
     * @throws InvalidPropertyValueTypeException Выбрасывается если передано значение не валидного типа
     */
    public function setPaymentId($value)
    {
        if ($value === null || $value === '') {
            throw new EmptyPropertyValueException(
                'Empty payment id value in CreateRefundRequest', 0, 'CreateRefundRequest.paymentId'
            );
        } elseif (TypeCast::canCastToString($value)) {
            $length = mb_strlen($value, 'utf-8');
            if ($length != 36) {
                throw new InvalidPropertyValueException(
                    'Invalid payment id value in CreateRefundRequest', 0, 'CreateRefundRequest.paymentId', $value
                );
            }
            $this->_paymentId = (string)$value;
        } else {
            throw new InvalidPropertyValueException(
                'Invalid payment id value type in CreateRefundRequest', 0, 'CreateRefundRequest.paymentId', $value
            );
        }
    }

    /**
     * Возвращает сумму возврата
     * @return AmountInterface Сумма возврата
     */
    public function getAmount()
    {
        return $this->_amount;
    }

    /**
     * Проверяет была ли установлена сумма возврата
     * @return bool True если сумма возврата была установлена, false если нет
     */
    public function hasAmount()
    {
        return !empty($this->_amount);
    }

    /**
     * Устанавливает сумму
     *
     * @param AmountInterface|array|string $value Сумма возврата
     *
     * @return self Инстанс билдера запросов
     */
    public function setAmount($value)
    {
        $this->_amount = new MonetaryAmount();
        if ($value === null || $value === '') {
            $this->_amount = new MonetaryAmount();
        } elseif ($value instanceof AmountInterface) {
            $this->_amount = $value;
        } elseif (is_array($value)) {
            $this->_amount->fromArray($value);
        } else {
            $this->_amount->setValue($value);
        }

        return $this;
    }

    /**
     * Валидирует объект запроса
     * @return bool True если запрос валиден и его можно отправить в API, false если нет
     */
    public function validate()
    {
        if (empty($this->_paymentId)) {
            $this->setValidationError('Payment id not specified');
            return false;
        }

        if ($this->_amount === null) {
            $this->setValidationError('Payment amount not specified');
            return false;
        }

        $value = $this->_amount->getValue();
        if (empty($value) || $value <= 0.0) {
            $this->setValidationError('Invalid payment amount value: ' . $value);

            return false;
        }

        return true;
    }

}