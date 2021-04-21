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

namespace YooKassa\Model\PaymentData;

use YooKassa\Common\Exceptions\InvalidPropertyValueTypeException;
use YooKassa\Model\PaymentMethodType;

/**
 * PaymentDataBankCard
 * Платежные данные для проведения оплаты при помощи банковской карты
 * 
 * @property PaymentDataBankCardCard $card Данные банковской карты
 */
class PaymentDataBankCard extends AbstractPaymentData
{
    /**
     * Необходим при оплате PCI-DSS данными.
     * @var PaymentDataBankCardCard Данные банковской карты
     */
    private $_card;

    public function __construct()
    {
        $this->_setType(PaymentMethodType::BANK_CARD);
    }

    /**
     * Возвращает данные банковской карты
     * @return PaymentDataBankCardCard Данные банковской карты
     */
    public function getCard()
    {
        return $this->_card;
    }

    /**
     * Устанавливает данные банковской карты
     * @param PaymentDataBankCardCard|array $value Данные банковской карты
     */
    public function setCard($value)
    {
        if ($value === null || $value === '' || $value === array()) {
            $this->_card = null;
        } elseif (is_object($value) && $value instanceof PaymentDataBankCardCard) {
            $this->_card = $value;
        } elseif (is_array($value) || $value instanceof \Traversable) {
            $card = new PaymentDataBankCardCard();
            foreach ($value as $property => $val) {
                $card->offsetSet($property, $val);
            }
            $this->_card = $card;
        } else {
            throw new InvalidPropertyValueTypeException(
                'Invalid card value type in PaymentDataBankCard', 0, 'PaymentDataBankCard.card', $value
            );
        }
    }
}
