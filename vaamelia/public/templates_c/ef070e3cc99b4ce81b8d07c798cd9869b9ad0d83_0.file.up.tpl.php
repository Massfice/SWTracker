<?php
/* Smarty version 3.1.33, created on 2019-05-18 22:26:20
  from 'G:\Programs\xampp\htdocs\myProjects\SWTracker\vaamelia\app\views\UserPanelContainer\up.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce06a6cef90e4_95782596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef070e3cc99b4ce81b8d07c798cd9869b9ad0d83' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\SWTracker\\vaamelia\\app\\views\\UserPanelContainer\\up.tpl',
      1 => 1558211146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:minis/autologin.tpl' => 1,
  ),
),false)) {
function content_5ce06a6cef90e4_95782596 (Smarty_Internal_Template $_smarty_tpl) {
?><center>
<a href = 'javascript:void(0);'} onclick ='go("home_show")'>Strona Powitalna</a> | 
<?php $_smarty_tpl->_subTemplateRender('file:minis/autologin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<a href = 'javascript:void(0);' onclick ='go("authors_show")'>Rozliczenia Fabuł</a> | 
<a href = 'javascript:void(0);' onclick ='go("logout")'>Wyloguj się</a> 
</center><?php }
}
