<?php

namespace Bytic\MailTemplates\Resources\Templates\Ink;

use Pinky;
use Bytic\MailTemplates\Templates\ViewTemplate;

class InkTemplate extends ViewTemplate
{
    public const TEMPLATE_NAME = 'Ink';

    public function render()
    {
        $body = parent::render();
        return false === ($html = Pinky\transformString($body)->saveHTML()) ? '' : $html;
    }

    protected function generateStyles(): array
    {
        return [
            $this->prefixPaths('assets/css/ink.css'),
            $this->prefixPaths('assets/css/reset.css'),
        ];
    }
}