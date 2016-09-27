<?php

class conexion{
	
	$mysqli = new mysqli('localhost', 'root', '', 'trn');

	/*
	 * Esta es la forma OO "oficial" de hacerlo,
	 * AUNQUE $connect_error estaba averiado hasta PHP 5.2.9 y 5.3.0.
	 */
	if ($mysqli->connect_error) {
		die('Error de Conexión (' . $mysqli->connect_errno . ') '
				. $mysqli->connect_error);
	}

	echo 'Éxito... ' . $mysqli->host_info . "\n";

	$mysqli->close();
	
	
}






//Login y desconexion de un usuario

class login{
	
	
	
	
}



?>