<section id="planes" class="container text-center">
	<h3>NUESTROS PLANES PARA TI</h3>
	<div class="container-fluid">
		{foreach from=$planesFilaCompleta item=$fila}			
		{foreach from=$fila->getLista() item=$plan}
			<div class="col-md-4">
				<div class="planes">
						<h4>{$plan->getNombre()}</h4>
						<ul class="list-unstyled">
						<li> {$plan->getChat()} Chat</li>
						<li> {$plan->getEntrenamiento()} Entrenamiento</li>
						<li> {$plan->getNutricion()} Nutrición</li>
						<li> {$plan->getSeguimiento()} Sesiones seguimiento</li>
						</ul>
				</div>
			</div>
		{/foreach}
	</div>
	<div class="container-fluid">
		{/foreach}
		{foreach from=$planesUltimaFila item=$planUF}
			{if $modulo == 1 }
				<div class= "col-md-12">
			{else}
				<div class= "col-md-6">
			{/if}
					<div class="planes">
						<h4>{$planUF->getNombre()}</h4>
						<ul class="list-unstyled">
							<li> {$planUF->getChat()} Chat</li>
							<li> {$planUF->getEntrenamiento()} Entrenamiento</li>
							<li> {$planUF->getNutricion()} Nutrición</li>
							<li> {$planUF->getSeguimiento()} Sesiones seguimiento</li>
						</ul>
					</div>
				</div>
		{/foreach}
	</div>
</section>