<?php

namespace BitWeb\Stdlib\TestAsset;

use BitWeb\Stdlib\AbstractConfiguration;

class TestConfiguration extends AbstractConfiguration
{
    /**
     * @var string
     */
    protected $foo;

    /**
     * @var boolean
     */
    protected $bar;

    /**
     * @param boolean $bar
     * @return self
     */
    public function setBar($bar)
    {
        $this->bar = $bar;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getBar()
    {
        return $this->bar;
    }

    /**
     * @param string $foo
     * @return self
     */
    public function setFoo($foo)
    {
        $this->foo = $foo;
        return $this;
    }

    /**
     * @return string
     */
    public function getFoo()
    {
        return $this->foo;
    }
} 