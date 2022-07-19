<?php

namespace Bytic\MailTemplates\Renderer;

use Nip\View\View;

class ViewRender extends AbstractRender
{
    protected View $engine;

    public function __construct()
    {
        $this->engine = new View();
    }

    public function render($view, array $data = [])
    {
        $this->engine->with($data);
        return $this->engine->load($view, [], true);
    }

    public function engine(): View
    {
        return $this->engine;
    }
}