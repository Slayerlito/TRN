<?php
/**
 *  @brief
 *  @details
 *  @author
 *  @date 03/04/2017
 *  @version 1.0
 */
abstract class JerarquiaObjetos {
	abstract protected function __construct();
	abstract public function getDesc();
	abstract public function getPadre();
	abstract public function getPadreDe($desc);
	/*abstract public function setHijos($desc);*/
	abstract public function setHijo($id,$desc,$bool_abstracta,$padre);
	abstract public function getHijos();
	/*abstract public function getHijosDe($desc);*/
	abstract public function getNodo($desc);
	/*abstract public function insertNodo($desc,$padre);
	abstract public function setPadre($padre);*/
	abstract public function isAbstracta();
	abstract public function setAbstracta();
	abstract public function setNoAbstracta();
	abstract public function getID();
}
?>