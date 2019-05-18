<?php
/* Smarty version 3.1.33, created on 2019-05-18 07:01:15
  from 'G:\Programs\xampp\htdocs\myProjects\SWTracker\vaamelia\app\views\2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cdf919bdda7d3_46212326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd68d9998a818b5d525d1a09b5e842826522c84ba' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\SWTracker\\vaamelia\\app\\views\\2.tpl',
      1 => 1558155631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:3.tpl' => 1,
  ),
),false)) {
function content_5cdf919bdda7d3_46212326 (Smarty_Internal_Template $_smarty_tpl) {
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
