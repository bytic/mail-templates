<?php
?>
<div class="footer">
    <container>
        <row class="">
            <columns>
                <spacer size="16"></spacer>
                <h4 class="brand-name">
                    <?= $this->configuration->get('brand.name'); ?>
                </h4>
                <p class="text-sm">
                    <?= $this->configuration->get('footer.copyright'); ?>
                </p>
            </columns>
        </row>

        <row class="">
            <columns>
                <?= $this->load('Emails::/modules/components/social_links'); ?>
            </columns>
        </row>

        <row class="">
            <columns>
                <h-line></h-line>

                <?= $this->load('Emails::/modules/components/footer_links'); ?>
            </columns>
        </row>
    </container>
</div>