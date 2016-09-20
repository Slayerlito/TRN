<?php

//Include de clases php
require_once('php/conexion.php');

//Include de los parametros de smarty
require_once('setup.php'); 

//Declaracion de la funcion de smarty
$smarty = new Smarty_setup();


//Funcionalidad del login

if(isset($_REQUEST['commit'])){
	$email 	= $_REQUEST['email'];
	$pass	= $_REQUEST['password'];
	//echo "SELECT email, password, nombre FROM trn_usuarios WHERE email = '$email' AND password = '$pass'";
	$result = mysqli_query($con, "SELECT email, password, nombre FROM trn_usuarios WHERE email = '$email' AND password = '$pass'" );
	if(mysqli_affected_rows($con)){
		session_start();
		$row = mysqli_fetch_array($result);
		$_SESSION['usuario'] = $row['nombre'];
		$smarty->assign('error' , '0');
	}
	else{
	$smarty->assign('error' , '1');	
	}
	
}
else{

	$smarty->assign('error' , '0');
}






$smarty->display('header.tpl');
?>