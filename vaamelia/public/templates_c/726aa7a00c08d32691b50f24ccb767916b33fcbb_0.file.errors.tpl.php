<?php
/* Smarty version 3.1.33, created on 2019-08-20 00:11:46
  from 'H:\xampp\htdocs\SWTracker\vaamelia\app\views\minis\errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5b1ea2740ff0_14981244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '726aa7a00c08d32691b50f24ccb767916b33fcbb' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWTracker\\vaamelia\\app\\views\\minis\\errors.tpl',
      1 => 1566252470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5b1ea2740ff0_14981244 (Smarty_Internal_Template $_smarty_tpl) {
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
