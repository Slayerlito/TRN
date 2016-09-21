<?php
/* Smarty version 3.1.30, created on 2016-09-21 02:46:00
  from "C:\xampp\htdocs\TRN\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e1d848b56218_70051261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fd384461a26cb0080a481f3b2a0d29a73d2a139' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TRN\\templates\\header.tpl',
      1 => 1474418752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57e1d848b56218_70051261 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html lang="es">
<head>
	<!-- Información -->
	<meta charset="UTF-8"> <!-- Codificación de caracteres -->
	<meta name="description" content="Página web de dietas y entrenamientos personalizados"> <!-- Breve descripción de la página -->
	<meta name="keywords" content="dieta,entrenamiento,entrenamiento personalizado,dieta personalizada,gimnasio,deporte,ejercicios,pesas,comida,rutinas,rutina de entrenamiento"> <!-- Palabras clave -->
	<meta name="author" content="TRN"> <!-- Autor -->
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"> <!-- Bootstrap para móviles y sin zoom-->
	
	<!-- Enlaces -->
	<link rel="icon" type="image/ico" href="favicon.ico"> <!-- favicon -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> <!-- CSS de Bootstrap -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">  <!-- Tema Bootstrap -->
	<link rel="stylesheet" href="css/style.css"> <!-- CSS Principal -->
	
	<!-- Título de la Web -->
	<title>TRN</title>

</head>
<body>

<header>
	 <nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header col-md-5">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span> 
			  </button>
				<!-- <a class="navbar-brand">TRN</a>-->
 			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav ">
				<li class="active"><a href="#">Inicio</a></li>
				<li><a href="#">Noticias</a></li> 
				<li><a href="#">Campeonatos</a></li> 
			  </ul>
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="#"><span class="glyphicon glyphicon-user"></span> Iniciar Sesión</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Registro</a></li>
			  </ul>
			</div>
		</div>
	</nav> 
		<div>  <!-- DIV Inicio sesión -->
			<form action="index.php" method="post">
				<div>
					<h1>Inicia sesión en TRN</h1>
				</div>
				<div>
					<label for="email">Dirección E-mail</label>
					<input type="text" id="email" name="email" tabindex="1" autofocus="autofocus">

					<label for="password">Contraseña</label>
					<input type="password" id="password" name="password" tabindex="2">
					
					<input type="submit" name="login" tabindex="3" value="Iniciar sesión">
				</div>
			</form>
			<!-- DAVID // MOSTRARLO CUANDO EL LOGIN NO ES CORRECTO -->
			<?php if ($_smarty_tpl->tpl_vars['login']->value == '1') {?>
				<div class="alert alert-danger">
					<p>El usuario o la contraseña no son correctos.</p>
					<a href="" >¿Has olvidado la contraseña?</a>
				</div>
			<?php }?>
			<!-- --------------------------------------------------- -->
		</div> 		<!-- CIERRO DIV Inicio sesión-->
		
		<div> <!-- DIV Registro -->
			<form action="index.php" method="post">
				<div>
					<h1>Registrate en TRN</h1>
				</div>
				<div>
					<label for="email">E-mail:</label>
					<input type="text" id="email" name="email" tabindex="1" autofocus="autofocus">

					<label for="password">Contraseña:</label>
					<input type="password" id="password" name="password" tabindex="2">
					
					<label for="password2">Repita Contraseña:</label>
					<input type="password" id="password2" name="password2" tabindex="3">
					
					<label for="first_name">Nombre:</label>
					<input type="text" id="first_name" name="nombre" tabindex="4">
				
					<label for="last_name1">Apellidos:</label>
					<input type="text" id="last_name1" name="apellidos" tabindex="5">
					
					<label for="birthdate">Fecha de Nacimiento:</label>
					<input type="text" id="last_name" name="nacimiento" tabindex="6">
					
					<input type="submit" name="registro" tabindex="6" value="Registrarse">
				</div>
			</form>
			<!-- DAVID // MOSTRARLO CUANDO EL LOGIN NO ES CORRECTO -->
			<?php if ($_smarty_tpl->tpl_vars['registro']->value == '1') {?>
				<div class="alert alert-danger">
					<p>Ya existe un usuario con ese E-mail.</p>
					<a href="" >¿Has olvidado la contraseña?</a>
				</div>
			<?php }?>
			<!-- --------------------------------------------------- -->
		</div><!-- CIERRO DIV Registro -->
</header>
<main>
<hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr>
</main><?php }
}
