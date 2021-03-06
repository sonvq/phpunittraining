<?php

namespace privateprotectedphpunit;

use \PHPUnit_Framework_TestCase;

class PrivateProtectedTest extends PHPUnit_Framework_TestCase {

//    public function testCryptPasswordNormal() {
//        $details = array();
//
//        $user = new User($details);
//
//        $password = 'foobar';
//
//        $expectedPasswordResult = '3858f62230ac3c915f300c664312c63f';
//
//        $this->assertEquals(
//            $expectedPasswordResult, $user->cryptPassword($password)
//        );
//    }
    
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
        $details = array();

        $user = new User($details);

        $password = 'foobar';

        $expectedPasswordResult = '3858f62230ac3c915f300c664312c63f';
        
        var_dump("Call invokeMethod cryptPassword return: " . $this->invokeMethod($user, 'cryptPassword', array($password)));

        $this->assertEquals(
            $expectedPasswordResult, $this->invokeMethod($user, 'cryptPassword', array($password))
        );
    }

}
