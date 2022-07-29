<?php

$footerLinks = $this->configuration->getFooterLinks();
?>
<div class="footer-links">
    <container>
        <row>
            <columns>
                <menu style="width: auto">
                    <?php foreach ($footerLinks as $link) { ?>
                        <item href="<?= $link['href'] ?>">
                            <?= $link['label'] ?>
                        </item>
                    <?php } ?>
                </menu>
            </columns>
        </row>
    </container>
</div>

