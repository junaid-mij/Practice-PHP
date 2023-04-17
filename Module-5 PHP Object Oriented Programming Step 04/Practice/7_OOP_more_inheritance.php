<?php

/**
 * More Example about Inheritance:
 * 
 * sqrt()       : In PHP, sqrt() is a built-in function that returns the square root of a given number. 
 *                Syntax: sqrt($number);
 * 
 * 
 */

echo "7 More examples on inheritance: \n";

class Shape{
    protected $name;
    protected $area;

    public function __construct($name){
        $this->name = $name;
        $this->calculateArea();
    }
    public function getArea(){
        echo "This {$this->name}'s area is {$this->area}\n";
    }
    public function calculateArea(){}
}
class Triangle extends Shape{
    private $a, $b, $c;

    public function __construct($a, $b, $c){
        $this->a=$a;
        $this->b=$b;
        $this->c=$c;
        parent::__construct("Triangle");
    }
    public function calculateArea(){
        $preimeter = ($this->a+$this->b+$this->c)/2;
        $this->area = sqrt($preimeter*($preimeter-$this->a)*($preimeter-$this->b)*($preimeter-$this->c));
    }
}
class Rectangle extends Shape{
    private $a, $b;

    public function __construct($a, $b){
        $this->a=$a;
        $this->b=$b;
        parent::__construct("Rectangle");
    }
    public function calculateArea(){
        $this->area = $this->a*$this->b;
    }
}


$triangleObject = new Triangle(10,12,8);
$triangleObject->getArea();

$rectangleObject = new Rectangle(8,2);
$rectangleObject->getArea();

?>