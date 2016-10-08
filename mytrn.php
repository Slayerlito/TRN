<?php
session_start();
IF(!ISSET($_SESSION['usuario']))	{
	header('Location: login.php?url=mytrn');
}
session_write_close();

//Include de los parametros de smarty
require_once('setup.php'); 

//Declaracion de la funcion de smarty
$smarty = new Smarty_setup();

//Include del header
require_once('header.php');


//Funcionalidad del index

$smarty->assign('usuario', $_SESSION['usuario']);
//var_dump($_SESSION['usuario']);
$smarty->assign('listaObjetivos', ControladorWeb::getListaObjetivos($_SESSION['usuario']->getId(),$_SESSION['usuario']->isCoach()));
var_dump(ControladorWeb::getListaObjetivos($_SESSION['usuario']->getId(),$_SESSION['usuario']->isCoach()));


$smarty->display('mytrn.tpl');

//Include del footer
require_once('footer.php');



?>