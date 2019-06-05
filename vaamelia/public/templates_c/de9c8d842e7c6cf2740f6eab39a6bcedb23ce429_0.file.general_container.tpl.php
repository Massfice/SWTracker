<?php
/* Smarty version 3.1.33, created on 2019-06-05 13:00:24
  from 'G:\Programs\x\xampp\htdocs\myProjects\SWTracker\vaamelia\app\views\core\general_container.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf7a0c87f5c10_61233602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de9c8d842e7c6cf2740f6eab39a6bcedb23ce429' => 
    array (
      0 => 'G:\\Programs\\x\\xampp\\htdocs\\myProjects\\SWTracker\\vaamelia\\app\\views\\core\\general_container.tpl',
      1 => 1559732202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:core/data.tpl' => 1,
  ),
),false)) {
function content_5cf7a0c87f5c10_61233602 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['ajax_info']->value;?>

<?php $_smarty_tpl->_subTemplateRender('file:core/data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['container']->value != 'core/data.tpl') {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['container']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
<x id = 'end'></x><?php }
}
