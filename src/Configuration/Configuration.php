<?php

namespace Bytic\MailTemplates\Configuration;

class Configuration implements \ArrayAccess
{
    use Traits\HasData;
    use Traits\HasBrand;
    use Traits\HasFooterLinks;
    use Traits\HasLogo;
    use Traits\HasSocialLinks;

    public const LOGO = 'logo';
    public const BRAND = 'brand';
    public const SOCIAL_LINKS = 'social';
    public const FOOTER_LINKS = 'footer.links';

    /**
     * Create a new configuration repository.
     *
     * @param array $array
     */
    public function __construct(array $array = [])
    {
        $this->fill($array);
    }

}