<?php

/**
 * Shape is a abstract class which means it only can give prototype for subclasses to extends 
 */
abstract class Shape {
    abstract public function calculateArea();
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}

$circle = new Circle(5);
echo "Circle Area: " . $circle->calculateArea() . "\n";

$rectangle = new Rectangle(4, 7);
echo "Rectangle Area: " . $rectangle->calculateArea() . "\n";