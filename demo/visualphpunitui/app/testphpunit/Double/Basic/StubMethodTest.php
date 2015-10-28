<?php

namespace doublephpunit;

class StubMethodTest extends \PHPUnit_Framework_TestCase {

    public function testStubMethod() {
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

    public function testStubMethodOnce() {
        $baseDouble = $this->getMockBuilder('BaseDouble')
            ->getMock();

        $baseDouble->expects($this->once())
            ->method('doSomething')
            ->will($this->returnValue('foo'));

        $baseDouble->doSomething();
    }

    public function testStubMethodExactly() {
        $baseDouble = $this->getMockBuilder('BaseDouble')
            ->getMock();
        
        $baseDouble->expects($this->exactly(2))
            ->method('doSomething')
            ->will($this->returnValue('foo'));
        
        $baseDouble->doSomething();
        $baseDouble->doSomething();
    }
    
    public function testStubMethodConsecutive() {
        $baseDouble = $this->getMockBuilder('BaseDouble')
            ->getMock();
        
        $baseDouble->method('doSomething')
             ->will($this->onConsecutiveCalls(2, 3, 5, 7));

        // $stub->doSomething() returns a different value each time
        var_dump($baseDouble->doSomething());
        var_dump($baseDouble->doSomething());
        var_dump($baseDouble->doSomething());
        var_dump($baseDouble->doSomething());
        var_dump($baseDouble->doSomething());
    }

}
