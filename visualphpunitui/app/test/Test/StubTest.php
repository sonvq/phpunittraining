<?php

namespace Test;

class StubTest extends \PHPUnit_Framework_TestCase {

    public function testStub() {
        // Create a stub for the SomeClass class.
        $stub = $this->getMock('BaseDouble');
        //var_dump(get_class_methods($stub));

        // Configure the stub.
        $stub->method('doSomething')
            ->willReturn('foo');

        var_dump($stub->doSomething());
        // Calling $stub->doSomething() will now return
        // 'foo'.
        $this->assertEquals('foo', $stub->doSomething());
    }

}
