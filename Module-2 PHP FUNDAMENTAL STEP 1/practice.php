<?php
    /* ->Variables */
    $age = "22";
    echo "My age is {$age}\n";
    // Double $ Uses
    $name = "Marajul Islam";
    $show = "name";
    echo $$show;

    echo "\n";

    /* Constant its immutable */
    define('PI',3.1413);
    // There are many ways to print it:
    echo "Value of PI = ".PI."\n";

    echo constant("PI");
    echo "\n";

    $constant = "constant";
    echo "Value of PI = {$constant('PI')}"."\n \n";
    
    /* Details on printing output */
    // it shows the details of a data
    var_dump($name);
    $null = null;
    var_dump($null);
    $result = true;
    var_dump($result);

    // using prinf
    $fname = strtoupper("Marajul");
    $lname = strtoupper("Islam");
    printf("His Full-Name is: %s %s \n \n", $fname, $lname,);

    // Three different types of printing
    $planet1 = "Mercury";
    $planet2 = "Jupiter";
    echo "The smallest planet is ".$planet1." and the biggest planet is ".$planet2."\n";
    echo "The smallest planet is {$planet1} and the biggest planet is {$planet2} \n";
    printf("The smallest planet is %s and the biggest planet is %s \n \n", $planet1, $planet2);

    /* Assign multiple variable */
    $x = $y  = 10;
    echo $x, "\n",$y,"\n\n";
    // Another
    $a = 20;
    $x = $y = $a;
    echo $x,"\n",$y,"\n\n";
    

    /* Increement Operator */
    $j = 9;
    $i = $j++;
    echo $i,"\n",$j,"\n\n";


    /* Increement Operator */
    $u = 9;
    $n = ++$u;
    echo $n,"\n",$u,"\n\n";


    /* Numbering System */  
    // Showing D,O,H Number:  
    $decemal= 12;
    $octal= 012;
    $hexa= 0x3b;
    printf("The decemal number is: %d, octal is: %d and hexa is: %d \n",$decemal, $octal, $hexa);
    //Decemal to Binary
    printf("The Decemal number is: %d = Binary is: %b \n",100,100);
    //Decemal to Octal
    printf("The Decemal number is: %d = Octal is: %o \n",100,100);
    //Decemal to Hexa
    printf("The Decemal number is: %d = Hexa is: %x \n\n",1000,1000);


    /* Variable Swaping */
    $firstname = "Marajul";
    $middlename = "Islam";
    $lastname = "Junaid";
    printf('His Full-Name is: %2$s %1$s %3$s', $firstname, $middlename, $lastname,);
    echo "\n";
    //Decemal to Binary with variable swaping:
    printf('The Decemal number is: %1$d = Binary is: %1$b ',100);
    echo "\n\n";


    /* Print Specific number */
    $dosomik = 97.7277;
    printf("%.2f",$dosomik);
    echo "\n\n";


    /* Make number size equal EX: 123,12 = 0123,0012 */
    $size1 = 123;
    $size2 = 12;
    printf("%04d \n",$size1);
    printf("%04d \n\n",$size2);
    //Flot
    $fsize1 = 123.321;
    $fsize2 = 12.32;
    printf("%07.2f \n",$fsize1);
    printf("%07.2f \n",$fsize2);
    
    /* sprintf menas: return a value */
    $sfname = "Marajul";
    $slname = "Islam";
    $output = sprintf("His Full-Name is: %s %s \n \n", $sfname, $slname,);
    echo "\n",$output;


    /* Condition & Logical Operator */
    //Find even or odd number:
    $f = 100;
    if ($f % 2 == 0){
        echo "This is an Even Number";
    }else{
        echo "This is an Odd Number";
    }
    echo"\n";
    //Find if the number is Greater or Less:
    $a = 20;
    $b = 10;
    if ($a > $b){
        echo "A is Greater than B";
    }else{
        echo "B is Greater than A";
    }
    echo "\n";
    //Find if the person is adult or teenager:
    $junaid = 5;
    if($junaid >= 18){
        echo "Junaid is an adult person!";
    }elseif($junaid >= 13 && $junaid <= 17){
        echo "Junaid is a Teenager";
    }else{
        echo "You are a child! What are you doing in PC";
    }
    echo "\n";
    //Check If the food has vitamen or not:
    $food = "tuna";
    if("apple" == $food || "tuna" == $food){          // we will use our argument last to prevent error.
        echo "This {$food} have Vitamen-D";
    }elseif("salmon" == $food){
        echo "This {$food} have Vitamen-C";
    }else{
        echo "This {$food} doesn't have Vitamen-D";
    }
    echo "\n\n";


    /* Find out if the year is a Leap Year */
    //Easy Way:
    $year = 2012;
    if($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0){
        echo "{$year} is a Leap Year";
    }elseif($year % 4 == 0 && $year % 100 == 0){
        echo "{$year} is not a Leap Year";
    }elseif($year % 4 == 0){
        echo "{$year} is a Leap Year";
    }else{
        echo "{$year} is not a Leap Year";
    }
    echo "\n";
    // Here comes the smart way to find out leap year
    if($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)){
        echo "{$year} is a Leap Year";
    }else{
        echo "{$year} is not a Leap Year";
    }
    echo "\n\n";


    /* Ternary Operator */
    //Verify Number Usign Ternary Operator:
        //normal-way:
    $vNumber = 12; 
    if($vNumber == 12){
        echo "Twelve ";
    }elseif($vNumber == 10){
        echo "Ten ";
    }else{
        echo "A Number ";
    }
    echo "\n";
        //Using Ternary Operator:
    $numberInWord = (12 == $vNumber) ? "Twelve " : ((10 == $vNumber) ? "Ten " : "A Number ");
    echo $numberInWord;
    echo "\n";
    //Verify the number even or odd:
        //normal-way:
    if($vNumber % 2 == 0){
        echo "Even Number";
    }else{
        echo "Odd Number";
    }
    echo "\n";
        //Using Ternary Operator:
    $vResult = ($vNumber % 2 == 0) ? "Even Number" : ("Odd Number");
    echo $vResult,"\n\n";

    /* Using Switch Case */
    //Finding which is my favourite color:
    $sEvenOdd = 10;
    $sResult = $sEvenOdd % 2==0;
    switch($sResult){
        case 0:
            echo "{$sEvenOdd} is a even number";
            break;
        default:
            echo "{$sEvenOdd} is a odd number";
    }
    echo "\n\n";

    /* Nested Switch */
    //Finding Positive/Negetive Even/Odd Number Usign nested switch case:
    $fPoNe =-10;
    $rPoNe =$fPoNe % 2;
    switch($rPoNe){
        case 0:
            switch($fPoNe){
                case $fPoNe>0:
                    echo "$fPoNe is a Positive Even Number";
                    break;
                case $fPoNe<0:
                    echo "$fPoNe is a Negative Even Number";
                    break;
            }
            break;
        default:
            switch($fPoNe){
                case $fPoNe>0:
                    echo "$fPoNe is a Positive Odd Number";
                    break;
                case $fPoNe<0:
                    echo "$fPoNe is a Negative Odd Number";
                    break;
            }    
    }
    echo "\n";
    //Making it simple to use:
    switch(true){
        case ($rPoNe==0 && $fPoNe>0):
            echo "$fPoNe is a Positive Even Number";
            break;
        case ($rPoNe==1 && $fPoNe>0):
            echo "$fPoNe is a Positive Odd Number";
            break;
        case ($rPoNe==0 && $fPoNe<0):
            echo "$fPoNe is a Negative Even Number";
            break;
        case ($rPoNe==1 && $fPoNe<0):
            echo "$fPoNe is a Negative Odd Number";
            break;    
    }
    echo "\n\n";

    /* Grading system: */
    $marks=32;
    if ($marks<33){
        echo "Fail";
    }
    else if ($marks>=33 && $marks<=44) {
        echo "Third Division";
    }
    else if ($marks>=45 && $marks<=59) {
        echo "Second Division";
    }
    else if ($marks>=60 && $marks<=100) {
        echo "First Division";
    }
    else {
        echo "Invalid input";
    }
    echo "\n\n";

    /*  */
     
?>
