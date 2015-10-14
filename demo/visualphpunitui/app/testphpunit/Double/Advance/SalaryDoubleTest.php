<?php

namespace doublephpunit;

use \PHPUnit_Framework_TestCase;

class SalaryDoubleTest extends PHPUnit_Framework_TestCase {
    public function setUp() {     
        $this->instance = $this->getMockBuilder('BaseSalary')
            ->setMethods(array('getCurrencyConverter'))
            ->getMock(); 
    }

    public function tearDown() {
        unset($this->instance);
    }   
    
    public function testGetCurrencyConverterDoubleWay() {
        $this->instance->method('getCurrencyConverter')
            ->willReturn(22306);
        
        $rates = $this->instance->getCurrencyConverter('USD');
        var_dump($rates);
        return $rates;
    } 
    
    public function testCaculateWorkHour() {
        $hours = $this->instance->caculateWorkHour(8, 5);
        $expectedWorkHour = 8 * 5;
        $this->assertEquals($expectedWorkHour, $hours);
        return $hours;
    }
    
    /**
     * @depends testGetCurrencyConverterDoubleWay
     * @depends testCaculateWorkHour
     */
    public function testSalary($rates, $hours) {        
        $salary = $this->instance->caculateSalary(20, $hours, $rates);
        var_dump($salary);
        $expectedSalary = 20 *  $hours * 22306;
        $this->assertEquals($expectedSalary, $salary);
    }

}
