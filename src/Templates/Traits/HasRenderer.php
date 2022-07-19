<?php

namespace Bytic\MailTemplates\Templates\Traits;


use Bytic\MailTemplates\Renderer\AbstractRender;
use Bytic\MailTemplates\Renderer\ViewRender;

trait HasRenderer
{
    protected $view = '/index';
    protected $renderer = null;

    /**
     * Set the view and view data for the message.
     *
     * @param  string  $view
     * @param  array  $data
     * @return $this
     */
    public function view($view, array $data = [])
    {
        $this->view = $view;
        $this->viewData = array_merge($this->viewData, $data);

        return $this;
    }

    public function render()
    {
        return $this->getRenderer()->render($this->view, $this->buildViewData());
    }

    protected function getRenderer()
    {
        if ($this->renderer === null) {
            $this->renderer = $this->newRenderer();
        }
        return $this->renderer;
    }

    protected function newRenderer(): AbstractRender
    {
        $renderer = new ViewRender();
        return $renderer;
    }
}