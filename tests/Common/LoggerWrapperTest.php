<?php

namespace Tests\YooKassa\Common;

use PHPUnit\Framework\TestCase;
use Psr\Log\LogLevel;
use YooKassa\Common\LoggerWrapper;
use YooKassa\Helpers\Random;

class LoggerWrapperTest extends TestCase
{
    public function testConstruct()
    {
        $logger = new LoggerWrapper(new ArrayLogger());
        self::assertNotNull($logger);
        $logger = new LoggerWrapper(function ($level, $message, $context) {});
        self::assertNotNull($logger);
    }

    /**
     * @dataProvider invalidLoggerDataProvider
     * @expectedException \Psr\Log\InvalidArgumentException
     * @param mixed $source
     */
    public function testInvalidConstruct($source)
    {
        new LoggerWrapper($source);
    }

    /**
     * @return array
     */
    public function invalidLoggerDataProvider()
    {
        return array(
            array(new \stdClass()),
            array(true),
            array(false),
            array(array()),
            array(1),
            array('test'),
        );
    }

    /**
     * @dataProvider validLoggerDataProvider
     * @param string $level
     * @param string $message
     * @param array $context
     */
    public function testLog($level, $message, $context)
    {
        $wrapped = new ArrayLogger();

        $instance = new LoggerWrapper($wrapped);
        $instance->log($level, $message, $context);
        $expected = array($level, $message, $context);
        self::assertEquals($expected, $wrapped->getLastLog());

        $wrapped = new ArrayLogger();
        $instance = new LoggerWrapper(function ($level, $message, $context) use($wrapped) {
            $wrapped->log($level, $message, $context);
        });
        $instance->log($level, $message, $context);
        $expected = array($level, $message, $context);
        self::assertEquals($expected, $wrapped->getLastLog());
    }

    /**
     * @dataProvider validLoggerDataProvider
     * @param string $notUsed
     * @param string $message
     * @param array $context
     */
    public function testLogMethods($notUsed, $message, $context)
    {
        $methodsMap = array(
            LogLevel::EMERGENCY => 'emergency',
            LogLevel::ALERT => 'alert',
            LogLevel::CRITICAL => 'critical',
            LogLevel::ERROR => 'error',
            LogLevel::WARNING => 'warning',
            LogLevel::NOTICE => 'notice',
            LogLevel::INFO => 'info',
            LogLevel::DEBUG => 'debug',
        );

        $wrapped = new ArrayLogger();
        $instance = new LoggerWrapper($wrapped);
        foreach ($methodsMap as $level => $method) {
            $instance->{$method} ($message, $context);
            $expected = array($level, $message, $context);
            self::assertEquals($expected, $wrapped->getLastLog());
        }
    }

    public function validLoggerDataProvider()
    {
        return array(
            array(LogLevel::EMERGENCY, Random::str(10, 20), array(Random::str(10, 20))),
            array(LogLevel::ALERT, Random::str(10, 20), array(Random::str(10, 20))),
            array(LogLevel::CRITICAL, Random::str(10, 20), array(Random::str(10, 20))),
            array(LogLevel::ERROR, Random::str(10, 20), array(Random::str(10, 20))),
            array(LogLevel::WARNING, Random::str(10, 20), array(Random::str(10, 20))),
            array(LogLevel::NOTICE, Random::str(10, 20), array(Random::str(10, 20))),
            array(LogLevel::INFO, Random::str(10, 20), array(Random::str(10, 20))),
            array(LogLevel::DEBUG, Random::str(10, 20), array(Random::str(10, 20))),
        );
    }
}

class ArrayLogger
{
    private $lastLog;

    public function log($level, $message, $context)
    {
        $this->lastLog = array($level, $message, $context);
    }

    public function getLastLog()
    {
        return $this->lastLog;
    }
}