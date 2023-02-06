<?php

$x = 20000;

$twentyFivePercent = $x * 25 /100;
$twentyPercent = $x * 20 /100;
$fifteenPercent = $x * 15 /100;

$calculator = ($x >= 20000) ? "$twentyFivePercent" : (($x >= 10000 && $x <20000)? "$twentyPercent":(($x >= 7000 && $x < 10000)? "$fifteenPercent" : "the data will be invalid")) ;
echo $calculator;