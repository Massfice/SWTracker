<?php
/* Smarty version 3.1.33, created on 2019-08-20 00:11:39
  from 'H:\xampp\htdocs\SWTracker\vaamelia\app\views\core\0.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5b1e9b5eb913_44120346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5769aa32a32bf28030a874f6a760b3f366fb1913' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWTracker\\vaamelia\\app\\views\\core\\0.tpl',
      1 => 1566252468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:core/1.tpl' => 1,
  ),
),false)) {
function content_5d5b1e9b5eb913_44120346 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['paths']->value[0])) {
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[0]).('/up.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
<br><br>
<x id = '1'>
<?php $_smarty_tpl->_subTemplateRender('file:core/1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</x>
<br><br>
<?php if (isset($_smarty_tpl->tpl_vars['paths']->value[0])) {
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[0]).('/down.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
}
