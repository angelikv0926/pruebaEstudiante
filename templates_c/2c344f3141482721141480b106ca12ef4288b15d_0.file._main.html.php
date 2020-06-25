<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-24 23:41:40
  from 'C:\xampp\htdocs\prueba\templates\_main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef3c8941374f7_30271017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c344f3141482721141480b106ca12ef4288b15d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prueba\\templates\\_main.html',
      1 => 1593034503,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef3c8941374f7_30271017 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
	<form name="frm_listado">
		<br>
		<a href="creacion_estudiante.php" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;&nbsp;Agregar Estudiante&nbsp;&nbsp;</a>
		<br><br><br>
		<table class="table">
			<thead>
				<tr>
					<th>Nombre Completo</th>
					<th>Tipo Identificación</th>
					<th>Identificación</th>
					<th>Departamento</th>
					<th>Ciudad</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody id="tbody_listado">
				<?php echo $_smarty_tpl->tpl_vars['tbody']->value;?>

			</tbody>
		</table>
	</form>
</div><?php }
}
