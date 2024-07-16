<?php

namespace Encapsulation;
class StringOp{

    protected $str;

    /**
     * @param mixed $str
     */
    public function __construct($str){
        $this->str = $str;
    }

    public function revString(){
        return strrev($this->str);
    }

    public function strToUpper(){
        return strtoupper($this->str);
    }

    public function strToLower(){
        return strtolower($this->str);
    }
}

// Uncomment if you needed!!

// $stringObj = new StringOp('Example');
// echo "This is rev string : " .$stringObj->revString();
// echo "\nThis is Upper Case String :". $stringObj->strToUpper();
// echo "\nThis is Lower Case String :". $stringObj->strToLower();

