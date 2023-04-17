<?php

//1. Introduction to different types of loops:
//for loop
echo "For-Loop\n";
for ($i = 1; $i <= 10; $i++) {
    //echo $i;
    echo PHP_EOL; //PHP_EOL help to show the output in ono-after-another
    for ($j = 0; $j < $i; $j++) {
        echo '*';
    }
}
echo PHP_EOL;
echo PHP_EOL;

//while loop
echo "While-Loop\n";
$w = 1;
while ($w <= 10) {
    echo $w . PHP_EOL;
    $w++;
}
echo PHP_EOL;
echo PHP_EOL;

//do-while loop
echo "Do_While-Loop\n";
$d = 1;
do {
    $d++;
    echo $d . PHP_EOL;
} while ($d < 10);
echo PHP_EOL;
echo PHP_EOL;

//GO TO Loop
echo "Go_To-Loop\n";
$g = 0;
a:
$g++;
echo $g . PHP_EOL;
if ($g < 10) {
    goto a;
}

echo PHP_EOL;
echo PHP_EOL;

//2. Multiple Stepping in For Loops:
echo "Multiple Stepping: \n";
//Normal Stepping;
echo "With One Variable\n";
for ($s = 10; $s > 0; $s -= 1) {
    echo $s . ':' . (11 - $s);
    echo PHP_EOL;
}
//using two variables:
echo "With Two Variables\n";
for ($t = 10, $v = 1; $t > 0; $t -= 1, $v++) {
    echo $t . ':' . $v;
    echo PHP_EOL;
}
//3. More Multiple Stepping in For Loops:
//modulas:
echo "modulas stepping:\n";
for ($m = 0; $m <= 100; $m++) {
    if ($m % 7 == 0) {
        echo $m . "\n";
    }
    if ($m % 11 == 0) {
        echo $m . "\n";
    }
}
//another-way modulas usign ternary-operator:
echo "another-way modulas usign ternary-operator:\n";
for ($m1 = 0; $m1 <= 100; $m1++) {
    echo $m1 % 7 == 0 ? $m1 . "\n" : '';
    echo $m1 % 11 == 0 ? $m1 . "\n" : '';
}
//now we will do modulas in Multiple-Stepping:
echo "now we will do modulas in Multiple-Stepping:\n";
for ($ms1 = 0, $ms2 = 0; $ms1 <= 100; $ms1 += 7, $ms2 += 11) {
    echo $ms1 . "\n";
    echo $ms2 <= 100 ? $ms2 . "\n" : '';
}
//3. Uses of (i++ & ++i) in while loop:
echo "Uses of (i++ & ++i) in while loop:\n";
$wl = 0;
while ($wl < 5) {
    echo $wl . "\n";
    $wl++;
}
echo "Usign i++ in codition:\n";
$wl_1 = 0;
while ($wl_1++ < 5) {
    echo $wl_1 . "\n";
}
echo "Usign ++i in codition:\n";
$wl_2 = 0;
while (++$wl_2 < 5) {
    echo $wl_2 . "\n";
}
//5. Continue and break between loops:
echo "5. Continue and break between loops:\n";
echo "break; system in loop1:\n";
for ($b = 1; $b <= 10; $b++) {
    echo $b . "\n";
    if ($b == 5) {
        break;
    }
}
echo "break; system in loop2:\n";
for ($b2 = 10; $b2 <= 20; $b2++) {
    if ($b2 % 6 == 0) {
        echo $b2 . "\n";
        break;
    }
}
echo "continue; system in loop1:\n";
for ($c = 1; $c <= 10; $c++) {
    if ($c <= 5) {
        continue;
    }
    echo $c . "\n";
}
echo "same continue; system using goto:\n";
for ($c = 1; $c <= 10; $c++) {
    if ($c <= 5) {
        goto c;
    }
    echo $c . "\n";
    c:
    '';
}

//6. Printing the Fibonacci Series with Loops
echo "6. Printing the Fibonacci Series with Loops:\n";
$veryold = 0;
$old = 1;
$new = 1;
for ($f = 0; $f <= 10; $f++) {
    echo $veryold . ' ';
    $old = $new;
    $new = $old + $veryold;
    $veryold = $old;
}
echo PHP_EOL;
echo PHP_EOL;

//7. What are functions and how to write them
echo "7. What are functions and how to write them:\n";
include_once 'functions.php';
$eo = 56;
if (isEven($eo)) {
    echo "$eo is an evem number!!";
} else {
    echo "$eo is an odd number!!";
}
echo PHP_EOL;
echo PHP_EOL;

//8. Type hinting or type checking of function parameters
echo "8. Type hinting or type checking of function parameters:\n";
echo "Factorial Checking:\n";
$fc = 6;
echo "The Factorial of $fc is " . factorial($fc);
echo PHP_EOL;

echo "Second Method Factorial Checking:\n";
echo 'The Factorial is ' . factorial_2(6);
echo PHP_EOL;
echo PHP_EOL;

//9. Default value of function parameter or optional parameter:
echo "9. Default value of function parameter or optional parameter:\n";
$ft = 'Kachhi';
$fn = '100 Plate';
echo serve($ft, $fn);
echo PHP_EOL;
echo PHP_EOL;

//10. Fixing function return type: (Data type declaration):
echo "10. Fixing function return type:(Data type declaration) \n";
echo dataType(10, 10, 10);
echo PHP_EOL;
echo PHP_EOL;

//11. Accepting Unlimited Arguments in Functions:(Unlimited Parameter Accept)
echo "11. Accepting Unlimited Arguments in Functions:(Unlimited Parameter Accept-PHP-7Feature) \n";
echo unlimitedData(10, 10, 10, 10, 10);
echo PHP_EOL;
echo PHP_EOL;

//12. Dividing a large function into smaller functions:
echo "12. Dividing a large function into smaller functions: \n";

echo PHP_EOL;
echo PHP_EOL;

//13. Recursion and Recursive Functions:
echo "13. Recursion and Recursive Functions: \n";
recurFun(10, 20, 2);
echo PHP_EOL;
echo PHP_EOL;

//14. Printing Fibonacci Series Using Recursive Functions:
echo "14. Printing Fibonacci Series Using Recursive Functions: \n";
recurFibonacci(0, 1, 10);
echo PHP_EOL;
echo PHP_EOL;

//15. Variable Scope in PHP Function:
echo "15. Variable Scope in PHP Function: \n";
//Global Scope:
$globalName = 'Marajul ';
function doSomething()
{
    //global $globalName;
    //echo $globalName;
    echo $GLOBALS['globalName'];
}
doSomething();
//Local Scope:
function whileSomething()
{
    global $localName;
    $localName = 'Islam ';
}
whileSomething();
echo $localName;
//Static Scope:
function staticSomething()
{
    static $s;
    $s = $s ?? 0;
    $s++;
    echo $s;
}
staticSomething();
staticSomething();
staticSomething();
echo PHP_EOL;
echo PHP_EOL;

//16. Set default value in functions parameter:
echo "16. Set default value in functions parameter: \n";
function defaultValue($name, $title = 'Mr.')
{
    echo "{$title} {$name} <br/>";
}
defaultValue('Junaid');
defaultValue('Tanisha', 'Ms.');
echo PHP_EOL;
echo PHP_EOL;

//16. PHP explode() Function:
echo "16. PHP explode() Function: \n";

echo PHP_EOL;
echo PHP_EOL;

?>
