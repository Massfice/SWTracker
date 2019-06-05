<?php
/* Smarty version 3.1.33, created on 2019-06-05 13:02:48
  from 'G:\Programs\x\xampp\htdocs\myProjects\SWTracker\vaamelia\app\views\core\0.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf7a15888b1f8_80587409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a7e98d6df64ec978fb0be61caa4ad53cd47cb41' => 
    array (
      0 => 'G:\\Programs\\x\\xampp\\htdocs\\myProjects\\SWTracker\\vaamelia\\app\\views\\core\\0.tpl',
      1 => 1559732565,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:core/1.tpl' => 1,
  ),
),false)) {
function content_5cf7a15888b1f8_80587409 (Smarty_Internal_Template $_smarty_tpl) {
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
