<?php

class conexion{
	
	
	
}






//Login y desconexion de un usuario

class login{
	
	function consulta($email, $pass){
		
	}
	
	
	function comprobar($estado){ //Comprueba el estado de la peticion, 0 conectar, 1 contectado, 2 desconectado
		
		if($estado == '0'){ //Si el estado es 0 realiza una consulta para realizar el login
			function login_in(){
		
			}
		}elseif($estado == '1'){
			function connected() {
				
			}
		}elseif($estado == '2'){
			function login_out(){
		
			}
		}else{
			
		}
		
	}
	
	
	
	
}



?>