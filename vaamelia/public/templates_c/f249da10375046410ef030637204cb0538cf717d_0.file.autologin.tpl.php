<?php
/* Smarty version 3.1.33, created on 2019-05-15 19:49:24
  from 'G:\Programs\xampp\htdocs\myProjects\SWTracker\vaamelia\app\views\minis\autologin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cdc512488b6e4_45584600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f249da10375046410ef030637204cb0538cf717d' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\SWTracker\\vaamelia\\app\\views\\minis\\autologin.tpl',
      1 => 1557941984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cdc512488b6e4_45584600 (Smarty_Internal_Template $_smarty_tpl) {
?><x id = 'autologin'>
<b>Autologowanie</b> 
<?php if (!isset($_smarty_tpl->tpl_vars['autologin']->value) || !$_smarty_tpl->tpl_vars['autologin']->value) {?>
<b>wyłączone:</b> <a href = 'javascript:void(0);' onclick ='go("autologin_on")'>Włącz</a> 
<?php } else { ?>
<b>włączone:</b> <a href = 'javascript:void(0);' onclick ='go("autologin_off")'>Wyłącz</a> 
<?php }?> | 
</x><?php }
}
