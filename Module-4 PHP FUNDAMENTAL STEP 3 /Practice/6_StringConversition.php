<?php

echo "6. Associative Array to String Conversion - Serialize, json: \n";
$info =[
    'name'=>'Marajul Islam',
    'roll'=>'977277',
    'phone'=>'01851666974'
];
//normarl way:
echo $info['name']." ".$info['roll']."\n";
//advance way:
printf("%s %s \n",$info['name'],$info['roll']);

echo PHP_EOL;
echo "Data Serialize and Unserialize: \n";
echo "Serialize: \n";
$serialized = serialize($info);
echo $serialized."\n";
echo "Unserialize: \n";
$newInfo = unserialize($serialized);
print_r($newInfo);

echo PHP_EOL;
//Convert to Json:
echo "Convert to Json {Encode & Decode}:(JavaScript Object Notation)  \n";
//json encode:
$jsonData = json_encode($info);
echo $jsonData."\n";
//json decode:
$newJsonInfo = json_decode($jsonData,true);  //'true' means it will treat the data like array else: stdclass 
print_r($newJsonInfo);



?>