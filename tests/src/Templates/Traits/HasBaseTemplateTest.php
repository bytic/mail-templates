<?php

namespace Bytic\MailTemplates\Tests\Templates\Traits;

use Bytic\MailTemplates\Resources\Templates\Ink\InkTemplate;
use Bytic\Phpqa\PHPUnit\TestCase;

class HasBaseTemplateTest extends TestCase
{
    public function test_generateBasePath()
    {
        $inkTemplate = new InkTemplate();
        self::assertStringEndsWith('mail-templates/resources/Templates/Ink', $inkTemplate->getBasePath());
    }
}