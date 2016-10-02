<?php
/*======================conectar()======================================
     conecta con la base de datos
	****************************************************************************************** */
	
class ControladorSQL{ 
    private static $controladorSQL;
	private $_db; 
	private $db_server='localhost';
	private $db_user='root';
	private $db_pass='';
	private $db_name='trn';
	private $db_charset='utf-8';
	
	
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
		$this->_db = new mysqli($this->db_server, $this->db_user, $this->db_pass,$this->db_name); 
        if ( $this->_db->connect_errno) 
        { 
            echo "Fallo al conectar a MySQL: ". $this->_db->connect_error; 
            return;     
        } 

        $this->_db->set_charset($this->db_charset); 
	}
	private function desconectar(){
		MYSQLI_CLOSE($this->_db);
	}
	
	/**
	 *  Descripcion
	 *  @query La query que se va a ejecutarSQL
	 *  @return Devuelve lo que sea
	 *  	· Devuelve -1 si error nacimiento
	 *  	· Devuelve
	 */
	public function ejecutarSQL($query){
		$this->conectar();
		$result = $this->_db->query($query);
		$this->desconectar();
		return $result;
	}
	
	public function registrarUsuario($nombre,$apellidos,$email,$password,$nacimiento){
		
		$comprobar = $this->ejecutarSQL("SELECT EMAIL FROM TRN_LKP_USUARIOS WHERE EMAIL = '$email' ");
		$existe = mysqli_num_rows($comprobar);
		IF($existe == '0'){
			$result = $this->ejecutarSQL("INSERT INTO TRN_LKP_USUARIOS (NOMBRE,APELLIDOS,FECHA_DE_NACIMIENTO,EMAIL,PASSWORD)VALUES('$nombre','$apellidos',STR_TO_DATE('$nacimiento','%d/%m/%Y'),'$email',MD5('$password'))"); 
			return true;
		}ELSEIF($existe == '1'){
			return false;
		}ELSE{
			return null;
		}
		
	}
	
} 
?>