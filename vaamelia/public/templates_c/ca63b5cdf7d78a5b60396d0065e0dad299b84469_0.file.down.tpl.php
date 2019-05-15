<?php
/* Smarty version 3.1.33, created on 2019-05-13 23:40:22
  from 'G:\Programs\xampp\htdocs\myProjects\SWTracker\vaamelia\app\views\LoginContainer\down.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd9e44668eb24_84024472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca63b5cdf7d78a5b60396d0065e0dad299b84469' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\SWTracker\\vaamelia\\app\\views\\LoginContainer\\down.tpl',
      1 => 1557329937,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd9e44668eb24_84024472 (Smarty_Internal_Template $_smarty_tpl) {
?><center>
<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?><b>### BŁĘDY ###</b><br><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
if ($_smarty_tpl->tpl_vars['msg']->value->type == 2) {
echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
<br><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</center><?php }
}
