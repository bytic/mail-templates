<?php

namespace Bytic\MailTemplates\Configuration\Traits;

trait HasBrand
{
    /**
     * @return string
     */
    public function getBrandName(): ?string
    {
        return $this->get(self::BRAND . '.name', null);
    }

    /**
     * @return string
     */
    public function getBrandUrl(): ?string
    {
        return $this->get(self::BRAND . '.url', null);
    }
}