<?php

namespace Tests\YooKassa\Client;

use YooKassa\Client\ApiClientInterface;
use YooKassa\Client\BaseClient;
use PHPUnit\Framework\TestCase;
use YooKassa\Client\CurlClient;
use YooKassa\Helpers\Config\ConfigurationLoader;
use YooKassa\Helpers\Random;

class BaseClientTest extends TestCase
{
    /**
     * @param null $apiClient
     * @param null $configLoader
     * @return BaseClient
     */
    protected static function getInstance($apiClient = null, $configLoader = null)
    {
        return new BaseClient($apiClient, $configLoader);
    }

    /**
     * @dataProvider validDataProvider
     * @param $apiClient
     * @param $configLoader
     */
    public function testSetAuth($apiClient, $configLoader)
    {
        $instance = $this->getInstance($apiClient, $configLoader);
        $instance->setAuth('shopId', 'shopPassword');
        self::assertTrue($instance->getApiClient() instanceof ApiClientInterface);
    }

    /**
     * @dataProvider validDataProvider
     * @param $apiClient
     * @param $configLoader
     */
    public function testSetAuthToken($apiClient, $configLoader)
    {
        $instance = $this->getInstance($apiClient, $configLoader);
        $instance->setAuthToken(Random::str(36));
        self::assertTrue($instance->getApiClient() instanceof ApiClientInterface);
    }

    /**
     * @dataProvider validConfigurationDataProvider
     * @param $value
     */
    public function testSetApiClient($value)
    {
        $instance = $this->getInstance();

        $client = new CurlClient();
        $client->setConnectionTimeout($value['connectionTimeout']);
        $client->setTimeout($value['timeout']);
        $client->setProxy($value['proxy']);
        $client->setConfig($value['config']);
        $client->setShopId($value['shopId']);
        $client->setShopPassword($value['shopPassword']);

        $instance->setApiClient($client);
        self::assertEquals($client->getConfig(), $instance->getConfig());
        self::assertTrue($instance->getApiClient() instanceof ApiClientInterface);
    }

    /**
     * @dataProvider validDataProvider
     * @param $apiClient
     * @param $configLoader
     */
    public function testGetSetConfig($apiClient, $configLoader)
    {
        $config = array('url' => 'test:url');

        $instance = $this->getInstance($apiClient, $configLoader);
        $instance->setConfig($config);

        $client = new CurlClient();
        $client->setConfig($config);
        self::assertEquals($client->getConfig(), $instance->getConfig());
    }

    /**
     * @dataProvider validIPv4DataProvider
     * @param $ip
     */
    public function testIsIPInTrustedRangeValid($ip)
    {
        $instance = $this->getInstance();

        $checkResult = $instance->isNotificationIPTrusted($ip);

        self::assertEquals(true, $checkResult);
    }

    /**
     * @dataProvider inValidIPv4DataProvider
     * @param $ip
     */
    public function testIsIPInTrustedRangeInValid($ip)
    {
        $instance = $this->getInstance();

        $checkResult = $instance->isNotificationIPTrusted($ip);

        self::assertEquals(false, $checkResult);
    }

    public function validDataProvider()
    {
        return array(
            array(
                'apiClient'  => null,
                'configLoader' => null
            ),
            array(
                'apiClient'  => new CurlClient(),
                'configLoader' => new ConfigurationLoader()
            )
        );
    }

    public function validConfigurationDataProvider()
    {
        return array(
            array(
                array(
                    'connectionTimeout' => 10,
                    'timeout' => 10,
                    'proxy' => 'proxy_url:8889',
                    'config' => array('url' => 'test:url'),
                    'shopId' => 'shopId',
                    'shopPassword' => 'shopPassword'
                )
            ),
            array(
                array(
                    'connectionTimeout' => null,
                    'timeout' => null,
                    'proxy' => null,
                    'config' => null,
                    'shopId' => null,
                    'shopPassword' => null
                )
            )
        );
    }

    public function validIPv4DataProvider()
    {
        return array(
            array('185.71.76.' . rand(1, 31)),
            array('185.71.77.' . rand(1, 31)),
            array('77.75.153.' . rand(1, 127)),
            array('77.75.154.' . rand(128, 254)),
            array('77.75.156.11'),
            array('77.75.156.35'),
            array('2a02:5180:0000:2669:0000:0000:0000:7d35'),
            array('2a02:5180:0000:2655:0000:0000:7d35:0000'),
            array('2a02:5180:0000:1533:0000:7d35:0000:0000'),
            array('2a02:5180:0000:2669:7d35:0000:0000:0000'),
        );
    }

    public function inValidIPv4DataProvider()
    {
        return array(
            array('185.71.76.32'),
            array('185.71.77.32'),
            array('185.71.153.128'),
            array('185.71.154.' . rand(1, 128)),
            array('127.0.0.1'),
            array('77.75.156.12'),
            array('192.168.1.1'),
            array('8701:746f:d4f1:d39d:9dcc:6ea2:875e:7d35'),
            array('::1'),
        );
    }
}
