<form action="login.php" method="post">
	<div>
		<h1>Inicia sesión en TRN</h1>
	</div>
	<div>
		<label for="email">Dirección E-mail</label>
		<input type="text" id="email" name="email" tabindex="1" autofocus="autofocus">

		<label for="password">Contraseña</label>
		<input type="password" id="password" name="password" tabindex="2">

		<a href="" >¿Has olvidado la contraseña?</a>

		<input type="submit" name="commit" tabindex="3" value="Inicia sesión">
	</div>
</form>

{IF $error == '1'}
<div class="alert alert-danger">
	<p>El usuario o la contraseña no son correctos.</p>
</div>
{/IF}
<div>
	<span>¿Todavía no tienes cuenta? <a href="registro.php">Crear una cuenta</a></span>
</div>