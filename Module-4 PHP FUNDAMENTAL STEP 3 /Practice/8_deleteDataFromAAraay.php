<?php

echo "8. Removing data from associative arrays: \n";
$info = [
    'fName' => 'Marajul',
    'lName' => 'Islam',
]; 
print_r($info);

//using 'unset()' function:
unset($info['lName']);
print_r($info);

?>
