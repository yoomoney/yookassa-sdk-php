<?php

namespace Tests\YooKassa\Model\Confirmation;

use YooKassa\Model\Confirmation\ConfirmationDeepLink;
use YooKassa\Model\ConfirmationType;

class ConfirmationDeepLinkTest extends AbstractConfirmationTest
{
    /**
     * @return ConfirmationDeepLink
     */
    protected function getTestInstance()
    {
        return new ConfirmationDeepLink();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return ConfirmationType::DEEPLINK;
    }
}