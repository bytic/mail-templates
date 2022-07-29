<?php

namespace Bytic\MailTemplates\Configuration\Traits;

use Nip\Utility\Social\SocialNetworks;

trait HasSocialLinks
{
    public function getSocialLinks(): array
    {
        return $this->get(self::SOCIAL_LINKS, []);
    }

    public function addSocialLink(string $url)
    {
        $data = [
            'url' => $url,
            'network' => SocialNetworks::fromUrl($url)
        ];
        $this->appendToKey(self::SOCIAL_LINKS, $data);
    }

    public function hasSocialLinks(): bool
    {
        $data = $this->getSocialLinks();
        return count($data) > 0;
    }

}