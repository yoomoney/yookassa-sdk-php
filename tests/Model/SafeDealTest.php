<?php

namespace Tests\YooKassa\Model;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\Deal\DealBalanceAmount;
use YooKassa\Model\Deal\DealStatus;
use YooKassa\Model\Deal\DealType;
use YooKassa\Model\Deal\FeeMoment;
use YooKassa\Model\Metadata;
use YooKassa\Model\SafeDeal;

class SafeDealTest extends TestCase
{

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetId($options)
    {
        $instance = new SafeDeal();

        self::assertNull($instance->getId());
        self::assertNull($instance->id);

        $instance->setId($options['id']);
        self::assertEquals($options['id'], $instance->getId());
        self::assertEquals($options['id'], $instance->id);

        $instance = new SafeDeal();
        $instance->id = $options['id'];
        self::assertEquals($options['id'], $instance->getId());
        self::assertEquals($options['id'], $instance->id);
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetType($options)
    {
        $instance = new SafeDeal();

        $instance->setType($options['type']);
        self::assertEquals($options['type'], $instance->getType());
        self::assertEquals($options['type'], $instance->type);

        $instance = new SafeDeal();
        $instance->type = $options['type'];
        self::assertEquals($options['type'], $instance->getType());
        self::assertEquals($options['type'], $instance->type);
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetStatus($options)
    {
        $instance = new SafeDeal();

        self::assertNull($instance->getStatus());
        self::assertNull($instance->status);

        $instance->setStatus($options['status']);
        self::assertEquals($options['status'], $instance->getStatus());
        self::assertEquals($options['status'], $instance->status);

        $instance = new SafeDeal();
        $instance->status = $options['status'];
        self::assertEquals($options['status'], $instance->getStatus());
        self::assertEquals($options['status'], $instance->status);
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetBalance($options)
    {
        $instance = new SafeDeal();

        self::assertNull($instance->getBalance());
        self::assertNull($instance->balance);

        $instance->setBalance($options['balance']);
        self::assertSame($options['balance'], $instance->getBalance());
        self::assertSame($options['balance'], $instance->balance);

        $instance = new SafeDeal();
        $instance->balance = $options['balance'];
        self::assertSame($options['balance'], $instance->getBalance());
        self::assertSame($options['balance'], $instance->balance);
    }

    /**
     * @dataProvider invalidDataProvider
     * @param $value
     */
    public function testSetInvalidBalance($value)
    {
        if (empty($value['balance'])) {
            self::setExpectedException('YooKassa\\Common\\Exceptions\\EmptyPropertyValueException');
            $instance = new SafeDeal();
            $instance->setBalance($value['balance']);
        } elseif (!is_array($value['balance']) && !($value['balance'] instanceof DealBalanceAmount)) {
            self::setExpectedException('YooKassa\\Common\\Exceptions\\InvalidPropertyValueTypeException');
            $instance = new SafeDeal();
            $instance->setBalance($value['balance']);
        }
    }

    /**
     * @dataProvider invalidDataProvider
     * @param $value
     */
    public function testSetterInvalidBalance($value)
    {
        if (empty($value['balance'])) {
            self::setExpectedException('YooKassa\\Common\\Exceptions\\EmptyPropertyValueException');
            $instance = new SafeDeal();
            $instance->balance = $value['balance'];
        } elseif (!is_array($value['balance']) && !($value['balance'] instanceof DealBalanceAmount)) {
            self::setExpectedException('YooKassa\\Common\\Exceptions\\InvalidPropertyValueTypeException');
            $instance = new SafeDeal();
            $instance->balance = $value['balance'];
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetPayoutBalance($options)
    {
        $instance = new SafeDeal();

        self::assertNull($instance->getPayoutBalance());
        self::assertNull($instance->payout_balance);
        self::assertNull($instance->payoutBalance);

        $instance->setPayoutBalance($options['payout_balance']);
        self::assertSame($options['payout_balance'], $instance->getPayoutBalance());
        self::assertSame($options['payout_balance'], $instance->payout_balance);
        self::assertSame($options['payout_balance'], $instance->payoutBalance);

        $instance = new SafeDeal();
        $instance->payout_balance = $options['payout_balance'];
        self::assertSame($options['payout_balance'], $instance->getPayoutBalance());
        self::assertSame($options['payout_balance'], $instance->payout_balance);
        self::assertSame($options['payout_balance'], $instance->payoutBalance);

        $instance = new SafeDeal();
        $instance->payoutBalance = $options['payout_balance'];
        self::assertSame($options['payout_balance'], $instance->getPayoutBalance());
        self::assertSame($options['payout_balance'], $instance->payout_balance);
        self::assertSame($options['payout_balance'], $instance->payoutBalance);
    }

    /**
     * @dataProvider invalidDataProvider
     * @param $value
     */
    public function testSetInvalidPayoutBalance($value)
    {
        if (empty($value['payout_balance'])) {
            self::setExpectedException('YooKassa\\Common\\Exceptions\\EmptyPropertyValueException');
            $instance = new SafeDeal();
            $instance->setPayoutBalance($value['payout_balance']);
        } elseif (!is_array($value['payout_balance']) && !($value['payout_balance'] instanceof DealBalanceAmount)) {
            self::setExpectedException('YooKassa\\Common\\Exceptions\\InvalidPropertyValueTypeException');
            $instance = new SafeDeal();
            $instance->setPayoutBalance($value['payout_balance']);
        }
    }

    /**
     * @dataProvider invalidDataProvider
     * @param $value
     */
    public function testSetterInvalidPayoutBalance($value)
    {
        if (empty($value['payout_balance'])) {
            self::setExpectedException('YooKassa\\Common\\Exceptions\\EmptyPropertyValueException');
            $instance = new SafeDeal();
            $instance->payout_balance = $value['payout_balance'];
        } elseif (!is_array($value['payout_balance']) && !($value['payout_balance'] instanceof DealBalanceAmount)) {
            self::setExpectedException('YooKassa\\Common\\Exceptions\\InvalidPropertyValueTypeException');
            $instance = new SafeDeal();
            $instance->payout_balance = $value['payout_balance'];
        }
    }

    /**
     * @dataProvider invalidMetaDataProvider
     * @param $value
     */
    public function testSetInvalidMetadata($value)
    {
        if (!is_array($value) && !($value instanceof Metadata)) {
            self::setExpectedException('YooKassa\\Common\\Exceptions\\InvalidPropertyValueTypeException');
            $instance = new SafeDeal();
            $instance->setMetadata($value);
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetDescription($options)
    {
        $instance = new SafeDeal();
        $instance->setDescription($options['description']);

        if (empty($options['description']) && ($options['description'] !== '0')) {
            self::assertNull($instance->getDescription());
        } else {
            self::assertEquals($options['description'], $instance->getDescription());
        }
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testSetInvalidTypeDescription()
    {
        $instance = new SafeDeal();
        $instance->setDescription(true);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testSetInvalidLengthDescription()
    {
        $instance = new SafeDeal();
        $description = Random::str(SafeDeal::MAX_LENGTH_DESCRIPTION + 1);
        $instance->setDescription($description);
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetFeeMoment($options)
    {
        $instance = new SafeDeal();

        self::assertNull($instance->getFeeMoment());
        self::assertNull($instance->fee_moment);
        self::assertNull($instance->feeMoment);

        $instance->setFeeMoment($options['fee_moment']);
        self::assertEquals($options['fee_moment'], $instance->getFeeMoment());
        self::assertEquals($options['fee_moment'], $instance->fee_moment);
        self::assertEquals($options['fee_moment'], $instance->feeMoment);

        $instance = new SafeDeal();
        $instance->fee_moment = $options['fee_moment'];
        self::assertEquals($options['fee_moment'], $instance->getFeeMoment());
        self::assertEquals($options['fee_moment'], $instance->fee_moment);
        self::assertEquals($options['fee_moment'], $instance->feeMoment);

        $instance = new SafeDeal();
        $instance->feeMoment = $options['fee_moment'];
        self::assertEquals($options['fee_moment'], $instance->getFeeMoment());
        self::assertEquals($options['fee_moment'], $instance->fee_moment);
        self::assertEquals($options['fee_moment'], $instance->feeMoment);
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetCreatedAt($options)
    {
        $instance = new SafeDeal();

        self::assertNull($instance->getCreatedAt());
        self::assertNull($instance->createdAt);
        self::assertNull($instance->created_at);

        $instance->setCreatedAt($options['created_at']);
        self::assertSame($options['created_at'], $instance->getCreatedAt()->format(YOOKASSA_DATE));
        self::assertSame($options['created_at'], $instance->createdAt->format(YOOKASSA_DATE));
        self::assertSame($options['created_at'], $instance->created_at->format(YOOKASSA_DATE));

        $instance = new SafeDeal();
        $instance->createdAt = $options['created_at'];
        self::assertSame($options['created_at'], $instance->getCreatedAt()->format(YOOKASSA_DATE));
        self::assertSame($options['created_at'], $instance->createdAt->format(YOOKASSA_DATE));
        self::assertSame($options['created_at'], $instance->created_at->format(YOOKASSA_DATE));

        $instance = new SafeDeal();
        $instance->created_at = $options['created_at'];
        self::assertSame($options['created_at'], $instance->getCreatedAt()->format(YOOKASSA_DATE));
        self::assertSame($options['created_at'], $instance->createdAt->format(YOOKASSA_DATE));
        self::assertSame($options['created_at'], $instance->created_at->format(YOOKASSA_DATE));
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidCreatedAt($value)
    {
        $instance = new SafeDeal();
        $instance->setCreatedAt($value['created_at']);
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidCreatedAt($value)
    {
        $instance = new SafeDeal();
        $instance->createdAt = $value['created_at'];
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidCreated_at($value)
    {
        $instance = new SafeDeal();
        $instance->created_at = $value['created_at'];
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetExpiresAt($options)
    {
        $instance = new SafeDeal();

        self::assertNull($instance->getExpiresAt());
        self::assertNull($instance->expiresAt);
        self::assertNull($instance->expires_at);

        $instance->setExpiresAt($options['expires_at']);
        if ($options['expires_at'] === null || $options['expires_at'] === '') {
            self::assertNull($instance->getExpiresAt());
            self::assertNull($instance->expiresAt);
            self::assertNull($instance->expires_at);
        } else {
            self::assertSame($options['expires_at'], $instance->getExpiresAt()->format(YOOKASSA_DATE));
            self::assertSame($options['expires_at'], $instance->expiresAt->format(YOOKASSA_DATE));
            self::assertSame($options['expires_at'], $instance->expires_at->format(YOOKASSA_DATE));
        }

        $instance = new SafeDeal();
        $instance->expiresAt = $options['expires_at'];
        if ($options['expires_at'] === null || $options['expires_at'] === '') {
            self::assertNull($instance->getExpiresAt());
            self::assertNull($instance->expiresAt);
            self::assertNull($instance->expires_at);
        } else {
            self::assertSame($options['expires_at'], $instance->getExpiresAt()->format(YOOKASSA_DATE));
            self::assertSame($options['expires_at'], $instance->expiresAt->format(YOOKASSA_DATE));
            self::assertSame($options['expires_at'], $instance->expires_at->format(YOOKASSA_DATE));
        }

        $instance = new SafeDeal();
        $instance->expires_at = $options['expires_at'];
        if ($options['expires_at'] === null || $options['expires_at'] === '') {
            self::assertNull($instance->getExpiresAt());
            self::assertNull($instance->expiresAt);
            self::assertNull($instance->expires_at);
        } else {
            self::assertSame($options['expires_at'], $instance->getExpiresAt()->format(YOOKASSA_DATE));
            self::assertSame($options['expires_at'], $instance->expiresAt->format(YOOKASSA_DATE));
            self::assertSame($options['expires_at'], $instance->expires_at->format(YOOKASSA_DATE));
        }
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidExpiresAt($value)
    {
        $instance = new SafeDeal();
        $instance->setExpiresAt($value['expires_at']);
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidExpiresAt($value)
    {
        $instance = new SafeDeal();
        $instance->expiresAt = $value['expires_at'];
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidExpires_at($value)
    {
        $instance = new SafeDeal();
        $instance->expires_at = $value['expires_at'];
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetTest($options)
    {
        $instance = new SafeDeal();

        self::assertNull($instance->getTest());
        self::assertNull($instance->test);

        $instance->setTest($options['test']);
        self::assertSame($options['test'], $instance->getTest());
        self::assertSame($options['test'], $instance->test);

        $instance = new SafeDeal();
        $instance->test = $options['test'];
        self::assertSame($options['test'], $instance->getTest());
        self::assertSame($options['test'], $instance->test);
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidTest($value)
    {
        $instance = new SafeDeal();
        $instance->setTest($value['test']);
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidTest($value)
    {
        $instance = new SafeDeal();
        $instance->test = $value['test'];
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetMetadata($options)
    {
        $instance = new SafeDeal();

        self::assertNull($instance->getMetadata());
        self::assertNull($instance->metadata);

        $instance->setMetadata($options['metadata']);
        self::assertSame($options['metadata'], $instance->getMetadata());
        self::assertSame($options['metadata'], $instance->metadata);

        $instance = new SafeDeal();
        $instance->metadata = $options['metadata'];
        self::assertSame($options['metadata'], $instance->getMetadata());
        self::assertSame($options['metadata'], $instance->metadata);
    }

    /**
     * @dataProvider fromArrayDataProvider
     * @param array $source
     * @param SafeDeal $expected
     */
    public function testFromArray($source, $expected)
    {
        $deal = new SafeDeal($source);
        $dealArray = $expected->toArray();

        if (!empty($source)) {
            foreach ($source as $property => $value) {
                self::assertEquals($value, $dealArray[$property]);
            }
        }
    }

    public function validDataProvider()
    {
        $result = array();
        for ($i = 0; $i < 10; $i++) {
            $payment = array(
                'id' => Random::str(36),
                'type' => Random::value(DealType::getValidValues()),
                'fee_moment' => Random::value(FeeMoment::getValidValues()),
                'status' => Random::value(DealStatus::getValidValues()),
                'balance' => new DealBalanceAmount(Random::int(1, 10000), 'RUB'),
                'payout_balance' => new DealBalanceAmount(Random::int(1, 10000), 'RUB'),
                'description' => ($i == 0 ? null : ($i == 1 ? '' : ($i == 2 ? Random::str(SafeDeal::MAX_LENGTH_DESCRIPTION)
                    : Random::str(1, SafeDeal::MAX_LENGTH_DESCRIPTION)))),
                'created_at' => date(YOOKASSA_DATE, mt_rand(1000000, time())),
                'expires_at' => date(YOOKASSA_DATE, mt_rand(1111111, time())),
                'test' => (bool)($i % 2),
                'metadata' => (($i % 2) ? null : new Metadata()),
            );
            $result[] = array($payment);
        }
        return $result;
    }

    public function invalidDataProvider()
    {
        $result = array(
            array(
                array(
                    'id' => null,
                    'status' => null,
                    'balance' => null,
                    'payout_balance' => null,
                    'test' => null,
                    'created_at' => null,
                    'expires_at' => array(),
                    'metadata' => new \stdClass(),
                )
            ),
            array(
                array(
                    'id' => '',
                    'status' => '',
                    'balance' => '',
                    'payout_balance' => '',
                    'test' => '',
                    'created_at' => array(),
                    'expires_at' => '23423-234-234',
                    'metadata' => true,
                ),
            ),
        );
        $invalidData = array(
            null,
            '',
            new \stdClass(),
            'invalid_value',
            new Metadata(),
            Random::str(5, 10),
        );
        for ($i = 0; $i < 6; $i++) {
            $payment = array(
                'id' => Random::str($i < 5 ? mt_rand(1, 35) : mt_rand(37, 64)),
                'status' => $invalidData[$i],
                'balance' => $invalidData[$i],
                'payout_balance' => $invalidData[$i],
                'test' => $invalidData[$i],
                'created_at' => $invalidData[$i],
                'expires_at' => $invalidData[$i]
            );
            $result[] = array($payment);
        }
        return $result;
    }

    public function fromArrayDataProvider()
    {
        $customer = new SafeDeal();
        $customer->setId('dl-285e5ee7-0022-5000-8000-01516a44b147');
        $customer->setStatus(DealStatus::OPENED);
        $customer->setBalance(new DealBalanceAmount(1000, 'RUB'));
        $customer->setPayoutBalance(new DealBalanceAmount(1000, 'RUB'));
        $customer->setDescription('Выплата по заказу №17');
        $customer->setCreatedAt(new \DateTime(date(YOOKASSA_DATE)));
        $customer->setExpiresAt(date(YOOKASSA_DATE));
        $customer->setTest(true);
        $customer->setMetadata(array('order_id' => 'Заказ №17'));

        return array(
            array(
                array(
                    'id' => 'dl-285e5ee7-0022-5000-8000-01516a44b147',
                    'type' => DealType::SAFE_DEAL,
                    'status' => DealStatus::OPENED,
                    'balance' => array('value' => 1000, 'currency' => 'RUB'),
                    'payout_balance' => array('value' => 1000, 'currency' => 'RUB'),
                    'description' => 'Выплата по заказу №17',
                    'created_at' => date(YOOKASSA_DATE),
                    'expires_at' => date(YOOKASSA_DATE),
                    'test' => true,
                    'metadata' => array(
                        'order_id' => 'Заказ №17'
                    ),
                ),
                $customer
            ),
        );
    }

    public function invalidMetaDataProvider()
    {
        return array(
            array(new \stdClass()),
            array('invalid_value'),
            array(0),
            array(3234),
            array(true),
            array(false),
            array(0.43),
        );
    }
}
