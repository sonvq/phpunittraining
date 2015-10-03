<?php

namespace Test;

class MockTest extends \PHPUnit_Framework_TestCase {

    public function testStub() {
        // Create a stub for the SomeClass class.
        $mock = $this->getMock('BaseDouble', array('doSomething'));

        // Configure the stub.
        $mock->expects($this->any())->method('doSomething')
            ->will($this->returnValue('foo'));

        // Calling $stub->doSomething() will now return
        // 'foo'.
        $this->assertEquals('foo', $mock->doSomething());
    }

}
