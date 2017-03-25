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
    
    $result_update = $update->upload("images/slider/", $_FILES['imagen'], $_REQUEST['nombre_imagen']);
    
    IF($result_update == 1){
        
    }
    
}
    $galeria = new Slider();


if(isset($_REQUEST['boton'])){
    
     $id = $_REQUEST['id'];
    
    //Subir una posicion la imagen
    if ($_REQUEST['boton'] == "subir"){
       
        $subir = $galeria->sliderUP($id);
    }
    //Bajar una posicion la imagen
    elseif ($_REQUEST['boton'] == "bajar") {
        $bajar = $galeria->sliderDown($id);
         
    }
    //Eliminar una imagen del slider
    elseif ($_REQUEST['boton'] == "eliminar"){
        $eliminar = $galeria->sliderDelete($id);
        
    }
    //Añadir una imagen del slider
    elseif ($_REQUEST['boton'] == "añadir"){
        $añadir = $galeria->sliderAñadir($id);
        
    }
    //Borrar una imagen de la galeria
    elseif ($_REQUEST['boton'] == "borrar"){
        $borrar = $galeria->sliderBorrar($id);
        
    }
}


// Muestra todas las fotos alojadas en la base de datos
$imagenes = $galeria->leerTodos();


// Muestra las imagenes actuales en el slider
$slider = $galeria->leerUsados();


// Asigna las variables smarty

$smarty->assign('slider', $slider);

$smarty->assign('imagenes', $imagenes);

$smarty->display('slider.tpl');

//Include del footer

require_once('footer.php');


?>
