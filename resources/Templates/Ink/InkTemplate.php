<?php

namespace Bytic\MailTemplates\Resources\Templates\Ink;

use Bytic\MailTemplates\Configuration\Configuration;
use Pinky;
use Bytic\MailTemplates\Templates\ViewTemplate;

class InkTemplate extends ViewTemplate
{
    public const TEMPLATE_NAME = 'Ink';

    public function __construct()
    {
        parent::__construct();
        $this->addStylesheet($this->getAbsolutePath('/assets/foundation-emails.css'));
        $this->addStylesheet($this->getAbsolutePath('/assets/foundation-custom.css'));
    }

    public function renderContent()
    {
        $body = parent::renderContent();
        return false === ($html = Pinky\transformString($body)->saveHTML()) ? '' : $html;
    }
    protected function generateConfiguration(): Configuration
    {
        $configuration = parent::generateConfiguration();
        $data =require __DIR__ . '/config/default.php';
        $configuration->merge($data['settings']);
        return $configuration;
    }
}
