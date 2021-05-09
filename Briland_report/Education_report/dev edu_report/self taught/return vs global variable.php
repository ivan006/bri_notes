<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    /* return */
    function calc($n,$n2){
        $sum=$n+$n2;
        return $sum;
    }
    $result=calc(5,5);
    $result2=calc(10,10);
    echo $result."<br>";
    echo $result2."<br>";
    
    /* global variable */
    
    function calc2($n3,$n4){
        global $sum2;
        $sum2=$n3+$n4;
    }
    calc2(15,15);
    echo $sum2."<br>";
    calc2(20,20);
    echo $sum2."<br>";
?>
</body>
</html>