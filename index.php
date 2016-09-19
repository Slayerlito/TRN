<?php

require_once('libs/Smarty.class.php');

$smarty = new Smarty();

$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates_c/');
$smarty->setConfigDir('configs/');
$smarty->setCacheDir('cache/');

$smarty->display('header.tpl');
$smarty->display('index.tpl');
$smarty->display('footer.tpl');
?>