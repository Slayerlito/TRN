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
            <table>
                <th>
                    <p>Posici&oacute;n</p>
                </th>
                <th>
                    <p>Imagen</p>
                </th>
                <th>
                    <p>Nombre</p>
                </th>
                <th>
                    <p>acciones</p>
                </th>
                {FOREACH $slider as $imagen}
                    <tr>
                        <td>
                            {$imagen.ID_NUM_POS}
                        </td>
                        <td>
                            <img class="miniatura" src="../{$imagen.DIRECCION}" alt="{$imagen.ID_NAME_SLIDE}"/>
                            
                        </td>
                        <td>
                            <p class="preview_name">{$imagen.ID_NAME_SLIDE}</p>
                        </td>
                        <td>
                            <a href="slider.php?boton=subir&id={$imagen.ID_SLIDE}" class="min_botton"><img src="img/icons/flecha_arriba.png" /></a>
                            
                            <a href="slider.php?boton=bajar&id={$imagen.ID_SLIDE}" class="min_botton"><img src="img/icons/flecha_abajo.png" /></a>
                            
                            <a href="slider.php?boton=eliminar&id={$imagen.ID_SLIDE}" class="min_botton"><img src="img/icons/eliminar.png" /></a>
                            
                            
                            
                        </td>
                    </tr>
                {/FOREACH}
                
             
                
                
                
            </table>
           <!-- 
                <div class="preview_in">
                    <a href="slider.php" class="añadir"><img src="img/icons/add.png" alt=""/></a>
                    
                </div>
           
           -->
        </div>
        
        
        <!-- Vista previa de todas las imagenes subidas al servidor -->
        <h2> Galeria de imagenes para Slider</h2>
        <div class="preview">
           
            {FOREACH $imagenes as $imagen}
                {IF $imagen.ID_NUM_POS != 0}
                    <div class="preview_in_disabled ">
                        <img src="../{$imagen.DIRECCION}" alt="{$imagen.ID_NAME_SLIDE}"/>
                        <p class="preview_name">{$imagen.ID_NAME_SLIDE}</p>
                    </div>
                {ELSE}    
                    <div class="preview_in">
                        <img src="../{$imagen.DIRECCION}" alt="{$imagen.ID_NAME_SLIDE}"/>
                        <p class="preview_name">{$imagen.ID_NAME_SLIDE} <a href="slider.php?boton=añadir&id={$imagen.ID_SLIDE}" ><img src="img/icons/flecha_arriba.png"/></a><a href="slider.php?boton=borrar&id={$imagen.ID_SLIDE}" ><img src="img/icons/eliminar.png"/></a></p>
                    </div>
                {/IF}    
            {/FOREACH}
           
        </div>
    </div>
   
</main>