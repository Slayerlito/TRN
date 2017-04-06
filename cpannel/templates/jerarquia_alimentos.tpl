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
             </table>
         </div>
     </main>