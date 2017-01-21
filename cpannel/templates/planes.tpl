{include file='menu.tpl'}
<main>
    {IF ISSET($exito)}
        {IF $exito == true}
            <div class="mensaje_exito"> 
                <p>El plan {$plan} ha sido actualizado correctamente</p>
            </div>
        {ELSE}
            <div class="mensaje_error"> 
                <p>El plan {$plan} no ha sido actualizado correctamente</p>
            </div>
        {/IF}    
    {/IF}    
    <div id="options">
        {IF $opcion eq "modificar"} <!-- Formulario para modificar un plan -->
            
            <div class="form">
                <form method="post" action="planes.php?id={$planes.ID_PLAN}">
                    <div class="name_box">
                        <p>Plan:</p>
                    </div>
                    <div class="input_box">
                        <input type="text" name="plan" value="{$planes.NOMBRE}"/> 
                    </div>
                    <div class="name_box">
                        <p>Seguimientos:</p>
                    </div>
                    <div class="input_box">
                        <select name="seguimientos">
                            <option value="{$planes.SEGUIMIENTO_SEM}" selected="selected">{$planes.SEGUIMIENTO_SEM}</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                    <div class="name_box">
                        <p>Chat:</p>
                    </div>
                    <div class="input_box">
                        <select name="chat"> 
                            <option value="{$planes.CHAT}" selected="selected">{IF $planes.CHAT eq 1}SI{ELSE}NO{/IF}</option>
                            <option value="1">SI</option>
                            <option value="0">NO</option>
                        </select>
                    </div>
                    <div class="name_box">
                        <p>Entrenamiento:</p>
                    </div>
                    <div class="input_box">
                        <select name="entrenamiento"> 
                            <option value="{$planes.ENTRENAMIENTO}" selected="selected">{IF $planes.ENTRENAMIENTO eq 1}SI{ELSE}NO{/IF}</option>
                            <option value="1">SI</option>
                            <option value="0">NO</option>
                        </select>
                    </div>
                    <div class="name_box">
                        <p>Nutrici&oacute;n:</p>
                    </div>
                    <div class="input_box">
                        <select name="nutricion"> 
                            <option value="{$planes.NUTRICION}" selected="selected">{IF $planes.NUTRICION eq 1}SI{ELSE}NO{/IF}</option>
                            <option value="1">SI</option>
                            <option value="0">NO</option>
                        </select>
                    </div>
                    <div class="name_box">
                        <p>Precio:</p>
                    </div>
                    <div class="input_box">
                        <input type="text" name="precio" value="{$planes.PRECIO}"/> 
                    </div>
                    <div class="name_box">
                        <p>Visible:</p>
                    </div>
                    <div class="input_box">
                        <select name="visible"> 
                            <option value="{$planes.VISIBLE}" selected="selected">{IF $planes.VISIBLE eq 1}SI{ELSE}NO{/IF}</option>
                            <option value="1">SI</option>
                            <option value="0">NO</option>
                        </select>
                    </div>
                    <div class="boton_form">
                        <input class="enviar" type="submit" name="modificar" value="Modificar"/>
                    </div>

                </form>
            </div>  
        {ELSE}
            <table class="listado">
                <tr>
                    <th>Opciones</th>
                    <th>Nº</th>
                    <th>Plan</th>
                    <th>Seguimientos</th>
                    <th>Chat</th>
                    <th>Entrenamiento</th>
                    <th>Nutrici&oacute;n</th>
                    <th>Precio</th>
                    <th>Visible</th>
                </tr>
                {FOREACH $planes as $plan}
                <tr class="{cycle values="par,impar"}">
                    {FOREACH $plan as $key => $pla}

                        {IF $key eq "CHAT"}
                            {IF $pla eq "1"}
                                <td>SI</td>
                            {ELSE}
                                <td>NO</td>
                            {/IF}    
                        {ELSEIF $key eq "VISIBLE"} 
                            {IF $pla eq "1"}
                                <td>SI</td>
                            {ELSE}
                                <td>NO</td>
                            {/IF}      
                        {ELSEIF $key eq "NUTRICION"} 
                            {IF $pla eq "1"}
                                <td>SI</td>
                            {ELSE}
                                <td>NO</td>
                            {/IF}      
                        {ELSEIF $key eq "ENTRENAMIENTO"} 
                            {IF $pla eq "1"}
                                <td>SI</td>
                            {ELSE}
                                <td>NO</td>
                            {/IF}  
                        {ELSEIF $key eq "ID_PLAN"}
                            <td>
                                <a href="planes.php?opcion=eliminar&id={$pla}"><img src="img/icons/eliminar.png" alt="Eliminar" title="Eliminar"/></a>
                                <a href="planes.php?opcion=modificar&id={$pla}"><img src="img/icons/modificar.png" alt="Modificar" title="Modificar"/></a>
                            </td>
                            <td>{$pla}</td>  
                        {ELSE}   
                            <td>{$pla}</td>  
                        {/IF}    

                    {/FOREACH}
                    </div>   
                </tr>
            {/FOREACH}  
                <tr>
                <form method="post" action="planes.php?opcion=nuevo">
                    <td>
                        <input type="image" src="img/icons/add_icon.png" class="crear" value="" title="Añadir" alt="Añadir"/>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        <input type="text" name="plan"/> 
                    </td>
                    <td>
                        <select name="seguimientos">
                            <option value="0" selected="selected">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </td>
                    <td>
                        <select name="chat"> 
                            <option value="1">SI</option>
                            <option value="0" selected="selected">NO</option>
                        </select>
                    </td>
                    <td>
                        <select name="entrenamiento"> 
                            <option value="1">SI</option>
                            <option value="0" selected="selected">NO</option>
                        </select>
                    </td>
                    <td>
                        <select name="nutricion"> 
                            <option value="1">SI</option>
                            <option value="0" selected="selected">NO</option>
                        </select>
                    </td>
                    <td>
                        <input type="text" name="precio"/> 
                    </td>
                    <td>
                        <select name="visible"> 
                            <option value="1">SI</option>
                            <option value="0" selected="selected">NO</option>
                        </select>
                    </td>
                </form>
                </tr>
            </table>  
        {/IF}
    </div>
</main>