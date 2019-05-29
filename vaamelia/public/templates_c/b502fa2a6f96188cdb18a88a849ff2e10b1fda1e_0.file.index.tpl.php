<?php
/* Smarty version 3.1.33, created on 2019-05-29 14:25:16
  from 'G:\Programs\xampp\htdocs\myProjects\SWTracker\vaamelia\app\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cee7a2cc96d29_09562591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b502fa2a6f96188cdb18a88a849ff2e10b1fda1e' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\SWTracker\\vaamelia\\app\\views\\index.tpl',
      1 => 1559132715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cee7a2cc96d29_09562591 (Smarty_Internal_Template $_smarty_tpl) {
?><hmtl>

	<head>
	
		<title>SW Helper</title>
		
		<?php echo '<script'; ?>
 'text/javascript' src = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/js/core/getVar.js'><?php echo '</script'; ?>
>
		
		<?php echo '<script'; ?>
 type = 'text/javascript' src = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/js/usage/funcs.js'><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type = 'text/javascript' src = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/js/core/default_show_funcs.js'><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type = 'text/javascript' src = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/js/usage/show_funcs.js'><?php echo '</script'; ?>
>
		
		<?php echo '<script'; ?>
 type = 'text/javascript'>
			var sid = '<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
';
			var full_url = '<?php echo $_smarty_tpl->tpl_vars['full_url']->value;?>
';
			var action = '<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
';
		<?php echo '</script'; ?>
>
		
		<?php echo '<script'; ?>
 type = 'text/javascript' src = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/js/core/consts.js'><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type = 'text/javascript' src = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/js/core/Route.class.js'><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type = 'text/javascript' src = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/js/usage/routing.js'><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type = 'text/javascript' src = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/js/core/exec.js'><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type = 'text/javascript' src = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/js/core/go.js'><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type = 'text/javascript' src = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/js/core/initialize.js'><?php echo '</script'; ?>
>
	
	</head>
	
	<body onload = 'initialize()'>
		<x id = '0'>
		
		
		
		</x>
	</body>

</html><?php }
}
