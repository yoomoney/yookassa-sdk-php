<?php

namespace Tests\YooKassa\Common;

use PHPUnit\Framework\TestCase;

class LegacyJsonSerializableInterfaceTest extends TestCase
{
    public function testInterface()
    {
        require_once __DIR__ . '/../../lib/Common/legacy_json_serializable.php';

        $reflection = new \ReflectionClass('JsonSerializable');
        self::assertTrue($reflection->isInterface());
        if (version_compare('5.4', PHP_VERSION) < 0) {
            self::assertTrue($reflection->isInternal());
        } else {
            self::assertTrue($reflection->isUserDefined());
        }
    }
}