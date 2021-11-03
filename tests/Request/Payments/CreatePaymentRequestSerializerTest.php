<?php

namespace Tests\YooKassa\Request\Payments;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\Airline;
use YooKassa\Model\ConfirmationAttributes\ConfirmationAttributesExternal;
use YooKassa\Model\ConfirmationAttributes\ConfirmationAttributesRedirect;
use YooKassa\Model\ConfirmationType;
use YooKassa\Model\CurrencyCode;
use YooKassa\Model\Leg;
use YooKassa\Model\Passenger;
use YooKassa\Model\Payment;
use YooKassa\Model\PaymentData\B2b\Sberbank\VatDataRate;
use YooKassa\Model\PaymentData\B2b\Sberbank\VatDataType;
use YooKassa\Model\PaymentData\PaymentDataAlfabank;
use YooKassa\Model\PaymentData\PaymentDataB2bSberbank;
use YooKassa\Model\PaymentData\PaymentDataGooglePay;
use YooKassa\Model\PaymentData\PaymentDataApplePay;
use YooKassa\Model\PaymentData\PaymentDataBankCard;
use YooKassa\Model\PaymentData\PaymentDataBankCardCard;
use YooKassa\Model\PaymentData\PaymentDataMobileBalance;
use YooKassa\Model\PaymentData\PaymentDataInstallments;
use YooKassa\Model\PaymentData\PaymentDataQiwi;
use YooKassa\Model\PaymentData\PaymentDataSberbank;
use YooKassa\Model\PaymentData\PaymentDataWebmoney;
use YooKassa\Model\PaymentData\PaymentDataYooMoney;
use YooKassa\Model\PaymentMethodType;
use YooKassa\Model\Receipt\PaymentMode;
use YooKassa\Model\Receipt\PaymentSubject;
use YooKassa\Model\TransferStatus;
use YooKassa\Request\Payments\CreatePaymentRequest;
use YooKassa\Request\Payments\CreatePaymentRequestSerializer;

