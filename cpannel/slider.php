<?php

require_once('php/controladores/ControladorWEB.php');
require_once('php/controladores/ControladorSQL.php');
require_once("php/modelo/Slider.php");

//Include de los parametros de smarty

require_once('setup.php'); 


//Declaracion de la funcion de smarty

$smarty = new Smarty_setup();


//Include del header

require_once('header.php');


// En caso de hacer un UPDATE de una imagen
// TODO Comprobar errores de subida de imagenes y crear su clase adecuadamente
if(isset($_REQUEST["uploadimg"])){

    $update = new Slider();
    
    $result_update = $update->upload("../images/slider/", $_FILES['imagen']);
    
    IF($result_update == 1){
        
    }
    
}


// Muestra todas las fotos alojadas en la base de datos

$galeria = new Slider();

$imagenes = $galeria->leerTodos();


// Muestra las imagenes actuales en el slider
 
$carrusel = new Slider();

$slider = $carrusel->leerUsados();


//
// Asigna las variables smarty

$smarty->assign('slider', $slider);

$smarty->assign('imagenes', $imagenes);

$smarty->display('slider.tpl');

//Include del footer

require_once('footer.php');


?>
