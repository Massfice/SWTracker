<?php
/* Smarty version 3.1.33, created on 2019-06-05 17:45:15
  from 'G:\Programs\x\xampp\htdocs\myProjects\SWTracker\vaamelia\app\views\MainContainer\up.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf7e38b16f7c5_58250723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e34a387761af671183e91f467d93767fd254666a' => 
    array (
      0 => 'G:\\Programs\\x\\xampp\\htdocs\\myProjects\\SWTracker\\vaamelia\\app\\views\\MainContainer\\up.tpl',
      1 => 1559749512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf7e38b16f7c5_58250723 (Smarty_Internal_Template $_smarty_tpl) {
?><center>
	<x id = 'user_info'><?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?><b>Zalogowany/a jako: <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</b> (ID: <?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
)<br><br><?php }?></x>
	<a href ='javascript:void(0);' onclick ='go("hello_show")'>Hello</a> | 
	<x id = 'user_link'><?php if (!isset($_smarty_tpl->tpl_vars['user']->value)) {?><a href ='javascript:void(0);' onclick ='go("login_show")'>Wejdź</a>
	<?php } else { ?><a href = 'javascript:void(0);' onclick ='go("home_show")'>Panel Użytkownika</a><?php }?></x>
</center><?php }
}
