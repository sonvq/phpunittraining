<?php

namespace Test;

class PrivateTest extends \PHPUnit_Framework_TestCase {

    public function setUp() {
        $this->instance = new Baseball();
    }

    //tear down method
    public function tearDown() {
        unset($this->instance);
    }

    /**
     * Call protected/private method of a class
     * 
     * @param object &$object    Instantiated object that we will run method on.
     * @param string $methodName Method name to call
     * @param array  $parameters Array of parameters to pass into method.
     * 
     * @return mixed Method return.
     */
    
    //PHPUnit relies heavily on reflection, as do other mocking frameworks.
    //available in version >= 5.3.2
    //accessing a private method with a reflection class
    
    public function invokeMethod(&$object, $methodName, array $parameters = array()) {
        $reflection = new \ReflectionClass(get_class($object));
        $method = $reflection->getMethod($methodName);
        $method->setAccessible(true);
        return $method->invokeArgs($object, $parameters);
    }
    
    public function testcalcAvgPrivate() {
        $avg = number_format(129/369,3);
        var_dump($avg);
        var_dump($this->invokeMethod($this->instance, 'calc_avg', array(369,129)));
        $this->assertEquals($avg, $this->invokeMethod($this->instance, 'calc_avg_private', array(369,129)));
        //$this->assertEquals($avg, $this->instance->calc_avg_private(369, 129));
    }
    
    public function testcalcAvgProtected() {
        $avg = number_format(129/369,3);
        var_dump($avg);
        var_dump($this->invokeMethod($this->instance, 'calc_avg', array(369,129)));
        $this->assertEquals($avg, $this->invokeMethod($this->instance, 'calc_avg_protected', array(369,129)));
        //$this->assertEquals($avg, $this->instance->calc_avg_protected(369, 129));
    }
}
