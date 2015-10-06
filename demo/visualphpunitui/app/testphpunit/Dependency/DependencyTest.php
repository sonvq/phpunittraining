<?php

namespace dependencyphpunit;

use \PHPUnit_Framework_TestCase;

class DependencyTest extends PHPUnit_Framework_TestCase {
    public function setUp() {     
        $this->instance = new Salary();
    }

    public function tearDown() {
        unset($this->instance);
    }
    
    public function testCaculateWorkHour() {
        $workHour = $this->instance->caculateWorkHour(8, 5);
        $expectedWorkHour = 8 * 5;
        $this->assertEquals($expectedWorkHour, $workHour);
        return $workHour;
    }
    
    public function testCaculateMoneyToVND() {
        $moneyConverted = $this->instance->caculateMoneyToVND(20, 'USD');
        $expectedMoney = 20 * 22000;
        $this->assertEquals($expectedMoney, $moneyConverted);
        return $moneyConverted;
    }
    
    /**
     * @depends testCaculateWorkHour
     * @depends testCaculateMoneyToVND
     */
    public function testSalary($workHour, $moneyConverted) {
        $salary = $this->instance->caculateSalary($workHour, $moneyConverted);
        var_dump($salary);
        $expectedSalary = $workHour * $moneyConverted;
        $this->assertEquals($expectedSalary, $salary);
    }

}
