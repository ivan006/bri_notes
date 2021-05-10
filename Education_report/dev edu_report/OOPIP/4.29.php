<?php
/*Inputs*/ 
class Baddie {
    public static $level = 1;
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
/*Outputs*/
echo Baddie::$level;
?>