<?php
	session_start();
//Include de clases php
require_once('php/conexion.php');

//Include de los parametros de smarty
require_once('setup.php'); 

// ------- Declaracion de la funcion de smarty
$smarty = new Smarty_setup();

// ------- Comprobacion de usuario registrado

if(isset($_SESSION['usuario'])){
	
	$smarty->assign('user', $_SESSION['usuario']);
	$smarty->assign('login' , '0');
	$smarty->assign('usuario' , '1');
}else{
	$smarty->assign('usuario' , '0');
}

// ------- Funcionalidad del login

if(isset($_REQUEST['login'])){
	
	$email 	= $_REQUEST['email'];
	$pass	= $_REQUEST['password'];
	
	$result = mysqli_query($con, "SELECT nombre, IF(PASSWORD=MD5('$pass'),1,0) AS ACCESO FROM TRN_LKP_USUARIOS WHERE EMAIL='$email';" );
	$row=mysqli_fetch_array($result);
	if($row['ACCESO']=='1'){
		session_start();
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
	
	$result = mysqli_query($con, "INSERT INTO TRN_LKP_USUARIOS (NOMBRE,APELLIDOS,FECHA_DE_NACIMIENTO,EMAIL)VALUES($NOMBRE,$APELLIDOS,STR_TO_DATE($FECHA_DE_NACIMIENTO,'%d/%m/%Y'),$EMAIL,MD5($PASSWORD))" );
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