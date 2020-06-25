<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-25 00:20:18
  from 'C:\xampp\htdocs\prueba\templates\_modificarEstudiante.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef3d1a2ea98c9_90778105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bf21d36b342dfa5ebb53a496d36b9d1e9b07a8a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prueba\\templates\\_modificarEstudiante.html',
      1 => 1593036921,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef3d1a2ea98c9_90778105 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
	<form>
		<h2>Modificar Usuario</h2>
		<a href="main_admin.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Regresar&nbsp;&nbsp;</a>
		<br><br><br>
	</form>
	
	<form method="post" action="modificarEstudiante.php">
		<div class="col-md-12">
			<label>Nombres:</label>
			<input type="text" name="nombres" id="nombres" class='form-control' maxlength="100" required  value="<?php echo $_smarty_tpl->tpl_vars['nombres']->value;?>
">
			<input type="hidden" name="id" id="id" class='form-control' maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
		</div>
		<div class="col-md-12">
			<label>Apellidos:</label>
			<input type="text" name="apellidos" id="apellidos" class='form-control' maxlength="100" required value="<?php echo $_smarty_tpl->tpl_vars['apellidos']->value;?>
">
		</div>
		<div class="col-md-12">
			<label>Tipo Identificación:</label>
			<?php echo $_smarty_tpl->tpl_vars['output']->value;?>

		</div>
		<div class="col-md-12">
			<label>Identificación:</label>
			<input type="text" name="identificacion" id="identificacion" class='form-control' maxlength="100" required value="<?php echo $_smarty_tpl->tpl_vars['identificacion']->value;?>
">
		</div>
		<div class="col-md-12">
			<label>Departamento:</label>
			<?php echo $_smarty_tpl->tpl_vars['output2']->value;?>

		</div>
		<div class="col-md-12">
			<label>Ciudad:</label>
			<input type="text" name="ciudad" id="ciudad" class='form-control' maxlength="100" required value="<?php echo $_smarty_tpl->tpl_vars['ciudad']->value;?>
">
		</div>
		<div class="col-md-12">
			<label>Usuario:</label>
			<input type="text" name="usuario" id="usuario" class='form-control' maxlength="100" required value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
">
		</div>
		<div class="col-md-12">
			<label>Clave:</label>
			<input type="password" name="clave" id="clave" class='form-control' maxlength="10" required value="<?php echo $_smarty_tpl->tpl_vars['clave']->value;?>
">
		</div>
		<div class="col-md-12">
			<button type="submit" id="btn_grabar" class="btn btn-success">&nbsp;&nbsp;Actualizar&nbsp;&nbsp;</button>	
		</div>
	</form>
</div>

<?php }
}
