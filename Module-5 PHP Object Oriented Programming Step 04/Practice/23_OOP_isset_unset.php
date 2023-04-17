<?php

/**
 * Overloading & isset(), unset() magic method:
 * 
 * __get()  : In object-oriented programming with PHP, __get() is a magic method that allows you to define custom behavior when getting the value of a property that is not defined or is not accessible from outside the class.
 * __set()  : __set() is a magic method in object-oriented programming with PHP that is used to dynamically set the value of a property in an object.
 * __isset(): In object-oriented programming (OOP) with PHP, __isset() is a magic method that is called when attempting to access an object property that is not defined or not accessible. The __isset() method takes a single argument, which is the name of the property being checked for existence
 * __unset(): In object-oriented programming (OOP) with PHP, __unset() is a magic method that is called when attempting to unset an object property that is not defined or not accessible. The __unset() method takes a single argument, which is the name of the property being unset.
 */

echo "23 Discussion of property overloading and the isset () and unset () magic methods: \n";

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
}
$r15 = new MotorCycle('150', '20ltr', '50kmph');

if(isset($r15->tiersize)){
    echo "Found\n";
}else{
    echo "Not Found\n";
}

echo $r15->capacity;

unset($r15->capacity);

?>