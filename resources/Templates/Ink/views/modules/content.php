<!-- content start -->
<div class="content">
    <container>
        <?php
        $content = $this->isBlock("content")
            ? $this->render("content")
            : '<row><columns>' . $this->content . '</columns></row>' ?? null;
        $content = strpos($content, '<row>') !== false ? $content : '<row><columns>' . $content . '</columns></row>';
        ?>
        <?= $content; ?>
    </container>
</div>
<!-- content end -->
