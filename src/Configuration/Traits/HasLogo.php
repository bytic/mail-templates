<?php

namespace Bytic\MailTemplates\Configuration\Traits;

trait HasLogo
{
    /**
     * @return string
     */
    public function getLogoPath($type = null): ?string
    {
        $logoPath = $this->get(self::LOGO . '.' . $type, null);
        if ($logoPath !== null) {
            return $logoPath;
        }

        $logoPath = $this->get(self::LOGO . '.main', null);
        if ($logoPath !== null) {
            return $logoPath;
        }
        $logoPath = $this->get(self::LOGO, null);
        return is_string($logoPath) ? $logoPath : null;
    }

    public function hasLogo($type = null): bool
    {
        return $this->getLogoPath($type) !== null;
    }
}