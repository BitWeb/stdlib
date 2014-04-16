<?php

namespace BitWeb\Stdlib;

abstract class AbstractConfiguration
{
    public function __construct($config = null)
    {
        if (null !== $config) {
            if (is_array($config)) {
                $this->processArray($config);
            } else {
                throw new \InvalidArgumentException(
                    'Parameter to ' . get_class($this) . ' \'s constructor must be an array'
                );
            }
        }
    }

    protected function processArray($config)
    {
        foreach ($config as $key => $value) {
            $setter = $this->assembleSetterNameFromConfigKey($key);
            $this->{$setter}($value);
        }
    }

    protected function assembleSetterNameFromConfigKey($key)
    {
        $parts = explode('_', $key);
        $parts = array_map('ucfirst', $parts);
        $setter = 'set' . implode('', $parts);
        if (!method_exists($this, $setter)) {
            throw new \BadMethodCallException(
                'The configuration key "' . $key . '" does not have a matching ' . $setter . ' setter method which must be defined'
            );
        }
        return $setter;
    }
}
