<?php
/* Smarty version 3.1.33, created on 2019-05-16 12:03:59
  from 'G:\Programs\xampp\htdocs\myProjects\SWTracker\vaamelia\app\views\minis\errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cdd358fdd3d12_74696595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95f05439ccdcb709311d380a2e7ee5463a82d7f2' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\SWTracker\\vaamelia\\app\\views\\minis\\errors.tpl',
      1 => 1558001002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cdd358fdd3d12_74696595 (Smarty_Internal_Template $_smarty_tpl) {
?><x id = 'errors'>
<center>
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
</center>
</x><?php }
}
