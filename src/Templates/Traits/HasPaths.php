<?php

namespace Bytic\MailTemplates\Templates\Traits;

trait HasPaths
{
    protected ?string $basePath = null;

    public function prependPaths($path): ?string
    {
        return $this->getBasePath() . $path;
    }

    /**
     * @return string|null
     */
    public function getBasePath(): ?string
    {
        if ($this->basePath === null) {
            $this->initBasePath();
        }

        return $this->basePath;
    }

    /**
     * @param string|null $basePath
     */
    public function setBasePath(?string $basePath): void
    {
        $this->basePath = $basePath;
    }

    protected function initBasePath()
    {
        $this->setBasePath($this->generateBasePath());
    }

    protected function generateBasePath()
    {
        $reflector = new \ReflectionClass($this);
        return dirname($reflector->getFileName());
    }
}