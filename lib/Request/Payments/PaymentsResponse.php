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

namespace YooKassa\Request\Payments;

use YooKassa\Model\AuthorizationDetails;
use YooKassa\Model\CancellationDetails;
use YooKassa\Model\Confirmation\ConfirmationRedirect;
use YooKassa\Model\Confirmation\ConfirmationExternal;
use YooKassa\Model\ConfirmationType;
use YooKassa\Model\Metadata;
use YooKassa\Model\MonetaryAmount;
use YooKassa\Model\Payment;
use YooKassa\Model\PaymentInterface;
use YooKassa\Model\PaymentMethod\AbstractPaymentMethod;
use YooKassa\Model\PaymentMethod\PaymentMethodFactory;
use YooKassa\Model\Recipient;

/**
 * Класс объекта ответа от API со списком платежей магазина
 *
 * @package YooKassa\Request\Payments
 */
class PaymentsResponse
{
    /**
     * @var PaymentInterface[] Массив платежей
     */
    private $items;

    /**
     * @var string|null Токен следующей страницы
     */
    private $nextCursor;

    /**
     * Конструктор, устанавливает свойства объекта из пришедшего из API ассоциативного массива
     *
     * @param array $options Массив настроек, пришедший от API
     * @throws \Exception
     */
    public function __construct($options)
    {
        $this->items = array();
        foreach ($options['items'] as $paymentInfo) {
            $payment = new Payment();
            $payment->setId($paymentInfo['id']);
            $payment->setStatus($paymentInfo['status']);
            $payment->setAmount(new MonetaryAmount(
                $paymentInfo['amount']['value'],
                $paymentInfo['amount']['currency']
            ));
            if (!empty($paymentInfo['description'])) {
                $payment->setDescription($paymentInfo['description']);
            }
            $payment->setCreatedAt(strtotime($paymentInfo['created_at']));
            if (!empty($paymentInfo['payment_method'])
                && $method = $this->factoryPaymentMethod($paymentInfo['payment_method'])) {
                $payment->setPaymentMethod($method);
            }
            $payment->setPaid($paymentInfo['paid']);
            $payment->setRefundable($paymentInfo['refundable']);

            if (!empty($paymentInfo['recipient'])) {
                $recipient = new Recipient();
                $recipient->setAccountId($paymentInfo['recipient']['account_id']);
                $recipient->setGatewayId($paymentInfo['recipient']['gateway_id']);
                $payment->setRecipient($recipient);
            }
            if (!empty($paymentInfo['captured_at'])) {
                $payment->setCapturedAt(strtotime($paymentInfo['captured_at']));
            }
            if (!empty($paymentInfo['confirmation'])) {
                if ($paymentInfo['confirmation']['type'] === ConfirmationType::REDIRECT) {
                    $confirmation = new ConfirmationRedirect();
                    $confirmation->setConfirmationUrl($paymentInfo['confirmation']['confirmation_url']);
                    if (!empty($paymentInfo['confirmation']['enforce'])) {
                        $confirmation->setEnforce($paymentInfo['confirmation']['enforce']);
                    }
                    if (!empty($paymentInfo['confirmation']['return_url'])) {
                        $confirmation->setReturnUrl($paymentInfo['confirmation']['return_url']);
                    }
                } else {
                    $confirmation = new ConfirmationExternal();
                }
                $payment->setConfirmation($confirmation);
            }
            if (!empty($paymentInfo['refunded_amount'])) {
                $payment->setRefundedAmount(new MonetaryAmount(
                    $paymentInfo['refunded_amount']['value'], $paymentInfo['refunded_amount']['currency']
                ));
            }
            if (!empty($paymentInfo['receipt_registration'])) {
                $payment->setReceiptRegistration($paymentInfo['receipt_registration']);
            }
            if (!empty($paymentInfo['metadata'])) {
                $metadata = new Metadata();
                foreach ($paymentInfo['metadata'] as $key => $value) {
                    $metadata->offsetSet($key, $value);
                }
                $payment->setMetadata($metadata);
            }
            if (!empty($paymentInfo['cancellation_details'])) {
                $cancellationDetails = $paymentInfo['cancellation_details'];
                $party               = isset($cancellationDetails['party']) ? $cancellationDetails['party'] : null;
                $reason              = isset($cancellationDetails['reason']) ? $cancellationDetails['reason'] : null;
                $payment->setCancellationDetails(new CancellationDetails($party, $reason));
            }
            if (!empty($paymentInfo['authorization_details'])) {
                $authorizationDetails = $paymentInfo['authorization_details'];
                $rrn                  = isset($authorizationDetails['rrn']) ? $authorizationDetails['rrn'] : null;
                $authCode             = isset($authorizationDetails['auth_code']) ? $authorizationDetails['auth_code'] : null;
                $payment->setAuthorizationDetails(new AuthorizationDetails($rrn, $authCode));
            }
            $this->items[] = $payment;
        }
        if (!empty($options['next_cursor'])) {
            $this->nextCursor = $options['next_cursor'];
        }
    }

    /**
     * Возвращает список платежей
     * @return PaymentInterface[] Список платежей
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Возвращает токен следующей страницы, если он задан, или null
     * @return string|null Токен следующей страницы
     */
    public function getNextCursor()
    {
        return $this->nextCursor;
    }

    /**
     * Проверяет имееотся ли в ответе токен следующей страницы
     * @return bool True если токен следующей страницы есть, false если нет
     */
    public function hasNextCursor()
    {
        return $this->nextCursor !== null;
    }

    /**
     * Фабричный метод для создания объектов методов оплаты
     *
     * @param array $options Массив настроек метода оплаты
     *
     * @return AbstractPaymentMethod Используемый способ оплаты
     */
    private function factoryPaymentMethod($options)
    {
        if (empty($options)) return null;

        $factory = new PaymentMethodFactory();

        return $factory->factoryFromArray($options);
    }
}
