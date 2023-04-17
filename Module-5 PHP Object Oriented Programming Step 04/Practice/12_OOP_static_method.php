<?php

/**
 * Static Method    : In object-oriented programming (OOP) with PHP, a static method is a method that belongs to a class rather than to an instance of that class. This means that you can call the static method without creating an object of that class.
 * 
 * ClassName::myStaticMethod();     : ClassName::myStaticMethod() is an example of calling a static method in PHP.
 * self::$variableName              : self::$variableName is a way to refer to a class-level variable (a.k.a. static variable) within a PHP class.
 * 
 *  
 */

echo "12 Static methods and properties of classes: \n";

class MyClass {
    private static $myStaticVariable = 10;
    
    public static function getMyStaticVariable() {
      return self::$myStaticVariable;
    }
    
    public static function setMyStaticVariable($value) {
      self::$myStaticVariable = $value;
    }
  }
  
  echo MyClass::getMyStaticVariable(); // Output: 10
  MyClass::setMyStaticVariable(20);
  echo MyClass::getMyStaticVariable(); // Output: 20
  

?>