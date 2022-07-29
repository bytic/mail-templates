<?php

use Bytic\MailTemplates\Configuration\Configuration;

/** @var Configuration $configuration */
$configuration = $this->configuration;
?>
<div class="footer">
    <container>
        <?php if ($configuration->hasSocialLinks()) : ?>
            <?= $this->load('Emails::/modules/components/social_links'); ?>
        <?php endif; ?>

        <spacer size="16"></spacer>
        <row>
            <columns>
                <h5 class="brand-name">
                    <?= $configuration->getBrandName(); ?>
                </h5>
                <div class="text-sm">
                    <?= $configuration->get('footer.copyright'); ?>
                </div>
            </columns>
        </row>

        <?php if ($configuration->hasFooterLinks()) : ?>
            <?= $this->load('Emails::/modules/components/footer_links'); ?>
        <?php endif; ?>
    </container>
</div>