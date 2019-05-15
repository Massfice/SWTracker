<?php
/* Smarty version 3.1.33, created on 2019-05-11 00:07:06
  from 'G:\Programs\xampp\htdocs\myProjects\SWTracker\amelia\app\views\3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd5f60a7e8575_93071418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7174743212d1804ff733fe89d4c3bf6c3c6a49f' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\SWTracker\\amelia\\app\\views\\3.tpl',
      1 => 1555242682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd5f60a7e8575_93071418 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21117743955cd5f60a7dc9f6_06200266', 2);
}
/* {block 2} */
class Block_21117743955cd5f60a7dc9f6_06200266 extends Smarty_Internal_Block
{
public $subBlocks = array (
  2 => 
  array (
    0 => 'Block_21117743955cd5f60a7dc9f6_06200266',
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
