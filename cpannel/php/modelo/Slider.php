<?php

require_once ("php/controladores/ControladorSQL.php");

/**
 * Description of Slider
 * Mostrar todas las imagenes disponibles para el Slider
 * Subir una imagen que cumpla los requisitos para ser usada en Slider
 * Modificar el orden del Slider
 * Eliminar imagenes para el Slider
 * Return 1 para exito
 * Return -1 para error
 * @author David
 */

class Slider {
    
    private $directorio;
    private $fichero;
    private $sql;
    private $row;
    private $slider;
            
    function leerTodos() {
        $this->sql = ControladorSQL::getControlador()->ejecutarSQL("SELECT * FROM trn_lkp_slider");
        $i = 0;
        $this->slider[] = array();
        while($this->row =  mysqli_fetch_array($this->sql)){
            $slider[$i] = $this->row;
            $i++;
        }
        return $slider;
    }
    
    function leerUsados() {
        
        $this->sql = ControladorSQL::getControlador()->ejecutarSQL("SELECT * FROM trn_lkp_slider WHERE ID_NUM_POS > 0 ORDER BY ID_NUM_POS");
        $i = 0;
        $this->slider[] = array();
        while($this->row=  mysqli_fetch_array($this->sql)){
            $slider[$i] = $this->row;
            $i++;
        }
        return $slider;
        
        /*
        $this->directorio = $carpeta;
        
        $imagenes = dir($this->directorio);
        
        $i = 0;
        $datos[] = array();
        
        while (($imagen = $imagenes->read()) !== false){
            
            if(strpos($imagen, ".png") || strpos($imagen, ".jpg")){
                $datos[$i] = $imagen;
                $i++;
            }
             
        }
        $imagenes->close();
        return $datos;
        */
    }
    
    function upload($carpeta, $fichero) {
        
        $this->directorio = $carpeta;
        $this->fichero =$fichero;
        
        $imagen = $this->directorio . basename( $fichero['name']);
        
        if(move_uploaded_file($fichero['tmp_name'], $imagen)){
            return 1;
        }  else {
            return -1;
        }
    }
    
    function sliderActual(){
        $consulta = ControladorSQL::getControlador()->ejecutarSQL("SELECT * FROM trn_lkp_slider WHERE ID_NUM_POS > 0 ORDER BY ID_NUM_POS");
        $i =0;
        $slider[] = array();
        while($row=  mysqli_fetch_array($consulta)){
            $slider[$i] = $row;
            $i++;
        }
        return $slider;
    }
}
