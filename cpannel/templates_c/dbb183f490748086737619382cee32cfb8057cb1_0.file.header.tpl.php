<?php
/* Smarty version 3.1.30, created on 2017-04-06 07:55:08
  from "C:\wamp\www\TRN\cpannel\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e5f45c2f4937_55413752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbb183f490748086737619382cee32cfb8057cb1' => 
    array (
      0 => 'C:\\wamp\\www\\TRN\\cpannel\\templates\\header.tpl',
      1 => 1491222595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e5f45c2f4937_55413752 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
	<title>Panel de Administración</title>
	<link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="" ><img src="img/icons/sobre.png" alt="Mensajes"/></a></li>
                
                <li><a href="" ><img src="img/icons/carrito.png" alt="Carrito"/></a></li>
                
                <li class="usuario"><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
<a href="../logout.php" > <img src="img/icons/desconectar.png" alt="Desconectar"/></a></li>
                
            </ul>
            
            
        </nav>
    </header><?php }
}
