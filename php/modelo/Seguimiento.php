<?php
/**
 * @author José Miguel Hernández Palazón. 
 * @brief Seguimientos de un Objetivo.
 * @details Representa los Seguimientos de un Objetivo vinculado a un Usuario.
 * @date 08/10/2016
 * @version 1.0
 */
class Seguimiento {
	private $idSeguimiento;				/*!< ID Primary Key del Plan Contratable */
	private $idObjetivo;				/*!< Nombre del Plan Contratable */
	private $peso;						/*!< Detailed description after the member */
	private $fotoFrontal;				/*!< Detailed description after the member */
	private $fotoEspalda;			    /*!< Detailed description after the member */
	private $fotoPerfil;				/*!< Detailed description after the member */
	private $comentariosUsu;			/*!< Detailed description after the member */
	private $comentariosCoach;			/*!< Detailed description after the member */
	private $progreso;					/*!< Detailed description after the member */
	private $fechaSeguimiento;			/*!< Detailed description after the member */
	/**
	 *  Constructor privado de Seguimientos de Objetivos, son necesarios todos los parámetros..
	 */
	public function __construct($idSeguimiento,$idObjetivo,$peso,$fotoFrontal,$fotoEspalda,$fotoPerfil,$comentariosUsu,$comentariosCoach,$progreso,$fechaSeguimiento){
			$this->idSeguimiento = $idSeguimietno;	
			$this->idObjetivo = $idObjetivo;	
			$this->peso = $peso;
			$this->fotoFrontal = $fotoFrontal;	
			$this->fotoEspalda = $fotoPerfil;
			$this->comentariosUsu = $comentariosUsu;	
			$this->comentariosCoach = $comentariosCoach;	
			$this->progreso = $progreso;	
	        $this->fechaSeguimiento = $fechaSeguimiento;
	}       
	/**
	 *  
	 */
}
?>