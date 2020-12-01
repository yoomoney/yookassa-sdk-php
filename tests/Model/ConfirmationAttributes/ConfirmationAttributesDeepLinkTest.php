<?php

namespace Tests\YooKassa\Model\ConfirmationAttributes;

use YooKassa\Model\ConfirmationAttributes\ConfirmationAttributesDeepLink;
use YooKassa\Model\ConfirmationType;

class ConfirmationAttributesDeepLinkTest extends AbstractConfirmationAttributesTest
{
    /**
     * @return ConfirmationAttributesDeepLink
     */
    protected function getTestInstance()
    {
        return new ConfirmationAttributesDeepLink();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return ConfirmationType::DEEPLINK;
    }
}