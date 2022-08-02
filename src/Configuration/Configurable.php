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
        $configuration = new Configuration($this->generateConfigurationData());
        return $configuration;
    }

    protected function generateConfigurationData()
    {
        $data = PackageConfig::settings();
        return $data;
    }
}