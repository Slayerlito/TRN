<?php

	/*======================conectar()======================================
     conecta con la base de datos
	****************************************************************************************** */

require_once "conexion.php"; 

class conexion 
{ 
    protected $_db; 

    public function __construct() 
    { 
        $this->_db = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME); 
        if ( $this->_db->connect_errno) 
        { 
            echo "Fallo al conectar a MySQL: ". $this->_db->connect_error; 
            return;     
        } 

        $this->_db->set_charset(DB_CHARSET); 
    } 
} 

	/*======================usuarios()======================================
     Clase referente a los usarios
	 Permite añadir, modificar, borrar y consultar usuarios
	 Es una extension de la clase conexion
	****************************************************************************************** */

class usuarios extends conexion 
{     
    public function __construct() 
    { 
        parent::__construct(); 
    } 

	public function login_user($password, $email){
		$result = $this->_db->query("SELECT nombre, IF(PASSWORD=MD5('$password'),1,0) AS ACCESO FROM TRN_LKP_USUARIOS WHERE EMAIL='$email'");
		$login 	= $result->fetch_array(MYSQLI_ASSOC);
		return $login;
	}
	
    public function user() 
    { 
        $result = $this->_db->query('SELECT email FROM TRN_LKP_USUARIOS WHERE '); 
         
        $users = $result->fetch_all(MYSQLI_ASSOC); 
         
        return $users; 
    } 
	
	public function add_user($datos){
		$email 		= $datos['email'];
		$password	= $datos['password'];
		$nombre 	= $datos['nombre'];
		$apellidos 	= $datos['apellidos'];
		$nacimiento = $datos['nacimiento'];
	
		$result = $this->_db->query("INSERT INTO TRN_LKP_USUARIOS (NOMBRE,APELLIDOS,FECHA_DE_NACIMIENTO,EMAIL,PASSWORD)VALUES('$nombre','$apellidos',STR_TO_DATE('$nacimiento','%d/%m/%Y'),'$email',MD5('$password'))"); 

         
        return $result; 
		
	}
	
	public function delete_user(){
		
	}
	
	public function modificar_user(){
		
	}
} 





?>