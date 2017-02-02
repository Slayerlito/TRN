     {include file='menu.tpl'}
     <main>
         <div id="options">
             <form metod="POST" action="usuarios.php" >
                 <input type="text" name="nombre"/>
                 <select name="value">
                     <option value="0" selected="selected">Todos</option>
                     <option value="1">Clientes</option>
                     <option value="2">Soporte</option>
                     <option value="3">Administrativo</option>
                     <option value="4">Asistente</option>
                     <option value="5">Coach</option>
                     <option value="6">Administrador</option>
                     <option value="7">Master</option>
                 </select>
                 <input type="submit" value="Buscar" name="buscar">
             </form>
             <table>
                 <tr>
                     <th>Nombre</th>
                     <th>Apellidos</th>
                     <th>Email</th>
                     <th>Perfil</th>
                     <th>Actividad</th>
                     <th>Herramientas</th>
                 </tr>
                 {FOREACH $usuarios as $usuario}
                 <tr>
                     <td>{$usuario.NOMBRE}</td>
                     <td>{$usuario.APELLIDOS}</td>
                     <td>{$usuario.EMAIL}</td>
                     <td>
                         {IF $usuario.PERFIL == 1}
                             Cliente
                         {ELSEIF $usuario.PERFIL == 2}
                             Soporte
                         {ELSEIF $usuario.PERFIL == 3}
                             Administrativo
                         {ELSEIF $usuario.PERFIL == 4}
                             Asistente
                         {ELSEIF $usuario.PERFIL == 5}
                             Coach
                         {ELSEIF $usuario.PERFIL == 6}
                             Administrador
                         {ELSEIF $usuario.PERFIL == 7}
                             Master
                         {/IF}
                     </td>
                     <td>{$usuario.ACTIVO}</td>
                     <td></td>
                 </tr>    
                 {/FOREACH}
             </table>
         </div>
     </main>