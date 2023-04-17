<?php

/**
 * Array Searching:
 * in_array()       ->
 * array_search()   ->it will show the position of the array means:offset
 * key_exists()     ->it find the data by key (associative array)
 */

echo "14. Searching in Indexed and Associated Arrays: \n";
$numbers = array(11,3,2,6,4,5,8,1);
//first way:in_array()
if(in_array(2,$numbers,true)){          //true is used for strickly search meanse the data type also have to be true;
    echo "The number is Found!\n";
}else{
    echo "The number isn't found!\n";
}                                   
//second way:array_search()
$offset = array_search(11,$numbers);  //this is loosly search to make it strict we have to declare true;
if($offset !== false){
    echo "The offset is: ".$offset."\n";
}else{
    echo "No offset is found \n";
}
//third way:key_exists()
$associInfo = [
    'fName' => 'Marajul',
    'lName' => 'Islam',
    'aName' => 'arif',
    'tName' => 'tarek',
];
if(key_exists('aName',$associInfo)){
    echo "The key is exists \n";
}else{
    echo "THe Key is not exists \n";
}



?>