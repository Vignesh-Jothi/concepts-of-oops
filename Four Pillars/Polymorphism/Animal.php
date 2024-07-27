<?php


interface Animal{
    public function whoAmi();
}


class cat implements Animal{
    public $catName;

    public function __construct($name){
        $this->catName = $name;
    }
    public function whoAmi(){
        echo "This is ".$this->catName;
    }
}

$obj = new cat('bj');

$obj->whoAmi();