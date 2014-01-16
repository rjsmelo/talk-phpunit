<?php
use \Phplx\HelloWorld;

class InstanceOfTest extends PHPUnit_Framework_TestCase
{
    public function testTrue(){
        $obj = new stdClass();
        $this->assertTrue($obj instanceof \Phplx\HelloWorld);
    }

    public function testInstanceOf(){
        $obj = new stdClass();
        $this->assertInstanceOf('\Phplx\HelloWorld', $obj);
    }
}