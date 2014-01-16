<?php
namespace Phplx\Tests\Object;

use \PHPUnit_Framework_TestCase;
use \Phplx\Object;

class AssertTypeTest extends PHPUnit_Framework_TestCase
{
    public function testObject(){
        $obj = new Object();
        $this->assertTrue($obj instanceof Object);
    }

    public function testObjectBetter(){
        $obj = new Object();
        $this->assertInstanceOf('\Phplx\Object', $obj);
    }
}