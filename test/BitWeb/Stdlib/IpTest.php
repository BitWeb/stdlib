<?php

namespace BitWeb\Stdlib;

class IpTest extends \PHPUnit_Framework_TestCase
{

    public function testGetClientIpReturnsUnknown()
    {
        $this->assertEquals(Ip::IP_UNKNOWN, Ip::getClientIp());
    }

    public function testGetIpReturnsIp()
    {
        $ip = '127.0.0.1';
        $_SERVER['HTTP_CLIENT_IP'] = $ip;
        $this->assertEquals($ip, Ip::getClientIp());

        unset($_SERVER['HTTP_CLIENT_IP']);
        $_SERVER['HTTP_X_FORWARDED_FOR'] = $ip;
        $this->assertEquals($ip, Ip::getClientIp());

        unset($_SERVER['HTTP_X_FORWARDED_FOR']);
        $_SERVER['REMOTE_ADDR'] = $ip;
        $this->assertEquals($ip, Ip::getClientIp());
    }
}