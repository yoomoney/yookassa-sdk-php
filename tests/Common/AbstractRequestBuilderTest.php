<?php

namespace Tests\YooKassa\Common;

use PHPUnit\Framework\TestCase;
use YooKassa\Common\AbstractRequest;
use YooKassa\Common\AbstractRequestBuilder;
use YooKassa\Common\Exceptions\InvalidRequestException;

class AbstractRequestBuilderTest extends TestCase
{
    public function testBuild()
    {
        $builder = new TestAbstractRequestBuilder();
        try {
            $builder->build(array());
        } catch (InvalidRequestException $e) {
            $request = $builder->build(array(
                'isValid' => true,
            ));
            self::assertTrue($request->isValid());

            $mess = 'test message';
            try {
                $builder->build(array(
                    'throwException' => new \Exception($mess),
                ));
            } catch (\Exception $e) {
                self::assertEquals($mess, $e->getPrevious()->getMessage());
                return;
            }
            self::fail('Exception not thrown in setThrowException method');
            return;
        }
        self::fail('Exception not thrown in build method');
    }

    public function testSetOptions()
    {
        $builder = new TestAbstractRequestBuilder();

        $builder->setOptions(array());
        try {
            $builder->build();
        } catch (InvalidRequestException $e) {
            $builder->setOptions(array(
                'is_valid' => true,
            ));
            self::assertTrue($builder->build()->isValid());

            try {
                $builder->setOptions('test');
            } catch (\Exception $e) {
                self::assertTrue($e instanceof \InvalidArgumentException);
                return;
            }
            self::fail('Exception not thrown in setOptions method');
            return;
        }
        self::fail('Exception not thrown in build method');
    }
}

class TestAbstractRequestBuilder extends AbstractRequestBuilder
{
    /**
     * Инициализирует пустой запрос
     * @return TestAbstractRequestClass Инстанс запроса, который будем собирать
     */
    protected function initCurrentObject()
    {
        return new TestAbstractRequestClass();
    }

    public function setIsValid($value)
    {
        $this->currentObject->setIsValid($value);
        return $this;
    }

    /**
     * @param \Exception $e
     * @return TestAbstractRequestBuilder
     * @throws \Exception
     */
    public function setThrowException(\Exception $e)
    {
        $this->currentObject->setThrowException($e);
        return $this;
    }
}

class TestAbstractRequestClass extends AbstractRequest
{
    private $valid = false;

    /**
     * @var \Exception|null
     */
    private $exception = null;

    /**
     * @param \Exception $e
     * @throws \Exception
     */
    public function setThrowException(\Exception $e)
    {
        $this->exception = $e;
    }

    /**
     * @param bool $value
     */
    public function setIsValid($value)
    {
        $this->valid = $value ? true : false;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return $this->valid;
    }

    /**
     * Валидирует текущий запрос, проверяет все ли нужные свойства установлены
     * @return bool True если запрос валиден, false если нет
     */
    public function validate()
    {
        if ($this->exception !== null) {
            $this->setValidationError($this->exception->getMessage());
            throw $this->exception;
        }
        return $this->valid;
    }
}