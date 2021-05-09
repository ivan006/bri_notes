<?php
/*Inputs*/ 
class site {
    private $header;
    private $footer;
    public function addHeader($header) {
        $this->header = $header;
    }
        public function addFooter($footer) {
        $this->footer = $footer;
    }
}
?>