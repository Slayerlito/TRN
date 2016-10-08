<?php
/**
 * @author José Miguel Hernández Palazón. 
 * @brief Objetivo de usuario.
 * @details Representa los Objetivos de un Usuario.
 * @date 02/10/2016
 * @version 1.0
 */
class Objetivo {
	private $idObjetivo;				/*!< ID Primary Key del Plan Contratable */
	private $idUsuario;					/*!< Nombre del Plan Contratable */
	private $fechaInicio;				/*!< Detailed description after the member */
	private $progreso;					/*!< Detailed description after the member */
	private $pesoObjetivo;			    /*!< Detailed description after the member */
	private $pesoInicio;				/*!< Detailed description after the member */
	private $pesoActual;				/*!< Detailed description after the member */
	private $diasEntreno;				/*!< Detailed description after the member */
	private $patologias;				/*!< Detailed description after the member */
	private $alimentosND;				/*!< Detailed description after the member */
	private $idCoach;					/*!< Detailed description after the member */
	private $objetivo;					/*!< Detailed description after the member */
	private $listaSeguimientos;			/*!< Detailed description after the member */
	/**
	 *  Constructor privado de Planes Contratables al cual se le deben pasar todos los argumentos.
	 */
	public function __construct($idObjetivo,$idUsuario,$fechaInicio,$progreso,$pesoObjetivo,$pesoInicio,$pesoActual,$diasEntreno,$patologias,$alimentosND,$idCoach,$objetivo){
			$this->idObjetivo = $idObjetivo;	
			$this->idUsuario = $idUsuario;	
			$this->fechaInicio = $fechaInicio;
			$this->progreso = $progreso;	
			$this->pesoObjetivo = $pesoObjetivo;
			$this->pesoInicio = $pesoInicio;	
			$this->pesoActual = $pesoActual;	
			$this->diasEntreno = $diasEntreno;	
	        $this->patologias = $patologias;	
	        $this->alimentosND = $alimentosND;	
			$this->idCoach = $idCoach;
	        $this->objetivo = $objetivo;
			//$this->listaSeguimientos = ListaSeguimientos::newListaSeguimientos($this->id_objetivo);
	}   
	/**
	 *  
	 */
	public function getId(){
		return $this->idObjetivo;
	}
	/**
	 *  
	 */
	public function getIdUsuario(){
		return $this->idUsuario;
	}
	/**
	 *  
	 */
	public function getFechaInicio(){
		return $this->fechaInicio;
	}
	/**
	 *  
	 */
	public function getProgreso(){
		return $this->progreso;
	}
	/**
	 *  
	 */
	public function getPesoObjetivo(){
		return $this->pesoObjetivo;
	}
	/**
	 *  
	 */
	public function getPesoInicio(){
		return $this->pesoInicio;
	}
	/**
	 * 
	 */
	public function getPesoActual(){
		return $this->pesoActual;
	}
	/**
	 *  
	 */
	public function getDiasEntreno(){
		return $this->diasEntreno();
	}
	/**
	 *  
	 */
	public function getPatologias(){
		return $this->patologias;
	}
	/**
	 *  
	 */
	public function getAlimentosND(){
		return $this->alimentosND;
	}
	/**
	 *  
	 */
	public function getIdCoach(){
		return $this->idCoach;
	}
	/**
	 *  
	 */
	public function getObjetivo(){
		return $this->objetivo;
	}
	/**
	 *  
	 */
	public function getListaSeguimientos(){
		return $this->listaSeguimientos;
	}
}
?>