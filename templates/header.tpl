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
			<div class="social navbar-left">
				<a href="http://www.twitter.es" class="btn btn-sm btn-social-icon btn-twitter" target="_blank"><span class="fa fa-twitter"></span></a>
				<a href="http://www.facebook.es" class="btn btn-sm btn-social-icon btn-facebook" target="_blank"><span class="fa fa-facebook"></span></a>
				<a href="https://www.instagram.com/" class="btn btn-sm btn-social-icon btn-instagram" target="_blank"><span class="fa fa-instagram"></span></a>
			</div>
			<!-- REDES SOCIALES -->	
		</div>
		<!-- /NAVBAR HEADER -->
		
		<!-- COLLAPSE LOGIN/REGISTRO -->
		<div class="navbar-right collapse navbar-collapse my-navbar-collapse-login-registro">
			<!-- REGISTRO -->
			{IF $usuario == 'false'}
			<ul id="registro" class="nav navbar-nav navbar-right">
				<li class="dropdown">
				<a class="dropdown-toggle" href="#" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in">&nbsp;</span>Registro</a>
					<ul class="dropdown-menu dropdown-lr animated flipInX" role="menu">
						<div class="col-md-12">
							<form class="form text-center" role="form" action="index.php" method="post">
								<div class="form-group">
									<input class="form-control" type="text" id="email_r" name="email" autofocus="autofocus" placeholder="E-mail">
								</div>
								<div class="form-group">
									<input class="form-control"  type="password" id="password_r" name="password" placeholder="Contraseña">
								</div>
								<div class="form-group">
									<input class="form-control"  type="password" id="password2" name="password2"  placeholder="Repita Contraseña">
								</div>
								<div class="form-group">
									<input class="form-control"  type="text" id="first_name" name="nombre"  placeholder="Nombre">
								</div>
								<div class="form-group">
									<input class="form-control" type="text" id="last_name" name="apellidos"  placeholder="Apellidos">
								</div>
								<div class="form-group">
									<input class="form-control" type="text" id="birthdate" name="nacimiento"  placeholder="Fecha de Nacimiento">
								</div>
								<div class="form-group">
									<button class="form-control" type="submit" class="btn" name="registro">Registrarse</button>
								</div>
								
							</form>
						</div>
					</ul>
				</li>
			</ul>
			{ELSE}
			<!-- DESCONECTAR -->
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a class="alert-danger" href="logout.php" id="desconectar"><span class="glyphicon glyphicon-off"></span></a>
				</li>
			</ul>
			<!-- /DESCONECTAR -->
			{/IF}
			<!-- /REGISTRO -->
			
			<!-- LOGIN -->
			{IF $usuario == 'false'}	
			<ul id="login" class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a class="dropdown-toggle" href="#" data-toggle="dropdown"><span class="glyphicon glyphicon-user">&nbsp;</span>Identifícate</a>
					<ul class="dropdown-menu dropdown-lr animated flipInX dropdown-menu-left" role="menu">
						<div class="col-md-12">
							<form class="form text-center" role="form" action="index.php" method="post">
								<div class="form-group">
									
									<input class="form-control" type="text" id="email_l" name="email" autofocus  placeholder="E-mail" required>
								</div>
								<div class="form-group">
									<input class="form-control" type="password" id="password" name="password" placeholder="Contraseña" required>
								</div>
								<a class="center-block" href="http://es.ccm.net/faq/6599-como-recuperar-tu-contrasena-de-gmail">¿Has olvidado la contraseña?</a>
								<div class="form-group">
									<button type="submit" name="login" class="form-control">Iniciar Sesión</button>
								</div>
							</form>
						</div>
						
						
						<!-- DAVID // MOSTRARLO CUANDO EL LOGIN NO ES CORRECTO HACER UNA ALERTA  -->
						<div class="col-md-12">

						{IF $login == 'false'}
							<div class="alert alert-danger">
								<p>El usuario o la contraseña no son correctos.</p>
							</div>
						{/IF}
						
						</div>
						<!------------------------------------------------------->
						
						
					</ul>
				</li>
			</ul>
			{ELSE}
			<!-- USUARIO -->
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="#" id="usuario"><span class="glyphicon glyphicon-user"></span> {$user}</a>
				</li>
			</ul>
			<!-- /USUARIO -->
			{/IF}
			<!-- /LOGIN -->
			
			<!-- ALERTS QUE SE MUESTRAN CUANDO FALLA EL REGISTRO - LOGIN -->
			<!-- SE ESTA MOSTRANDO DENTRO DEL DIV DEL LOGIN.. HAY QUE PONERLO FUERA PARA QUE SE VEA CUANDO FALLA -->
			{IF $registro == 'pass'}
				<div class="alert alert-danger" >
					<p>Las contraseñas no son iguales.</p>
					<a href="" >¿Has olvidado la contraseña?</a>
				</div>
			{ELSEIF $registro == 'email'}
				<div class="alert alert-danger">
					<p>Ya existe un usuario con ese E-mail.</p>
				</div>
			{ELSEIF $registro == '-1'}
				<div class="alert alert-danger">
					<p>No se ha podido registrar.</p>
					<a href="" >¿Has olvidado la contraseña?</a>
				</div>
			{ELSEIF $registro == 'true'}
				<div class="alert alert-success">
					<p>Usuario registrado con exito.</p>
				</div>
			{/IF}
			<!-- --------------------------------------------------- -->
			<!-- ALERTS QUE SE MUESTRAN CUANDO FALLA EL REGISTRO - LOGIN -->
				
		</div>
		<!-- /COLLAPSE LOGIN/REGISTRO -->
		
		<!-- COLLAPSE MENU -->
		<div id="menu" class="navbar-right collapse navbar-collapse my-navbar-collapse-menu">
			<!-- MENU -->
			<ul class="nav navbar-nav">
				<!-- li oculto para el scroll del nav -->
				<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
				<li><a class="page-scroll" href="#inicio">Inicio</a></li>
				<li><a class="page-scroll" href="#noticias">Noticias</a></li>
				<li><a class="page-scroll" href="#planes">Planes</a></li>
				<li><a class="page-scroll" href="mytrn.php">My TRN</a></li>
				<li><a class="page-scroll" href="prueba.php">PRUEBAS</a></li>
			</ul>
			<!-- MENU -->
		</div>
		<!-- /COLLAPSE MENU -->
	</nav>
	<!-- /NAV -->
</header>