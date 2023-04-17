<?php 

echo "12. Concatenating several arrays (very important): \n";

$normalInfo = ['Junaid', 'Tarek', 'Saikat', 'Arif', 'Somrat', 'Afsar', 'Rayhan'];
$newInfo1 = array_slice($normalInfo,0,3);
$newInfo2 = array_slice($normalInfo,3,null,true);
//array merging using 'array_merge()' functon:
$newMerge = array_merge($newInfo1, $newInfo2);
print_r($normalInfo);
print_r($newInfo1);
print_r($newInfo2);
print_r($newMerge);
//array merging using '+':
$newPlusMerge = $newInfo1 + $newInfo2;
print_r($newPlusMerge);

//associative array merging with preserve key & add new value:
$associInfo = [
    'fName' => 'Marajul',
    'lName' => 'Islam',
    'aName' => 'arif',
    'tName' => 'tarek',
];
$a1 = array_slice($associInfo,0,2,true);
$a2 = array_slice($associInfo,3,null,true);
$a3 = array('sName'=>'saikat', 'hName'=>'harry');

$newAssociInfo = $a1+$a2+$a3;
print_r($newAssociInfo);



?>