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

namespace YooKassa\Model\PaymentMethod;

use YooKassa\Common\AbstractObject;
use YooKassa\Common\Exceptions\EmptyPropertyValueException;
use YooKassa\Common\Exceptions\InvalidPropertyValueException;
use YooKassa\Common\Exceptions\InvalidPropertyValueTypeException;
use YooKassa\Helpers\TypeCast;
use YooKassa\Model\PaymentMethodType;

/**
 * Абстрактный класс, описывающий основные свойства и методы платежных методов
 *
 * @property string $id Идентификатор записи о сохраненных платежных данных
 * @property bool $saved Возможность многократного использования
 * @property string $title Название метода оплаты
 */
abstract class AbstractPaymentMethod extends AbstractObject
{
    /**
     * @var string Идентификатор записи о сохраненных платежных данных
     */
    private $_id;

    /**
     * @var string Тип объекта
     */
    private $_type;

    /**
     * @var bool Возможность многократного использования
     */
    private $_saved = false;

    /**
     * @var string Название метода оплаты
     */
    private $_title;

    /**
     * Возвращает тип объекта
     * @return string Тип объекта
     */
    public function getType()
    {
        return $this->_type;
    }

    /**
     * Устанавливает тип объекта
     * @param string $value Тип объекта
     */
    protected function _setType($value)
    {
        if ($value === null || $value === '') {
            throw new EmptyPropertyValueException(
                'Empty payment data type', 0, 'PaymentMethod.type'
            );
        } elseif (TypeCast::canCastToEnumString($value)) {
            if (PaymentMethodType::valueExists($value)) {
                $this->_type = (string)$value;
            } else {
                throw new InvalidPropertyValueException(
                    'Invalid value for "type" parameter in PaymentMethod', 0, 'PaymentMethod.type', $value
                );
            }
        } else {
            throw new InvalidPropertyValueTypeException(
                'Invalid value type for "type" parameter in PaymentMethod', 0, 'PaymentMethod.type', $value
            );
        }
    }

    /**
     * Устанавливает идентификатор записи о сохраненных платежных данных
     * @return string Идентификатор записи о сохраненных платежных данных
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * Возвращает идентификатор записи о сохраненных платежных данных
     * @param string $value Идентификатор записи о сохраненных платежных данных
     */
    public function setId($value)
    {
        if ($value === null || $value === '') {
            $this->_id = null;
        } elseif (TypeCast::canCastToString($value)) {
            $this->_id = (string)$value;
        } else {
            throw new InvalidPropertyValueTypeException('Invalid id value type', 0, 'PaymentMethod.id', $value);
        }
    }

    /**
     * Возвращает признак возможности многократного использования
     * @return bool Возможность многократного использования
     */
    public function getSaved()
    {
        return $this->_saved;
    }

    /**
     * Устанавливает признак возможности многократного использования
     * @param bool $value Возможность многократного использования
     */
    public function setSaved($value)
    {
        if ($value === null || $value === '') {
            throw new EmptyPropertyValueException('Empty saved value', 0, 'PaymentMethod.saved');
        } elseif (TypeCast::canCastToBoolean($value)) {
            $this->_saved = (bool)$value;
        } else {
            throw new InvalidPropertyValueTypeException(
                'Invalid saved value type', 0, 'PaymentMethod.saved', $value
            );
        }
    }

    /**
     * Возвращает название метода оплаты
     * @return string|null Название метода оплаты
     */
    public function getTitle()
    {
        return $this->_title;
    }

    /**
     * Устанавливает название метода оплаты
     * @param string $value Название метода оплаты
     */
    public function setTitle($value)
    {
        if ($value === null || $value === '') {
            $this->_title = null;
        } elseif (TypeCast::canCastToString($value)) {
            $this->_title = (string)$value;
        } else {
            throw new InvalidPropertyValueTypeException('Invalid title value type', 0, 'PaymentMethod.title', $value);
        }
    }
}
