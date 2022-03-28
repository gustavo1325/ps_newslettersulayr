<?php

require_once 'ValidatorForm.php';



$dataAjaxForm= array();

if(isset($_POST["email"], $_POST["name"], $_POST["politic"])){
    $dataAjaxForm['email']= $_POST["email"];
    $dataAjaxForm['name']= $_POST["name"];
    $dataAjaxForm['politic']= $_POST["politic"];
}

$validatorForm = new ValidatorForm($dataAjaxForm);

$validatorForm->validateName();
$validatorForm->validateEmail();
$validatorForm->validatePolitic();

/*
if($validatorForm->validateEmail() === false){
    ?>
<h1> este es el resultado</h1>
<p> <?php echo $validatorForm->dataForm['email']; ?> </p>
<?php
}else{
    ?>
    <h1> este es el resultado</h1>
    <p> email valido </p>
    <?php
}

if($validatorForm->validateName() === false){
    ?>
<h1> este es el resultado</h1>
<p> <?php echo $validatorForm->dataForm['email']; ?> </p>
<?php
}else{
    ?>
    <h1> este es el resultado</h1>
    <p> mame valid </p>
    <?php
}

if($validatorForm->validatePolitic() === false){
    ?>
    <h1> este es el resultado</h1>
    <p> <?php echo $validatorForm->dataForm['email']; ?> </p>
    <?php  
}else{
    ?>
    <h1> este es el resultado</h1>
    <p> you have accepting the privacity politic</p>
    <?php 
}
*/






