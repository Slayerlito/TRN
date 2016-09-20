<!DOCTYPE HTML>
<html>
<head>
	<!-- Información -->
	<meta charset="UTF-8"> <!-- Codificación de caracteres -->
	<meta name="description" content="Página web de dietas y entrenamientos personalizados"> <!-- Breve descripción de la página -->
	<meta name="keywords" content="dieta,entrenamiento,entrenamiento personalizado,dieta personalizada,gimnasio,deporte,ejercicios,pesas,comida,rutinas,rutina de entrenamiento"> <!-- Palabras clave -->
	<meta name="author" content="TRN"> <!-- Autor -->
	
	<!-- Enlaces -->
	<link rel="icon" type="image/ico" href="favicon.ico"> <!-- favicon -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> <!-- CSS de Bootstrap -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css"  <!-- Tema Bootstrap -->
	<link rel="stylesheet" href="css/style.css"> <!-- CSS Principal -->
	
	<!-- Título de la Web -->
	<title>TRN</title>

</head>
<body>
<header>
	<input type="button" value="Inicia Sesión"></input>
	<input type="button" value="Registrate"></input>
	
	<!-- DIV Inicio sesión -->
	<div>
		<form action="login.php" method="post">
			<div>
				<h1>Inicia sesión en TRN</h1>
			</div>
			<div>
				<label for="email">Dirección E-mail</label>
				<input type="text" id="email" name="email" tabindex="1" autofocus="autofocus">

				<label for="password">Contraseña</label>
				<input type="password" id="password" name="password" tabindex="2">
				
				
				<input type="submit" name="commit" tabindex="3" value="Iniciar sesión">
			</div>
		</form>
		<!-- DAVID // MOSTRARLO CUANDO EL LOGIN NO ES CORRECTO -->
		{IF $error == '1'}
			<div class="alert alert-danger">
				<p>El usuario o la contraseña no son correctos.</p>
				<a href="" >¿Has olvidado la contraseña?</a>
			</div>
		{/IF}
		<!------------------------------------------------------->
	</div>
	<!-- CIERRO DIV Inicio sesión-->
	<!-- DIV Registro -->
	<div>
		<form action="registro.php" method="post">
			<div>
				<h1>Registrate en TRN</h1>
			</div>
			<div>
				<label for="email">E-mail:</label>
				<input type="text" id="email" name="email" tabindex="1" autofocus="autofocus">

				<label for="password">Contraseña:</label>
				<input type="password" id="password" name="password" tabindex="2">
				
				<label for="first_name">Nombre:</label>
				<input type="text" id="first_name" name="first_name" tabindex="3">
			
				<label for="last_name1">Primer Apellido:</label>
				<input type="text" id="last_name1" name="last_name1" tabindex="4">
				
				<label for="birthdate">Fecha de Nacimiento:</label>
				<input type="text" id="last_name" name="last_name" tabindex="5">
				
				<input type="submit" name="commit" tabindex="6" value="Registrarse">
			</div>
		</form>
	</div>
	<!-- CIERRO DIV Registro -->
</header>