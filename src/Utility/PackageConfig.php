<?php

namespace Bytic\MailTemplates\Utility;

use Bytic\MailTemplates\NotifierBuilderProvider;
use Nip\Utility\Traits\SingletonTrait;

/**
 * Class PackageConfig
 * @package ByTIC\MailTemplate\Utility
 */
class PackageConfig extends \ByTIC\PackageBase\Utility\PackageConfig
{
    protected $name = NotifierBuilderProvider::NAME;
}
