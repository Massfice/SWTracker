<?php
/* Smarty version 3.1.33, created on 2019-05-18 01:20:24
  from 'G:\Programs\xampp\htdocs\myProjects\SWTracker\vaamelia\app\views\1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cdf41b8492a96_07146450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a965b66fbc5ed9ac3c8516a8e4390c97d0e22f40' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\SWTracker\\vaamelia\\app\\views\\1.tpl',
      1 => 1558135222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:2.tpl' => 1,
  ),
),false)) {
function content_5cdf41b8492a96_07146450 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['paths']->value[1])) {
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[1]).('/up.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
<br><br>
<x id = '2'>
<?php $_smarty_tpl->_subTemplateRender('file:2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</x>
<br><br>
<?php if (isset($_smarty_tpl->tpl_vars['paths']->value[1])) {
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[1]).('/down.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
}
