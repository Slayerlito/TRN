<?php
require_once('php/modelo/Usuario.php');
require_once('php/controladores/ControladorSQL.php');
require_once('php/modelo/ListaPlanes.php');

class ControladorWeb{
	public static function getListaPlanes(){
		return ListaPlanes::getPlanes()->getLista();
	}

	
}

?>