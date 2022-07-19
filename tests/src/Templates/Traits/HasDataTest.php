<?php

namespace Bytic\MailTemplates\Tests\Templates\Traits;

use Bytic\MailTemplates\Configuration\Configuration;
use Bytic\MailTemplates\Resources\Templates\Ink\InkTemplate;
use Bytic\MailTemplates\Templates\Traits\HasData;
use PHPUnit\Framework\TestCase;

class HasDataTest extends TestCase
{

    public function test_buildViewData_has_configuration()
    {
        $template = new InkTemplate();
        $data = $template->buildViewData();
        self::assertArrayHasKey('configuration', $data);
        self::assertInstanceOf(Configuration::class, $data['configuration']);
    }
}
