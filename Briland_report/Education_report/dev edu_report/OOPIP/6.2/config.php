<?php
class site {
    private $header;
    private $footer;
    public function addHeader($header) {
        $this->header = $header;
    }
        public function addFooter($footer) {
        $this->footer = $footer;
    }
    public function display($content, $title) {
        echo "
        <!doctype html>
        <html>
            <head>
                <title>
        ";
        
        echo $title;
        echo "
                </title>
                <link rel='stylesheet' type='text/css' href='mystyle.css'>
            </head>
        <body>
        ";
        include $this->header;
        global $page;
        $page->display($content);
        echo "</body></html>";
    }
}
class page {
    public function display($content) {
        echo $content;
    }
}



$site = new site;

$site->addHeader("header.php");
$site->addFooter("footer.php");
$page = new page;
?>