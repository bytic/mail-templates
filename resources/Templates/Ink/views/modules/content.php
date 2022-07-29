<!-- content start -->
<div class="content">
    <container>
                <?= $this->isBlock("content")
                    ? $this->render("content")
                    : $this->content ?? null;
                ?>
    </container>
</div>
<!-- content end -->
