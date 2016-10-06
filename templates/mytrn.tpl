<main class="container-fluid" >
	<!-- MENU IZQUIERDO -->
	<div id="menuizq" class=" container-fluid col-md-3 col-sm-3 center-block">
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
	<div id="objetivos" class="col-md-9 col-sm-9 center-block">
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
			<canvas class="col-md-4" id="linea"></canvas>
			<script>
				var ctx = document.getElementById("linea");
				var linea = new Chart(ctx, {
				type: 'line',
				data: {
					datasets: [{
						label: 'Scatter Dataset',
						data: [{
							x: -10,
							y: 0
						}, {
							x: 0,
							y: 10
						}, {
							x: 10,
							y: 5
						}]
					}]
				},
				options: { responsive: false,
					scales: {
						xAxes: [{
							type: 'linear',
							position: 'bottom'
						}]
					}
				}
			});
			</script>
			
		<canvas class="col-md-4" id="barras" width="400" height="400"></canvas>
			<script>
			var ctx = document.getElementById("barras");
			var barras = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
					datasets: [{
						label: '# of Votes',
						data: [7, 8, 3, 5, 2, 3],
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 159, 64, 0.2)'
						],
						borderColor: [
							'rgba(255,99,132,1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255, 159, 64, 1)'
						],
						borderWidth: 1
					}]
				},
				options: { responsive: false,
							
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero:true
							}
						}]
					}
				}
			});
			</script>
			<canvas class="col-md-4" id="radar" width="400" height="400"></canvas>
			<script>
			var ctx = document.getElementById("radar");
			var radar = new Chart(ctx, {
				type: 'radar',
				data: {
					labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
					datasets: [
						{
							label: "My First dataset",
							backgroundColor: "rgba(179,181,198,0.2)",
							borderColor: "rgba(179,181,198,1)",
							pointBackgroundColor: "rgba(179,181,198,1)",
							pointBorderColor: "#fff",
							pointHoverBackgroundColor: "#fff",
							pointHoverBorderColor: "rgba(179,181,198,1)",
							data: [65, 59, 90, 81, 56, 55, 40]
						},
						{
							label: "My Second dataset",
							backgroundColor: "rgba(255,99,132,0.2)",
							borderColor: "rgba(255,99,132,1)",
							pointBackgroundColor: "rgba(255,99,132,1)",
							pointBorderColor: "#fff",
							pointHoverBackgroundColor: "#fff",
							pointHoverBorderColor: "rgba(255,99,132,1)",
							data: [28, 48, 40, 19, 96, 27, 100]
						}
					]
				},
				options: { responsive: false,
						scale: {
							reverse: true,
							ticks: {
								beginAtZero: true
							}
						}
				}
			});			
			</script>
		</div>
		<!-- /GRAFICOS -->
	</div>
	<!-- OBJETIVOS -->
</main>