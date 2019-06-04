<?php
/* Smarty version 3.1.33, created on 2019-06-04 15:50:30
  from 'G:\Programs\x\xampp\htdocs\myProjects\SWTracker\vaamelia\app\views\2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf677266fb090_31668753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ee122128488bea554b18b30c1b12afc5f39d4e3' => 
    array (
      0 => 'G:\\Programs\\x\\xampp\\htdocs\\myProjects\\SWTracker\\vaamelia\\app\\views\\2.tpl',
      1 => 1559638614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:3.tpl' => 1,
  ),
),false)) {
function content_5cf677266fb090_31668753 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['paths']->value[2])) {
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[2]).('/up.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
<br><br>
<x id = '3'>
<?php $_smarty_tpl->_subTemplateRender('file:3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</x>
<br><br>
<?php if (isset($_smarty_tpl->tpl_vars['paths']->value[2])) {
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[2]).('/down.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
}
