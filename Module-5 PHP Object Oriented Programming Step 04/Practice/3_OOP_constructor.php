<?php

/**
 * Constructor or Magic Method:
 * 
 * __construct()      : In object-oriented programming (OOP) with PHP, the constructor method is a special method that is automatically called when an object is created. The constructor method is used to initialize the object's properties with default values or with the values passed as arguments when creating the object.
 *                      To define a constructor method in PHP, you need to create a method with the same name as the class, preceded by the keyword "public" and followed by the opening and closing parenthesis ().
 * $this->            : In PHP, $this is a special keyword that refers to the current object instance in a class method. It is used to access the properties and methods of the object.
 * $argument=0;       : This means optional argument. This will help us to run this code without passing the value in object;
 * 
 */

echo "3. A class's constructor method that runs automatically when an object is created from the class: \n";

class ShowC{
    public $name;

    function __construct($personName){
        echo "New Object has been created: \n"; 
        $this->name = $personName;
    }
    function showHi(){
        echo "Hi..!!\n";
    }
    function showName(){
        echo "My name is {$this->name}.\n";
    }
}
$see = new ShowC("Junaid");
$see->showHi();
//$see->name="Junaid";
$see->showName();

?>