<?php
/* Smarty version 3.1.33, created on 2019-05-29 14:41:23
  from 'G:\Programs\xampp\htdocs\myProjects\SWTracker\vaamelia\app\views\general_container.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cee7df3a45e58_35150412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fbb41a189ef8ad535f08496228a998d55f2ff3d' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\SWTracker\\vaamelia\\app\\views\\general_container.tpl',
      1 => 1559133682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cee7df3a45e58_35150412 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['ajax_info']->value;?>

<input type = 'hidden' value ='<?php if (isset($_smarty_tpl->tpl_vars['vars']->value)) {
echo $_smarty_tpl->tpl_vars['vars']->value;
}?>' id = 'data' style = 'display: inline;'>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['container']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
