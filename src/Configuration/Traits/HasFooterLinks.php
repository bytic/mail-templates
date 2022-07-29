<?php

namespace Bytic\MailTemplates\Configuration\Traits;

trait HasFooterLinks
{
    public function getFooterLinks(): array
    {
        return $this->get(self::FOOTER_LINKS, []);
    }

    public function addFooterLink(string $url, $label = null)
    {
        $data = [
            'href' => $url,
            'label' => $label ?? $url
        ];
        $this->appendToKey(self::FOOTER_LINKS, $data);
    }

    public function hasFooterLinks(): bool
    {
        $data = $this->getFooterLinks();
        return count($data) > 0;
    }

}