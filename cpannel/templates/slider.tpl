     {include file='menu.tpl'}
<main>
    
    <div id="options">
        <h1>Galeria de Imagenes</h1>
        <!-- Formulario para subir imagen nueva -->
        <div class="form_upload">
            <form acction="slider.php" method="POST" name="upload" enctype="multipart/form-data">
                <div class="name_box"><p> Nombre: </p> </div> <div class="input_box"><input type="text" name="nombre_imagen" /> </div>
                <div class="name_box"><p> Imagen: </p> </div> <div class="input_box"><input type="file" name="imagen" /></div>
                <div class="boton_form"><input class="enviar" type="submit" value="Enviar" name="uploadimg" /></div>
            </form>
        </div>
        <h2> Slider Actual </h2>
        <div class="preview">
            {FOREACH $slider as $imagen}
                <div class="preview_in">
                    <img src="../{$imagen.DIRECCION}" alt="{$imagen.ID_NAME_SLIDE}"/>
                    <p class="preview_name">{$imagen.ID_NAME_SLIDE}</p>
                </div>
            {/FOREACH}
                <div class="preview_in">
                    <a href="slider.php" class="añadir"><img src="img/icons/add.png" alt=""/></a>
                    
                </div>
        </div>
        
        
        <!-- Vista previa de todas las imagenes subidas al servidor -->
        <h2> Galeria de imagenes para Slider</h2>
        <div class="preview">
           
            {FOREACH $imagenes as $imagen}
                <div class="preview_in">
                    <img src="../{$imagen.DIRECCION}" alt="{$imagen.ID_NAME_SLIDE}"/>
                    <p class="preview_name">{$imagen.ID_NAME_SLIDE}</p>
                </div>
            {/FOREACH}
           
        </div>
    </div>
   
</main>