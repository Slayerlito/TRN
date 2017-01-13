<?php

require("php/galeria.php");


//Include de los parametros de smarty

require_once('setup.php'); 


//Declaracion de la funcion de smarty

$smarty = new Smarty_setup();


//Include del header

require_once('header.php');


//Indica en que opcion del slider nos encotramos

$slider=$_REQUEST['slider'];


// En caso de hacer un UPDATE de una imagen
// TODO Comprobar errores de subida de imagenes y crear su clase adecuadamente
if(isset($_REQUEST["uploadimg"])){
   
   $dir_subida = "C:\\xampp/htdocs/TRN/images/slider/";
   $fichero_subido = $dir_subida . basename($_FILES['imagen']['name']);
   
    if(move_uploaded_file($_FILES["imagen"]['tmp_name'], $fichero_subido)){
            echo "funciona";
        }  else {
            echo "error";
        }
    
    
     $imagen = "C:\\xampp/htdocs/TRN/images/slider/" . basename($_FILES['imgslider']['name']);
        echo $imagen;
        if(move_uploaded_file($_FILES["imgslider"]['tmp_name'], $imagen)){
            echo "funciona";
        }  else {
            echo "error";
        }
    
    
    
 //   $update = new Galeria();
 //   $result_update = $update->upload("../images/slider/", $archivo);
 //   var_dump($result_update);
}


// Muestra todas las fotos alojadas en la carpeta indicada

$galeria = new Galeria();

$imagenes = $galeria->leer("../images/slider/");


// Muestra las imagenes actuales en el slider
// 
//TODO Hacer la funcionalidad del mismo
//
// Asigna las variables smarty

$smarty->assign('imagenes', $imagenes);

$smarty->assign('slider' , $slider);

$smarty->display('slider.tpl');

//Include del footer

require_once('footer.php');


?>
