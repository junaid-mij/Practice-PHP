<?php

/**
 * Exception Handiling:
 * 
 * Exception        : In PHP, an exception is a mechanism that allows you to handle errors and unexpected events in your code.
 * 
 * 
 */

echo "21 (Exceptions) Discussion of Exceptions: \n";
echo PHP_EOL;

class Junaid{
    public $name;
    public $age;

    public function __construct($name, $age){
        $this->name = $name;
        if($age<4){
            throw new Exception("Too Young!",404);
        }elseif($age>30){
            throw new Exception("Too Old!",405);
        }
        $this->age = $age;
    }
}

try{
    $j = new Junaid('Junaid', 31);
}catch(Exception $e){
    echo $e->getCode().": ".$e->getMessage();
}finally{
    //Use case of finally is rare.
}
echo PHP_EOL;
echo PHP_EOL;
//________________________________________________________________

//Another Example of Exception:
function divide($numerator, $denominator) {
    if ($denominator === 0) {
        throw new Exception('Division by zero is not allowed.');
    }
    return $numerator / $denominator;
}

try {
    $result = divide(10, 0);
    echo "The result is: $result";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
echo PHP_EOL;


?>