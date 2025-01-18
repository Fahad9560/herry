<?php

// Abstract class
abstract class Animal {
    // Abstract method (no implementation)
    abstract protected function makeSound();

    // Concrete method
    public function eat() {
        echo "Eating...\n";
    }
}

// Derived class
class Dog extends Animal {
    // Implementing the abstract method
    protected function makeSound() {
        return "Bark!\n";
    }
}

// Derived class
class Cat extends Animal {
    // Implementing the abstract method
    protected function makeSound() {
        return "Meow!\n";
    }
}

// Usage
$dog = new Dog();
echo $dog->makeSound(); // Output: Bark!
$dog->eat();            // Output: Eating...

$cat = new Cat();
echo $cat->makeSound(); // Output: Meow!
$cat->eat();            // Output: Eating...

?>