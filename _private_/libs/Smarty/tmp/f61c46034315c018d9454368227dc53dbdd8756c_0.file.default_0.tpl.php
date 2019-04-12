<?php
/* Smarty version 3.1.33, created on 2019-04-12 08:58:35
  from 'G:\Programs\xampp\htdocs\myProjects\SWTracker\_private_\libs\Smarty\views\0\default_0.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb0371bad0633_98703631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f61c46034315c018d9454368227dc53dbdd8756c' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\SWTracker\\_private_\\libs\\Smarty\\views\\0\\default_0.tpl',
      1 => 1555052314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:0/1/login.tpl' => 1,
  ),
),false)) {
function content_5cb0371bad0633_98703631 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
	<head>
		<title>SW Tracker</title>
	</head>
	
	<body>
		<center>
			<b><font size="6">SW Tracker</font></b><br><br>
			<?php if (isset($_smarty_tpl->tpl_vars['tpl']->value[0]['params']['name'])) {?>
				Zalogowany jako: <b><?php echo $_smarty_tpl->tpl_vars['tpl']->value[0]['params']['name'];?>
.</b><br>
			<?php } else { ?>
				<?php if ($_smarty_tpl->tpl_vars['tpl']->value[0]['params']['b']) {?>
					<?php $_smarty_tpl->_subTemplateRender('file:0/1/login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php }?>
			<?php }?>
			<a href = '<?php echo $_smarty_tpl->tpl_vars['MAIN_URL']->value;?>
'>Start</a> --- <a href  = '<?php echo $_smarty_tpl->tpl_vars['MAIN_URL']->value;?>
home'>Home</a>
			<br>
			-----------------------------------------------------------------------------------------------------<br>
		
			<br>
			<br>
			<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['tpl']->value[1]['file'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
			<br>
			<br>
		
			-----------------------------------------------------------------------------------------------------<br>
			Created by <?php echo $_smarty_tpl->tpl_vars['AUTHOR']->value;?>
.
		</center>
	</body>
</html><?php }
}
