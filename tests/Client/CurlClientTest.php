<?php

namespace Tests\YooKassa\Client;

use PHPUnit\Framework\TestCase;
use YooKassa\Client\CurlClient;
use YooKassa\Common\HttpVerb;

class CurlClientTest extends TestCase
{
    public function testConnectionTimeout()
    {
        $client = new CurlClient();
        $client->setConnectionTimeout(10);
        $this->assertEquals(10, $client->getConnectionTimeout());
    }

    public function testTimeout()
    {
        $client = new CurlClient();
        $client->setTimeout(10);
        $this->assertEquals(10, $client->getTimeout());
    }

    public function testProxy()
    {
        $client = new CurlClient();
        $client->setProxy('proxy_url:8889');
        $this->assertEquals('proxy_url:8889', $client->getProxy());
    }

    /**
     * @dataProvider curlErrorCodeProvider
     * @expectedException \YooKassa\Common\Exceptions\ApiConnectionException
     */
    public function testHandleCurlError($error, $errn)
    {
        $client    = new CurlClient();
        $reflector = new \ReflectionClass('\YooKassa\Client\CurlClient');
        $method    = $reflector->getMethod('handleCurlError');
        $method->setAccessible(true);
        $method->invokeArgs($client, array($error, $errn));
    }

    public function testConfig()
    {
        $config = array('url' => 'test:url');
        $client = new CurlClient();
        $client->setConfig($config);
        $this->assertEquals($config, $client->getConfig());
    }

    public function testCloseConnection()
    {
        $wrapped        = new \Tests\YooKassa\Client\ArrayLogger();
        $logger         = new \YooKassa\Common\LoggerWrapper($wrapped);
        $curlClientMock = $this->getMockBuilder('YooKassa\Client\CurlClient')
                               ->setMethods(array('closeCurlConnection', 'sendRequest'))
                               ->getMock();
        $curlClientMock->setLogger($logger);
        $curlClientMock->setConfig(array('url' => 'test:url'));
        $curlClientMock->setKeepAlive(false);
        $curlClientMock->setShopId(123);
        $curlClientMock->setShopPassword(234);
        $curlClientMock->expects($this->once())->method('sendRequest')->willReturn(array(
            array('Header-Name' => 'HeaderValue'),
            '{body:sample}',
            array('http_code' => 200),
        ));
        $curlClientMock->expects($this->once())->method('closeCurlConnection');
        $curlClientMock->call('', HttpVerb::HEAD, array('queryParam' => 'value'), 'testBodyValue',
            array('testHeader' => 'testValue'));
    }

    public function testAuthorizeException()
    {
        $this->setExpectedException('YooKassa\Common\Exceptions\AuthorizeException');
        $client = new CurlClient();
        $client->call('', HttpVerb::HEAD, array('queryParam' => 'value'), array('httpBody' => 'testValue'),
            array('testHeader' => 'testValue'));
    }

    public function curlErrorCodeProvider()
    {
        return array(
            array('error message', CURLE_SSL_CACERT),
            array('error message', CURLE_COULDNT_CONNECT),
            array('error message', 0),
        );
    }
}
