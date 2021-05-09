<?php

class Number {
    public $number;
    public function __construct() {
        $this->number = rand(1,10);
        echo
            $this->number
            . "<br>"
        ;
        ob_flush();
        flush();
        sleep(2);
        unset($this);
    }
    public function __destruct() {
        $number = new Number;
    }
}
$number = new Number;

/*Outputs*/
//echo
    
//;
?>