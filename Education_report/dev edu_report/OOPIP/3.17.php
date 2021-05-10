<?php
/*Inputs*/ 
class Baddie
{
    public $evilness = 10;
    public $name;
    public function __construct($evilness,$name) {
        $this->evilness = $evilness;
        $this->name = $name;
    }
    public function __destruct() {
        echo "A ".__CLASS__." shas been destoyred!";
    }
}
$ganon = new Baddie(8,"ganon");
unset($ganon);
    
/*Outputs*/
//var_dump($ganon);
?>