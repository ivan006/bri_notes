<?php
/*Attributes*/ 
include("config.php");
$title = "My Awesome OOP Site";
$content = <<<EOT
<div>
    <h1>Example Domain</h1>
    <p>This domain is established to be used for illustrative examples in documents. You may use this
    domain in examples without prior coordination or asking for permission.</p>
    <p><a href="http://www.iana.org/domains/example">More information...</a></p>
</div>
EOT;
/*Objects*/
$site->display($content, $title);
?>