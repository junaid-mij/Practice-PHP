<?php

echo "9. Discussion of Empty Values ​​(Important); \n";
//using 'isset()' function
$name=0;

if(isset($name) && (is_numeric($name) || $name != '')){
    echo "Name is set & it's not empty";
}else{
    echo 'Name is either not set or it\'s emmty';
}

?>