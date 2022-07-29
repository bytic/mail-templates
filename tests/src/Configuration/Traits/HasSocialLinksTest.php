<?php

namespace Bytic\MailTemplates\Tests\Configuration\Traits;

use Bytic\MailTemplates\Configuration\Configuration;
use Bytic\Phpqa\PHPUnit\TestCase;

class HasSocialLinksTest extends TestCase
{
    public function test_hasSocialLinks()
    {
        $config = new Configuration();
        self::assertFalse($config->hasSocialLinks());

        $config->addSocialLink('https://www.facebook.com/');
        self::assertTrue($config->hasSocialLinks());
    }
}
