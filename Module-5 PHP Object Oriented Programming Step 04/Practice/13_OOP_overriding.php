<?php

/**
 * Static Overriding        : In object-oriented programming with PHP, static overriding is the ability of a subclass to provide its own implementation of a static method that is already defined in its parent class.
 * 
 * parent::myStaticMethod() : In PHP, parent::myStaticMethod() is a way to call a static method from the parent class within a subclass.
 * 
 */

echo "13 Discussing static method overrides in child classes: \n";

class ParentClass {
    public static function myStaticMethod() {
      echo "ParentClass";
    }
  }
  
  class ChildClass extends ParentClass {
    public static function myStaticMethod() {
      echo "ChildClass: ";
      parent::myStaticMethod();
    }
  }
  
  ParentClass::myStaticMethod(); // Output: ParentClass
  ChildClass::myStaticMethod(); // Output: ChildClass: ParentClass
  

?>