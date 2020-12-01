<?php

namespace Tests\YooKassa\Model\ConfirmationAttributes;

use YooKassa\Model\ConfirmationAttributes\ConfirmationAttributesExternal;
use YooKassa\Model\ConfirmationType;

class ConfirmationAttributesExternalTest extends AbstractConfirmationAttributesTest
{
    /**
     * @return ConfirmationAttributesExternal
     */
    protected function getTestInstance()
    {
        return new ConfirmationAttributesExternal();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return ConfirmationType::EXTERNAL;
    }
}