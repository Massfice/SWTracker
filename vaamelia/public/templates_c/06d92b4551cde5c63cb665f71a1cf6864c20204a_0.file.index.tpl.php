<?php
/* Smarty version 3.1.33, created on 2019-06-05 00:20:11
  from 'G:\Programs\x\xampp\htdocs\myProjects\SWTracker\vaamelia\app\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf6ee9ba4ea28_50443379',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06d92b4551cde5c63cb665f71a1cf6864c20204a' => 
    array (
      0 => 'G:\\Programs\\x\\xampp\\htdocs\\myProjects\\SWTracker\\vaamelia\\app\\views\\index.tpl',
      1 => 1559686809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:usage/head.tpl' => 1,
    'file:usage/body_up.tpl' => 1,
    'file:usage/body_down.tpl' => 1,
  ),
),false)) {
function content_5cf6ee9ba4ea28_50443379 (Smarty_Internal_Template $_smarty_tpl) {
?><hmtl>

	<head>
	
		<?php $_smarty_tpl->_subTemplateRender('file:usage/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		
		<?php echo '<script'; ?>
 'text/javascript' src = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/js/core/on_exist.js'><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 'text/javascript' src = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/js/core/getVar.js'><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 'text/javascript' src = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/js/core/waiting.js'><?php echo '</script'; ?>
>
		
		<?php echo '<script'; ?>
 type = 'text/javascript' src = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/js/usage/funcs.js'><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type = 'text/javascript' src = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/js/usage/init.js'><?php echo '</script'; ?>
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
/js/core/route_settings.js'><?php echo '</script'; ?>
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
		<?php $_smarty_tpl->_subTemplateRender('file:usage/body_up.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<x id = '0'>
		
		
		
		</x>
		<?php $_smarty_tpl->_subTemplateRender('file:usage/body_down.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</body>

</html><?php }
}
