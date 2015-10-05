<?php
require 'Baseball.php';

class BaseballTest extends \PHPUnit_Framework_TestCase
{
  public function testCalcAvgEquals()
	{
		$atbats = 389;
		$hits = 129;
		$baseball = new Baseball();
		$result = $baseball->calc_avg($atbats, $hits);
		$expectedresult = $hits/$atbats;
		var_dump($result);
		var_dump($expectedresult);
		//$this->assertEquals($expectedresult, $result);
		
        // This is fine, but does it really satisfy our expectations?
        $formatexpectedresult = number_format($hits/$atbats, 3);
        var_dump($formatexpectedresult);
        $this->assertEquals($formatexpectedresult, $result);
	}
    
    public function testCalcHitsAreStrings(){
        $atbats = 389;
        $hits = 'wefwf';
        $baseball = new Baseball();
        $result = $baseball->calc_avg($atbats, $hits);

        $formatexpectedresult = 0.000;
        $this->assertEquals($formatexpectedresult, $result);
    }
    
}