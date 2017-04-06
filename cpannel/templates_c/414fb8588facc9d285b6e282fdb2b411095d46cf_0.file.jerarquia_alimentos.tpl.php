<?php
/* Smarty version 3.1.30, created on 2017-04-06 11:22:59
  from "C:\wamp\www\TRN\cpannel\templates\jerarquia_alimentos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e6251326ceb6_06632252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '414fb8588facc9d285b6e282fdb2b411095d46cf' => 
    array (
      0 => 'C:\\wamp\\www\\TRN\\cpannel\\templates\\jerarquia_alimentos.tpl',
      1 => 1491477776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_58e6251326ceb6_06632252 (Smarty_Internal_Template $_smarty_tpl) {
?>
     <?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

     <main>
         <div id="options">
			<?php if ($_smarty_tpl->tpl_vars['jerarquiaAlimentos']->value != null) {?>
				<p>Jerarqu&iacute;a de Alimentos</p>
				<ol>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jerarquiaAlimentos']->value->getHijos(), 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
					<li><?php echo $_smarty_tpl->tpl_vars['item']->value->getDesc();?>
</li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</ol> 
			<?php }?>
         </div>
     </main><?php }
}
