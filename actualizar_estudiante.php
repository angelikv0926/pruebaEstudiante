<?php

include_once("clases/config.php");
$Database=new Database();

$listado_tipo = $Database->consultarTipo();
$listado_depa = $Database->consultarDepartamento();

$datos_estudiante=$Database->consultarEstudianteById($_GET['id']);
$id = $datos_estudiante['id_estudiante'];
$nombres = $datos_estudiante['nombres'];
$apellidos = $datos_estudiante['apellidos'];
$id_ident = $datos_estudiante['id_ident'];
$identificacion = $datos_estudiante['identificacion'];
$id_departamento = $datos_estudiante['id_departamento'];
$ciudad = $datos_estudiante['ciudad'];
$usuario = $datos_estudiante['usuario'];
$clave = $datos_estudiante['clave'];

$output = "<select id='$id_ident' name='id_ident'>";
foreach($listado_tipo as $row){
	$output .= "<option value='".$row['id_ident']."' ".">".$row['tipo']."</option>";
}
$output .= "</select>";

$output2 = "<select id='$id_departamento' name='id_departamento'>";
foreach($listado_depa as $row){
	$output2 .= "<option value='".$row['id_departamento']."' ".">".$row['departamento']."</option>";
}
$output2 .= "</select>";

$plantilla=new Smarty;

$plantilla->assign("id",$id);
$plantilla->assign("nombres",$nombres);
$plantilla->assign("apellidos",$apellidos);
$plantilla->assign("identificacion",$identificacion);
$plantilla->assign("ciudad",$ciudad);
$plantilla->assign("usuario",$usuario);
$plantilla->assign("clave",$clave);
$plantilla->assign("output",$output);
$plantilla->assign("output2",$output2);

$plantilla->assign("NOM_MODULO","Registro de usuarios");
$plantilla->assign("unknown",(isset($_GET[',unknown'])?"Revise la contraseña indicada":""));
$plantilla->assign("MENU","SI");
$plantilla->assign("CONTENIDO_MODULO",$plantilla->fetch("_modificarEstudiante.html"));
$plantilla->display("_generic.html");
?>