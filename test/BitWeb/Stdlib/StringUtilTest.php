<?php

namespace BitWeb\Stdlib;

class StringUtilTest extends \PHPUnit_Framework_TestCase
{
    public function testGenerateRandomHexString()
    {
        $this->assertEquals(2, strlen(StringUtil::generateRandomHexString(2)));
        $this->assertEquals(100, strlen(StringUtil::generateRandomHexString(100)));
        $this->assertEquals(1000, strlen(StringUtil::generateRandomHexString(1000)));

        $generated = [];
        for ($i = 0; $i < 1000; $i++) {
            $generated[] = StringUtil::generateRandomHexString(200);
        }

        for ($n = 0; $n < 1000; $n++) {
            $this->assertFalse(in_array(StringUtil::generateRandomHexString(200), $generated));
        }
    }
}
