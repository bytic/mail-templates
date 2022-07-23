<?php

require __DIR__ . '/../vendor/autoload.php';

$configData = require __DIR__ . '/config.php';

$template = new \Bytic\MailTemplates\Resources\Templates\Ink\InkTemplate();
$template->configuration()->merge($configData['settings']);

echo $template;