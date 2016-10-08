<?php
require_once('php/modelo/ListaObjetos.php');
require_once('php/modelo/Objetivo.php');
require_once('php/modelo/ListaSeguimientos.php');

class ListaObjetivos extends ListaObjetos{
	private static $listaObjetivos;
	public static function getObjetivos($idUsuario,$coach){
		if(ListaObjetivos::$listaObjetivos == NULL){
			$arrayObjetivos = array();
			if($coach=='0'){
				$resultado = ControladorSQL::getControlador()->ejecutarSQL("SELECT * FROM TRN_LKP_OBJETIVOS WHERE ID_USUARIO='$idUsuario'");
			}else{
				$resultado = ControladorSQL::getControlador()->ejecutarSQL("SELECT * FROM TRN_LKP_OBJETIVOS WHERE ID_COACH='$idUsuario'");
			}
			while ($fila = $resultado->fetch_array(MYSQLI_ASSOC)){
				array_push($arrayObjetivos,new Objetivo($fila['ID_OBJETIVO'],$fila['ID_USUARIO'],$fila['FECHA_INICIO'],$fila['PROGRESO'],$fila['PESO_OBJETIVO'],$fila['PESO_INICIO'],$fila['PESO_ACTUAL'],$fila['DIAS_ENTRENO'],$fila['PATOLOGIAS'],$fila['ALIMENTOS_ND'],$fila['ID_COACH'],$fila['OBJETIVO']));
				
			}	
			ListaObjetivos::$listaObjetivos = parent::newLista($arrayObjetivos);
		}
		return ListaObjetivos::$listaObjetivos->getLista();
	}
}
?>