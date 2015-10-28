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
    
    public function testStubMethodAdvance() {
        $baseDouble = $this->getMockBuilder('BaseDouble')
            ->setMethods(array('doSomething'))
            ->getMock();

//        $baseDouble->expects($this->once())
//            ->method('doSomething')
//            ->will($this->returnValue('barss'));
        
        $baseDouble->expects($this->exactly(2))
            ->method('doSomething')
            ->will($this->returnValue('barss'));

        $baseDouble->doSomething();
        $baseDouble->doSomething();
        $baseDouble->doSomething();
        
        // Configure the stub.
        $stub->method('doSomething')
             ->will($this->onConsecutiveCalls(2, 3, 5, 7));

        // $stub->doSomething() returns a different value each time
        $this->assertEquals(2, $stub->doSomething());
        $this->assertEquals(3, $stub->doSomething());
        $this->assertEquals(5, $stub->doSomething());
    }

}
