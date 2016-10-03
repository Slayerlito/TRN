<?php
/**
 *  @brief
 *  @details
 *  @author
 *  @date 01/10/2016
 *  @version 1.0
 */
class ListaObjetos {
	private $listaObjetos;
	private function __construct($listaObjetos){
		$this->listaObjetos = $listaObjetos;
	}
	public static function newLista($listaObjetos){
		return new ListaObjetos($listaObjetos);
	}
	public function getLista(){
		return $this->listaObjetos;
	}
	public function getNum(){
		return count($this->listaObjetos);
	}
	public function getPos($numero){
		return $this->listaObjetos[$numero];
	}
	private function setListaObjetos($listaObjetos){
		$this->listaObjetos = listaObjetos;
	}
}
?>