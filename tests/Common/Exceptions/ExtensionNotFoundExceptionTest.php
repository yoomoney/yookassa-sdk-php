<?php


namespace Tests\YooKassa\Common\Exceptions;

use PHPUnit\Framework\TestCase;
use YooKassa\Common\Exceptions\ExtensionNotFoundException;

class ExtensionNotFoundExceptionTest extends TestCase
{
    /**
     * @param string $name
     * @param int $code
     * @return ExtensionNotFoundException
     */
    protected function getTestInstance($name, $code = 0)
    {
        return new ExtensionNotFoundException($name, $code);
    }

    /**
     * @dataProvider messageDataProvider
     * @param $name
     * @param $excepted
     */
    public function testGetMessage($name, $excepted)
    {
        $instance = $this->getTestInstance($name);

        self::assertEquals($excepted, $instance->getMessage());
    }

    public function messageDataProvider()
    {
        return array(
            array("json", "json extension is not loaded!"),
            array("curl", "curl extension is not loaded!"),
            array("gd",   "gd extension is not loaded!"),
        );
    }
}