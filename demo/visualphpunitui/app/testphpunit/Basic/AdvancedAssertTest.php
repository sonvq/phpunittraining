<?php

namespace basicphpunit;

use \PHPUnit_Framework_TestCase;

class AdvancedAssertTest extends PHPUnit_Framework_TestCase {

    public function testSluggifyReturnsSluggifiedString() {
        $originalString = 'This string will be sluggified';
        $expectedResult = 'this-string-will-be-sluggified';

        var_dump($originalString);        
        var_dump($expectedResult);
        
        $url = new URL();

        $result = $url->sluggify($originalString);
        
        $this->assertEquals($expectedResult, $result);
    }

    public function testSluggifyReturnsExpectedForStringsContainingNumbers() {
        $originalString = 'This1 string2 will3 be 44 sluggified10';
        $expectedResult = 'this1-string2-will3-be-44-sluggified10';

        var_dump($originalString);        
        var_dump($expectedResult);
        
        $url = new URL();

        $result = $url->sluggify($originalString);

        $this->assertEquals($expectedResult, $result);
    }

    public function testSluggifyReturnsExpectedForStringsContainingSpecialCharacters() {
        $originalString = 'This! @string#$ %$will ()be "sluggified';
        $expectedResult = 'this-string-will-be-sluggified';

        var_dump($originalString);        
        var_dump($expectedResult);
        
        $url = new URL();

        $result = $url->sluggify($originalString);

        $this->assertEquals($expectedResult, $result);
    }

    public function testSluggifyReturnsExpectedForStringsContainingNonEnglishCharacters() {
        $originalString = "Tänk efter nu – förr'n vi föser dig bort";
        $expectedResult = 'tank-efter-nu-forrn-vi-foser-dig-bort';

        var_dump($originalString);        
        var_dump($expectedResult);
        
        $url = new URL();

        $result = $url->sluggify($originalString);

        $this->assertEquals($expectedResult, $result);
    }

    public function testSluggifyReturnsExpectedForEmptyStrings() {
        $originalString = '';
        $expectedResult = '';

        var_dump($originalString);        
        var_dump($expectedResult);
        
        $url = new URL();

        $result = $url->sluggify($originalString);

        $this->assertEquals($expectedResult, $result);
    }

}
