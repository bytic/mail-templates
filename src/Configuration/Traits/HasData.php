<?php

namespace Bytic\MailTemplates\Configuration\Traits;

use Nip\Config\Config;
use Nip\Utility\Arr;

trait HasData
{
    /**
     * All of the configuration items.
     *
     * @var array
     */
    protected $data = [];

    public function fill($array)
    {
        foreach ($array as $key => $value) {
            $this->setDataItem($key, $value);
        }
    }
    /**
     * @param $name
     * @return string
     */
    public function __get($name)
    {
        return $this->get($name);
    }

    /**
     * Retrieve a value and return $default if there is no element set.
     *
     * @param string $key
     * @param string $default
     * @return mixed
     */
    public function get(string $key, $default = null)
    {
        if (strpos($key, '.') === false) {
            $value = $this->getByKey($key);
        } else {
            $value = $this->getByPath($key);
        }

        return $value === null ? $default : $value;
    }

    /**
     * @param string $key
     * @return mixed|null
     */
    public function getByKey($key)
    {
        if ($this->hasByKey($key)) {
            return $this->data[$key];
        }

        return null;
    }

    /**
     * Determine if the given configuration value exists.
     *
     * @param string $key
     * @return bool
     */
    public function hasByKey($key): bool
    {
        return isset($this->data[$key]);
    }

    /**
     * @param string $path
     * @return string
     */
    protected function getByPath($path)
    {
        return Arr::get($this->data, $path);
    }

    /**
     * @param $key
     * @return bool
     */
    public function __isset($key)
    {
        return $this->has($key);
    }

    /**
     * Determine if the given configuration value exists.
     *
     * @param string $key
     * @return bool
     */
    public function has($key)
    {
        return Arr::has($this->data, $key);
    }

    /**
     * Determine if the given configuration option exists.
     *
     * @param string $key
     * @return bool
     */
    public function offsetExists($key)
    {
        return $this->has($key);
    }

    /**
     * Get a configuration option.
     *
     * @param string $key
     * @return mixed
     */
    public function offsetGet($key)
    {
        return $this->get($key);
    }

    /**
     * Set a configuration option.
     *
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public function offsetSet($key, $value)
    {
        $this->set($key, $value);
    }

    /**
     * @param $name
     * @param $value
     * @return $this
     */
    public function set($name, $value)
    {
        return $this->setDataItem($name, $value);
    }

    /**
     * @param $name
     * @param $value
     * @return $this
     */
    protected function setDataItem($name, $value)
    {
        if (null === $name) {
            $this->data[] = $value;
        } else {
            $this->data[$name] = $value;
        }

        return $this;
    }

    /**
     * Unset a configuration option.
     *
     * @param string $key
     * @return void
     */
    public function offsetUnset($key)
    {
        $this->set($key, null);
    }

    public function appendToKey($key, $value, $innerKey = null)
    {
        $allValues = $this->get($key, []);
        if (null === $innerKey) {
            $allValues[] = $value;
        } else {
            $allValues[$innerKey] = $value;
        }
        $this->set($key, $allValues);
    }

    /**
     * Merge another Config with this one.
     *
     * @param array $merge
     * @return $this
     */
    public function merge(array $merge): self
    {
        $this->data = array_merge($this->data, $merge);

        return $this;
    }
}