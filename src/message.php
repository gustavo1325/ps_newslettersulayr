<?php

require_once 'messageSend.php';

class message{


    public function __construct($message){
        
        $this->displayMessage($message);
    }

    function displayMessage($message){
        if($message === "email"){
            ?> <p>Email no valido</p> <?php
        }
        if($message === "emailEmpty"){
            ?> <p>Debe escribir su email</p> <?php
        }
        if($message === "name"){
           ?> <p>Para continuar debe escribir su nombre </p><?php
        }
        if($message === "privacy"){
             ?> <p>Debe aceptar las condiciones</p> <?php
        }
    }
}