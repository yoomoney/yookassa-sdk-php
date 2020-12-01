<?php

namespace Tests\YooKassa\Common\Exceptions;

use YooKassa\Common\Exceptions\ResponseProcessingException;

class ResponseProcessingExceptionTest extends ApiExceptionTest
{
    public function getTestInstance($message = '', $code = 0, $responseHeaders = array(), $responseBody = null)
    {
        return new ResponseProcessingException($responseHeaders, $responseBody);
    }

    public function expectedHttpCode()
    {
        return ResponseProcessingException::HTTP_CODE;
    }

    /**
     * @dataProvider descriptionDataProvider
     * @param string $body
     */
    public function testDescription($body)
    {
        $instance = $this->getTestInstance('', 0, array(), $body);
        $tmp = json_decode($body, true);
        if (empty($tmp['description'])) {
            self::assertEquals('', $instance->getMessage());
        } else {
            self::assertEquals($tmp['description'].'.', $instance->getMessage());
        }
    }

    public function descriptionDataProvider()
    {
        return array(
            array('{}'),
            array('{"description":"test"}'),
            array('{"description":"У попа была собака"}'),
        );
    }

    /**
     * @dataProvider retryAfterDataProvider
     * @param string $body
     */
    public function testRetryAfter($body)
    {
        $instance = $this->getTestInstance('', 0, array(), $body);
        $tmp = json_decode($body, true);
        if (empty($tmp['retry_after'])) {
            self::assertNull($instance->retryAfter);
        } else {
            self::assertEquals($tmp['retry_after'], $instance->retryAfter);
        }
    }

    public function retryAfterDataProvider()
    {
        return array(
            array('{}'),
            array('{"retry_after":-20}'),
            array('{"retry_after":123}'),
        );
    }

    /**
     * @dataProvider typeDataProvider
     * @param string $body
     */
    public function testType($body)
    {
        $instance = $this->getTestInstance('', 0, array(), $body);
        $tmp = json_decode($body, true);
        if (empty($tmp['type'])) {
            self::assertNull($instance->type);
        } else {
            self::assertEquals($tmp['type'], $instance->type);
        }
    }

    public function typeDataProvider()
    {
        return array(
            array('{}'),
            array('{"type":"server_error"}'),
            array('{"type":"error"}'),
        );
    }

    /**
     * @dataProvider messageDataProvider
     * @param $body
     */
    public function testMessage($body)
    {
        $instance = $this->getTestInstance('', 0, array(), $body);

        $tmp = json_decode($body, true);
        $message = '';
        if (!empty($tmp['description'])) {
            $message = $tmp['description'].'.';
        }
        self::assertEquals($message, $instance->getMessage());

        if (empty($tmp['retry_after'])) {
            self::assertNull($instance->retryAfter);
        } else {
            self::assertEquals($tmp['retry_after'], $instance->retryAfter);
        }
        if (empty($tmp['type'])) {
            self::assertNull($instance->type);
        } else {
            self::assertEquals($tmp['type'], $instance->type);
        }
    }

    public function messageDataProvider()
    {
        return array(
            array('{}'),
            array('{"code":"server_error","description":"Internal server error"}'),
            array('{"code":"server_error","description":"Invalid parameter value","parameter":"shop_id"}'),
            array('{"code":"server_error","description":"Invalid parameter value","parameter":"shop_id","type":"test"}'),
            array('{"code":"server_error","description":"Invalid parameter value","parameter":"shop_id","retry_after":333}'),
        );
    }

    public function testExceptionCode()
    {
        $instance = $this->getTestInstance();
        self::assertEquals($this->expectedHttpCode(), $instance->getCode());
    }
}
