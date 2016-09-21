<?php

//Include de clases php
require_once('php/conexion.php');

//Include de los parametros de smarty
require_once('setup.php'); 

// ------- Declaracion de la funcion de smarty
$smarty = new Smarty_setup();

// ------- Comprobacion de usuario registrado

if(isset($_SESSION['usuario'])){
	
	$smarty->assign('login' , '0');
	$smarty->assign('usuario' , '1');
}else{
	$smarty->assign('usuario' , '0');
}

// ------- Funcionalidad del login

if(isset($_REQUEST['login'])){
	
	$email 	= $_REQUEST['email'];
	$pass	= $_REQUEST['password'];
	
	$result = mysqli_query($con, "SELECT email, password, nombre FROM trn_usuarios WHERE email = '$email' AND password = '$pass'" );
	if(mysqli_affected_rows($con)){
		session_start();
		$row = mysqli_fetch_array($result);
		$_SESSION['usuario'] = $row['nombre'];
		
		$smarty->assign('user', $_SESSION['usuario']);
		$smarty->assign('login' , '0');
		$smarty->assign('usuario' , '1');
	}else{
		$smarty->assign('login' , '1');	
		$smarty->assign('usuario' , '0');
	}
}else{

	$smarty->assign('login' , '0');
}

// ------- Funcionalidad del Registro

if(isset($_REQUEST['registro'])){
	
	$email 		= $_REQUEST['email'];
	$password	= $_REQUEST['password'];
	$nombre 	= $_REQUEST['nombre'];
	$apellidos 	= $_REQUEST['apellidos'];
	$nacimiento = $_REQUEST['nacimiento'];
	
	$result = mysqli_query($con, "INSERT INTO trn_usuarios (NOMBRE,APELLIDOS,FECHA_DE_NACIMIENTO,EMAIL,PASSWORD)VALUES('$nombre','$apellidos','$nacimiento','$email','$password')" );
	if(mysqli_affected_rows($con) != -1){
		
		$smarty->assign('registro' , '0');	
	}else{
		$smarty->assign('registro' , '1');	
	}	
}else{
	$smarty->assign('registro' , '0');	
}







$smarty->display('header.tpl');
?>