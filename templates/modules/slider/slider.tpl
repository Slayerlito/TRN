<div id="myCarousel" class="carousel slide carousel-fade">
	<!-- Indicators -->
	<ol class="carousel-indicators">
            {FOREACH $imagenes as $imagen }
                {IF $imagen.ID_NUM_POS eq 1}
                   <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                {ELSE}
                   <li data-target="#myCarousel" data-slide-to="{$imagen.ID_NUM_POS}"></li>
                {/IF}
            {/FOREACH}  
	</ol>
	<!-- Wrapper for Slides -->
	<div class="carousel-inner">
            {FOREACH $imagenes as $imagen }
                {IF $imagen.ID_NUM_POS eq 1}
                    <div class="item active">
			<img class="fill" src="{$imagen.DIRECCION}">
                    </div>
                {ELSE}
                    <div class="item">
			<img class="fill" src="{$imagen.DIRECCION}">
		</div>
                {/IF}
            {/FOREACH}  
	</div>
	<!-- Controls -->
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
	</a>
	<!-- / Controls -->
</div>