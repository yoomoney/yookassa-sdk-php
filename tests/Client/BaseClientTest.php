<?php

namespace Tests\YooKassa\Client;

use YooKassa\Client;
use YooKassa\Client\ApiClientInterface;
use YooKassa\Client\BaseClient;
use PHPUnit\Framework\TestCase;
use YooKassa\Client\CurlClient;
use YooKassa\Common\LoggerWrapper;
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
}
