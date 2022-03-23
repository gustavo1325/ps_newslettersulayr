<?php

require_once 'src/GetFormData.php';
require_once 'src/ValidatorForm.php';

//$result = []; //array reponse ajax messenger


$formDataNewsletter= new GetFormData();
$validatorForm= new ValidatorForm($formDataNewsletter->getDataForm());
$validatorForm->validateEmail();
//echo $_SESSION['$key'];
header('Location: index.php?var1=valor');

//echo $_SERVER["PHP_SELF"];



$result['errorEmail'] = "email invalid";

echo json_encode($result);



?>