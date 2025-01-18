<?php

// Define a namespace
namespace MyApp\Utilities;

class Logger {
    public static function log($message) {
        echo "Log: " . $message . "\n";
    }
}

// Another namespace
namespace MyApp\Models;

class User {
    public function create() {
        echo "User  created.\n";
    }
}

// Using the classes from different namespaces
namespace MyApp;

use MyApp\Utilities\Logger;
use MyApp\Models\User;

$logger = new Logger();
$logger::log("This is a log message.");

$user = new User();
$user->create();

?>