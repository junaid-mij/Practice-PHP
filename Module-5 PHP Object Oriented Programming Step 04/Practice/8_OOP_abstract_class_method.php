<?php

/**
 * Abstract:
 * 
 * abstract class{}         : In object-oriented programming (OOP) with PHP, an abstract class is a class that cannot be instantiated on its own, but serves as a blueprint for other classes to inherit from.
 *                          
 * 
 */

echo "8 Abstract Classes and Abstract Methods in OOP : \n";

abstract class Animal {
    abstract public function makeSound(); // abstract method
    
    public function eat() { // non-abstract method
       echo "The animal is eating.";
    }
 }
 class Dog extends Animal {
   public function makeSound() { // implementation of the abstract method
      echo "Woof!";
   }
}

$newAnimal =new Dog();
echo $newAnimal->eat();
echo $newAnimal->makeSound();

?>