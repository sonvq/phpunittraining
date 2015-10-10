<?php

namespace doublephpunit;

class StubMethodTest extends \PHPUnit_Framework_TestCase {

    public function testStubMethod() {
//        $baseDouble = new \BaseDouble();
//        $this->assertEquals('YOU SHALL NOT PASS', $baseDouble->doAnotherThing());
        
        // Create a stub for the SomeClass class.
        //$baseDouble = $this->getMockBuilder('BaseDouble')->getMock();
        $baseDouble = $this->getMockBuilder('BaseDouble')
            ->getMock();
        
        var_dump($baseDouble->doSomething());
        
        // Configure the stub.
        $baseDouble->method('doSomething')
            ->willReturn('foo');
        
        var_dump($baseDouble->doSomething());
        
        $this->assertEquals('foo', $baseDouble->doSomething());
        
    }

}
