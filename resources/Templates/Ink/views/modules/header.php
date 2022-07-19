<?php

use Bytic\MailTemplates\Configuration\Configuration;

/** @var Configuration $configuration */
$configuration = $this->get('configuration');
?>
<table style="background-color: #000;width:100%;color:#fff">
    <tr>
        <td style="">
            <img src="<?= $configuration->getLogoUrl() ?>" style="max-width: 150px; margin: 3px 10px">
        </td>
        <td style="text-align:left; ">
            {{email_issue}}
        </td>
    </tr>
</table>