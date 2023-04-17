<?php

/**
 * Early & Late Binding:
 * 
 * 
 */

echo "22 Detailed discussion on early and late binding: \n";

class Planet {
    static function echoName() {
      //echo self::getName();  //early binding
      echo static::getName();  //late binding
    }
    static function getName(){
        return "Planet";  //early binding
    }
  }
class Earth extends Planet {
  static function getName() {
    return "Earth"; //late binding 
  }
}
  
Earth::echoName();
  
?>