<?php

	/*======================conectar()======================================
     conecta con la base de datos
	****************************************************************************************** */

require_once "conexion.php"; 

class ControladorSQL{ 
    private static $controladorSQL;
	private $_db; 

    private function __construct(){ 
        return $this;
    } 

	public static function getControlador(){
		if (ControladorSQL::$controladorSQL == null){
			ControladorSQL::$controladorSQL = new ControladorSQL();
		}
		return ControladorSQL::$controladorSQL;
	}
	private function conectar(){
		$this->_db = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME); 
        if ( $this->_db->connect_errno) 
        { 
            echo "Fallo al conectar a MySQL: ". $this->_db->connect_error; 
            return;     
        } 

        $this->_db->set_charset(DB_CHARSET); 
	}
	private function desconectar(){
		MYSQLI_CLOSE($this->_db);
	}
	public function ejecutarSQL($query){
		$this->conectar();
		$result = $this->_db->query($query);
		$this->desconectar();
		return $result;
	}
	
	public function registrarUsuario($nombre,$apellidos,$email,$password,$nacimiento){
		$result = $this->ejecutarSQL("INSERT INTO TRN_LKP_USUARIOS (NOMBRE,APELLIDOS,FECHA_DE_NACIMIENTO,EMAIL,PASSWORD)VALUES('$nombre','$apellidos',STR_TO_DATE('$nacimiento','%d/%m/%Y'),'$email',MD5('$password'))"); 

	}
	
} 

	/*======================usuarios()======================================
     Clase referente a los usarios
	 Permite añadir, modificar, borrar y consultar usuarios
	 Es una extension de la clase conexion
	****************************************************************************************** */

class Usuario {
	private $id_user;
	private $nombre;
	private $apellidos;
	private $fecha_nacimiento;
	private $email;
	private $deportista;
	private $peso;
	private $altura;
	private $perfil;
	
    public function __construct($email,$password){ 
		$resultado = ControladorSQL::getControlador()->ejecutarSQL("SELECT IF(PASSWORD=MD5('$password'),1,0) AS ACCESO FROM TRN_LKP_USUARIOS WHERE EMAIL='$email'");
		$login = $resultado->fetch_array(MYSQLI_ASSOC);
		if ($login['ACCESO'] == '0'){
			return -1;
		}
		$resultado = ControladorSQL::getControlador()->ejecutarSQL("SELECT ID_USER,NOMBRE,APELLIDOS,FECHA_DE_NACIMIENTO,EMAIL,DEPORTISTA,PESO,ALTURA,PERFIL FROM TRN_LKP_USUARIOS WHERE EMAIL='$email'");
		$result = $resultado->fetch_array(MYSQLI_ASSOC);
		$this->id_user = $result['ID_USER'];
		$this->nombre = $result['NOMBRE'];
		$this->apellidos = $result['APELLIDOS'];
		$this->fecha_nacimiento = $result['FECHA_DE_NACIMIENTO'];
		$this->email = $result['EMAIL'];
		$this->deportista = $result['DEPORTISTA'];
		$this->peso = $result['PESO'];
		$this->altura = $result['ALTURA'];
		$this->perfil = $result['PERFIL'];
		return $this;		
	} 
	public function getNombre(){
		return $this->nombre;
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