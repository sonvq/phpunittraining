<?php

namespace doublephpunit;

class StubMethodTest extends \PHPUnit_Framework_TestCase {

    public function testStubMethod() {
        // Create a stub for the SomeClass class.
        //$baseDouble = $this->getMockBuilder('BaseDouble')->getMock();
        $baseDouble = $this->getMockBuilder('BaseDouble')
            ->getMock();

        // Configure the stub.
        $baseDouble->method('callExit')
            ->willReturn('foo');

        var_dump($baseDouble->callExit());

        $this->assertEquals('foo', $baseDouble->callExit());
    }

    public function testStubMethodOnce() {
        $baseDouble = $this->getMockBuilder('BaseDouble')
            ->getMock();

        $baseDouble->expects($this->once())
            ->method('callExit')
            ->will($this->returnValue('foo'));

        var_dump($baseDouble->callExit());
    }

    public function testStubMethodExactly() {
        $baseDouble = $this->getMockBuilder('BaseDouble')
            ->getMock();
        
        $baseDouble->expects($this->exactly(2))
            ->method('callExit')
            ->will($this->returnValue('foo'));
        
        var_dump($baseDouble->callExit());
        var_dump($baseDouble->callExit());
    }
    
    public function testStubMethodAny() {
        $baseDouble = $this->getMockBuilder('BaseDouble')
            ->getMock();
        
        $baseDouble->expects($this->any())
            ->method('callExit')
            ->will($this->returnValue('foo'));
        
        var_dump($baseDouble->callExit());
        var_dump($baseDouble->callExit());
        var_dump($baseDouble->callExit());
    }
    
    public function testStubMethodConsecutive() {
        $baseDouble = $this->getMockBuilder('BaseDouble')
            ->getMock();
        
        $baseDouble->method('callExit')
             ->will($this->onConsecutiveCalls(2, 3, 5, 7));

        // $stub->doSomething() returns a different value each time
        var_dump($baseDouble->callExit());
        var_dump($baseDouble->callExit());
        var_dump($baseDouble->callExit());
        var_dump($baseDouble->callExit());
        var_dump($baseDouble->callExit());
    }

}
