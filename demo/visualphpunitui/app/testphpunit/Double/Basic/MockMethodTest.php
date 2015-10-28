<?php

namespace doublephpunit;

class MockMethodTest extends \PHPUnit_Framework_TestCase {

    public function testMockMethod() {
        $baseDouble = $this->getMockBuilder('BaseDouble')
            ->setMethods(array('callExit'))
            ->getMock();

        var_dump($baseDouble->doSomething());
        $this->assertEquals('bar', $baseDouble->doSomething());
    }

    public function testMockMethodTemp() {
        $baseDouble = $this->getMockBuilder('BaseDouble')
            ->setMethods(array('doSomething'))
            ->getMock();

        $baseDouble->expects($this->once())
            ->method('doSomething')
            ->will($this->returnValue('barss'));

        $baseDouble->doSomething();
    }

    public function testStubMethod() {
        $baseDouble = $this->getMockBuilder('BaseDouble')
            ->getMock();
        var_dump($baseDouble->doSomething());

        $this->assertEquals('bar', $baseDouble->doSomething());
    }

}
