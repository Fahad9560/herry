<?php

class Person {
    // Private property
    private $name;

    // Constructor to initialize the name
    public function __construct($name) {
        $this->name = $name;
    }

    // Public method to get the name
    public function getName() {
        return $this->name;
    }

    // Public method to set the name
    public function setName($name) {
        $this->name = $name;
    }
}

// Usage
$person = new Person("FAHAD");
echo $person->getName(); // Output: Alice

$person->setName("CHOUDHARY");
echo $person->getName(); // Output: Bob

?>