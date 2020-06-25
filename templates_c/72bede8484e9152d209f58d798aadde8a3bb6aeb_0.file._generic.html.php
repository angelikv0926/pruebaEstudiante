<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-25 00:44:08
  from 'C:\xampp\htdocs\prueba\templates\_generic.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef3d7386a4220_73128292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72bede8484e9152d209f58d798aadde8a3bb6aeb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prueba\\templates\\_generic.html',
      1 => 1593038643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef3d7386a4220_73128292 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Estudiantes</title>
		
		<link href="index.php" rel="canonical">
		
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css" type="text/css">
		<link rel="stylesheet" href="css/font-awesome.css" type="text/css">
		<link rel="stylesheet" href="css/mobile-menu.css" type="text/css">
		<link rel="stylesheet" href="css/template.css" type="text/css">
		<link rel="stylesheet" href="css/preset1.css" type="text/css">
		<link rel="stylesheet" href="css/custom.css" type="text/css">
		<link rel="stylesheet" href="css/flexslider.css" type="text/css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/custom-theme/jquery-ui-1.10.4.custom.css" />
		
		<style type="text/css">
			
				.container{max-width:940px}
				#sp-header-wrapper{padding: 15px 0px 7px 0px !important; }
				#sp-menu-wrapper{color: rgb(255, 255, 255) !important; }
				#sp-menu-wrapper a{color: rgb(255, 255, 255) !important; }
				#sp-menu-wrapper a:hover{color: rgb(45, 86, 152) !important; }
				#sp-footer-wrapper{padding: 30px 0 !important; }
			
		</style>
		
		<?php echo '<script'; ?>
 src="js/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/jquery-noconflict.js" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/jquery-migrate.min.js" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/jquery-noconflict(1).js" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/modernizr-2.6.2.min.js" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/helix.core.js" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/menu.js" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/jquery.flexslider-min.js" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/jquery-1.10.2.js" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/validacion.js" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="js/i18n/grid.locale-en.js"><?php echo '</script'; ?>
>
		
		<style>
			
				#sp-footer-wrapper {
					background: transparent !important;
					padding: 0px 0 !important;
				}
				.separador_menu a{
					color: rgb(45, 86, 152) !important;
				}
			
		</style>
	</head>
	
	<body>
		<div>
			<header id="sp-header-wrapper">
				<div class="row-fluid" id="titulo">
					<div class="custom" align="center">
						<p><span style="font-size:38px; font-weight:bold; color:#036">Estudiantes</span></p><br>
					</div>
				</div>
			</header>
			
			<section id="sp-menu-wrapper" class=" ">
				<div class="container-fluid">
					<div class="row-fluid" id="menu">
						<div id="sp-menu" class="span12">
							<div id="sp-main-menu">
								<ul class="sp-menu level-0">
									<?php if ($_smarty_tpl->tpl_vars['MENU']->value == 'SI') {?>
										<li class='menu-item'>
										<a href='exit.php' class='menu-item active first'>
											<span class='menu'>
												<span class='menu-title'><i class='fa fa-times'></i> Salir</span>
											</span>
										</a>
									</li>
									<?php }?>
									<li>
										<a target="_blank" href='PASOS DE INSTALACIÓN.pdf' class='menu-item active first'>
											<span class='menu'>
												<span class='menu-title'>
													<i class="fa fa-bell"></i> Ayuda
												</span>
											</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<div class="container-fluid" style="min-height: 350px;background-color:white" id="contenido-general">
				<section id="sp-contenido-interno-wrapper" class=" ">
					<div class="container-fluid" align="center">
						<br>
						<?php echo $_smarty_tpl->tpl_vars['CONTENIDO_MODULO']->value;?>

					</div>
				</section>
			</div>
			
			<footer id="sp-footer-wrapper">
				<div class="container-fluid" style="height:150px">
					<div class="row-fluid" id="footer">
						<div id="sp-footer-inm" class="span6"></div>
					</div>
				</div>
			</footer>
		</div>		
	</body>
</html><?php }
}
