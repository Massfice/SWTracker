<?php
/* Smarty version 3.1.33, created on 2019-04-11 16:35:47
  from 'G:\Programs\xampp\htdocs\myProjects\SWTracker\_private_\libs\Smarty\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5caf50c32fe718_97698375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95b75d8fbd1e5a4e3204e71fd13136386eef42d6' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\SWTracker\\_private_\\libs\\Smarty\\views\\index.tpl',
      1 => 1554993344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:login.tpl' => 1,
  ),
),false)) {
function content_5caf50c32fe718_97698375 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
	<head>
		<title>SW Tracker</title>
	</head>
	
	<body>
		<?php if (isset($_smarty_tpl->tpl_vars['name']->value)) {?>
			Witamy <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
, przejdz do swojej bazy: <a href = '<?php echo $_smarty_tpl->tpl_vars['MAIN_URL']->value;?>
track'>klik</a>
		<?php } else { ?>
			<?php $_smarty_tpl->_subTemplateRender('file:login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php }?>
	</body>
	
</html><?php }
}
