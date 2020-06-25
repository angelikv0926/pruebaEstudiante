<?php

include_once("clases/config.php");
$Database=new Database();

$plantilla=new Smarty;

$listado = $Database->consultarEstudiantes();
$buffer="";

foreach ($listado as $row){
	
	$btn_actualizar="<a href='actualizar_estudiante.php?id={$row['id_estudiante']}' class='btn btn-primary'>Editar</a>";
	$btn_borrar="<a href='eliminar_estudiante.php?id={$row['id_estudiante']}' class='btn btn-danger'>Eliminar</a>";

	$buffer.="<tr><td>{$row['nombres']} {$row['apellidos']}</td> <td>{$row['tipo']}</td> <td>{$row['identificacion']}</td>
				<td>{$row['departamento']}</td> <td>{$row['ciudad']}</td>
				<td>$btn_actualizar $btn_borrar</td></tr>";
}

$plantilla->assign("tbody",$buffer);

$plantilla->assign("NOM_MODULO","Listado de usuarios");
$plantilla->assign("unknown",(isset($_GET[',unknown'])?"Revise la contraseña indicada":""));
$plantilla->assign("MENU","SI");
$plantilla->assign("CONTENIDO_MODULO",$plantilla->fetch("_main.html"));
$plantilla->display("_generic.html");
?>