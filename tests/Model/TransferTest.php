<?php

namespace Tests\YooKassa\Model;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\AmountInterface;
use YooKassa\Model\CurrencyCode;
use YooKassa\Model\MonetaryAmount;
use YooKassa\Model\Transfer;
use YooKassa\Model\TransferStatus;

class TransferTest extends TestCase
{
    /**
     * @return Transfer
     */
    protected function getTestInstance()
    {
        return new Transfer();
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param array $value
     */
    public function testFromArray($value)
    {
        $instance = $this->getTestInstance();

        self::assertNull($instance->getAmount());
        self::assertNull($instance->getPlatformFeeAmount());
        self::assertNull($instance->getAccountId());
        self::assertNull($instance->getStatus());
        self::assertNull($instance->amount);
        self::assertNull($instance->platform_fee_amount);
        self::assertNull($instance->accountId);
        self::assertNull($instance->status);
        self::assertNull($instance->metadata);
        self::assertFalse($instance->hasAmount());

        $instance->fromArray($value);

        self::assertSame($value['account_id'], $instance->getAccountId());
        self::assertSame($value['account_id'], $instance->accountId);
        self::assertSame($value['amount'], $instance->getAmount()->jsonSerialize());
        self::assertSame($value['amount'], $instance->amount->jsonSerialize());
        self::assertSame($value['platform_fee_amount'], $instance->getPlatformFeeAmount()->jsonSerialize());
        self::assertSame($value['platform_fee_amount'], $instance->platform_fee_amount->jsonSerialize());
        self::assertSame($value['status'], $instance->getStatus());
        self::assertSame($value['status'], $instance->status);
        if (!empty($value['metadata'])) {
            self::assertSame($value['metadata'], $instance->getMetadata()->toArray());
            self::assertSame($value['metadata'], $instance->metadata->toArray());

            self::assertSame($value, $instance->jsonSerialize());
        }

        self::assertTrue($instance instanceof Transfer);
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param array $value
     */
    public function testGetSetAccountId($value)
    {
        $instance = $this->getTestInstance();

        self::assertNull($instance->getAccountId());
        self::assertNull($instance->accountId);
        $instance->setAccountId($value['account_id']);
        self::assertSame($value['account_id'], $instance->getAccountId());
        self::assertSame($value['account_id'], $instance->accountId);
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param AmountInterface $value
     */
    public function testSetterAccountId($value)
    {
        $instance = $this->getTestInstance();
        $instance->accountId = $value['account_id'];
        self::assertSame($value['account_id'], $instance->getAccountId());
        self::assertSame($value['account_id'], $instance->accountId);
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function validDataProvider()
    {
        $result = array(
            array(

                    'account_id' => '123',
                    'amount' => array(
                        'value' => '10.00',
                        'currency' => 'RUB'
                    ),
                    'platform_fee_amount' => array(
                        'value' => '10.00',
                        'currency' => 'RUB'
                    ),
                    'status' => TransferStatus::PENDING,
                    'metadata' => null

            )
        );
        for ($i = 0; $i < 10; $i++) {
            $result[] = array(
                'account_id' => (string)Random::int(11111111, 99999999),
                'amount' => array(
                    'value' => sprintf('%.2f', round(Random::float(0.1, 99.99), 2)),
                    'currency' => Random::value(CurrencyCode::getValidValues())
                ),
                'platform_fee_amount' => array(
                    'value' => sprintf('%.2f', round(Random::float(0.1, 99.99), 2)),
                    'currency' => Random::value(CurrencyCode::getValidValues())
                ),
                'status' => Random::value(TransferStatus::getValidValues()),
                'metadata' => array(
                    Random::str(2, 16) => Random::str(2, 512),
                )
            );
        }
        return array($result);
    }

    /**
     * @dataProvider invalidAccountIdProvider
     *
     * @expectedException \InvalidArgumentException
     *
     * @param mixed $value
     */
    public function testGetSetInvalidAccountId($value)
    {
        $this->getTestInstance()->setAccountId($value);
    }

    /**
     * @dataProvider invalidAccountIdProvider
     *
     * @expectedException \InvalidArgumentException
     *
     * @param $value
     */
    public function testSetterInvalidAccountId($value)
    {
        $this->getTestInstance()->accountId = $value;
    }

    /**
     * @dataProvider invalidMetadataProvider
     *
     * @expectedException \InvalidArgumentException
     *
     * @param $value
     */
    public function testInvalidMetadata($value)
    {
        $instance = $this->getTestInstance();
        $instance->setMetadata($value);
    }

    /**
     * @return array
     */
    public function invalidAccountIdProvider()
    {
        return array(
            array(null),
            array(''),
            array(array()),
            array(new \stdClass()),
        );
    }

    /**
     * @dataProvider validAmountDataProvider
     *
     * @param $value
     */
    public function testGetSetAmount($value)
    {
        $instance = $this->getTestInstance();

        self::assertNull($instance->getAmount());
        self::assertNull($instance->amount);
        $instance->setAmount($value);
        self::assertSame($value, $instance->getAmount());
        self::assertSame($value, $instance->amount);
    }

    /**
     * @dataProvider validAmountDataProvider
     *
     * @param AmountInterface $value
     */
    public function testSetterAmount($value)
    {
        $instance = $this->getTestInstance();
        $instance->amount = $value;
        self::assertSame($value, $instance->getAmount());
        self::assertSame($value, $instance->amount);
    }

    /**
     * @dataProvider validAmountDataProvider
     *
     * @param $value
     */
    public function testGetSetPlatformFeeAmount($value)
    {
        $instance = $this->getTestInstance();

        self::assertNull($instance->getPlatformFeeAmount());
        self::assertNull($instance->platform_fee_amount);
        $instance->setPlatformFeeAmount($value);
        self::assertSame($value, $instance->getPlatformFeeAmount());
        self::assertSame($value, $instance->platform_fee_amount);
    }

    /**
     * @dataProvider validAmountDataProvider
     *
     * @param AmountInterface $value
     */
    public function testSetterPlatformFeeAmount($value)
    {
        $instance = $this->getTestInstance();
        $instance->platform_fee_amount = $value;
        self::assertSame($value, $instance->getPlatformFeeAmount());
        self::assertSame($value, $instance->platform_fee_amount);
    }

    /**
     * @return \YooKassa\Model\MonetaryAmount[][]
     * @throws \Exception
     */
    public function validAmountDataProvider()
    {
        return array(
            array(
                new MonetaryAmount(
                    Random::int(1, 100),
                    Random::value(CurrencyCode::getValidValues())
                ),
            ),
            array(
                new MonetaryAmount(),
            ),
        );
    }

    /**
     * @dataProvider invalidAmountDataProvider
     *
     * @expectedException \InvalidArgumentException
     *
     * @param $value
     */
    public function testSetInvalidAmount($value)
    {
        $this->getTestInstance()->setAmount($value);
    }

    /**
     * @dataProvider invalidAmountDataProvider
     *
     * @expectedException \InvalidArgumentException
     *
     * @param $value
     */
    public function testSetterInvalidAmount($value)
    {
        $this->getTestInstance()->amount = $value;
    }

    /**
     * @dataProvider invalidAmountDataProvider
     *
     * @expectedException \InvalidArgumentException
     *
     * @param $value
     */
    public function testSetInvalidPlatformFeeAmount($value)
    {
        $this->getTestInstance()->setPlatformFeeAmount($value);
    }

    /**
     * @dataProvider invalidAmountDataProvider
     *
     * @expectedException \InvalidArgumentException
     *
     * @param $value
     */
    public function testSetterInvalidPlatformFeeAmount($value)
    {
        $this->getTestInstance()->platform_fee_amount = $value;
    }

    /**
     * @return array
     */
    public function invalidAmountDataProvider()
    {
        return array(
            array(null),
            array(''),
            array(1.0),
            array(1),
            array(true),
            array(false),
            array(new \stdClass()),
        );
    }

    /**
     * @dataProvider validStatusProvider
     *
     * @param $value
     */
    public function testSetStatus($value)
    {
        $instance = $this->getTestInstance();
        self::assertNull($instance->getStatus());
        $instance->setStatus($value);
        self::assertEquals($value, $instance->getStatus());
    }

    /**
     * @dataProvider validStatusProvider
     *
     * @param $value
     */
    public function testSetterStatus($value)
    {
        $instance = $this->getTestInstance();
        self::assertNull($instance->status);
        $instance->status = $value;
        self::assertEquals($value, $instance->status);
        self::assertEquals($value, $instance->getStatus());
    }

    /**
     * @return array[]
     */
    public function validStatusProvider()
    {
        return array(
            array(TransferStatus::SUCCEEDED),
            array(TransferStatus::CANCELED),
            array(TransferStatus::WAITING_FOR_CAPTURE),
            array(TransferStatus::PENDING),
        );
    }

    /**
     * @dataProvider invalidStatusProvider
     *
     * @expectedException \InvalidArgumentException
     *
     * @param mixed $value
     */
    public function testGetSetInvalidStatus($value)
    {
        $this->getTestInstance()->setStatus($value);
    }

    /**
     * @dataProvider invalidStatusProvider
     *
     * @expectedException \InvalidArgumentException
     *
     * @param $value
     */
    public function testSetterInvalidStatus($value)
    {
        $this->getTestInstance()->status = $value;
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function invalidStatusProvider()
    {
        return array(
            array(null),
            array(''),
            array(Random::str(15, 100)),
            array(new \stdClass()),
        );
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function invalidMetadataProvider()
    {
        return array(
            array(new \stdClass()),
        );
    }
}