<?php

class Counter {
    // Static property
    private static $count = 0;

    // Static method to increment the count
    public static function increment() {
        self::$count++;
    }

    // Static method to get the current count
    public static function getCount() {
        return self::$count;
    }
}

// Usage
Counter::increment();
Counter::increment();
echo "Current Count: " . Counter::getCount() . "\n"; // Output: Current Count: 2

?>