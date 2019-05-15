<?php
/* Smarty version 3.1.33, created on 2019-05-13 23:40:23
  from 'G:\Programs\xampp\htdocs\myProjects\SWTracker\vaamelia\app\views\RegisterContainer\down.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd9e4477499f0_20407727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4f0e8fbf736a538c5aea53c80878370ee950f86' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\SWTracker\\vaamelia\\app\\views\\RegisterContainer\\down.tpl',
      1 => 1557351320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd9e4477499f0_20407727 (Smarty_Internal_Template $_smarty_tpl) {
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
