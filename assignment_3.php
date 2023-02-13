<?php

// 1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision

function isEven($x){
    if($x % 2 == 0){
        return true;
    }
    return false;
}

$number = 12;

if(isEven($number)){
    echo "{$number} is an Even number";
}else {
    echo "{$number} is an Odd number";
}

echo "\n====================================\n";

// 2. 1+2+3...…….100  Write a loop to calculate the summation of the series

$veryOld = 0;
$first = 1;
$second = 1;

for ($i = 0 ; $i <= 100 ; $i++ ){
    echo $veryOld. "  ";
    $first = $second;
    $second = $first + $veryOld;
    $veryOld = $first;
}

