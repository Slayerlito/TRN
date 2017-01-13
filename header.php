<?php

//Include de clases php
require_once('php/controladores/ControladorWEB.php');
require_once('php/controladores/ControladorSQL.php');

//Include de los parametros de smarty
require_once('setup.php'); 
session_start();
// ------- Declaracion de la funcion de smarty
$smarty = new Smarty_setup();

require_once('modules/login/login.php');
require_once('modules/registro/registro.php');

IF(isset($_SESSION['usuario'])){
$perfil = $_SESSION['usuario']->getPerfil();
$permiso = ControladorSQL::getControlador()->ejecutarSQL("SELECT BACKEND FROM TRN_LKP_ROLES_SEGURIDAD WHERE ID_PERFIL ='$perfil' ");
$permiso = $permiso->fetch_array(MYSQLI_ASSOC);


$smarty->assign("backend", $permiso['BACKEND']);
}
$smarty->display('header.tpl');
?>