<?php

/**
 * Comparing Object:
 * 
 * '='      : = is the assignment operator, used to assign a value to a variable.
 * '=='     : == is the equality operator, used to compare two values for equality, regardless of their data types.
 * '==='    : === is the identical operator, used to compare two values for both equality and data type.
 */

echo "21- Comparing Objects: \n";

class Car {
    public $brand;
    public $model;
  
    public function __construct($brand, $model) {
      $this->brand = $brand;
      $this->model = $model;
    }
  }
  
  $car1 = new Car("Toyota", "Corolla");
  $car2 = new Car("Toyota", "Corolla");
  
  if ($car1 == $car2) {
    echo "Equal using == operator\n";
  } else {
    echo "Not equal using == operator\n";
  }
  
  if ($car1 === $car2) {
    echo "Equal using === operator\n";
  } else {
    echo "Not equal using === operator\n";
  }
  

?>