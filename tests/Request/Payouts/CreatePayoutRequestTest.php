<?php

namespace Tests\YooKassa\Request\Payouts;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\Deal\PayoutDealInfo;
use YooKassa\Model\Metadata;
use YooKassa\Model\MonetaryAmount;
use YooKassa\Model\Payout;
use YooKassa\Request\Payouts\CreatePayoutRequest;
use YooKassa\Request\Payouts\CreatePayoutRequestBuilder;
use YooKassa\Request\Payouts\PayoutDestinationData\PayoutDestinationDataBankCard;
use YooKassa\Request\Payouts\PayoutDestinationData\PayoutDestinationDataYooMoney;

class CreatePayoutRequestTest extends TestCase
{
    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testAmount($options)
    {
        $instance = new CreatePayoutRequest();

        self::assertNull($instance->getAmount());
        self::assertNull($instance->amount);

        $instance->setAmount($options['amount']);

        self::assertSame($options['amount'], $instance->getAmount());
        self::assertSame($options['amount'], $instance->amount);
    }

    /**
     * @dataProvider invalidAmountDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidAmountToken($value)
    {
        $instance = new CreatePayoutRequest();
        $instance->setAmount($value);
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testPayoutToken($options)
    {
        $instance = new CreatePayoutRequest();

        self::assertFalse($instance->hasPayoutToken());
        self::assertNull($instance->getPayoutToken());
        self::assertNull($instance->payoutToken);
        self::assertNull($instance->payout_token);

        $instance->setPayoutToken($options['payoutToken']);
        if (empty($options['payoutToken'])) {
            self::assertFalse($instance->hasPayoutToken());
            self::assertNull($instance->getPayoutToken());
            self::assertNull($instance->payoutToken);
            self::assertNull($instance->payout_token);
        } else {
            self::assertTrue($instance->hasPayoutToken());
            self::assertSame($options['payoutToken'], $instance->getPayoutToken());
            self::assertSame($options['payoutToken'], $instance->payoutToken);
            self::assertSame($options['payoutToken'], $instance->payout_token);
        }

        $instance->setPayoutToken(null);
        self::assertFalse($instance->hasPayoutToken());
        self::assertNull($instance->getPayoutToken());
        self::assertNull($instance->payoutToken);

        $instance->payoutToken = $options['payoutToken'];
        if (empty($options['payoutToken'])) {
            self::assertFalse($instance->hasPayoutToken());
            self::assertNull($instance->getPayoutToken());
            self::assertNull($instance->payoutToken);
            self::assertNull($instance->payout_token);
        } else {
            self::assertTrue($instance->hasPayoutToken());
            self::assertSame($options['payoutToken'], $instance->getPayoutToken());
            self::assertSame($options['payoutToken'], $instance->payoutToken);
            self::assertSame($options['payoutToken'], $instance->payout_token);
        }

        $instance->payoutToken = null;
        self::assertFalse($instance->hasPayoutToken());
        self::assertNull($instance->getPayoutToken());
        self::assertNull($instance->payoutToken);

        $instance->payout_token = $options['payoutToken'];
        if (empty($options['payoutToken'])) {
            self::assertFalse($instance->hasPayoutToken());
            self::assertNull($instance->getPayoutToken());
            self::assertNull($instance->payoutToken);
            self::assertNull($instance->payout_token);
        } else {
            self::assertTrue($instance->hasPayoutToken());
            self::assertSame($options['payoutToken'], $instance->getPayoutToken());
            self::assertSame($options['payoutToken'], $instance->payoutToken);
            self::assertSame($options['payoutToken'], $instance->payout_token);
        }
    }

    /**
     * @dataProvider invalidPayoutTokenDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidPayoutToken($value)
    {
        $instance = new CreatePayoutRequest();
        $instance->setPayoutToken($value);
    }

    /**
     * @dataProvider invalidPayoutTokenDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidPayoutToken($value)
    {
        $instance = new CreatePayoutRequest();
        $instance->payoutToken = $value;
    }

    /**
     * @dataProvider invalidPayoutTokenDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidPayout_token($value)
    {
        $instance = new CreatePayoutRequest();
        $instance->payout_token = $value;
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testPayoutDestinationData($options)
    {
        $instance = new CreatePayoutRequest();

        self::assertFalse($instance->hasPayoutDestinationData());
        self::assertNull($instance->getPayoutDestinationData());
        self::assertNull($instance->payoutDestinationData);
        self::assertNull($instance->payout_destination_data);

        $instance->setPayoutDestinationData($options['payoutDestinationData']);
        if (empty($options['payoutDestinationData'])) {
            self::assertFalse($instance->hasPayoutDestinationData());
            self::assertNull($instance->getPayoutDestinationData());
            self::assertNull($instance->payoutDestinationData);
            self::assertNull($instance->payout_destination_data);
        } else {
            self::assertTrue($instance->hasPayoutDestinationData());
            self::assertSame($options['payoutDestinationData'], $instance->getPayoutDestinationData());
            self::assertSame($options['payoutDestinationData'], $instance->payoutDestinationData);
            self::assertSame($options['payoutDestinationData'], $instance->payout_destination_data);
        }

        $instance->setPayoutDestinationData(null);
        self::assertFalse($instance->hasPayoutDestinationData());
        self::assertNull($instance->getPayoutDestinationData());
        self::assertNull($instance->payoutDestinationData);
        self::assertNull($instance->payout_destination_data);

        $instance->payoutDestinationData = $options['payoutDestinationData'];
        if (empty($options['payoutDestinationData'])) {
            self::assertFalse($instance->hasPayoutDestinationData());
            self::assertNull($instance->getPayoutDestinationData());
            self::assertNull($instance->payoutDestinationData);
            self::assertNull($instance->payout_destination_data);
        } else {
            self::assertTrue($instance->hasPayoutDestinationData());
            self::assertSame($options['payoutDestinationData'], $instance->getPayoutDestinationData());
            self::assertSame($options['payoutDestinationData'], $instance->payoutDestinationData);
            self::assertSame($options['payoutDestinationData'], $instance->payout_destination_data);
        }
    }

    /**
     * @dataProvider invalidPayoutDestinationDataDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidPayoutDestinationData($value)
    {
        $instance = new CreatePayoutRequest();
        $instance->setPayoutDestinationData($value);
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testDescription($options)
    {
        $instance = new CreatePayoutRequest();

        self::assertFalse($instance->hasDescription());
        self::assertNull($instance->getDescription());
        self::assertNull($instance->description);

        $expected = $options['description'];

        $instance->setDescription($options['description']);
        if (empty($options['description'])) {
            self::assertFalse($instance->hasDescription());
            self::assertNull($instance->getDescription());
            self::assertNull($instance->description);
        } else {
            self::assertTrue($instance->hasDescription());
            self::assertSame($expected, $instance->getDescription());
            self::assertSame($expected, $instance->description);
        }

        $instance->setDescription(null);
        self::assertFalse($instance->hasDescription());
        self::assertNull($instance->getDescription());
        self::assertNull($instance->description);

        $instance->description = $options['description'];
        if (empty($options['description'])) {
            self::assertFalse($instance->hasDescription());
            self::assertNull($instance->getDescription());
            self::assertNull($instance->description);
        } else {
            self::assertTrue($instance->hasDescription());
            self::assertSame($expected, $instance->getDescription());
            self::assertSame($expected, $instance->description);
        }
    }

    /**
     * @dataProvider invalidDescriptionDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidDescription($value)
    {
        $instance = new CreatePayoutRequest();
        $instance->setDescription($value);
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testDeal($options)
    {
        $instance = new CreatePayoutRequest();

        self::assertFalse($instance->hasDeal());
        self::assertNull($instance->getDeal());
        self::assertNull($instance->deal);

        $expected = $options['deal'];
        if ($expected instanceof PayoutDealInfo) {
            $expected = $expected->toArray();
        }

        $instance->setDeal($options['deal']);
        if (empty($options['deal'])) {
            self::assertFalse($instance->hasDeal());
            self::assertNull($instance->getDeal());
            self::assertNull($instance->deal);
        } else {
            self::assertTrue($instance->hasDeal());
            self::assertSame($expected, $instance->getDeal()->toArray());
            self::assertSame($expected, $instance->deal->toArray());
        }

        $instance->setDeal(null);
        self::assertFalse($instance->hasDeal());
        self::assertNull($instance->getDeal());
        self::assertNull($instance->deal);

        $instance->deal = $options['deal'];
        if (empty($options['deal'])) {
            self::assertFalse($instance->hasDeal());
            self::assertNull($instance->getDeal());
            self::assertNull($instance->deal);
        } else {
            self::assertTrue($instance->hasDeal());
            self::assertSame($expected, $instance->getDeal()->toArray());
            self::assertSame($expected, $instance->deal->toArray());
        }
    }

    /**
     * @dataProvider invalidDealDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidDeal($value)
    {
        $instance = new CreatePayoutRequest();
        $instance->setDeal($value);
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testMetadata($options)
    {
        $instance = new CreatePayoutRequest();

        self::assertFalse($instance->hasMetadata());
        self::assertNull($instance->getMetadata());
        self::assertNull($instance->metadata);

        $expected = $options['metadata'];
        if ($expected instanceof Metadata) {
            $expected = $expected->toArray();
        }

        $instance->setMetadata($options['metadata']);
        if (empty($options['metadata'])) {
            self::assertFalse($instance->hasMetadata());
            self::assertNull($instance->getMetadata());
            self::assertNull($instance->metadata);
        } else {
            self::assertTrue($instance->hasMetadata());
            self::assertSame($expected, $instance->getMetadata()->toArray());
            self::assertSame($expected, $instance->metadata->toArray());
        }

        $instance->setMetadata(null);
        self::assertFalse($instance->hasMetadata());
        self::assertNull($instance->getMetadata());
        self::assertNull($instance->metadata);

        $instance->metadata = $options['metadata'];
        if (empty($options['metadata'])) {
            self::assertFalse($instance->hasMetadata());
            self::assertNull($instance->getMetadata());
            self::assertNull($instance->metadata);
        } else {
            self::assertTrue($instance->hasMetadata());
            self::assertSame($expected, $instance->getMetadata()->toArray());
            self::assertSame($expected, $instance->metadata->toArray());
        }
    }

    /**
     * @dataProvider invalidMetadataDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidMetadata($value)
    {
        $instance = new CreatePayoutRequest();
        $instance->setMetadata($value);
    }

    public function testValidate()
    {
        $instance = new CreatePayoutRequest();

        self::assertFalse($instance->validate());

        $amount = new MonetaryAmount();
        $instance->setAmount($amount);
        self::assertFalse($instance->validate());

        $instance->setAmount(new MonetaryAmount(10));
        self::assertFalse($instance->validate());

        $instance->setPayoutToken(null);
        self::assertFalse($instance->validate());
        $instance->setDescription('test');
        self::assertFalse($instance->validate());
        $instance->setDeal(new PayoutDealInfo());
        self::assertFalse($instance->validate());
        $instance->setAmount(new MonetaryAmount());
        self::assertFalse($instance->validate());

        $instance->setPayoutToken(Random::str(10));
        $instance->setPayoutDestinationData(new PayoutDestinationDataBankCard());
        self::assertFalse($instance->validate());
        $instance->setPayoutToken(null);
        self::assertTrue($instance->validate());
    }

    public function testBuilder()
    {
        $builder = CreatePayoutRequest::builder();
        self::assertTrue($builder instanceof CreatePayoutRequestBuilder);
    }

    public function validDataProvider()
    {
        $metadata = new Metadata();
        $metadata->test = 'test';
        $result = array(
            array(
                array(
                    'amount' => new MonetaryAmount(Random::int(1, 1000000)),
                    'payoutToken' => null,
                    'payoutDestinationData' => null,
                    'metadata' => null,
                    'description' => null,
                    'deal' => null,
                ),
            ),
            array(
                array(
                    'amount' => new MonetaryAmount(Random::int(1, 1000000)),
                    'payoutToken' => '',
                    'payoutDestinationData' => '',
                    'metadata' => array(),
                    'description' => '',
                    'deal' => '',
                ),
            ),
        );
        for ($i = 0; $i < 10; $i++) {
            $request = array(
                'amount' => new MonetaryAmount(Random::int(1, 1000000)),
                'payoutToken' => uniqid(),
                'payoutDestinationData' => new PayoutDestinationDataYooMoney(),
                'metadata' => ($i % 2) ? $metadata : array('test' => 'test'),
                'description' => Random::str(5, 128),
                'deal' => ($i % 2) ? new PayoutDealInfo(array('id' => Random::str(36, 50))) : array('id' => Random::str(36, 50)),
            );
            $result[] = array($request);
        }
        return $result;
    }

    public function invalidAmountDataProvider()
    {
        return array(
            array(null),
            array(''),
            array(false),
            array(true),
            array(new \stdClass()),
        );
    }

    public function invalidPayoutTokenDataProvider()
    {
        return array(
            array(false),
            array(true),
            array(new \stdClass()),
            array(array()),
        );
    }

    public function invalidPayoutDestinationDataDataProvider()
    {
        return array(
            array(array()),
            array(false),
            array(true),
            array(1),
            array(Random::str(10)),
            array(new \stdClass()),
        );
    }

    public function invalidMetadataDataProvider()
    {
        return array(
            array(false),
            array(true),
            array(1),
            array(Random::str(10)),
        );
    }

    public function invalidDescriptionDataProvider()
    {
        return array(
            array(false),
            array(true),
            array(new \stdClass()),
            array(Random::str(Payout::MAX_LENGTH_DESCRIPTION + 1)),
        );
    }

    public function invalidDealDataProvider()
    {
        return array(
            array(false),
            array(true),
            array(new \stdClass()),
            array(Random::str(10)),
        );
    }

}