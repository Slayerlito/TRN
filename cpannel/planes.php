<?php
require_once 'php/modelo/ListaPLanes.php';

//Include de los parametros de smarty
require_once('setup.php'); 

//Declaracion de la funcion de smarty
$smarty = new Smarty_setup();

//Include del header
require_once('header.php');

//Al modificar un plan
if(isset($_REQUEST['modificar'])){
    $id             = $_REQUEST['id'];
    $nombre         = $_REQUEST['plan'];
    $seguimiento    = $_REQUEST['seguimientos'];
    $chat           = $_REQUEST['chat'];
    $entrenamiento  = $_REQUEST['entrenamiento'];
    $nutricion      = $_REQUEST['nutricion'];
    $precio         = $_REQUEST['precio'];
    $visible        = $_REQUEST['visible'];
    $consulta = ControladorSQL::getControlador()->ejecutarSQL("UPDATE TRN_LKP_PLANES_CONTRATABLES SET NOMBRE='$nombre', SEGUIMIENTO_SEM='$seguimiento', CHAT='$chat', ENTRENAMIENTO='$entrenamiento', NUTRICION='$nutricion', PRECIO='$precio', VISIBLE='$visible' WHERE ID_PLAN='$id'");

    if($consulta == 1){
        $result = true;
    }else{
        $result = false;
    }
    $smarty->assign("plan", $nombre);
    $smarty->assign("exito", $result);
    
}

// Al añadir un plan nuevo
if(isset($_REQUEST['crear'])){
    $nombre         = $_REQUEST['plan'];
    $seguimiento    = $_REQUEST['seguimientos'];
    $chat           = $_REQUEST['chat'];
    $entrenamiento  = $_REQUEST['entrenamiento'];
    $nutricion      = $_REQUEST['nutricion'];
    $precio         = $_REQUEST['precio'];
    $visible        = $_REQUEST['visible'];
    $consulta = ControladorSQL::getControlador()->ejecutarSQL("INSERT INTO TRN_LKP_PLANES_CONTRATABLES (NOMBRE,SEGUIMIENTO_SEM,CHAT,ENTRENAMIENTO,NUTRICION,PRECIO,VISIBLE) VALUES('$nombre',$seguimiento,$chat,$entrenamiento,$nutricion,$precio,$visible)");
    
}

// Recogemos la accion a desempeñar
if(isset($_REQUEST['opcion']) && $_REQUEST['opcion'] != ""){
    
    $opcion = $_REQUEST['opcion'];

// Mostramos todos los planes    
    if($opcion == "all"){
        // Obtenemos todos los campos de la tabla de planes contratables
        $consulta = ControladorSQL::getControlador()->ejecutarSQL("SELECT * FROM trn_lkp_planes_contratables");

        // Asignamos el contenido a las variables del template
        $smarty->assign("opcion", $opcion);
        $smarty->assign("planes", $consulta);
    }
    
// Para mostrar el formulario del plan a modificar
    if($opcion == "modificar"){
        $id = $_REQUEST['id'];
        // Obtenemos todos los campos del id indicado
        $consulta = ControladorSQL::getControlador()->ejecutarSQL("SELECT * FROM trn_lkp_planes_contratables WHERE ID_PLAN = '$id'");
        
        $plan = $consulta->fetch_array(MYSQLI_ASSOC);
        
        $smarty->assign("opcion", "modificar");
        $smarty->assign("planes", $plan);
    }
    
// Al eliminar un plan
    if($opcion == "eliminar"){
        $id = $_REQUEST['id'];
        $consulta = ControladorSQL::getControlador()->ejecutarSQL("DELETE FROM trn_lkp_planes_contratables WHERE ID_PLAN = '$id'");
        header('Location: planes.php?opcion=all');
      
    }

    // Asignamos el contenido a las variables del template
    $smarty->assign("opcion", $opcion);
}
else{
    // Asignamos el contenido a las variables del template
    $smarty->assign("opcion", "");
    $smarty->assign("planes", "");
}



$smarty->display('planes.tpl');

//Include del footer
require_once('footer.php');
?>