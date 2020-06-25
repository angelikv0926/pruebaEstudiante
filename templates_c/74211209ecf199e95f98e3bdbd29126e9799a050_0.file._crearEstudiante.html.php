<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-24 23:53:56
  from 'C:\xampp\htdocs\prueba\templates\_crearEstudiante.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef3cb74529476_29907290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74211209ecf199e95f98e3bdbd29126e9799a050' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prueba\\templates\\_crearEstudiante.html',
      1 => 1593035181,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef3cb74529476_29907290 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
	<form>
		<h2>Agregar Estudiante</h2>
		<a href="main_admin.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Regresar&nbsp;&nbsp;</a>
		<br>
	</form>
	
	<form method="post" action="crearEstudiante.php">
		<div class="col-md-12">
			<label>Nombres:</label>
			<input type="text" name="nombres" id="nombres" class='form-control' maxlength="100" required >
		</div>
		<div class="col-md-12">
			<label>Apellidos:</label>
			<input type="text" name="apellidos" id="apellidos" class='form-control' maxlength="100" required>
		</div>
		<div class="col-md-12">
			<label>Tipo Identificación:</label>
			<?php echo $_smarty_tpl->tpl_vars['output']->value;?>

		</div>
		<div class="col-md-12">
			<label>Identificación:</label>
			<input type="text" name="identificacion" id="identificacion" class='form-control' maxlength="100" required>
		</div>
		<div class="col-md-12">
			<label>Departamento:</label>
			<?php echo $_smarty_tpl->tpl_vars['output2']->value;?>

		</div>
		<div class="col-md-12">
			<label>Ciudad:</label>
			<input type="text" name="ciudad" id="ciudad" class='form-control' maxlength="100" required>
		</div>
		<div class="col-md-12">
			<label>Usuario:</label>
			<input type="text" name="usuario" id="usuario" class='form-control' maxlength="100" required>
		</div>
		<div class="col-md-12">
			<label>Clave:</label>
			<input type="password" name="clave" id="clave" class='form-control' maxlength="10" required>
		</div>
		<div class="col-md-12">
			<button type="submit" id="btn_grabar" class="btn btn-success">&nbsp;&nbsp;Guardar&nbsp;&nbsp;</button>	
		</div>
	</form>
</div>

<?php }
}
