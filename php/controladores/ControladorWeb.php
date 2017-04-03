<?php
require_once('php/modelo/Usuario.php');
require_once('php/controladores/ControladorSQL.php');
require_once('php/modelo/ListaPlanes.php');
require_once('php/modelo/ListaObjetivos.php');
require_once('php/modelo/JerarquiaAlimentos.php');

/**
 *  
 */
class ControladorWeb{
	private static $jerarquiaAlimentos = null;
	
	/**********************************************************************************************
	 *  																						  *
	 *  										USUARIOS										  *
	 *  																						  *
	 **********************************************************************************************/
	
	
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
	
	/**********************************************************************************************
	 *  																						  *
	 *  										PORTADA 										  *
	 *  																						  *
	 **********************************************************************************************/
	 
	/**
	 *  
	 */
	public static function getPlanesFilaCompleta(){
		$listaPlanes = ListaPlanes::getPlanes();
		$listaRet = array();
		for($x=1 ; $x<=floor($listaPlanes->getNum()/3);$x++){
			$fila = array();
			for($y=$x*3 ;$y<= ($x*3)+2;$y++){
				array_push($fila,$listaPlanes->getPos($y-3));
			}
			array_push($listaRet,ListaObjetos::newLista($fila));
		}
		return $listaRet;
	}
	/**
	 *  
	 */
	public static function getPlanesUltimaFila(){
		$listaPlanes = ListaPlanes::getPlanes();
		$listaRet = array();
		for($x=(floor($listaPlanes->getNum()/3)*3) ; $x<$listaPlanes->getNum();$x++){
			array_push($listaRet,$listaPlanes->getPos($x));
		}
		return $listaRet;
	}
	
	/**********************************************************************************************
	 *  																						  *
	 *  										MY TRN  										  *
	 *  																						  *
	 **********************************************************************************************/	
	
	/**
	 *  
	 */
	public static function getListaObjetivos($idUsuario,$coach){
		return ListaObjetivos::getObjetivos($idUsuario,$coach);
	}
	/**
	 *  
	 */
	public static function registrarAcceso(){
		
	}
	/**********************************************************************************************
	 * 																							  * 
	 *  								JERARQUIA ALIMENTOS										  *
	 *  																						  *
	 **********************************************************************************************/
	/**
	 *  
	 */
	public static function getJerarquiaAlimentos(){
		if (ControladorWeb::$jerarquiaAlimentos == null){
			$jerarquiaAlimentos=JerarquiaAlimentos::getInstancia();
			$query=ControladorSQL::getControlador()->ejecutarSQL("SELECT * FROM TRN_LKP_TIPO_ALIMENTOS");
			$row_cnt = $query->num_rows;
				
			while($resultado = $query->fetch_array(MYSQLI_ASSOC)){
				$nodo=$jerarquiaAlimentos->getNodo($resultado['ID_PADRE']);
				//if($nodo=-1) El nodo padre no existe
				if($jerarquiaAlimentos->getNodo($resultado['ID_TIPO_ALIMENTO'])){
					$nodo->setHijo($resultado['ID_TIPO_ALIMENTO'],$resultado['DESC_TIPO_ALIMENTO'],$resultado['BOL_ABSTRACTA']); 
				}
			}
		}
		return $jerarquiaAlimentos;
	}
	public static function actualizarPadre($nodo,$padre){
		
	}
	
}

?>