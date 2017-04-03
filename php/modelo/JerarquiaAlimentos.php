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
		$this->desc="0";
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
	public function setHijo($id,$desc,$bool_abstracta){
		if($this->listaHijos==null){
			$this->listaHijos=array();
		}
		$nodo=new JerarquiaAlimentos();
		$nodo->id=$id;
		$nodo->desc=$desc;
		$nodo->bool_abstracta=$bool_abstracta;
		$nodo->padre=$this->id;
		array_push($this->listaHijos,$nodo);
	}
	/*public function getHijosDe($desc);
	public function getHijos();*/
	public function getNodo($id){
		if($id==null)return $this;
		if($this->id=$id)
			return $this;
		foreach ($hijo as $this->listaHijos){
			if($hijo->id=$id){
				return $hijo;
			}else{
				return $hijo->getNodo($id);
			}
		}
		
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
}
?>