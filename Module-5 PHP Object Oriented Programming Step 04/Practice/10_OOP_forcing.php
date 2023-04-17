<?php

/**
 * OOP Forcing:
 * 
 * forcing
 * 
 */

echo "10 How to write better code with OOP by forcing: \n";

class Shape{

}
class Shapes{
    private $shapes;

    function __construct(){
        $this->shapes=array();
    }
    function addShape(Shape $shape){
        array_push($this->shapes, $shape);
    }
    function totalShape(){
        return count($this->shapes);
    }
}
class Rectangle extends Shape{

}
class Triangle extends Shape{

}
class Student{

}

$shapeCollection = new Shapes();
$shapeCollection->addShape(new Rectangle());
$shapeCollection->addShape(new Triangle());
// $shapeCollection->addShape(new Student());

echo $shapeCollection->totalShape();
?>