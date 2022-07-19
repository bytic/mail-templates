<?php

namespace Bytic\MailTemplates\Tests\Templates\Traits;

use Bytic\MailTemplates\Resources\Templates\Ink\InkTemplate;
use Bytic\Phpqa\PHPUnit\TestCase;

class HasStylesTest extends TestCase
{
    public function test_getStyles()
    {
        $inkTemplate = new InkTemplate();
        $styles = $inkTemplate->getStyles();
        self::assertStringEndsWith('/resources/Templates/Inkassets/css/ink.css', $styles[0]);
    }
}