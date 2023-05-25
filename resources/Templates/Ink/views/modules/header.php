<?php

use Bytic\MailTemplates\Configuration\Configuration;

/** @var Configuration $configuration */
$configuration = $this->get('configuration');
$headerImage = $this->get('headerImage');
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
    <container>
        <?php if ($headerImage) { ?>
            <img style="width: 100%;display: block; max-width: 100%" src="<?= $headerImage; ?>">
            <p>&nbsp;</p>
        <?php } ?>
    </container>
</div>
