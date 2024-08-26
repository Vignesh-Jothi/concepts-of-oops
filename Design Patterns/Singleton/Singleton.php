<?php
class Singleton {
    // The single instance of the class
    private static $instance = null;

    // Private constructor to prevent direct object creation
    private function __construct() {
        echo "Singleton instance created\n";
    }

    // Method to get the single instance of the class
    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    // Method to demonstrate that the Singleton works
    public function doSomething() {
        echo "Doing something...\n";
    }
}

// Attempt to create multiple instances
$singleton1 = Singleton::getInstance();
$singleton2 = Singleton::getInstance();

// Check if both instances are the same
if ($singleton1 === $singleton2) {
    echo "Both instances are the same.\n";
}

// Use the Singleton instance
$singleton1->doSomething();
?>
