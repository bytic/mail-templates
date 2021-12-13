<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />

</head>
<body style="width:100% !important; min-height:1000px; color:#333333; background:#fff; font-family:Arial,Helvetica,sans-serif; font-size:13px; line-height:1.4;" alink="#114eb1" link="#114eb1" bgcolor="#e0dbcf" text="#333333" yahoo="fix">

<table style="width: 100%">
    <tr>
        <td style="width:15%"></td>
        <td style="width:70%;max-width: 600px">
            <?php echo $this->load('/emails/modules/header'); ?>

            <!-- content start -->

            <?php if ($this->has('headerImage')) { ?>
                <img style="width: 100%;display: block; max-width: 100%" src="<?php echo $this->headerImage; ?>">
                <p>&nbsp;</p>
            <?php } ?>

            <?= $this->render("content"); ?>

            <?= $this->load('/emails/modules/footer'); ?>
        </td>
        <td style="width:15%"></td>
    </tr>
</table>
</body>
</html>