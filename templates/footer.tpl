<footer style="color: white; background-color: black;" >
<div class="container-fluid">
	<!-- REDES SOCIALES -->
	<div class="social text-center col-md-6">
		<a href="http://www.twitter.es" class="btn btn-sm btn-social-icon btn-twitter" target="_blank"><span class="fa fa-twitter"></span></a> &nbsp;
		<a href="http://www.facebook.es" class="btn btn-sm btn-social-icon btn-facebook" target="_blank"><span class="fa fa-facebook"></span></a> &nbsp;
		<a href="https://www.instagram.com/" class="btn btn-sm btn-social-icon btn-instagram" target="_blank"><span class="fa fa-instagram"></span></a>
	</div>
	<!-- REDES SOCIALES -->
	
	<div class="text-center col-md-6">
		<ul class="nav">
			<li>F.A.Q.</li>
			<li>Contacto</li>
			<li>Mapa del sitio</li>
		</ul>
	</div>
</div>
<div class="container">
	<hr>
	<p class="text-center">Copyright &copy; TRN 2016 &#8482; </p>
</div>
</footer>

<!-- Scripts -->

 <!-- JS Bootstrap-->
<script src="bootstrap/js/bootstrap.min.js"></script>

<!-- Scrolling Nav JavaScript -->
<script src="bootstrap/js/jquery.easing.min.js"></script>
<script src="bootstrap/js/scrolling-nav.js"></script>


<!-- JS carousel -->
<script>
$('.carousel').carousel();
</script>



<!-- preuba boton cerrar abrir -->

<script>
$('#btn-cerrar').click(cerrarMenu);

function cerrarMenu(){
	$('#menuizq').addClass('hidden');
	$('#zonaobjetivos').removeClass("col-md-9");
	$('#zonaobjetivos').addClass("col-md-12");
}
</script>

</body>
</html>