<?php
/* Smarty version 3.1.33, created on 2019-05-08 17:38:58
  from 'G:\Programs\xampp\htdocs\myProjects\SWTracker\amelia\app\views\LoginContainer\up.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd2f812ee35c0_89274919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4ff36b7a8cd3134fbc7aaed15027efb58ad8b99' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\SWTracker\\amelia\\app\\views\\LoginContainer\\up.tpl',
      1 => 1557329899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd2f812ee35c0_89274919 (Smarty_Internal_Template $_smarty_tpl) {
?><center>
<form action = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login' method = 'POST'>
	<b>Zaloguj się:</b>  Login: <input type = 'text' name = 'login'> Hasło: <input type = 'password' name = 'passwd'> 
	<input type = 'submit' value = 'Zaloguj się'>
</form>
</center><?php }
}
