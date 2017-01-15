     {include file='menu.tpl'}
<main>
    
    <!-- Opciones del Slider -->
    {IF $slider eq "opciones"}
    <div id="options">
        <a href="slider.php?slider=imagenes"><img src="img/icons/img_slider.png" title="Ver Imagenes" alt="Ver Imagenes"></a>
        <a href="slider.php?slider=configuracion"><img src="img/icons/ajustes.png" title="Modificar Slider" alt="Modificar Slider"></a>
    </div>
    
    <!-- Imagenes del Slider -->
    {ELSEIF $slider eq "imagenes"}
    <div id="options">
        <h1>Galeria de Imagenes</h1>
        <!-- Formulario para subir imagen nueva -->
        <div class="form_upload">
            <form acction="slider.php" method="POST" name="upload" enctype=”multipart/form-data">
                <input type="file" name="imagen" />
                <input type="submit" value="Subir Imagen" name="uploadimg" />
            </form>
        </div>
        <!-- Vista previa de todas las imagenes subidas al servidor -->
        <div class="preview">
            
            {FOREACH $imagenes as $imagen}
                <img src="../images/slider/{$imagen}" alt="{$imagen}">
            {/FOREACH}
        </div>
    </div>
    
    <!-- Configuracion del Slider -->
    {ELSEIF $slider eq "configuracion"}
    <div id="options">
        <div class="preview">
            
            {FOREACH $imagenes as $imagen}
                <img src="../images/slider/{$imagen}" alt="{$imagen}">
            {/FOREACH}
        </div>
    </div>
    {/IF}
</main>