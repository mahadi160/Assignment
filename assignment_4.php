<?php
/*
1.Write a PHP function to sort an array of strings by their length, 
in ascending order. (Hint: You can use the usort() function to define a 
custom sorting function.)
*/

// Answer : 1

function strings_length_in_ascending_order(array $strings){
    usort($strings, function ($a , $b){
       return strlen($a) - strlen($b);
    });
    return $strings;
}

$strings = array('apple', 'banana', 'orange', 'pear', 'grapefruit');
$sorted_strings = strings_length($strings);
print_r($sorted_strings);


// output:
// Array
// (
//     [0] => pear
//     [1] => apple
//     [2] => banana
//     [3] => orange
//     [4] => grapefruit
// )


/*
2.Write a PHP function to concatenate two strings, 
but with the second string starting from the end of 
the first string.
*/

// Answer : 2

function concatenate_strings_from_end($string1, $string2) {
    return substr($string1,  -strlen($string2)) . $string2;
  }

  $string1 = "Hello";
  $string2 = "world!";
  $result = concatenate_strings_from_end($string1, $string2);
  echo $result;

  // output: "Helloworld!"

  echo "\n \n";


/*
3.Write a PHP function to remove the first and last element from
an array and return the remaining elements as a new array.
*/

// Answer : 3

function remove_first_and_last(array $fruit) {
    array_shift($fruit);
    array_pop($fruit);
    return $fruit;
  }

$fruit = array('apple', 'banana', 'orange', 'pear', 'grapefruit');
$new_fruit = remove_first_and_last($fruit);
print_r($new_fruit);

// output:
// Array
// (
//     [0] => banana
//     [1] => orange
//     [2] => pear
// )

// 4. Write a PHP function to check if a string contains only letters and whitespace.
// Answer : 4
function letters_and_whitespace($string) {
    return preg_match('/[A-Za-z\s]/', $string);
}
$string1 = 'Hello world';
$string2 = '';
var_dump(letters_and_whitespace($string1));
var_dump(letters_and_whitespace($string2)); 

//string1 outputs: true
//string2 outputs: false

// 5.Write a PHP function to find the second largest number in an array of numbers.
// Answer : 5

function find_the_second_largest_number($numbers) {
    $largest = $numbers[0];
    $second_largest = $numbers[0];
  
    foreach ($numbers as $number) {
      if ($number > $largest) {
        $second_largest = $largest;
        $largest = $number;
      } else if ($number > $second_largest && $number != $largest) {
        $second_largest = $number;
      }
    }
  
    return $second_largest;
  }
  
$numbers = array(1, 10, 7, 8, 5, 1, 12);
$second_largest = find_the_second_largest_number($numbers);
echo "The second largest number is: " .$second_largest; 

// Output: The second largest number is: 10
