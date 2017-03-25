
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

if(!isset($_REQUEST['buscar']) || $_REQUEST['value'] == 0){
    $nombre = $_REQUEST['nombre'];
    $result=  ControladorSQL::getControlador()->ejecutarSQL("SELECT * FROM trn_lkp_usuarios WHERE nombre LIKE '%$nombre%'");
}else{
    $perfil = $_REQUEST['value'];
    $nombre = $_REQUEST['nombre'];
    $result=  ControladorSQL::getControlador()->ejecutarSQL("SELECT * FROM trn_lkp_usuarios WHERE perfil = $perfil AND nombre LIKE '%$nombre%'");
}

$smarty->assign("usuarios", $result);
$smarty->display('usuarios.tpl');

//Include del footer

require_once('footer.php');


?>

