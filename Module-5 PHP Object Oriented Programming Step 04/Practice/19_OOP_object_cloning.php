<?php

/**
 * Object Cloning:
 * 
 * 
 */

echo "19 Object Cloning in PHP: \n";

class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function __clone() {
        $this->name = 'Copy of ' . $this->name;
        $this->age = 0;
    }
}

$person1 = new Person('John', 30);
$person2 = clone $person1;

echo $person1->name . ' is ' . $person1->age . ' years old.' . "\n"; // output: John is 30 years old.
echo $person2->name . ' is ' . $person2->age . ' years old.' . "\n"; // output: Copy of John is 0 years old.


?>