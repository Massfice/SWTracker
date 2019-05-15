<?php
/* Smarty version 3.1.33, created on 2019-05-13 23:40:33
  from 'G:\Programs\xampp\htdocs\myProjects\SWTracker\vaamelia\app\views\3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd9e4510ed757_29533817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22cca00151624483ecba1594613ba37f284bb70e' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\SWTracker\\vaamelia\\app\\views\\3.tpl',
      1 => 1555242682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd9e4510ed757_29533817 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2935302035cd9e4510e1bd8_99961260', 2);
}
/* {block 2} */
class Block_2935302035cd9e4510e1bd8_99961260 extends Smarty_Internal_Block
{
public $subBlocks = array (
  2 => 
  array (
    0 => 'Block_2935302035cd9e4510e1bd8_99961260',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	
	<?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[3]).('/up.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<br><br><br><br>
	<?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[3]).('/down.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		
<?php
}
}
/* {/block 2} */
}
