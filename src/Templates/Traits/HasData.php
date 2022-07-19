<?php

namespace Bytic\MailTemplates\Templates\Traits;

trait HasData
{
    /**
     * The view data for the template.
     *
     * @var array
     */
    public array $viewData = [];

    /**
     * Set the view data for the message.
     *
     * @param string|array $key
     * @param mixed $value
     * @return $this
     */
    public function with($key, $value = null): self
    {
        if (is_array($key)) {
            $this->viewData = array_merge($this->viewData, $key);
        } else {
            $this->viewData[$key] = $value;
        }

        return $this;
    }

    public function buildViewData(): array
    {
        $data = $this->viewData;
        $data = array_merge($data, ['configuration' => $this->configuration()]);
        return $data;
    }
}