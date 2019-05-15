<?php
/* Smarty version 3.1.33, created on 2019-05-08 23:39:42
  from 'G:\Programs\xampp\htdocs\myProjects\SWTracker\amelia\app\views\RegisterContainer\up.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd34c9ed5fcb4_70165836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65652fbaf8fef2bd4bf3febb44dfdd1dbc08b6e8' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\SWTracker\\amelia\\app\\views\\RegisterContainer\\up.tpl',
      1 => 1557351319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd34c9ed5fcb4_70165836 (Smarty_Internal_Template $_smarty_tpl) {
?><center>
<form action = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register' method = 'POST'>
	<b>Zarejestruj się:</b>  Login: <input type = 'text' name = 'login'> Hasło: <input type = 'password' name = 'passwd'> Powtórz Hasło: <input type = 'password' name = 'repasswd'> 
	<input type = 'submit' value = 'Zarejestruj się'>
</form>
</center><?php }
}
