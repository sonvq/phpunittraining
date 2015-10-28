<?php

class BaseDouble {
    
    public function doSomething(){
        echo 'YOU SHALL NOT PASS';
        $this->callExit();
    }
    
    public function callExit()
    {
        exit;
    }
}

?>