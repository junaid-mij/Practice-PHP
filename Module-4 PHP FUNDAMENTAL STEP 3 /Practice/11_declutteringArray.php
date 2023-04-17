<?php

echo "11. Decluttering an array: \n";

$info = array('a', 'b', 'c', 'd', 'e');
//using 'array_splice()' function:
//enter new value:
$extraInfo= array("junaid","tarek");
$newInfo = array_splice($info,2,4, $extraInfo);
print_r($newInfo);
print_r($info);




?>