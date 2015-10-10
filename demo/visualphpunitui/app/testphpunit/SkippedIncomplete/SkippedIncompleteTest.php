<?php

namespace skippedincompletephpunit;

use \PHPUnit_Framework_TestCase;

class SkippedIncompleteTest extends PHPUnit_Framework_TestCase
{ 
    
    public function testSkipped()
    {
        $extensionName = 'mssql';
        //$extensionName = 'mysql';
        if (! extension_loaded($extensionName)) {
            $this->markTestSkipped("The $extensionName extension is not available.");
        }
    }
    
    /**
     * @requires extension pgsql
     * @requires PHP 7.0
     */
    public function testSkippedRequire()
    {
        // Test requires the mysqli extension and PHP >= 5.3
    }
    
    public function testImcomplete()
    {
        // Test something
        $this->assertTrue(true, 'This should already work.');
        
        // Stop here and mark this test as incomplete.
        $this->markTestIncomplete('This test has not been implemented yet.');
    }
   
    public function testTrueIsTrue() {
        $foo = true;
        $this->assertTrue($foo);
    }
    
    public function testFalseIsTrue() {
        $foo = false;
        $this->assertTrue($foo);
    }   
}
