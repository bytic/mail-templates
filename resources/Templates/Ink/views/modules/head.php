<?php

use Bytic\MailTemplates\Utility\Html;

?>
<style>
    body, html {
        font-size: 16px;
        line-height: 24px;
        font-weight: normal;
        font-family: BlinkMacSystemFont, -apple-system, Segoe UI, Roboto, Helvetica, Arial, sans-serif;
    }

    body {
    <?= Html::buildCssStyles($this->configuration->get('style.page.style')); ?>;
    }

    .header {
    <?= Html::buildCssStyles($this->configuration->get('style.header.style')); ?>;
    }

    .header .container {
    <?= Html::buildCssStyles($this->configuration->get('style.header.inner.style')); ?>;
    }

    .content {
    <?= Html::buildCssStyles($this->configuration->get('style.content.style')); ?>;
    }

    .content .container {
    <?= Html::buildCssStyles($this->configuration->get('style.content.inner.style')); ?>;
    }

    .footer {
    <?= Html::buildCssStyles($this->configuration->get('style.footer.style')); ?>;
    }

    .footer .container {
    <?= Html::buildCssStyles($this->configuration->get('style.footer.inner.style')); ?>;
    }

    .footer .container p {
        <?= Html::buildCssStyles(\Nip\Utility\Arr::only($this->configuration->get('style.footer.inner.style'),['color'])); ?>;
    }

    .footer .brand-name {
        font-weight: bold;
    }
    .social-links a img {
        display: inline-block;
        margin: 0 5px;
        width: 28px;
        aspect-ratio: auto 28 / 28;
        height: 28px;
    }
</style>