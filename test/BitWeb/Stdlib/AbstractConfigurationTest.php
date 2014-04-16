<?php

namespace BitWeb\Stdlib;

use BitWeb\Stdlib\TestAsset\TestConfiguration;

class AbstractConfigurationTest extends \PHPUnit_Framework_TestCase
{
    public function testConstruct()
    {
        $configuration = new TestConfiguration([
            'foo' => 'bar',
            'bar' => true
        ]);

        $this->assertEquals($configuration->getBar(), true);
        $this->assertEquals($configuration->getFoo(), 'bar');
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testOnlyArrayIsAccepted()
    {
        new TestConfiguration('this is a string');
    }

    /**
     * @expectedException \BadMethodCallException
     */
    public function testOnlyValidConfigurationKeysAreAllowed()
    {
        new TestConfiguration([
            'foo' => 'bar',
            'foobar' => false
        ]);
    }
} 