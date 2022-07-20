<?php

namespace Bytic\MailTemplates\Tests\Templates;

use Bytic\MailTemplates\Resources\Templates\Ink\InkTemplate;
use PHPUnit\Framework\TestCase;

class AbstractTemplateTest extends TestCase
{
    public function test_stringable()
    {
        self::assertStringEndsWith(
            '</html>',
            (string) InkTemplate::create()
        );
    }
}
