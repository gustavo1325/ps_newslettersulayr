<?php
#Recoge los datos del formulario


class GetFormData{
    public $dataForm= array();

    public function __construct(){
        $this->dataForm['name'] =  $_POST['name'];
        $this->dataForm['email'] =  $_POST['mail'];
    
    }
}

?>