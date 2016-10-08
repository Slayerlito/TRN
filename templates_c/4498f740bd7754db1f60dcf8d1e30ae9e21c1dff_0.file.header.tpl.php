<?php
/* Smarty version 3.1.30, created on 2016-10-08 04:47:00
  from "C:\wamp64\www\TRN\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57f87a4414e7f4_05113706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4498f740bd7754db1f60dcf8d1e30ae9e21c1dff' => 
    array (
      0 => 'C:\\wamp64\\www\\TRN\\templates\\header.tpl',
      1 => 1475867178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f87a4414e7f4_05113706 (Smarty_Internal_Template $_smarty_tpl) {
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
	<!-- CSS Font Awesome -->
	<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
	<!-- CSS Bootstrap social -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap-social.css">
	<!-- CSS scrolling nav -->
	<link href="css/scrolling-nav.css" rel="stylesheet">
	<!-- CSS  slider -->
    <link href="css/full-slider.css" rel="stylesheet">
	<!-- CSS Principal -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Título de la Web -->
	<title>TRN</title>

	<!-- JS principal-->
	<?php echo '<script'; ?>
 src="js/scripts.js"><?php echo '</script'; ?>
>
	<!-- JQuery -->
	<?php echo '<script'; ?>
 src="js/jquery-3.1.0.min.js"><?php echo '</script'; ?>
>
	<!-- JS charts/graficos cahrt.js-->
	<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js" ><?php echo '</script'; ?>
> 
	<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.min.js" ><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.js" ><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js" ><?php echo '</script'; ?>
>
	<!-- JS Liquid Bubble chart -->
	<!--<?php echo '<script'; ?>
 src="//code.jquery.com/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>-->
	<?php echo '<script'; ?>
 src="js/waterbubble.js"><?php echo '</script'; ?>
>
</head>
<body id="inicio">
<header>
	 <!-- NAV  -->
    <nav class="navbar navbar-fixed-top" role="navigation">
        <div class="container-fluid">
			<div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="glyphicon glyphicon-menu-hamburger"></span>
                </button>
                <a class="navbar-brand page-scroll" href="index.php"><span>TRN</span></a>
				<!-- REDES SOCIALES -->
				<div class="social navbar-left">
					<a href="http://www.twitter.es" class="btn btn-sm btn-social-icon btn-twitter" target="_blank"><span class="fa fa-twitter"></span></a>
					<a href="http://www.facebook.es" class="btn btn-sm btn-social-icon btn-facebook" target="_blank"><span class="fa fa-facebook"></span></a>
					<a href="https://www.instagram.com/" class="btn btn-sm btn-social-icon btn-instagram" target="_blank"><span class="fa fa-instagram"></span></a>
				</div>
				<!-- REDES SOCIALES -->	
            </div>
			<!-- div donde se muestra el menú cuando el tamaño es de móvil -->
			<!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">

			<!-- Login / Registro -->
				<ul class="nav navbar-nav navbar-right">
					<!-- Iniciar sesión -->
	<!-- SE muestra o oculta segun si esta o no logueado el usuario -->	
				
				<?php if ($_smarty_tpl->tpl_vars['usuario']->value == 'false') {?>	
					<li class="dropdown">
						<a class="dropdown-toggle" href="#" data-toggle="dropdown" id="login"><span class="glyphicon glyphicon-user"></span> Identifícate</a>
						<div class="dropdown-menu">
						<form class="form" action="index.php" method="post">
								<input type="text" id="email_l" name="email" autofocus="autofocus" placeholder="E-mail">
								<input type="password" id="password" name="password" placeholder="Contraseña">
								<a href="#caca" class="btn-link" >¿Has olvidado la contraseña?</a>
								<input clasS="btn" type="submit" name="login" value="Iniciar sesión">
						</form>
	<!-- DAVID // MOSTRARLO CUANDO EL LOGIN NO ES CORRECTO -->
							<?php if ($_smarty_tpl->tpl_vars['login']->value == 'false') {?>
								<div class="alert alert-danger">
									<p>El usuario o la contraseña no son correctos.</p>
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
<!-- DAVID // MOSTRARLO CUANDO EL REGISTRO NO ES CORRECTO -->
							
<!-- SE ESTA MOSTRANDO DENTRO DEL DIV DEL LOGIN.. HAY QUE PONERLO FUERA PARA QUE SE VEA CUANDO FALLA -->
							<?php if ($_smarty_tpl->tpl_vars['registro']->value == 'pass') {?>
								<div class="alert alert-danger">
									<p>Las contraseñas no son iguales.</p>
									<a href="" >¿Has olvidado la contraseña?</a>
								</div>
							<?php } elseif ($_smarty_tpl->tpl_vars['registro']->value == 'email') {?>
								<div class="alert alert-danger">
									<p>Ya existe un usuario con ese E-mail.</p>
								</div>
							<?php } elseif ($_smarty_tpl->tpl_vars['registro']->value == '-1') {?>
								<div class="alert alert-danger">
									<p>No se ha podido registrar.</p>
									<a href="" >¿Has olvidado la contraseña?</a>
								</div>
							<?php } elseif ($_smarty_tpl->tpl_vars['registro']->value == 'true') {?>
								<div class="alert alert-success">
									<p>Usuario registrado con exito.</p>
								</div>
							<?php }?>
							<!-- --------------------------------------------------- -->
						</div>
					</li>
					<!-- /Registro -->
				<?php } else { ?>
					<!-- Boton usuario/Boton desconectar -->
					<li class="dropdown">
						<a class="dropdown-toggle" href="#" data-toggle="dropdown" id="login"><span class="glyphicon glyphicon-user"></span> <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</a>
					</li>
					<li class="dropdown">
						<a class="alert-danger" href="logout.php" id="logout"><span class="glyphicon glyphicon-off"></span> Desconectar</a>
					</li>
					<!-- Fin Boton usuario/Boton desconectar -->
				<?php }?>	
	<!-- FIN  del IF Smarty -->
				</ul>
				<!-- MENU -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- li oculto para el scroll del nav -->
					<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden"><a class="page-scroll" href="index.php"></a></li>
                    <li><a class="page-scroll" href="#inicio">Inicio</a></li>
                    <li><a class="page-scroll" href="#noticias">Noticias</a></li>
                    <li><a class="page-scroll" href="#planes">Planes</a></li>
					<li><a class="page-scroll" href="mytrn.php">My TRN</a></li>
					<li><a class="page-scroll" href="prueba.php">PRUEBAS</a></li>
                </ul>
				<!-- MENU -->
				<!-- FIN Login / Registro -->
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
	</nav>
	<!-- FIN NAV -->
</header><?php }
}
