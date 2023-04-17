<?php

/**
 * Basic OOP:
 * 
 * 1. Class     : In object-oriented programming (OOP) with PHP, a class is a blueprint or a template for creating objects. It defines the properties and methods that objects of that class will have.
 * 2. Object    : an object is an instance of a class. Once you have defined a class in PHP, you can create one or more objects of that class. Each object has its own set of properties and methods, as defined by the class.
 * 3. Methods   : a method is a function defined in a class. Methods are used to perform operations on the data and behavior encapsulated within objects of that class.
 * 4. Properties: a property is a variable that is defined within a class and is used to store data related to objects of that class. Properties are also known as attributes or fields.
 * 5. '->'      : The '->' symbol is called the object operator in PHP. It is used to access methods and properties of an object. The object operator is placed between the object name and the method or property name that we want to access.
 * 
 */

echo "2 Classes, Objects, Methods and Properties: \n";

//class
class Show{
    //properties
    public $name;
    //method
    function showHi(){
        echo "Hi..!!\n";
    }
    function showName(){
        echo "My name is {$this->name}.\n";
    }
}
//object
$see = new Show();
//set properties value
$see->name ="Junaid";

//call method
$see->showHi();
$see->showName();

?>