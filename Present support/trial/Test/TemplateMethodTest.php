<?php

namespace Test;

class TemplateMethodTest extends \PHPUnit_Framework_TestCase {

    public static function setUpBeforeClass()
    {
        var_dump(__METHOD__);
    }

    protected function setUp()
    {
        var_dump(__METHOD__);
    }

    protected function assertPreConditions()
    {
        var_dump(__METHOD__);
    }

    public function testOne()
    {
        var_dump(__METHOD__);
        $this->assertTrue(TRUE);
    }

    public function testTwo()
    {
        var_dump(__METHOD__);
        $this->assertTrue(TRUE);
    }

    protected function assertPostConditions()
    {
        var_dump(__METHOD__);
    }

    protected function tearDown()
    {
        var_dump(__METHOD__);
    }

    public static function tearDownAfterClass()
    {
        var_dump(__METHOD__);
    }

    protected function onNotSuccessfulTest(Exception $e)
    {
        var_dump(__METHOD__);
        throw $e;
    }
}
