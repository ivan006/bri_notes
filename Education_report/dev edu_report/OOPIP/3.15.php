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

}

/*Outputs*/
$ganon = new Baddie(8,"ganon");
$ganon2 = new Baddie(5,"ganon2");
var_dump($ganon);
var_dump($ganon2);
?>