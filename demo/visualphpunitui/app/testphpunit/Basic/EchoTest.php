<?php

namespace basicphpunit;

use \PHPUnit_Framework_TestCase;

class EchoTest extends PHPUnit_Framework_TestCase
{

    public function testEcho() {
        $baseEcho = new BaseEcho();
        $baseEcho->callEcho("QSoft Vietnam is the best");
        $this->expectOutputString("QSoft Vietnam is the best");
    }
}
