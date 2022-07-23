<?php

namespace Bytic\MailTemplates\Templates;

use Bytic\MailTemplates\Renderer\AbstractRender;

abstract class ViewTemplate extends AbstractTemplate
{
    public function render()
    {
        $data = $this->buildViewData();
        if (isset($data['content'])) {
            $engine = $this->getRenderer()->engine();
            $engine->setBlock('content', $data['content']);
        }
        return parent::render();
    }

    protected function newRenderer(): AbstractRender
    {
        $render = parent::newRenderer();
        $basePath = $this->getBasePath() . '/views';

        $engine = $render->engine();
        $engine->setBasePath($basePath);
        $engine->addPath($basePath, static::MAIN_NAMESPACE);
        foreach ($this->paths as $namespace => $paths) {
            foreach ($paths as $path) {
                if (empty($namespace)) {
                    $engine->addPath($path);
                } else {
                    $engine->addPath($path, $namespace);
                }
            }
        }
        return $render;
    }
}