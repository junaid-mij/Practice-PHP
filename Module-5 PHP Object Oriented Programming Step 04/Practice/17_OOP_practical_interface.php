<?php

/**
 * Practical Example of Interface: 
 * 
 * IteratorAggregate        : IteratorAggregate is an interface in PHP that allows you to create custom iterators for your classes. When you implement the IteratorAggregate interface, you must define a method named getIterator() that returns an object that implements the Iterator interface. The Iterator interface provides methods for iterating over the object's data.
 * 
 */

echo "17 A practical example of an interface: \n";

class MyCollection implements IteratorAggregate {
    private $items;

    function __construct(){
        $this->items = array();
    }
    public function addItem($item) {
        array_push($this->items,$item);
    }
    // function getItems(){
    //     return $this->items;
    // }
    function getIterator(): Iterator {
        return new ArrayIterator($this->items);
    }
}

$items = new MyCollection();
$items->addItem("item 1");
$items->addItem("item 2");
$items->addItem("item 3");

foreach ($items as $item) {
    echo $item . "\n";
}



?>