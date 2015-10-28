<?php

namespace doublephpunit;

class MockMethodTest extends \PHPUnit_Framework_TestCase {

    public function testMockMethod() {
        $baseDouble = $this->getMockBuilder('BaseDouble')
            ->setMethods(array('callExit'))
            ->getMock();

        $baseDouble->expects($this->once())
            ->method('callExit')
            ->will($this->returnValue('foo'));;
        
        $baseDouble->doSomething();
        
        $this->expectOutputString('YOU SHALL NOT PASS');
                
    }

}
