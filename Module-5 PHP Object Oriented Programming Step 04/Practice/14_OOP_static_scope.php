<?php

/**
 * Static Scope     :
 * 
 * private static   : In object-oriented programming with PHP, private static is a visibility modifier that is used to define class-level variables and methods that are both static and only accessible within the class in which they are defined.
 * 
 */

echo "14 Discussion of static scope: \n";

class MyClass {
    private static $myPrivateStaticVar = 0;
  
    public function increment() {
      self::$myPrivateStaticVar++;
    }
  
    public function getVar() {
      return self::$myPrivateStaticVar;
    }
  }
  

?>