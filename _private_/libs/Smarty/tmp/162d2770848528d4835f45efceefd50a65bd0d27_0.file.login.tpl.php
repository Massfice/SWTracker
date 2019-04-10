<?php
/* Smarty version 3.1.33, created on 2019-04-10 20:15:46
  from 'G:\Programs\xampp\htdocs\myProjects\SWTracker\_private_\libs\Smarty\views\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cae32d2a01f62_82154905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '162d2770848528d4835f45efceefd50a65bd0d27' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\SWTracker\\_private_\\libs\\Smarty\\views\\login.tpl',
      1 => 1554920145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cae32d2a01f62_82154905 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
	<head>
		<title>SW Tracker - Logowanie</title>
	</head>
	
	<body>
		<b>Zaloguj sie:</b> 
		<form action = '' method = 'POST'>
			Login: <input type = 'text' name = 'login'> Password: <input type = 'password' name = 'passwd'> 
			<input type = 'submit' value = 'Login'>
			<input type = 'hidden' name = 'action' value = 'login'>
		</form>
		
		
		<?php if (isset($_smarty_tpl->tpl_vars['error']->value) && is_array($_smarty_tpl->tpl_vars['error']->value) && count($_smarty_tpl->tpl_vars['error']->value) > 0) {?>
			
			<b>### BLEDY ###</b><br>
			
			<?php
$__section_errors_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['error']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_errors_0_total = $__section_errors_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_errors'] = new Smarty_Variable(array());
if ($__section_errors_0_total !== 0) {
for ($__section_errors_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_errors']->value['index'] = 0; $__section_errors_0_iteration <= $__section_errors_0_total; $__section_errors_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_errors']->value['index']++){
?>
				- <?php echo $_smarty_tpl->tpl_vars['error']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_errors']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_errors']->value['index'] : null)];?>
 <br>
			<?php
}
}
?>
			
		<?php }?>
		
	</body>
	
	
</html><?php }
}
