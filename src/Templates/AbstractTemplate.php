<?php

namespace Bytic\MailTemplates\Templates;

abstract class AbstractTemplate implements TemplateInterface
{
    protected ?string $name = null;
    public const TEMPLATE_NAME = null;

    use Traits\HasPaths;
    use Traits\HasStyles;
    use Traits\HasRenderer;

    public function __construct()
    {
        if (null !== static::TEMPLATE_NAME) {
            $this->name = static::TEMPLATE_NAME;
        }
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

}