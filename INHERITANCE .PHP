<?php
// Parent class
class Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function speak() {
        return "I am an animal.";
    }
}

// Child class
class Dog extends Animal {
    public function speak() {
        return "Woof! My name is " . $this->name;
    }
}

// Creating an instance of the Dog class
$dog = new Dog("LUCEE");
echo $dog->speak(); // Output: Woof! My name is Buddy
?>