<?php

include_once("clases/config.php");

$Database=new Database();
$row = $Database->crearEstudiante($_POST['nombres'], $_POST['apellidos'], $_POST['id_ident'], $_POST['identificacion'], $_POST['id_departamento'],
									$_POST['ciudad'], $_POST['usuario'], $_POST['clave']);

if($row){
	$message = "Datos insertados";
	header("location: main_admin.php");
}else{
	$message = "Datos NO insertados";
	echo $message;
}
?>