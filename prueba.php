<?php

//Include de los parametros de smarty
require_once('setup.php'); 

//Declaracion de la funcion de smarty
$smarty = new Smarty_setup();

//Include del header
require_once('header.php');

//Pruebas

$smarty->display('prueba.tpl');

//Include del footer
require_once('footer.php');
?>