<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-24 22:41:18
  from 'C:\xampp\htdocs\prueba\templates\_login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef3ba6ec1f377_21258892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04414d0dfad1db16c723e1c478dc3fc4a5e5797b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prueba\\templates\\_login.html',
      1 => 1593030947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef3ba6ec1f377_21258892 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row-fluid" id="contenido-interno">
	<div class="row">
		<div class="span11 offset1">
			<div class="row">
				<h4>Ingreso</h4>
					<form class="form-signin" method="POST" action="validar.php">
						<div class="form-group">
							<label for="usuario">Usuario:</label>
							<input type="text" id="idusuario" name="usuario" class="form-control" placeholder="Ingrese su nombre de usuario" required >
						</div>
						<div class="form-group">
							<label for="pwd">Clave:</label>
							<input type="password" id="idclave" name="clave" class="form-control" placeholder="Ingrese su clave" required>
						</div>
						<button type="submit" class="btn btn-primary">&nbsp;&nbsp;Ingresar&nbsp;&nbsp;</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div><?php }
}
