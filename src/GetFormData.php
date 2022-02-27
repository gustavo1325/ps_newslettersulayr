<?php
#Recoge los datos del formulario


class GetFormData{
    public $dataForm= array();

    public function __construct(){
        $this->dataForm['name'] =  htmlspecialchars($_POST['name']);
        $this->dataForm['email'] =  htmlspecialchars($_POST['mail']);
        $this->dataForm['checkbox'] = htmlspecialchars($_POST['politicsforNews']);
    
    }

    public function getDataForm(){
        return $this->dataForm;
    }
}

?>