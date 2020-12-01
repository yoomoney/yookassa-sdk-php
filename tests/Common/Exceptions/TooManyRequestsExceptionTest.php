<?php

namespace Tests\YooKassa\Common\Exceptions;

use YooKassa\Common\Exceptions\TooManyRequestsException;

class TooManyRequestsExceptionTest extends AbstractApiRequestExceptionTest
{
    public function getTestInstance($message = '', $code = 0, $responseHeaders = array(), $responseBody = null)
    {
        return new TooManyRequestsException($responseHeaders, $responseBody);
    }

    public function expectedHttpCode()
    {
        return TooManyRequestsException::HTTP_CODE;
    }
}
