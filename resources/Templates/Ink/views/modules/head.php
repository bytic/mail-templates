<?php

use Bytic\MailTemplates\Utility\Html;

?>
<style>
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
    <?= Html::buildCssStyles(\Nip\Utility\Arr::only($this->configuration->get('style.footer.inner.style', []),['color'])); ?>;
    }


</style>