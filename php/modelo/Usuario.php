<?php
/*======================usuarios()======================================
     Clase referente a los usarios
	 Permite a�adir, modificar, borrar y consultar usuarios
	 Es una extension de la clase conexion
	****************************************************************************************** */

class Usuario {
	private $id_user;
	private $nombre;
	private $apellidos;
	private $fechaNacimiento;
	private $email;
	private $deportista;
	private $peso;
	private $altura;
	private $perfil;
	
    public function __construct($email,$password){ 
		$resultado = ControladorSQL::getControlador()->ejecutarSQL("SELECT IF(PASSWORD=MD5('$password'),1,0) AS ACCESO FROM TRN_LKP_USUARIOS WHERE EMAIL='$email'");
		$login = $resultado->fetch_array(MYSQLI_ASSOC);
		$columnas = mysqli_num_rows($resultado);
		if ($columnas == 0 || $login['ACCESO'] == 0){
			return -1;
		}
		$resultado = ControladorSQL::getControlador()->ejecutarSQL("SELECT ID_USER,NOMBRE,APELLIDOS,FECHA_DE_NACIMIENTO,EMAIL,DEPORTISTA,PESO,ALTURA,PERFIL FROM TRN_LKP_USUARIOS WHERE EMAIL='$email'");
		$result = $resultado->fetch_array(MYSQLI_ASSOC);
		$this->id_user = $result['ID_USER'];
		$this->nombre = $result['NOMBRE'];
		$this->apellidos = $result['APELLIDOS'];
		$this->fechaNacimiento = $result['FECHA_DE_NACIMIENTO'];
		$this->email = $result['EMAIL'];
		$this->deportista = $result['DEPORTISTA'];
		$this->peso = $result['PESO'];
		$this->altura = $result['ALTURA'];
		$this->perfil = $result['PERFIL'];
		return $this;	
		
	} 
	public function getId(){
		return $this->id_user;
	}
	public function getNombre(){
		return $this->nombre;
	}
	public function getApellidos(){
		return $this->apellidos;
	}
	public function getFechaNacimiento(){
		return $this->fechaNacimiento;
	}
	public function getEmail(){
		return $this->email;
	}
	public function getDeportista(){
		return $this->deportista;
	}
	public function getPeso(){
		return $this->peso;
	}
	public function getAltura(){
		return $this->altura;
	}
	public function getPerfil(){
		return $this->perfil;
	}
	
	
	public function delete_user($id_user){
		$del = ControladorSQL::ejecutarSQL("DELETE FROM TRN_LKP_USUARIOS WHERE ID_USER = '$id_user'");
		$estado = mysqli_affected_rows($del);
		IF($estado > 0){
			return true;
		}ELSE{
			return null;
		}
	}
	
	public function desactivarUsuario(){
		//TODO: Actualizar variable y campo en base de datos.
	}
	public function solicitarBorrar(){
		//TODO: 
	}
	public function activarUsuario(){
		//TODO:
	}
} 
?>