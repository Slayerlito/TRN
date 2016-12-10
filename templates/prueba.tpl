<br><br><br><br><br><br><br><br>
<input id="archivos" name="imagenes[]" type="file" multiple=true class="file-loading">

<script>
	$("#archivos").fileinput({
	uploadUrl: "slider.php",
	uploadAsync: false,
	minFileCount: 1,
	maxFileCount: 20,
	showUpload: true,
	showRemove: false
	});
	
</script>














<!--
 <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <script>
     $(function(){
        $("input[name='file']").on("change", function(){
            var formData = new FormData($("#form-slider")[0]);
            var ruta = "modules/main/slider/slider.php";
            $.ajax({
                url: ruta,
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(datos)
                {
                    $("#respuesta").html(datos);
                }
            });
        });
     });
    </script>
<div>
		<img class="fill" src="images/slider/slider1.jpg">
		<img class="fill" src="images/slider/slider2.jpg">
	</div>

<style>
.marco{
	border:2px dashed silver;
	border-radius:10px;
	overflow:auto;
	width:853px;
	margin:auto;
	padding:20px;
}

.imagen {
	border:1px solid black;
	border-radius:5px;
	box-shadow: 5px 5px 10px #888888;
	padding:40px 10px 40px 10px;
	width:140px;
	text-align:center;
	font-size:40px;
	float:left;
	margin:0 1% 0 0;
	text-decoration:none;
	color:black;
	display:block;
}

.imagen:hover {
	border:1px solid silver;
	box-shadow: 5px 5px 10px #ccc;
}

.disabled {
	pointer-events: none;
	cursor: default;
	border:1px solid #eee;
	box-shadow: 5px 5px 10px #eee;
	color: #eee;
}

.enviar{
	padding:10px 0px 10px 0px;
	border-radius:5px;
	width:150px;
	margin-top:20px;
	margin-left:350px;
}

.imagenup {
	border:1px solid black;
	padding:1px;
	width:158px;
	float:left;
	overflow:auto;
	display:none;
	margin:0 1% 0 0;
	box-shadow: 2px 2px 10px #888888;
}

.imagenup img {
	width:158px;
}

.hidden {
	display:none;
}

</style>
<script src="js/jquery-3.1.0.min.js"></script>
<script>
	$(document).ready(function(){
		$("#imagen1").click(function(){
				
				$("#imagen1").css("display", "none");
				$("#imagenup1").css("display", "block");
				$("#imagen2").removeClass("disabled");
		});
		$("#imagen2").click(function(){
			$("#imagen2").css("display", "none");
			$("#imagen3").removeClass("disabled");
		});
		$("#imagen3").click(function(){
			$("#imagen3").css("display", "none");
			$("#imagen4").removeClass("disabled");
		});
		$("#imagen4").click(function(){
			$("#imagen4").css("display", "none");
			$("#imagen5").removeClass("disabled");
		});
		$("#imagen5").click(function(){
			$("#imagen5").css("display", "none");
		});
		
	});
</script>
<div class="marco">
	<form id="form-slider" enctype="multipart/form-data" method="POST">
		
		<label for="img1"><a href="#" class="imagen " id="imagen1">+</a></label>
			<div class="imagenup" id="imagenup1">
				<input type="file" class="hidden" id="img1"/>
				<img src="images/team.jpg"/>
			</div>
		
		<a href="#" class="imagen disabled" id="imagen2">+</a>
			<div class="imagenup" id="imagenup2"></div>
		
		<a href="#" class="imagen disabled" id="imagen3">+</a>
			<div class="imagenup" id="imagenup3"></div>
		
		<a href="#" class="imagen disabled" id="imagen4">+</a>
			<div class="imagenup" id="imagenup4"></div>
		
		<a href="#" class="imagen disabled" id="imagen5">+</a>
			<div class="imagenup" id="imagenup5"></div>
		
		<input type="submit" value="Subir" class="enviar"/>
	</form>
</div>



<div>
	<form id="form-slider" enctype="multipart/form-data" method="POST">
		<input type="file" name="imagen"/>
		<input type="submit" value="Subir imagen"/>
	</form>
	 <div id="respuesta"></div>
</div>



-->





