<?php // cargamos la libreria de Smarty
require('smarty/libs/Smarty.class.php');
	$smarty = new Smarty;
	$smarty->template_dir = './templates/';
	$smarty->compile_dir = './templates_c/';
	$smarty->config_dir = './configs/';
	$smarty->cache_dir = './cache/';
?>