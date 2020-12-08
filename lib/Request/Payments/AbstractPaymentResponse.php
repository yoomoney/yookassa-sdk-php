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

use InvalidArgumentException;
use YooKassa\Model\AmountInterface;
use YooKassa\Model\AuthorizationDetails;
use YooKassa\Model\CancellationDetails;
use YooKassa\Model\Confirmation\ConfirmationCodeVerification;
use YooKassa\Model\Confirmation\ConfirmationDeepLink;
use YooKassa\Model\Confirmation\ConfirmationEmbedded;
use YooKassa\Model\Confirmation\ConfirmationQr;
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
use YooKassa\Model\Transfer;

/**
 * Абстрактный класс ответа от API, возвращающего информацию о платеже
 *
 * @package YooKassa\Request\Payments
 */
abstract class AbstractPaymentResponse extends Payment implements PaymentInterface
{
    /**
     * Конструктор, устанавливает настройки платежа из ассоциативного массива
     *
     * @param array $paymentInfo Массив с информацией о платеже, пришедший от API
     * @throws \Exception
     */
    public function __construct($paymentInfo)
    {
        $this->setId($paymentInfo['id']);
        $this->setStatus($paymentInfo['status']);
        $this->setAmount($this->factoryAmount($paymentInfo['amount']));
        $this->setCreatedAt($paymentInfo['created_at']);
        $this->setPaid($paymentInfo['paid']);
        $this->setRefundable($paymentInfo['refundable']);
        if (!empty($paymentInfo['test'])) {
            $this->setTest($paymentInfo['test']);
        }
        if (!empty($paymentInfo['payment_method'])) {
            $this->setPaymentMethod($this->factoryPaymentMethod($paymentInfo['payment_method']));
        }

        if (!empty($paymentInfo['description'])) {
            $this->setDescription($paymentInfo['description']);
        }

        if (!empty($paymentInfo['recipient'])) {
            $recipient = new Recipient();
            if (!empty($paymentInfo['recipient']['account_id'])) {
                $recipient->setAccountId($paymentInfo['recipient']['account_id']);
            }
            if (!empty($paymentInfo['recipient']['gateway_id'])) {
                $recipient->setGatewayId($paymentInfo['recipient']['gateway_id']);
            }
            $this->setRecipient($recipient);
        }
        if (!empty($paymentInfo['captured_at'])) {
            $this->setCapturedAt(strtotime($paymentInfo['captured_at']));
        }
        if (!empty($paymentInfo['expires_at'])) {
            $this->setExpiresAt($paymentInfo['expires_at']);
        }
        if (!empty($paymentInfo['confirmation'])) {
            $confirmationType = $paymentInfo['confirmation']['type'];
            switch ($confirmationType) {
                case ConfirmationType::REDIRECT:
                    $confirmation = new ConfirmationRedirect();
                    if (!empty($paymentInfo['confirmation']['confirmation_url'])) {
                        $confirmation->setConfirmationUrl($paymentInfo['confirmation']['confirmation_url']);
                    }
                    if (empty($paymentInfo['confirmation']['enforce'])) {
                        $confirmation->setEnforce(false);
                    } else {
                        $confirmation->setEnforce($paymentInfo['confirmation']['enforce']);
                    }
                    if (!empty($paymentInfo['confirmation']['return_url'])) {
                        $confirmation->setReturnUrl($paymentInfo['confirmation']['return_url']);
                    }
                    break;

                case ConfirmationType::EMBEDDED:
                    $confirmation = new ConfirmationEmbedded();
                    if (!empty($paymentInfo['confirmation']['confirmation_token'])) {
                        $confirmation->setConfirmationToken($paymentInfo['confirmation']['confirmation_token']);
                    }
                    break;

                case ConfirmationType::EXTERNAL:
                    $confirmation = new ConfirmationExternal();
                    break;

                case ConfirmationType::CODE_VERIFICATION:
                    $confirmation = new ConfirmationCodeVerification();
                    break;

                case ConfirmationType::DEEPLINK:
                    $confirmation = new ConfirmationDeepLink();
                    break;

                case ConfirmationType::QR:
                    $confirmation = new ConfirmationQr();
                    if (!empty($paymentInfo['confirmation']['confirmation_data'])) {
                        $confirmation->setConfirmationData($paymentInfo['confirmation']['confirmation_data']);
                    }
                    break;
            }

            if (isset($confirmation)) {
                $this->setConfirmation($confirmation);
            } else {
                throw new InvalidArgumentException('confirmation type '.$confirmationType.' is incorrect');
            }
        }
        if (!empty($paymentInfo['refunded_amount'])) {
            $this->setRefundedAmount($this->factoryAmount($paymentInfo['refunded_amount']));
        }
        if (!empty($paymentInfo['receipt_registration'])) {
            $this->setReceiptRegistration($paymentInfo['receipt_registration']);
        }
        if (!empty($paymentInfo['metadata'])) {
            $metadata = new Metadata();
            foreach ($paymentInfo['metadata'] as $key => $value) {
                $metadata->offsetSet($key, $value);
            }
            $this->setMetadata($metadata);
        }
        if (!empty($paymentInfo['cancellation_details'])) {
            $cancellationDetails = $paymentInfo['cancellation_details'];
            $party               = isset($cancellationDetails['party']) ? $cancellationDetails['party'] : null;
            $reason              = isset($cancellationDetails['reason']) ? $cancellationDetails['reason'] : null;
            $this->setCancellationDetails(new CancellationDetails($party, $reason));
        }
        if (!empty($paymentInfo['authorization_details'])) {
            $authorizationDetails = $paymentInfo['authorization_details'];
            $rrn                  = isset($authorizationDetails['rrn']) ? $authorizationDetails['rrn'] : null;
            $authCode             = isset($authorizationDetails['auth_code']) ? $authorizationDetails['auth_code'] : null;
            $this->setAuthorizationDetails(new AuthorizationDetails($rrn, $authCode));
        }
        if (!empty($paymentInfo['transfers'])) {
            $transfers = array();
            foreach ($paymentInfo['transfers'] as $transferDefinition) {
                $transfers[] = new Transfer($transferDefinition);
            }

            $this->setTransfers($transfers);
        }
        if (!empty($paymentInfo['income_amount'])) {
            $this->setIncomeAmount($this->factoryAmount($paymentInfo['income_amount']));
        }
        if (!empty($paymentInfo['requestor'])) {
            $this->setRequestor($paymentInfo['requestor']);
        }
    }

    /**
     * Фабричный метод для создания способа оплаты
     *
     * @param array $options Настройки способа оплаты в массиве
     *
     * @return AbstractPaymentMethod Инстанс способа оплаты нужного типа
     */
    private function factoryPaymentMethod($options)
    {
        $factory = new PaymentMethodFactory();

        return $factory->factoryFromArray($options);
    }

    /**
     * Фабричный метод создания суммы
     *
     * @param array $options Сумма в виде ассоциативного массива
     *
     * @return AmountInterface Созданный инстанс суммы
     */
    private function factoryAmount($options)
    {
        $amount = new MonetaryAmount(null, $options['currency']);
        if ($options['value'] > 0) {
            $amount->setValue($options['value']);
        }

        return $amount;
    }
}