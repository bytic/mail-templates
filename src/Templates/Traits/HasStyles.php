<?php

namespace Bytic\MailTemplates\Templates\Traits;

use TijsVerkoyen\CssToInlineStyles\CssToInlineStyles;

trait HasStyles
{
    protected ?array $styles = [];

    protected bool $inlineStyles = true;

    /**
     * @return array|null
     */
    public function getStyles(): ?array
    {
        if ($this->styles === null) {
            $this->styles = [];
        }
        return $this->styles;
    }

    /**
     * @param array|null $styles
     */
    public function setStyles(?array $styles): void
    {
        $this->styles = $styles;
    }

    public function addStylesheet(string $resource): self
    {
        $this->styles[] = $resource;
        return $this;
    }

    protected function generateStyles()
    {
        $styles = $this->getStyles();
        $css = '';
        foreach ($styles as $style) {
            $css .= file_get_contents($style);
//            $content = str_replace($style['selector'], $style['style'], $content);
        }
        return $css;
    }

    protected function inlineStylesFor($content)
    {
        if ($this->inlineStyles !== true) {
            return $content;
        }

        return (new CssToInlineStyles())->convert($content, $this->generateStyles());
    }
}