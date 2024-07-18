<?php
namespace Traits;

trait Stringuse{

    /**
     * @param mixed $message
     * @return void
     */
    public function log($message){
        echo "Log Data : ". $message;
        echo "On :" . date('y-m-d H:i:s');
    }
}

