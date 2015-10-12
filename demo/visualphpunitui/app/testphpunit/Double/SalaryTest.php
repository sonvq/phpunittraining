<?php

namespace doublephpunit;

use \PHPUnit_Framework_TestCase;

class SalaryTest extends PHPUnit_Framework_TestCase {
    public function setUp() {     
        $this->instance = new Salary();
    }

    public function tearDown() {
        unset($this->instance);
    }
    
    
    public function testGetCurrencyConverter() {
        $rates = $this->instance->getCurrencyConverter('USD');
        $expectedRates = 22306;
        $this->assertEquals($expectedRates, $rates);
        return $rates;
    }      
    
    public function testCaculateWorkHour() {
        $hours = $this->instance->caculateWorkHour(8, 5);
        $expectedWorkHour = 8 * 5;
        $this->assertEquals($expectedWorkHour, $hours);
        return $hours;
    }
    
    /**
     * @depends testGetCurrencyConverter
     * @depends testCaculateWorkHour
     */
    public function testSalary($rates, $hours) {        
        $salary = $this->instance->caculateSalary(20, $hours, $rates);
        var_dump($salary);
        $expectedSalary = 20 *  $hours * 22306;
        $this->assertEquals($expectedSalary, $salary);
    }

}
