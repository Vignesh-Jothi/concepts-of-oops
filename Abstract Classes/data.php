<?php

namespace AbstractClasses;
require_once "log.php";
use AbstractClasses\log;

class data extends log{
    private $data;

    public function __construct($data){
        $this->data = $data;
    }

    /**
     * @return void
     */
    public function logMessage(){
        echo "\nData : " . $this->data;
    }

    /**
     * @return void
     */
    public function logDate(){
        echo "Today Date is : " . date("Y-m-d H:i:s");
    }

    /**
     * @return void
     */
    public function printData(){
        $this->logDate();
        $this->logMessage();
    }
}

$data = new data("Welcome, New User!!");

$data->printData();