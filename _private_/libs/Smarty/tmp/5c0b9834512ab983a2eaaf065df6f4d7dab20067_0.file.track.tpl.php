<?php
/* Smarty version 3.1.33, created on 2019-04-12 00:38:27
  from 'G:\Programs\xampp\htdocs\myProjects\SWTracker\_private_\libs\Smarty\views\0\1\2\track.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cafc1e3cc6d12_05733462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c0b9834512ab983a2eaaf065df6f4d7dab20067' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\SWTracker\\_private_\\libs\\Smarty\\views\\0\\1\\2\\track.tpl',
      1 => 1555022299,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cafc1e3cc6d12_05733462 (Smarty_Internal_Template $_smarty_tpl) {
?><form action = '' method = 'POST'>
	Od: <input type = 'text' name = 'from'> Do: <input type = 'text' name = 'to'><br>
	Rozliczam: <input type = 'text' name = 'nicks'> 
	<input type = 'submit' value = 'Proccess'>
	<input type = 'hidden' name = 'action' value = 'track'>
</form>
		
<?php if (isset($_smarty_tpl->tpl_vars['tpl']->value[2]['params']['error']) && is_array($_smarty_tpl->tpl_vars['tpl']->value[2]['params']['error']) && count($_smarty_tpl->tpl_vars['tpl']->value[2]['params']['error']) > 0) {?>
			
	<b>### BLEDY ###</b><br>
			
	<?php
$__section_errors_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['tpl']->value[2]['params']['error']) ? count($_loop) : max(0, (int) $_loop));
$__section_errors_0_total = $__section_errors_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_errors'] = new Smarty_Variable(array());
if ($__section_errors_0_total !== 0) {
for ($__section_errors_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_errors']->value['index'] = 0; $__section_errors_0_iteration <= $__section_errors_0_total; $__section_errors_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_errors']->value['index']++){
?>
		- <?php echo $_smarty_tpl->tpl_vars['tpl']->value[2]['params']['error'][(isset($_smarty_tpl->tpl_vars['__smarty_section_errors']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_errors']->value['index'] : null)];?>
 <br>
	<?php
}
}
?>
			
<?php }?>
		
<?php if (isset($_smarty_tpl->tpl_vars['tpl']->value[2]['params']['info']) && is_array($_smarty_tpl->tpl_vars['tpl']->value[2]['params']['info']) && count($_smarty_tpl->tpl_vars['tpl']->value[2]['params']['info']) > 0) {?>
			
	<?php
$__section_infos_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['tpl']->value[2]['params']['info']) ? count($_loop) : max(0, (int) $_loop));
$__section_infos_1_total = $__section_infos_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_infos'] = new Smarty_Variable(array());
if ($__section_infos_1_total !== 0) {
for ($__section_infos_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_infos']->value['index'] = 0; $__section_infos_1_iteration <= $__section_infos_1_total; $__section_infos_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_infos']->value['index']++){
?>
		- <?php echo $_smarty_tpl->tpl_vars['tpl']->value[2]['params']['info'][(isset($_smarty_tpl->tpl_vars['__smarty_section_infos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_infos']->value['index'] : null)]['author'];?>
: <a href = '<?php echo $_smarty_tpl->tpl_vars['tpl']->value[2]['params']['info'][(isset($_smarty_tpl->tpl_vars['__smarty_section_infos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_infos']->value['index'] : null)]['link'];?>
' target = '_blank'><?php echo $_smarty_tpl->tpl_vars['tpl']->value[2]['params']['info'][(isset($_smarty_tpl->tpl_vars['__smarty_section_infos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_infos']->value['index'] : null)]['link'];?>
</a><br>
	<?php
}
}
?>
			
<?php }?>
<br>
<br><?php }
}
