<?php

//Include de clases php
require_once('php/controladores/ControladorWEB.php');

require_once('php/controladores/ControladorSQL.php');

//Include de los parametros de smarty
require_once('setup.php'); 
session_start();
// ------- Declaracion de la funcion de smarty
$smarty = new Smarty_setup();

	/*======================Comprobacion de usuario registrado()======================================
     Comprueba que el usuario que accede este logueado y que tenga permisos para acceder al panel
	****************************************************************************************** */
	
if(isset($_SESSION['usuario'])){
	$perfil = $_SESSION['usuario']->getPerfil();
        $permiso = ControladorSQL::getControlador()->ejecutarSQL("SELECT BACKEND FROM TRN_LKP_ROLES_SEGURIDAD WHERE ID_PERFIL ='$perfil' ");
        $permiso = $permiso->fetch_array(MYSQLI_ASSOC);
        
        if($permiso['BACKEND'] == 1){
            $smarty->assign('user', $_SESSION['usuario']->getNombre());
            $smarty->assign('login' , 'true');
            $smarty->assign('usuario' , 'true');
        }else{
            header("Location: ../index.php");
        }
        
}else{
	session_destroy();
        header("Location: ../index.php");
}


$smarty->display('header.tpl');
?>