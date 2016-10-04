<?php
require_once('php/modelo/Usuario.php');
require_once('php/controladores/ControladorSQL.php');
require_once('php/modelo/ListaPlanes.php');

/**
 *  
 */
abstract class ControladorWeb{
	/**
	 *  Función responsable de loguear a un Usuario en el sistema a partir del email y la password.
	 *  @param $email Email del usuario.
	 *  @param $password Contraseña del usuario.
	 *  @return Devuelve:
	 *  			· -1 -> Contraseña Errónea.
	 *  			· -2 -> Email erróneo.
	 *  			· -3 -> Usuario inactivo.	
	 *  			· Usuario -> Contraseña correcta	 
	 */
	public static function loginUsuario($email,$password){
		$ret = ControladorSQL::getControlador()->loginUsuario($email,$password);
		$row_cnt = $ret->num_rows;
		//Email erróneo
		
		if( $row_cnt == 0) return -2;
		$resultado = $ret->fetch_array(MYSQLI_ASSOC);
		if($resultado['ACCESO'] == 0){
			//Contraseña errónea
			return -1;
		}else{
			$usuario = new Usuario($email);
		}
		//usuario inactivo.
		if($usuario->isActivo()==0) return -3;
		//usuario correcto, creado y logeado.
		return $usuario;
		
	}	
	/**
	 *  
	 */
	public static function getListaPlanes(){
		return ListaPlanes::getPlanes();
	}
	/**
	 *  
	 */
	public static function getPlanesFilaCompleta(){
		$listaPlanes = ListaPlanes::getPlanes()->getLista();
	}
	/**
	 *  
	 */
	public static function getPlanesUltimaFila(){
		$listaPlanes = ListaPlanes::getPlanes()->getLista();
	}
	/**
	 *  
	 */
	public static function getListaObjetivos($idUsuario){
		
	}
	/**
	 *  
	 */
	public static function registrarAcceso(){
		
	}

	
}

?>