class CreatePaymentRequestSerializerTest extends TestCase
{
    private $fieldMap = array(
        'payment_token'         => 'paymentToken',
        'payment_method_id'     => 'paymentMethodId',
        'client_ip'             => 'clientIp',
        'merchant_customer_id'  => 'merchantCustomerId',
    );

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     */
    public function testSerialize($options)
    {
        $serializer = new CreatePaymentRequestSerializer();
        $instance   = CreatePaymentRequest::builder()->build($options);
        $data       = $serializer->serialize($instance);

        $expected = array(
            'amount' => array(
                'value'    => $options['amount'],
                'currency' => isset($options['currency']) ? $options['currency'] : CurrencyCode::RUB,
            ),
        );
        foreach ($this->fieldMap as $mapped => $field) {
            if (isset($options[$field])) {
                $value = $options[$field];
                if (!empty($value)) {
                    $expected[$mapped] = $value instanceof \DateTime ? $value->format(YOOKASSA_DATE) : $value;
                }
            }
        }
        if (!empty($options['accountId']) && !empty($options['gatewayId'])) {
            $expected['recipient'] = array(
                'account_id' => $options['accountId'],
                'gateway_id' => $options['gatewayId'],
            );
        }
        if (!empty($options['confirmation'])) {
            $expected['confirmation'] = array(
                'type' => $options['confirmation']->getType(),
            );
            if ($locale = $options['confirmation']->getLocale()) {
                $expected['confirmation']['locale'] = $locale;
            }
            if ($options['confirmation']->getType() === ConfirmationType::REDIRECT) {
                $expected['confirmation']['enforce']    = $options['confirmation']->enforce;
                $expected['confirmation']['return_url'] = $options['confirmation']->returnUrl;
            }
        }
        if (!empty($options['paymentMethodData'])) {
            $expected['payment_method_data'] = array(
                'type' => $options['paymentMethodData']->getType(),
            );
            switch ($options['paymentMethodData']['type']) {
                case PaymentMethodType::ALFABANK:
                    $expected['payment_method_data']['login'] = $options['paymentMethodData']->getLogin();
                    break;
                case PaymentMethodType::APPLE_PAY:
                    $expected['payment_method_data']['payment_data'] = $options['paymentMethodData']->getPaymentData();
                    break;
                case PaymentMethodType::GOOGLE_PAY:
                    $expected['payment_method_data']['payment_method_token']  = $options['paymentMethodData']->getPaymentMethodToken();
                    $expected['payment_method_data']['google_transaction_id'] = $options['paymentMethodData']->getGoogleTransactionId();
                    break;
                case PaymentMethodType::BANK_CARD:
                    $expected['payment_method_data']['card'] = array(
                        'number'       => $options['paymentMethodData']->getCard()->getNumber(),
                        'expiry_year'  => $options['paymentMethodData']->getCard()->getExpiryYear(),
                        'expiry_month' => $options['paymentMethodData']->getCard()->getExpiryMonth(),
                        'csc'          => $options['paymentMethodData']->getCard()->getCsc(),
                        'cardholder'   => $options['paymentMethodData']->getCard()->getCardholder(),
                    );
                    break;
                case PaymentMethodType::MOBILE_BALANCE:
                case PaymentMethodType::CASH:
                case PaymentMethodType::SBERBANK:
                    $expected['payment_method_data']['phone'] = $options['paymentMethodData']->getPhone();
                    break;
                case PaymentMethodType::B2B_SBERBANK:
                    /** @var PaymentDataB2bSberbank $paymentMethodData */
                    $paymentMethodData                                  = $options['paymentMethodData'];
                    $expected['payment_method_data']['payment_purpose'] = $paymentMethodData->getPaymentPurpose();
                    $expected['payment_method_data']['vat_data']        = array(
                        'type'   => $paymentMethodData->getVatData()->getType(),
                        'rate'   => $paymentMethodData->getVatData()->getRate(),
                        'amount' => array(
                            'value'    => $paymentMethodData->getVatData()->getAmount()->getValue(),
                            'currency' => $paymentMethodData->getVatData()->getAmount()->getCurrency(),
                        ),
                    );
                    break;
            }
        }
        if (!empty($options['metadata'])) {
            $expected['metadata'] = array();
            foreach ($options['metadata'] as $key => $value) {
                $expected['metadata'][$key] = $value;
            }
        }
        if (!empty($options['receipt']['items'])) {
            foreach ($options['receipt']['items'] as $item) {
                $itemArray = $item;

                if (!empty($item['payment_subject'])) {
                    $itemArray['payment_subject'] = $item['payment_subject'];
                }
                if (!empty($item['payment_mode'])) {
                    $itemArray['payment_mode'] = $item['payment_mode'];
                }
                $expected['receipt']['items'][] = $itemArray;
            }
            if (!empty($options['receipt']['customer'])) {
                $expected['receipt']['customer'] = $options['receipt']['customer'];
            }
            if (!empty($options['receipt']['tax_system_code'])) {
                $expected['receipt']['tax_system_code'] = $options['receipt']['tax_system_code'];
            }
        }

        if (array_key_exists('capture', $options)) {
            $expected['capture'] = (bool)$options['capture'];
        }
        if (array_key_exists('savePaymentMethod', $options)) {
            $expected['save_payment_method'] = (bool)$options['savePaymentMethod'];
        }
        if (!empty($options['description'])) {
            $expected['description'] = $options['description'];
        }

        if (!empty($options['airline'])) {
            $expected['airline'] = array(
                'booking_reference' => $options['airline']['booking_reference'],
                'ticket_number'     => $options['airline']['ticket_number'],
                'passengers'        => array_map(function ($passenger) {
                    return array(
                        'first_name' => $passenger['first_name'],
                        'last_name'  => $passenger['last_name'],
                    );
                }, $options['airline']['passengers']),
                'legs'              => array_map(function ($leg) {
                    return array(
                        'departure_airport'   => $leg['departure_airport'],
                        'destination_airport' => $leg['destination_airport'],
                        'departure_date'      => $leg['departure_date'],
                    );
                }, $options['airline']['legs']),
            );
        }

        if (!empty($options['transfers'])) {
            foreach ($options['transfers'] as $item) {
                $itemArray = $item;

                if (!empty($item['account_id'])) {
                    $itemArray['account_id'] = $item['account_id'];
                }
                if (!empty($item['amount'])) {
                    $itemArray['amount'] = $item['amount'];
                }
                if (!empty($item['status'])) {
                    $itemArray['status'] = $item['status'];
                }
                if (!empty($item['platform_fee_amount'])) {
                    $itemArray['platform_fee_amount'] = $item['platform_fee_amount'];
                }
                if (!empty($item['metadata'])) {
                    $itemArray['metadata'] = $item['metadata'];
                }
                $expected['transfers'][] = $itemArray;
            }
        }

        if (!empty($options['deal'])) {
            $expected['deal'] = $options['deal'];
        }

        if (!empty($options['merchant_customer_id'])) {
            $expected['merchant_customer_id'] = $options['merchant_customer_id'];
        }

        self::assertEquals($expected, $data);
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function validDataProvider()
    {
        $airline = new Airline();
        $airline->setBookingReference(Random::str(10));
        $airline->setTicketNumber(Random::int(10));
        $leg = new Leg();
        $leg->setDepartureAirport(Random::str(3, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'));
        $leg->setDestinationAirport(Random::str(3, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'));
        $leg->setDepartureDate("2018-12-31");
        $airline->setLegs(array($leg));
        $passenger = new Passenger();
        $passenger->setFirstName(Random::str(10));
        $passenger->setLastName(Random::str(10));
        $airline->setPassengers(array($passenger));

        $result        = array(
            array(
                array(
                    'amount'        => mt_rand(10, 100000),
                    'paymentToken'  => Random::str(36),
                    'receipt' => array(
                        'items'  => array(
                            array(
                                'description'           => Random::str(10),
                                'quantity'        => (float)Random::int(1, 10),
                                'amount'          => array(
                                    'value'    => (float)Random::int(100, 100),
                                    'currency' => CurrencyCode::RUB,
                                ),
                                'vat_code'         => Random::int(1, 6),
                                'payment_subject' => PaymentSubject::COMMODITY,
                                'payment_mode'    => PaymentMode::PARTIAL_PREPAYMENT,
                            )
                        ),
                        'customer' => array(
                            'email'  => Random::str(10),
                        ),
                        'tax_system_code' => Random::int(1, 6),
                    ),
                    'description'   => Random::str(10),
                    'airline'       => array(
                        'booking_reference' => Random::str(10),
                        'ticket_number'     => Random::int(10),
                        'passengers'        => array(
                            array(
                                'first_name' => Random::str(10, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'),
                                'last_name'  => Random::str(10, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'),
                            ),
                        ),
                        'legs'              => array(
                            array(
                                'departure_airport'   => Random::str(3, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'),
                                'destination_airport' => Random::str(3, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'),
                                'departure_date'      => "2020-01-01",
                            ),
                        ),
                    ),
                    'transfers' => array(
                        array(
                            'account_id' => (string)Random::int(11111111, 99999999),
                            'amount' => array(
                                'value' => sprintf('%.2f', round(Random::float(0.1, 99.99), 2)),
                                'currency' => Random::value(CurrencyCode::getValidValues())
                            ),
                            'status' => Random::value(TransferStatus::getValidValues()),
                            'platform_fee_amount' => array(
                                'value' => sprintf('%.2f', round(Random::float(0.1, 99.99), 2)),
                                'currency' => Random::value(CurrencyCode::getValidValues())
                            ),
                            'metadata' => array('test' => Random::str(10, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ')),
                        )
                    ),
                    'deal' => array(
                        'id' => Random::str(36, 50),
                        'settlements' => array()
                    ),
                    'merchant_customer_id' => Random::str(36, Payment::MAX_LENGTH_MERCHANT_CUSTOMER_ID),
                ),
            ),
        );
        $confirmations = array(
            new ConfirmationAttributesExternal(),
            new ConfirmationAttributesRedirect(),
        );
        $paymentData   = array(
            new PaymentDataAlfabank(),
            new PaymentDataApplePay(),
            new PaymentDataGooglePay(),
            new PaymentDataBankCard(),
            new PaymentDataMobileBalance(),
            new PaymentDataQiwi(),
            new PaymentDataSberbank(),
            new PaymentDataWebmoney(),
            new PaymentDataYooMoney(),
            new PaymentDataInstallments(),
            new PaymentDataB2bSberbank(),
        );
        $paymentData[0]->setLogin(Random::str(10));

        $paymentData[1]->setPaymentData(Random::str(10));
        $paymentData[2]->setPaymentMethodToken(Random::str(10));
        $paymentData[2]->setGoogleTransactionId(Random::str(10));

        $card = new PaymentDataBankCardCard();
        $card->setNumber(Random::str(16, '0123456789'));
        $card->setExpiryYear(Random::int(2000, 2200));
        $card->setExpiryMonth(Random::value(array('01', '02', '03', '04', '05', '06', '07', '08', '09', '11', '12')));
        $card->setCsc(Random::str(4, '0123456789'));
        $card->setCardholder(Random::str(26, 'abcdefghijklmnopqrstuvwxyz'));
        $paymentData[3]->setCard($card);
        $paymentData[4]->setPhone(Random::str(14, '0123456789'));

        $paymentData[6]->setPhone(Random::str(14, '0123456789'));

        /** @var PaymentDataB2bSberbank $paymentData [10] */
        $paymentDataB2bSberbank = new PaymentDataB2bSberbank();
        $paymentDataB2bSberbank->setPaymentPurpose(Random::str(10));
        $paymentDataB2bSberbank->setVatData(array(
            'type'   => VatDataType::CALCULATED,
            'rate'   => VatDataRate::RATE_10,
            'amount' => array(
                'value'    => Random::int(1, 10000),
                'currency' => CurrencyCode::USD,
            ),
        ));
        $paymentData[10] = $paymentDataB2bSberbank;

        $confirmations[0]->setLocale('en_US');
        $confirmations[1]->setEnforce(true);
        $confirmations[1]->setReturnUrl(Random::str(10));
        foreach ($paymentData as $i => $paymentMethodData) {
            $request  = array(
                'accountId'         => uniqid(),
                'gatewayId'         => uniqid(),
                'amount'            => mt_rand(0, 100000),
                'currency'          => CurrencyCode::RUB,
                'referenceId'       => uniqid(),
                'paymentMethodData' => $paymentData[$i],
                'confirmation'      => Random::value($confirmations),
                'savePaymentMethod' => Random::bool(),
                'capture'           => mt_rand(0, 1) ? true : false,
                'clientIp'          => long2ip(mt_rand(0, pow(2, 32))),
                'metadata'          => array('test' => uniqid()),
                'receipt' => array(
                    'items' => $this->getReceiptItem($i + 1),
                    'customer' => array(
                        'email' => Random::str(10),
                        'phone' => Random::str(12, '0123456789'),
                    ),
                    'tax_system_code' => Random::int(1, 6),
                ),
                'airline'           => $airline,
                'deal' => array(
                    'id' => Random::str(36, 50),
                    'settlements' => array()
                ),
                'merchant_customer_id' => Random::str(36, Payment::MAX_LENGTH_MERCHANT_CUSTOMER_ID),
            );
            $result[] = array($request);
        }

        return $result;
    }

    /**
     * @param $count
     * @return array
     * @throws \Exception
     */
    private function getReceiptItem($count)
    {
        $result = array();
        for ($i = 0; $i < $count; $i++) {
            $result[] = array(
                'description'     => Random::str(10),
                'quantity'        => (float)Random::float(1, 100),
                'amount'          => array(
                    'value'    => (float)Random::int(1, 100),
                    'currency' => CurrencyCode::RUB,
                ),
                'vat_code'         => Random::int(1, 6),
                'payment_subject' => PaymentSubject::COMMODITY,
                'payment_mode'    => PaymentMode::PARTIAL_PREPAYMENT,
            );
        }

        return $result;
    }
}