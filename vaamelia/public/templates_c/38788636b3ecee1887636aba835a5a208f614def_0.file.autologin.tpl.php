<?php
/* Smarty version 3.1.33, created on 2019-06-04 16:30:58
  from 'G:\Programs\x\xampp\htdocs\myProjects\SWTracker\vaamelia\app\views\minis\autologin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf680a28167d6_94677789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38788636b3ecee1887636aba835a5a208f614def' => 
    array (
      0 => 'G:\\Programs\\x\\xampp\\htdocs\\myProjects\\SWTracker\\vaamelia\\app\\views\\minis\\autologin.tpl',
      1 => 1559638614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf680a28167d6_94677789 (Smarty_Internal_Template $_smarty_tpl) {
?><x id = 'autologin'>
<b>Autologowanie</b> 
<?php if (!isset($_smarty_tpl->tpl_vars['autologin']->value) || !$_smarty_tpl->tpl_vars['autologin']->value) {?>
<b>wyłączone:</b> <a href = 'javascript:void(0);' onclick ='go("autologin_on")'>Włącz</a> 
<?php } else { ?>
<b>włączone:</b> <a href = 'javascript:void(0);' onclick ='go("autologin_off")'>Wyłącz</a> 
<?php }?> | 
</x><?php }
}
