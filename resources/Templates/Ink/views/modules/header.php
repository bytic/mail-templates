<?php

use Bytic\MailTemplates\Configuration\Configuration;

/** @var Configuration $configuration */
$configuration = $this->get('configuration');
?>
<div class="header">
    <container>
        <row>
            <columns>
                <a href="<?= $configuration->getBrandUrl(); ?>">
                    <img src="<?= $configuration->getLogoPath() ?>" class="logo">
                </a>
            </columns>
            <columns>

            </columns>
        </row>
    </container>
</div>
