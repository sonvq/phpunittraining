<?php

namespace doublephpunit;

class MockObjectTest extends \PHPUnit_Framework_TestCase {
    
//    public function testBaseDouble () {
//        $baseDouble = new \BaseDouble();
//        $this->expectOutputString('YOU SHALL NOT PASS', $baseDouble->doSomething());
//    }

    public function testMockObject() {
        // Create a stub for the SomeClass class.
        $baseDouble = $this->getMockBuilder('BaseDouble')
            ->getMock();
        var_dump(get_class_methods($baseDouble));
                
        var_dump($baseDouble->doSomething());
        var_dump($baseDouble->callExit());
    }

}
