<?php

namespace doublephpunit;

class Salary {

    private $converted;
    private $hour;
    private $salary;   
    private $rates;

    const OPEN_EXCHANGE_API_URL = 'https://openexchangerates.org/api/';
    const APP_ID = '68f8c549dee745dd9582e254c3686438';
    const DEFAULT_CURRENCY = 'VND';
    
    public function getCurrencyConverter($foreignCurrency)
	{
        $methodCall = '/latest';
        
        $url = self::OPEN_EXCHANGE_API_URL . $methodCall . '.json' . '?app_id=' 
            . self::APP_ID . '&base=' . $foreignCurrency;

        $result = file_get_contents($url);
        
        $objects = json_decode($result, true);
        
        $this->rates = $objects['rates'][self::DEFAULT_CURRENCY];

        return $this->rates;
	}
    
    public function caculateWorkHour($hours, $days) {
        $this->hour = $hours * $days;
        return $this->hour;
    }
    
    public function caculateSalary($amounts, $hours, $rates) {
        $this->salary = $amounts * $hours * $rates;
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
    
    public function getRates() {
        return $this->rates;
    }    
    public function setRates($_rates) {
        $this->rates = $_rates;
    }
}
