<?php

//Include de clases php
require_once('php/controladores/ControladorWEB.php');

//Include de los parametros de smarty
require_once('setup.php'); 
session_start();
// ------- Declaracion de la funcion de smarty
$smarty = new Smarty_setup();

require_once('modules/header/login/login.php');
require_once('modules/header/registro/registro.php');

$smarty->display('header.tpl');
?>