<?php
session_start();
//Include de clases php
require_once('php/class.php');

//Include de los parametros de smarty
require_once('setup.php'); 

// ------- Declaracion de la funcion de smarty
$smarty = new Smarty_setup();

	/*======================Comprobacion de usuario registrado()======================================
     Comprueba que existe el usuario registrado como logueado de lo contrario aparece para que se loguee
	****************************************************************************************** */
	
if(isset($_SESSION['usuario'])){
	
	$smarty->assign('user', $_SESSION['usuario']);
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

	$usuario 	= new usuarios();
	$login 		= $usuario->login_user($_REQUEST['password'], $_REQUEST['email']);
	
	if($login['ACCESO']=='1'){
		session_start();
		$_SESSION['usuario'] = $login['nombre'];
		$smarty->assign('user', $_SESSION['usuario']);
		$smarty->assign('login' , 'true');
		$smarty->assign('usuario' , 'true');
	}else{
		$smarty->assign('login' , 'false');	
		$smarty->assign('usuario' , 'false');
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
		$cliente 	= new usuarios();
		$registro 	= $cliente->add_user($datos);
		var_dump ($registro);
		
		
		if($registro == true){
			$smarty->assign('registro' , 'true');
		}elseif($registro == false){
			$smarty->assign('registro' , 'email');
		}elseif($registro == null){
			$smarty->assign('registro' , 'null');
		}
		
	}ELSE{
		$smarty->assign('registro' , 'pass');	
	}
/*	
	$result = mysqli_query($con, "INSERT INTO TRN_LKP_USUARIOS (NOMBRE,APELLIDOS,FECHA_DE_NACIMIENTO,EMAIL)VALUES($NOMBRE,$APELLIDOS,STR_TO_DATE($FECHA_DE_NACIMIENTO,'%d/%m/%Y'),$EMAIL,MD5($PASSWORD))" );
	if(mysqli_affected_rows($con) != -1){
		
		$smarty->assign('registro' , '0');	
	}else{
		$smarty->assign('registro' , '1');	
	}	*/
}else{
	$smarty->assign('registro' , '0');	
}






/*


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


*/






$smarty->display('header.tpl');
?>