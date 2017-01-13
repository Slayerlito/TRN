<!-- COLLAPSE MENU -->
<div id="menu" class="navbar-right collapse navbar-collapse my-navbar-collapse-menu">
	<!-- MENU -->
	<ul class="nav navbar-nav">
		<!-- li oculto para el scroll del nav -->
		<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
		<li><a class="page-scroll" href="#inicio">Inicio</a></li>
		<li><a class="page-scroll" href="#noticias">Noticias</a></li>
		<li><a class="page-scroll" href="#planes">Planes</a></li>
		<li><a class="page-scroll" href="mytrn.php">My TRN</a></li>
                {IF ISSET ($backend) && $backend == 1}
                    <li><a class="page-scroll" href="cpannel/index.php">CPannel</a></li>
                {/IF}
	</ul>
	<!-- MENU -->
</div>
<!-- /COLLAPSE MENU -->