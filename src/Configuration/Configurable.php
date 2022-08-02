<?php

namespace Bytic\MailTemplates\Configuration;

use Bytic\MailTemplates\Utility\PackageConfig;

trait Configurable
{
    protected Configuration $configuration;

    public function configuration(): Configuration
    {
       if (!isset($this->configuration)) {
           $this->initConfiguration();
       }
       return $this->configuration;
    }

    protected function initConfiguration()
    {
        $this->configuration = $this->generateConfiguration();
    }

    protected function generateConfiguration(): Configuration
    {
        $baseSettings = PackageConfig::settings();
        $configuration = new Configuration($baseSettings);
        return $configuration;
    }
}