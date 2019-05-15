<?php
/* Smarty version 3.1.33, created on 2019-05-15 19:49:06
  from 'G:\Programs\xampp\htdocs\myProjects\SWTracker\vaamelia\app\views\MainContainer\up.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cdc51127144b5_85867779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f21180582823584ab532af955dadb110378cd09' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\SWTracker\\vaamelia\\app\\views\\MainContainer\\up.tpl',
      1 => 1557942398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cdc51127144b5_85867779 (Smarty_Internal_Template $_smarty_tpl) {
?><center>
	<?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?><b>Zalogowany/a jako: <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</b> (ID: <?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
)<br><br><?php }?>
	<a href ='javascript:void(0);' onclick ='go("hello_show")'>Hello</a> | 
	<?php if (!isset($_smarty_tpl->tpl_vars['user']->value)) {?><a href ='javascript:void(0);' onclick ='go("login_show")'>Wejdź</a>
	<?php } else { ?><a href = 'javascript:void(0);' onclick ='go("home_show")'>Panel Użytkownika</a><?php }?>
</center><?php }
}
