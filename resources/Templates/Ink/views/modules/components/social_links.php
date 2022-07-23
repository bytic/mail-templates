<?php

use Bytic\MailTemplates\Utility\SocialIcons;

$socialLinks = $this->configuration->get('social', []);
?>
<div class="social-links">
    <?php foreach ($socialLinks as $socialNetwork => $socialSettings) { ?>
        <a href="<?= $socialSettings['url'] ?>" target="_blank">
            <?= SocialIcons::network($socialNetwork); ?>
        </a>
    <?php } ?>
</div>
