<?php
/* Smarty version 3.1.33, created on 2019-08-20 00:11:39
  from 'H:\xampp\htdocs\SWTracker\vaamelia\app\views\MainContainer\up.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5b1e9b7379e7_81549382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8fb10b9db1d3df20b3bd2176ef37209d9f7228c' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWTracker\\vaamelia\\app\\views\\MainContainer\\up.tpl',
      1 => 1566252466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5b1e9b7379e7_81549382 (Smarty_Internal_Template $_smarty_tpl) {
?><center>
	<x id = 'user_info'><?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?><b>Zalogowany/a jako: <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</b> (ID: <?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
)<br><br><?php }?></x>
	<a href ='javascript:void(0);' onclick ='go("hello_show")'>Hello</a> | 
	<x id = 'user_link'><?php if (!isset($_smarty_tpl->tpl_vars['user']->value)) {?><a href ='javascript:void(0);' onclick ='go("login_show")'>Wejdź</a>
	<?php } else { ?><a href = 'javascript:void(0);' onclick ='go("home_show")'>Panel Użytkownika</a><?php }?></x>
</center><?php }
}
