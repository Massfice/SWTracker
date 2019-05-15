<?php
/* Smarty version 3.1.33, created on 2019-05-09 14:22:21
  from 'G:\Programs\xampp\htdocs\myProjects\SWTracker\amelia\app\views\0.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd41b7dbdfa18_35291302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08f0fd114d005ef4287b66357db33d76fc2662af' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\SWTracker\\amelia\\app\\views\\0.tpl',
      1 => 1557403892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd41b7dbdfa18_35291302 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<hmtl>

	<head>
	
		<title>SW Helper</title>
		
		
		<?php echo '<script'; ?>
 type='text/javascript'>
		
			function redirectMessage(message,redirect) {
				window.alert(message);
				window.location.href = redirect;
			}
		
		<?php echo '</script'; ?>
>
		
	
	</head>
	
	<body>
		
		<?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[0]).('/up.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		<br><br>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17051717135cd41b7dbd0012_71411053', 0);
?>

		<br><br>
		<?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[0]).('/down.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		
			<?php if (isset($_smarty_tpl->tpl_vars['funcs']->value) && is_array($_smarty_tpl->tpl_vars['funcs']->value)) {?>
			<?php echo '<script'; ?>
 type='text/javascript'>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['funcs']->value, 'f');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
?>
					<?php echo $_smarty_tpl->tpl_vars['f']->value;?>

				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php echo '</script'; ?>
>
			<?php }?>
		
		
	</body>

</html><?php }
/* {block 0} */
class Block_17051717135cd41b7dbd0012_71411053 extends Smarty_Internal_Block
{
public $subBlocks = array (
  0 => 
  array (
    0 => 'Block_17051717135cd41b7dbd0012_71411053',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<br><br>	
		<?php
}
}
/* {/block 0} */
}
