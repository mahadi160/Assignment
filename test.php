<?php
function containsOnlyLettersAndWhitespace($string) {
    return preg_match('/[A-Za-z\s]/', $string);
}
$string1 = 'Hello world 12';
$string2 = '';
var_dump(containsOnlyLettersAndWhitespace($string1)); // outputs: true
var_dump(containsOnlyLettersAndWhitespace($string2)); // outputs: false
