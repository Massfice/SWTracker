<?php
/* Smarty version 3.1.33, created on 2019-04-12 00:36:47
  from 'G:\Programs\xampp\htdocs\myProjects\SWTracker\_private_\libs\Smarty\views\0\1\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cafc17f02fb45_71357545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e64f157b4d189be1cd179941386dce570b9a96a' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\SWTracker\\_private_\\libs\\Smarty\\views\\0\\1\\register.tpl',
      1 => 1555022202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cafc17f02fb45_71357545 (Smarty_Internal_Template $_smarty_tpl) {
if (!isset($_smarty_tpl->tpl_vars['tpl']->value[1]['params']['info']) || !is_array($_smarty_tpl->tpl_vars['tpl']->value[1]['params']['info']) || !(count($_smarty_tpl->tpl_vars['tpl']->value[1]['params']['info']) > 0)) {?>
<form action = '' method = 'POST'>
	<b>Zarejestruj sie:</b>  Login: <input type = 'text' name = 'login'> Password: <input type = 'password' name = 'passwd'> Retype Password: <input type = 'password' name = 'repasswd'> 
	<input type = 'submit' value = 'Register'>
	<input type = 'hidden' name = 'action' value = 'register'> 
	Masz konto? <a href = '<?php echo $_smarty_tpl->tpl_vars['MAIN_URL']->value;?>
login'>Zaloguj sie</a>
</form>
<?php }?>
		
		
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
			
<?php }?>
		
<?php if (isset($_smarty_tpl->tpl_vars['tpl']->value[1]['params']['info']) && is_array($_smarty_tpl->tpl_vars['tpl']->value[1]['params']['info']) && count($_smarty_tpl->tpl_vars['tpl']->value[1]['params']['info']) > 0) {?>
	<?php
$__section_infos_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['tpl']->value[1]['params']['info']) ? count($_loop) : max(0, (int) $_loop));
$__section_infos_1_total = $__section_infos_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_infos'] = new Smarty_Variable(array());
if ($__section_infos_1_total !== 0) {
for ($__section_infos_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_infos']->value['index'] = 0; $__section_infos_1_iteration <= $__section_infos_1_total; $__section_infos_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_infos']->value['index']++){
?>
		<b><?php echo $_smarty_tpl->tpl_vars['tpl']->value[1]['params']['info'][(isset($_smarty_tpl->tpl_vars['__smarty_section_infos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_infos']->value['index'] : null)];?>
</b> <br>
	<?php
}
}
?>
	<br><a href = '<?php echo $_smarty_tpl->tpl_vars['MAIN_URL']->value;?>
'>Powrot do strony glownej</a>
<?php }
}
}
