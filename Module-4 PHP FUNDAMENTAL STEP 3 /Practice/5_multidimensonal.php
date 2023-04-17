<?php

//5. Multidimensional or nested arrays:
echo "5. Multidimensional or nested arrays: \n"; 
$info =[
    'name'=> explode(', ', 'Marajul Islam, Tarek Chowdury, Saikat Bhuiyan'),
    'roll'=> explode(', ', '977277, 988488, 966266'),
    'phone'=> explode(', ', '01851666974, 01851666975, 01851666976')
];
print_r($info);
echo PHP_EOL;
echo "add data in the array: \n";
//add data in the array:
array_push($info['phone'],'01871351569');
print_r($info);
echo PHP_EOL;
echo "access multidimensonal array value: \n";
//access multidimensonal array value:
echo $info['name'][0];
echo PHP_EOL;
echo "nested array: \n";
//nested array:
$nested =[
    'nested_1'=>[
        'nested_2'=>[
            '1',
            '2',
            '3',
            '4'
        ]
    ]
];
echo $nested['nested_1']['nested_2'][2];
echo PHP_EOL;
echo "Another Example: \n";
//Another Example:
$nestedNumber =[
    [1,2,3],
    [11,22,33],
    [111,222,333],
    [1111,2222,3333,[1,2,3,4]]
];
print_r($nestedNumber);
echo $nestedNumber[3][3][3];


?>