<?php

/**
 * Magic Method: In object-oriented programming with PHP, __get() and __set() are magic methods that are used to handle access to object properties that are not defined or accessible by normal means.
 * 
 * __get()  : In object-oriented programming with PHP, __get() is a magic method that allows you to define custom behavior when getting the value of a property that is not defined or is not accessible from outside the class.
 * __set()  : __set() is a magic method in object-oriented programming with PHP that is used to dynamically set the value of a property in an object.
 * $prop    : In object-oriented programming with PHP, $prop can be used in magic methods to dynamically refer to a property of an object.
 */

echo "16 Magic Methods in PHP Classes: \n";

class Student{
    private $name;
    private $age;
    private $class;

    public function __construct($name='', $age='', $class=''){
        $this->name=$name;
        $this->age=$age;
        $this->class=$class;
    }
    //magic methos __get()
    public function __get($prop){
        return $this->$prop;
    }
    public function __set($prop, $value){
        $this->$prop = $value;
    }
}
$studentObj = new Student('Junaid', '21', '13');

echo $studentObj->name;


?>