<?php
/*Inputs*/ 
function __autoload($class) {
    include "classes/".$class.".php";
}
$site = new site;
/*Outputs*/
var_dump($site);
?>