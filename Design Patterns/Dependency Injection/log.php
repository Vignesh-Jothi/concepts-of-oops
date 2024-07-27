<?php

namespace DependencyInjection;

interface Log{
    public function log($message);
}

class welcomeLog implements Log{

    public function log($message){
        echo "Logged Data : $message";
    }
}

class user{
    private $logger;

    public function __construct(Log $logger){
        $this->logger = $logger;
    }

    public function message($message){
        $this->logger->log($message);
    }
}



$welcome = new welcomeLog();

$user = new user($welcome);

$user->message("Vignesh");