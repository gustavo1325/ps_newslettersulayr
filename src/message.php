<?php

require_once 'messageSend.php';

class message{

    public $messages= array();
    
  //  private $messageSend;
/*
    public function __construct(){
        $this->messageSend = new messageSend();
    }
*/
    function displayMessage($message, $keyMessage){
        $this->messages[$keyMessage] = $message; 
    }
}