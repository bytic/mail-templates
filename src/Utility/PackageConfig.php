<?php

namespace Bytic\MailTemplates\Utility;

use Bytic\MailTemplates\MailTemplatesProvider;
use Nip\Utility\Traits\SingletonTrait;

/**
 * Class PackageConfig
 * @package ByTIC\MailTemplate\Utility
 */
class PackageConfig extends \ByTIC\PackageBase\Utility\PackageConfig
{
    use SingletonTrait;
    protected $name = MailTemplatesProvider::NAME;

    public static function settings(): array
    {
        $settings = static::instance()->get('settings');
        return $settings instanceof \Nip\Config\Config ? $settings->toArray() : (array) $settings;
    }
}
