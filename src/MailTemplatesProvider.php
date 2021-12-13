<?php

namespace Bytic\MailTemplates;

use ByTIC\NotifierBuilder\Console\Commands\EventsSend;
use ByTIC\NotifierBuilder\Utility\PackageConfig;
use ByTIC\PackageBase\BaseBootableServiceProvider;

/**
 * Class MailTemplatesProvider
 * @package ByTIC\MailTemplate
 */
class MailTemplatesProvider extends BaseBootableServiceProvider
{
    public const NAME = 'mail-templates';

}
