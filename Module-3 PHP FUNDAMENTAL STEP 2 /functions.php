<?php

/**
 * Determins if the arguments even or odd,
 * Determins the factorial number,
 * Using Default value of function parameter or optional parameter
 * Fixing function return type: (Data type declaration)
 * Accepting Unlimited Arguments in Functions:(Unlimited Parameter Accept)
 * Recursion and Recursive Functions
 * Printing Fibonacci Series Using Recursive Functions
 */


//even of odd:
function isEven($n){
    if ($n % 2 ==0){
        return true;
    }
    return false;
}
//factorial:
function factorial(int $f){  //type hinting;
    $result = 1;
    for($i=$f; $i>1; $i--){
        $result *= $i;
    }
    return $result;
}
//factorial 2:
function factorial_2($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial_2($n - 1);
    }
}
//Default Value or Optional Value Operator:
function serve($foodType="No Food", $numberOfItems="0"){
    echo "{$numberOfItems} of {$foodType} has/have been serverd..!!";
}

//Fixing function return type: (Data type declaration):
function dataType(int $x, int $y, int $z):int {    //":int" it means the function will return int value..!!
    return $x+$y+$z;
}

//11. Accepting Unlimited Arguments in Functions:(Unlimited Parameter Accept)
function unlimitedData(int ...$numbers):int {    //"...$numbers" means it can hold unlimited data:like arry()
    $uResult=0;
    for($u=0;$u<count($numbers);$u++){
        $uResult += $numbers[$u];
    }
    return $uResult;
}

//13. Recursion and Recursive Functions:
function recurFun($counter, $end, $stepping){
    if($counter>$end){
        return;
    }
    echo $counter."\n";
    $counter+=$stepping;
    recurFun($counter,$end,$stepping);
}

//14. Printing Fibonacci Series Using Recursive Functions:
function recurFibonacci($old, $new, $end){
    static $start;
    $start = $start ?? 1;

    if($start>$end){
        return;
    }
    $start++;

    echo $old."\n";
    $_temp=$old+$new;
    $old=$new;
    $new=$_temp;
    recurFibonacci($old, $new, $end);
}

echo "GG";


?>