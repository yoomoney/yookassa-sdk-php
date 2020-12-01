<?php

namespace Tests\YooKassa\Request\Payments;

use Exception;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\AmountInterface;
use YooKassa\Model\ConfirmationAttributes\ConfirmationAttributesExternal;
use YooKassa\Model\ConfirmationType;
use YooKassa\Model\CurrencyCode;
use YooKassa\Model\MonetaryAmount;
use YooKassa\Model\Payment;
use YooKassa\Model\PaymentData\PaymentDataQiwi;
use YooKassa\Model\PaymentMethodType;
use YooKassa\Model\Receipt\PaymentMode;
use YooKassa\Model\Receipt\PaymentSubject;
use YooKassa\Model\ReceiptItem;
use YooKassa\Model\Recipient;
use YooKassa\Request\Payments\CreatePaymentRequestBuilder;

class CreatePaymentRequestBuilderTest extends TestCase
{
    /**
     * @param null $testingProperty
     * @param null $paymentType
     * @return array
     * @throws Exception
     */
    protected function getRequiredData($testingProperty = null, $paymentType = null)
    {
        $result = array();
        if ($testingProperty === 'accountId' || $testingProperty === 'gatewayId') {
            if ($testingProperty !== 'accountId') {
                $result['accountId'] = Random::str(1, 32);
            }
            if ($testingProperty !== 'gatewayId') {
                $result['gatewayId'] = Random::str(1, 32);
            }
        }
        if ($testingProperty !== 'amount') {
            $result['amount'] = Random::int(1, 100);
        }
        if ($testingProperty !== 'paymentToken') {
            if ($paymentType !== null) {
                $result[$paymentType] = Random::str(36);
            } else {
                $result['paymentToken'] = Random::str(36);
            }
        }

        return $result;
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     * @throws Exception
     */
    public function testSetAccountId($options)
    {
        $builder = new CreatePaymentRequestBuilder();

        $instance = $builder->build($this->getRequiredData());
        self::assertNull($instance->getRecipient());

        $builder->setAccountId($options['accountId']);
        $instance = $builder->build($this->getRequiredData('accountId'));

        if ($options['accountId'] === null || $options['accountId'] === '') {
            self::assertNull($instance->getRecipient());
        } else {
            self::assertNotNull($instance->getRecipient());
            self::assertEquals($options['accountId'], $instance->getRecipient()->getAccountId());
        }
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     * @throws Exception
     */
    public function testSetProductGroupId($options)
    {
        $builder = new CreatePaymentRequestBuilder();

        $instance = $builder->build($this->getRequiredData());
        self::assertNull($instance->getRecipient());

        $builder->setGatewayId($options['gatewayId']);
        $instance = $builder->build($this->getRequiredData('gatewayId'));

        if (empty($options['gatewayId'])) {
            self::assertNull($instance->getRecipient());
        } else {
            self::assertNotNull($instance->getRecipient());
            self::assertEquals($options['gatewayId'], $instance->getRecipient()->getGatewayId());
        }
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     * @throws Exception
     */
    public function testSetAmount($options)
    {
        $builder = new CreatePaymentRequestBuilder();

        $instance = $builder->build($this->getRequiredData());
        self::assertNotNull($instance->getAmount());

        $builder->setAmount($options['amount']);
        $instance = $builder->build($this->getRequiredData('amount'));

        if ($options['amount'] instanceof AmountInterface) {
            self::assertEquals($options['amount']->getValue(), $instance->getAmount()->getValue());
        } else {
            self::assertEquals($options['amount'], $instance->getAmount()->getValue());
        }

        $builder->setAmount(10000)->setAmount($options['amount']);
        $instance = $builder->build($this->getRequiredData('amount'));

        if ($options['amount'] instanceof AmountInterface) {
            self::assertEquals($options['amount']->getValue(), $instance->getAmount()->getValue());
        } else {
            self::assertEquals($options['amount'], $instance->getAmount()->getValue());
        }

        if (!($options['amount'] instanceof AmountInterface)) {
            $builder->setAmount(array(
                'value'    => $options['amount'],
                'currency' => 'EUR',
            ));
            $instance = $builder->build($this->getRequiredData('amount'));
            self::assertEquals($options['amount'], $instance->getAmount()->getValue());
        }
    }

    /**
     * @expectedException InvalidArgumentException
     * @dataProvider invalidAmountDataProvider
     *
     * @param $value
     */
    public function testSetInvalidAmount($value)
    {
        $builder = new CreatePaymentRequestBuilder();
        $builder->setAmount($value);
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     * @throws Exception
     */
    public function testSetCurrency($options)
    {
        $builder = new CreatePaymentRequestBuilder();

        $instance = $builder->build($this->getRequiredData());
        self::assertNotNull($instance->getAmount());
        self::assertEquals(CurrencyCode::RUB, $instance->getAmount()->getCurrency());

        $builder->setReceiptItems($options['receiptItems']);
        $builder->setCurrency($options['currency']);
        $builder->setReceiptEmail($options['receiptEmail']);
        $instance = $builder->build($this->getRequiredData());

        self::assertEquals($options['currency'], $instance->getAmount()->getCurrency());
        if (!empty($options['receiptItems'])) {
            foreach ($instance->getReceipt()->getItems() as $item) {
                self::assertEquals($options['currency'], $item->getPrice()->getCurrency());
            }
        }
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     * @throws Exception
     */
    public function testSetReceiptItems($options)
    {
        $builder = new CreatePaymentRequestBuilder();

        $builder->setReceiptItems($options['receiptItems']);
        $builder->setReceiptEmail($options['receiptEmail']);
        $instance = $builder->build($this->getRequiredData());

        if (empty($options['receiptItems'])) {
            self::assertNull($instance->getReceipt());
        } else {
            self::assertNotNull($instance->getReceipt());
            self::assertEquals(count($options['receiptItems']), count($instance->getReceipt()->getItems()));
        }
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     * @throws Exception
     */
    public function testAddReceiptItems($options)
    {
        $builder = new CreatePaymentRequestBuilder();

        foreach ($options['receiptItems'] as $item) {
            if ($item instanceof ReceiptItem) {
                $builder->addReceiptItem(
                    $item->getDescription(), $item->getPrice()->getValue(), $item->getQuantity(), $item->getVatCode(),
                    $item->getPaymentMode(), $item->getPaymentSubject()
                );
            } else {
                $builder->addReceiptItem($item['title'], $item['price'], $item['quantity'], $item['vatCode'],
                    $item['paymentMode'], $item['paymentSubject']);
            }
        }
        $builder->setReceiptEmail($options['receiptEmail']);
        $instance = $builder->build($this->getRequiredData());

        if (empty($options['receiptItems'])) {
            self::assertNull($instance->getReceipt());
        } else {
            self::assertNotNull($instance->getReceipt());
            self::assertEquals(count($options['receiptItems']), count($instance->getReceipt()->getItems()));
            foreach ($instance->getReceipt()->getItems() as $item) {
                self::assertFalse($item->isShipping());
            }
        }
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     * @throws Exception
     */
    public function testAddReceiptShipping($options)
    {
        $builder = new CreatePaymentRequestBuilder();

        foreach ($options['receiptItems'] as $item) {
            if ($item instanceof ReceiptItem) {
                $builder->addReceiptShipping(
                    $item->getDescription(), $item->getPrice()->getValue(), $item->getVatCode()
                );
            } else {
                $builder->addReceiptShipping($item['title'], $item['price'], $item['vatCode']);
            }
        }
        $builder->setReceiptEmail($options['receiptEmail']);
        $instance = $builder->build($this->getRequiredData());

        if (empty($options['receiptItems'])) {
            self::assertNull($instance->getReceipt());
        } else {
            self::assertNotNull($instance->getReceipt());
            self::assertEquals(count($options['receiptItems']), count($instance->getReceipt()->getItems()));
            foreach ($instance->getReceipt()->getItems() as $item) {
                self::assertTrue($item->isShipping());
            }
        }
    }

    /**
     * @dataProvider invalidItemsDataProvider
     * @expectedException InvalidArgumentException
     *
     * @param $items
     */
    public function testSetInvalidReceiptItems($items)
    {
        $builder = new CreatePaymentRequestBuilder();
        $builder->setReceiptItems($items);
    }

    public function invalidItemsDataProvider()
    {
        return array(
            array(
                array(
                    array(
                        'price'    => 1,
                        'quantity' => 1.4,
                        'vatCode'  => 3,
                    ),
                ),
            ),
            array(
                array(
                    array(
                        'title'    => 'test',
                        'quantity' => 1.4,
                        'vatCode'  => 3,
                    ),
                ),
            ),
            array(
                array(
                    array(
                        'description' => 'test',
                        'quantity'    => 1.4,
                        'vatCode'     => 3,
                    ),
                ),
            ),
            array(
                array(
                    array(
                        'title'    => 'test',
                        'price'    => 123,
                        'quantity' => 1.4,
                        'vatCode'  => 7,
                    ),
                ),
            ),
            array(
                array(
                    array(
                        'description' => 'test',
                        'price'       => 123,
                        'quantity'    => -1.4,
                    ),
                ),
            ),
            array(
                array(
                    array(
                        'title'   => 'test',
                        'price'   => 1,
                        'vatCode' => 7,
                    ),
                ),
            ),
        );
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     * @throws Exception
     */
    public function testSetReceiptEmail($options)
    {
        $builder = new CreatePaymentRequestBuilder();

        $builder->setReceiptItems($options['receiptItems']);
        $builder->setReceiptEmail($options['receiptEmail']);
        $instance = $builder->build($this->getRequiredData());

        if (empty($options['receiptItems'])) {
            self::assertNull($instance->getReceipt());
        } else {
            self::assertNotNull($instance->getReceipt());
            self::assertEquals($options['receiptEmail'], $instance->getReceipt()->getCustomer()->getEmail());
        }
    }

    /**
     * @dataProvider invalidEmailDataProvider
     * @expectedException InvalidArgumentException
     *
     * @param $value
     */
    public function testSetInvalidEmail($value)
    {
        $builder = new CreatePaymentRequestBuilder();
        $builder->setReceiptEmail($value);
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     * @throws Exception
     */
    public function testSetReceiptPhone($options)
    {
        $builder = new CreatePaymentRequestBuilder();

        $builder->setReceiptItems($options['receiptItems']);
        $builder->setReceiptEmail($options['receiptEmail']);
        $builder->setReceiptPhone($options['receiptPhone']);
        $instance = $builder->build($this->getRequiredData());

        if (empty($options['receiptItems'])) {
            self::assertNull($instance->getReceipt());
        } else {
            self::assertNotNull($instance->getReceipt());
            self::assertEquals($options['receiptPhone'], $instance->getReceipt()->getCustomer()->getPhone());
        }
    }

    /**
     * @dataProvider invalidPhoneDataProvider
     * @expectedException \InvalidArgumentException
     *
     * @param $value
     */
    public function testSetInvalidPhone($value)
    {
        $builder = new CreatePaymentRequestBuilder();
        $builder->setReceiptPhone($value);
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     * @throws Exception
     */
    public function testSetReceiptTaxSystemCode($options)
    {
        $builder = new CreatePaymentRequestBuilder();

        $builder->setReceiptItems($options['receiptItems']);
        $builder->setReceiptEmail($options['receiptEmail']);
        $builder->setTaxSystemCode($options['taxSystemCode']);
        $instance = $builder->build($this->getRequiredData());

        if (empty($options['receiptItems'])) {
            self::assertNull($instance->getReceipt());
        } else {
            self::assertNotNull($instance->getReceipt());
            self::assertEquals($options['taxSystemCode'], $instance->getReceipt()->getTaxSystemCode());
        }
    }

    /**
     * @dataProvider invalidVatIdDataProvider
     * @expectedException InvalidArgumentException
     *
     * @param $value
     */
    public function testSetInvalidTaxSystemId($value)
    {
        $builder = new CreatePaymentRequestBuilder();
        $builder->setTaxSystemCode($value);
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     * @throws Exception
     */
    public function testSetPaymentToken($options)
    {
        $builder = new CreatePaymentRequestBuilder();

        $instance = $builder->build($this->getRequiredData(null, 'paymentMethodId'));
        self::assertNull($instance->getPaymentToken());
        self::assertNull($instance->paymentToken);
        self::assertNull($instance->payment_token);

        if (empty($options['paymentToken'])) {
            $buildData = $this->getRequiredData(null, 'paymentMethodId');
        } else {
            $buildData = $this->getRequiredData('paymentToken');
        }

        $builder->setPaymentToken($options['paymentToken']);
        $instance = $builder->build($buildData);

        if (empty($options['paymentToken'])) {
            self::assertNull($instance->getPaymentToken());
            self::assertNull($instance->paymentToken);
            self::assertNull($instance->payment_token);
        } else {
            self::assertEquals($options['paymentToken'], $instance->getPaymentToken());
            self::assertEquals($options['paymentToken'], $instance->paymentToken);
            self::assertEquals($options['paymentToken'], $instance->payment_token);
        }
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     * @throws Exception
     */
    public function testSetPaymentMethodId($options)
    {
        $builder = new CreatePaymentRequestBuilder();

        $instance = $builder->build($this->getRequiredData());
        self::assertNull($instance->getPaymentMethodId());

        $builder->setPaymentMethodId($options['paymentMethodId']);
        $instance = $builder->build($this->getRequiredData(empty($options['paymentMethodId']) ? null : 'paymentToken'));

        if (empty($options['paymentMethodId'])) {
            self::assertNull($instance->getPaymentMethodId());
        } else {
            self::assertEquals($options['paymentMethodId'], $instance->getPaymentMethodId());
        }
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     * @throws Exception
     */
    public function testSetPaymentData($options)
    {
        $builder = new CreatePaymentRequestBuilder();

        $instance = $builder->build($this->getRequiredData());
        self::assertNull($instance->getPaymentMethodData());

        $builder->setPaymentMethodData($options['paymentMethodData']);
        $instance = $builder->build($this->getRequiredData(empty($options['paymentMethodId']) ? null : 'paymentToken'));

        if (empty($options['paymentMethodData'])) {
            self::assertNull($instance->getPaymentMethodData());
        } else {
            if (is_object($options['paymentMethodData'])) {
                self::assertSame($options['paymentMethodData'], $instance->getPaymentMethodData());
            } elseif (is_string($options['paymentMethodData'])) {
                self::assertEquals($options['paymentMethodData'], $instance->getPaymentMethodData()->getType());
            } else {
                self::assertEquals($options['paymentMethodData']['type'], $instance->getPaymentMethodData()->getType());
            }
        }

        if (is_array($options['paymentMethodData'])) {
            $builder = new CreatePaymentRequestBuilder();
            $builder->build($this->getRequiredData());
            $builder->setPaymentMethodData($options['paymentMethodData']['type'], $options['paymentMethodData']);
            $instance = $builder->build($this->getRequiredData(empty($options['paymentMethodId']) ? null : 'paymentToken'));
            self::assertEquals($options['paymentMethodData']['type'], $instance->getPaymentMethodData()->getType());
        }
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     * @throws Exception
     */
    public function testSetConfirmationAttributes($options)
    {
        $builder = new CreatePaymentRequestBuilder();

        $instance = $builder->build($this->getRequiredData());
        self::assertNull($instance->getConfirmation());

        $builder->setConfirmation($options['confirmation']);
        $instance = $builder->build($this->getRequiredData());

        if (empty($options['confirmation'])) {
            self::assertNull($instance->getConfirmation());
        } else {
            if (is_object($options['confirmation'])) {
                self::assertSame($options['confirmation'], $instance->getConfirmation());
            } elseif (is_string($options['confirmation'])) {
                self::assertEquals($options['confirmation'], $instance->getConfirmation()->getType());
            } else {
                self::assertEquals($options['confirmation']['type'], $instance->getConfirmation()->getType());
                self::assertEquals($options['confirmation']['locale'], $instance->getConfirmation()->getLocale());
            }
        }

        if (is_array($options['confirmation'])) {
            $builder = new CreatePaymentRequestBuilder();
            $builder->build($this->getRequiredData());
            $builder->setConfirmation($options['confirmation']['type'], $options['confirmation']);
            $instance = $builder->build($this->getRequiredData());
            self::assertEquals($options['confirmation']['type'], $instance->getConfirmation()->getType());
        }
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     * @throws Exception
     */
    public function testSetCreateRecurring($options)
    {
        $builder = new CreatePaymentRequestBuilder();

        $instance = $builder->build($this->getRequiredData());
        self::assertNull($instance->getSavePaymentMethod());

        $builder->setSavePaymentMethod($options['savePaymentMethod']);
        $instance = $builder->build($this->getRequiredData());

        if ($options['savePaymentMethod'] === null || $options['savePaymentMethod'] === '') {
            self::assertNull($instance->getSavePaymentMethod());
        } else {
            self::assertEquals($options['savePaymentMethod'], $instance->getSavePaymentMethod());
        }
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     * @throws Exception
     */
    public function testSetCapture($options)
    {
        $builder = new CreatePaymentRequestBuilder();

        $instance = $builder->build($this->getRequiredData());
        self::assertNull($instance->getCapture());

        $builder->setCapture($options['capture']);
        $instance = $builder->build($this->getRequiredData());

        if ($options['capture'] === null || $options['capture'] === '') {
            self::assertNull($instance->getCapture());
        } else {
            self::assertEquals($options['capture'], $instance->getCapture());
        }
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     * @throws Exception
     */
    public function testSetClientIp($options)
    {
        $builder = new CreatePaymentRequestBuilder();

        $instance = $builder->build($this->getRequiredData());
        self::assertNull($instance->getClientIp());

        $builder->setClientIp($options['clientIp']);
        $instance = $builder->build($this->getRequiredData());

        if (empty($options['clientIp'])) {
            self::assertNull($instance->getClientIp());
        } else {
            self::assertEquals($options['clientIp'], $instance->getClientIp());
        }
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     * @throws Exception
     */
    public function testSetMetadata($options)
    {
        $builder = new CreatePaymentRequestBuilder();

        $instance = $builder->build($this->getRequiredData());
        self::assertNull($instance->getMetadata());

        $builder->setMetadata($options['metadata']);
        $instance = $builder->build($this->getRequiredData());

        if (empty($options['metadata'])) {
            self::assertNull($instance->getMetadata());
        } else {
            self::assertEquals($options['metadata'], $instance->getMetadata()->toArray());
        }
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     * @throws Exception
     */
    public function testSetRecipient($options)
    {
        $recipient = new Recipient();
        $recipient->setAccountId($options['accountId']);
        $recipient->setGatewayId($options['gatewayId']);

        $builder = new CreatePaymentRequestBuilder();
        $builder->setRecipient($recipient);
        $instance = $builder->build($this->getRequiredData());

        self::assertEquals($recipient, $instance->getRecipient());

        $builder = new CreatePaymentRequestBuilder();
        $builder->setRecipient(array(
            'account_id' => $options['accountId'],
            'gateway_id' => $options['gatewayId'],
        ));
        $instance = $builder->build($this->getRequiredData());

        self::assertEquals($recipient, $instance->getRecipient());
    }

    /**
     * @dataProvider invalidRecipientDataProvider
     * @expectedException InvalidArgumentException
     *
     * @param mixed $value
     */
    public function testSetInvalidRecipient($value)
    {
        $builder = new CreatePaymentRequestBuilder();
        $builder->setRecipient($value);
    }

    public function invalidRecipientDataProvider()
    {
        return array(
            array(null),
            array(true),
            array(false),
            array(1),
            array(1.1),
            array('test'),
            array(new \stdClass()),
        );
    }

    /**
     * @throws Exception
     */
    public function testSetReceipt()
    {
        $receipt = array(
            'tax_system_code' => Random::int(1, 6),
            'customer' => array(
                'email' => Random::str(10),
                'phone' => Random::str(4, 15, '0123456789'),
            ),
            'items' => array(
                array(
                    'description'     => 'test',
                    'quantity'        => 123,
                    'amount'          => array(
                        'value'    => 321,
                        'currency' => 'USD',
                    ),
                    'vat_code'        => Random::int(1, 6),
                    'payment_subject' => PaymentSubject::COMMODITY,
                    'payment_mode'    => PaymentMode::PARTIAL_PREPAYMENT,
                ),
            ),
        );

        $builder = new CreatePaymentRequestBuilder();
        $builder->setReceipt($receipt);
        $instance = $builder->build($this->getRequiredData());

        self::assertEquals($receipt['tax_system_code'], $instance->getReceipt()->getTaxSystemCode());
        self::assertEquals($receipt['customer']['email'], $instance->getReceipt()->getCustomer()->getEmail());
        self::assertEquals($receipt['customer']['phone'], $instance->getReceipt()->getCustomer()->getPhone());
        self::assertEquals(1, count($instance->getReceipt()->getItems()));

        $receipt = $instance->getReceipt();

        $builder = new CreatePaymentRequestBuilder();
        $builder->setReceipt($instance->getReceipt());
        $instance = $builder->build($this->getRequiredData());

        self::assertEquals($receipt['tax_system_code'], $instance->getReceipt()->getTaxSystemCode());
        self::assertEquals($receipt['customer']['email'], $instance->getReceipt()->getCustomer()->getEmail());
        self::assertEquals($receipt['customer']['phone'], $instance->getReceipt()->getCustomer()->getPhone());
        self::assertEquals(1, count($instance->getReceipt()->getItems()));
    }

    /**
     * @dataProvider invalidReceiptDataProvider
     * @expectedException InvalidArgumentException
     *
     * @param mixed $value
     */
    public function testSetInvalidReceipt($value)
    {
        $builder = new CreatePaymentRequestBuilder();
        $builder->setReceipt($value);
    }

    public function invalidReceiptDataProvider()
    {
        return array(
            array(null),
            array(true),
            array(false),
            array(1),
            array(1.1),
            array('test'),
            array(new \stdClass()),
        );
    }

    /**
     * @return array
     * @throws Exception
     */
    public function validDataProvider()
    {
        $receiptItem = new ReceiptItem();
        $receiptItem->setPrice(new MonetaryAmount(1));
        $receiptItem->setQuantity(1);
        $receiptItem->setDescription('test');
        $receiptItem->setVatCode(3);
        $result               = array(
            array(
                array(
                    'accountId'         => Random::str(1, 32),
                    'gatewayId'         => Random::str(1, 32),
                    'recipient'         => null,
                    'description'       => null,
                    'amount'            => new MonetaryAmount(Random::int(1, 1000)),
                    'currency'          => Random::value(CurrencyCode::getValidValues()),
                    'receiptItems'      => array(),
                    'paymentToken'      => null,
                    'paymentMethodId'   => null,
                    'paymentMethodData' => null,
                    'confirmation'      => null,
                    'savePaymentMethod' => null,
                    'capture'           => null,
                    'clientIp'          => null,
                    'metadata'          => null,
                    'receiptEmail'      => null,
                    'receiptPhone'      => null,
                    'taxSystemCode'     => null,
                ),
            ),
            array(
                array(
                    'accountId'         => Random::str(1, 32),
                    'gatewayId'         => Random::str(1, 32),
                    'recipient'         => null,
                    'description'       => '',
                    'amount'            => new MonetaryAmount(Random::int(1, 1000)),
                    'currency'          => Random::value(CurrencyCode::getValidValues()),
                    'receiptItems'      => array(
                        array(
                            'title'          => 'test',
                            'quantity'       => mt_rand(1, 100),
                            'price'          => mt_rand(1, 100),
                            'vatCode'        => mt_rand(1, 6),
                            'paymentMode'    => PaymentMode::CREDIT_PAYMENT,
                            'paymentSubject' => PaymentSubject::ANOTHER,
                        ),
                        $receiptItem,
                    ),
                    'referenceId'       => '',
                    'paymentToken'      => '',
                    'paymentMethodId'   => '',
                    'paymentMethodData' => '',
                    'confirmation'      => '',
                    'savePaymentMethod' => '',
                    'capture'           => '',
                    'clientIp'          => '',
                    'metadata'          => array(),
                    'receiptEmail'      => Random::str(10, 32),
                    'receiptPhone'      => '',
                    'taxSystemCode'     => '',
                ),
            ),
        );
        $paymentMethodData    = array(
            new PaymentDataQiwi(),
            PaymentMethodType::BANK_CARD,
            array(
                'type' => PaymentMethodType::BANK_CARD,
            ),
        );
        $confirmationStatuses = array(
            new ConfirmationAttributesExternal(),
            ConfirmationType::EXTERNAL,
            array(
                'type' => ConfirmationType::EXTERNAL,
                'locale' => 'en_US',
            ),
            array(
                'type' => ConfirmationType::QR,
                'locale' => 'ru_RU',
            ),
        );
        for ($i = 0; $i < 10; $i++) {
            $request  = array(
                'accountId'         => uniqid(),
                'gatewayId'         => uniqid(),
                'recipient'         => new Recipient(),
                'description'       => uniqid(),
                'amount'            => mt_rand(1, 100000),
                'currency'          => CurrencyCode::RUB,
                'receiptItems'      => array(),
                'referenceId'       => uniqid(),
                'paymentToken'      => uniqid(),
                'paymentMethodId'   => uniqid(),
                'paymentMethodData' => isset($paymentMethodData[$i]) ? $paymentMethodData[$i] : null,
                'confirmation'      => isset($confirmationStatuses[$i]) ? $confirmationStatuses[$i] : null,
                'savePaymentMethod' => mt_rand(0, 1) ? true : false,
                'capture'           => mt_rand(0, 1) ? true : false,
                'clientIp'          => long2ip(mt_rand(0, pow(2, 32))),
                'metadata'          => array('test' => 'test'),
                'receiptEmail'      => Random::str(10),
                'receiptPhone'      => Random::str(10, '0123456789'),
                'taxSystemCode'     => Random::int(1, 6),
            );
            $result[] = array($request);
        }

        return $result;
    }

    /**
     * @return array
     */
    public function invalidAmountDataProvider()
    {
        return array(
            array(-1),
            array(true),
            array(false),
            array(new \stdClass()),
            array(0),
        );
    }

    /**
     * @return array
     */
    public function invalidEmailDataProvider()
    {
        return array(
            array(array()),
            array(true),
            array(false),
            array(new \stdClass()),
        );
    }

    /**
     * @return array
     * @throws Exception
     */
    public function invalidPhoneDataProvider()
    {
        return array(
            array(new \stdClass()),
            array(array()),
            array(true),
            array(false),
        );
    }

    /**
     * @return array
     * @throws Exception
     */
    public function invalidVatIdDataProvider()
    {
        return array(
            array(array()),
            array(true),
            array(false),
            array(new \stdClass()),
            array(0),
            array(7),
            array(Random::int(-100, -1)),
            array(Random::int(7, 100)),
        );
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     * @throws Exception
     */
    public function testSetDescription($options)
    {
        $builder = new CreatePaymentRequestBuilder();

        $builder->setDescription($options['description']);
        $instance = $builder->build($this->getRequiredData());

        if (empty($options['description'])) {
            self::assertNull($instance->getDescription());
        } else {
            self::assertEquals($options['description'], $instance->getDescription());
        }
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testSetInvalidTypeDescription()
    {
        $builder = new CreatePaymentRequestBuilder();
        $builder->setDescription(true);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testSetInvalidLengthDescription()
    {
        $builder     = new CreatePaymentRequestBuilder();
        $description = Random::str(Payment::MAX_LENGTH_DESCRIPTION + 1);
        $builder->setDescription($description);
    }

    /**
     * @dataProvider invalidVatIdDataProvider
     * @expectedException InvalidArgumentException
     *
     * @param $value
     */
    public function testSetInvalidAirline($value)
    {
        if (is_array($value)) {
            throw new \InvalidArgumentException();
        }
        $builder = new CreatePaymentRequestBuilder();
        $builder->setAirline($value);
    }
}