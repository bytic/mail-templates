<?php

namespace Bytic\MailTemplates\Tests\Templates\Traits;

use Bytic\MailTemplates\Tests\Templates\AbstractTemplateAbstractTest;

class HasRendererTest extends AbstractTemplateAbstractTest
{
    public function test_render_boilerplate()
    {
        $this->test_render_template(
            [
                'content' => '/content/boilerplate',
                'name' => 'John',

            ],
            'content_boilerplate'
        );
    }

    public function test_render_content()
    {
        $this->test_render_template(
            [
                'content' => 'TestContentBasic',
                'name' => 'John'
            ],
            'content_string');
    }
}