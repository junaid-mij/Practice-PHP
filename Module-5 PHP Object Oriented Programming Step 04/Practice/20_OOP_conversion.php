<?php

/**
 * Conversion:
 * 
 * __toString()     :__toString() is a magic method in PHP that allows you to define how an object should behave when it is treated as a string. This method is automatically called when an object is used in a string context, such as when it is concatenated with another string or when it is passed to the echo or print functions.
 */

echo "20 Conversion from object to string: \n";

class Person {
    private $name;
  
    public function __construct($name) {
      $this->name = $name;
    }
  
    public function __toString() {
      return "My name is " . $this->name;
    }
  }
  
  $person = new Person("John");
  echo $person; // Output: My name is John
  

?>