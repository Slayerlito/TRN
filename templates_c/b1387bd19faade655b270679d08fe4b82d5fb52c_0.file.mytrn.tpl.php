<?php
/* Smarty version 3.1.30, created on 2016-10-08 04:47:23
  from "C:\wamp64\www\TRN\templates\mytrn.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57f87a5b9552f0_76437329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1387bd19faade655b270679d08fe4b82d5fb52c' => 
    array (
      0 => 'C:\\wamp64\\www\\TRN\\templates\\mytrn.tpl',
      1 => 1475878271,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f87a5b9552f0_76437329 (Smarty_Internal_Template $_smarty_tpl) {
?>
<main class="container-fluid" >
	<!-- MENU IZQUIERDO -->
	<div id="menuizq" class=" container-fluid col-md-3 col-sm-3 center-block">
		<!-- FICHA TECNICA -->
		<div id="ficha-tecnica" class="text-center">
			<img id="imgmytrn" class="img-circle img-responsive center-block" src="images/team.jpg">
			<h3><?php echo $_smarty_tpl->tpl_vars['usuario']->value->getNombre();?>
</h3>
			<h4><?php echo $_smarty_tpl->tpl_vars['usuario']->value->getApellidos();?>
</h4>
			<div><?php echo $_smarty_tpl->tpl_vars['usuario']->value->getPeso();?>
 Kg</div>
			<div><?php echo $_smarty_tpl->tpl_vars['usuario']->value->getAltura();?>
 cm</div>
			
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
		<div class="container-fluid">
			<div class="col-md-6">
				<canvas id="bubble" class="center-block"></canvas>
			</div>
			<?php echo '<script'; ?>
>			
			$('#bubble').waterbubble({
			// bubble size
			radius: 150,
			// border width
			lineWidth: '',
			// data to present
			data: 0.2,
			// color of the water bubble
			waterColor: 'rgba(25, 139, 201, 1)',
			// text color
			textColor: 'rgba(06, 85, 128, 0.8)',
			// custom font family
			font: '',
			// show wave
			// ondulación de la ola 
			wave: true,
			// custom text displayed inside the water bubble
			//texto dentro de la burbuja
			txt: '20%',
			// enable water fill animation
			animation: true
			});

			<?php echo '</script'; ?>
>
			<div class="col-md-6">
				<canvas id="linea1" class="center-block"></canvas>
			</div>
			<?php echo '<script'; ?>
>
				var ctx = document.getElementById("linea1");
				var linea1 = new Chart(ctx, {
				type: 'line',
				data: {
					datasets: [{
						label: 'Progreso',
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
				options: { responsive: true,
					scales: {
						xAxes: [{
							type: 'linear',
							position: 'bottom'
						}]
					}
				}
			});
			
			<?php echo '</script'; ?>
>
		</div>
		<hr>
		<div class="container-fluid">
			<div class="col-md-6">
				<canvas id="linea2" class="center-block"></canvas>
			</div>
			<?php echo '<script'; ?>
>
				var ctx = document.getElementById("linea2");
				var linea2 = new Chart(ctx, {
				type: 'line',
				data: {
					datasets: [{
						label: 'Peso',
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
				options: { responsive: true,
					scales: {
						xAxes: [{
							type: 'linear',
							position: 'bottom'
						}]
					}
				}
			});
			
			<?php echo '</script'; ?>
>
		</div>
	</div>
		<!-- /GRAFICOS -->
	</div>
	<!-- OBJETIVOS -->
</main><?php }
}