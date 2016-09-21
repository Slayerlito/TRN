<?php
/* Smarty version 3.1.30, created on 2016-09-21 20:21:32
  from "C:\xampp\htdocs\TRN\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e2cfaca2cbf5_09342533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fd384461a26cb0080a481f3b2a0d29a73d2a139' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TRN\\templates\\header.tpl',
      1 => 1474482021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57e2cfaca2cbf5_09342533 (Smarty_Internal_Template $_smarty_tpl) {
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
	
	<!-- favicon -->
	<link rel="icon" type="image/ico" href="favicon.ico">
     <!-- CSS de Bootstrap -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	  <!-- Tema Bootstrap -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
	 <!-- CSS scrolling nav -->
	<link href="bootstrap/css/scrolling-nav.css" rel="stylesheet">
	 <!-- CSS Principal -->
	<link rel="stylesheet" href="css/style.css">
	
	<!-- Título de la Web -->
	<title>TRN</title>
	
	<!-- JS principal-->
	<?php echo '<script'; ?>
 src="js/scripts.js"><?php echo '</script'; ?>
>
	
</head>
<body>
<header>
	 <!-- nav  -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header page-scroll col-md-6">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">TRN</a>
            </div>

            <!-- div donde se muestra el menú cuando el tamaño es de móvil -->
			<!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- li oculto para el scroll del nav -->
					<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden"><a class="page-scroll" href="#page-top"></a></li>
                    <li><a class="page-scroll" href="#about">Inicio</a></li>
                    <li><a class="page-scroll" href="#services">Noticias</a></li>
                    <li><a class="page-scroll" href="#contact">Planes</a></li>
                </ul>
				<!-- Login / Registro -->
				<ul class="nav navbar-nav navbar-right">
					<!-- Iniciar sesión -->
					<li class="dropdown">
						<a class="dropdown-toggle" href="#" data-toggle="dropdown" id="login"><span class="glyphicon glyphicon-user"></span> Identifícate</a>
						<div class="dropdown-menu">
							<form class="form" action="index.php" method="post">
									<input type="text" id="email_l" name="email" autofocus="autofocus" placeholder="E-mail">
									<input type="password" id="password" name="password" placeholder="Contraseña">
									<input clasS="btn" type="submit" name="login" value="Iniciar sesión">
							</form>
							<!-- DAVID // MOSTRARLO CUANDO EL LOGIN NO ES CORRECTO -->
							<?php if ($_smarty_tpl->tpl_vars['login']->value == '1') {?>
								<div class="alert alert-danger">
									<p>El usuario o la contraseña no son correctos.</p>
									<a href="" >¿Has olvidado la contraseña?</a>
								</div>
							<?php }?>
							<!------------------------------------------------------->
						</div>
					</li>
					<!-- /Iniciar sesión -->
					<!-- Registro -->
					<li class="dropdown">
						<a class="dropdown-toggle" href="#" data-toggle="dropdown" id="registro"><span class="glyphicon glyphicon-log-in"></span> Registro</a>
						<div class="dropdown-menu">
							<form class="form" action="index.php" method="post">
								<input type="text" id="email_r" name="email" autofocus="autofocus" placeholder="E-mail">
								<input type="password" id="password_r" name="password" placeholder="Contraseña">
								<input type="password" id="password2" name="password2"  placeholder="Repita Contraseña">
								<input type="text" id="first_name" name="nombre"  placeholder="Nombre">
								<input type="text" id="last_name" name="apellidos"  placeholder="Apellidos">
								<input type="text" id="birthdate" name="nacimiento"  placeholder="Fecha de Nacimiento">
								<input class="btn" type="submit" name="registro" value="Registrarse">
							</form>
							<!-- DAVID // MOSTRARLO CUANDO EL LOGIN NO ES CORRECTO -->
							<?php if ($_smarty_tpl->tpl_vars['registro']->value == '1') {?>
								<div class="alert alert-danger">
									<p>Ya existe un usuario con ese E-mail.</p>
									<a href="" >¿Has olvidado la contraseña?</a>
								</div>
							<?php }?>
							<!-- --------------------------------------------------- -->
						</div>
					</li>
					<!-- /Registro -->
				</ul>
				<!-- FIN Login / Registro -->
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	<!-- /nav -->
</header><?php }
}
