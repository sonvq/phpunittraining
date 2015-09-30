<?php

class TemplateTest extends \PHPUnit_Framework_TestCase {

    public function setUp() {
        $this->instance = new Baseball();
    }

    //tear down method
    public function tearDown() {
        unset($this->instance);
    }

    /*
     * because OPS is sum total of on base percentage plus sluggin average, we can use the depends annotation 
     */
    public function testSlugging() {
        $slg = $this->instance->calc_slg(389, 106, 12, 4, 7);
        $expectedslg = number_format(((106 * 1) + (12 * 2) + (4 * 3) + (7 * 4)) / 389, 3);
        $this->assertEquals($expectedslg, $slg);
        return $slg;
    }

    public function testOnBasePerc() {
        $obp = $this->instance->calc_obp(389, 23, 6, 7, 129);
        $expectedobp = number_format((129 + 23 + 6 + 7) / 389, 3);
        $this->assertEquals($expectedobp, $obp);
        return $obp;
    }

    /**
     * @depends testSlugging
     * @depends testOnBasePerc
     */
    public function testOps($obp, $slg) {
        $ops = $this->instance->calc_ops($obp, $slg);
        $expectedops = $obp + $slg;
        $this->assertEquals($expectedops, $ops);
    }

    //If either testSlugging or testOnBasePerc fail, testOps will be skipped. Multiple return values will be passed into testOps
    //Using dependencies can be a great way to handle testing and 
    //multiple dependencies have many use cases where they can speed up testing and remove duplicate work.
}
