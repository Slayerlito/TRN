<?php
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
?>