<?php

namespace Bytic\MailTemplates\Tests\Templates;

use Bytic\MailTemplates\Resources\Templates\Ink\InkTemplate;
use PHPUnit\Framework\TestCase;

abstract class AbstractTemplateAbstractTest extends TestCase
{
    protected $templateClass = InkTemplate::class;

    protected function test_render_template(array $vars, string $fixture, $config = [])
    {
        $template = $this->createTemplate();
        $template->addPath(TEST_FIXTURE_PATH . '/views/');
        $template->with($vars);
        $template->configuration()->fill($config);

        $content = $template->render();

        $pathEmail = TEST_FIXTURE_PATH . '/emails/' . $fixture . '.html';
        file_put_contents($pathEmail, $content);
        self::assertSame(
            file_get_contents($pathEmail),
            $content
        );
    }

    protected function createTemplate()
    {
        $template = call_user_func($this->templateClass.'::create');
        return $template;
    }
}
