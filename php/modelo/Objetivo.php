<?php
/**
 * @author José Miguel Hernández Palazón. 
 * @brief Objetivo de usuario.
 * @details Representa los Objetivos de un Usuario.
 * @date 02/10/2016
 * @version 1.0
 */
class Plan {
	private $id_objetivo;				/*!< ID Primary Key del Plan Contratable */
	private $id_usuario;				/*!< Nombre del Plan Contratable */
	private $fecha_inicio;				/*!< Detailed description after the member */
	private $progreso;					/*!< Detailed description after the member */
	private $pesoObjetivo;			    /*!< Detailed description after the member */
	private $pesoInicio;				/*!< Detailed description after the member */
	private $pesoActual;				/*!< Detailed description after the member */
	private $diasEntreno;				/*!< Detailed description after the member */
	private $patologias;				/*!< Detailed description after the member */
	private $alimentosND;				/*!< Detailed description after the member */
	private $objetivo;					/*!< Detailed description after the member */
	/**
	 *  Constructor privado de Planes Contratables al cual se le deben pasar todos los argumentos.
	 */
	private function __construct($id_objetivo,$id_usuario,$fecha_inicio,$progreso,$pesoObjetivo,$pesoInicio,$pesoActual,$diasEntreno,$patologias,$alimentosND,$objetivo){
			$this->id_objetivo = $id_objetivo;	
			$this->id_usuario = $id_usuario;	
			$this->fecha_inicio = $fecha_inicio;
			$this->progreso = $progreso;	
			$this->pesoObjetivo = $pesoObjetivo;
			$this->pesoInicio = $pesoInicio;	
			$this->pesoActual = $pesoActual;	
			$this->diasEntreno = $diasEntreno;	
	        $this->patologias = $patologias;	
	        $this->alimentosND = $alimentosND;	
	        $this->objetivo = $objetivo;	
	}       
	/**
	 *  
	 */
	public static function newObjetivoID($id_objetivo){
		$resultado = ControladorSQL::getControladorSQL().ejecutarSQL("SELECT * FROM TRN_LKP_OBJETIVOS WHERE ID_OBJETIVO='$id_objetivo'");
		$result = $resultado->fetch_array(MYSQLI_ASSOC);
		return new Objetivo($result[''],$result[''],$result[''],$result[''],$result[''],$result[''],$result['']);
	}
	/**
	 *  
	 */
	public static function newPlanDatos($id_plan,$nombre,$seguimiento_sem,$chat,$entrenamiento,$nutricion,$precio){
		return new Plan($id_plan,$nombre,$seguimiento_sem,$chat,$entrenamiento,$nutricion,$precio);		
	}
	/**
	 *  
	 */
	public function getId(){
		return $this->id_plan;
	}
	/**
	 *  
	 */
	public function getNombre(){
		return $this->nombre;
	}
	/**
	 *  
	 */
	public function getSeguimiento(){
		return $this->seguimiento_sem;
	}
	/**
	 *  
	 */
	public function getChat(){
		return $this->chat;
	}
	/**
	 *  
	 */
	public function getEntrenamiento(){
		return $this->entrenamiento;
	}
	/**
	 *  
	 */
	public function getNutricion(){
		return $this->nutricion;
	}
	/**
	 *  
	 */
	public function getPrecio(){
		return $this->precio;
	}	
}
?>