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

namespace YooKassa\Request\Refunds;

use YooKassa\Common\AbstractPaymentRequestBuilder;
use YooKassa\Common\AbstractRequest;
use YooKassa\Common\Exceptions\EmptyPropertyValueException;
use YooKassa\Common\Exceptions\InvalidPropertyValueException;
use YooKassa\Common\Exceptions\InvalidPropertyValueTypeException;
use YooKassa\Model\SourceInterface;

/**
 * Класс билдера запросов к API на создание возврата средств
 *
 * @example 02-builder.php 148 35 Пример использования билдера
 *
 * @package YooKassa
 */
class CreateRefundRequestBuilder extends AbstractPaymentRequestBuilder
{

    /**
     * Собираемый объет запроса к API
     * @var CreateRefundRequest
     */
    protected $currentObject;

    /**
     * Возвращает новый объект для сборки
     * @return CreateRefundRequest Собираемый объет запроса к API
     */
    protected function initCurrentObject()
    {
        parent::initCurrentObject();
        return new CreateRefundRequest();
    }

    /**
     * Устанавливает айди платежа для которого создаётся возврат
     * @param string $value Айди платежа
     * @return CreateRefundRequestBuilder Инстанс текущего билдера
     *
     * @throws EmptyPropertyValueException Выбрасывается если передано пустое значение айди платежа
     * @throws InvalidPropertyValueException Выбрасывается если переданное значение является строкой, но не является
     * валидным значением айди платежа
     * @throws InvalidPropertyValueTypeException Выбрасывается если передано значение не валидного типа
     */
    public function setPaymentId($value)
    {
        $this->currentObject->setPaymentId($value);
        return $this;
    }

    /**
     * Устанавливает комментарий к возврату
     * @param string $value Комментарий к возврату
     * @return CreateRefundRequestBuilder Инстанс текущего билдера
     *
     * @throws InvalidPropertyValueTypeException Выбрасывается если была передана не строка
     */
    public function setDescription($value)
    {
        $this->currentObject->setDescription($value);
        return $this;
    }

    /**
     * Устанавливает источники возврата
     *
     * @param SourceInterface[]|array $value Массив трансферов
     *
     * @return self Инстанс билдера запросов
     */
    public function setSources($value)
    {
        $this->currentObject->setSources($value);
        return $this;
    }

    /**
     * Строит объект запроса к API
     * @param array|null $options Устаналвиваемые параметры запроса
     * @return CreateRefundRequestInterface|AbstractRequest Инстанс сгенерированного объекта запроса к API
     */
    public function build(array $options = null)
    {
        if (!empty($options)) {
            $this->setOptions($options);
        }

        $this->currentObject->setAmount($this->amount);

        if ($this->receipt->notEmpty()) {
            $this->currentObject->setReceipt($this->receipt);
        }
        return parent::build();
    }
}