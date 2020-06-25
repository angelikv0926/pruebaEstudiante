<?php

/*
	Codigo Roll = 1 -> Administrador
	Codigo Roll = 2 -> Estudiante
*/

include_once("clases/config.php");

$Database=new Database();
$row = $Database->ValidarIngreso($_POST['usuario'],$_POST['clave']);

//if($row['id_estudiante'] != ""){
//	if($row['id_rol'] == 1){
		header("location: main_admin.php");
	//} elseif ($row['id_rol'] == 2){
		//header("location: main_usuario.php?id={$row['id_estudiante']}");
	//}
//}else{
	//header("location: index.php?unknown");
//}
?>