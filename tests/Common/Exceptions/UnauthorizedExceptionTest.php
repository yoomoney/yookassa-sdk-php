<?php

namespace Tests\YooKassa\Common\Exceptions;

use YooKassa\Common\Exceptions\UnauthorizedException;

class UnauthorizedExceptionTest extends AbstractApiRequestExceptionTest
{
    public function getTestInstance($message = '', $code = 0, $responseHeaders = array(), $responseBody = null)
    {
        return new UnauthorizedException($responseHeaders, $responseBody);
    }

    public function expectedHttpCode()
    {
        return UnauthorizedException::HTTP_CODE;
    }
}
