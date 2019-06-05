<?php
/* Smarty version 3.1.33, created on 2019-06-05 13:02:48
  from 'G:\Programs\x\xampp\htdocs\myProjects\SWTracker\vaamelia\app\views\core\2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf7a1588ba004_56574575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e583a3341ce93279813596b315123d3ca2fde34' => 
    array (
      0 => 'G:\\Programs\\x\\xampp\\htdocs\\myProjects\\SWTracker\\vaamelia\\app\\views\\core\\2.tpl',
      1 => 1559732563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:core/3.tpl' => 1,
  ),
),false)) {
function content_5cf7a1588ba004_56574575 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['paths']->value[2])) {
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[2]).('/up.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
<br><br>
<x id = '3'>
<?php $_smarty_tpl->_subTemplateRender('file:core/3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</x>
<br><br>
<?php if (isset($_smarty_tpl->tpl_vars['paths']->value[2])) {
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[2]).('/down.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
}
