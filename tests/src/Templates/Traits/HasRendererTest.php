<?php

namespace Bytic\MailTemplates\Tests\Templates\Traits;

use Bytic\MailTemplates\Resources\Templates\Ink\InkTemplate;
use Bytic\Phpqa\PHPUnit\TestCase;

class HasRendererTest extends TestCase
{
    public function test_render()
    {
        $template = InkTemplate::create();
        $template->addPath(TEST_FIXTURE_PATH . '/views/');

        self::assertSame(
            file_get_contents(TEST_FIXTURE_PATH . '/emails/basic.html'),
            $template
                ->with(
                    [
                        'content' => '/content/basic',
                        'name' => 'John'
                    ]
                )
                ->render()
        );
    }
}