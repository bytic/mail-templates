<?php

namespace Bytic\MailTemplates\Tests\Configuration;

use Bytic\MailTemplates\Configuration\Configuration;
use Bytic\MailTemplates\Resources\Templates\Ink\InkTemplate;
use Bytic\Phpqa\PHPUnit\TestCase;

class ConfigurableTest extends TestCase
{

    public function testConfiguration()
    {
        $template = InkTemplate::create();
        $configuration = $template->configuration();
        self::assertInstanceOf(Configuration::class, $configuration);
    }
}
