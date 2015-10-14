<?php

namespace basicphpunit;

use \PHPUnit_Framework_TestCase;

class AssertTest extends PHPUnit_Framework_TestCase
{

    public function testTrueIsTrue() {
        $foo = true;
        echo "assertTrue(true)";
        $this->assertTrue($foo);
    }
    
    public function testFalseIsTrue() {
        $foo = false;
        echo "assertTrue(false)";
        $this->assertTrue($foo);
    }    
    
    public function testTwoStringEquals() {
        $firstStr = "qsoft vietnam";
        $secondStr = "qsoft vietnam";
        echo 'assertEquals("qsoft vietnam", "qsoft vietnam")';
        $this->assertEquals($firstStr, $secondStr, $firstStr . ' and ' . $secondStr . ' are the same');
    }
    
    public function testTwoStringNotEquals() {
        $firstStr = "Qsoft Vietnam";
        $secondStr = "qsoft vietnam";
        echo 'assertEquals("Qsoft Vietnam", "qsoft vietnam")';
        $this->assertEquals($firstStr, $secondStr, $firstStr . ' and ' . $secondStr . ' are different');
    }
    
    public function testAssertEquals() {
        echo 'assertEquals("2204", 2204)';
        $this->assertEquals("2204", 2204);
    }
    
    public function testAssertSame() {
        echo 'assertSame("2204", 2204)';
        $this->assertSame("2204", 2204);
    }
}
