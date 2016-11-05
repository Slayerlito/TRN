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
	<!-- CSS Animate -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- CSS Bootstrap social -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap-social.css">
	
	<!-- CSS header -->
	<link rel="stylesheet" href="css/header.css">
	
	<!-- CSS  slider -->
    <link href="css/full-slider.css" rel="stylesheet">
	<!-- CSS tablet -->
	<link href="css/tablet.css" rel="stylesheet">
	<!-- CSS Principal -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Título de la Web -->
	<title>TRN</title>


	<!-- JQuery -->
	<script src="js/jquery-3.1.0.min.js"></script>
	<!-- JS charts/graficos cahrt.js-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js" ></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js" ></script>
	<!-- JS Liquid Bubble chart -->
	<script src="js/waterbubble.js"></script>
	<!-- JS principal-->
	<script src="js/scripts.js"></script>
	<!-- JS Graficos -->
	<script src="js/graficos.js"></script>
	
</head>
<body id="inicio">
<header>
	 <!-- NAV  -->
    <nav id="nav-top" class="navbar navbar-fixed-top" role="navigation">
		<!-- NAVBAR HEADER -->
		<div class="navbar-header">
			<!-- BOTONES COLLAPSE -->
			<button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".my-navbar-collapse-menu"><span class="glyphicon glyphicon-menu-hamburger"></span></button>
			<button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".my-navbar-collapse-login-registro"><span class="glyphicon glyphicon-user"></span> / <span class="glyphicon glyphicon-log-in"></span></button>

			<!-- /BOTONES COLLAPSE -->
			
			<!-- NAVBAR BRAND -->
			<a class="navbar-brand" href="index.php"><span>TRN</span></a>
			<!-- /NAVBAR BRAND -->
			
			<!-- REDES SOCIALES -->
				{include file='modules/header/rrss/rrss.tpl'}
			<!-- REDES SOCIALES -->	
		</div>
		<!-- /NAVBAR HEADER -->
		
		<!-- COLLAPSE LOGIN/REGISTRO -->
		<div class="navbar-right collapse navbar-collapse my-navbar-collapse-login-registro">
			<!-- REGISTRO -->
				{include file='modules/header/registro/registro.tpl'}
			<!-- /REGISTRO -->	
			<!-- LOGIN -->
				{include file='modules/header/login/login.tpl'}
			<!-- /LOGIN -->
			
		</div>
		<!-- /COLLAPSE LOGIN/REGISTRO -->
		<!-- MENU -->
		{include file='modules/header/menu/menu.tpl'}
		<!-- /MENU -->
	</nav>
	<!-- /NAV -->
</header>