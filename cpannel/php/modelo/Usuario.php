<?php
/*======================usuarios()======================================
     Clase referente a los usarios
	 Permite añadir, modificar, borrar y consultar usuarios
	 Es una extension de la clase conexion
	****************************************************************************************** */

class Usuario {
	private $id_user;
	private $nombre;
	private $apellidos;
	private $fechaNacimiento;
	private $email;
	private $deportista;
	private $coach;
	private $peso;
	private $altura;
	private $foto;
	private $perfil;
	private $activo;
	
    public function __construct($email){ 
		$resultado = ControladorSQL::getControlador()->ejecutarSQL("SELECT ID_USER,NOMBRE,APELLIDOS,FECHA_DE_NACIMIENTO,EMAIL,DEPORTISTA,COACH,PESO,ALTURA,PERFIL,ACTIVO FROM TRN_LKP_USUARIOS WHERE EMAIL='$email'");
		$result = $resultado->fetch_array(MYSQLI_ASSOC);
		$this->id_user = $result['ID_USER'];
		$this->nombre = $result['NOMBRE'];
		$this->apellidos = $result['APELLIDOS'];
		$this->fechaNacimiento = $result['FECHA_DE_NACIMIENTO'];
		$this->email = $result['EMAIL'];
		$this->deportista = $result['DEPORTISTA'];
		$this->coach = $result['COACH'];
		$this->peso = $result['PESO'];
		$this->altura = $result['ALTURA'];
		$this->perfil = $result['PERFIL'];
		$this->activo = $result['ACTIVO'];
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
	public function isDeportista(){
		return $this->deportista;
	}
	public function isCoach(){
		return $this->coach;
	}
	public function getPeso(){
		return $this->peso;
	}
	public function getAltura(){
		return $this->altura;
	}
	public function getFoto(){
		return $this->foto;
	}
	public function getPerfil(){
		return $this->perfil;
	}
	public function isActivo(){
		return $this->activo;
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