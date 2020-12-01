<?php

namespace Tests\YooKassa\Common\Exceptions;

use PHPUnit\Framework\TestCase;
use YooKassa\Common\Exceptions\ApiException;

class ApiExceptionTest extends TestCase
{
    public function getTestInstance($message = '', $code = 0, $responseHeaders = array(), $responseBody = null)
    {
        return new ApiException($message, $code, $responseHeaders, $responseBody);
    }

    /**
     * @dataProvider responseHeadersDataProvider
     * @param array $headers
     */
    public function testGetResponseHeaders($headers)
    {
        $instance = $this->getTestInstance('', 0, $headers);
        self::assertEquals($headers, $instance->getResponseHeaders());
    }

    public function responseHeadersDataProvider()
    {
        return array(
            array(
                array(),
            ),
            array(
                array('HTTP/1.1 200 Ok'),
            ),
            array(
                array(
                    'HTTP/1.1 200 Ok',
                    'Content-length: 0',
                ),
            ),
            array(
                array(
                    'HTTP/1.1 200 Ok',
                    'Content-length: 0',
                    'Connection: close',
                ),
            ),
        );
    }

    /**
     * @dataProvider responseBodyDataProvider
     * @param string $body
     */
    public function testGetResponseBody($body)
    {
        $instance = $this->getTestInstance('', 0, array(), $body);
        self::assertEquals($body, $instance->getResponseBody());
    }

    public function responseBodyDataProvider()
    {
        return array(
            array(
                '',
            ),
            array(
                '{"success":true}',
            ),
            array(
                '<html></html>',
            ),
        );
    }
}
