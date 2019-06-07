<?php
/* Smarty version 3.1.33, created on 2019-06-07 12:52:24
  from 'G:\Programs\x\xampp\htdocs\myProjects\SWTracker\vaamelia\app\views\MainContainer\down.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfa41e8ab6a64_99887570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7adc252a5e7aef8f2ecae5967872a57e9b269df' => 
    array (
      0 => 'G:\\Programs\\x\\xampp\\htdocs\\myProjects\\SWTracker\\vaamelia\\app\\views\\MainContainer\\down.tpl',
      1 => 1559904738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfa41e8ab6a64_99887570 (Smarty_Internal_Template $_smarty_tpl) {
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
} else { ?>
Nie ma.
<?php }
}
}
