<?php

include_once("clases/config.php");
$Database=new Database();

$row = $Database->actualizarEstudiante($_POST['nombres'], $_POST['apellidos'], $_POST['id_ident'], $_POST['identificacion'], $_POST['id_departamento'],
									$_POST['ciudad'], $_POST['usuario'], $_POST['clave'], $_POST['id']);

if($row){
	$message = "Datos insertados";
	header("location: main_admin.php");
}else{
	$message = "Datos NO modificados";
	echo $message;
}
?>