<?php
/* Smarty version 3.1.30, created on 2017-04-06 08:08:23
  from "C:\wamp\www\TRN\cpannel\templates\menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e5f777d7ace5_49131163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'befe7e39442fc8ff823376368727b21154c8ef67' => 
    array (
      0 => 'C:\\wamp\\www\\TRN\\cpannel\\templates\\menu.tpl',
      1 => 1491466059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e5f777d7ace5_49131163 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div id="menu">
    
    <ul>
        <li>
            <h2>MENU</h2>
        </li> 
        <li class="has-sub">
            <a href="usuarios.php">Usuarios</a>
        </li>
        <li class="has-sub">
            <a href="slider.php">Slider</a>
        </li>
        <li class="has-sub">
            <a href="noticias.php">Noticias</a>
        </li>
        <li class="has-sub">
            <a href="planes.php">Planes</a>
        </li>
        <li class="has-sub">
            <a href="">DataBase</a>
            <ul>
                <li class="has-sub">
                    <a href="">Backup</a>
                </li>
            </ul>
        </li>
        <li class="has-sub">
            <a href="entrenamiento.php">Entrenamiento</a>
            <ul>
                <li class="has-sub">
                    <a href="ejercicios.php">Ejercicios</a>
                </li>
                <li class="has-sub">
                    <a href="">Planes de Entrenamiento</a>
                </li>
            </ul>
        </li>
        <li class="has-sub">
            <a href="nutricion.php">Nutrici&oacute;n</a><ul>
                <li class="has-sub">
                    <a href="">Dietas</a>
                </li>
                <li class="has-sub">
                    <a href="">Alimentos</a>
                </li>
				 <li class="has-sub">
                    <a href="jerarquia_alimentos.php">Jerarqu&iacute;a Alimentos</a>
                </li>
            </ul>
        </li>
    </ul>
</div> <?php }
}
