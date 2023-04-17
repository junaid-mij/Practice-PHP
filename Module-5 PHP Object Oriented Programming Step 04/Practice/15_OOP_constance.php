<?php

/**
 * Creating Constance:
 * 
 * define()     : In PHP, define() is a function used to define a constant. A constant is a value that cannot be changed once it is defined.
 * const        : In object-oriented programming with PHP, const is a keyword used to define class constants, which are values that cannot be changed once they are set.
 * 
 */

echo "15 Creating constants in classes: \n";

class MyClass {
    const MY_CONSTANT = 42;
    
    public function getConstant() {
      return self::MY_CONSTANT;
    }
  }
  echo MyClass::MY_CONSTANT;
  

?>