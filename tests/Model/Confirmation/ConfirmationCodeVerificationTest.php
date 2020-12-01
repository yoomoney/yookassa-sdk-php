<?php

namespace Tests\YooKassa\Model\Confirmation;

use YooKassa\Model\Confirmation\ConfirmationCodeVerification;
use YooKassa\Model\ConfirmationType;

class ConfirmationCodeVerificationTest extends AbstractConfirmationTest
{
    /**
     * @return ConfirmationCodeVerification
     */
    protected function getTestInstance()
    {
        return new ConfirmationCodeVerification();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return ConfirmationType::CODE_VERIFICATION;
    }
}