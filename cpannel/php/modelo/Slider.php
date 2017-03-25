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
    private $nombre;
            
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
    
    function upload($carpeta, $fichero, $nombre) {
        
        $this->nombre = $nombre;
        $this->directorio = $carpeta;
        $this->fichero =$fichero;
        
        $imagen = "../".$this->directorio . basename( $fichero['name']);
        $url = $this->directorio . basename( $fichero['name']);
        
        
        if(move_uploaded_file($fichero['tmp_name'], $imagen)){
            ControladorSQL::getControlador()->ejecutarSQL("INSERT INTO trn_lkp_slider (ID_NAME_SLIDE,ID_NUM_POS,DIRECCION)VALUES('$this->nombre',0,'$url');");
            return 1;
        }  else {
            return -1;
        }
    }
    
    function sliderUP($id){
        $consulta = ControladorSQL::getControlador()->ejecutarSQL("SELECT * FROM trn_lkp_slider WHERE ID_SLIDE = '$id'");
        $result = mysqli_fetch_assoc($consulta);
        $down = $result['ID_NUM_POS'];
        $up = $result['ID_NUM_POS']-1;
        
        //Ahora buscamos el que se encuentra en la posicion superior para reducir su posicion y subir el que queremos.
        $consulta2 = ControladorSQL::getControlador()->ejecutarSQL("SELECT * FROM trn_lkp_slider WHERE ID_NUM_POS = '$up'");
        $result2 = mysqli_fetch_assoc($consulta2);
        $id2 = $result2['ID_SLIDE'];
        
        ControladorSQL::getControlador()->ejecutarSQL("UPDATE trn_lkp_slider SET ID_NUM_POS=$down WHERE ID_SLIDE = $id2");
        
        ControladorSQL::getControlador()->ejecutarSQL("UPDATE trn_lkp_slider SET ID_NUM_POS=$up WHERE ID_SLIDE = $id");
        
        
    }
    
    function sliderDown($id){
        $consulta = ControladorSQL::getControlador()->ejecutarSQL("SELECT * FROM trn_lkp_slider WHERE ID_SLIDE = '$id'");
        $result = mysqli_fetch_assoc($consulta);
        $down = $result['ID_NUM_POS'];
        $up = $result['ID_NUM_POS']+1;
        
        //Ahora buscamos el que se encuentra en la posicion superior para reducir su posicion y subir el que queremos.
        $consulta2 = ControladorSQL::getControlador()->ejecutarSQL("SELECT * FROM trn_lkp_slider WHERE ID_NUM_POS = '$up'");
        $result2 = mysqli_fetch_assoc($consulta2);
        $id2 = $result2['ID_SLIDE'];
        
        ControladorSQL::getControlador()->ejecutarSQL("UPDATE trn_lkp_slider SET ID_NUM_POS=$down WHERE ID_SLIDE = $id2");
        
        ControladorSQL::getControlador()->ejecutarSQL("UPDATE trn_lkp_slider SET ID_NUM_POS=$up WHERE ID_SLIDE = $id");
        
    }
    
    function  sliderDelete($id){
        $consulta = ControladorSQL::getControlador()->ejecutarSQL("SELECT * FROM trn_lkp_slider WHERE ID_SLIDE = '$id'");
        $result = mysqli_fetch_assoc($consulta);
        $posicion = $result['ID_NUM_POS'];
        
        $consulta2 = ControladorSQL::getControlador()->ejecutarSQL("SELECT * FROM trn_lkp_slider WHERE ID_NUM_POS > $posicion");
        while ($row = mysqli_fetch_array($consulta2)) {
            $id2 = $row['ID_SLIDE'];
            $pos = $row['ID_NUM_POS']-1;
            ControladorSQL::getControlador()->ejecutarSQL("UPDATE trn_lkp_slider SET ID_NUM_POS= $pos WHERE ID_SLIDE = $id2");
        }
        
        ControladorSQL::getControlador()->ejecutarSQL("UPDATE trn_lkp_slider SET ID_NUM_POS= 0 WHERE ID_SLIDE = $id");
    }
      
    function sliderAñadir($id){
        $posicion_maxima = ControladorSQL::getControlador()->ejecutarSQL("SELECT MAX(ID_NUM_POS) FROM trn_lkp_slider");
        $result = mysqli_fetch_array($posicion_maxima);
        $posicion = $result['MAX(ID_NUM_POS)']+1;
        ControladorSQL::getControlador()->ejecutarSQL("UPDATE trn_lkp_slider SET ID_NUM_POS = $posicion WHERE ID_SLIDE = $id");
    } 
    
    function sliderBorrar($id){
        ControladorSQL::getControlador()->ejecutarSQL("DELETE FROM trn_lkp_slider WHERE ID_SLIDE = $id");
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
