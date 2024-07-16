<?php

namespace Polymorphism;

class AdvanceStringOp {
    protected $string;

    // Constructor to initialize the string property
    public function __construct($string) {
        $this->string = $string;
    }

    // Default manipulate method in the base class
    public function manipulate() {
        return $this->string;
    }

}

class BaseStringOne extends AdvanceStringOp {

    // Constructor to call parent constructor
    public function __construct($string) {
        parent::__construct($string);
    }

    // Overridden manipulate method to return string length
    public function manipulate() {
        echo "This will return the string length: " . strlen($this->string);
    }
}

class BaseStringTwo extends AdvanceStringOp {

    // Constructor to call parent constructor
    public function __construct($string) {
        parent::__construct($string);
    }

    // Overridden manipulate method to pad the string
    public function manipulate() {
        echo "This will return the string pad: " . str_pad($this->string, 20, '_', STR_PAD_BOTH);
    }
}


