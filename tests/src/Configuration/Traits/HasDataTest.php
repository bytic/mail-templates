<?php

namespace Bytic\MailTemplates\Tests\Configuration\Traits;

use Bytic\MailTemplates\Configuration\Configuration;
use Bytic\Phpqa\PHPUnit\TestCase;

class HasDataTest extends TestCase
{
    public function test_get_path()
    {
        $config = new Configuration(['name' => 'test', 'multi' => ['array' => 'test']]);
        self::assertSame('test', $config->get('name'));
        self::assertSame(['array' => 'test'], $config->get('multi'));
        self::assertSame('test', $config->get('multi.array'));
    }
}
