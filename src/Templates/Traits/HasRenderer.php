<?php

namespace Bytic\MailTemplates\Templates\Traits;


trait HasRenderer
{
    public function render($data = [])
    {
        return $this->getRenderer()->render($data);
    }
}