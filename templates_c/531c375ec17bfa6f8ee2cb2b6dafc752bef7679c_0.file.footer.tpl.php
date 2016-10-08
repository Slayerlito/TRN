<?php
/* Smarty version 3.1.30, created on 2016-10-08 04:47:00
  from "C:\wamp64\www\TRN\templates\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57f87a4432ef79_08897596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '531c375ec17bfa6f8ee2cb2b6dafc752bef7679c' => 
    array (
      0 => 'C:\\wamp64\\www\\TRN\\templates\\footer.tpl',
      1 => 1475867178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f87a4432ef79_08897596 (Smarty_Internal_Template $_smarty_tpl) {
?>
<footer class="container-fluid">
<div class="container">
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
<?php echo '<script'; ?>
 src="bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>

<!-- Scrolling Nav JavaScript -->
<?php echo '<script'; ?>
 src="bootstrap/js/jquery.easing.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="bootstrap/js/scrolling-nav.js"><?php echo '</script'; ?>
>

<!-- Activate Carousel Javascript -->
<?php echo '<script'; ?>
>
$('.carousel').carousel();
<?php echo '</script'; ?>
>

<!-- script mostrar ocultar -->
<?php echo '<script'; ?>
 type="text/javascript">
function ocultar(){
	document.getElementById('menuizq').style.display = 'none';
	document.getElementById('btn-cerrar').style.display = 'inline';
	document.getElementById('btn-abrir').style.display = 'none';
}

function mostrar(){
	document.getElementById('menuizq').style.display = 'block';
	document.getElementById('btn-abrir').style.display = 'inline';
	document.getElementById('btn-cerrar').style.display = 'none';
}
<?php echo '</script'; ?>
>




</body>
</html><?php }
}
