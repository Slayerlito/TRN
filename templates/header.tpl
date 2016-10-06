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
	<!-- CSS  slider -->
    <link href="bootstrap/css/full-slider.css" rel="stylesheet">
	<!-- CSS Font Awesome -->
	<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
	<!-- CSS Bootstrap social -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap-social.css">
	 <!-- CSS Principal -->
	<link rel="stylesheet" href="css/style.css">

	
	<!-- Título de la Web -->
	<title>TRN</title>
	
	<!-- JS principal-->
	<script src="js/scripts.js"></script>
	<!-- JS charts/graficos -->
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js" ></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.min.js" ></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js" ></script>
	
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
				
				{IF $usuario == 'false'}	
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
							{IF $login == 'false'}
								<div class="alert alert-danger">
									<p>El usuario o la contraseña no son correctos.</p>
								</div>
							{/IF}
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
							{IF $registro == 'pass'}
								<div class="alert alert-danger">
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
						</div>
					</li>
					<!-- /Registro -->
				{ELSE}
					<!-- Boton usuario/Boton desconectar -->
					<li class="dropdown">
						<a class="dropdown-toggle" href="#" data-toggle="dropdown" id="login"><span class="glyphicon glyphicon-user"></span> {$user}</a>
					</li>
					<li class="dropdown">
						<a class="alert-danger" href="logout.php" id="logout"><span class="glyphicon glyphicon-off"></span> Desconectar</a>
					</li>
					<!-- Fin Boton usuario/Boton desconectar -->
				{/IF}	
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
</header>