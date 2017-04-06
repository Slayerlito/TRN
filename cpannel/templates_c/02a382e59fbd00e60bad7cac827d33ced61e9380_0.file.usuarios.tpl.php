<?php
/* Smarty version 3.1.30, created on 2017-04-06 07:55:14
  from "C:\wamp\www\TRN\cpannel\templates\usuarios.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e5f46222b384_64047960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02a382e59fbd00e60bad7cac827d33ced61e9380' => 
    array (
      0 => 'C:\\wamp\\www\\TRN\\cpannel\\templates\\usuarios.tpl',
      1 => 1491222884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_58e5f46222b384_64047960 (Smarty_Internal_Template $_smarty_tpl) {
?>
     <?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
?>
                 <tr>
                     <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['NOMBRE'];?>
</td>
                     <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['APELLIDOS'];?>
</td>
                     <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['EMAIL'];?>
</td>
                     <td>
                         <?php if ($_smarty_tpl->tpl_vars['usuario']->value['PERFIL'] == 1) {?>
                             Cliente
                         <?php } elseif ($_smarty_tpl->tpl_vars['usuario']->value['PERFIL'] == 2) {?>
                             Soporte
                         <?php } elseif ($_smarty_tpl->tpl_vars['usuario']->value['PERFIL'] == 3) {?>
                             Administrativo
                         <?php } elseif ($_smarty_tpl->tpl_vars['usuario']->value['PERFIL'] == 4) {?>
                             Asistente
                         <?php } elseif ($_smarty_tpl->tpl_vars['usuario']->value['PERFIL'] == 5) {?>
                             Coach
                         <?php } elseif ($_smarty_tpl->tpl_vars['usuario']->value['PERFIL'] == 6) {?>
                             Administrador
                         <?php } elseif ($_smarty_tpl->tpl_vars['usuario']->value['PERFIL'] == 7) {?>
                             Master
                         <?php }?>
                     </td>
                     <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['ACTIVO'];?>
</td>
                     <td></td>
                 </tr>    
                 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

             </table>
         </div>
     </main><?php }
}
