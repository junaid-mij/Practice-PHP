<?php

echo "2. Array Manipulation: \n";
//array manipulation;\:
$arrayManipulation = array(
    'Marajul',
    'Islam',
    'Junaid',
    977277
);

$arrayManipulation[3]='Male';
$arrayManipulation[]='22';
//array_pop($arrayManipulation);
//array_push($arrayManipulation, '22');
// array_shift($arrayManipulation);
// array_unshift($arrayManipulation,'Marajul');

$n = count($arrayManipulation);
for($i=0; $i<$n; $i++){
    echo $arrayManipulation[$i]."\n";
}

?>