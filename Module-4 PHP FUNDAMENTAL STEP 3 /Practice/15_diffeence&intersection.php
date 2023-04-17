<?php 

/**
 * array_intersect()        ->finding the common value in two arrays:note(it shows only by value)
 * array_intersect_assoc()  ->finding the common key & value in two arrays:note(it show by key & value)
 * array_diff()             ->finding the difference value in two arrays:note(it shows only by vlaue)
 * array_diff_assoc()       ->finding the difference key & value in two arrays:note(it show by key &  value)
 * 
 */

echo "15. Difference and intersection of two indexed and associated arrays: \n";

//numbers array:
$numbers = array(11,3,2,6,4,5,8,24,6,32,4,6,8,1);
$numbers2 = array(11,45,2,7,1,5,5,13,6,4,28,1);
//associative array:
$associInfo = [
    'fName' => 'Marajul',
    'lName' => 'Islam',
    'le' => 'lam',
    'aName' => 'arif',
    'tName' => 'tarek',
];
$associInfo2 = [
    'fName' => 'Marajul',
    'fN' => 'rajul',
    'lName' => 'Islam',
    'aName' => 'arif',
    'adfs' => 'fasdf',
    'tName' => 'tarek',
];
//check common number by value: array_intersect()
$commonNumbers = array_intersect($numbers, $numbers2);
print_r($commonNumbers);
//check common array by key & value: array_intersect_assoc() 
$commonkey = array_intersect_assoc($associInfo, $associInfo2);
print_r($commonkey);
//check different number by value: array_diff()
$diffNumbers = array_diff($numbers, $numbers2);
print_r($diffNumbers);
//second array:
$diffNumbers2 = array_diff($numbers2, $numbers);
print_r($diffNumbers2);

?>