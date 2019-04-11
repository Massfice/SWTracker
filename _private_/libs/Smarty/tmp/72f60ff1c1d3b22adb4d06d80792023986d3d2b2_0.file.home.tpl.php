<?php
/* Smarty version 3.1.33, created on 2019-04-11 16:35:53
  from 'G:\Programs\xampp\htdocs\myProjects\SWTracker\_private_\libs\Smarty\views\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5caf50c9912c26_09757331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72f60ff1c1d3b22adb4d06d80792023986d3d2b2' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\SWTracker\\_private_\\libs\\Smarty\\views\\home.tpl',
      1 => 1554993343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5caf50c9912c26_09757331 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

	<head>
		<title>SW Tracker - Baza</title>
	</head>

	<body>
	
		<form action = '' method = 'POST'>
			Od: <input type = 'text' name = 'from'> Do: <input type = 'text' name = 'to'><br>
			Rozliczam: <input type = 'text' name = 'nicks'> 
			<input type = 'submit' value = 'Proccess'>
			<input type = 'hidden' name = 'action' value = 'track'>
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
		
		<?php if (isset($_smarty_tpl->tpl_vars['info']->value) && is_array($_smarty_tpl->tpl_vars['info']->value) && count($_smarty_tpl->tpl_vars['info']->value) > 0) {?>
			
			<?php
$__section_infos_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['info']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_infos_1_total = $__section_infos_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_infos'] = new Smarty_Variable(array());
if ($__section_infos_1_total !== 0) {
for ($__section_infos_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_infos']->value['index'] = 0; $__section_infos_1_iteration <= $__section_infos_1_total; $__section_infos_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_infos']->value['index']++){
?>
				- <?php echo $_smarty_tpl->tpl_vars['info']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_infos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_infos']->value['index'] : null)]['author'];?>
: <a href = '<?php echo $_smarty_tpl->tpl_vars['info']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_infos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_infos']->value['index'] : null)]['link'];?>
' target = '_blank'><?php echo $_smarty_tpl->tpl_vars['info']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_infos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_infos']->value['index'] : null)]['link'];?>
</a><br>
			<?php
}
}
?>
			
		<?php }?>
		<br>
		<br>
		<a href = '<?php echo $_smarty_tpl->tpl_vars['MAIN_URL']->value;?>
logout'>Wyloguj sie</a>

	</body>
	
</html><?php }
}
