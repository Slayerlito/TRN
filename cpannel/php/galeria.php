<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of galeria
 * Lee todos los archivos de una carpeta y los devuelve si son .PNG o .JPG
 * Return 1 para exito
 * Return -1 para error
 * @author David
 */
class Galeria {
    
    var $directorio;
    var $fichero;
            
    function leer($carpeta) {
        
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
        
    }
    
    function upload($carpeta, $fichero) {
        
        $this->directorio = $carpeta;
        $this->fichero =$fichero;
        
        $imagen = $this->directorio . basename( $_FILES["img_slider"]['name']);
        echo $imagen;
        if(move_uploaded_file($_FILES[$this->fichero]['tmp_name'], $imagen)){
            return 1;
        }  else {
            return -1;
        }
    }
    
    
}
