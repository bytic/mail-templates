<?php

namespace Bytic\MailTemplates\Renderer;

abstract class AbstractRender
{
    abstract public function render($view, array $data = []);

}
