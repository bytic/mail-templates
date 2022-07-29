<?php

namespace Bytic\MailTemplates\Tests\Resources\Templates;

use Bytic\MailTemplates\Resources\Templates\Ink\InkTemplate;
use Bytic\MailTemplates\Tests\Templates\AbstractTemplateAbstractTest;

abstract class AbstractTemplateTest extends AbstractTemplateAbstractTest
{
    protected $path = InkTemplate::TEMPLATE_NAME;

    public function test_render_boilerplate()
    {
        $this->test_render_template(
            [
                'content' => '/content/boilerplate',
                'name' => 'John',

            ],
            '/' . $this->path . '/content_boilerplate',
            $this->generateConfiguration()
        );
    }

    protected function generateConfiguration(): array
    {
        return [
            'brand' => [
                'name' => 'Bytic',
                'url' => 'https://www.bytic.com',
            ],
            'logo' => [
               'main' => 'https://galantom.ro/assets/compiled/images/logos/logo.png'
            ],
            'social' => [
                ['url' => 'https://www.facebook.com/', 'network' => 'facebook'],
                ['url' => 'https://www.twitter.com/'],
                'https://www.instagram.com/',
            ],
            'footer' => [
                'copyright' => '<p>© 2022 Coursera Inc. All rights reserved. Coursera and the Coursera logo are registered trademarks of Coursera, Inc. All other trademarks are property of their respective owners. Log in to manage all your notification preferences in Email Settings.</p>
                    <p>Coursera | Romania</p>',
                'links' => [
                    [
                        'href' => 'https://www.google.com/tos',
                        'label' => 'Terms of Service',
                    ],
                    [
                        'href' => 'https://www.youtube.com/data',
                        'label' => 'Data Policy',
                    ],
                ],
            ]
        ];
    }
}