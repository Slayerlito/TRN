<?php
/**
 *  @brief
 *  @details
 *  @author
 *  @date 03/04/2017
 *  @version 1.0
 */
 
require_once('php/modelo/JerarquiaObjetos.php');
class JerarquiaAlimentos extends JerarquiaObjetos {
	private static $jerarquiaAlimentos;
	private $padre;
	private $nivel;
	private $desc;
	private $id;
	private $bool_abstracta;
	private $listaHijos;
	protected function __construct(){
		$this->desc="RAIZ";
		$this->id=0;
		$this->bool_abstracta=1;
	}
	public static function getInstancia(){
			JerarquiaAlimentos::$jerarquiaAlimentos = new JerarquiaAlimentos();
			return JerarquiaAlimentos::$jerarquiaAlimentos;
	}
	public function getDesc(){
		return $this->desc;
	}
	public function getPadre(){
		return $this->padre;
	}
	public function getPadreDe($desc){
		
	}
	/*public function setHijos($listaHijos);*/
	public function setHijo($id,$desc,$bool_abstracta,$padre){
		if($this->listaHijos==null){
			$this->listaHijos=array();
		}
		$nodo2=new JerarquiaAlimentos();
		$nodo2->id=$id;
		$nodo2->desc=$desc;
		$nodo2->bool_abstracta=$bool_abstracta;
		$nodo2->padre=$padre;
		array_push($this->listaHijos,$nodo2);
	}
	/*public function getHijosDe($desc);*/
	public function getHijos(){
		return $this->listaHijos;
	}
	public function getNodo($id){
		if($this->id==$id)return $this;
		if($this->listaHijos!=null){
			foreach ($this->listaHijos as $hijo){
				if($hijo->id==$id){
					return $hijo;
				}else{
					$aux = $hijo->getNodo($id);
					if($aux)return $aux;
				}
			}
		}
		return false;
		
	}
	/*
	public function insertNodo($desc,$padre);
	public function setPadre($padre);*/
	public function isAbstracta(){
		return $this->bool_abstracta;
	}
	public function setAbstracta(){
		$this->bool_abstracta=true;		
	}
	public function setNoAbstracta(){
		$this->bool_abstracta=false;
	}
	public function getID(){
		return $this->id;
	}
}
?>