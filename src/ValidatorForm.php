<?php
require_once 'message.php';

class ValidatorForm{

   public $dataForm= array();
  

   public function __construct(array $data){
    foreach($data as $key => $val){
      $this->dataForm[$key]=$val;
    } 
   }


   public function validateEmail(){
       $email = filter_var($this->dataForm['email'], FILTER_SANITIZE_EMAIL);

       if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
          $message = new message("email");
      } elseif(empty($email)) {
        $message = new message("emailEmpty");      
      }

   }

   public function validateName(){
     $name = filter_var($this->dataForm['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

     if(empty($name)){ 
      
      $message = new message("name");
     }else{
       return true;
     }
   }

   public function validatePolitic(){
    
    $politic = $this->dataForm['politic'];


      if($politic == 'false'){
        $message = new message("privacy");
      }else{
        
      }
    /* if($politic == false){
  
      
     }else{
      //$message = new message("privacy");
      

     }*/
   }


}