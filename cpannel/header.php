<?php

//Include de clases php
require_once('php/controladores/ControladorWEB.php');

require_once('php/controladores/ControladorSQL.php');

//Include de los parametros de smarty
require_once('setup.php'); 
session_start();
// ------- Declaracion de la funcion de smarty
$smarty = new Smarty_setup();

	/*======================Comprobacion de usuario registrado()======================================
     Comprueba que existe el usuario registrado como logueado de lo contrario aparece para que se loguee
	****************************************************************************************** */
	
if(isset($_SESSION['usuario'])){
	
	$smarty->assign('user', $_SESSION['usuario']->getNombre());
	$smarty->assign('login' , 'true');
	$smarty->assign('usuario' , 'true');
}else{
	$smarty->assign('usuario' , 'false');
	$smarty->assign('login' , 'true');
	session_destroy();
        header("Location: ../index.php");
}


$smarty->display('header.tpl');
?>