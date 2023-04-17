<?php

echo "10. Extracting some data from an array while keeping the original array intact: \n";

$info = ['a', 'b', 'c', 'd', 'e'];
print_r($info);
//using 'array_slice()' function:
$newInfo = array_slice($info, 2);
print_r($newInfo);

//one length to another:
$lenthInfo = array_slice($info, 2, 2);
print_r($lenthInfo);

//negative length:
$negLength = array_slice($info,1, -1);
print_r($negLength);

//positive length:
$negLength = array_slice($info,1, +1);
print_r($negLength);

//it will show the original position of array:
$originalPosition = array_slice($info,3,4,true);
print_r($originalPosition);

//preserve key in associative array:
$random = [
    'fName' => 'Marajul',
    'lName' => 'Islam',
    10 => 'tarek',
    'gName' => 'arif'
]; 
$preserve_key = array_slice($random, 0,null,true);
print_r($preserve_key);


?>
