<?php
/* Smarty version 3.1.33, created on 2019-05-18 01:18:15
  from 'G:\Programs\xampp\htdocs\myProjects\SWTracker\vaamelia\app\views\0.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cdf41371fdd13_29206106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa58bead8dad4317b21b4933be1ba1b060c5fb4a' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\SWTracker\\vaamelia\\app\\views\\0.tpl',
      1 => 1558135092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:1.tpl' => 1,
  ),
),false)) {
function content_5cdf41371fdd13_29206106 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['paths']->value[0])) {
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[0]).('/up.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
<br><br>
<x id = '1'>
<?php $_smarty_tpl->_subTemplateRender('file:1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</x>
<br><br>
<?php if (isset($_smarty_tpl->tpl_vars['paths']->value[0])) {
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[0]).('/down.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
}
