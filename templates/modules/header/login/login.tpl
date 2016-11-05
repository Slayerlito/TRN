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
			
			
			<!-- MOSTRARLO CUANDO EL LOGIN NO ES CORRECTO HACER UNA ALERTA  -->
			
			<!------------------------------------------------------->
			
			
		</ul>
	</li>
</ul>
<div class="col-md-12 mensaje">

			{IF $login == 'false'}
				<div class="alert alert-danger">
					<p>El usuario o la contraseña no son correctos.</p>
				</div>
			{/IF}
			
			</div>
{ELSE}
<!-- USUARIO -->
<ul class="nav navbar-nav navbar-right">
	<li>
		<a href="#" id="usuario"><span class="glyphicon glyphicon-user"></span> {$user}</a>
	</li>
</ul>
<!-- /USUARIO -->
{/IF}