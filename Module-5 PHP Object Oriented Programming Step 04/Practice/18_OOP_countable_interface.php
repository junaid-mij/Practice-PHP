<?php

/**
 * Countable Interface: 
 * 
 * 
 */

echo "18 Countable Interface - Pretty cool: \n";


class MyCollection implements IteratorAggregate,Countable {
    private $items;

    function __construct(){
        $this->items = array();
    }
    public function addItem($item) {
        array_push($this->items,$item);
    }
    function getIterator(): Iterator {
        return new ArrayIterator($this->items);
    }
    function count(): int{
        return count($this->items);
    }
}

$items = new MyCollection();
$items->addItem("item 1");
$items->addItem("item 2");
$items->addItem("item 3");

echo count($items);

?>