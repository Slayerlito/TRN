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
	
		
		echo "INSERT INTO TRN_LKP_USUARIOS (NOMBRE,APELLIDOS,FECHA_DE_NACIMIENTO,EMAIL,PASSWORD)VALUES('$nombre','$apellidos',STR_TO_DATE('$nacimiento','%d/%m/%Y'),'$email',MD5('$password'))";
		$result = $this->_db->query("INSERT INTO TRN_LKP_USUARIOS (NOMBRE,APELLIDOS,FECHA_DE_NACIMIENTO,EMAIL,PASSWORD)VALUES('$nombre','$apellidos',STR_TO_DATE('$nacimiento','%d/%m/%Y'),'$email',MD5('$password'))"); 
		
	//	$consul = $result->affected_rows();
         
        return $result; 
		
	}
	
	public function delete_user(){
		
	}
	
	public function modificar_user(){
		
	}
} 








/*
class DB {
    //atributo privado de conexión
    private static $conexion;
 
  /*======================conectar()======================================
     conecta con la base de datos, usando PDO
     da valor al atributo privado y estático $conexion de la clase
     En caso de no conectarse aborta la app y muestra un mensaje
   ****************************************************************************************** */
/*   
    private static function conectar(){
        $opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        $dsn = "mysql:host=localhost;dbname=trn";
        $usuario = 'root';
        $contrasena = '';
        try{
           $conexion= new PDO($dsn, $usuario, $contrasena, $opc);
           $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e) {
             die ('Abortamos la aplicación por fallo conectando con la BD' . $e->getMessage());
         }
         self::$conexion = $conexion;
 
}
 
 
/*======================ejecutaConsulta ($sql,$valores)======================================
    Accion: Ejecuta una consulta preparada con los valores de los parámetros de la consulta preparada
    Parámetros: $sql es la consulta preparada y parametrizada
                $valores es un array asociativo con los valores de los distintos 
                          parámetros de la consulta anterior
    Retorna =La consulta despues de ejecutarla, o null si no la ha podido ejecutaqr
             en caso de no ejecutarla da un mensaje              
 * ***********************************************************************************************/
/*    protected static function ejecutaConsulta($sql,$valores) {
       if (self::$conexion == null)
            self::conectar();
       $conexion = self::$conexion;
       try{
           $consulta = $conexion->prepare($sql);
           $consulta->execute($valores);
       }catch (PDOException $e) {
           echo 'No se ha podido ejecutar la consulta' . $e->getMessage();
           return null;
        }
       return $consulta;
 
    }
 
 
 /*======================verificaCliente ($nombre,$pass)======================================
    Accion: verifica si un nombre y pass son contenidos en la base de datos
    Parámetros: $nombre es el nombre de usuario
                $pass es la password para ese nombre
    Retorna  true o false según se haya podido o no validar
  * Recordar que la pass está cifrada con md5 en la base de datos      
 * ***********************************************************************************************/   
 /*   public static function verificaCliente($nombre, $pass) {
       $valores = array('usuario'=>$nombre, 'password' =>$pass);
       $sql = <<<FIN
        SELECT usuario FROM usuarios 
        WHERE usuario=:usuario
        AND contrasena=md5(:password)
FIN;
       $resultado = self::ejecutaConsulta ($sql,$valores);
       $verificado = false;
       if ($resultado->fetch())
          $verificado=true;
       return $verificado;
    }
}//End de la clase DB.php
 






class conexion{
	
	$mysqli = new mysqli('localhost', 'root', '', 'trn');

	/*
	 * Esta es la forma OO "oficial" de hacerlo,
	 * AUNQUE $connect_error estaba averiado hasta PHP 5.2.9 y 5.3.0.
	 */
/*	if ($mysqli->connect_error) {
		die('Error de Conexión (' . $mysqli->connect_errno . ') '
				. $mysqli->connect_error);
	}

	echo 'Éxito... ' . $mysqli->host_info . "\n";

	$mysqli->close();
	
	
}






//Login y desconexion de un usuario

class login{
	
	
	
	
}

*/

?>