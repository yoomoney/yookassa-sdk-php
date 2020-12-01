<?php

namespace Tests\YooKassa\Common\Exceptions;

use YooKassa\Common\Exceptions\BadApiRequestException;

class BadApiRequestExceptionTest extends AbstractApiRequestExceptionTest
{
    public function getTestInstance($message = '', $code = 0, $responseHeaders = array(), $responseBody = null)
    {
        return new BadApiRequestException($responseHeaders, $responseBody);
    }

    public function expectedHttpCode()
    {
        return BadApiRequestException::HTTP_CODE;
    }
}
