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

}
