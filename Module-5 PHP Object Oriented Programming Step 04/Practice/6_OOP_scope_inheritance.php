<?php

/**
 * Inheritance Scope:
 * 
 * parent::method_name()       : In PHP, parent::method() refers to calling a method that belongs to the parent class of the current class. 
 * 
 */

echo " 6 Discussing the scope of parent and child classes: \n\n";

class ParentClass {
    public function sayHello() {
      echo "Hello from ParentClass!\n";
    }
  }
  
  class ChildClass extends ParentClass {
    public function sayHello() {
      parent::sayHello(); // call the parent class method
      echo "Hello from ChildClass!\n";
    }
  }
  
  $obj = new ChildClass();
  $obj->sayHello();
  

?>