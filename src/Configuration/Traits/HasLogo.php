<?php

namespace Bytic\MailTemplates\Configuration\Traits;

trait HasLogo
{
    /**
     * @return string
     */
    public function getLogoPath(): ?string
    {
        return $this->get('path', null);
    }

    /**
     * @return string
     */
    public function getLogoUrl(): ?string
    {
        return $this->get('url', null);
    }

    /**
     * @return string
     */
    public function getLogoLink(): ?string
    {
        return $this->get('link', null);
    }
}