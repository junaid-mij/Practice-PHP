<?php

/**
 * 1.Write a PHP function to sort an array of strings by their length, in ascending order. 
 */
echo "1.\n";
function sortStringsByLength($array) {
    usort($array, function($a, $b) {
        return strlen($a) - strlen($b);
    });
    return $array;
}

$strings = ["apple", "banana", "pear", "orange", "kiwi"];
$sortedStrings = sortStringsByLength($strings);
print_r($sortedStrings);

//End 1st Question.
echo PHP_EOL;


/**
 * 2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.
 */
echo "2.\n";
function concatenateStrings($str1, $str2) {
    $len1 = strlen($str1);
    $len2 = strlen($str2);
    $newStr = $str1 . strrev(substr($str2, 0, $len2)) ;
    return $newStr;
}
$string1 = "Hello";
$string2 = "world";
$newString = concatenateStrings($string1, $string2);
echo $newString;

//End 2nd Question.
echo PHP_EOL;
echo PHP_EOL;


/**
 * 3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.
 */
echo "3.\n";
function removeFirstAndLast($arr) {
    array_shift($arr); // remove the first element
    array_pop($arr); // remove the last element
    return $arr;
}
$array = array(1, 2, 3, 4, 5);
$newArray = removeFirstAndLast($array);
print_r($newArray);

//End 3rd Question.
echo PHP_EOL;


/**
 * 4.Write a PHP function to check if a string contains only letters and whitespace.
 */
echo "4.\n";
function isLettersAndWhitespace($str) {
    return preg_match('/^[a-zA-Z\s]+$/', $str);
}
$string1 = "Hello world";
if (isLettersAndWhitespace($string1)) {
    echo "String 1 contains only letters and whitespace.";
} else {
    echo "String 1 contains other characters.";
}

//End 4th Question.
echo PHP_EOL;
echo PHP_EOL;


/**
 * 5.Write a PHP function to find the second largest number in an array of numbers.
 */
echo "5.\n";
function findSecondLargest($arr) {
    $max1 = $arr[0];
    $max2 = $arr[0];
    $n = count($arr);
    for ($i = 1; $i < $n; $i++) {
        if ($arr[$i] > $max1) {
            $max2 = $max1;
            $max1 = $arr[$i];
        } elseif ($arr[$i] > $max2 && $arr[$i] != $max1) {
            $max2 = $arr[$i];
        }
    }
    return $max2;
}
$array = array(1, 2, 3, 4, 5);
$secondLargest = findSecondLargest($array);
echo "The second largest number is: " . $secondLargest;

//End 5th Question.


?>