<?php

namespace Bytic\MailTemplates\Templates\Traits;

trait HasPaths
{
    protected ?string $basePath = null;

    /**
     * The array of active view paths.
     *
     * @var array
     */
    protected array $paths = [];

    public function getAbsolutePath($path): ?string
    {
        return $this->getBasePath() . $path;
    }

    /**
     * Adds a path where templates are stored.
     *
     * @param string $path A path where to look for templates
     * @param string|null $namespace A path namespace
     *
     * @return void
     */
    public function addPath($path, ?string $namespace = null)
    {
        $this->paths[$namespace][] = rtrim($path, '/\\');
    }

    /**
     * Prepends a path where templates are stored.
     *
     * @param string $path A path where to look for templates
     * @param string $namespace A path namespace
     * @return void
     */
    public function prependPath($path, $namespace = null)
    {
        $path = rtrim($path, '/\\');

        if (!isset($this->paths[$namespace])) {
            $this->paths[$namespace][] = $path;
        } else {
            array_unshift($this->paths[$namespace], $path);
        }
    }

    /**
     * Sets the paths where templates are stored.
     *
     * @param string|array $paths A path or an array of paths where to look for templates
     * @param string $namespace A path namespace
     */
    public function setPaths($paths, $namespace = null)
    {
        if (!is_array($paths)) {
            $paths = [$paths];
        }
        $this->paths[$namespace] = [];
        foreach ($paths as $path) {
            $this->addPath($path, $namespace);
        }
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