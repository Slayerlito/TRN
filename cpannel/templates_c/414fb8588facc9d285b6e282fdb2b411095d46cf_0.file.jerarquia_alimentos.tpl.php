<?php
/* Smarty version 3.1.30, created on 2017-04-06 08:12:46
  from "C:\wamp\www\TRN\cpannel\templates\jerarquia_alimentos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e5f87ebf8ae4_53567163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '414fb8588facc9d285b6e282fdb2b411095d46cf' => 
    array (
      0 => 'C:\\wamp\\www\\TRN\\cpannel\\templates\\jerarquia_alimentos.tpl',
      1 => 1491466361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_58e5f87ebf8ae4_53567163 (Smarty_Internal_Template $_smarty_tpl) {
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
             </table>
         </div>
     </main><?php }
}
