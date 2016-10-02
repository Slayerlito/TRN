<?php
require_once('php/modelo/ListaObjetos.php');
require_once('php/modelo/Plan.php');

class ListaPlanes extends ListaObjetos{
	private static $listaPlanes;
	public static function getPlanes(){
		if(ListaPlanes::$listaPlanes == NULL){
			$arrayPlanes = array();
			$resultado = ControladorSQL::getControlador()->ejecutarSQL("SELECT * FROM TRN_LKP_PLANES_CONTRATABLES");
			while ($fila = $resultado->fetch_array(MYSQLI_ASSOC)){
				array_push($arrayPlanes,Plan::newPlanDatos($fila['ID_PLAN'],$fila['NOMBRE'],$fila['SEGUIMIENTO_SEM'],$fila['CHAT'],$fila['ENTRENAMIENTO'],$fila['NUTRICION'],$fila['PRECIO']));				
			}			
			ListaPlanes::$listaPlanes = parent::newLista($arrayPlanes);
		}
		return ListaPlanes::$listaPlanes;
	}
}
?>