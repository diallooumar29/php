<?php
/* Smarty version 3.1.30, created on 2018-02-27 17:19:00
  from "C:\xampp\htdocs\mesprojets\MVC_BY_NGOR_SECK_modifier_par_Fatah\view\test\get_id.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9584f4e0f2f0_77514795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24111d2048529c4307505247c4c0b7792be6f5c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesprojets\\MVC_BY_NGOR_SECK_modifier_par_Fatah\\view\\test\\get_id.html',
      1 => 1518108744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9584f4e0f2f0_77514795 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>page get id</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
		<style>
			h1{ 
				color: #40007d;
			}
		</style>
	</head>
	<body>
		<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logo.jpg" class="resize" />
		<div class="nav navbar navbar-default navbar-fixed-top">
			<ul class="nav navbar-nav">
				<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/index">Menu page test</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/getID/1">Menu page test 2</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/liste">Menu page test liste</a></li>
			</ul>
		</div>
		<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;">
			<div class="panel panel-info">
				<div class="panel-heading">BIENVENUE A VOTRE MODELE MVC</div>
				<div class="panel-body">
					MODELE DEVELOPPE PAR Ngor SECK !
					<br/>
					<h1>Valeur de l'identifiant revoyé par le controller : <?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
</h1>
				</div>
			</div>
		</div>
		
	</body>
</html><?php }
}
