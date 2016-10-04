<main class="container-fluid" >
	<!-- MENU IZQUIERDO -->
	<div id="menuizq" class="col-md-3 col-sm-3 center-block">
		<!-- FICHA TECNICA -->
		<div id="ficha-tecnica" class="text-center">
			<img id="imgmytrn" class="img-circle img-responsive center-block" src="https://pbs.twimg.com/profile_images/493891049438203905/Lbtt9YLC_400x400.png">
			<h3>{$usuario->getNombre()}</h3>
			<h4>{$usuario->getApellidos()}</h4>
			<div>{$usuario->getPeso()}</div>
			<div>{$usuario->getAltura()}</div>
			
		</div>
		<!-- /FICHA TECNICA -->
		<hr>
		<!-- LISTA DE OBJETIVOS -->
		<div class="text-center">
			<h4 >MIS OBJETIVOS</h4>
			<ul class="list-unstyled">
				<li>NOMBRE OBJETIVO</li>
				<li>NOMBRE OBJETIVO</li>
				<li>NOMBRE OBJETIVO</li>
				<li>NOMBRE OBJETIVO</li>
				<li>NOMBRE OBJETIVO</li>				
				<li>NOMBRE OBJETIVO</li>
				<li>NOMBRE OBJETIVO</li>
				<li>NOMBRE OBJETIVO</li>
				<li>NOMBRE OBJETIVO</li>	
				<li>NOMBRE OBJETIVO</li>
				<li>NOMBRE OBJETIVO</li>
				<li>NOMBRE OBJETIVO</li>	
				<li>NOMBRE OBJETIVO</li>
				<li>NOMBRE OBJETIVO</li>
			</ul>
		</div>
		<!-- /LISTA DE OBJETIVOS -->
	</div>
	<!-- /MENU IZQUIERDO -->
	<!-- OBJETIVOS -->
	<div id="objetivos" class="col-md-9 col-sm-9">
		<!-- SUBMENU -->
		<div id="submenu" class="text-center col-md-9 col-sm-9">
			<ul class="list-unstyled">
				<li class="col-md-4">
					<!-- BOTON MOSTRAR OCULTAR -->
					<a class="pull-left" onclick="ocultar();" id="btn-abrir"><span class="glyphicon glyphicon-triangle-left"></span></a>
					<a class="pull-left " onclick="mostrar();" id="btn-cerrar"><span class="glyphicon glyphicon-triangle-right"></span></a>
					<!-- /BOTON MOSTRAR OCULTAR -->
					<a>OBJETIVO ACTUAL</a>
				</li>
				<li class="col-md-4"><a>NUEVO OBJETIVO</a></li>
				<li class="col-md-4"><a>EDITAR OBJETIVO</a></li>
			</ul>
		</div>
		<!-- /SUBMENU -->
		<!-- GRAFICOS -->
		<div class="container-fluid">
			asdfjlañsjdñflkjasñldkfjasdfjklñ
		</div>
		<!-- /GRAFICOS -->
	</div>
	<!-- OBJETIVOS -->
</main>