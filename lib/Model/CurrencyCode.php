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

namespace YooKassa\Model;

use YooKassa\Common\AbstractEnum;

/**
 * CurrencyCode - Код валюты, ISO-4217 3-alpha currency symbol
 */
class CurrencyCode extends AbstractEnum
{
    /** Российский рубль */
    const RUB = 'RUB';
    /** Доллар США */
    const USD = 'USD';
    /** Евро */
    const EUR = 'EUR';
    /** Белорусский рубль */
    const BYN = 'BYN';
    /** Китайская йена */
    const CNY = 'CNY';
    /** Казахский тенге */
    const KZT = 'KZT';
    /** Украинская гривна */
    const UAH = 'UAH';

    protected static $validValues = array(
        self::RUB => true,
        self::USD => true,
        self::EUR => true,
        self::BYN => true,
        self::CNY => true,
        self::KZT => true,
        self::UAH => true,
    );
}
