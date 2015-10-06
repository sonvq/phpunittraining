<?php

namespace dependencyphpunit;

class Salary {

    private $converted;
    private $hour;
    private $salary;
    
    const DEFAULT_CURRENCY = 'VND';

    public function caculateWorkHour($hours, $days) {
        $this->hour = $hours * $days;
        return $this->hour;
    }
    
    public function caculateMoneyToVND($amount, $foreignCurrency) {
        if ($foreignCurrency == 'USD') {
            $this->converted = $amount * 22000;
        } elseif ($foreignCurrency == 'GBP') {
            $this->converted = $amount * 34000;
        }
        return $this->converted;
    }
    
    public function caculateSalary($amount, $moneyConverted) {
        $this->salary = $amount * $moneyConverted;
        return $this->salary;
    }
  
    public function getConverted() {
        return $this->converted;
    }    
    public function setConverted($_converted) {
        $this->rate = $_converted;
    }
    
    public function getHour() {
        return $this->hour;
    }    
    public function setHour($_hour) {
        $this->hour = $_hour;
    }
    
    public function getSalary() {
        return $this->salary;
    }    
    public function setSalary($_salary) {
        $this->salary = $_salary;
    }
}
