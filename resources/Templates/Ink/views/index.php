<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
</head>
<body style="width:100% !important; min-height:1000px; color:#333333; background:#fff; font-family:Arial,Helvetica,sans-serif; font-size:13px; line-height:1.4;"
      alink="#114eb1" link="#114eb1" bgcolor="#e0dbcf" text="#333333" yahoo="fix">

<table style="width: 100%">
    <tr>
        <td style="width:15%"></td>
        <td style="width:70%;max-width: 600px">
            <?= $this->loadWithFallback('/emails/modules/header', 'Emails::/modules/header'); ?>


            <?php if ($this->has('headerImage')) { ?>
                <img style="width: 100%;display: block; max-width: 100%" src="<?php echo $this->headerImage; ?>">
                <p>&nbsp;</p>
            <?php } ?>

            <!-- content start -->
            <?= $this->isBlock("content") ? $this->render("content") : null; ?>
            <!-- content end -->

            <?= $this->loadWithFallback('/emails/modules/footer', 'Emails::/modules/footer'); ?>
        </td>
        <td style="width:15%"></td>
    </tr>
</table>

<!-- prevent Gmail on iOS font size manipulation -->
<div style="display:none; white-space:nowrap; font:15px courier; line-height:0;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
</div>
</body>
</html>