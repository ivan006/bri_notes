<?php
/*Inputs*/ 
class Baddie {
    public $evilness = 10;
    public function moreEvil() {
        ++$this->evilness;
    }
}
class Boss extends Baddie {
    public $evilness = 50;
    public function __destruct() {
        echo "You beat the boss!";
    }
}
$ganon = new Boss;  
unset($ganon);
/*Outputs*/

?>