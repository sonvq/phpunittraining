<?php

namespace Test;

use \PHPUnit_Framework_TestCase;

class AssertTest extends PHPUnit_Framework_TestCase
{

    public function testTrueIsTrue() {
        $foo = true;
        $this->assertTrue($foo);
    }
    
    public function testFalseIsTrue() {
        $foo = false;
        $this->assertTrue($foo);
    }    
    
    public function testTwoStringEquals() {
        $firstStr = "qsoft vietnam";
        $secondStr = "qsoft vietnam";
        $this->assertEquals($firstStr, $secondStr, $firstStr . ' and ' . $secondStr . ' are the same');
    }
    
    public function testTwoStringNotEquals() {
        $firstStr = "Qsoft Vietnam";
        $secondStr = "qsoft vietnam";
        $this->assertEquals($firstStr, $secondStr, $firstStr . ' and ' . $secondStr . ' are different');
    }
}
