<?php
use \Phplx\Object;

class JsonStringTest extends PHPUnit_Framework_TestCase
{
    protected $jsonString = '{"someKey":"some thing","otherKey":"other thing"}';

    public function testEquals(){
        $obj = new Object();
        $this->assertEquals($this->jsonString, $obj->myPreciousJson());
    }

    public function testJsonString(){
        $obj = new Object();
        $this->assertJsonStringEqualsJsonString($this->jsonString, $obj->myPreciousJson());
    }
}