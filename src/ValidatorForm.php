<?php



class ValidatorForm{
  public $dataForm= array();

   public function __construct(array $data){
    $this->dataForm = $data;   
   }

   public function validateEmail($email){
       $email = filter_var($this->dataForm['email'], FILTER_SANITIZE_EMAIL);

       if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo ("$email is a valid email address");
      } else {
        echo ("$email is not a valid email address");
      }

   }


}