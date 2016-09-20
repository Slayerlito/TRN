<?php

//Include de clases php
require_once('php/conexion.php');

//Include de los parametros de smarty
require_once('setup.php'); 

//Declaracion de la funcion de smarty
$smarty = new Smarty_setup();

//Include del header
require_once('header.php');

//Funcionalidad del login

if(isset($_REQUEST['commit'])){
	$email 	= $_REQUEST['email'];
	$pass	= $_REQUEST['password'];
	echo $email;
	/*if($result = mysqli_query($con, 'SELECT email, password, nombre FROM usuario WHERE email ='$email' AND password = '$pass' ')){
		session_start();
		$_SESSION['usuario'] = 'nombre';
		
		
		$smarty->assign('error' , '0');
	}
	*/
	
	$smarty->assign('error' , '1');	
}
else{

	$smarty->assign('error' , '0');
}
	
$smarty->display('login.tpl');


//Include del footer
require_once('footer.php');
?>