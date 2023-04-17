<?php

/**
 * 
 * InterFace    : In object-oriented programming (OOP) with PHP, an interface is a type of contract that defines a set of methods that a class must implement. An interface specifies a set of rules that a class must follow, but it does not provide any implementation details for those methods.
 * 
 * instanceof   : In object-oriented programming (OOP) with PHP, instanceof is an operator that is used to determine whether an object is an instance of a specific class or a subclass of that class.
 * polymorphism : In object-oriented programming (OOP) with PHP, polymorphism is a fundamental concept that allows objects of different classes to be treated as if they are the same type of object. Polymorphism allows for greater flexibility and extensibility in software design, making it a key feature of OOP.
 * 
 * 
 */

use MyClass as GlobalMyClass;

echo " 11 Discussion of Interfaces: \n";

//Practical Example:
interface MyInterface {
    public function doSomething();
    public function doSomethingElse();
}
class MyClass implements MyInterface {
    public function doSomething() {
        // implementation
    }
    public function doSomethingElse() {
        // implementation
    }
}
interface MyInterface2 extends MyInterface{
    public function do();
}
class MyClass2 implements MyInterface2{
    public function do(){

    }
    public function doSomething() {
        // implementation
    }
    public function doSomethingElse() {
        // implementation
    }
}

//object:
$doObject = new MyClass2();
echo $doObject instanceof MyInterface2;

?>