<?php

namespace Bytic\MailTemplates\Tests\Configuration\Traits;

use Bytic\MailTemplates\Configuration\Configuration;
use Bytic\Phpqa\PHPUnit\TestCase;

class HasFooterLinksTest extends TestCase
{
    public function test_hasFooterLinks()
    {
        $config = new Configuration();
        self::assertFalse($config->hasFooterLinks());

        $config->addFooterLink('https://www.facebook.com/');
        self::assertTrue($config->hasFooterLinks());
    }

    public function test_setFooterLinks_from_data()
    {
        $config = new Configuration();
        self::assertFalse($config->hasFooterLinks());

        $config->fill(['footer' => ['links' => ['href' => 'https://www.facebook.com/']]]);
        self::assertTrue($config->hasFooterLinks());
    }
}
