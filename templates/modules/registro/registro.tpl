{IF $usuario == 'false'}
<ul id="registro" class="nav navbar-nav navbar-right">
	<li class="dropdown">
	<a class="dropdown-toggle" href="#" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in">&nbsp;</span>Registro</a>
		<ul class="dropdown-menu dropdown-lr animated flipInX" role="menu">
			<li class="col-md-12">
				<form class="form text-center" action="index.php" method="post">
					<div class="form-group">
						<input class="form-control" type="text" id="email_r" name="email" placeholder="E-mail">
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
						<button class="form-control btn" type="submit" name="registro">Registrarse</button>
					</div>
					
				</form>
			</li>
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
<!-- ALERTS QUE SE MUESTRAN CUANDO FALLA EL REGISTRO - LOGIN -->
<!-- SE ESTA MOSTRANDO DENTRO DEL DIV DEL LOGIN.. HAY QUE PONERLO FUERA PARA QUE SE VEA CUANDO FALLA -->
<div class="mensaje">
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
</div>
<!-- ******************************************************* -->
<!-- ALERTS QUE SE MUESTRAN CUANDO FALLA EL REGISTRO - LOGIN -->