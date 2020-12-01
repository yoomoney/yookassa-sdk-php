<?php

namespace Tests\YooKassa\Helpers\Config;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Config\ConfigurationLoader;

class ConfigurationLoaderTest extends TestCase
{
    /**
     * @dataProvider validDataProvider
     * @param $fileName
     */
    public function testLoad($fileName)
    {
        $loader = new ConfigurationLoader();
        $loader->load($fileName);
        if (empty($fileName)) {
            $fileName = __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "configuration.json";
        }
        $data = file_get_contents($fileName);
        self::assertEquals(json_decode($data, true), $loader->getConfig());
    }

    public function validDataProvider()
    {
        return array(
            array(null),
            array(''),
            array(__DIR__ . DIRECTORY_SEPARATOR . 'test_config.json'),
        );
    }
}