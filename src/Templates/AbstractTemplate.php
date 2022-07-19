<?php

namespace Bytic\MailTemplates\Templates;

use Bytic\MailTemplates\Configuration\Configurable;

abstract class AbstractTemplate implements TemplateInterface
{
    protected ?string $name = null;
    public const TEMPLATE_NAME = null;
    public const MAIN_NAMESPACE = 'Emails';

    use Traits\HasData;
    use Traits\HasPaths;
    use Traits\HasStyles;
    use Traits\HasRenderer;
    use Configurable;

    public function __construct()
    {
        if (null !== static::TEMPLATE_NAME) {
            $this->name = static::TEMPLATE_NAME;
        }
    }

    public static function create(): self
    {
        return new static();
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