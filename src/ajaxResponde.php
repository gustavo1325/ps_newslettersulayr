<?php
 //$id = $_POST["idnode"];
if(isset($_POST["email"])){
    $valor=$_POST["email"];
    ?> <p>esto que es lo que es</p><?php
}

?>
<h1> este es el resultado</h1>
<p> <?php echo $valor; ?> </p>
<?php


/*$name="duqie";

$kako= "ahora si que aparece";
$result = [];
$result['errorEmail'] = $valor;
//echo $_SESSION['$key'];
echo json_encode($result);

*/
/*


echo $result['nameValue'];*/