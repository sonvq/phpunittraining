<?php

namespace privateprotectedphpunit;

use \PHPUnit_Framework_TestCase;

class TemplateTest extends PHPUnit_Framework_TestCase {

    public function setUp() {
        $details = array();        
        $this->instance = new User($details);
    }

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
    public function invokeMethod(&$object, $methodName, array $parameters = array()) {
        $reflection = new \ReflectionClass(get_class($object));
        $method = $reflection->getMethod($methodName);
        $method->setAccessible(true);
        return $method->invokeArgs($object, $parameters);
    }

    public function testCryptPassword() {
        $password = 'foobar';

        $expectedPasswordResult = '3858f62230ac3c915f300c664312c63f';

        var_dump("Call invokeMethod cryptPassword return: " . $this->invokeMethod($this->instance, 'cryptPassword', array($password)));

        $this->assertEquals(
            $expectedPasswordResult, $this->invokeMethod($this->instance, 'cryptPassword', array($password))
        );
    }

    public function testSetPasswordReturnsTrue() {
        $password = 'foobar';

        $result = $this->instance->setPassword($password);

        $this->assertTrue($result);
    }
    
    public function testSetPasswordReturnsFalse() {
        $password = 'fubar';

        $result = $this->instance->setPassword($password);

        $this->assertTrue($result, $password . " should be at least 6 characters long");
    }

}
