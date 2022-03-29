<?php

require_once 'messageSend.php';

class message{


    public function __construct($message){
        
        $this->displayMessage($message);
    }

    function displayMessage($message){
        if($message === "email"){
            ?> <p>Email no valido</p> <br><?php
        }
        if($message === "emailEmpty"){
            ?> <p>Debe escribir su email</p> <br> <?php
        }
        if($message === "name"){
           ?> <p>Escriba su nombre </p> <br><?php
        }
        if($message === "privacy"){
             ?> <p>Debe aceptar las condiciones</p>  <br><?php
        }
        if($message === "send"){
            ?> <p>Datos enviados correctamente</p>  <br><?php
       }
    }
}