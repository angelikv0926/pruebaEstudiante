<?php

include_once("clases/config.php");

$Database=new Database();
$row = $Database->eliminarUsuario($_GET['id']);

if($row){
	header('location: main_admin.php');
}else{
	echo "Error al eliminar el registro";
}

?>