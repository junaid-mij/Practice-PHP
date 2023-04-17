<?php

echo "4. String to Array and Array to String, Multiple Delimiters: \n";

echo "Single Delimiters: \n";
//string to array:
$fruits = explode(', ','apple, orange, dragon, avocado');
print_r($fruits);

echo PHP_EOL;
//array to string:
$fruitsString = join(', ',$fruits);
echo $fruitsString;

echo PHP_EOL;
//count how many value in here:
echo count($fruits);
echo PHP_EOL;
echo PHP_EOL;

echo "Multiple Delimiters: \n";
$phone = preg_split('/(, |,)/','iphone, samsung,lg, nokia, sony,moto, blackberry');
print_r($phone);
//count
echo count($phone);

?>