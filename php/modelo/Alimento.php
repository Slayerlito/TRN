<?php
/**
 * @author José Miguel Hernández Palazón. 
 * @brief Alimento
 * @details Representa los objetos de Alimentos con todos los atributos disponibles en base de datos.
 * @date 11/04/2016
 * @version 1.0
 */
class Alimento {
	private $idAlimento;			/*!< ID Primary Key del Plan Contratable */
	private $nombre;				/*!< Nombre del Plan Contratable */
	private $idEstado;				/*!< Detailed description after the member */
	private $estado;				/*!< Detailed description after the member */
	private $idJerarquia;			/*!< Detailed description after the member */
	private $jerarquia;				/*!< Detailed description after the member */
	private $kcal;					/*!< Detailed description after the member */
	private $proteinas;				/*!< Detailed description after the member */
	private $grasas;				/*!< Detailed description after the member */
	private $hidratosCarbono;		/*!< Detailed description after the member */
	private $h2o;					/*!< Detailed description after the member */
	private $ne;					/*!< Detailed description after the member */
	private $vA;					/*!< Detailed description after the member */
	private $vB1;					/*!< Detailed description after the member */
	private $vB2;					/*!< Detailed description after the member */
	private $vC;					/*!< Detailed description after the member */
	private $vNiac;					/*!< Detailed description after the member */
	private $minNa;					/*!< Detailed description after the member */
	private $minK;					/*!< Detailed description after the member */
	private $minCa;					/*!< Detailed description after the member */
	private $minMg;					/*!< Detailed description after the member */
	private $minFe;					/*!< Detailed description after the member */
	private $minCu;					/*!< Detailed description after the member */
	private $minP;					/*!< Detailed description after the member */
	private $minS;					/*!< Detailed description after the member */
	private $minCl;					/*!< Detailed description after the member */
	private $aminFen;				/*!< Detailed description after the member */
	private $aminIleu;				/*!< Detailed description after the member */
	private $aminLeu;				/*!< Detailed description after the member */
	private $aminLis;				/*!< Detailed description after the member */
	private $aminMet;				/*!< Detailed description after the member */
	private $aminTre;				/*!< Detailed description after the member */
	private $aminTri;				/*!< Detailed description after the member */
	private $aminVal;				/*!< Detailed description after the member */
	private $acid;					/*!< Detailed description after the member */
	private $alcal;					/*!< Detailed description after the member */
	/**
	 *  Constructor privado de Alimentos al cual se le deben pasar todos los argumentos.
	 */
	private function __construct($idAlimento,$nombre,$idEstado,$estado,$idJerarquia,$jerarquia,$kcal,$proteinas,$grasas,$hidratosCarbono,$h2o,$ne,$vA,$vB1,$vB2,$vC,$vNiac,$minNa,$minK,$minCa,$minMg,$minFe,$minCu,$minP,$minS,$minCl,$aminFen,$aminIleu,$aminLeu,$aminLis,$aminMet,$aminTre,$aminTri,$aminVal,$acid,$alcal){
		$this->idAlimento=$idAlimento;		
		$this->nombre=$nombre;			
		$this->idEstado=$idEstado;			
		$this->estado=$estado;			
		$this->idJerarquia=$idJerarquia;		
		$this->jerarquia=$jerarquia;			
		$this->kcal=$kcal;				
		$this->proteinas=$proteinas;			
		$this->grasas=$grasas;			
		$this->hidratosCarbono=$hidratosCarbono;	
		$this->h2o=$h2o;				
		$this->ne=$ne;				
		$this->vA=$vA;				
		$this->vB1=$vB1;				
		$this->vB2=$vB2;				
		$this->vC=$vC;				
		$this->vNiac=$vNiac;				
		$this->minNa=$minNa;				
		$this->minK=$minK;				
		$this->minCa=$minCa;				
		$this->minMg=$minMg;				
		$this->minFe=$minFe;				
		$this->minCu=$minCu;				
		$this->minP=$minP;				
		$this->minS=$minS;				
		$this->minCl=$minCl;				
		$this->aminFen=$aminFen;			
		$this->aminIleu=$aminIleu;			
		$this->aminLeu=$aminLeu;			
		$this->aminLis=$aminLis;			
		$this->aminMet=$aminMet;			
		$this->aminTre=$aminTre;			
		$this->aminTri=$aminTri;			
		$this->aminVal=$aminVal;			
		$this->acid=$acid;				
		$this->alcal=$alcal;						
	}
}
?>




































