<?php

/**
 * sort()   ->this just a normal sorting
 * rsort()  ->it will reverse the sorting data
 * asort()  ->this is also sorting but it has a extra feature that it preserve key value
 * arsort() ->same as asort() but it reverse the data
 * ksort()  ->this function only sort the key not the data means sorting by key
 * krsort() ->same as ksort() but reverse the key
 * usort()  ->this function that allows you to sort an array using a custom comparison function. 
 * SORT_STRING ->it will sort the data by string
 * SORT_STRING | SORT_FLAG_CASE     ->this a case insencitive function
 */

echo "13. Sorting Indexed and Associated Arrays: \n";

$fruits = array('mango', 'avocado', 'banana', 'lemon', 'orange', 'peach ');
sort($fruits);              //using 'sort()' function;
print_r($fruits);

$associInfo = [
    'fName' => 'Marajul',
    'lName' => 'Islam',
    'aName' => 'arif',
    'tName' => 'tarek',
];
asort($associInfo);         //using 'asort()' function;
print_r($associInfo);

echo "* Now how to use loop in sorting function: \n";
$numbers = array(11,3,2,6,4,5,8,1);
asort($numbers);
print_r($numbers);
//to access the sorting data we need to use 'foreach' loop...
foreach($numbers as $number){
    echo $number."\n";
}
//another sorting is reverse sorting:arsort()
arsort($numbers);     //this allow us to rev the value means big to small
print_r($numbers);

//using 'ksort()':
ksort($associInfo);
print_r($associInfo);



?>