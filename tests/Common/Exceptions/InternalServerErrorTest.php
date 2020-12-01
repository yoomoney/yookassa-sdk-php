<?php

namespace Tests\YooKassa\Common\Exceptions;

use YooKassa\Common\Exceptions\InternalServerError;

class InternalServerErrorTest extends AbstractApiRequestExceptionTest
{
    public function getTestInstance($message = '', $code = 0, $responseHeaders = array(), $responseBody = null)
    {
        return new InternalServerError($responseHeaders, $responseBody);
    }

    public function expectedHttpCode()
    {
        return InternalServerError::HTTP_CODE;
    }
}
