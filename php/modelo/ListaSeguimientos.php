<?php
require_once('php/modelo/ListaObjetos.php');
require_once('php/modelo/Seguimiento.php');

class ListaSeguimientos extends ListaObjetos{
	private function __construct($idObjetivo){
		
	}
	public static function newListaSeguimientos($idObjetivo){
			$arraySeguimientos = array();
			$resultado = ControladorSQL::getControlador()->ejecutarSQL("SELECT * FROM TRN_B_SEGUIMIENTOS WHERE ID_OBJETIVO='$idObjetivo'");
			while ($fila = $resultado->fetch_array(MYSQLI_ASSOC)){
				array_push($arraySeguimientos,new Seguimiento($fila['ID_SEGUIMIENTO'],$fila['ID_OBJETIVO'],$fila['PESO'],$fila['FOTO_FRONTAL'],$fila['FOTO_ESPALDA'],$fila['FOTO_PERFIL'],$fila['COMENTARIOS_USUARIO'],$fila['COMENTARIOS_COACH'],$fila['PROGRESO'],$fila['FECHA_SEGUIMIENTO']));
				
			}			
			return parent::newLista($arraySeguimientos);
				
	}
}
?>