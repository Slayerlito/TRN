<?php
	/*======================Comprobacion de usuario registrado()======================================
     Comprueba que existe el usuario registrado como logueado de lo contrario aparece para que se loguee
	****************************************************************************************** */
	
if(isset($_SESSION['usuario'])){
	
	$smarty->assign('user', $_SESSION['usuario']->getNombre());
	$smarty->assign('login' , 'true');
	$smarty->assign('usuario' , 'true');
	session_write_close();
}else{
	$smarty->assign('usuario' , 'false');
	$smarty->assign('login' , 'true');
	session_destroy();
}

	/*======================login()======================================
     Realiza el login e inicia la sesion
	****************************************************************************************** */

if(isset($_REQUEST['login'])){

	//$usuario = new Usuario($_REQUEST['email'],$_REQUEST['password']);
	$usuario = ControladorWEB::loginUsuario($_REQUEST['email'],$_REQUEST['password']);
	//Login erróneo si devuelve un entero
	if(gettype($usuario) == 'integer'){	
		if($usuario == -1){
			$smarty->assign('login' , 'false');	
			$smarty->assign('usuario' , 'false');
		}elseif ($usuario == -2){
			$smarty->assign('login' , 'false');	
			$smarty->assign('usuario' , 'false');
		}elseif ($usuario == -3){
			$smarty->assign('login' , 'false');	
			$smarty->assign('usuario' , 'false');
			$smarty->assign('inactivo' ,'true');
		}
	//Login correcto.
	}else{
		session_start();
		$_SESSION['usuario'] = $usuario;
		$smarty->assign('user', $_SESSION['usuario']->getNombre());
		$smarty->assign('login' , 'true');
		$smarty->assign('usuario' , 'true');
	}
}
?>