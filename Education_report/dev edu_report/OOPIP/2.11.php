<?php
/*Inputs*/ 
class Baddie
{
    public $evilness = 10;
    public function makeMoreEvil() {
        $this->evilness = 20;
        return $this->evilness;
    }
        public function makeMoreEvil2() {
        $this->evilness = 15;
        return $this->evilness;
    }
}
$ganon = new Baddie;
$shark = new Baddie;
/*Outputs*/ 
echo
    $ganon->makeMoreEvil()
    . "<br><br>"
    . $shark->makeMoreEvil2()
    
;
?>