<?php

namespace Tests\YooKassa\Common\Exceptions;

use YooKassa\Common\Exceptions\EmptyPropertyValueException;

class EmptyPropertyValueExceptionTest extends InvalidPropertyExceptionTest
{
    /**
     * @param string $message
     * @param string $property
     * @return EmptyPropertyValueException
     */
    protected function getTestInstance($message, $property)
    {
        return new EmptyPropertyValueException($message, 0, $property);
    }
}
