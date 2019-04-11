<?php
/* Smarty version 3.1.33, created on 2019-04-11 23:58:58
  from 'G:\Programs\xampp\htdocs\myProjects\SWTracker\_private_\libs\Smarty\views\0\1\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cafb8a2d2c9b8_74269889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10eca1ed40579cb1e4181878207976c7d19a0d5b' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\SWTracker\\_private_\\libs\\Smarty\\views\\0\\1\\login.tpl',
      1 => 1555019937,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cafb8a2d2c9b8_74269889 (Smarty_Internal_Template $_smarty_tpl) {
?><form action = '' method = 'POST'>
	<b>Zaloguj sie:</b>  Login: <input type = 'text' name = 'login'> Password: <input type = 'password' name = 'passwd'> 
	<input type = 'submit' value = 'Login'>
	<input type = 'hidden' name = 'action' value = 'login'> 
	Nie masz jeszcze konta? <a href = '<?php echo $_smarty_tpl->tpl_vars['MAIN_URL']->value;?>
register'>Zarejestruj sie</a>
</form>
		
		
<?php if (isset($_smarty_tpl->tpl_vars['tpl']->value[1]['params']['error']) && is_array($_smarty_tpl->tpl_vars['tpl']->value[1]['params']['error']) && count($_smarty_tpl->tpl_vars['tpl']->value[1]['params']['error']) > 0) {?>
			
	<b>### BLEDY ###</b><br>
			
	<?php
$__section_errors_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['tpl']->value[1]['params']['error']) ? count($_loop) : max(0, (int) $_loop));
$__section_errors_0_total = $__section_errors_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_errors'] = new Smarty_Variable(array());
if ($__section_errors_0_total !== 0) {
for ($__section_errors_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_errors']->value['index'] = 0; $__section_errors_0_iteration <= $__section_errors_0_total; $__section_errors_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_errors']->value['index']++){
?>
		- <?php echo $_smarty_tpl->tpl_vars['tpl']->value[1]['params']['error'][(isset($_smarty_tpl->tpl_vars['__smarty_section_errors']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_errors']->value['index'] : null)];?>
 <br>
	<?php
}
}
?>
			
<?php }
}
}
