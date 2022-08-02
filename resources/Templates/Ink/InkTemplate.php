<?php

namespace Bytic\MailTemplates\Resources\Templates\Ink;

use Bytic\MailTemplates\Configuration\Configuration;
use Nip\Utility\Arr;
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

    protected function generateConfigurationData()
    {
        $data = parent::generateConfigurationData();
        $dataDefault = require __DIR__ . '/config/default.php';
        return $dataDefault + $data;
    }
}
