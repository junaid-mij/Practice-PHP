<?php

/**
 * Class file autoloading:
 * 
 * __autoload()             : In object-oriented programming (OOP) with PHP, __autoload() is a magic function that is called when a class is referenced that hasn't been defined yet. The __autoload() function takes a single argument, which is the name of the class being referenced.
 * spl_autoload_register()  : spl_autoload_register() is a PHP function that registers one or more autoload functions that are called by PHP when a class is referenced but has not yet been defined. Autoloading functions are used to automatically include the necessary class files that contain the class definition.
 * strpos()                 :
 * str_replace()            :
 * 
 */

echo "25 Class file autoloading: \n";
 
//Old Way:
// function __autoload($name) {
//     include "{$name}.php";
//  }
// (new Bike)->getType(); // This will trigger the __autoload() function to include the MyClass.php file
 
//New Way:
// function autoload($name){
//     include strtolower("{$name}.php");
// }
// spl_autoload_register('autoload');
// (new Bike)->getType();

//New way with file:
function autoload($name){
    if(strpos($name,"Planet_")!==false){
        $filename = str_replace("Planet_","",$name);
        include strtolower("planets/{$filename}.php");
    }else{
        include strtolower("{$name}.php");
    }
}
spl_autoload_register('autoload');

(new Bike)->getType();
(new Planet_Mars)->getName();
 
?> 