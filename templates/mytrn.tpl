<main  class="container-fluid">
<!-- MENU IZQUIERDO -->
<div id="menuizq" class="col-md-3">
	<span class="glyphicon glyphicon-remove text-right" id="btn-cerrar"></span>
	<!-- FICHA TECNICA -->
	<div id="ficha-tecnica" class="text-center">
		<div class="container-fluid">
			<img id="imgmytrn" class="img-circle center-block" src="images/team.jpg">
		</div>
		<div class="container-fluid">
			<h3>{$usuario->getNombre()}</h3>
			<h4>{$usuario->getApellidos()}</h4>
			<h6>{$usuario->getPeso()} Kg</h6>
			<h6>{$usuario->getAltura()} cm</h6>
		</div>
	</div>
	<!-- /FICHA TECNICA -->
	<!-- LISTA DE OBJETIVOS -->
	<div class=" container-fluid text-center">
		<div class="center-block">
			<h4 >MIS OBJETIVOS</h4>
		</div>
		<ul class="list-unstyled">
			{foreach from=$listaObjetivos item=$objetivo}
			<li>{$objetivo->getObjetivo()}</li>
			{/foreach}
			<li>PRUEBA</li><li>PRUEBA</li><li>PRUEBA</li><li>PRUEBA</li><li>PRUEBA</li><li>PRUEBA</li><li>PRUEBA</li><li>PRUEBA</li><li>PRUEBA</li><li>PRUEBA</li><li>PRUEBA</li><li>PRUEBA</li><li>PRUEBA</li><li>PRUEBA</li><li>PRUEBA</li><li>PRUEBA</li><li>PRUEBA</li><li>PRUEBA</li><li>PRUEBA</li><li>PRUEBA</li><li>PRUEBA</li><li>PRUEBA</li><li>PRUEBA</li><li>PRUEBA</li><li>PRUEBA</li><li>PRUEBA</li><li>PRUEBA</li><li>PRUEBA</li><li>PRUEBA</li>
		</ul>
	</div>
	<!-- /LISTA DE OBJETIVOS -->
</div>
<!-- /MENU IZQUIERDO -->



<!-- OBJETIVO -->
<div id="zonaobjetivos" class="container-fluid col-md-9">
	<!-- SUBMENU MYTRN --->
	<div id="submenu" class="container-fluid col-md-12 text-center center-block">
		<ul class="list-unstyled">
			<li class="col-md-4"><a>OBJETIVO ACTUAL</a></li>
			<li class="col-md-4"><a>NUEVO OBJETIVO</a></li>
			<li class="col-md-4"><a>EDITAR OBJETIVO</a></li>
		</ul>
	</div>
	<!-- / SUBMENU MYTRN-->
	<!-- GRAFICOS -->
	<div class="container-fluid">
			<div class="container-fluid">
				<div class="col-md-3 col-md-offset-1 div-bubble" >
					<canvas id="bubble" class="center-block" style="margin: 0 auto;"> 
						<script>burbuja();</script>
					</canvas>
				</div>
				<div class="col-md-7 col-md-offset-1">
					<canvas id="progreso" class="center-block" width="700" height="400" >
						<script>linea_progreso();</script>
					</canvas>
				</div>
			</div>
			<hr>
			<div class="container-fluid">
				<div class="col-md-6 center-block">
					<div id="slidermytrn" class="carousel slider">
						<ol class="carousel-indicators">
							<li data-target="#slidermytrn" data-slide-to="0" class="active"></li>
							<li data-target="#slidermytrn" data-slide-to="1"></li>
							<li data-target="#slidermytrn" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="item active">
								<img class="img-responsive col-md-4" src="http://image.flaticon.com/icons/png/512/28/28265.png">
								<img class="img-responsive col-md-4" src="http://image.flaticon.com/icons/png/512/43/43368.png">
								<img class="img-responsive col-md-4" src="http://image.flaticon.com/icons/png/512/55/55314.png">
							</div>
							<div class="item">
								<img class="img-responsive col-md-4" src="https://2.bp.blogspot.com/-F6g-dRni3dM/V1tJTVnxLuI/AAAAAAAFtbs/YR4i63pnOZsJcUtJzXQm6wtKarWe5ByJgCLcB/s1600/DEPORTES%2B%2528ARTES%2BMARCIALES%2529%2B%252850%2529.png">
								<img class="img-responsive col-md-4" src="http://image.flaticon.com/icons/png/512/30/30939.png">
								<img class="img-responsive col-md-4" src="http://image.flaticon.com/icons/png/512/30/30340.png">
							</div>
						</div>
						<a href="#slidermytrn" clasS="left carousel-control" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a href="#slidermytrn" clasS="right carousel-control" data-slide="prev"><span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>

				</div>
				<div class="col-md-5">
					<canvas id="peso" class="center-block">
						<script>linea_peso();</script>
					</canvas>
				</div>
			</div>
		</div>
	<!-- /GRAFICOS -->
</div>
<!-- / OBJETIVO -->
</main>