<?php
/* Smarty version 3.1.33, created on 2019-04-11 16:49:38
  from 'G:\Programs\xampp\htdocs\myProjects\SWTracker\_private_\libs\Smarty\views\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5caf5402c17272_43905611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bf6c4cc01453a7e504b12662a884bc0ec26c7f2' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\SWTracker\\_private_\\libs\\Smarty\\views\\register.tpl',
      1 => 1554994175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5caf5402c17272_43905611 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
	<head>
		<title>SW Tracker - Logowanie</title>
		
	</head>
	
	<body>
		<?php if (!isset($_smarty_tpl->tpl_vars['info']->value) || !is_array($_smarty_tpl->tpl_vars['info']->value) || !(count($_smarty_tpl->tpl_vars['info']->value) > 0)) {?>
		<form action = '' method = 'POST'>
			<b>Zarejestruj sie:</b>  Login: <input type = 'text' name = 'login'> Password: <input type = 'password' name = 'passwd'> Retype Password: <input type = 'password' name = 'repasswd'> 
			<input type = 'submit' value = 'Register'>
			<input type = 'hidden' name = 'action' value = 'register'> 
			Masz konto? <a href = '<?php echo $_smarty_tpl->tpl_vars['MAIN_URL']->value;?>
login'>Zaloguj sie</a>
		</form>
		<?php }?>
		
		
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
		
		<?php if (isset($_smarty_tpl->tpl_vars['info']->value) && is_array($_smarty_tpl->tpl_vars['info']->value) && count($_smarty_tpl->tpl_vars['info']->value) > 0) {?>
			<?php
$__section_infos_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['info']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_infos_1_total = $__section_infos_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_infos'] = new Smarty_Variable(array());
if ($__section_infos_1_total !== 0) {
for ($__section_infos_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_infos']->value['index'] = 0; $__section_infos_1_iteration <= $__section_infos_1_total; $__section_infos_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_infos']->value['index']++){
?>
				<b><?php echo $_smarty_tpl->tpl_vars['info']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_infos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_infos']->value['index'] : null)];?>
</b> <br>
			<?php
}
}
?>
			<br><a href = '<?php echo $_smarty_tpl->tpl_vars['MAIN_URL']->value;?>
'>Powrot do strony glownej</a>
		<?php }?>
		
	</body>
	
	
</html><?php }
}
