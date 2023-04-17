<?php

/**
 * Method Overloading & callStatic Magic Method:
 * 
 * __call()     : In object-oriented programming (OOP) with PHP, __call() is a magic method that is called when invoking a non-existent or inaccessible method on an object. The __call() method takes two arguments: the name of the method being called, and an array of the arguments passed to the method.
 * __callStatic : In object-oriented programming (OOP) with PHP, __callStatic() is a magic method that is called when invoking a non-existent or inaccessible static method on a class. The __callStatic() method takes two arguments: the name of the static method being called, and an array of the arguments passed to the method.
 */

echo "24 Discussion of Method Overloading with call and callStatic Magic Methods: \n";

class MotorCycle{
    private $parameters;

    function __construct($displacement, $capacity, $mileage){
        $this->parameters = [];
        $this->parameters['displacement'] = $displacement;
        $this->parameters['capacity'] = $capacity;
        $this->parameters['mileage'] = $mileage;
    }
    function __isset($name){
        if(!isset($this->parameters[$name])){
            echo "{$name} is not found\n";
            return false;
        }else{
            return true;
        }
    }
    function __unset($name){
        print_r($this->parameters);
        unset($this->parameters[$name]);
        print_r($this->parameters);
    }
    function __get($name){
        echo $this->parameters[$name];
    }
    function __set($name, $value){
        echo $this->parameters[$name]=$value;
    }

    function __call($name, $arguments){
        if('mymethod' == $name){
            if($arguments){
                echo "I am running at {$arguments[0]}";
            }else{
                echo "I am running...!!";
            }
        }
    }
    static function __callStatic($name, $arguments){
        echo "Call Static\n";
    }
}

$r15 = new MotorCycle('150', '20ltr', '50kmph');

if(isset($r15->tiersize)){
    echo "Found\n";
}else{
    echo "Not Found\n";
}

echo $r15->capacity;
unset($r15->capacity);

$r15->mymethod('Sona');
echo PHP_EOL ;
$r15::myStatic();

?>