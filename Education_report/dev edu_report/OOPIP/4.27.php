<?php
/*Inputs*/ 
class Baddie {
    private $evilness = 10;
    public function getEvilness() {
        return $this->evilness;
    }
    public function setEvilness($evilness) {
        $this->evilness = $evilness;
    }
}
class Boss extends Baddie {
    public function getBaddieEvilness() {
        return $this->evilness;
    }
}
$ganon = new Boss; 
$ganon->setEvilness(25);
/*Outputs*/
echo $ganon->getEvilness();
?>