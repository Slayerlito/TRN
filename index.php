<?php

//Include de los parametros de smarty
require_once('setup.php'); 

//Declaracion de la funcion de smarty
$smarty = new Smarty_setup();

//Include del header
require_once('header.php');

//Funcionalidad del index

//Slider
    
require_once 'modules/slider/slider.php';

//
//
//
//Planes Contratables
$smarty->assign('planesFilaCompleta', ControladorWeb::getPlanesFilaCompleta());
$smarty->assign('planesUltimaFila', ControladorWeb::getPlanesUltimaFila());
$smarty->assign('modulo', count(ControladorWeb::getPlanesUltimaFila()));

$smarty->display('index.tpl');

//Include del footer
require_once('footer.php');
?>