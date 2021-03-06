<?php

namespace Bytic\MailTemplates\Settings;

class Settings
{
   protected array $logo = [];

    /**
     * @return string
     */
    public function getLogoPath(): ?string
    {
        return $this->logo['path'] ?? null;
    }

    /**
     * @return string
     */
    public function getLogoUrl(): ?string
    {
        return $this->logo['url'] ?? null;
    }


    /**
     * @return string
     */
    public function getLogoLink(): ?string
    {
        return $this->logo['link'] ?? null;
    }
}