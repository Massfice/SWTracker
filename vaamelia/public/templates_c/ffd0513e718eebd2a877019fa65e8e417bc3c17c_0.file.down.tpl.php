<?php
/* Smarty version 3.1.33, created on 2019-08-20 00:11:40
  from 'H:\xampp\htdocs\SWTracker\vaamelia\app\views\MainContainer\down.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5b1e9c017851_71769869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffd0513e718eebd2a877019fa65e8e417bc3c17c' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWTracker\\vaamelia\\app\\views\\MainContainer\\down.tpl',
      1 => 1566252466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5b1e9c017851_71769869 (Smarty_Internal_Template $_smarty_tpl) {
?><center>Created by Iwaru.</center><br>
<?php if (isset($_smarty_tpl->tpl_vars['templater_babcia']->value) && is_array($_smarty_tpl->tpl_vars['templater_babcia']->value) && count($_smarty_tpl->tpl_vars['templater_babcia']->value) > 0) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['templater_babcia']->value, 'b');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
echo $_smarty_tpl->tpl_vars['b']->value;?>
<br>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else {
echo $_smarty_tpl->tpl_vars['templater_babcia']->value;?>

<?php }
}
}
