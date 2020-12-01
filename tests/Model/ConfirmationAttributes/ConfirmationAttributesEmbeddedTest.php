<?php

namespace Model\ConfirmationAttributes;


use Tests\YooKassa\Model\ConfirmationAttributes\AbstractConfirmationAttributesTest;
use YooKassa\Model\ConfirmationAttributes\AbstractConfirmationAttributes;
use YooKassa\Model\ConfirmationAttributes\ConfirmationAttributesEmbedded;
use YooKassa\Model\ConfirmationType;

class ConfirmationAttributesEmbeddedTest extends AbstractConfirmationAttributesTest
{

    /**
     * @return AbstractConfirmationAttributes
     */
    protected function getTestInstance()
    {
        return new ConfirmationAttributesEmbedded();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return ConfirmationType::EMBEDDED;
    }
}