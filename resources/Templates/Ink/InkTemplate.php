<?php

namespace Bytic\MailTemplates\Resources\Templates\Ink;

use Bytic\MailTemplates\Templates\ViewTemplate;

class InkTemplate extends ViewTemplate
{
    public const TEMPLATE_NAME = 'Ink';

    protected function generateStyles(): array
    {
        return [
            $this->prependPaths('assets/css/ink.css'),
            $this->prependPaths('assets/css/reset.css'),
        ];
    }
}