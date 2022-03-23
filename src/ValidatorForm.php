<?php

require_once 'message.php';
require_once 'createSession.php';

class ValidatorForm{

   public $dataForm= array();
   private $message;
   private $session;

   public function __construct(array $data){
    $this->dataForm = $data;  
    $this->message = new message(); 
    $this->session = new createSession();
   }


   public function validateEmail(){
       $email = filter_var($this->dataForm['email'], FILTER_SANITIZE_EMAIL);

       if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
      // echo ("$email is a valid email address");
        $data = "$email is a valid email address";
        $key = "keys";
        $this->session->newSession();
        $this->session->addDataSession($data, $key);
       // echo $_SESSION['$key'];
        
      } else {
        $data = "$email not valid email";
        $key = "key";
        $this->session->newSession();
        $this->session->addDataSession($data, $key);
        //echo $_SESSION['$key'];
        //echo ("$email is not a valid email address");
        
      }

   }

   public function validateName(){
     $name = filter_var($this->dataForm['name'], FILTER_SANITIZE_STRING);

   }


}