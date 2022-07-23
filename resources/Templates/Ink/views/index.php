<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

    <?= $this->loadWithFallback('/emails/modules/head', 'Emails::/modules/head'); ?>
</head>
<body>

<?= $this->loadWithFallback('/emails/modules/header', 'Emails::/modules/header'); ?>

<?= $this->loadWithFallback('/emails/modules/content', 'Emails::/modules/content'); ?>
<table style="width: 100%">
    <tr>
        <td style="width:15%"></td>
        <td style="width:70%;max-width: 600px">


            <?php if ($this->has('headerImage')) { ?>
                <img style="width: 100%;display: block; max-width: 100%" src="<?php echo $this->headerImage; ?>">
                <p>&nbsp;</p>
            <?php } ?>

            <!-- content start -->
            <!-- content end -->

        </td>
        <td style="width:15%"></td>
    </tr>
</table>

<?= $this->loadWithFallback('/emails/modules/footer', 'Emails::/modules/footer'); ?>

<!-- prevent Gmail on iOS font size manipulation -->
<div style="display:none; white-space:nowrap; font:15px courier; line-height:0;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
</div>
</body>
</html>