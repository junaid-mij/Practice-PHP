<?php

echo "3. Detailed discussion of associative arrays: \n";
//associative array:
$info =[
    'name'=>'Marajul Islam',
    'roll'=>'977277',
    'phone'=>'01851666974'
];
echo $info['name'];

//add value to an existing array key:
//easy-way:
//$info['phone'] = $info['phone'].", 01835475019";
$info['phone'] .=", 01835475019";

echo PHP_EOL;
echo PHP_EOL;

//using loop in array:
foreach($info as $key=>$value){
    echo $key."=".$value."\n";
}

echo PHP_EOL;
echo PHP_EOL;

//{array_keys} & {array_values} this two are php built-in function:
$keys=array_keys($info);
print_r($keys);
echo PHP_EOL;
$values=array_values($info);
print_r($values);

echo PHP_EOL;
echo PHP_EOL;

//array loop using {$keys}:
for($i=0; $i<count($keys); $i++){
    $key=$keys[$i];
    echo $info[$key]."\n";
}




?>