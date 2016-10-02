<?php
/**
 *  @brief
 *  @details
 *  @author
 *  @date
 *  @version 1.0
 */
abstract class ListaObejtos {
	private listaObjetos;
	private function __construct($listaObjetos){
		$this->listaObjetos = lista_objetos;
	}
	public function getLista(){
		return $this->listaObjetos;
	}
	public function getNum(){
		return count(listaObjetos);
	}
	public function getPos($numero){
		return $this->listaObjetos[$numero];
	}
	private function setListaObjetos($listaObjetos){
		$this->listaObjetos = listaObjetos;
	}
}
>