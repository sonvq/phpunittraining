<?php

namespace Test;

class MockObjectTest extends \PHPUnit_Framework_TestCase {

    public function testMockObject() {
        // Create a stub for the SomeClass class.
        $baseDouble = $this->getMockBuilder('BaseDouble')
            ->getMock();
        var_dump(get_class_methods($baseDouble));
                
        var_dump($baseDouble->doSomething());
        
    }

}
