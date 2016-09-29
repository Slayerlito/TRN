<?php

//Include de clases php
require_once('php/class.php');

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
}

	/*======================login()======================================
     Realiza el login e inicia la sesion
	****************************************************************************************** */

if(isset($_REQUEST['login'])){

	$usuario = new Usuario($_REQUEST['email'],$_REQUEST['password']);
	if($usuario == '-1'){
		$smarty->assign('login' , 'false');	
		$smarty->assign('usuario' , 'false');
	}else{
		session_start();
		$_SESSION['usuario'] = $usuario;
		$smarty->assign('user', $_SESSION['usuario']->getNombre());
		$smarty->assign('login' , 'true');
		$smarty->assign('usuario' , 'true');
	}
}

	/*======================registo()======================================
     Realiza el registro
	 Comprueba que las contraseñas son iguales
	 Realiza el insert y en caso de existir el email devuelve false
	****************************************************************************************** */

if(isset($_REQUEST['registro'])){
	IF($_REQUEST['password'] == $_REQUEST['password2']){
		
		$datos = [
		"nombre" 	=> $_REQUEST['nombre'],
		"apellidos" => $_REQUEST['apellidos'],
		"email"		=> $_REQUEST['email'],
		"password"	=> $_REQUEST['password'],
		"nacimiento"=> $_REQUEST['nacimiento'],
		];
		$registro = ControladorSQL::getControlador()->registrarUsuario($datos['nombre'],$datos['apellidos'],$datos['email'],$datos['password'],$datos['nacimiento']);
		if($registro === true){
			$smarty->assign('registro' , 'true');
		}elseif($registro === false){
			$smarty->assign('registro' , 'email');
		}elseif($registro == null){
			$smarty->assign('registro' , '-1');
		}
		
	}ELSE{
		$smarty->assign('registro' , 'pass');	
	}
}else{
	$smarty->assign('registro' , '0');	
}




$smarty->display('header.tpl');
?>