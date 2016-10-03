<?php
if(isset($_REQUEST['login'])){
	$url = $_REQUEST['url'].'.php';
	header("Location: $url");
}


//Include de los parametros de smarty
require_once('setup.php'); 

//Declaracion de la funcion de smarty
$smarty = new Smarty_setup();

//Include del header
require_once('header.php');

//Funcionalidad del login

$url = $_REQUEST['url'];



$smarty->assign('url', '?url='.$url);


$smarty->display('login.tpl');

//Include del footer
require_once('footer.php');
?>