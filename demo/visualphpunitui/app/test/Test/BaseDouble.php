<?php

class BaseDouble {

    public function doSomething()
    {
        // Do something.
        return 'bar';
    }
    
    public function doAnotherThing(){
         echo 'YOU SHALL NOT PASS';
        $this->callExit();
    }
    
    protected function callExit()
    {
        exit;
    }
}

?>