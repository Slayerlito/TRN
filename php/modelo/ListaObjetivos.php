<?php
require_once('php/modelo/ListaObjetos.php');
require_once('php/modelo/Objetivo.php');

class ListaObjetivos extends ListaObjetos{
	private static $listaObjetivos;
	public static function getObjetivos($id_user){
		if(ListaObjetivos::$listaObjetivos == NULL){
			$arrayObjetivos = array();
			$resultado = ControladorSQL::getControlador()->ejecutarSQL("SELECT * FROM TRN_LKP_OBJETIVOS WHERE ID_USER='&id_user'");
			while ($fila = $resultado->fetch_array(MYSQLI_ASSOC)){
				array_push($arrayObjetivos,Plan::);
			}			
			ListaObjetivos::$listaObjetivos = parent::newLista($arrayObjetivos);
		}
		return ListaObjetivos::$listaObjetivos;
	}
}
?>