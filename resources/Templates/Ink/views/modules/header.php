<?php

use Bytic\MailTemplates\Configuration\Configuration;

/** @var Configuration $configuration */
$configuration = $this->get('configuration');
?>
<div class="header">
    <container>
        <columns>
            <img src="<?= $configuration->getLogoUrl() ?>" style="max-width: 150px; margin: 3px 10px">
        </columns>
        <columns>
            {{email_issue}}
        </columns>
    </container>
</div>
