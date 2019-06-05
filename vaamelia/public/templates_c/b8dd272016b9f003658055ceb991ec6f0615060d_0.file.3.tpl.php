<?php
/* Smarty version 3.1.33, created on 2019-06-05 13:02:48
  from 'G:\Programs\x\xampp\htdocs\myProjects\SWTracker\vaamelia\app\views\core\3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf7a1588c9a04_89239058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8dd272016b9f003658055ceb991ec6f0615060d' => 
    array (
      0 => 'G:\\Programs\\x\\xampp\\htdocs\\myProjects\\SWTracker\\vaamelia\\app\\views\\core\\3.tpl',
      1 => 1559638614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf7a1588c9a04_89239058 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['paths']->value[3])) {
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[3]).('/up.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
<br><br>
<br><br>
<br><br>
<?php if (isset($_smarty_tpl->tpl_vars['paths']->value[3])) {
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[3]).('/down.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
}
