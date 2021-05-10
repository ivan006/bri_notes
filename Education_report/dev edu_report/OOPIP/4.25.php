<?php
/*Inputs*/ 
class Baddie {
    public $evilness = 10;
    public function moreEvil() {
        ++$this->evilness;
    }
    public function __destruct() {
        echo "You beat a baddie!";
    }
}
class Boss extends Baddie {
    public $evilness = 50;
    public function __destruct() {
        parent::__destruct();
        echo "The level has ended!";
    }
}
$ganon = new Boss;  
unset($ganon);
/*Outputs*/
?>