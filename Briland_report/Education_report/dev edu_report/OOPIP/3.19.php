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
    public function __toString() {
        echo $this->name;
    }
}
$ganon = new Baddie(8,"ganon");

    
/*Outputs*/
echo $ganon;
?>