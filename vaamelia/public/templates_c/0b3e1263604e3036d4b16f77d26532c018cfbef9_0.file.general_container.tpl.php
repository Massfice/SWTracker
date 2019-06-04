<?php
/* Smarty version 3.1.33, created on 2019-06-04 15:50:30
  from 'G:\Programs\x\xampp\htdocs\myProjects\SWTracker\vaamelia\app\views\general_container.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf67726668288_04274245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b3e1263604e3036d4b16f77d26532c018cfbef9' => 
    array (
      0 => 'G:\\Programs\\x\\xampp\\htdocs\\myProjects\\SWTracker\\vaamelia\\app\\views\\general_container.tpl',
      1 => 1559638614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf67726668288_04274245 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['ajax_info']->value;?>

<input type = 'hidden' value ='<?php if (isset($_smarty_tpl->tpl_vars['vars']->value)) {
echo $_smarty_tpl->tpl_vars['vars']->value;
}?>' id = 'data' style = 'display: inline;'>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['container']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
