<?php

include_once("clases/config.php");
$Database=new Database();

$plantilla=new Smarty;
$listado_tipo = $Database->consultarTipo();
$listado_depa = $Database->consultarDepartamento();

$output = "<select id='id_ident' name='id_ident'>";
foreach($listado_tipo as $row){
	$output .= "<option value='".$row['id_ident']."' ".">".$row['tipo']."</option>";
}
$output .= "</select>";

$output2 = "<select id='id_departamento' name='id_departamento'>";
foreach($listado_depa as $row){
	$output2 .= "<option value='".$row['id_departamento']."' ".">".$row['departamento']."</option>";
}
$output2 .= "</select>";

$plantilla->assign("output",$output);
$plantilla->assign("output2",$output2);
$plantilla->assign("NOM_MODULO","Registro de usuarios");
$plantilla->assign("unknown",(isset($_GET[',unknown'])?"Revise la contraseña indicada":""));
$plantilla->assign("MENU","SI");
$plantilla->assign("CONTENIDO_MODULO",$plantilla->fetch("_crearEstudiante.html"));
$plantilla->display("_generic.html");
?>	