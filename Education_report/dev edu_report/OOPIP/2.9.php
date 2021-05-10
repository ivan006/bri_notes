<?php
/*Inputs*/ 
class Baddie
{
    public $evilness = 10;
    public function makeMoreEvil() {
        $this->evilness = 20;
        return $this->evilness;
    }
}
$ganon = new Baddie;
/*Outputs*/ 
echo $ganon->makeMoreEvil();
?>