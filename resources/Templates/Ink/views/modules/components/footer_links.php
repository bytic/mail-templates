<?php

$footerLinks = $this->configuration->get('footer.links', []);
?>
<div class="social-links">
    <menu style="width: auto">
        <?php foreach ($footerLinks as $socialNetwork => $socialSettings) { ?>
            <item href="<?= $socialSettings['url'] ?>">
                <?= $socialSettings['label'] ?>
            </item>
        <?php } ?>
    </menu>
</div>

