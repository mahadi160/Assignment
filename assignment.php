<?php

$tuitionFee = 20000;

$twentyFivePercent = $tuitionFee * 25 / 100;
$twentyPercent = $tuitionFee * 20 / 100;
$fifteenPercent = $tuitionFee * 15 / 100;

$output = ($tuitionFee >= 20000)? "$twentyFivePercent" : ($tuitionFee >= 10000 && $tuitionFee <= 20000)? "$twentyPercent" :($tuitionFee >= 7000 && $tuitionFee <= 10000)? "$fifteenPercent" : "the data will be invalid.";
echo $output;


