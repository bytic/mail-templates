<?php

use Bytic\MailTemplates\Configuration\Configuration;
use Bytic\MailTemplates\Utility\SocialIcons;
use Nip\Utility\Social\SocialNetworks;

/** @var Configuration $configuration */
$configuration = $this->configuration;
$socialLinks = $this->configuration->getSocialLinks();
?>
<div class="social-links">
    <row>
        <columns>
            <a href="<?= $configuration->getBrandUrl(); ?>">
                <img src="<?= $configuration->getLogoPath() ?>" class="logo">
            </a>
        </columns>
        <columns class="networks">
            <p class="text-right">
                <?php foreach ($socialLinks as $socialNetwork => $socialSettings) { ?>
                    <?php
                    $data = is_array($socialSettings) ? $socialSettings : ['url' => $socialSettings];
                    $url = $data['url'];
                    $network = $data['network'] ?? SocialNetworks::fromUrl($url);
                    $src = $data['src'] ?? null;
                    ?>
                    <a href="<?= $url ?>" target="_blank">
                        <?= SocialIcons::network($network, $src); ?>
                    </a>
                <?php } ?>
            </p>
        </columns>
    </row>
</div>
