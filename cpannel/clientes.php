<?php


require_once('php/controladores/ControladorWEB.php');
require_once('php/controladores/ControladorSQL.php');

//Include de los parametros de smarty

require_once('setup.php'); 


//Declaracion de la funcion de smarty

$smarty = new Smarty_setup();


//Include del header

require_once('header.php');


$smarty->display('clientes.tpl');

//Include del footer

require_once('footer.php');


?>
