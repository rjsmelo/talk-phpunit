<?php
namespace Phplx\Tests\HelloWorld;

use \PHPUnit_Framework_TestCase;
use \Phplx\HelloWorld;

class HelloWorldTest extends PHPUnit_Framework_TestCase
{
    public function testHelloWorld()
    {
        $obj = new HelloWorld();
        $this->assertEquals("Hello World", $obj->say());
    }
}
