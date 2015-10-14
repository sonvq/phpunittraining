<?php

class BaseDouble {

    public function doSomething()
    {
        // Do something.
        return 'bar';
    }
    
    public function doAnotherThing(){
        echo 'After this line, function exit will be called';
        $this->callExit();
    }
    
    protected function callExit()
    {
        exit;
    }
}

?>