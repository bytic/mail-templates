<?php

namespace Bytic\MailTemplates\Configuration;

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
        $configuration = new Configuration();
        return $configuration;
    }
}