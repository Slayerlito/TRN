<?php
/**
 * @author José Miguel Hernández Palazón. 
 * @brief Planes contratables.
 * @details Representa los objetos de Planes Contratables con todos los atributos disponibles en base de datos.
 * @date 01/10/2016
 * @version 1.0
 */
class Plan {
	private $id_plan;				/*!< ID Primary Key del Plan Contratable */
	private $nombre;				/*!< Nombre del Plan Contratable */
	private $seguimiento_sem;		/*!< Detailed description after the member */
	private $chat;					/*!< Detailed description after the member */
	private $entrenamiento;			/*!< Detailed description after the member */
	private $nutricion;				/*!< Detailed description after the member */
	private $precio;				/*!< Detailed description after the member */
	/**
	 *  Constructor privado de Planes Contratables al cual se le deben pasar todos los argumentos.
	 */
	private function __construct($id_plan,$nombre,$seguimiento_sem,$chat,$entrenamiento,$nutricion,$precio){
			$this->id_plan = $id_plan;
			$this->nombre = $nombre;
			$this->seguimiento_sem = $seguimiento_sem;
			$this->chat = $chat;
			$this->entrenamiento = $entrenamiento;
			$this->nutricion = $nutricion;
			$this->precio = $precio;
	}
	/**
	 *  
	 */
	public static function newPlanID($id_plan){
		$resultado = ControladorSQL::getControladorSQL().ejecutarSQL("SELECT ID_PLAN,NOMBRE,SEGUIMIENTO_SEM,CHAT,ENTRENAMIENTO,NUTRICION,PRECIO FROM TRN_LKP_PLANES_CONTRATABLES WHERE ID_PLAN='$id_plan'");
		$result = $resultado->fetch_array(MYSQLI_ASSOC);
		return new Plan($result['ID_PLAN'],$result['NOMBRE'],$result['SEGUIMIENTO_SEM'],$result['CHAT'],$result['ENTRENAMIENTO'],$result['NUTRICION'],$result['PRECIO']);
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