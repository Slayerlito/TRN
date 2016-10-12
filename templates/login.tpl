<main class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4 text-center">
				<div class="col-md-12 text-center">
					<legend class="col-md-6">Login</legend>
					<legend class="col-md-6">Registro</legend>
				</div>

				<form class="form" action="login.php{$url}" method="post">
					<input class="col-md-3" type="text" id="email_l" name="email" autofocus="autofocus" placeholder="E-mail">
					<input class="col-md-3"type="password" id="password" name="password" placeholder="Contraseña">
					<a href="#caca" class="btn-link col-md-3">¿Has olvidado la contraseña?</a>
					<input class="btn" type="submit" name="login" value="Iniciar sesión">
				</form>
			</div>
		</div>
	</div>
</main>