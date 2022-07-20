<?php

namespace Bytic\MailTemplates\Resources\Templates\Ink;

use Pinky;
use Bytic\MailTemplates\Templates\ViewTemplate;

class InkTemplate extends ViewTemplate
{
    public const TEMPLATE_NAME = 'Ink';

    public function __construct()
    {
        parent::__construct();
        $this->addStylesheet($this->getAbsolutePath('/assets/foundation-emails.css'));
    }

    public function renderContent()
    {
        $body = parent::renderContent();
        return false === ($html = Pinky\transformString($body)->saveHTML()) ? '' : $html;
    }
}
